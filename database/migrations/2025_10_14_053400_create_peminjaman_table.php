<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->string('nama_peminjam');   // ✅ ubah dari 'nama'
            $table->string('judul_buku');      // ✅ ubah dari 'judul'
            $table->date('tanggal_pinjam');    // ✅ ubah dari 'tgl_pinjam'
            $table->date('tanggal_kembali');   // ✅ ubah dari 'tgl_kembali'
            $table->timestamps();              // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
