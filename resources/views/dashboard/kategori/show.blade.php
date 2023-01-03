@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">Kategori</h2>

        <div class="container mt-4">
          <div class="row">
            <h5>{{ $kategoris->nama }}</h5>
            <article>
              {!! $kategoris->penjelasan !!}
            </article>

          </div>
        </div>

      </div>
    </div>
    <a href="/dashboard/kategori" class="btn btn-primary">Kembali</a>
  </div>
  
@endsection