<?php 
function globalfun() {
    include(__DIR__.'/../koneksi.php');
    return $conn;
}

// ADMIN
function adminData() {
    $conn = globalfun();
    return mysqli_fetch_all(mysqli_query($conn, 'SELECT * FROM master'));
}

function adminPemasukan() {
    $conn   = globalfun();
    return mysqli_fetch_object(mysqli_query($conn, 'SELECT SUM(pemasukan) as SALDO FROM master;'));
    
}

function adminPengeluaran() {
    $conn   = globalfun();
    return mysqli_fetch_object(mysqli_query($conn, 'SELECT SUM(pengeluaran) as SALDO FROM master;'));
    
}

function adminSaldo() {
    $conn   = globalfun();
    return mysqli_fetch_object(mysqli_query($conn, 'SELECT (SUM(pemasukan))-(SUM(pengeluaran)) as SALDO FROM master;'));
    
}

function adminDetail($get) {
    $conn = globalfun();
    return mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM master WHERE id_transaksi='$get'"));
}


// NASABAH
?>