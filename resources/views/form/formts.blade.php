<input id="id" type="hidden" name="id" class="form-control " >
<div class="form-group">
    <label for="kodeproduk">Kode Produk :</label>
    <input  type="text" class="form-control " name="kodeproduk" id="kodeproduk">
    {{--    @error('kodeproduk')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>
<div class="form-group">
    <label for="namabarang">Nama Barang</label>
    <input  type="text" class="form-control" name="namabarang" id="namabarang">
    {{--    @error('namabarang')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>
<div class="form-group">
    <label for="image">Image</label>
    <input class="form-control-file" type="file"  name="image" id="image" value="test">
    {{--    @error('image')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>
<input id="golongan" type="hidden" name="golongan" class="form-control " value="Sparepart">
<div class="form-group">
    <label for="kategori">Kategori</label>
    <select class="form-control" id="kategori" name="kategori">
        @foreach($kategori as $data)
            <option value="{{$data->nama}}">{{$data->nama}}</option>
        @endforeach
    </select>
    {{--    @error('kategori')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>
<div class="form-group">
    <label for="merek">Deskripsi</label>
    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
    {{--    @error('password')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>
<div class="form-group">
    <label for="jumlah">jumlah</label>
    <input type="text" class="form-control" name="jumlah" id="jumlah">
    {{--    @error('jumlah')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>
<div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" id="harga">
    {{--    @error('harga')--}}
    {{--    <div class="invalid-feedback">{{$message}}</div>--}}
    {{--    @enderror--}}
</div>

