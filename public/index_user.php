<?php
session_start();
require_once "db.php";

// 
if( isset($_POST['submit']) ) {
  $user = $_POST['username'];
  $pass = $_POST['password'];


  $query = "SELECT * FROM admin WHERE username = '$user'";
  $ambil = mysqli_query($link, $query);

  if( mysqli_num_rows($ambil) === 1 ) {
    $data = mysqli_fetch_assoc($ambil);
    
    if (password_verify($pass, $data['password'])) {
      $_SESSION["submit"] = true;
      header('Location: ../admin.php');
      exit();
    } else {
      echo "<script>
      alert('Username dan Password salah');
      window.location = 'index_user.php';
      </script>";
    }
  } else {
    echo "<script>
    alert('Username dan Password salah');
    window.location = 'index.php';
    </script>";
  }
    
}
