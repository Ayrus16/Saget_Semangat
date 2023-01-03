@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Sugeng Rawuh Sobat Saget</h1>
</div>


<div class="card mb-3" style="max-width: 540px; border:none;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/img/{{ Auth::user()->gambar }}" class="img-fluid rounded-start" alt="/img/{{ Auth::user()->name }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ Auth::user()->name }}</h5>
            <p class="card-text text-muted">{{ Auth::user()->email }}</p>
          </div>
        </div>
      </div>
    </div>
<div class="container text-center">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-4 mt-4">
        <div class="card shadow" style="border:none;">
        <img src="https://source.unsplash.com/300x80/?{{ $jumlBuku }}" alt="{{ $jumlBuku }}">
          <h2 class="mt-2">{{ $jumlBuku }}</h2>
          <p>Jumlah Buku</p>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card shadow" style="border:none;">
          <img src="https://source.unsplash.com/300x80/?{{ $jumlUser }}" alt="{{ $jumlUser }}">
            <h2 class="mt-2">{{ $jumlUser }}</h2>
          <p>Jumlah User</p>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card shadow" style="border:none;">
        <img src="https://source.unsplash.com/300x80/?{{ $jmlKate }}" alt="{{ $jmlKate }}">
          <h2 class="mt-2">{{ $jmlKate }}</h2>
          <p>Jumlah Kategori</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection