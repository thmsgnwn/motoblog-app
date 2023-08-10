<?php

include_once '../db.php';

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$no_hp  = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

$query = "INSERT INTO klien SET nama = '$nama', email = '$email', no_hp = '$no_hp', alamat = '$alamat', status = '$status'";

mysqli_query($link, $query);

header('Location: ../admin.php?page=klien');
