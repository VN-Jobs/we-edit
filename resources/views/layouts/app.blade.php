<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>We-Edit Site</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/backend/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/backend/login.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/backend.js') }}"></script>
</body>
</html>
