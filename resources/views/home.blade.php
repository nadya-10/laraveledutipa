<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    {{-- 🧾 Judul Halaman --}}
    <div class="text-center bg-primary text-white p-4 rounded mb-4">
        <h1>DAFTAR NOVEL INDONESIA</h1>
    </div>

    {{-- 📚 Tabel Daftar Buku --}}
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Laskar Pelangi</td><td>Andrea Hirata</td><td>2005</td></tr>
            <tr><td>2</td><td>Bumi Manusia</td><td>Pramoedya Ananta Toer</td><td>1980</td></tr>
            <tr><td>3</td><td>Dilan 1990</td><td>Pidi Baiq</td><td>2014</td></tr>
            <tr><td>4</td><td>Ayat-Ayat Cinta</td><td>Habiburrahman El Shirazy</td><td>2004</td></tr>
            <tr><td>5</td><td>Negeri 5 Menara</td><td>Ahmad Fuadi</td><td>2009</td></tr>
        </tbody>
    </table>

    {{-- 📩 Form Kirim Pesan --}}
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('kirim.pesan') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Kirim Pesan</label>
                    <input type="text" name="message" id="message" class="form-control" placeholder="Tulis pesan di sini..." required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>

    {{-- 🟢 Hasil Pesan Muncul di Bawah Form --}}
    @if(session('message'))
        <div class="alert alert-success text-center mt-3">
            <strong>Pesan kamu:</strong> {{ session('message') }}
        </div>
    @endif

</div>

</body>
</html>
