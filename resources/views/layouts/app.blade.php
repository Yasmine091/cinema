<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-lgray text-dblue">
    <div id="app">

        <div class="fixed-top">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
            </div>

            <nav class="navbar navbar-expand-md bg-lblue text-dblue shadow-sm font-weight-bolder">
                <div class="container">
                    <a class="navbar-brand text-dblue" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler border-dblue" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon text-dblue">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="nav-link text-dblue" href="">Accueil</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-dblue" href="">Panier
                                    <span class="badge badge-danger font-weight-bolder">0</span>
                                </a>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login') && Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-dblue" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dblue" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4 my-5">
            @yield('content')
        </main>

        <footer>
            <div class="fixed-bottom">
                <nav class="navbar navbar-expand-lg bg-dblue text-lblue font-weight-bolder mt-5 shadow-sm">

                    <div class="container-fluid">
                        <ul class="navbar-nav w-100 mt-2 mt-lg-0 col-md-4 text-center">
                            <li class="nav-item mx-auto">
                                <a class="nav-link text-lblue" href="#">Plan du site</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav w-100 mt-2 mt-lg-0 col-md-4 text-center">
                            <li class="nav-item mx-auto">{{ config('app.name', 'Laravel') }} © Copyright 2021
                            </li>
                        </ul>
                        <ul class="navbar-nav w-100 mt-2 mt-lg-0 col-md-4 text-center">
                            <li class="nav-item mx-auto">
                                <a class="nav-link text-lblue" href="#">Mentions légales</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </footer>
    </div>
</body>

</html>