@extends('dashboard.layouts.main')

@section('container')
<article>
    <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $bk->gambar)}} " class="mb-4" alt="" class="img-fluid" alt="{{ $bk->kategori->nama }}">
    </div>
    <h2>{{ $bk->judul }}</h2>
    <h6>Dari. <a href="/penulis/{{ $bk->penulis->username }}" class="text-decoration-none">{{ $bk->penulis->name }}</a> | <a href="/kategori/{{ $bk->kategori->slug }}" class="text-decoration-none">{{ $bk->kategori->nama }}</a></h6>
    {!! $bk->isi !!}
</article>
<a href="/dashboard/posts" class="btn btn-primary mt-3">Kembali</a>





@endsection
