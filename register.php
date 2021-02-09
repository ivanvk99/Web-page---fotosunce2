<?php

session_start();

error_reporting(0);
include('spoj.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "select * from korisnici where username='$username'");
    $ret = mysqli_fetch_array($query);
    $br=mysqli_num_rows($ret);
    if ($br == 0) {
        $q = "INSERT INTO korisnici (username, password) 
  			  VALUES('$username', '$password')";
    	mysqli_query($conn, $q);
        header('location:loginForm.php');
    } 
    else{   
        $messege = "Wrong username or password.";
        echo '<span style="color:red;text-align:center;">'.$messege.'</span>';
    }
}
  
?>
