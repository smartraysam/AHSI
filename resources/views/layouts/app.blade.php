<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title')</title>
        <!-- Scripts -->


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

        <!-- ElegantFonts CSS -->
        <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">

        <!-- themify-icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('js/jqvmap/jqvmap.min.css') }}">


        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">


        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">

        <link rel="stylesheet" href="{{ asset('js/daterangepicker/daterangepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div id="app">
                @include('theme.adminnav')
                @include('theme.sidebar')
                <main class="py-4">
                    @yield('content')
                </main>
                @include('theme.adminfooter')
            </div>
        </div>


        <script type='text/javascript' src=" {{ asset('js/jquery.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>

        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script type='text/javascript' src="{{ asset('js/bootstrap.bundle.min.js') }}">
        </script>
        <script type='text/javascript' src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/adminlte.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/Chart.min.js') }}"></script>
        <!-- <script type='text/javascript' src="{{ asset('js/sparkline.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jqvmap/jquery.vmap.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jqvmap/maps/jquery.vmap.usa.js') }}"></script> -->

        <script type='text/javascript' src="{{ asset('js/dashboard.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/demo.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/moment/moment.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/summernote/summernote-bs4.min.js') }}"></script>

        <script type='text/javascript' src="{{ asset('js/jquery.knob.min.js') }}"></script>

        <script type='text/javascript' src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>

    </body>

</html>
