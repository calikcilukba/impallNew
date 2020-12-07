@extends('layouts.master')
@section('content')
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
                                <form action="searchspar" method="get">
                                <div class="center">
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="query" id="query" value="{{request()->input('query')}}">
                                        <button class="btn btn-secondary" type="submit">cari</button
                                </div>
                                </form>
                                <div class="panel-heading">
                                    <a href="/sparepart"><h3 class="panel-title">Data Produk Sparepart</h3></a>
                                <div class="right">
                                    <button type="button" class="btn p-2 " data-toggle="modal" data-target="#exampleModal">
                                        <h5 class="dark p-2">Tambah data</h4>
                                    </button>
                                    <!-- Modal Tambah -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk Sparepart</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form method="POST" action="/sparepart/create" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @include('form.formts')
                                                        <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Tambah Data</button>
                                                    </div>
                                                </form>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal edit -->
                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form method="POST" action="{{ action('controllerproduct@updates','test') }}" enctype="multipart/form-data" id="ediform">
                                                    <div class="modal-body">
                                                        @csrf
                                                        {{method_field('patch')}}
                                                        @include('form.formedit')
                                                    </div>
                                                    <button type="submit" class="btn btn-primary col-12" id="btnSubmit" style="background-color:#52de97">Edit Data</button>
                                                </form>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                                    end modal edit--}}
                            </div>
                            <div class="panel-body">
                                <table id="datatable" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Barang</th>
                                        <th>image</th>
                                        <th>golongan</th>
                                        <th>kategori</th>
                                        <th>deskripsi</th>
                                        <th>jumlah</th>
                                        <th>harga</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data_product as $product)
                                        @if ($product->golongan == 'Sparepart')
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->kodeproduk}}</td>
                                                <td>{{$product->namabarang}}</td>
                                                <td><img src="{{asset('storage/' . $product->image)}}" alt="" style="height: 100px"></td>
                                                <td>{{$product->golongan}}</td>
                                                <td>{{$product->kategori}}</td>
                                                <td>{{$product->deskripsi}}</td>
                                                <td>{{$product->jumlah}}</td>
                                                <td>{{$product->harga}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit" data-id="{{$product->id}}" data-kodeproduk="{{$product->kodeproduk}}" data-namabarang="{{$product->namabarang}}" data-image="{{$product->image}}" data-golongan="{{$product->golongan}}" data-kategori="{{$product->kategori}}" data-deskripsi="{{$product->deskripsi}}" data-jumlah="{{$product->jumlah}}" data-harga="{{$product->harga}}">
                                                        <small>EDIT</small>
                                                    </button>
                                                    <a href="/handphone/{{$product->id}}/delete" class="btn btn-danger btn-sm" ><small>HAPUS</small></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                <span class="mx-auto">{{$data_product->links()}}</span>
                            </div>
                        </div>
                    </div
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script>

        $('#edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id')
            var kode = button.data('kodeproduk')
            var nmbrg = button.data('namabarang')
            var glg = button.data('golongan')
            var ktg = button.data('kategori')
            var dsk = button.data('deskripsi')
            var jml = button.data('jumlah')
            var hrg = button.data('harga')
            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #kodeproduk').val(kode)
            modal.find('.modal-body #namabarang').val(nmbrg)
            modal.find('.modal-body #golongan').val(glg)
            modal.find('.modal-body #kategori').val(ktg)
            modal.find('.modal-body #deskripsi').val(dsk)
            modal.find('.modal-body #jumlah').val(jml)
            modal.find('.modal-body #harga').val(hrg)
        })
    </script>
@endsection
