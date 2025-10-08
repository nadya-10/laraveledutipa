<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Kirim pesan
Route::post('/kirim-pesan', [HomeController::class, 'kirimPesan'])->name('kirim.pesan');
