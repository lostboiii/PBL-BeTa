<?php
include 'koneksi.php';
// Capture JSON input from Insomnia
$input = json_decode(file_get_contents('php://input'), true);


if ($input === null) {
    echo json_encode(["status" => "error", "message" => "Invalid JSON input."]);
    exit;
}

$email = $input['email'];
$password = $input['password'];


$query = "SELECT * FROM [USER] WHERE email = ? AND password = ?"; 
$params = [$email, $password];
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
    echo json_encode(["status" => "error", "message" => "Invalid username or password."]);
}

?>
