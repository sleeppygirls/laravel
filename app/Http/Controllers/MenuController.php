<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){   // warna kuning class yg dipanggil di route
        return view('menu'); // warna oren nama file di blade
    }
}
