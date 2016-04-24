<?php namespace App\Http\Controllers;

use App\Page;

class PageController extends Controller {

	public function getPage($slug) {
		$page = Page::where('slug', $slug)->first();
		if($page) {
			return view('frontend.page')
				->with('page', $page);
		}
	}
}