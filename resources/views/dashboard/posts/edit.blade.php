@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Mengubah Resensi Baru</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $post->judul) }}">
      @error('judul')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly required value="{{ old('slug', $post->slug) }}">
      @error('slug')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Kategori</label>
      <select class="form-select" name="kategori_id" >
        @foreach ($kategoris as $kategori)
          @if (old('kategori_id', $post->kategori_id) == $kategori->id)
            <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
          @else
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="gambar" class="form-label">Gambar Buku</label>
      <input type="hidden" name="oldImage" value="{{ $post->gambar }}">
      @if ($post->gambar)
        <img src="{{ asset('storage/' . $post->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
      @error('gambar')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      @error('body')
        <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="isi" type="hidden" name="isi" value="{{ old('isi', $post->isi) }}">
      <trix-editor input="isi"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Resensi</button>
  </form>
</div>

<script>
  const title = document.querySelector('#judul');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?judul=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

  function previewImage() {
    const image = document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }

</script>

@endsection