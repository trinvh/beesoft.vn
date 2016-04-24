<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>BEESOFT DASHBOARD</title>
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/animate.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/layout.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/components.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/widgets.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/pages.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/common.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/responsive.css">
</head>

<body class="leftbar-view">
    <header class="topbar clearfix">
        <div class="topbar-left pull-left">
            <div class="clearfix">
                <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                    <li>
                        <div class="logo">
                            <a href="{{ url('') }}" title="Beesoft Co. Ltd,">BEESOFT Co. Ltd,</a>
                        </div>
                    </li>
                </ul>
                <ul class="branding-right pull-right">
                    <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
                    <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>
                </ul>
            </div>
        </div>
        <!--Topbar Left Branding With Logo End-->
        <!--Topbar Right Start-->
        <div class="topbar-right pull-right">
            <div class="clearfix">
                <!--Mobile View Leftbar Toggle-->
                <ul class="left-bar-switch pull-left">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                </ul>
                <ul class="pull-right top-right-icons">
                    <li><a href="#" class="right-toggle-switch"><i class="zmdi zmdi-format-align-left"></i><span class="more-noty"></span></a></li>
                </ul>
            </div>
        </div>
        <!--Topbar Right End-->
    </header>
    <!--Topbar End Here-->
    <!--Leftbar Start Here-->
    <aside class="leftbar">
        <div class="left-aside-container">
            <div class="user-profile-container">
                <div class="user-profile clearfix">
                    <div class="admin-user-thumb">
                        <img src="{{ Auth::user()->gravatar }}" alt="admin">
                    </div>
                    <div class="admin-user-info">
                        <ul>
                            <li><a href="#">{{ Auth::user()->name }}</a></li>
                            <li><a href="#">{{ Auth::user()->email }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="admin-bar">
                    <ul>
                        <li><a href="/admin/auth/signout"><i class="zmdi zmdi-power"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-account"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                    </ul>
                </div>
            </div>
            <ul class="list-accordion tree-style">
                <li>
                    <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Quản lý trang</span></a>
                    <ul>
                        <li><a href="{{ route('admin.page.create') }}">Thêm trang mới</a></li>
                        <li><a href="{{ route('admin.page.index') }}">Danh sách trang</a></li>
                    </ul>
                </li>
                <li class="list-title">Bài viết - Blogs</li>
                <li>
                    <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Bài viết</span></a>
                    <ul>
                        <li><a href="boxed-layout.html">Thêm bài mới</a></li>
                        <li><a href="iconic-view.html">Danh sách bài viết</a></li>
                        <li><a href="material-style-leftbar.html">Bài đang ẩn</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Thể loại</span></a>
                    <ul>
                        <li><a href="boxed-layout.html">Thêm thể loại mới mới</a></li>
                        <li><a href="iconic-view.html">Danh sách thể loại</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!--Leftbar End Here-->
    <!--Page Container Start Here-->
    <section class="main-container">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!--Footer Start Here -->
        <footer class="footer-container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-left">
                            <span>© {{ date('Y') }} <strong>Beesoft Co. Ltd,</strong></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-right">
                            <span class="footer-meta">Created with <i class="fa fa-heart"></i> by <a href="http://trinvh.com">trinvh</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End Here -->
    </section>
    <!--Page Container End Here-->
    <script src="/assets/admin/js/lib/jquery.js"></script>
    <script src="/assets/admin/js/lib/jquery-migrate.js"></script>
    <script src="/assets/admin/js/lib/bootstrap.js"></script>
    <script src="/assets/admin/js/lib/jquery.ui.js"></script>
    <script src="/assets/admin/js/lib/jRespond.js"></script>
    <script src="/assets/admin/js/lib/nav.accordion.js"></script>
    <script src="/assets/admin/js/lib/hover.intent.js"></script>
    <script src="/assets/admin/js/lib/hammerjs.js"></script>
    <script src="/assets/admin/js/lib/jquery.hammer.js"></script>
    <script src="/assets/admin/js/lib/jquery.fitvids.js"></script>
    <script src="/assets/admin/js/lib/scrollup.js"></script>
    <script src="/assets/admin/js/lib/smoothscroll.js"></script>
    <script src="/assets/admin/js/lib/jquery.slimscroll.js"></script>
    <script src="/assets/admin/js/lib/velocity.js"></script>
    <script src="/assets/admin/js/lib/jquery-jvectormap.js"></script>
    <script src="/assets/admin/js/lib/jquery-jvectormap-world-mill.js"></script>
    <script src="/assets/admin/js/lib/jquery-jvectormap-us-aea.js"></script>
    <script src="/assets/admin/js/lib/smart-resize.js"></script>
    <!--iCheck-->
    <script src="/assets/admin/js/lib/icheck.js"></script>
    <script src="/assets/admin/js/lib/jquery.switch.button.js"></script>
    <script src="/assets/admin/js/lib/bootbox.js"></script>
    <script src="/assets/admin/js/lib/jquery.noty.js"></script>
    <script src="/assets/admin/js/lib/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    fixIndentation = function(content) {
        content = content.replace(/ /g, "&nbsp;");
        content = content.replace(/\t/g, '&nbsp;&nbsp;&nbsp;&nbsp;');
        return content;
    };
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern imagetools"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        file_browser_callback : elFinderBrowser,
        entity_encoding : "raw",
        paste_preprocess: function(plugin, args) {
            args.content = fixIndentation(args.content);
        }
    });
    function elFinderBrowser (field_name, url, type, win) {
      tinymce.activeEditor.windowManager.open({
        file: 'http://trinvh.com/elfinder/tinymce4',// use an absolute path!
        title: 'elFinder 2.0',
        width: 900,
        height: 450,
        resizable: 'yes'
      }, {
        setUrl: function (url) {
          win.document.getElementById(field_name).value = url;
        }
      });
      return false;
    }
    </script>
    <!--Forms-->
    <script src="/assets/admin/js/lib/jquery.form.js"></script>
    <script src="/assets/admin/js/lib/j-forms.js"></script>
    <script src="/assets/admin/js/apps.js"></script>
    @yield('footer')
</body>

</html>
