<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){   // warna kuning class yg dipanggil di route
        return view('kategori'); // warna oren nama file di blade
    }
}
