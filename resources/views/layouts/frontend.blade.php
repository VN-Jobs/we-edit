<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.png"  type="image/png" sizes="30x30" />

    <title>@yield('title')</title>

    <!-- Styles -->
    {{ Html::style(mix('/assets/css/frontend/app.css')) }}
    @stack('prestyles')
</head>
<body id="site-body" class="homepage offcanvas-init">
    <div class="site-wrapper">
        <div class="site-overlay"></div>
        @include('frontend._partials.header')

        @yield('page-content')

        @include('frontend._partials.footer')

        <div class="preeloader" style="display: none;">
            <div class="preloader-spinner">
                <img src="assets/img/preloader.gif" alt="">
            </div>
        </div>

        <!-- <div id="site-options">
            <a href="#" id="fullscreen" class="option-item"></a>
        </div> -->

        <a href="#site-body" id="back-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
     </div>
    <script>
        var flickerConfigs = {
            apiKey: 'ea4b187f74544e743e5a558bca48a807',
            photoSetID: '72157701668245731'
        };
    </script>
    {{ Html::script(mix('/assets/js/frontend.js')) }}
    @stack('prescripts')
</body>
</html>
