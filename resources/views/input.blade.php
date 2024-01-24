@extends('template')

@section('judul', 'Putri Input') {{-- 1: memanggil yield, 2: isinya --}}

@section('content') {{-- ini lebih dari satu baris dikasi endsection --}}
    <form action="/save" method="POST">   {{-- di file input membuat form (tampilan) --}}
        @csrf
        <div>
            <label for="nama">Nama</label>      {{-- membuat method post dan di lempar ke path save (di web) --}}
            <input type="text" name="nama">
        </div>

        <div>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori">
        </div>

        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga">
        </div>

        <div>
            <label for="ket">Keterangan</label>
            <input type="text" name="ket">
        </div>

        <button type="submit">Simpan</button>
    </form>
@endsection

