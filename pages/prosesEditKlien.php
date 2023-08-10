<?php

include_once '../db.php';

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$no_hp  = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

$query = "UPDATE klien SET nama = '$nama', email = '$email', no_hp = '$no_hp', alamat = '$alamat', status = '$status' WHERE id='$id'";

mysqli_query($link, $query);

header('Location: ../admin.php?page=klien');