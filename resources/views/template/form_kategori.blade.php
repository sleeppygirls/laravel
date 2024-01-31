@extends('template.index')

@section('judul', 'Putri Form Kategori') {{-- 1: memanggil yield, 2: isinya --}}

@section('content') {{-- ini lebih dari satu baris dikasi endsection --}}
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="/kategori/save" method="POST">
                    @csrf
                    @isset($data)
                        <input type="hidden" name="old_kode" value="{{ @$data->kode_kategori }}">
                    @endisset
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
@endsection
