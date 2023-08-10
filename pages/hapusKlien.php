<?php

include_once '../db.php';

$id    = $_GET['id'];

$query = "DELETE FROM klien WHERE id = '$id'";

mysqli_query($link, $query);

header('Location: ../admin.php?page=klien');


