<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $peminjaman = [
            ['nama' => 'Andi',  'judul' => 'Laskar Pelangi',                        'tgl_pinjam' => '2025-10-10', 'tgl_kembali' => '2025-10-17'],
            ['nama' => 'Budi',  'judul' => 'Bumi Manusia',                          'tgl_pinjam' => '2025-10-09', 'tgl_kembali' => '2025-10-16'],
            ['nama' => 'Citra', 'judul' => 'Dilan 1990',                            'tgl_pinjam' => '2025-10-08', 'tgl_kembali' => '2025-10-15'],
            ['nama' => 'Dewi',  'judul' => 'Ayat-Ayat Cinta',                       'tgl_pinjam' => '2025-10-12', 'tgl_kembali' => '2025-10-19'],
            ['nama' => 'Eka',   'judul' => 'Laut Bercerita',                        'tgl_pinjam' => '2025-10-13', 'tgl_kembali' => '2025-10-20'],
            ['nama' => 'Fajar', 'judul' => 'Perahu Kertas',                         'tgl_pinjam' => '2025-10-11', 'tgl_kembali' => '2025-10-18'],
            ['nama' => 'Gita',  'judul' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'tgl_pinjam' => '2025-10-07', 'tgl_kembali' => '2025-10-14'],
            ['nama' => 'Hana',  'judul' => 'Negeri 5 Menara',                       'tgl_pinjam' => '2025-10-06', 'tgl_kembali' => '2025-10-13'],
            ['nama' => 'Iqbal', 'judul' => 'Madre',                                 'tgl_pinjam' => '2025-10-05', 'tgl_kembali' => '2025-10-12'],
            ['nama' => 'Joko',  'judul' => 'Sang Pemimpi',                          'tgl_pinjam' => '2025-10-04', 'tgl_kembali' => '2025-10-11'],
        ];

        $search = $request->input('search');

        if ($search) {
            $peminjaman = array_filter($peminjaman, function ($item) use ($search) {
                return stripos($item['nama'], $search) !== false ||
                       stripos($item['judul'], $search) !== false;
            });
        }

        return view('peminjaman', compact('peminjaman', 'search'));
    }

    public function kirimPesan(Request $request)
    {
        $request->validate(['message' => 'required']);
        return redirect()->route('peminjaman')->with('message', $request->message);
    }
}
