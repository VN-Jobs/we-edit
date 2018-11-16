<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <link rel="shortcut icon" href="favicon.png"  type="image/png" sizes="30x30" />
    <link rel="icon" href="/favicon.png" type="image/x-icon">
    <meta name="description" content="{{ isset($description) ? $description : ($configs['description'][0] ?? null) }}">
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : ($configs['keywords'][0] ?? null) }}">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{ isset($heading) ? $heading : ($configs['name'][0] ?? null) }}" />
    <meta property="og:type"   content="website" />
    <meta property="og:title"  content="{{ isset($heading) ? $heading : ($configs['name'][0] ?? null) }}" />
    <meta property="og:description"  content="{{ isset($description) ? $description : ($configs['description'][0] ?? null) }}" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

        <a href="#site-body" id="back-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
     </div>
    <script>
        var flickerConfigs = {
            baseUrl: '{{ config("common.flicker.base_url") }}',
            apiKey: '{{ config("common.flicker.api_key") }}',
            photoSetID: '{{ config("common.flicker.photo_setid") }}',
        };
    </script>
    {{ Html::script(mix('/assets/js/frontend.js')) }}
    @stack('prescripts')
    @if (env('GA_TRACKING_ID'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA_TRACKING_ID') }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', "{{ env('GA_TRACKING_ID') }}");
    </script>
    @endif
</body>
</html>
