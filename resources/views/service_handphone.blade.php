@extends('layouts.app')

@section('content')
{{--    {{dd($dataservice1)}}--}}
<div class="container">
        <div class="row">
            <div class="col">
                <div class="row ml-1">
                    <div class="col-sm-0.5">
                        <a href="{{url('service')}}">
                            <img src="{{url('assets/back.png')}}" alt="" style="width: 20px; height: 20px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{url('service')}}">
                            <h3>Merek</h3>
                        </a>
                    </div>
                </div>
                    <div class="row text-center">
                        @foreach($dataservice1 as $data)
                        <div class="col-3 border-1">
                            <a href="{{$data['model']}}/{{$data['handphone']}}">
                            <img src="{{url('assets/foto/4.jpg')}}" style="width: 200px; height: 200px;">
                            </a>
                            <p>{{$data->handphone}}</p>
                            <div class="row"></div>
                        </div>
                        @endforeach
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/4.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/2.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/3.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/2.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/4.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/1.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/3.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/4.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/3.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/1.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/4.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
{{--                        <div class="col-3 border-1">--}}
{{--                            <a href="{{url('service/service-handphone/kendala')}}">--}}
{{--                            <img src="{{url('assets/foto/3.jpg')}}" style="width: 200px; height: 200px;">--}}
{{--                            </a>    --}}
{{--                            <p>lorem ipsum</p>--}}
{{--                            <div class="row"></div>--}}
{{--                        </div>--}}
                </div>
            </div>
        </div>
@endsection
