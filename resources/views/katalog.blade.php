@extends('layouts.app')

@section('content')
{{--    {{dd($data_produk)}}--}}
{{--{{dd($kategori)}}--}}
<div class="container">
    <div class="row">
        <div class="col-2">
            <h4>FILTERS</h4>
        </div>
        <div class="col text-right">
            <p>Page {{$data_produk->currentPage()}} dari {{$data_produk->lastPage()}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col ">
                    <h5>KATEGORI</h5>
                </div>
            </div>
            <div class="row">
                <div class="col card ml-3">
                    <article class="card-group-item">
                        <header class="card-header text-center"><h6 class="title">HANDPHONE</h6></header>
                        <div class="filter-content">
                            <div class="list-group list-group-flush">
                                @foreach($kategori as $data)
                                    @if($data->kategori == 'Handphone')
                                        <a href="{{url('/filter/'.$data->nama)}}" class="list-group-item text-decoration-none" style="font-size: 17px">{{$data->nama}}</a>
                                    @endif
                                @endforeach
                            </div>  <!-- list-group .// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header text-center"><h6 class="title">SPAREPART</h6></header>
                        <div class="filter-content">
                            <div class="list-group list-group-flush">
                                @foreach($kategori as $data)
                                    @if($data->kategori == 'Sparepart')
                                        <a href="{{url('/filter/'.$data->nama)}}" class="list-group-item text-decoration-none" style="font-size: 17px">{{$data->nama}}</a>
                                    @endif
                                @endforeach
                            </div>  <!-- list-group .// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                </div> <!-- card.// -->
            </div>
            <div class="row">
                <div class="col">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row text-center mt-4">
                @forelse($data_produk as $product)
                    <div class="col-3">
                        <a href="/katalog/detail_katalog/{{$product->id}}">
                        <img src="{{asset('storage/' . $product->image)}}" alt="" style="width: 200px; height: 200px;">
                        </a>
                        <p>{{$product->namabarang}}</p>
                        <p>{{$product->harga}}</p>
                        <div class="row"></div>
                    </div>
                @empty
                    <div>Tidak ada produk</div>
                @endforelse
            </div>
            <span class="mx-auto">{{$data_produk->links()}}</span>
        </div>
    </div>
</div>
@endsection
