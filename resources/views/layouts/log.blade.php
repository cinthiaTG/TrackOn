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
.nav-link.active {
    position: relative;
    color:rgb(2, 2, 2);
    font-weight: bold; 
}

.nav-link.active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%; 
    height: 3px; 
    background-color: #ec685a;
}



    </style>
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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('transportistas.dashboard') }}">TrackOn</a>


        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <!-- Enlaces centrados -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('transportistas.dashboard') ? 'active' : '' }}" href="{{ route('transportistas.dashboard') }}">Dash</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('transportistas.viajes') ? 'active' : '' }}" href="{{ route('transportistas.viajes') }}">Tus Viajes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('transportistas.pedidos') ? 'active' : '' }}" href="{{ route('transportistas.pedidos') }}">Pedidos Disponibles</a>
                </li>
            </ul>
        </div>

        <!-- Perfil a la derecha -->
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#FFD700" stroke-linecap="round" stroke-linejoin="round" width="36" height="36" stroke-width="2.5"> 
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path> 
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path> 
                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path> 
                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path> 
                    </svg> -->
                </li>
                <li class="nav-item dropdown">
                    @auth
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @endauth

                    @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endguest
                </li>
            </ul>
        </div>

    </div>
</nav>


    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>

</body>

</html>
