<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route utama (/) diarahkan ke HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
