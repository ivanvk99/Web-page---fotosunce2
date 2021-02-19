<?php

session_start();

error_reporting(0);
include('spoj.php');
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted = md5($password);
    $q = "INSERT INTO fotosunce (username, password) VALUES('$username', '$encrypted')";
    mysqli_query($conn, $q);
    header('location:loginForm.php');
}

else { ?>
    <span style='color:red;text-align:center;'>Zabranjen direktan pristup.</span>
<?php } ?>