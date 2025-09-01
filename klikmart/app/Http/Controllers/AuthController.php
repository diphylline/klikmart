<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin(){
        $judul = "Halaman Login";
        return view('auth.login')->with('halaman_judul',$judul);
    }
    public function showRegister(){
        $judul = "Halaman Register";
        return view('auth.register')->with('halaman_judul',$judul);
    }
}
