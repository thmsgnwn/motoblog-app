<?php

include_once '../../db.php';

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$telp  = $_POST['telp'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO kontak SET nama = '$nama', email = '$email', telp = '$telp', alamat = '$alamat', pesan = '$pesan'";

mysqli_query($link, $query);

header('Location: ../../admin.php?page=contact');
