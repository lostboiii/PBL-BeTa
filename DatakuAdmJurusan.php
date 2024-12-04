<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiBTAN - Dataku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f8fc;
        }

        .sidebar {
            width: 200px;
            background-color: #203864;
            color: #fff;
            height: 100vh;
            position: fixed;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #2b4d90;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f8fc;
            padding: 10px 20px;
            border-bottom: 1px solid #dcdcdc;
        }

        .header img {
            width: 40px;
            margin-right: 10px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            width: 300px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            font-size: 18px;
            color: #203864;
        }

        .status {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
        }

        .status button {
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .status .accept {
            background-color: #28a745;
        }

        .status .reject {
            background-color: #dc3545;
        }

        footer {
            background-color: #203864;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .description {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Tata Cara</a>
        <a href="#" class="active">Dataku</a>
        <a href="#">Info Data</a>
        <a href="#">Logout</a>
        <a href="#">Call Center</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>SiBTAN</h1>
            <div>
                <span>Lutfi Triaswangga</span>
            </div>
        </div>

        <div class="description">
            <p>Berikut ini adalah tabel data milik anda.<br>
            Untuk <b>menambahkan data</b> persyaratan baru klik tombol tambah file. Lalu klik upload. Untuk <b>melihat status</b> data persyaratan klik tombol pada kolom STATUS. Dan untuk <b>mencetak data poin</b> ini klik tombol Cetak Form. Proses verifikasi dan validasi data poin meliputi tahap:</p>
            <ol>
                <li>Verifikasi oleh Admin Prodi</li>
                <li>Verifikasi oleh Admin Jurusan</li>
            </ol>
        </div>

        <button style="margin-bottom: 20px; padding: 10px 20px; background-color: #2b4d90; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Cetak Form</button>

        <div class="card-container">
            <div class="card">
                <h3>Alat / Program / Aplikasi</h3>
                <div class="status">
                    <button class="accept">Terima</button>
                    <button class="reject">Tolak</button>
                </div>
            </div>
            <div class="card">
                <h3>Laporan Magang / PKL</h3>
                <div class="status">
                    <button class="accept">Terima</button>
                    <button class="reject">Tolak</button>
                </div>
            </div>
            <div class="card">
                <h3>Distribusi Laporan Skripsi</h3>
                <div class="status">
                    <button class="accept">Terima</button>
                    <button class="reject">Tolak</button>
                </div>
            </div>
            <div class="card">
                <h3>Distribusi Laporan Magang / PKL</h3>
                <div class="status">
                    <button class="accept">Terima</button>
                    <button class="reject">Tolak</button>
                </div>
            </div>
            <div class="card">
                <h3>Pernyataan Bebas Kompen</h3>
                <div class="status">
                    <button class="accept">Terima</button>
                    <button class="reject">Tolak</button>
                </div>
            </div>
            <div class="card">
                <h3>Scan TOEIC / TOEFL</h3>
                <div class="status">
                    <button class="accept">Terima</button>
                    <button class="reject">Tolak</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 SiBTAN JTI Polinema. <a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a> | <a href="#">Cookies</a></p>
    </footer>
</body>
</html>
