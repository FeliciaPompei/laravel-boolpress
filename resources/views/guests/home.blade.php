<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HomePage</title>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js')}}"></script>

    {{-- Font awesome --}}

    <script defer src="/your-path-to-fontawesome/js/brands.js"></script>
    <script defer src="/your-path-to-fontawesome/js/solid.js"></script>
    <script defer src="/your-path-to-fontawesome/js/fontawesome.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="root"></div>

<script src="{{ asset('js/front.js') }}" ></script>
</body>
</html>

