<?php
   include("config.php");
   session_start();
   $error = "";

   //If username and password are posted, query the database
   if (isset($_POST['username']) && isset($_POST['password'])){
     $username = $_POST['username'];
     $password = $_POST['password'];

     //Check if user already exists
     $sql = "SELECT username FROM customers WHERE username = '$username'";
     $result = mysqli_query($db,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

     $count = mysqli_num_rows($result);

     if($count == 1) {
        $error = "User already exists.";
     }else{

       //Create new user in database
       $query = "INSERT INTO `customers` (username, password) VALUES ('$username', '$password')";
       $result = mysqli_query($db, $query);

       if($result){
         $error = "User created successfully.";

         //Search the database for an entry matching the username and passowrd
         $sql = "SELECT username FROM customers WHERE username = '$username' and password = '$password'";
         $result = mysqli_query($db,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

         $count = mysqli_num_rows($result);

         if($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location: home.php");
         }
       } else {
         $error ="User registration failed";
       }
     }
   }
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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Reservations</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Rent a Car</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Prepay for Parking</a></li>
          <li><a href="#" onClick="alert('You need to log in first!')">Checkout</a></li>
        </ul>
      </div>

        <div class="column middle">
          <div class="card">
            <h1>Sign Up</h1>

            <form method = "POST">
              <table class="centered">
              <tr>
                <td>Username: </td>
                <td><input type="text" name="username" class="box"></td>
              </tr>

              <tr>
                <td>Password: </td>
                <td><input type="password" name="password" class="box"></td>
              </tr>
              </table>

              <br>
              <input type="submit" value=" Submit ">
            </form>

            <br>
            <div><?php echo $error; ?></div>
          </div> 
        </div>

      </div>
    </div>

</body>

</html>
