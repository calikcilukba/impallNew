@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <h1>Registrasi</h1>
        </div>
    </div>
</div>

<div class="container" style="padding:10px">
    <div class="row d-flex justify-content-center">
        <div class="col-9">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap :</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
                    @error('alamat')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
{{--                    <input id="jeniskelamin" type="text" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin') }}" required autocomplete="jeniskelamin" autofocus>--}}
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenisKelamin')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Umur</label>
                    <input id="umur" type="number" min="0" max="115" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" required autocomplete="umur" autofocus>
                    @error('umur')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ulangi Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    @error('password-confirm')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Registrasi</button>
            </form>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                $(function () {
                    $("#btnSubmit").click(function () {
                        var password = $("#password").val();
                        var password2 = $("#password-confirm").val();
                        if (password != password2) {
                            alert("password tidak sesuai");
                            return false;
                        }
                        return true;
                    });
                });
            </script>
            <small class="d-flex justify-content-center">Sudah Memilik akun?<a href="/login"> Klik Disini</a></small>
        </div>
    </div>
</div>
@endsection
