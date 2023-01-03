@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Pengguna</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pengguna as $user)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="/dashboard/pengguna/{{ $user->username }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
            <form action="/dashboard/admin/pengguna/{{ $user->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin akan menghapus?')"><i class="bi bi-trash3"></i></button>
            </form>
          </td>
      </tr>
      @endforeach

      
    </tbody>
  </table>
  
</div>  
@endsection
