<?php
   include("config.php");
   session_start();
   $error = "";
   $_SESSION['login_user'] = "";
   //If there is a post for username or password, query the database
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      //Search the database for an entry matching the username and passowrd
      $sql = "SELECT username FROM customers WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: home.php");
      }else {
          //If the user doesn't exist, send error message to register user
         $error = 'Your username or password is invalid. Click here to register: <a href="register.php"><button>Register</button></a>';
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
                <h1>Login</h1>

                <form method = "POST">
                    <table class="centered">
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username" class="box" required></td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" class="box" required></td>
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