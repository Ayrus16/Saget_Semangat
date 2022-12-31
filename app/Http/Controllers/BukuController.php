<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {

        // $title = '';
        // if(request('kategori')) {
        //     $kategori = Kategori::firstWhere('slug', request('kategori'));
        //     $title = ' in ' . $kategori->nama;
        // }

        // if(request('penulis')) {
        //     $penulis = User::firstWhere('username', request('penulis'));
        //     $title = ' by ' . $penulis->name;
        // }

        // return view('buku', [
        //     "title" => "Semua Buku" . $title,
        //     "active" => "buku",
        //     "buku" => Buku::latest()->filter(request(['search', 'kategori', 'penulis']))->paginate(7)->withQueryString()
        // ]);

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
