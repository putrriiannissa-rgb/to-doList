<?php
$host = "mysql.railway.internal";
$user = "root";
$pass = "
";
$db = "railway";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>