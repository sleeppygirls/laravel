<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;

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

    public function view_makanan(){             // klas view_makanan (web)
        $makanans = Makanan::all();             // membuat nm variabel($makanans)  Makanan(file model) all(menampilkan semua isi)
    
        return view('makanan', [                // dikembalikan ke file makanan blade
            'foods' => $makanans                // dikasi nm foods
        ]);
    }

    public function test_eloquent()
    {
        // select data
        // $makanans = Makanan::all();
        // dd($makanans);

        // insert data tanpa nm variabel
        // Makanan::create([
        //     'kode_makanan' => 'M002',
        //     'nama' => 'Mie Ayam',
        //     'kategori' => 'Makanan',
        //     'harga' => 12000,
        //     'ket' => 'Ada',
        // ]);

        //insert data dengan nm variabel
        // $makanan = new Makanan;
        // $makanan->kode_makanan = 'M003';
        // $makanan->nama = 'Sate';
        // $makanan->kategori = 'Makanan';
        // $makanan->harga = 11000;
        // $makanan->ket = 'Ada';
        // $makanan->save();

        //hapus data langsung cari
        Makanan::find('M001')->delete();

        // hapus data dengan memasukkan ke variabel
        // $makanan = Makanan::find('M002');
        // $makanan->delete();

        //update data
        //     $makanan = Makanan::find('M003');
        //     $makanan->nama = 'Kuaci';
        //     $makanan->kategori = 'Snack';
        //     $makanan->harga = 5000;
        //     $makanan->ket = 'Kosong';
        //     $makanan->save();

            return 'Data Masuk';
    }
}
