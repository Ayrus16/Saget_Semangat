@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kelola Buku</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create">Buat Resensi</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($bukus as $bk)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $bk->judul }}</td>
          <td>{{ $bk->kategori->nama }}</td>
          <td>
            <a href="/dashboard/posts/{{ $bk->slug }}" class="badge bg-info"><span data-feather="eye"></span>Lihat</a>
            <a href="/dashboard/posts/{{ $bk->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span>Ubah</a>
            <form action="/dashboard/posts/{{ $bk->slug }}" method="POST" class="d-inline">
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
