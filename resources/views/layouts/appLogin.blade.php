<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- ElegantFonts CSS -->
        <link rel="stylesheet" href="{{ asset('css//all.min.css') }}">

        <!-- themify-icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition login-page">
        <div id="app">

            <main class="py-4">
                @yield('content')
            </main>

        </div>

        <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/adminlte.min.js') }}"></script>

    </body>

</html>
