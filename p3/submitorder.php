<?php
  include("config.php");
  session_start();

  if($_SESSION['login_user'] == ""){
    $_SESSION['end'] = false;
    header("location: index.php");
  }else{
    $username = $_SESSION['login_user'];
    $rentalcar = $_SESSION['shoppingCart'][1][0];
    $carprice = $_SESSION['shoppingCart'][1][1];
    $parking = $_SESSION['shoppingCart'][2][0];
    $parkingprice = $_SESSION['shoppingCart'][2][1];

    //Create new order entry into database from shoppingcart.php
    $query = "INSERT INTO `orders` (username, rentalcar, carprice, parking, parkingprice) VALUES
      ('$username', '$rentalcar', '$carprice', '$parking', '$parkingprice')";

    $result = mysqli_query($db, $query);
    $_SESSION['end'] = true;
    $_SESSION['shoppingCart'][1][0] = null;
    $_SESSION['shoppingCart'][1][1] = null;
    $_SESSION['shoppingCart'][2][0] = null;
    $_SESSION['shoppingCart'][2][1] = null;
    header("location: profile.php");
  }
?>
