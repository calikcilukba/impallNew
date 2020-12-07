<input id="id" type="hidden" name="id" class="form-control " >
<div class="form-group">
    <label for="Handphone">Handphone</label>
    <input  type="text" class="form-control " name="handphone" id="handphone">
</div>
<div class="form-group">
    <label for="model">Model</label>
{{--    <input  type="text" class="form-control" name="model" id="model">--}}
    <select class="form-control" id="model" name="model">
{{--        <option selected>Choose...</option>--}}
{{--        <option value="Xiaomi">Xiaomi</option>--}}
{{--        <option value="Asus">Asus</option>--}}
{{--        <option value="Apple">Apple</option>--}}
{{--        <option value="Samsung">Samsung</option>--}}
{{--        <option value="OPPO">OPPO</option>--}}
{{--        <option value="VIVO">VIVO</option>--}}
        @foreach($kategori as $data)
            @if($data->kategori == 'Handphone')
                <option value="{{$data->nama}}">{{$data->nama}}</option>
            @endif
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="kerusakan">Kerusakan</label>
{{--    <input  type="text" class="form-control" name="kerusakan" id="kerusakan">--}}
    <select class="form-control" id="kerusakan" name="kerusakan">
{{--        <option selected>Choose...</option>--}}
{{--        <option value="Layar/LCD">Layar/LCD</option>--}}
{{--        <option value="Baterai">Baterai</option>--}}
{{--        <option value="Touchscreen">Touchscreen</option>--}}
{{--        <option value="Mati Total">Mati Total</option>--}}
{{--        <option value="Speaker">Speaker</option>--}}
{{--        <option value="Hang">Hang</option>--}}
{{--        <option value="Keypad">Keypad</option>--}}
{{--        <option value="Kamera">Kamera</option>--}}
{{--        <option value="Casing">Casing</option>--}}
{{--        <option value="USB Charge">USB Charge</option>--}}
{{--        <option value="Sinyal">Sinyal</option>--}}
        @foreach($kerusakan as $data1)
                    <option value="{{$data1->kerusakan}}">{{$data1->kerusakan}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="detail">Detail</label>
{{--    <input type="text" class="form-control" name="detail" id="detail">--}}
    <textarea class="form-control" name="detail" id="detail" rows="4"></textarea>
</div>
<div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" name="harga" id="harga">
</div>


