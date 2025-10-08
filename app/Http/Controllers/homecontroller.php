<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $message = "Selamat datang di halaman Daftar Novel Indonesia 📚";
        return view('home', ['message' => $message]);
    }
}
