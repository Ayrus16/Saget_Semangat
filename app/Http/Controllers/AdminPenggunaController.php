<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminPenggunaController extends Controller
{

    public function index()
    {
        return view('dashboard.pengguna.index', [
            'pengguna' => User::where('type', 0)->get()
            
        ]);
    }

    public function show(User $user)
    {
        return view('dashboard.pengguna.show', [
            'pengguna' => $user
        ]);
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/pengguna')->with('success', 'Pengguna Berhasil Dihapus!');
    }
}
