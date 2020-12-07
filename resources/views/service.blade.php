@extends('layouts.app')

@section('content')
{{--    {{dd($dataservice)}}--}}
<div class="container">
        <div class="row">
            <div class="col">
                <div class="row ml-1">
                    <div class="col-sm-0.5">
                        <a href="{{url('/')}}">
                            <img src="{{url('assets/back.png')}}" alt="" style="width: 20px; height: 20px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{url('/')}}">
                            <h3>Halaman Utama</h3>
                        </a>
                    </div>
                </div>
                <div class="row text-center">
                        @forelse($dataservice as $data)
                            <div class="col-3 border-1">
                                <a href="service/{{$data['model']}}">
                                    <?php
                                        $gambar = "uploads/" . $data['model'] . ".jpg";
                                        ?>
                                    <img src="{{asset('storage/' . $gambar)}}" alt="" style="width: 200px; height: 200px;">
                                </a>
                                <p>{{$data['model']}}</p>
                                <div class="row"></div>

                        @empty
                            <div>Tidak ada produk</div>
                            </div>
                        @endforelse
                </div>
            </div>
        </div>
</div>
@endsection
