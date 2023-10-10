<!DOCTYPE html>
<html data-bs-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Market Place</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Croissant+One&amp;display=swap">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/fonts/fontawesome-all.min.css') }} ">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/css/bs-theme-overrides.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/css/styles.css') }}">
</head>

<body><div id="app"></div></body>
    {{-- <script src="{{ Vite::asset('resources/css/bootstrap/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ Vite::asset('resources/css/js/bs-init.js') }}"></script>
    <script src="{{ Vite::asset('resources/css/js/confetti/confetti.js') }}"></script>
    <script src="{{ Vite::asset('resources/css/js/confetti/confetti.min.js') }}"></script>
    {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}
    {{-- <script src="{{ Vite::asset('resources/css/js/popover.js') }}"></script> --}}
    {{-- <script id="bs-live-reload" data-sseport="50032" data-lastchange="1696394595390" src="{{ Vite::asset('resources/css/js/livereload.js') }}"></script> --}}
</html>