<?php
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');

$token = trim($_GET['token']);
$newPassword = $_POST['new_password'];  



$query = "SELECT ID FROM [USER] WHERE reset_token = ? AND reset_token_expiry > ?";
$stmt = sqlsrv_prepare($koneksi, $query, array($token, date('Y-m-d H:i:s')));
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_execute($stmt);
$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($user) {
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
    $query = "UPDATE [USER] SET PASSWORD = ?, reset_token = NULL, reset_token_expiry = NULL WHERE ID = ?";
    $stmt = sqlsrv_prepare($koneksi, $query, array($hashedPassword, $user['ID']));
    if (!sqlsrv_execute($stmt)) {
        die(print_r(sqlsrv_errors(), true));
    }


    echo "Password berhasil diganti.";
} else {
    echo "Token tidak valid atau kadaluarsa.";
}
?>
