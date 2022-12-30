{{-- Deskripsi dan Data Tim --}}
@extends('layouts.main')

@section('container')
    {{-- deskripsi --}}
    <header>
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
    </section>

    {{-- copy right --}}
    <footer></footer>

@endsection