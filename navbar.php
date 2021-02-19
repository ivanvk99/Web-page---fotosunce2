<?php

session_start();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <a href="index.php" class="navbar-brand">FotoSunce
          <img src="slike/png.png" height="28" alt="FotoSunce">
      </a>

      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
              <a href="index.php" class="nav-item nav-link">Početna</a>
              <a href="o_nama.php" class="nav-item nav-link">O nama</a>
              <a href="nase_usluge.php" class="nav-item nav-link">Naše usluge</a>
              <a href="galerija.php" class="nav-item nav-link">Galerija</a>
          </div>
          <div class="navbar-nav ml-auto">
       
          <?php
              if(!isset($_SESSION['username'])){
?>
               <a class="nav-item nav-link" href="loginForm.php">Login <span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link" href="registerForm.php">Register <span class="sr-only">(current)</span></a>

             <?php }else{ ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION["username"] ?>! </span><span class="se-only"></span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
              <?php } ?>
             
          </div>
      </div>  
  </nav>