<?php

include_once '../db.php';

$id     = $_POST['id'];
$kode_seri   = $_POST['kode_seri'];
$nama_produk  = $_POST['nama_produk'];
$jenis_produk  = $_POST['jenis_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$query = "UPDATE produk SET kode_seri = '$kode_seri', nama_produk = '$nama_produk', jenis_produk = '$jenis_produk', harga = '$harga', jumlah = '$jumlah' WHERE id='$id'";

mysqli_query($link, $query);

header('Location: ../admin.php?page=produk');