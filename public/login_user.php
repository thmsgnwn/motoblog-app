<?php
session_start();
require_once "../db.php";

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
      window.location = 'login_user.php';
      </script>";
    }
  } else {
    echo "<script>
    alert('Username dan Password salah');
    window.location = 'login_user.php';
    </script>";
  }
    
}


include_once "views/header.php";

?>


<form action="login_user.php" method="POST">

  <div class="oneform">
    <div class="form">
      <h1 class="title">Log In - Admin</h1>

        <div class="form__div">
          <input type="text" class="inp" name="username"/>
          <label for=""  class="lbl">Username</label>
        </div>

        <div class="form__div">
          <input type="password" class="inp" name="password" />
          <label for="" class="lbl">Password</label>
        </div>

        <input type="submit" class="form__button" name="submit" value="Log In" />

        <!-- <p>&copy; Thomas Gunawan SipusOne Project 2023 </p> -->

    </div>
  </div>

</form>
