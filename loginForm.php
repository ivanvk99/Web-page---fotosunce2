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

<?php
include("navbar.php");
?>
      
      <div class="container">
<div class="row justify-content-center">
<div class="col-md-4 align-items-center">
        <h2>Prijava</h2><br>
        <form action="login.php" method="post" name="login">
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button><br><br>
            <p> Nemaš račun? <a href="registerForm.php" class="mr-5 ">Registriraj se</a></p>
            
        
        </form>
</div> 
</div>
      </div>
<?php
include("footer.php");
?>

<body>
</html>