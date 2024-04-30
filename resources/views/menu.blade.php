@extends('template.index')

@section('judul', 'Putri Menu') {{-- 1: memanggil yield, 2: isinya --}}

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <a href="/menu/add">
                    <button type="button" class="btn btn-success">Add</button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kode Makanan</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->kode_makanan }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->kategori }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>{{ $row->ket }}</td>
                                <td>
                                    <a href="/menu/{{ $row->kode_makanan }}/edit">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                    <a href="/menu/{{ $row->kode_makanan }}/delete">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
