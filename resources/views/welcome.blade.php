<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>House of Bhavana</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- All CSS is here
	============================================ -->

        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/lastudioicon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/satisfy.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jarallax.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/fullpage.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.mb.ytplayer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @vite(['resources/css/app.css'])

    </head>
    <body>

    <div class="main-wrapper main-wrapper-2" id="app">
{{--        <app></app>--}}
    </div>

        <!-- All JS is here
    ============================================ -->

        <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js') }}"></script>
{{--        <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js') }}"></script>--}}
        <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/svg-inject.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/cookie.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bpopup.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/fullpage.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/mouse-parallax.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/countdown.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/resizesensor.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.mb.ytplayer.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
{{--        <script type="application/javascript" src="{{ asset('assets/js/main.js') }}" ></script>--}}
{{--    @vite(['resources/js/app.js', 'public/assets/js/main.js'])--}}
{{--    @vite(['resources/js/app.js', 'resources/js/main.js'])--}}
{{--    @vite('resources/js/main.js')--}}
    @vite(['resources/js/app.js'])
    </body>
</html>
