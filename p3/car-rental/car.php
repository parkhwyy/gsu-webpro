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

  <div class="header">
  <p><br><br></p>
  </div>

  <div class="bg">
    <div class="row">

      <div class="column side">
        <ul id="mainMenu">
          <li><a href="home.php">Home</a></li>
          <li><a href="profile.php">Reservations</a></li>
          <li><a class="active" href="#car">Rent a Car</a></li>
          <li><a href="parking.php">Prepay for Parking</a></li>
          <li><a href="viewcart.php">Checkout</a></li>
        </ul>
      </div>

      <div class="column middle">
        <div class="card">
          <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

          <!-- This section is where a rental car is chosen and added to the shopping cart -->
          <h1>Choose a Rental Car:</h1>

          <form action="shoppingcart.php" onclick="setCart()" method="post">
            <select id="car" name="car" onchange="setCart()">
            <option>
            <!--Populate the dropdown menus with car inventory options from MySQL Database-->
            <?php include('carquery.php'); ?>
            </option>
            <input id="cart" type="submit" value="Add to Cart" disabled>
          </form>

          <p id="carPrice">Price: $0</p>
        </div> 
      </div>

    </div>
  </div>

  <script src="car.js"></script>

</body>

</html>
