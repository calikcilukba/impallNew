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
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Produk Sparepart</h3>
                                <div class="right">
                                    <button type="button" class="btn p-2 " data-toggle="modal" data-target="#exampleModal">
                                        <h5 class="dark p-2">Tambah data</h4>
                                    </button>
                                    <!-- Modal Tambah -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Product Service</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form method="POST" action='/dataservices/create'>
                                                    <div class="modal-body">
                                                        @csrf
                                                        @include('form.formds')
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

                                                <form method="POST" action="{{ action('ControllerAdmin@updateds','test') }}" enctype="multipart/form-data" id="ediform">
                                                    <div class="modal-body">
                                                        @csrf
                                                        {{method_field('patch')}}
                                                        @include('form.formeditds')
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
                                        <th>Handphone</th>
                                        <th>Model</th>
                                        <th>Kerusakan</th>
                                        <th>Detail</th>
                                        <th>Harga</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $data1)
                                            <tr>
                                                <td>{{$data1->id}}</td>
                                                <td>{{$data1->handphone}}</td>
                                                <td>{{$data1->model}}</td>
                                                <td>{{$data1->kerusakan}}</td>
                                                <td>{{$data1->detail}}</td>
                                                <td>{{$data1->harga}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit" data-id="{{$data1->id}}" data-handphone="{{$data1->handphone}}" data-model="{{$data1->model}}" data-kerusakan="{{$data1->kerusakan}}" data-detail="{{$data1->detail}}" data-harga="{{$data1->harga}}">
                                                        <small>EDIT</small>
                                                    </button>
                                                    <a href="/dataservices/{{$data1->id}}/delete" class="btn btn-danger btn-sm" ><small>HAPUS</small></a>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <span class="mx-auto">{{$data->links()}}</span>
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
            var hnd = button.data('handphone')
            var md = button.data('model')
            var kr = button.data('kerusakan')
            var det = button.data('detail')
            var hrg = button.data('harga')
            var modal = $(this)

            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #handphone').val(hnd)
            modal.find('.modal-body #model').val(md)
            modal.find('.modal-body #kerusakan').val(kr)
            modal.find('.modal-body #detail').val(det)
            modal.find('.modal-body #harga').val(hrg)
        })
    </script>
@endsection
