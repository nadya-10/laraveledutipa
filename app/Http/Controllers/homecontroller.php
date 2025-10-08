<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
            ['judul' => 'Dilan 1990', 'penulis' => 'Pidi Baiq', 'tahun' => 2014],
            ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'tahun' => 2004],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['judul' => 'Sang Pemimpi', 'penulis' => 'Andrea Hirata', 'tahun' => 2006],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'tahun' => 2009],
            ['judul' => 'Laut Bercerita', 'penulis' => 'Leila S. Chudori', 'tahun' => 2011],
            ['judul' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'penulis' => 'Dee Lestari', 'tahun' => 2001],
            ['judul' => 'Madre', 'penulis' => 'Dewi Lestari', 'tahun' => 2020],
        ];

        // Ambil keyword dari input pencarian
        $search = $request->input('search');

        // Jika ada pencarian, filter buku
        if ($search) {
            $books = array_filter($books, function ($book) use ($search) {
                return stripos($book['judul'], $search) !== false ||
                       stripos($book['penulis'], $search) !== false;
            });
        }

        return view('home', compact('books', 'search'));
    }
}
