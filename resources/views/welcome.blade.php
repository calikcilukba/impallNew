@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        {{-- carosel inti --}}
        <div id="carouselExampleInterval" class="carousel slide p-2" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="{{url('assets/carosel1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="{{url('assets/carosel2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- end --}}

        {{-- carosel produk populer --}}
        <div class="row container">
            <div class="col text-left p-2">
                    <h2>Produk Terpopuler</h2>
            </div>
        </div>

        <div class="row">
            <div id="carouselExampleInterval2" class="carousel slide p-2" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <div class="row">
                            <div class="col-3">
                            <img src="{{url('assets/foto/1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{url('assets/foto/2.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{url('assets/foto/3.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{url('assets/foto/4.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="10000">
                        <div class="row">
                            <div class="col-3">
                            <img src="{{url('assets/foto/4.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{url('assets/foto/3.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{url('assets/foto/2.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-3">
                            <img src="{{url('assets/foto/1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- end --}}

        {{-- service handphone --}}
        <div class="row container">
            <div class="col text-center p-2">
                    <h2>langkah Mudah Dalam Memperbaiki Handphone</h2>
            </div>
            <div class="row mx-auto">
                <div class="col text-center">
                    <div class="row ">
                        <div class="col">
                                <img src="{{url('assets/carosel2.jpg')}}" style="width:1124px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Langkah mudah melakukan service handphone hanya dengan klik tombol dibawah</p>
                            <a class="btn btn-primary btn-lg" href="service" style="background-color:#52de97">Service Handphone anda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}

        {{-- about website --}}
        <div class="container-fluid mt-5">
            <div class="row">
            <div class="col-6 text-left">
                <h2>Lorem Ipsum Dolor Sit Amet</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo pellentesque lorem non vulputate. Duis ac congue sem. Quisque ultrices, turpis a semper rutrum, arcu velit finibus nisi, et interdum est magna eu urna. Etiam ullamcorper mollis volutpat. Duis a mauris et nisi faucibus iaculis et ac nulla. Morbi et feugiat dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec cursus ligula ex, vitae interdum nisl blandit in. Pellentesque ante metus, gravida congue vehicula in, scelerisque sit amet quam. Proin id bibendum mauris. Fusce rhoncus massa eget nisi imperdiet, sed accumsan arcu auctor. Cras a eros dui. Sed vel dapibus arcu, consectetur pretium dolor. Aliquam erat eros, porttitor eget elit a, pharetra lobortis turpis. Mauris imperdiet purus dui, eget fringilla odio scelerisque sit amet. Cras id varius dui, et posuere urna.
                </p>
            </div>

            <div class="col-6 text-right">
                <h2>Lorem Ipsum Dolor Sit Amet</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo pellentesque lorem non vulputate. Duis ac congue sem. Quisque ultrices, turpis a semper rutrum, arcu velit finibus nisi, et interdum est magna eu urna. Etiam ullamcorper mollis volutpat. Duis a mauris et nisi faucibus iaculis et ac nulla. Morbi et feugiat dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec cursus ligula ex, vitae interdum nisl blandit in. Pellentesque ante metus, gravida congue vehicula in, scelerisque sit amet quam. Proin id bibendum mauris. Fusce rhoncus massa eget nisi imperdiet, sed accumsan arcu auctor. Cras a eros dui. Sed vel dapibus arcu, consectetur pretium dolor. Aliquam erat eros, porttitor eget elit a, pharetra lobortis turpis. Mauris imperdiet purus dui, eget fringilla odio scelerisque sit amet. Cras id varius dui, et posuere urna.
                </p>
            </div>
            </div>
        </div>
        {{-- end --}}

    </div>
</div>
@endsection

{{-- welcome page laravel --}}

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}
