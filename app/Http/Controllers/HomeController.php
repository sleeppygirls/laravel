<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){   // warna kuning class yg dipanggil di route
        return view('about'); // warna oren nama file di blade
    }

    public function kontak(){   // warna kuning class yg dipanggil di route
        return view('contact'); // warna oren nama file di blade
    }

    public function test($id =0){     // $id adalah untuk mengisi data (diisi langsung nilainya sebelah path file) 
        return view('test', ['id' => $id]);
    }
}
