@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/posts">Kembali</a>
<a href="">Edit</a>
<a href="">hapus</a>
<article>
    <img src="https://source.unsplash.com/500x400/?{{ $bk->kategori->nama }}" class="mb-4" alt="">
    <h2>{{ $bk->judul }}</h2>
    <h6>Dari. <a href="/penulis/{{ $bk->penulis->username }}" class="text-decoration-none">{{ $bk->penulis->name }}</a> | <a href="/kategori/{{ $bk->kategori->slug }}" class="text-decoration-none">{{ $bk->kategori->nama }}</a></h6>
    {!! $bk->isi !!}
</article>





@endsection
