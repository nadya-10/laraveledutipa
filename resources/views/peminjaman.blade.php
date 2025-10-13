<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6fa;
        }
        .header {
            background-color: #6c9ff0;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }
        .table thead {
            background-color: #dbeafe;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f0f6ff;
        }
        .btn-custom {
            background-color: #6c9ff0;
            color: white;
        }
        .btn-custom:hover {
            background-color: #508ae6;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    {{-- 🧾 Judul Halaman --}}
    <div class="text-center header">
        <h1>📚 RIWAYAT PEMINJAMAN BUKU</h1>
    </div>

    {{-- 🔍 Form Pencarian --}}
    <form action="{{ route('peminjaman') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari nama atau judul buku..." value="{{ $search ?? '' }}">
            <button class="btn btn-custom" type="submit">Cari</button>
        </div>
    </form>

    {{-- 📅 Tabel Riwayat --}}
    <table class="table table-bordered table-striped shadow-sm">
        <thead>
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
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['tgl_pinjam'] }}</td>
                    <td>{{ $item['tgl_kembali'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-danger">Tidak ada data peminjaman.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- 📩 Form Pesan --}}
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <form action="{{ route('peminjaman.pesan') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Kirim Pesan ke Peminjam</label>
                    <input type="text" name="message" id="message" class="form-control" placeholder="Tulis pesan di sini..." required>
                </div>
                <button type="submit" class="btn btn-custom">Kirim</button>
            </form>
        </div>
    </div>

    {{-- 🟢 Pesan tampil --}}
    @if(session('message'))
        <div class="alert alert-success text-center mt-3 shadow-sm">
            <strong>Pesan kamu:</strong> {{ session('message') }}
        </div>
    @endif

</div>

</body>
</html>
