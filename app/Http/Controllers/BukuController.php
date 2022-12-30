<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        return view('buku', [
            "title" => 'Semua Buku',
            "active" => 'buku',
            // "buku" => Buku::latest()->get() ini kalo buku yg pertama mau dijadiin hero post
            "buku" => Buku::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Buku $post)
    {
        return view('post', [
            "title" => 'PerBuku',
            "active" => 'buku',
            "post" => $post
        ]);
    }
}
