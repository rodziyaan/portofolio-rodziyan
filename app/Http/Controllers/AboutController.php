<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Contoh metode untuk menampilkan halaman about
    public function show ()
    {
        return view('About');
    }
}
