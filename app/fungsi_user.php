<?php


function register_user($nama, $pass) {
    global $link;

    // Escape SQL Injection
    $nama = mysqli_real_escape_string($link, $nama);
    $pass = mysqli_real_escape_string($link, $pass);

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO admin (username, password) VALUES ('$nama', '$pass')";

    if( mysqli_query($link, $query) ) {
            return true;
        
    }else {
        return false; 
    }
}

// menguji nama kembar
function register_cek_nama($nama) {
    global $link;

    $nama = mysqli_real_escape_string($link, $nama);

    $query = "SELECT * FROM admin WHERE username = '$nama'";

    if( $result = mysqli_query($link, $query) ) {
        if( mysqli_num_rows($result) == 0 ) return true;
        else return false;
    }
}