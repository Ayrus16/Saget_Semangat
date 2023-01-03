@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">User</h2>


    <div class="row">
        <div class="col-md-6 my-2 d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                <h5>{{ $pengguna->name }}</h5>
                <h6>{{ $pengguna->username }}</h6>
                <p class="text-muted">{{ $pengguna->email }}</p>                     
                <a href="/dashboard/pengguna" class="btn btn-primary">Kembali</a>
              </div>
            </div>
        </div>
    </div>

      </div>
    </div>
  </div>
@endsection