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
