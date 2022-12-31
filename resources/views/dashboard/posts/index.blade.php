@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kelola Buku</h1>
</div>
<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create">Tambah Data</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Kategory</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($buku as $bk)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $bk->judul }}</td>
          <td>{{ $bk->kategori->nama }}</td>
          <td>
            <a href="/dashboard/posts/{{ $bk->slug }}">view</a>
            <a href="">edit</a>
            <a href="">hapus</a>
          </td>
      </tr>
      @endforeach

      
    </tbody>
  </table>
  
</div>  
@endsection
