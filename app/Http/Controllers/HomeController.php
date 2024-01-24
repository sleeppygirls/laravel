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

    public function tambah()
    {
        return view('input');  // class tambah dipanggil dan membuka ke file input blade
    }

    public function simpan(Request $request)       // ini menggunakan method post
    {
        $nama = $request->input('nama');            // class simpan dipanggil untuk menjalankan request
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $ket,
        ]);
    }
}
