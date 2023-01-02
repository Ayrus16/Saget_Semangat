{{-- Tampilan Daftar Resensi Buku Seluruhnya --}}
@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <h2 class="text-center">{{ $title }}</h2>


    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/buku">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark ms-1" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row gx-5 mb-5">
    @foreach ($buku as $bk)
        <div class="col-md-4 my-2 d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <img src="https://source.unsplash.com/500x400/?{{ $bk->kategori->nama }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2><a href="/buku/{{ $bk->slug }}" class="text-decoration-none">{{ $bk->judul }}</a></h2>
                    <h6>Dari : <a href="/penulis/{{ $bk->penulis->username }}" class="text-decoration-none">{{ $bk->penulis->name }}</a> | <a href="/kategori/{{ $bk->kategori->slug }}" class="text-decoration-none">{{ $bk->kategori->nama }}</a></h6>
                    {{ $bk->kutipan }}
                    <p>{{ $bk->kutipan }}</p>
                    <a href="/buku/{{ $bk->slug }}" class="text-decoration-none">Baca lebih banyak..</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <!-- <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/buku">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>



    @if ($buku->count())
        @foreach ($buku as $bk)
            <article class="mb-5 border-bottom pb-3">
                <img src="https://source.unsplash.com/500x400/?{{ $bk->kategori->nama }}" class="mb-4" alt="">

                <h2>
                    <a href="/buku/{{ $bk->slug }}" class="text-decoration-none">{{ $bk->judul }}</a>
                </h2>

                <h6>Dari. <a href="/penulis/{{ $bk->penulis->username }}" class="text-decoration-none">{{ $bk->penulis->name }}</a> | <a href="/kategori/{{ $bk->kategori->slug }}" class="text-decoration-none">{{ $bk->kategori->nama }}</a></h6>

                <p>{{ $bk->kutipan }}</p>
                
                <a href="/buku/{{ $bk->slug }}" class="text-decoration-none">Baca lebih banyak..</a>
            </article>
        @endforeach   
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif -->
</div>

<!-- <footer class="bg-dark text-light text-center py-3 shadow">&copy; Saget Team | 2022</footer> -->
@endsection

