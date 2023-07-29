<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins" rel="stylesheet">
    <script src="https://kit.fontawesome.com/52c63e43bb.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .nav-link{
            padding: 1rem 1rem;
        }
        .nav-link.active {
            color: #DF1C2D !important;
            font-weight: 900;
            border-bottom: 3px solid #DF1C2D;
        }
    </style>
    @stack('css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light p-0 bg-white fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    <img src="{{asset('images/logo/big-warna-full.png')}}" alt="logo bignet" height="35">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Paket
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/paket">
                                    Paket 1
                                </a>
                                <a class="dropdown-item" href="#">
                                    Paket 2
                                </a>
                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Info
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    Paket 1
                                </a>
                                <a class="dropdown-item" href="#">
                                    Paket 2
                                </a>
                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Gallery
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    Paket 1
                                </a>
                                <a class="dropdown-item" href="#">
                                    Paket 2
                                </a>
                            </div>

                        </li>
                        <li class="nav-item pt-2 px-3">
                            <button class="btn btn-danger">Kontak</button>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                ID
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    ID
                                </a>
                                <a class="dropdown-item" href="#">
                                    EN
                                </a>
                            </div>

                        </li>
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script>
        const navbar = document.getElementById('navbar');
        const main = document.getElementsByTagName('main')[0];
        main.style.marginTop = `${navbar.offsetHeight}px`;



        function detectBreakpoint() {
            const breakpoints = {
                xs: 0,
                sm: 576,
                md: 768,
                lg: 992,
                xl: 1200
            };

            const windowWidth = window.innerWidth;
            if (windowWidth >= breakpoints.xl) {
                return 5;
            } else if (windowWidth >= breakpoints.lg) {
                return 4;
            } else if (windowWidth >= breakpoints.md) {
                return 3;
            } else if (windowWidth >= breakpoints.sm) {
                return 2;
            } else {
                return 1;
            }
        }
    </script>
    @stack('js')
</body>

</html>