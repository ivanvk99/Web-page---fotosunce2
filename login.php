<?php
session_start();
error_reporting(0);
include('spoj.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "select * from korisnici where username='$username' && password='$password' ");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['id'] = $ret['id'];
        $_SESSION['username']= $ret['username'];
        header('Location:index.php');
    } 
    else{   
        $messege = "Wrong username or password.";
        echo '<span style="color:red;text-align:center;">'.$messege.'</span>';
    }
}
  
?>

 