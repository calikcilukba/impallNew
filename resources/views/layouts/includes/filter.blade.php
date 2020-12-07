{{--{{dd($data_kategori)}}--}}
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <ul class="nav list-group list-group-flush">
            <li class="list-group-item list-group-item-dark">Handphone</li>
            @foreach($data_kategori as $kategori)
                @if($kategori->produk == 'handphone')
                    <a href="/katalog/Handphone/{{$kategori->name}}" class="text-muted text-decoration-none"><li class="list-group-item"><h5>{{$kategori->name}}</h5></li></a>
                @endif
            @endforeach
            <li class="list-group-item list-group-item-dark">Sparepart</li>
            @foreach($data_kategori as $kategori)
                @if($kategori->produk == 'sparepart')
                    <a href="/katalog/Sparepart/{{$kategori->name}}" class="text-muted text-decoration-none"><li class="list-group-item"><h5>{{$kategori->name}}</h5></li></a>
                @endif
            @endforeach
        </ul>
    </div>
</div>
