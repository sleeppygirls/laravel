@extends('template.index')

@section('judul', 'Putri Kategori') {{-- 1: memanggil yield, 2: isinya --}}

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <a href="/kategori/add">
                    <button type="button" class="btn btn-success">Add</button>
                </a>
            </div>
        </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kode Kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->kode_kategori }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->ket }}</td>
                            <td>
                                <a href="/kategori/{{ $row->kode_kategori }}/edit">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                <a href="/kategori/{{ $row->kode_kategori }}/delete">
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
