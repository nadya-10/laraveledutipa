<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

// 🏠 Halaman utama (daftar buku)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/kirim-pesan', [HomeController::class, 'kirimPesan'])->name('kirim.pesan');

// 👥 Halaman anggota perpustakaan
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::post('/anggota/pesan', [AnggotaController::class, 'kirimPesan'])->name('anggota.pesan');

// 📚 Halaman peminjaman buku
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::post('/peminjaman/pesan', [PeminjamanController::class, 'kirimPesan'])->name('peminjaman.pesan');
