<?php

namespace App\Http\Controllers;

// untuk membuat request
use Illuminate\Http\Request;

// menggunakan query builder
use Illuminate\Support\Facades\DB;

// menggunakan eloquent
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){   // warna kuning class yg dipanggil di route

        // query builder (menampilkan semua data)
        // $kategoris = DB::table('kategoris')->get();     // $kategoris(nm variabel)

        // eloquent (menampilkan semua data)
        $kategoris = Kategori::all();               // Kategori(file model yg dibuat)

        return view('kategori', [       // warna oren(kategori) nama file di blade
            'data' => $kategoris        // data(nm variabel)
        ]); 
    }

    public function add()               // add(klas yg dibuat di web)
    {
        return view('form_kategori');       // dikembalikan ke form_kategori untuk menambahkan data
    }

    public function edit($id)               // edit(klas yg dibuat di web)
    {                                           // $id(request/parameter)
        $kategori = Kategori::find($id);        // (mencari berdasarkan id(primary key))

        // dd($kategori);

        return view('form_kategori', [          // dikembalikan ke form_kategori blade
            'data' => $kategori                 
        ]);
    }

    public function save(Request $req)
    {
        $old_kode = @$req->old_kode;

        if ($old_kode) {
            // Edit with eloquent
            Kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket
            ]);
        } else {
            // Add with query builder
            // DB::table('kategoris')->insert([
            //     'kode_kategori' => $req->kode,
            //     'nama' => $req->nama,
            //     'ket' => $req->ket
            // ]);

            // Add with eloquent 1
            Kategori::create([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket
            ]);

            // Add with eloquent 2
            // $kategori = new Kategori;
            // $kategori->kode_kategori = $req->kode;
            // $kategori->nama = $req->nama;
            // $kategori->ket = $req->ket;
            // $kategori->save();
        }

        return redirect('/kategori');
    }

    public function delete($id)
    {
        // query builder
        // DB::table('kategoris')->where('kode_kategori', $id)->delete();

        // eloquent 1
        Kategori::find($id)->delete();

        // eloquent 2
        // Kategori::where('kode_kategori', $id)->delete();

        return redirect('/kategori');
    }
}
