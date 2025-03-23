<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TrackOn</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('css')

    <style>

    /* Navbar */
    .navbar {
        padding: 15px 0;
    }

    .navbar-brand{
        font-size: 1.7rem;
        font-weight: 600; 
    }
    </style>
</head>


<body>
<div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">TrackOn</a>
    </div>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>

</body>

</html>
