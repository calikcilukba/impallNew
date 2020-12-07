@extends('layouts.app')

@section('content')
{{--    {{dd($orders)}}--}}
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group ">
                    <a href="{{route('home')}}" type="button" class="list-group-item list-group-item-action">Dashboard Akun</a>
                    <a href="{{route('infoakun')}}" type="button" class="list-group-item list-group-item-action ">Edit Akun</a>
                    <a href="{{route('pesanan')}}" type="button" class="list-group-item list-group-item-action active">Pesanan Saya</a>
                    <a href="{{route('service')}}" type="button" class="list-group-item list-group-item-action ">Service</a>
                </div>
            </div>
            <div class="col card mb-3">
                <div class="row">
                    <div class="col">
                        <h1 class="p-2">Pemesanan</h1>
                    </div>
                </div>
                    @forelse($orders as $data)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{--                        {{$data->keranjang->items['item']['created_at']}}--}}
                            </div>
                            <div class="col-10 mx-auto card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-left">SISC Store</h5>
                                    </div>
                                    <div class="col">
                                        @if($data->verifikasi == 1)
                                            <h6 class="card-title text-center text-success">Produk Telah Diambil (Terverifikasi)</h6>
                                        @else
                                            <h6 class="card-title text-center text-danger">Produk Belum Diambil (Belum Terverifikasi)</h6>
                                        @endif
                                    </div>
                                    <div class="col text-right">
                                        <h5 class="card-title">{{$data->keranjang->totalharga}}</h5>
                                    </div>
                                </div>
                                @foreach($data->keranjang->items as $items)
                                    <div class="row my-2">
                                        <div class="col-1">
                                            <img class="rounded" src="{{asset('storage/' . $items['item']['image'])}}" alt="" style="width:65px;height:65px;">
                                        </div>
                                        <div class="col-4 ml-3">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text"> {{$items['item']['namabarang']}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text"> {{$items['item']['harga']}} |  {{$items['qty']}} produk</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col text-right">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text">Total Harga Produk</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text">{{$items['item']['harga']}}</p>

                                                    {{$items['item']['created_at']}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @if($data->verifikasi == 0)
                                    <?php
                                    $tanggaltambah1 = $items['item']['created_at'];
                                    $tanggaltambah2 = date('d-m-Y', strtotime('+1 days', strtotime($tanggaltambah1)));
                                    ?>
                                    <div class="row">
                                        <div class="col text-center text-danger">
                                            <h5>Produk yang telah diorder silahkan diambil sebelum tanggal <h4>{{$tanggaltambah2}}. Jika tidak produk akan otomatis dibatalkan.</h4></h5>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="card mb-3">
                            <div class="card-header">
                            </div>
                            <div class="col-10 mx-auto card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-center">Tidak Ada Data</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
            </div>
        </div>
    </div>

@endsection


