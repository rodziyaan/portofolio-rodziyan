<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Contoh metode untuk menampilkan halaman home
    public function show ()
    {
        return view('Home');
    }
}