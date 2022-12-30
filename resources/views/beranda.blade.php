@extends('layouts.main')

@section('container')
    {{-- Gambar dan Text --}}
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    {{-- Gambar BG --}}
                    <h1>Halo Sobat Saget!</h1>
                    <h5>Kami adalah Website Resensi Buku yang akan memberikan rekomendasi Buku yang sobat inginkan</h5>
                    <hr>
                    <h4>Selamat Membaca</h4>
                    <a href="/info" class="btn btn-primary" >Infomasi Tim</a>
                </div>
            </div>
        </div>
    </header>

    {{-- Rekomendasi Resensi Buku --}}
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-5">
            <h1>Rekomendasi Buku</h1>
            @foreach ($posts as $post)
              <article class="mb-5">
                <img src="https://source.unsplash.com/500x400/?{{ $post->kategori->nama }}" class="mb-4" alt="">
                <h2>
                  <a href="/buku/{{ $post->slug }}" class="text-decoration-none">{{ $post->judul }}</a>
                </h2>
                <h6>Dari. <a href="/penulis/{{ $post->penulis->username }}" class="text-decoration-none">{{ $post->penulis->name }}</a> | <a href="/kategori/{{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->nama }}</a></h6>
                {{ $post->kutipan }}
              </article>
            @endforeach   
          </div>
        </div>
      </div>
    </section>

    {{-- Hak Cipta --}}
    <footer></footer>
@endsection 
