@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group ">
                    <a href="{{route('home')}}" type="button" class="list-group-item list-group-item-action">Dashboard Akun</a>
                    <a href="{{route('infoakun')}}" type="button" class="list-group-item list-group-item-action active">Edit Akun</a>
                    <a href="{{route('pesanan')}}" type="button" class="list-group-item list-group-item-action">Pesanan Saya</a>
                    <a href="{{route('service')}}" type="button" class="list-group-item list-group-item-action">Service</a>
                </div>
            </div>
            <div class="col card mb-3">
                <div class="row">
                    <div class="col">
                        <h1 class="card-header">Edit Akun</h1>
                    </div>
                </div>
                <div class="p-3">
                    <form method="POST" action="{{route("updateakun")}}">
                        {{method_field('patch')}}
                        @csrf
                        <input type="hidden" value="{{Auth::user()->id}}" id="id" name="id">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap :</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>
                            @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="hidden" value="{{Auth::user()->email}}" id="email" name="email">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{Auth::user()->alamat}}" required autocomplete="alamat" autofocus>
                            @error('alamat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                            <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                                @if(Auth::User()->jeniskelamin == 'Laki-laki')
                                    <option value="Laki-laki" selected>Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                @else
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Umur</label>
                            <input id="umur" type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{Auth::user()->umur}}" required autocomplete="umur" autofocus>
                            @error('umur')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Lama</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <?php \Carbon\Carbon::setlocale(LC_TIME, config('app.locale'));
                        $now = \Carbon\Carbon::now();
                        ?>
                        <input type="hidden" value="{{ $now->toDateTimeString()}}" id="update" name="update">
                        <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Edit Biodata</button>
                    </form>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function () {
                            $("#btnSubmit").click(function () {
                                var pas = $("#password-lama")
                                var password = $("#password1").val();
                                var password2 = $("#password-confirm").val();
                                if ((password != password2) && pas == Auth::user()->password) {
                                    alert("password tidak sesuai");
                                    return false;
                                }
                                return true;
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection


