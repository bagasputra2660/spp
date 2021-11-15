<?php
session_start();
require_once 'petugas.php';

if(lisset($_SESSION['id'])) {
    header('location:../');
}

$petugas = new  petugas;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset-"utf-8">
    <meta http-equiv-"X-UA-Compatible" content-"IE-edge">
    <meta name ="viewport" content="width-Device-wiuth, initial-scale-1.0">
    <title>Cetak Transaksi Perbulan</title>
</head>
<body>
    <h3> Laporan Pembayaran SPP</h3><br>
    <hr>

    <?php
    $dt_siswa = petugas->getDataSiswaBynis($_GET['nis']);

    var_dump(sdt_siswa);
    ?>
</body>
</html>