<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 📚 Daftar 10 novel Indonesia populer
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
            ['judul' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'penulis' => 'Dee Lestari', 'tahun' => 2001],
        ];

        // Kirim data ke view
        return view('home', compact('books'));
    }
}
