@extends('layouts.main')

@section('container')
    {{-- Gambar dan Text --}}
    <header>
    <div class="jumbotron">
      <div class="bg-image">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
          <div class="d-flex justify-content-center align-items-center h-100 px-3">
            <div class="text-white">
              <h1 class="jtext mb-3">Halo Sobat Saget!</h1>
              <h6 class="mb-3">Selamat datang di website kami. <br> Saget merupakan website resensi buku yang akan memberikan rekomendasi buku yang sobat inginkan</h6>
              <a class="btn btn-outline-light btn-lg" href="/info" role="button">Informasi tim</a>
            </div>
          </div>
      </div>
    </div>
        <!-- <div class="container">
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
        </div> -->
    </header>

    {{-- Rekomendasi Resensi Buku --}}
    <section>
      <div class="container my-2">
        <div class="my-5">
          <h2 class="text-center">- Rekomendasi Buku -</h2>
        </div>
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-md-4 my-2 d-flex justify-content-center">
              <div class="card" style="width: 25rem;">
                <img src="https://source.unsplash.com/500x400/?{{ $post->kategori->nama }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2><a href="/buku/{{ $post->slug }}" class="text-decoration-none">{{ $post->judul }}</a></h2>
                  <h6>Dari : <a href="/penulis/{{ $post->penulis->username }}" class="text-decoration-none">{{ $post->penulis->name }}</a> | <a href="/kategori/{{ $post->kategori->slug }}" class="text-decoration-none">{{ $post->kategori->nama }}</a></h6>
                  {{ $post->kutipan }}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <section>
      <div class="container my-2">
        <div class="row my-5">
          <div class="col-md-12 my-2 d-flex justify-content-center">
            <img src="/img/logo.png" alt="" style="height: 250px;">
          </div>
          <div class="col-md-12 my-2 d-flex justify-content-center">
            <h3 class="text-center">“Terlalu banyak dari kita yang tidak mewujudkan impian kita karena kita menjalani ketakutan kita.” <br> – Les Brown -</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- <section>
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
    </section> -->

    {{-- Hak Cipta --}}
    
@endsection 
