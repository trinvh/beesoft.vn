<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Beesoft - Login</title>
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
<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
    <form action="" method="post" class="j-forms" id="forms-login" novalidate>
        <div class="login-form-header">
            <div class="logo">
                <h4>BEESOFT DASHBOARD</h4>
            </div>
        </div>
        @include('backend.messages')
        {!! csrf_field() !!}
        <div class="login-form-content">
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="email" id="login" name="login" placeholder="Email">
                </div>
            </div>
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
                        <span class="hint">
                            <a href="#" class="link">Forgot password?</a>
                        </span>
                </div>
            </div>
            <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                </label>
            </div>
            <div class="response"></div>
        </div>
        <div class="login-form-footer">
            <button type="submit" class="btn-block btn btn-primary">Đăng nhập</button>
        </div>

    </form>
</div>
</div>
</div>
<!--Footer Start Here -->
<footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta">Created with <i class="fa fa-heart"></i> by <a href="http://trinvh.com">trinvh</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
<script src="/assets/admin/js/lib/jquery.js"></script>
<script src="/assets/admin/js/lib/jquery-migrate.js"></script>
<script src="/assets/admin/js/lib/bootstrap.js"></script>
<script src="/assets/admin/js/lib/jRespond.js"></script>
<script src="/assets/admin/js/lib/hammerjs.js"></script>
<script src="/assets/admin/js/lib/jquery.hammer.js"></script>
<script src="/assets/admin/js/lib/smoothscroll.js"></script>
<script src="/assets/admin/js/lib/smart-resize.js"></script>
</body>
</html>