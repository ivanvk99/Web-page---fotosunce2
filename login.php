<?php

session_start();

error_reporting(0);
include('spoj.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($spoj, "select id from korisnici where k_ime='$username' && lozinka='$password' ");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['id'] = $ret['id'];
        header('location:proizvodi.php');
    } 
    else{   
        $messege = "Wrong username or password.";
        echo '<span style="color:red;text-align:center;">'.$messege.'</span>';
    }
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto sunce | Prijava</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="footer.css" rel="stylesheet">
</head>



<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <a href="#" class="navbar-brand">FotoSunce
          <img src="slike/images.png" height="28" alt="FotoSunce">
      </a>

      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
              <a href="#" class="nav-item nav-link active">Početna</a>
              <a href="o_nama.html" class="nav-item nav-link">O nama</a>
              <a href="nase_usluge.html" class="nav-item nav-link">Naše usluge</a>
          </div>
          <div class="navbar-nav ml-auto">
              <a href="#" class="nav-item nav-link">Login</a>
              <a href="#" class="nav-item nav-link">Register</a>
          </div>
      </div>
</nav>
      
<div class="container">
        <h2>Prijava</h2><br>
        <form action="#" method="post" name="login">
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button><br><br>
            <p> Nemaš račun? <a href="registracija.php" class="mr-5 ">Registriraj se</a></p>
            
        
        </form>
</div> 

      

<body>
</html>