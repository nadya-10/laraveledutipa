<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('peminjaman')->insert([
            [
                'nama_peminjam' => 'Andi',
                'judul_buku' => 'Laskar Pelangi',
                'tanggal_pinjam' => '2025-10-10',
                'tanggal_kembali' => '2025-10-17',
            ],
            [
                'nama_peminjam' => 'Budi',
                'judul_buku' => 'Bumi Manusia',
                'tanggal_pinjam' => '2025-10-09',
                'tanggal_kembali' => '2025-10-16',
            ],
            [
                'nama_peminjam' => 'Citra',
                'judul_buku' => 'Dilan 1990',
                'tanggal_pinjam' => '2025-10-08',
                'tanggal_kembali' => '2025-10-15',
            ],
            [
                'nama_peminjam' => 'Dewi',
                'judul_buku' => 'Ayat-Ayat Cinta',
                'tanggal_pinjam' => '2025-10-12',
                'tanggal_kembali' => '2025-10-19',
            ],
        ]);
    }
}
