@extends('template.layout')

@section('content')

<div>
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        @error('kategori')
        <p>{{$message}}</p>
        @enderror

        <input class="@error('kategori') @enderror" type="text" name="kategori">
        <input type="file" name="image">
        <input type="submit" name="btn" value="Simpan">
    </form>
</div>

<h1>Home</h1>

@foreach ($kategoris as $isi)
<li>{{$isi -> kategori}} -- <a style="text-decoration: none;" href="/store/{{$isi -> kategori}}">Hapus</a></li>
@endforeach

@endsection