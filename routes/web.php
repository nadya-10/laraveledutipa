<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman utama
Route::get('/home', function () {
    return view('home');
});

// Kirim pesan
Route::post('/kirim-pesan', function (Request $request) {
    $request->validate([
        'message' => 'required|string|max:255',
    ]);

    return redirect('/home')->with('message', $request->message);
})->name('kirim.pesan');
