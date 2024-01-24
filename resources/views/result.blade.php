@extends('template')

@section('judul', 'Putri Makanan') {{-- 1: memanggil yield, 2: isinya --}}

@section('content') {{-- ini lebih dari satu baris dikasi endsection --}}
    <p>Nama : {{ $nama }}</p>
    <p>Kategori : {{ $kategori }}</p>
    <p>Harga : {{ $harga }}</p>
    <p>Keterangan : {{ $keterangan }}</p>
@endsection