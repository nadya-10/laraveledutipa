<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #e3f2fd, #bbdefb);
            font-family: 'Poppins', sans-serif;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            background: linear-gradient(135deg, #42a5f5, #1976d2);
            color: #ffffff;
            text-align: center;
            padding: 35px 15px;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 1px;
            border-radius: 20px 20px 0 0;
            text-transform: uppercase;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
            box-shadow: inset 0 -4px 10px rgba(255, 255, 255, 0.2);
        }

        .header i {
            font-size: 2.3rem;
            color: #ffeb3b;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .container {
            max-width: 950px;
            margin: 40px auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .search-box {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f8ff;
            padding: 20px;
        }

        .search-box input {
            width: 60%;
            max-width: 400px;
            padding: 10px 40px;
            border-radius: 30px;
            border: 2px solid #90caf9;
            outline: none;
            transition: all 0.3s;
        }

        .search-box input:focus {
            border-color: #1976d2;
            box-shadow: 0 0 10px rgba(25, 118, 210, 0.3);
        }

        .search-box i {
            position: relative;
            left: -35px;
            color: #1976d2;
            font-size: 1.2rem;
        }

        table {
            width: 90%;
            margin: 20px auto 40px auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background: #1976d2;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        tbody tr:hover {
            background: #e3f2fd;
            transition: 0.3s;
        }

        td, th {
            text-align: center;
            padding: 10px;
        }

        footer {
            text-align: center;
            color: #666;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="bi bi-journal-bookmark-fill"></i>
            <span>Daftar Novel Indonesia</span>
        </div>

        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari judul atau penulis...">
            <i class="bi bi-search"></i>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody id="bookTable">
                <tr><td>1</td><td>Laskar Pelangi</td><td>Andrea Hirata</td><td>2005</td></tr>
                <tr><td>2</td><td>Bumi Manusia</td><td>Pramoedya Ananta Toer</td><td>1980</td></tr>
                <tr><td>3</td><td>Dilan 1990</td><td>Pidi Baiq</td><td>2014</td></tr>
                <tr><td>4</td><td>Ayat-Ayat Cinta</td><td>Habiburrahman El Shirazy</td><td>2004</td></tr>
                <tr><td>5</td><td>Negeri 5 Menara</td><td>Ahmad Fuadi</td><td>2009</td></tr>
                <tr><td>6</td><td>Perahu Kertas</td><td>Dee Lestari</td><td>2009</td></tr>
                <tr><td>7</td><td>Hujan</td><td>Tere Liye</td><td>2016</td></tr>
                <tr><td>8</td><td>Rindu</td><td>Tere Liye</td><td>2014</td></tr>
                <tr><td>9</td><td>Surat Kecil untuk Tuhan</td><td>Agnes Davonar</td><td>2008</td></tr>
                <tr><td>10</td><td>Supernova: Ksatria, Puteri, dan Bintang Jatuh</td><td>Dee Lestari</td><td>2001</td></tr>
            </tbody>
        </table>

        <footer>© 2025 Daftar Novel Indonesia | by Taufan Hidayatul Akbar</footer>
    </div>

    <script>
        // Fitur pencarian
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('#bookTable tr');
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchValue) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
