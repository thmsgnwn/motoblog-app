<?php

include_once '../db.php';

$judul = $_POST['judul'];
$keterangan   = $_POST['keterangan'];


$query = "INSERT INTO gallery SET judul = '$judul', keterangan = '$keterangan'";

mysqli_query($link, $query);

header('Location: admin.php?page=galeri');
