{{-- Tampilan Resensi Buku Satuan --}}
@extends('layouts.main')

@section('container')
    <article>
        <img src="https://source.unsplash.com/500x400/?{{ $post->kategori->nama }}" class="mb-4" alt="">
        <h2>{{ $post->judul }}</h2>
        <h6>Dari. <a href="/penulis/{{ $post->penulis->username }}" class="text-decoration-none">{{ $post->penulis->name }}</a> | <a href="/kategori/{{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->nama }}</a></h6>
        {!! $post->isi !!}
    </article>

    <a href="/buku">Kembali ke Buku</a>
@endsection