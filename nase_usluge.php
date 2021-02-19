<!DOCTYPE html>
<html lang="en">
<head>
  <title>Naše usluge</title>
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
  <link href="naseusluge.css" rel="stylesheet">
  <link href="kosarica.css" rel="stylesheet">
  <script src="store.js" async></script>

</head>
<body style="background-image: url('slike/section_bg1.png');">


<?php
include("navbar.php");
?>




<div class="slider-area2 ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2  hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Naše usluge</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Hero -->
    <br></br>
<br></br>
    <!--? Pricing Card Start -->
    <section class="pricing-card-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-tittle mb-60 text-center">
                        <h2>Odaberite program</h2>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis 
                        cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
                    </div>
                </div>
            </div>
            <br></br>
<br></br>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                    <div class="shop-item">
                        <div class="card-top">
                            <img src="slike/png.png" width="100" height="100" alt="">
                            <h4>Silver</h4>
                            <p></p>
                        </div>
                        <div class="card-mid">
                            <h4>$500.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>5 sati rada</li>
                                <li>Samo fotografiranje</li>
                                <li>Svaki dodatni sat 50$</li>
                                <li>Obrada svih slika u lightroom-u</li>
                                <li>Lokacija isključivo po vašoj želji</li>
                            </ul>
                            <button class="border-btn get-btn shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <!-- stiker -->
                        <div class="stiker">
                            <span>Most Popular</span>
                        </div>
                        <div class="shop-item">
                        <div class="card-top">
                        <img src="slike/png.png" width="100" height="100" alt="">
                            <h4>Gold</h4>
                            <p></p>
                        </div>
                        <div class="card-mid">
                            <h4>$1000.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Od početka do kraja vjenčanja</li>
                                <li>Slikanje i snimanje</li>
                                <li>Obrada fotografija i videa</li>
                                <li>Rok od mjesec dana</li>
                                <li>Pozivnice uključene</li>
                            </ul>
                            <button class="border-btn get-btn shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                    <div class="shop-item">
                        <div class="card-top">
                        <img src="slike/png.png" width="100" height="100" alt="">
                            <h4>Platinum</h4>
                            <p></p>
                        </div>
                        <div class="card-mid">
                            <h4>$1500.00</h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Od početka do kraja vjenčanja</li>
                                <li>Dron uključen u cijenu</li>
                                <li>PhotoBook gratis</li>
                                <li>Obrada u manje od mjesec dana</li>
                                <li>Pozivnice uključene</li>
                            </ul>
                            <button class="border-btn get-btn shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br></br>
<br></br>
    <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase " type="button">PURCHASE</button>
        </section>


<?php
include("footer.php");
?>

 
</body>
</html>