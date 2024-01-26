<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // file controller yg dibuat
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/mymenu', [MenuController::class, 'index']); // memakai controller

Route::get('/mykategori', [KategoriController::class, 'index']); // memakai controller