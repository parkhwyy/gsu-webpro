<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>AutoMoko Car Rentals</title>
  <link rel = "stylesheet" type="text/css" href="webstyle.css">

</head>

<body>

  <style>
    .centered {
      margin: auto;
      text-align: center;
      width: 90%;
    }
  </style>

  <div class="header">
  <p><br><br></p>
  </div>

  <div class="bg">
    <div class="row">

      <div class="column side">
        <ul id="mainMenu">
          <li><a href="home.php">Home</a></li>
          <li><a class="active" href="#profile">Reservations</a></li>
          <li><a href="car.php">Rent a Car</a></li>
          <li><a href="parking.php">Prepay for Parking</a></li>
          <li><a href="viewcart.php">Checkout</a></li>
        </ul>
      </div>

      <div class="column middle">
        <div class="card">
          <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

          <h2>Reservations</h2>

          <table class="centered">

          <tr>
            <th>Username</th>
            <th>Rental Car</th>
            <th>Car Price</th>
            <th>Parking</th>
            <th>Parking Price</th>
          </tr>

          <?php include('orderquery.php'); ?>

          </table>

        </div> 
      </div>

    </div>
  </div>

</body>

</html>
