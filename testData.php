<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataku Admin Jurusan</title>
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

        .sidebar .nav-link:hover {
            background-color: #FFE492;
            color: white;
            padding: 3px 6px;
            border-radius: 8px;
            font-size: 15px;
            margin-top: -4px;
            margin-bottom: -1px;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .sidebar .logo {
            width: 80px;
            margin-top: -20px;
        }

        .sidebar-footer {
            margin-top: auto;
            font-size: 0.8rem;
            text-align: center;
            padding: 10px 0;
            color: white;
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

        .data-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .data-item .btn {
            width: 48%;
        }

        .data-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .btn-accept {
            background-color: #28a745;
            color: white;
        }

        .btn-reject {
            background-color: #dc3545;
            color: white;
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
                <li class="nav-item"><a href="TataCaraAdmJurusan.php" class="nav-link">Tata Cara</a></li>
                <li class="nav-item"><a href="DatakuAdmJurusan.php" class="nav-link active">Dataku</a></li>
                <li class="nav-item"><a href="InfoAdmJurusan.php" class="nav-link">Info Data</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Call Center</a></li>
            </ul>
            <div class="sidebar-footer">
                © 2024 SiBTAN JTI Polinema.
            </div>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <header>
                <img src="img/logouser.jpg" alt="User Avatar" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 10px;">
                <div class="user">Lutfi Triaswangga</div>
            </header>
            <h3 class="my-4">DATUKU</h3>
            <p>Berikut ini adalah tabel data milik Anda. Untuk menambahkan data persyaratan, klik tombol tambah file. Lalu klik upload. Untuk <b>melihat status</b> data persyaratan klik tombol pada kolom STATUS.</p>
            <p>Proses verifikasi dan validasi data poin meliputi tahap:</p>
            <ul>
                <li>1. Verifikasi oleh Admin Prodi</li>
                <li>2. Verifikasi oleh Admin Jurusan</li>
            </ul>
            <div class="data-grid">
                <div class="data-item text-center">
                    <h5>Alat / Program / Aplikasi</h5>
                    <button class="btn btn-accept mx-1">Terima</button>
                    <button class="btn btn-reject mx-1">Tolak</button>
                </div>
                <div class="data-item text-center">
                    <h5>Laporan Magang / PKL</h5>
                    <button class="btn btn-accept mx-1">Terima</button>
                    <button class="btn btn-reject mx-1">Tolak</button>
                </div>
                <div class="data-item text-center">
                    <h5>Distribusi Laporan Skripsi</h5>
                    <button class="btn btn-accept mx-1">Terima</button>
                    <button class="btn btn-reject mx-1">Tolak</button>
                </div>
                <div class="data-item text-center">
                    <h5>Pernyataan Bebas Kompen</h5>
                    <button class="btn btn-accept mx-1">Terima</button>
                    <button class="btn btn-reject mx-1">Tolak</button>
                </div>
                <div class="data-item text-center">
                    <h5>Scan TOEIC / TOEFL</h5>
                    <button class="btn btn-accept mx-1">Terima</button>
                    <button class="btn btn-reject mx-1">Tolak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
