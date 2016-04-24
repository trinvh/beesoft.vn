<?php

/*
Facebook instructions
- User get token
- Get page list : me/accounts (contains page token)
- Get conversations list: {page-id}/conversations
- Get conversation message: {conversation-id}/messages
- Reply existing conversation: {conversation-id}/messages [POST] [params:message]

*/
Route::group(['domain' => 'fb.beesoft.vn'], function () {
    Route::get('/', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
	{
	    // Send an array of permissions to request
	    $login_url = $fb->getLoginUrl(['email', 'publish_pages', 'read_page_mailboxes', 'manage_pages']);

	    // Obviously you'd do this in blade :)
	    echo '<a href="' . $login_url . '">Login with Facebook</a>';
	});

	Route::get('/facebook/callback', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
	{
	    try {
	        $token = $fb->getAccessTokenFromRedirect();
	    } catch (Facebook\Exceptions\FacebookSDKException $e) {
	        dd($e->getMessage());
	    }

	    // Access token will be null if the user denied the request
	    // or if someone just hit this URL outside of the OAuth flow.
	    if (! $token) {
	        // Get the redirect helper
	        $helper = $fb->getRedirectLoginHelper();

	        if (! $helper->getError()) {
	            abort(403, 'Unauthorized action.');
	        }
	        dd(
	            $helper->getError(),
	            $helper->getErrorCode(),
	            $helper->getErrorReason(),
	            $helper->getErrorDescription()
	        );
	    }

	    if (! $token->isLongLived()) {
	        $oauth_client = $fb->getOAuth2Client();
	        try {
	            $token = $oauth_client->getLongLivedAccessToken($token);
	        } catch (Facebook\Exceptions\FacebookSDKException $e) {
	            dd($e->getMessage());
	        }
	    }

	    $fb->setDefaultAccessToken($token);

	    Session::put('fb_user_access_token', (string) $token);
	    try {
	        $response = $fb->get('/me/accounts');
	        $pages = $response->getGraphEdge()->asArray();
	        return view('fb.pages')->withPages($pages);
	    } catch (Facebook\Exceptions\FacebookSDKException $e) {
	        dd($e->getMessage());
	    }

	    return redirect('/')->with('message', 'Successfully logged in with Facebook');
	});
});

Route::get('fb', function() {
	return $_GET['hub_challenge'];
});

Route::post('fb', function() {
	Log::info('app.requests', ['request' => \Request::all()]);
});

Route::controller('lazada', 'LazadaController');
Route::group(['prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
	], function()
{
	Navbar::make('sidenavbar', function($menu){
		$menu->add(trans('menu.intro'), LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), '/'));
		$menu->add(trans('menu.services'), LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'dich-vu.html'));
		$menu->add(trans('menu.products'), LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'san-pham.html'));
		$menu->add(trans('menu.contact'),  LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'lien-he.html'));
	});
    Route::get('/', function () {
	    return view('frontend.home');
	});
	Route::get('san-pham.html', function() {
		return view('frontend.products');
	});

	Route::get('{page}.html', 'PageController@getPage');

});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin',
		'middleware' => ['roles']], function() {
	Route::get('/', function() { return view('backend.dashboard'); });
	Route::resource('page', 'PageController');
});

Route::controller('admin/auth', 'Admin\AuthController');

