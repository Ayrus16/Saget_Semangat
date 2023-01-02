@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Admin</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif
  <a href="/dashboard/daftar-admin/create" class="btn btn-primary mb-3">tambah</a>
<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($admin as $us)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>
            <img width="50" src="/img/{{ $us->gambar }}" class="mb-4" alt="">
          </td>
          <td>{{ $us->name }}</td>
          <td>{{ $us->username }}</td>
          <td>{{ $us->email }}</td>
          <td>
            <a href="/dashboard/daftar-admin/{{ $us->username }}" class="badge bg-info"><span data-feather="eye"></span>Lihat</a>
            <form action="/dashboard/daftar-admin/{{ $us->username }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin akan menghapus?')"><span data-feather="x-circle"></span>Hapus</button>
            </form>
          </td>
      </tr>
      @endforeach

      
    </tbody>
  </table>
  
</div>  
@endsection
