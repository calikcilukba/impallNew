<input id="id" type="hidden" name="id" class="form-control " >
<div class="form-group">
    <label for="Handphone">Handphone</label>
    <input  type="text" class="form-control " name="handphone" id="handphone">
</div>
<div class="form-group">
    <label for="model">Model</label>
    <select class="form-control" id="model" name="model">
        @foreach($kategori as $data)
            @if($data->kategori == 'Handphone')
                <option value="{{$data->nama}}">{{$data->nama}}</option>
            @endif
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="kerusakan">Kerusakan</label>
    <select class="form-control" id="kerusakan" name="kerusakan">
        @foreach($kerusakan as $data1)
            <option value="{{$data1->kerusakan}}">{{$data1->kerusakan}}</option>
    @endforeach
</div>
<div class="form-group">
    <label for="detail">Detail</label>
    <textarea class="form-control" name="detail" id="detail" rows="4"></textarea>
</div>
<div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" id="harga">
</div>


