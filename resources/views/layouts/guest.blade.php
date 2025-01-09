<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GUISER') }}</title>

        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/logo/favicon.ico') }}">
        <link rel="icon" href="{{ asset('public/logo/favicon.ico') }}" type="image/x-icon">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('public/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/custom-bs.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/fonts/line-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
        <link href="{{ asset('public/css/owl.css') }}" rel="stylesheet">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">  

        <!-- Favicon -->  
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <x-loading></x-loading>

        <div class="site-wrap">
            <x-site-navbar></x-site-navbar>

            <x-main-footer></x-main-footer>
        </div>

        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('public/js/venobox.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('public/js/owl.js') }}"></script>
        <script src="{{ asset('public/js/custom.js') }}"></script>
        <script src="{{ asset('public/js/scroll.js') }}"></script>
        <script src="{{ asset('public/js/particles.min.js') }}"></script>
        <script src="{{ asset('public/js/app.js') }}"></script>
    </body>
</html>
