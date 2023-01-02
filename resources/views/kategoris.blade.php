
@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <h2 class="text-center">Kategori Buku</h2>
    
    <div class="row">
    @foreach ($kategoris as $kategori)
        <div class="col-md-4 my-2 d-flex justify-content-center">   
            <!-- <a href="/kategori/{{ $kategori->slug }}" style="text-decoration: none;">         -->
                <div class="card shadow" style="width: 25rem;">
                    <img src="https://source.unsplash.com/500x400/?{{ $kategori->nama }}" alt="">
                    <div class="card-body">
                        <a href="/kategori/{{ $kategori->slug }}" style="text-decoration: none;">         
                            <h5 class="card-title text-center" style="text-decoration: none;">{{ $kategori->nama }}</h5>
                        </a>
                    </div>
                </div>
            <!-- </a> -->
        </div>
    @endforeach 
    </div>
<!-- <h1>Kategori Buku</h1>
        <div class="row">
            @foreach ($kategoris as $kategori)
                <div class="col-md-4 mb-3">
                    <a href="/kategori/{{ $kategori->slug }}" style="text-decoration: none;">
                        <div class="card" style="width: 25rem;">
                            <img src="https://source.unsplash.com/500x400/?{{ $kategori->nama }}" class="mb-4" alt="">  
                            <div class="card-body shadow">
                                <h5 class="card-title text-center" style="text-decoration: none;">{{ $kategori->nama }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach   
        </div> -->
</div>

<!-- <footer class="bg-dark text-light text-center py-3 shadow">&copy; Saget Team | 2022</footer> -->
@endsection

