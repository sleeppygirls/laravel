<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // file controller yg dibuat


Route::get('/', function () {
    return view('welcome');
});

Route::get('/myhome', function () {  // biasa ga pake controller
    return view('home');
});

Route::get('/myabout', [HomeController::class, 'about']); // memakai controller

Route::get('/mycontact', [HomeController::class, 'kontak']); // memakai controller

Route::get('/test', [HomeController::class, 'test']); // memakai controller jika tidak diisi request (parameter) tidak error/not found

Route::get('/test/{id}', [HomeController::class, 'test']); // memakai controller yang ada request cara(localhost/test/1) jadi id bernilai 1

Route::get('/add', [HomeController::class, 'tambah']);

Route::post('/save', [HomeController::class, 'simpan']); // memakai method POST (request)

Route::get('/mytry', function () {

    $nama = 'Putri';
    $kelass = '<h1>IK2</h1>';

    // membuat if
    $lampu = 1; // 0 = lampu mati : 1 = lampu nyala

    // membuat env yang terletak pada file .env (biasanya untuk hal penting)
    $kelas = env('KELAS', 'Data kelas tidak ada');

    // membuat switch saam dengan if
    $nilai = "A";

    // membuat perulangan dengan for
    $for = 10;

    // membuat foreach
    $hobbis = [
        'masak',
        'baca',
        'nulis'
    ];

    return view('try', [
        'nama' => $nama,         // warna oren untuk memanggil diblade
        'kelass' => $kelass,
        'lampu' => $lampu,
        'kelas' => $kelas,
        'nilai' => $nilai,
        'for' => $for,
        'hobbi' => $hobbis
    ]);
});