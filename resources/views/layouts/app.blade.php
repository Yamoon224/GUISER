<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>{{ config('app.name', 'GUISER') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/logo/favicon.ico') }}">

        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.transitions.css') }}">
        <!-- animate CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
        <!-- normalize CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}">
        <!-- meanmenu icon CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/meanmenu.min.css') }}">
        <!-- main CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
        <!-- educate icon CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/educate-custon-icon.css') }}">
        <!-- morrisjs CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/calendar/fullcalendar.print.min.css') }}">
        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/style.css') }}">
        <!-- responsive CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
        <!-- modernizr JS ============================================ -->
        <script src="{{ asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <x-left-sidebar></x-left-sidebar>

        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="{{ route('welcome') }}"><img class="main-logo" src="{{ asset('public/logo/guiser.webp') }}" alt="" width="60" height="60" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <x-header-advance-area></x-header-advance-area>
            
            {{ $slot }}
            
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © {{ date('Y') }}. @lang('locale.all_rights_reserved'). @lang('locale.designed_by') <a href="https://yk.jss-gn.com">KEITA Yamoussa</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jquery ============================================ -->
        <script src="{{ asset('public/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS ============================================ -->
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <!-- wow JS ============================================ -->
        <script src="{{ asset('public/js/wow.min.js') }}"></script>
        <!-- price-slider JS ============================================ -->
        <script src="{{ asset('public/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS ============================================ -->
        <script src="{{ asset('public/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS ============================================ -->
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS ============================================ -->
        <script src="{{ asset('public/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS ============================================ -->
        <script src="{{ asset('public/js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS ============================================ -->
        <script src="{{ asset('public/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('public/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('public/js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS ============================================ -->
        <script src="{{ asset('public/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('public/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS ============================================ -->
        <script src="{{ asset('public/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('public/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS ============================================ -->
        <script src="{{ asset('public/js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ asset('public/js/morrisjs/morris.js') }}"></script>
        <script src="{{ asset('public/js/morrisjs/morris-active.js') }}"></script>
        <!-- morrisjs JS ============================================ -->
        <script src="{{ asset('public/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('public/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ asset('public/js/sparkline/sparkline-active.js') }}"></script>
        <!-- calendar JS ============================================ -->
        <script src="{{ asset('public/js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('public/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('public/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS ============================================ -->
        <script src="{{ asset('public/js/plugins.js') }}"></script>
        <!-- main JS ============================================ -->
        <script src="{{ asset('public/js/main.js') }}"></script>
        <!-- tawk chat JS ============================================ -->
        <script src="{{ asset('public/js/tawk-chat.js') }}"></script>
    </body>
</html>
