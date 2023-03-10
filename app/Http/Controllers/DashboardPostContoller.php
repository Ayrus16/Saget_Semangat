<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostContoller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->type == 'manager' || auth()->user()->type == 'admin') {
            return view('dashboard.posts.index', [
                'bukus' => Buku::all()
            ]);
        } else {
            return view('dashboard.posts.index', [
                'bukus' => Buku::where('user_id',auth()->user()->id)->get()
            ]);
        }
        
        // Buat Resensi User Saja
        // return view('dashboard.posts.index',[
        //     'bukus' => Buku::where('user_id',auth()->user()->id)->get()
        // ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:bukus',
            'kategori_id' => 'required',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isi), 100);

        Buku::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Berhasil Menambahkan Resensi Baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $post)
    {
        return view('dashboard.posts.show',[
            'bk' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $post)
    {
        $rules = [
            'judul' => 'required|max:255',
            
            'kategori_id' => 'required',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ];
        

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:bukus';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')) {
            if ($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isi), 100);

        Buku::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Berhasil Mengediit Resensi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $post)
    {
        if ($post->gambar){
            Storage::delete($post->gambar);
        }

        Buku::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Berhasil menghapus! resensi');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Buku::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
