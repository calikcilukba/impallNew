@extends('layouts.app')

@section('content')
{{--{{dd($dataservice2)}}--}}
<div class="container">
        <div class="row">
            <div class="col">
                <div class="row ml-1">
                    <div class="col-sm-0.5">
{{--                        <a href="service/service-handphone/{{$dataservice2['model']}}">--}}
                            <img src="{{url('assets/back.png')}}" alt="" style="width: 20px; height: 20px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{url('service/service-handphone')}}">
                            <h3>Handphone</h3>
                        </a>
                    </div>
                </div>
                <div class="row text-center">
                    @foreach($dataservice2 as $data)
                        <div class="col-3 border-1">
                            <a href="{{url('service/' . $data->model . '/' .$data->handphone.'/' . $data->kerusakan)}}">
                            <img src="{{asset('storage/' . 'uploads/' . $data->gambar)}}" style="width: 200px; height: 200px;">
                            </a>
                            <p>{{$data->kerusakan}}</p>
                            <div class="row"></div>
                        </div>
                    @endforeach
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Mati Total</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Speaker</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border---}}
{{--                        1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Hang</p>--}}
{{--                            <div class="row"></div>--}}

{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>keypad</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Kamera</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Casing</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Tidak Bisa Charger</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala/detail-service')}}">--}}
{{--                            <img src="#" style="width: 200px; height: 200px;">--}}
{{--                            </a>--}}
{{--                            <p>Sinyal</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
                </div>
            </div>
        </div>
@endsection
