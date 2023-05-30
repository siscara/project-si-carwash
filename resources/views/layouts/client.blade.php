<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('assets/img/icon-wash.png') }}">
    <title>Car wash</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .hover-effect {
            margin-top: 0.5rem;
        }

        .hover-effect:hover {
            background-color: rgba(128, 137, 162, 1);
            transition: background-color 0.3s ease;
            /* opacity: 0.4; */
        }
    </style>
</head>

<body>
    <div id="app" class="d-flex ">
        <div class="w-full" style="width: 100%; margin-left: 17.6rem; ">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
                style="border-bottom-right-radius: 24px; border-bottom-left-radius: 24px; width:50rem; left:9rem;">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Welcome In Car Wash
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
                            {{-- <a class="dropdown-item" href="/">Logout</a> --}}
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-primary bg-gradient position-fixed shadow p-3 mr-5"
            style="width: 250px; height:100vh;">
            <a href="/home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Car Wash</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-items">
                    <a href="/home" class="nav-link text-white d-flex align-items-center gap-2 hover-effect">
                        @include('icons/home')
                        Home
                    </a>
                </li>
                <li class="nav-items">
                    <a href="/layanan" class="nav-link text-white d-flex align-items-center gap-2 hover-effect">
                        @include('icons/car')
                        Layanan
                    </a>
                </li>

            </ul>
            <hr>
        </div>
    </div>
</body>

</html>
