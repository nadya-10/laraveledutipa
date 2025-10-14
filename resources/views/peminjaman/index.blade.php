<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">📚 Data Peminjaman Buku</h2>

    {{-- 🔍 Form Search --}}
    <form method="GET" action="{{ route('peminjaman') }}" class="mb-3 d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Cari nama atau judul..." value="{{ $search }}">
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    {{-- ✅ Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- 📝 Form Tambah Data --}}
    <form method="POST" action="{{ route('peminjaman.tambah') }}" class="mb-4">
        @csrf
        <div class="row g-2">
            <div class="col-md-3">
                <input type="text" name="nama_peminjam" class="form-control" placeholder="Nama peminjam" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="judul_buku" class="form-control" placeholder="Judul buku" required>
            </div>
            <div class="col-md-2">
                <input type="date" name="tanggal_pinjam" class="form-control" required>
            </div>
            <div class="col-md-2">
                <input type="date" name="tanggal_kembali" class="form-control" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">Tambah</button>
            </div>
        </div>
    </form>

    {{-- 📋 Tabel Data --}}
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peminjaman as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_peminjam }}</td>
                <td>{{ $item->judul_buku }}</td>
                <td>{{ $item->tanggal_pinjam }}</td>
                <td>{{ $item->tanggal_kembali }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada data 📭</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
