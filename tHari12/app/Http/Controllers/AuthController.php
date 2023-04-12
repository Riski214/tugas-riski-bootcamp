<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register(){
        return view('halaman.register');
    }
    function welcome(Request $request){
        $nama1 = $request['nama1'];
        $nama2 = $request['nama2'];
        return view('halaman.welcome', compact('nama1', 'nama2'));
    }
}
