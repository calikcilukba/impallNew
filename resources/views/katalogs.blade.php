@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 ml-5">
                <h4>FILTERS</h4>
            </div>
            <div class="col">
                <p>Produk <?php echo "1 - 9" ?> dari <?php echo "9"; ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <div class="row">
                    <div class="col ">
                        <h5>KATEGORI</h5>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
            <div class="col">
                <div class="row text-center">
                    @foreach ($data_produk as $product)
                            <div class="col-4">
                                <a href="/katalogs/detail_katalogs/{{$product->id}}">
                                    <img src="{{asset('storage/' . $product->image)}}" alt="" style="width: 200px; height: 200px;">
                                </a>
                                <p>{{$product->namabarang}}</p>
                                <p>{{$product->harga}}</p>
                                <div class="row"></div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
