@if(!Request::ajax())
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Beesoft Software : Software Development Company, Vietnam</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/assets/js/owl-carousel2/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/js/owl-carousel2/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/css/navbar-ms.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- <link href="/assets/css/app.min.css" rel="stylesheet"> -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
      <a class="navmenu-brand visible-md visible-lg" href="/">
      	<img class="logo" src="/assets/img/logo.png" alt="Outsourcing company in Vietnam" />
      </a>
      <ul class="languages">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
        <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
        {{{ $properties['native'] }}}
        </a>
        </li>
        @endforeach
      </ul>
      {!! $sidenavbar->asUl(array('class' => 'nav navmenu-nav')) !!}
      <footer class="footer">
          <div class="copyright">© Copyright 2015 | Beesoft Co., Ltd. <br> All rights reserved</div>
      </footer>
    </div>

    <div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div class="container">
      <ul id="head-menu">
        <li><a href="">Design<small>Trendy & Responsive</small></a></li>
        <li><a href="">Development<small>Web & Mobile application</small></a></li>
        <li class="brand">
          <!-- <a href="">MISANET<small>advancing technology</small></a> -->
          <a href="">
            <div class="misa">
              <div class="misa-alt">
                <p>MS</p>
                <ul>
                  <li>advancing</li>
                  <li>professional</li>
                  <li>hard work</li>
                </ul>
              </div>
            </div>
          </a>
        </li>
        <li><a href="">Blog<small>News & Ideas</small></a></li>
        <li><a href="">Know QC<small>Who - What - How</small></a></li>
      </ul>
      <div id="main-page">
@endif
        @yield('content')
@if(!Request::ajax())
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/assets/js/jasny-bootstrap.min.js"></script>
    <script src="/assets/js/owl-carousel2/owl.carousel.min.js"></script>
    <!-- <script src="/assets/js/app.min.js"></script>-->
    <script>
      $(document).ready(function() {
        $('#main-page').addClass('animated').addClass('bounceInRight');
        $('body').addClass('loaded');
        $('.home-featured .col-lg-3').hover(function() {
          $(this).find('h4').addClass('shine');
        }, function() {
          $(this).find('h4').removeClass('shine');
        });
        $('.owl-carousel').owlCarousel({
		    animateOut: 'slideOutDown',
		    animateIn: 'flipInX',
		    items:1,
		    smartSpeed:450,
		    autoplay:true,
		    autoplayTimeout:4000,
		    autoplayHoverPause:true,
		    loop: true
		  });
      });
    </script>
    @yield('footer')
  </body>
</html>
@endif