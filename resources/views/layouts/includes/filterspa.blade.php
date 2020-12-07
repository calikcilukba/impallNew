<ul class="list-group list-group-flush">
    @foreach($data_kategori as $kategori)
        <a href="/katalogs/{{$kategori->name}}" class="text-muted text-decoration-none"><li class="list-group-item"><h5>{{$kategori->name}}</h5></li></a>
    @endforeach
</ul>
