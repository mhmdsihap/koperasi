<?php
$servername     = "localhost";
$database       = "koperasii";
$nama_database  = "root";
$pwd            = "";

$conn = mysqli_connect($servername, $nama_database, $pwd, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>