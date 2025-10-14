<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Ini file route utama aplikasi kamu.
| Sudah bersih, tidak ada route kirim pesan.
*/

// 🏠 Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// 👥 Halaman Anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');

// 📚 Peminjaman Buku
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::post('/peminjaman/tambah', [PeminjamanController::class, 'store'])->name('peminjaman.tambah');
