<!DOCTYPE html>
<html lang="en">
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
      top: 0; /* ensure sidebar is aligned with the top */
      left: 0;
    }

    .sidebar .nav-link {
      color: white;
      font-weight: 500;
      padding: 10px 15px;
    }

    .sidebar .nav-link.active, .sidebar .nav-link:hover {
      background-color: #00509E; 
      color: white;
      border-radius: 5px;
    }

    .sidebar .logo {
      width: 100px;
    }

    /* Main Content styling */
    .content {
      margin-left: 200px; 
      width: calc(100% - 200px);
      padding: 20px;
      /*padding-top: 20px; /* to prevent content overlap with header */
      /*padding-bottom: 50px; /* space for footer */
    }

    .hero-section {
      background: url('RuanganDashboard.png') center/cover no-repeat;
      padding: 80px 20px;
      border-radius: 10px;
    }
    .hero-section h1, .hero-section p {
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    footer {
      font-size: 0.9rem;
      background-color: #043873;
      color: white;
      position: relative;
      width: 100%;
      bottom: 0;
    }

    .copyright-text {
     margin-left: 100px; 
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="text-center py-4">
        <img src="designLogo.png" alt="Logo SiBTAN" class="logo mb-3">
        <h4>SiBTAN</h4>
      </div>
      <ul class="nav flex-column px-3">
        <li class="nav-item my-2">
          <a href="#" class="nav-link active">
            <i class="bi bi-house-door-fill me-2"></i> Home
          </a>
        </li>
        <li class="nav-item my-2">
          <a href="#" class="nav-link">
            <i class="bi bi-person-fill me-2"></i> Profile
          </a>
        </li>
        <li class="nav-item my-2">
          <a href="#" class="nav-link">
            <i class="bi bi-list-task me-2"></i> Tata Cara
          </a>
        </li>
        <li class="nav-item my-2">
          <a href="#" class="nav-link">
            <i class="bi bi-folder-fill me-2"></i> Dataku
          </a>
        </li>
        <li class="nav-item my-2">
          <a href="#" class="nav-link">
            <i class="bi bi-info-circle-fill me-2"></i> Info Data
          </a>
        </li>
        <li class="nav-item my-2">
          <a href="#" class="nav-link">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
          </a>
        </li>
        <li class="nav-item my-2">
          <a href="#" class="nav-link">
            <i class="bi bi-telephone-fill me-2"></i> Call Center
          </a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="content flex-grow-1">
      <header class="bg-light py-3 px-4 border-bottom">
        <h5 class="m-0">Sistem Informasi Bebas Tanggungan</h5>
      </header>
      <div class="p-4">
        <div class="hero-section text-center mb-4">
          <h2 style="color:#FFE492" >Sistem Bebas Tanggungan</h2>
          <p style="color:#FFE492">Jurusan Teknologi Informasi</p>
          <img src="building.jpg" alt="Gedung Kampus" class="img-fluid rounded" style="max-width: 600px;">
        </div>
        <section class="info-section text-center">
          <h4 style="color:#043873">Profil Sistem Bebas Tanggungan</h4>
          <p style="color:#043873">
            Sistem "bebas tanggungan" adalah istilah yang biasanya merujuk pada suatu bentuk sistem
            yang tidak menuntut adanya tanggung jawab atau kewajiban yang berkelanjutan dari pihak tertentu.
            Dalam konteks administrasi, keuangan, atau hukum, sistem bebas tanggungan berarti bahwa pihak-pihak
            yang terlibat tidak memiliki kewajiban atau hutang tertentu setelah suatu transaksi atau perjanjian selesai.
          </p>
        </section>
      </div>
    </div>
  </div>

  
  <footer class="py-3 d-flex justify-content-between">
    <div class="copyright-text">© 2024 SiBTAN JTI Polinema.</div>
    <div>
        <a href="#" class="me-2 text-white">Terms of Service</a>
        <a href="#" class="me-2 text-white">Privacy Policy</a>
        <a href="#" class="text-white">Cookies</a>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>