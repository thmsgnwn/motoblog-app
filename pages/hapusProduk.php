<?php

include_once '../db.php';

$id    = $_GET['id'];

$query = "DELETE FROM produk WHERE id = '$id'";

mysqli_query($link, $query);

header('Location: ../admin.php?page=produk');


