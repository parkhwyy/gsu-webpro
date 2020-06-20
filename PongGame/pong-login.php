<?php session_start();
  
  $_SESSION['logins']['Admin'] = 'password';

	if(isset($_POST['Submit'])){
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
    if (isset($_SESSION['logins'][$Username]) &&
        $_SESSION['logins'][$Username] == $Password){
			$_SESSION['UserData']['Username']=$_SESSION['logins'][$Username];
      header("location:pong.php");
			exit;
		} else {
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="pong-style.css"/>
    <title>Classic Pong Game</title>
</head>

<body>



<h1>Welcome to Classic Pong!</h1>

<form action="" method="post" name="Login_Form">
  <div class="container">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h2>Log In</h2></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="bottom"><input name="Submit" type="submit" value="Log In" class="button"></td>
    </tr>
  </table>
  <p class="link"><a href="pong-signup.php">Sign Up</a></p>
  </div>
</form>

</body>
</html>