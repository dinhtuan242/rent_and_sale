<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Rent and Sale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/leaflet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/map.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/magnific-popup.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/skins/default.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('user/img/favicon.ico') }}" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/OpenSans.css') }}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/ie10-viewport-bug-workaround.css') }}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('user/js/ie-emulation-modes-warning.js') }}"></script>
    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>
<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"></a>
                    <a href="tel:info@themevessel.com"></a>
                </div>
            </div>
            @auth
                <ul class="nav navbar-nav navbar-right rightside-navbar" style="height: 40px;">
                    <li style="margin-top: -15px;">
                        <a href="{{ route('user.index', Auth::user()->id) }}" class="button">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                </ul>
            @endauth
            @guest
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <ul class="top-social-media pull-right">
                        <li>
                            <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-sign-in"></i> Đăng nhập</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="sign-in"><i class="fa fa-user"></i> Đăng ký</a>
                        </li>
                    </ul>
                </div>    
            </div>
                </div>    
            @endguest
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('user/img/logos/logo.png') }}" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="@if(Route::currentRouteName() == 'homepage') active @endif">
                        <a href="{{ route('homepage') }}">
                            Trang chủ
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="{{ route('property.create.get') }}" class="button">
                            Tạo mới tài sản
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
