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
    /* Sidebar Styling */
    .sidebar {
      background: linear-gradient(to bottom, #021a44, #043873, #4fa3ff); 
      color: white;
      min-width: 200px;
      max-width: 200px;
      display: flex;
      flex-direction: column;
      position: fixed;
      height: 100vh;
      top: 0;
      left: 0;
      padding-top: 20px;
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
      padding: 10px 20px;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #00509E; 
      color: white;
      border-radius: 8px;
    }

    .sidebar .logo {
      width: 80px;
      margin-bottom: 10px;
    }

    /* Content Styling */
    .content {
      margin-left: 200px;
      padding: 20px;
      flex-grow: 1;
    }

    .content h1 {
      color: #2b74c4;
      margin-bottom: 20px;
    }

    .content ol {
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 20px;
      background-color: #f8f9fa;
      border-bottom: 1px solid #ddd;
    }

    header .user {
      font-weight: bold;
      color: #2b74c4;
    }

    /* Footer Styling */
    footer {
      background: #f8f9fa;
      color: gray;
      text-align: center;
      padding: 10px 0;
      margin-top: auto;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="text-center">
        <img src="designLogo.png" alt="Logo SiBTAN" class="logo">
        <h5>SiBTAN</h5>
      </div>
      <ul class="nav flex-column px-2">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-house-door-fill"></i> Home
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-person-fill"></i> Profile
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-list-task"></i> Tata Cara
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-folder-fill"></i> Dataku
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="bi bi-info-circle-fill"></i> Info Data
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-telephone-fill"></i> Call Center
          </a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="content">
      <header>
        <div class="user">Lutfi Triaswangga</div>
      </header>
      <main>
        <h1>Info Data</h1>
        <ol>
          <li>Berkas yang akan di-upload sudah mendapat ACC dari dosen atau admin terkait.</li>
          <li>Persiapkan berkas yang akan di-upload dan pastikan sudah benar.</li>
          <li>Scan file dengan format PDF/PNG dan pastikan gambar sudah jelas.</li>
          <li>Ukuran file maks 3MB.</li>
          <li>Pastikan file sudah terunggah dengan sukses.</li>
          <li>Setelah file sukses terunggah, semua file akan diverifikasi oleh admin. Untuk verifikasi akan membutuhkan sedikit waktu lebih lama.</li>
          <li>Mohon untuk aktif mengecek website SiBTaN setelah melakukan upload dokumen.</li>
          <li><strong>Pemberitahuan!</strong></li>
          <li>Diwajibkan mengunggah foto formal pada masing-masing akun.</li>
          <li>Diberitahukan kepada seluruh mahasiswa bahwa data syarat untuk pengajuan surat bebas tanggungan dapat diunggah di website SiBTaN adalah daftar kegiatan yang diikuti selama masa studi di Politeknik Negeri Malang.</li>
          <li>Pertanyaan lebih lanjut dapat menghubungi call center pada website SiBTaN.</li>
          <li>Untuk upload scan TOEIC dengan skor minimal 450 untuk Diploma 4. Apabila sudah mengikuti 1x tes gratis Polinema dan 1x ujian mandiri berbayar namun nilai masih kurang, maka akan diberikan surat keterangan dari UPA Bahasa (Grapol Lantai 3).</li>
        </ol>
      </main>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    © 2024 SiBTAN JTI Polinema.
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
