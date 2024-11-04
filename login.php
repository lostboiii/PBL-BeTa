<?php
session_start();
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
//jika terdapat user pada DB
if ($user) {
    $_SESSION['user'] =[
        'nim' => $user['NIM'],
        'username' => $user['USERNAME'],
        'role' => $user['ROLE'], 
    ];

    echo json_encode([
        "status" => "success",
        "message" => "Login successful!",
        "role" => $user['ROLE'] 
    ]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid nim or password."]);
}
//cek apakah terdapat session(sebelum login)
if(isset($_SESSION['user']['role'])){
switch($_SESSION['user']['role']) {
    case 'admin_jurusan':
        echo "anda admin jurusan";
    break;
    case 'admin_prodi':
        echo "anda admin prodi";
    break;
    case 'mahasiswa':
        echo "anda mahasiswa";
    break;
}
}
else{
    echo "anda gagal login";
}
?>
