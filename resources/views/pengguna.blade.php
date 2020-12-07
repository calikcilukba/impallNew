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
                                    <form action="searchuser" method="get">
                                        <div class="center">
                                            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="query" id="query" value="{{request()->input('query')}}">
                                            <button class="btn btn-secondary" type="submit">cari</button
                                        </div>
                                    </form>
                                    <div class="panel-heading">
                                        <a href="/pengguna"><h3 class="panel-title">Data User</h3></a>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>name</th>
                                                    <th>email</th>
                                                    <th>alamat</th>
                                                    <th>jenis Kelamin</th>
                                                    <th>umur</th>
                                                    <th>created</th>
                                                    <th>updated</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_users as $users)
                                                @if ($users->role == 2)
                                                    <tr>
                                                        <td>{{$users->id}}</td>
                                                        <td>{{$users->name}}</td>
                                                        <td>{{$users->email}}</td>
                                                        <td>{{$users->alamat}}</td>
                                                        <td>{{$users->jeniskelamin}}</td>
                                                        <td>{{$users->umur}}</td>
                                                        <td>{{$users->created_at}}</td>
                                                        <td>{{$users->updated_at}}</td>
                                                        <td>
                                                            <a href="/pengguna/{{$users->id}}/delete" class="btn btn-danger btn-sm" ><small>HAPUS</small></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    </div>
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
        var mrk = button.data('merek')
        var tp = button.data('tipe')
        var jml = button.data('jumlah')
        var hrg = button.data('harga')
        var modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #kodeproduk').val(kode)
        modal.find('.modal-body #namabarang').val(nmbrg)
        modal.find('.modal-body #golongan').val(glg)
        modal.find('.modal-body #kategori').val(ktg)
        modal.find('.modal-body #merek').val(mrk)
        modal.find('.modal-body #tipe').val(tp)
        modal.find('.modal-body #jumlah').val(jml)
        modal.find('.modal-body #harga').val(hrg)
    })
</script>
@endsection
