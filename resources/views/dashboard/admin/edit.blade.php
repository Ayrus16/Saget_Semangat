@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Admin</h1>
</div>

<div class="col-lg-7">
  <form method="POST" action="/dashboard/daftar-admin/{{ $user->username }}" class="mb-5" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ $user->name }}">
      @error('name')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ $user->username }}">
      @error('username')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ $user->email }}">
      @error('email')
       <div class="invalid-feedback">
        {{ $message }}
      </div>   
      @enderror
    </div>
    <div class="row mb-3">
      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar Buku</label>
    
    <input type="hidden" name="oldImage" value="{{ $user->gambar }}">
    @if ($user->gambar)
      <img src="{{ asset('storage/' . $user->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
    <button type="submit" class="btn btn-primary">Simpan Admin</button>
  </form>
</div>




@endsection