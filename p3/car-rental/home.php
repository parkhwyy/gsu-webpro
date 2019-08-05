<?php
  include('session.php');
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
          <li><a href="profile.php">Reservations</a></li>
          <li><a href="car.php">Rent a Car</a></li>
          <li><a href="parking.php">Prepay for Parking</a></li>
          <li><a href="viewcart.php">Checkout</a></li>
        </ul>
      </div>

      <div class="column middle">
        <div class="card">
          <h2 id="subheading">Let's get started!</h2>   
          <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>
          <a href="profile.php"><button id="profile" type="button">Reservations</button></a>
          <a href="logout.php"><button id="logout" type="button">Logout</button></a>
          <br><br>
        </div> 
      </div>

    </div>
  </div>

</body>
</html>