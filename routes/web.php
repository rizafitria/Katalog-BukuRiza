<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/buku/{id}', [BukuController::class, 'detail'])
    ->whereNumber('id')
    ->name('buku.detail');

Route::get('/kategori', [BukuController::class, 'kategori'])->name('kategori');

Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');