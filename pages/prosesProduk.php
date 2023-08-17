<?php

include_once '../db.php';

$ks  = $_POST['ks'];
$np   = $_POST['np'];
$jp  = $_POST['jp'];
$har   = $_POST['har'];
$jum = $_POST['jum'];

$query = "INSERT INTO produk SET kode_seri = '$ks', nama_produk = '$np', jenis_produk = '$jp', harga = '$har', jumlah = '$jum'";

mysqli_query($link, $query);

header('Location: ../admin.php?page=produk');
