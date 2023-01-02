{{-- Tampilan Resensi Buku Satuan --}}
@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <img src="https://source.unsplash.com/300x500/?{{ $post->kategori->nama }}" class="mb-4 shadow-lg" alt="">
            </div>
            <div class="col-md-8">
                <h2>{{ $post->judul }}</h2>
                <h6>Dari. <a href="/penulis/{{ $post->penulis->username }}" class="text-decoration-none">{{ $post->penulis->name }}</a> | <a href="/kategori/{{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->nama }}</a></h6>
            
                {!! $post->isi !!}

                <br>
            
                <a href="/buku" class="btn btn-dark my-5">Kembali ke Buku</a>
            </div>
        </div>
    </div>

    <!-- <footer class="bg-dark text-light text-center py-3 shadow">&copy; Saget Team | 2022</footer> -->
        <!-- <img src="https://source.unsplash.com/700x300/?{{ $post->kategori->nama }}" class="mb-4" alt="">
        <h2>{{ $post->judul }}</h2>
        <h6>Dari. <a href="/penulis/{{ $post->penulis->username }}" class="text-decoration-none">{{ $post->penulis->name }}</a> | <a href="/kategori/{{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->nama }}</a></h6>
        {!! $post->isi !!}

        <a href="/buku">Kembali ke Buku</a>
    </div> -->
@endsection