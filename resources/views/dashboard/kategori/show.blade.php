@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">Kategori</h2>

        <div class="container mt-4">
          <div class="row">
            <h5>{{ $kategoris->nama }}</h5>
            <p>{{ $kategoris->penjelasan }}</p>
            <a href="/dashboard/kategori">Kembali ke Dashboard</a>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection