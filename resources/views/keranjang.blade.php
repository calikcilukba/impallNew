@extends('layouts.app')
@section('content')
    @if(Session::has('keranjang'))
        <div class="container bg-white rounded-lg" >
            <div class="row">
                @foreach($produk as $data)
                    <div class="col-8  pd-5 mt-2 border-top border-bottom">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{url('storage/' .$data['item']['image'])}}" alt="" style="width:230px">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-5 text-left">
                                        <h4>{{$data['item']['namabarang']}}</h4>
                                    </div>
                                    <div class="col text-right">
                                        <h4>IDR. {{$data['item']['harga']}}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <h5>Jumlah</h5>
                                    </div>
                                    <div class="col">
                                        <select name="jumlah" id="jumlah">
                                            <option value="{{$data['qty']}}" selected>{{$data['qty']}}</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row text-right">
                                    <a href="{{route('hapus_item', ['id' => $data['item']['id']])}}" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col-4 position-fixed" style="margin-left: 800px;">
                        <div class="row text-center">
                            <div class="col">
                                <div class="card">
                                    <h5 class="card-header">Total Harga</h5>
                                    <h4 class="mt-2">IDR. {{$totalharga}}</h4>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <form action="{{route('checkout')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" id="verifikasi" name="verifikasi" value="false">
                                                    <button class="btn btn-dark col-12 ml-1"><small>ORDER</small></button>
                                                </form>
                                            </div>
                                        </div>
                                        <small>Order barang adalah proses memboking barang yang dimana barang tersebut dapat diambil ditoko.
                                        barang akan di cancel jika pembeli tidak mengambil h+1 pada saat mengorder barang</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    @else
        <div class="row">
            <div class="col">
                <h2>Tidak ada item</h2>
            </div>
        </div>
    @endif
@endsection
