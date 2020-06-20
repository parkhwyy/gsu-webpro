<?php
   include("config.php");
   session_start();
?>

<!DOCTYPE html>
<html lang="en">  

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AutoMoko Car Rentals</title>
  
	<link rel="stylesheet" type="text/css" href="webstyle.css">
</head>

<body>

  <div class="header">
  <p><br><br></p>
  </div>

  <div class="bg">
    <div class="row">

      <div class="column side">
        <ul id="mainMenu">
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Reservations</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Rent a Car</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Prepay for Parking</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Checkout</a></li>
        </ul>
      </div>

      <div class="column middle">
        <div class="card">
          <h2 id="subheading">Let's get started!</h2>   
          <p> Please sign up or log in below to start your car rental.</p> 
          <a href="register.php"><button id="login" type="button">Sign Up</button></a>
          <a href="login.php"><button id="login" type="button">Login</button></a>
          <br><br>
        </div> 
      </div>

    </div>
  </div>

</body>
</html>