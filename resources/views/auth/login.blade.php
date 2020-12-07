@extends('layouts.app')

@section('content')
<div class="container mb-4 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="mb-2">Login Pelanggan</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                            <div class="content">
                                <h5 >Pelanggan Terdaftar</h5>
                                <p class="border-bottom mb-2 mt-2"></p>
                                <p>Jika kamu sudah punya akun, silakan login menggunakan email.</p>
                                <form method="POST" action="/postlogin">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label for="email" class="col-form-label col-4">E-mail *</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="email" name="email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Password" class="col-form-label col-4">Password</label>
                                        <div class="col">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary btn-block" style="background-color:#52de97">Masuk</button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item h-100 d-flex flex-column justify-content-between">
                            <div class="content">
                                <h5>Pelanggan Baru</h5>
                                <p class="border-bottom mb-2 mt-2"></p>
                                <p>Dengan membuat akun Anda dapat: berbelanja lebih cepat, menyimpan lebih dari satu alamat, melacak pesanan dan lainnya.</p>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <a href="{{route('register')}}" class="btn btn-primary btn-block mb-3" style="background-color:#52de97">Registrasi</a>
                                    <small style="visibility: hidden">aksjakjsk</small>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
