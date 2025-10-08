<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Daftar buku
        $books = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
            ['judul' => 'Dilan 1990', 'penulis' => 'Pidi Baiq', 'tahun' => 2014],
            ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'tahun' => 2004],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'tahun' => 2009],
            ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
            ['judul' => 'Rindu', 'penulis' => 'Tere Liye', 'tahun' => 2014],
            ['judul' => 'Surat Kecil untuk Tuhan', 'penulis' => 'Agnes Davonar', 'tahun' => 2008],
            ['judul' => 'Supernova', 'penulis' => 'Dee Lestari', 'tahun' => 2001],
        ];

        $message = session('message', 'Selamat datang di halaman Daftar Novel Indonesia 📚');

        return view('home', compact('books', 'message'));
    }

    public function kirimPesan(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255'
        ]);

        // simpan pesan ke session
        return redirect()->route('home')->with('message', $request->message);
    }
}
