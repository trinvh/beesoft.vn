process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function(mix) {
    mix.styles([
    	'./public/assets/css/bootstrap.min.css',
    	'./public/assets/css/jasny-bootstrap.min.css',
    	'./public/assets/js/owl-carousel2/css/owl.carousel.min.css',
    	'./public/assets/js/owl-carousel2/css/owl.theme.default.min.css',
    	'./public/assets/css/navbar-ms.css',
    	'./public/assets/css/animate.min.css',
    	'./public/assets/css/app.css'
    ], 'public/assets/css/app.min.css');
    mix.scripts([
    	'./public/assets/js/jquery.min.js',
    	'./public/assets/js/bootstrap.min.js',
    	'./public/assets/js/jasny-bootstrap.min.js',
    	'./public/assets/js/owl-carousel2/owl.carousel.min.js'
    ], 'public/assets/js/app.min.js');
});
