<?php
$serverName = "MSI\SQLEXPRESS";
$connectionOptions = [
    "Database" => "PBL_V2",
    "Uid"=> "",
    "PWD"=> "",
];


    $koneksi = sqlsrv_connect($serverName, $connectionOptions);
    if ($koneksi === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "koneksi berhasil";
    }
 
?> 