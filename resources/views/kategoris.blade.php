
@extends('layouts.main')

@section('container')
<h1>Kategori Buku</h1>
<div class="container">
    <div class="row">
        @foreach ($kategoris as $kategori)
            <div class="col-md-4 mb-3">
                <a href="/kategori/{{ $kategori->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400/?{{ $kategori->nama }}" class="mb-4" alt="">  
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $kategori->nama }}</h5>
                    </div>
                </div>
            </a>
            </div>
        @endforeach   
    </div>
</div>
    
@endsection

