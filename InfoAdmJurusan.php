<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiBTAN - Info Data</title>
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

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px auto;
        }

        .card h2 {
            color: #203864;
            margin-bottom: 20px;
        }

        ol {
            margin-left: 20px;
        }

        ol li {
            margin-bottom: 10px;
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
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Tata Cara</a>
        <a href="#">Dataku</a>
        <a href="#" class="active">Info Data</a>
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

        <div class="card">
            <h2>INFO DATA</h2>
            <ol>
                <li>Berkas yang akan di upload sudah mendapat ACC dari dosen atau admin terkait.</li>
                <li>Persiapkan berkas yang akan di upload dan pastikan sudah benar.</li>
                <li>Scan file dengan format PDF/PNG dan pastikan gambar sudah jelas.</li>
                <li>Ukuran file maks 3MB.</li>
                <li>Pastikan file sudah terunggah dengan sukses.</li>
                <li>Setelah file sukses terunggah semua file akan diverifikasi oleh admin. Untuk verifikasi akan membutuhkan sedikit waktu lebih lama.</li>
                <li>Mohon untuk aktif mengecek website SiBTAN setelah melakukan upload dokumen.</li>
                <li><b>Pemberitahuan:</b></li>
                <li>Diwajibkan mengunggah foto formal pada masing-masing akun.</li>
                <li>Diberitahukan kepada seluruh mahasiswa bahwa data syarat untuk pengajuan surat bebas tanggungan dapat diunggah di website SiBTAN adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang.</li>
                <li>Pertanyaan lebih lanjut dapat menghubungi call center pada website SiBTAN.</li>
                <li>Untuk upload Scan TOEIC dengan skor minimal 450 untuk Diploma 4. Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar, namun nilai masih kurang, maka akan diberikan surat keterangan dari UPA Bahasa (GraPol Lantai 3).</li>
            </ol>
        </div>
    </div>

    <footer>
        <p>© 2024 SiBTAN JTI Polinema. <a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a> | <a href="#">Cookies</a></p>
    </footer>
</body>
</html>
