<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('fonts/line-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colo-switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sticknav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <header id="header-wrap">

                <div class="top-bar">
                <div class="container">
                <div class="row">
                <div class="col-lg-7 col-md-5 col-xs-12">

                <ul class="list-inline">
                <li><i class="lni-phone"></i> 0558489398</li>
                <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d6e686d6d726f695d7a707c7471337e7270">[email&#160;protected]</a></li>
                </ul>

                </div>
                <div class="col-lg-5 col-md-7 col-xs-12">
                <div class="roof-social float-right">
                <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                <a class="google" href="#"><i class="lni-google-plus"></i></a>
                </div>
                <div class="header-top-right float-right">
                <a href="login.html" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                <a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a>
                </div>
                </div>
                </div>
                </div>
                </div>


                <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
                <div class="container">

                <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="{{asset('img/logo.png')}}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Home
                </a>
                {{-- <div class="dropdown-menu">
                <a class="dropdown-item" href="index-2.html">Home 1</a>
                <a class="dropdown-item" href="index-3.html">Home 2</a>
                </div> --}}
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/categories">
                Categories
                </a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Listings
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/listing">Ad Grid</a>
                <a class="dropdown-item" href="/listing">Ad Listing</a>
                <a class="dropdown-item" href="/listing">Listing Detail</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/about">About Us</a>
                <a class="dropdown-item" href="/services">Services</a>
                <a class="dropdown-item" href="/adsdetail">Ads Details</a>
                <a class="dropdown-item active" href="/postads">Ads Post</a>
                <a class="dropdown-item" href="/pricing">Packages</a>
                <a class="dropdown-item" href="/faq">FAQ</a>
                <a class="dropdown-item" href="/404">404</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="/blog">Blog - Right Sidebar</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contact">
                Contact
                </a>
                </li>
                </ul>
                <div class="post-btn">
                <a class="btn btn-common" href="/postads"><i class="lni-pencil-alt"></i> Post an Ad</a>
                </div>
                </div>
                </div>

                <ul class="mobile-menu">
                <li>
                <a href="#">
                Home
                </a>
                <ul class="dropdown">
                <li><a href="/index">Home 1</a></li>
                <li><a href="/index">Home 2</a></li>
                </ul>
                </li>
                <li>
                <a href="/category">Categories</a>
                </li>
                <li>
                <a href="#">
                Listings
                </a>
                <ul class="dropdown">
                <li><a href="/listing">Ad Grid</a></li>
                <li><a href="/listing">Ad Listing</a></li>
                <li><a href="/listing">Listing Detail</a></li>
                </ul>
                </li>
                <li>
                <a class="active" href="#">Pages</a>
                <ul class="dropdown">
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="adsdetail">Ads Details</a></li>
                <li><a class="active" href="/postads">Ads Post</a></li>
                <li><a href="/pricing">Packages</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/404">404</a></li>
                </ul>
                </li>
                <li>
                <a href="#">Blog</a>
                <ul class="dropdown">
                <li><a href="/blog">Blog</a></li>
                </ul>
                </li>
                <li>
                <a href="/contact">Contact Us</a>
                </li>
                </ul>

                </nav>

            </header>

        <main>
            @yield('content')
        </main>
    </div>

    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>
        
    {{-- <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div> --}}

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
<script src="{{ asset('js/jquery-min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/color-switcher.js') }}"></script>
<script src="{{ asset('js/contact-form-script.min.js') }}"></script>
<script src="{{ asset('js/form-validator.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/summernote.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>












</body>
</html>
