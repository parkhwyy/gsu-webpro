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
          <li><a href="car.php">Rent a Car</a></li>
          <li><a href="parking.php">Prepay for Parking</a></li>
          <li><a class="active" href="#viewcart">Checkout</a></li>
        </ul>
      </div>

      <div class="column middle">
        <div class="card">
          <p>Logged in as: <?php echo $_SESSION['login_user']; ?></p>

          <h1>Order Review</h1>

          <table>
            <tr>
            <th>Item Name</th>
            <th>Price</th>
            </tr>

            <?php
            $_SESSION['total'] = 0;

            //Print table of all the items in the cart
            foreach($_SESSION['shoppingCart'] as $value){
              echo '<tr>';
              echo '<td width="2%">' . $value[0] . '</td>';
              echo '<td width="2%" style="text-align: center;">$' . $value[1] . '</td>';
              echo '</tr>';
              $_SESSION['total'] += $value[1];
            }
            echo '<tr>';
            echo '<td> Total: </td>';
            echo '<td style="text-align: center;">$' . $_SESSION['total'] . '</td>';
            echo '</tr>';
            ?>
          </table>
        
          <br>
          <a href="checkout.php"><button type="button">Checkout</button></a>

        </div> 
      </div>

    </div>
  </div>
  
</body>

</html>
