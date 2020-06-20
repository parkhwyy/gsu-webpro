<?php
   include("config.php");
   session_start();
   $error = "";

   if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
     $fullname = $_POST['fullname'];
     $email = $_POST['email'];
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
       $query = "INSERT INTO `customers` (`fullname`, `email`, `username`, `password`) VALUES ('$fullname', '$email', '$username', '$password')";
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
         $error ="User registration failed.";
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
                <td>Full Name: </td>
                <td><input type="text" name="fullname" class="box" required></td>
              </tr>

              <tr>
                <td>E-mail: </td>
                <td><input type="text" name="email" class="box" onchange="email_validate(this.value)" required></td>
              </tr>
              <tr>
                <td></td>
                <td id="emailstatus"></td>
              </tr>

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
              <input id="submitbtn" type="submit" value=" Submit ">
            </form>

            <br>
            <div><?php echo $error; ?></div>
          </div> 
        </div>

      </div>
    </div>

</body>

<script>

function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
   var status = document.getElementById("emailstatus");
    if(regMail.test(email) == false)
    {
    document.getElementById("emailstatus").innerHTML = '<span class="warning">Email address is not valid.</span>';
        status.style.color = "#f44336";
        status.style.fontSize = "9pt";
        document.getElementById("submitbtn").disabled = true;
    }
    else
    {
    document.getElementById("emailstatus").innerHTML = '<span class="valid">Email address is valid!</span>';
        status.style.color = "#00838f ";
        status.style.fontSize = "9pt";
        document.getElementById("submitbtn").disabled = false;
    }
}

</script>

</html>
