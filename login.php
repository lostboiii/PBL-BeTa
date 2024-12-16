<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$password = $_POST['password'];


$query = "SELECT * FROM [USER] WHERE nim = ? AND password = ?"; 
$params = [$nim, $password];
$stmt = sqlsrv_query($koneksi, $query, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}


$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
if ($user) {

    echo json_encode([
        "status" => "success",
        "message" => "Login successful!",
        "role" => $user['ROLE'] 
    ]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid nim or password."]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Bebas Tanggungan</title>
  <link rel="stylesheet" href="styleslogin.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <div class="login-content">
        <div class="login-form">
          <img src="img/logo.png" alt="Logo Sistem Bebas Tanggungan" class="logo">
          <h1>Sistem Bebas Tanggungan</h1>
          <form>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Kata Sandi</label>
              <input type="password" id="password" placeholder="Kata Sandi">
              <span class="toggle-password">&#128065;</span>
            </div>
            <button type="submit" class="login-button">Masuk</button>
          </form>
        </div>
        <div class="login-image">
          <img src="img/building.jpg" alt="Gedung Kampus">
        </div>
      </div>
    </div>
  </div>
</body>
</html>

