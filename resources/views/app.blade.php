
<!DOCTYPE html data-bs-theme="dark" lang="en">
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Market Place</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,800&amp;display=swap">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/fonts/fontawesome-all.min.css') }} ">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/css/bs-theme-overrides.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/css/styles.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @inertiaHead
  </head>
  <body class="text-body-secondary bg-dark-subtle">
    @inertia
  </body>

      {{-- <script src="{{ Vite::asset('resources/css/bootstrap/js/bootstrap.min.js') }}"></script> --}}
      <script src="{{ Vite::asset('resources/css/js/bs-init.js') }}"></script>
      <script src="{{ Vite::asset('resources/css/js/confetti/confetti.js') }}"></script>
      <script src="{{ Vite::asset('resources/css/js/confetti/confetti.min.js') }}"></script>
      {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}
      {{-- <script src="{{ Vite::asset('resources/css/js/popover.js') }}"></script> --}}
      {{-- <script id="bs-live-reload" data-sseport="50032" data-lastchange="1696394595390" src="{{ Vite::asset('resources/css/js/livereload.js') }}"></script> --}}
  
</html>