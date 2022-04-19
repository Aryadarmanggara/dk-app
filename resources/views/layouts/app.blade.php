<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Desa Keramas | Login') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend')}}//images/favicon.png">
    <link href="{{asset('backend')}}/css/style.css" rel="stylesheet">
</head>

<body>
    @yield('content');
</body>

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{asset('backend')}}/vendor/global/global.min.js"></script>
<script src="{{asset('backend')}}/js/quixnav-init.js"></script>
<script src="{{asset('backend')}}/js/custom.min.js"></script>

</html>