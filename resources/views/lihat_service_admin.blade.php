@extends('layouts.master')
@section('content')
    {{--    {{dd($order)}}--}}
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            @if (session('sukses'))
                                <div class="alert alert-success" role="alert">
                                    {{session('sukses')}}
                                </div>
                            @endif
                            <div class="panel-heading">
                                <div class="left">
                                    <h3 class="panel-title">Data Pembelian</h3>
                                </div>
                                <div class="right">
                                    <a href="" style="margin-right: 10px; text-decoration: none;">Data Terverifkasi</a>
                                    <a href="" >Data Belum Terverifikasi</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>idUser</th>
                                        <th>idDataService</th>
                                        <th>Data Service</th>
                                        <th>verifikasi</th>
                                        <th>Harga</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($order as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->userid}}</td>
                                            <td>{{$data->iddservice}}</td>
                                            <td>{{$data->service}}</td>
                                            <td>
                                                @if($data->verifikasi == 0)
                                                    <h6>Produk Belum Diambil</h6>
                                                    <h6 class="text-danger">Belum Ter-verifikasi</h6>
                                                @else
                                                    <h6>Produk Telah Diambil</h6>
                                                    <h6 class="text-success">Ter-verifikasi</h6>
                                                @endif
                                            </td>
                                            <td>{{$data->harga}}</td>
                                            <td>
                                                @if($data->verifikasi == 0)
                                                    <form action="{{route('ubah_verifikasiservice', ['id' => $data->id])}}" method="post">
                                                        @method('patch')
                                                        @csrf
                                                        <button class="btn btn-success">Verifikasi</a>
                                                        @endif
                                                    </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <span class="mx-auto">{{$order->links()}}</span>
                            </div>
                        </div>
                    </div
                </div>
            </div>
        </div>
    </div>
@endsection
