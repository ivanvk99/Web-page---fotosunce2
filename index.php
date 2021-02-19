
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto sunce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="footer.css" > 
  <link rel="stylesheet" href="style.css" >
  <link rel="stylesheet" href="style.css"  type="text/css">
</head>


<body style="background-image: url('slike/section_bg1.png');">

    
    <div id="preloder">
        <div class="loader"></div>
    </div>
        
    <div id="myCarousel" class="carousel slide">
  
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li class="item1 active"></li>
          <li class="item2"></li>
          <li class="item3"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slike/foto_sunce1.jpg" >
          </div>
          <div class="carousel-item">
            <img src="slike/foto_sunce2.jpg" >
          </div>
          <div class="carousel-item">
            <img src="slike/foto_sunce3.jpg" >
          </div>
        </div>
        
        <div class="carousel-caption d-none d-md-block">
            <h3>FOTO SUNCE</h3>
            <p><em>We love capturing people's emotions!</em></p>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>

    <?php
    include("navbar.php");
    ?>

  <br></br>
 
 <div class="container-fluid text-center" >
        <div class="row">
          <div class="col-sm-12">
            <h2>Foto Sunce</h2>
            <h4>Kreireamo uspomene</h4>
            <p>S vama još od 1994. god.</p>
          </div>
        </div>
      </div>

 <br></br>





 <section class="services-section spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-item">
                  <img src="services/service-2.jpg" alt="">
                  <h3>Snimanje</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-item">
                  <img src="services/service-1.jpg" alt="">
                  <h3>Slikanje</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-item">
                  <img src="services/service-3.jpg" alt="">
                  <h3>Uređivanje</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                      magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
              </div>
          </div>
      </div>
  </div>
</section>


 <div class="container" >
  <div class="center">
    <a href="galerija.php" class="button" >Galerija</a>
  </div>
</div>
 
 
 <br></br>


 <div class="caption d-none d-md-block">
  <p><h3><em>Ljubav prema fotografiji prenosi se s koljena na koljeno.</em></h3></p>
</div>

<br></br><br></br>

<!--DODATI BUTTON ZA PITANJA-->


<?php
include("footer.php");
?>




  <script>


    $(document).ready(function(){
      // Activate Carousel
      $("#myCarousel").carousel({interval: 5000});
        
      // Enable Carousel Indicators
      $(".item1").click(function(){
        $("#myCarousel").carousel(0);
      });
      $(".item2").click(function(){
        $("#myCarousel").carousel(1);
      });
      $(".item3").click(function(){
        $("#myCarousel").carousel(2);
      });
        
      // Enable Carousel Controls
      $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
      });
      $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
      });
    });
    </script>




</body>
</html>
