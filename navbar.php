<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <a href="#" class="navbar-brand">FotoSunce
          <img src="slike/images.png" height="28" alt="FotoSunce">
      </a>

      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
              <a href="#" class="nav-item nav-link active">Početna</a>
              <a href="o_nama.php" class="nav-item nav-link">O nama</a>
              <a href="nase_usluge.php" class="nav-item nav-link">Naše usluge</a>
          </div>
          <div class="navbar-nav ml-auto">
              <?php
              if(isset($_SESSION['username'])){
                echo '<a href="logout.php" class="nav-item nav-link">Logout</a>';
            
            }else{
                
                echo '<a href="loginForm.php" class="nav-item nav-link">Login</a>
                <a href="registerForm.php" class="nav-item nav-link">Register</a>';
            }
              ?>
              
          </div>
      </div>
      
      
  </nav>