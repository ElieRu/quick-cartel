<!DOCTYPE html>
<html data-bs-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Market Place</title>
    <!-- @vite(['resources/js/app/app.js', 'resources/css/app.css']) -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/fonts/fontawesome-all.min.css') }} ">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/css/bs-theme-overrides.css') }} ">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/css/styles.css') }}">
</head>

<body>
    <div id="app"></div>
</body>
<!-- <script src="{{ Vite::asset('resources/css/bootstrap/js/bootstrap.min.js') "></script> -->
<!-- <script src="{{ Vite::asset('resources/css/js/bs-init.js') "></script> -->
</html>