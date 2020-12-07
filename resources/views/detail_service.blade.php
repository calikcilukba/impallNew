@extends('layouts.app')

@section('content')
{{--    {{dd($dataservice[0]->handphone)}}--}}
    @for ($i = 0; $i < count($dataservice); $i++)
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-sm-0.5">
                        <a href="{{url('service/service-handphone/kendala')}}">
                            <img src="{{url('assets/back.png')}}" alt="" style="width: 20px; height: 20px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{url('service/service-handphone/kendala')}}">
                            <h3>Masalah</h3>
                        </a>
                    </div>
                </div>
                <div class="row bg-white rounded-lg p-2">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col text-left">
                                <h1>{{$dataservice[$i]->handphone}}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <?php
                                $gambar = "uploads/" . $dataservice[$i]->model . ".jpg";
                                ?>
                                <img src="{{asset('storage/' . $gambar)}}" alt="" style="width:350px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col text-left invisible">
                                <h1>Oppo F11 Pro</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>{{$dataservice[$i]->detail}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col text-left invisible">
                                <h1>Oppo F11 Pro</h1>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <div class="card">
                                    <h5 class="card-header">Total Harga</h5>
                                    <div class="card-body">
                                        <form action="{{route('inputreparasi')}}" method="post">
                                            @csrf
                                            <h5 class="card-title">{{$dataservice[$i]->handphone}} - {{$dataservice[$i]->model}} - {{$dataservice[$i]->kerusakan}}</h5>
                                            <p class="card-text">IDR. {{$dataservice[$i]->harga}}</p>
                                            @if(Auth::User())
                                            <input type="hidden" value="{{Auth::User()->id}}" name="userid" id="userid">
                                            @else
                                                <input type="hidden" value="" name="userid" id="userid">
                                            @endif
                                            <input type="hidden" value="{{$dataservice[$i]->id}}" name="iddservice" id="iddservice">
                                            <input type="hidden" value="{{$dataservice[$i]->handphone}} - {{$dataservice[$i]->model}} - {{$dataservice[$i]->kerusakan}} - {{$dataservice[$i]->harga}}" name="service" id="service">
                                            <input type="hidden" value="{{$dataservice[$i]->harga}}" name="harga" id="harga">
                                            <button type="submit" class="btn btn-primary btn-block" style="background-color:#52de97" onclick="return confirm('Apakah anda ingin membuat janji ?')">BUAT JANJI</button>
                                            <small class="card-text">Silahkan Tekan Tombol Janji jika sudah sesuai. Datang ke toko kami untuk melakukan perbaikan handphone. Terima Kasih Banyak</small>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
@endsection
