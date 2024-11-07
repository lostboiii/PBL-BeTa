<?php
session_start();
include "koneksi.php";

date_default_timezone_set('Asia/Jakarta');

$email = $_POST['email'];  
$token = bin2hex(random_bytes(16));
$expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

$query = "UPDATE [USER] SET reset_token = ?, reset_token_expiry = ? WHERE EMAIL = ?";
$stmt = sqlsrv_prepare($koneksi, $query, [$token, $expiry, $email]);
sqlsrv_execute($stmt);

$resetLink = "http://localhost/password_reset.php?token=$token";
$message = "Klik link ini untuk reset password: $resetLink";
mail($email, "Password Reset Request", $message);

echo "Link akan dikirimkan lewat email jika terdaftar.";
?>
