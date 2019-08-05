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
    table {
      margin: auto;
      padding: 50px;
    }
    #button {
      text-align: center;
    }
    .centered {
      margin: auto;
      text-align: center;
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
          <li><a href="profile.php">Reservations</a></li>
          <li><a href="car.php">Rent a Car</a></li>
          <li><a href="parking.php">Prepay for Parking</a></li>
          <li><a class="active" href="viewcart.php">Checkout</a></li>
        </ul>
      </div>

      <div class="column middle">
        <div class="card">
          <h1>Checkout</h1>

          <table>
          <tr>
            <td></td>
            <td>Card Number</td>
            <td>Security Code</td>
          </tr>

          <tr>
            <td rowspan="1"><img id="cardtype" src="img/none.png"></td>
            <td><input id="cardNumber" onchange="verifyCard()" type="text"></td>
            <td><input type="number" min="100" max="999"></td>
          </tr>

          <tr>
            <td></td>
            <td>Name on Card</td>
            <td>Expiration</td>
          </tr>

          <tr>
            <td></td>
            <td><input type="text"></td>
            <td>
              <select>
                <?php
                  for($i = 1; $i <= 12; $i++) {
                    echo '<option>' . $i . '</option>';
                  }
                ?>
              </select>
              /
              <select>
                <?php
                  for($i = 17; $i <= 50; $i++) {
                    echo '<option>' . $i . '</option>';
                  }
                ?>
              </select>
            </td>
          </tr>
          </table>

          <br>
          <form action="submitorder.php" method="post">
            <input type="submit" value=" Checkout ">
          </form>

        </div> 
      </div>

    </div>
  </div>

  <script src="creditcard.js"></script>

</body>
</html>
