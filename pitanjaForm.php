
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Foto sunce | Pitanja</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="pitanja.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="footer.css" rel="stylesheet">
</head>
<body>

<?php
include("navbar.php");
?>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-white">
  <h1>SAČUVAJTE DRAGOCJENE TRENUTKE</h1>
  <h2>Poštovani, za sva pitanja stojimo Vam na raspolaganju.</h2>

    <div class="contact-form">
      <form id="contact-form" method="post" action="pitanja.php">
        <input name="name" type="text" class="form-control" placeholder="Vaše Ime" required>
        <br>
        <input name="email" type="email" class="form-control" placeholder="Vaš Email" required>
        <br>
  
        <textarea name="message" class="form-control" placeholder="Poruka" row="4" required></textarea>
        <br>
  
        <input type="submit" class="form-control submit" value="Pošaljite poruku">
      </form>
    </div>  

    </div></div></div>
<?php
include("footer.php");
?>
</body>