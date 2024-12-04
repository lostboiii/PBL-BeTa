<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bebas Tanggungan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        /* Sidebar styling */
        .sidebar {
            background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff);
            color: white;
            min-width: 200px;
            max-width: 200px;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            padding-top: 0.1px;
        }

        .sidebar .nav-link {
            color: white;
            font-weight: 500;
            padding: 10px 20px;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #FFE492;
            color: white;
            padding: 3px 6px;
            border-radius: 8px;
            font-size: 15px;
            margin-top: -4px;
            margin-bottom: -1px;

        }

        .sidebar .logo {
            width: 80px;
            margin-top: -20px;
        }

        .sidebar-footer {
            margin-top: auto;
            /* Push to bottom */
            font-size: 0.8rem;
            text-align: center;
            padding: 10px 0;
            color: white;
        }

        .sidebar .nav-item {
            margin-bottom: 15px;
            /* Tambah jarak antar menu */
        }

        h5 {
            margin-top: -20px;
            /* mengatur jarak logo dan sibtan */
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

        header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px 20px;
            background-color: #CCE5FF;
        }

        header .user {
            font-weight: bold;
            color: #2B74C4;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="d-flex flex-grow-1">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="text-center py-4">
                <img src="img/designLogo.png" alt="Logo SiBTAN" class="logo mb-1">
                <h5>SiBTAN</h5>
            </div>
            <ul class="nav flex-column px-2">
                <li class="nav-item my-2"><a href="DashboardAdmJurusan.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="ProfileAdmJurusan.php" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="TataCaraAdmJurusan.php" class="nav-link active">Tata Cara</a></li>
                <li class="nav-item"><a href="DatakuAdmJurusan.php" class="nav-link">Dataku</a></li>
                <li class="nav-item"><a href="InfoAdmJurusan.php" class="nav-link">Info Data</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Call Center</a></li>
            </ul>
            <div class="sidebar-footer">
                © 2024 SiBTAN JTI Polinema.
            </div>
        </nav>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>