<?php 
function globalfun() {
    include(__DIR__.'/../koneksi.php');
    return $conn;
}

function adminPemasukan() {
    $conn   = globalfun();
    return mysqli_fetch_object(mysqli_query($conn, 'SELECT SUM(nominal) as SALDO FROM pemasukan;'));
    
}

function adminData() {
    $conn = globalfun();
    return mysqli_fetch_all(mysqli_query($conn, 'SELECT * FROM pemasukan'));
}

function query($data) {
    $conn       = globalfun();
    $nama       = htmlspecialchars($data['nama']);
    $nominal    = htmlspecialchars($data['nominal']);
    $ket        = htmlspecialchars($data['ket']);

    mysqli_query($conn, "SELECT * FROM ")
}
?>