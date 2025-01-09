<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GUISER') }}</title>

        <!-- favicon ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/logo/favicon.ico') }}">
        <!-- Google Fonts ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
        <!-- main CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
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
        <!-- forms CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/form/all-type-forms.css') }}">
        <!-- style CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/style.css') }}">
        <!-- responsive CSS ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
        <!-- modernizr JS ============================================ -->
        <script src="{{ asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <div class="error-pagewrap">
            <div class="error-page-int">
                <div class="text-center m-b-md custom-login">
                    <img src="{{ asset('public/logo/guiser.svg') }}" alt="" class="img-circle" width="100" height="100">
                    <h3>{{ $title }}</h3>
                    <p>{{ $description }}</p>
                </div>
                <div class="content-error">
                    <div class="hpanel">
                        <div class="panel-body">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                <div class="text-center login-footer">
                    <p>Copyright © {{ date('Y') }}. @lang('locale.all_rights_reserved'). @lang('locale.designed_by') <a href="https://yk.jss-gn.com">KEITA Yamoussa</a></p>
                </div>
            </div>   
        </div>

        <!-- jquery
		============================================ -->
        <script src="{{ asset('public/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('public/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('public/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('public/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('public/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('public/js/jquery.scrollUp.min.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('public/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('public/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('public/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('public/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{ asset('public/js/tab.js') }}"></script>
        <!-- icheck JS
            ============================================ -->
        <script src="{{ asset('public/js/icheck/icheck.min.js') }}"></script>
        <script src="{{ asset('public/js/icheck/icheck-active.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('public/js/plugins.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('public/js/main.js') }}"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{ asset('public/js/tawk-chat.js') }}"></script>
        <script src="{{ asset('public/js/authx.js') }}"></script>
    </body>
</html>
