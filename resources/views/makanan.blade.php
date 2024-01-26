@extends('template')

@section('judul', 'Putri Makanan') {{-- 1: memanggil yield, 2: isinya --}}

@section('content') {{-- ini lebih dari satu baris dikasi endsection --}}

    {{-- <table border="1">
        <thead>
            <tr>
                <td>kode Makanan</td>
                <td>Nama</td>
                <td>Kategori</td>
                <td>Harga</td>
                <td>Kategori</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)   
                <tr>
                    <td>{{ $food->kode_makanan }}</td>
                    <td>{{ $food->nama }}</td>
                    <td>{{ $food->kategori }}</td>
                    <td>{{ $food->harga }}</td>
                    <td>{{ $food->ket }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    {{-- $foods adalah nama yg diberi di home controller ketika dikembalikan ke file makanan blade --}}
<div class="container" style="background-color: #FFF">
<div class="mt-5 mb-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">kode Makanan</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
            <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{ $food->kode_makanan }}</td>
                <td>{{ $food->nama }}</td>
                <td>{{ $food->kategori }}</td>
                <td>{{ $food->harga }}</td>
                <td>{{ $food->ket }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
