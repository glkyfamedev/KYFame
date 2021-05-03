<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KYFAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">



    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"> </script>
    <script src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/utility.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>


<body class="font-text m-0">
    <div class="min-h-screen" id="page-container">
        @include('layouts.adminNav')


        <!-- Page Content -->
        <main id="content-wrap">
            {{ $slot }}
        </main>
    </div>



    <footer class="bg-dark p-3" id="footer">
        <div class="p-2">
            <p class="text-white text-center">&copy; Copyright 2021 GLKYFAME</p>
        </div>
    </footer>


</body>

</html>
