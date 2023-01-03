@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">User</h2>

        <div class="container mt-4">
          <div class="row">
              <h5>{{ $pengguna->name }}</h5>
              <h5>{{ $pengguna->username }}</h5>
              <h5>{{ $pengguna->email }}</h5>  

            <a href="/dashboard/pengguna">Kembali ke Dashboard</a>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection