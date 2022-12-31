@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Buat Kategori Baru</h1>
</div>

<div class="col-lg-7">
  <form method="POST" action="/dashboard/kategori" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
      @error('nama')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      @error('slug')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
        <label for="penjelasan" class="form-label">Penjelasan Kategori</label>
        @error('body')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="penjelasan" type="hidden" name="penjelasan">
        <trix-editor input="penjelasan"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Kategori</button>
  </form>
</div>

<script>
    const name = document.querySelector('#nama');
    const slug = document.querySelector('#slug');
  
    name.addEventListener('change', function() {
      fetch('/dashboard/kategori/checkSlug?nama=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

@endsection