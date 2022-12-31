@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Kategori</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-6">
  <a href="/dashboard/kategori/create" class="btn btn-primary mb-3">Buat Kategori</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kategoris as $kategori)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kategori->nama }}</td>
          <td>
            <a href="/dashboard/kategori/{{ $kategori->slug }}" class="badge bg-info"><span data-feather="eye"></span>Lihat</a>
            <a href="/dashboard/kategori/{{ $kategori->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span>Ubah</a>
            <form action="/dashboard/kategori/{{ $kategori->slug }}" method="POST" class="d-inline">
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