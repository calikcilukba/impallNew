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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--    sweetalert2--}}
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #5ad45a;">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <img src="{{url('assets/Asset 1.png')}}" alt="" style="height:50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 20px; color: white;">
                                Produk <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('katalog/handphone')}}" style="text-decoration: none;">Handphone</a>
                                <a class="dropdown-item" href="{{url('katalog/Sparepart')}}" style="text-decoration: none;">Sparepart</a>
                            </div>
                        </li>
                        <li class="nav-item my-auto ml-5">
                            <a style="font-size: 20px;color: white;text-decoration: none" href="{{url('/service')}}">Sevice</a>
                        </li>
                    </ul>
                    <form action="{{route('search')}}" method="get" >
                    <div class="collapse navbar-collapse justify-content- ml-5">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search" size="65" name="query" id="query" value="{{request()->input('query')}}">
                            <button class="btn btn-secondary col-1.5" type="submit">cari</button>
                    </div>
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Auth::user() != null)
                            <li class="nav-item px-2">
                                <a class="nav-link" href="/keranjang"><img src="{{url('assets/icon-keranjang.png')}}" alt=""  style="width: 20px; height: 20px;"></a>
                            </li>
                            @endif
                            <li class="nav-item dropdown px-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{url('assets/icon-profile.png')}}" alt=""  style="width: 20px; height: 20px;">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item mx-auto" href="/login"><p>login</p></a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item px-2">
                                <a class="nav-link" href="{{route('keranjang')}}"><img src="{{url('assets/icon-keranjang.png')}}" alt=""  style="width: 20px; height: 20px;"><span class="badge">{{Session::has('keranjang') ? Session::get('keranjang')->totalQty : ''}}</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{url('assets/icon-profile.png')}}" alt=""  style="width: 20px; height: 20px;">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/home" class="dropdown-item">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
        <footer class="page-footer font-small blue border-top">
            <div class="footer-copyright py-3 text-left ml-5">© 2019 Copyright:
            <a href="#"> SISC Sinar Indah Cell</a>
            </div>
        </footer>
    </div>
</body>
</html>
