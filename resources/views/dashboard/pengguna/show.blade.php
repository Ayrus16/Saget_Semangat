@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">User</h2>

        <div class="container mt-4">
          <div class="row">
            <h5>{{ $user->name }}</h5>
            <h5>{{ $user->Username }}</h5>
            <h5>{{ $user->Email }}</h5>
            <article>
              
            </article>
            <a href="/dashboard/daftar-admin">Kembali ke Dashboard</a>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection