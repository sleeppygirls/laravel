<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // file controller yg dibuat
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']); // memakai controller
Route::get('/menu/add', [MenuController::class, 'add']);   //untuk halaman tambah data dgn class add
Route::get('/menu/{id}/edit', [MenuController::class, 'edit']);       // {id} parameter
Route::get('/menu/{id}/delete', [MenuController::class, 'delete']);
Route::post('/menu/save', [MenuController::class, 'save']);       // post krn menampilkan ke halaman lain



Route::get('/kategori', [KategoriController::class, 'index']); // memakai controller
Route::get('/kategori/add', [KategoriController::class, 'add']);   //untuk halaman tambah data dgn class add
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);       // {id} parameter
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);
Route::post('/kategori/save', [KategoriController::class, 'save']);       // post krn menampilkan ke halaman lain