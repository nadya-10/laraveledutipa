<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $peminjaman = Peminjaman::when($search, function ($query, $search) {
            return $query->where('nama_peminjam', 'like', "%{$search}%")
                         ->orWhere('judul_buku', 'like', "%{$search}%");
        })->get();

        return view('peminjaman.index', compact('peminjaman', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'judul_buku' => $request->judul_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
        ]);

        return redirect()->route('peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan!');
    }
}
