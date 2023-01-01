<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminPenggunaController extends Controller
{

    public function index()
    {
        return view('dashboard.pengguna.index', [
            'pengguna' => User::where('is_admin', false)->get()
            
        ]);
    }
}
