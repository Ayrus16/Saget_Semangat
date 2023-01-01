@extends('dashboard.layouts.main')

@section('container')
<a href="/dashboard/posts">Kembali</a>
<a href="/dashboard/posts/{{ $bk->slug }}/edit">Edit</a>
<form action="/dashboard/posts/{{ $bk->slug }}" method="POST" class="d-inline">
    @method('delete')
    @csrf
    <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin akan menghapus?')"><span data-feather="x-circle"></span>Hapus</button>
  </form>
<article>
    <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $bk->gambar)}} " class="mb-4" alt="" class="img-fluid" alt="{{ $bk->kategori->nama }}">
    </div>
    <h2>{{ $bk->judul }}</h2>
    <h6>Dari. <a href="/penulis/{{ $bk->penulis->username }}" class="text-decoration-none">{{ $bk->penulis->name }}</a> | <a href="/kategori/{{ $bk->kategori->slug }}" class="text-decoration-none">{{ $bk->kategori->nama }}</a></h6>
    {!! $bk->isi !!}
</article>





@endsection
