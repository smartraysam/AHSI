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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{ asset('css/elegant-fonts.css') }}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">

        <header class="site-header">
            <div class="top-header-bar">
                <div class="container">
                    <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                        <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email">
                                MAIL: <a href="#">contact@ourcharity.com</a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text">
                                <p>PHONE: <span>+24 3772 120 091 / +56452 4567</span></p>
                            </div><!-- .header-bar-text -->
                        </div><!-- .col -->

                        <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                            <div class="donate-btn">
                                <a href="give.html">Donate Now</a>
                            </div><!-- .donate-btn -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                            <div class="site-branding d-flex align-items-center">
                               <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                            </div><!-- .site-branding -->

                            <nav class="site-navigation d-flex justify-content-end align-items-center">
                                <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="causes.html">Causes</a></li>
                                    <li><a href="portfolio.html">Gallery</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav><!-- .site-navigation -->

                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type='text/javascript' src='{{ asset('js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.collapsible.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/swiper.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.countdown.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/circle-progress.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.countTo.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.barfiller.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/custom.js') }}'></script>

</body>
</html>
