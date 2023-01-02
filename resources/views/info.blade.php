{{-- Deskripsi dan Data Tim --}}
@extends('layouts.main')

@section('container')

  <section class="container text-center mt-5">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Informasi Tim Saget</h1>
        <p class="lead text-muted">Kami adalah mahasiswa semester 5 Teknik Informatika yang memiliki Tugas Besar Website Application dengan mengangkat tema Resensi Buku yang akan memberikan rekomendasi Buku dalam rangka meningkatkan minat baca sobat Saget.</p>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5">
      <div class="row">
      @foreach($informasi as $info)
        <div class="col-md-3 p-3 d-flex justify-content-center text-center">
          <div class="card" style="width: 25rem; border: none;">
            <img src="img/{{ $info->gambar }}" class="card-img-top rounded-5 shadow" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $info->name }}</h5>
              <h6 class="card-title">{{ $info->email }}</h6>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </section>
  </div>








    <!-- <header class="mt-5">
        <div class="container mt-3 mb-5">
            <div class="row">
                <div class="col-md-6">
                    {{-- Gambar BG --}}
                    <h1 class="mb-5">Informasi Tim Saget</h1>
                    <p>Kami adalah mahasiswa semester 5 Teknik Informatika yang memiliki Tugas Besar Website Application dengan mengangkat tema Resensi Buku yang akan memberikan rekomendasi Buku dalam rangka meningkatkan minat baca sobat Saget.
                </div>
                <div class="col-md-6 text-center pt-5">
                  <img class="" src="/img/logo.png" alt="" style="width: 200px;">
                </div>
            </div>
        </div>  
    </header>

    {{-- daftar anggota --}}
    <section>
      <div class="container text-center my-5">
        <div class="row d-flex justify-content-center">
        @foreach($informasi as $info)
          <div class="col-md-3">
            
              <div class="card" style="width: 18rem;">
                <img src="img/{{ $info->gambar }}" class="card-img-top img-profil rounded-5 shadow-lg mt-5" alt="..." style="height: 300px; width: auto;">
                <div class="card-body mt-5 text-center">
                  <h5 class="card-title">{{ $info->name }}</h5>
                  <h6 class="card-title">{{ $info->email }}</h6>
                </div>
              </div>
            
          </div>
          @endforeach
        </div>
      </div>
    </section> -->

    <!-- <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {{-- Gambar BG --}}
                    <h1>Informasi Tim Saget</h1>
                    <h5>Kami adalah mahasiswa semester 5 Teknik Informatika yang memiliki Tugas Besar Website Application dengan mengangkat tema Resensi Buku yang akan memberikan rekomendasi Buku dalam rangka meningkatkan minat baca sobat Saget.
                </div>
            </div>
        </div>  
    </header>

    {{-- daftar anggota --}}
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            @foreach($informasi as $info)
              <div class="card" style="width: 18rem;">
                <img src="img/{{ $info->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $info->name }}</h5>
                  <h6 class="card-title">{{ $info->email }}</h6>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section> -->

    {{-- copy right --}}
    <!-- <footer class="bg-dark text-light text-center py-3 shadow">&copy; Saget Team | 2022</footer> -->

@endsection