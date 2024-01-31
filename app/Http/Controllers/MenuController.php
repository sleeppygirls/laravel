<?php

namespace App\Http\Controllers;

// untuk membuat request
use Illuminate\Http\Request;

// menggunakan query builder
use Illuminate\Support\Facades\DB;

// menggunakan eloquent
use App\Models\Makanan;

class MenuController extends Controller
{
    public function index(){   // warna kuning class yg dipanggil di route

        // query builder (menampilkan semua data)
        $makanan = DB::table('makanans')->get();     // $makanan(nm variabel)

        // eloquent (menampilkan semua data)
        $makanan = Makanan::all();               // makanan(file model yg dibuat)

        return view('menu', [       // warna oren(makanan) nama file di blade
            'data' => $makanan        // data(nm variabel)
        ]); 
    }

    public function add()               // add(klas yg dibuat di web)
    {
        return view('form_menu');       // dikembalikan ke form_makanan untuk menambahkan data
    }

    public function edit($id)               // edit(klas yg dibuat di web)
    {                                           // $id(request/parameter)
        $makanan = Makanan::find($id);        // (mencari berdasarkan id(primary key))

        return view('form_menu', [          // dikembalikan ke form_menu blade
            'data' => $makanan                 
        ]);
    }

    public function save(Request $req)
    {
        $old_kode = @$req->old_kode;

        if ($old_kode) {
            // Edit with eloquent
            Makanan::where('kode_makanan', $old_kode)->update([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket
            ]);
        } else {
            // Add with query builder
            DB::table('makanans')->insert([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket
            ]);

            // Add with eloquent 1
            Makanan::create([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket
            ]);

            // Add with eloquent 2
            $makanan = new Makanan;
            $makanan->kode_makanan = $req->kode;
            $makanan->nama = $req->nama;
            $makanan->kategori = $req->kategori;
            $makanan->harga = $req->harga;
            $makanan->ket = $req->ket;
            $makanan->save();
        }

        return redirect('/menu');
    }

    public   function delete($id)
    {
        // query builder
        DB::table('makanans')->where('kode_makanan' $id)->delete();

        // eloquent 1
        Makanan::find($id)->delete();

        // eloquent 2
        Makanan::where('kode_makanan', $id)->delete();

        return redirect('/menu');
    }
}
