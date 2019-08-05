<?php session_start();

	if(isset($_POST['Submit'])){
		$logins = array('Admin' => 'password');
    $logins[$_POST['Username']] = $_POST['Password'];
    
    $_SESSION['logins'] = $logins;

    header("location:pong-login.php");
    exit;
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
      <td colspan="2" align="left" valign="top"><h2>Sign Up</h2></td>
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
      <td colspan="2" align="center" valign="bottom"><input name="Submit" type="submit" value="Sign Up" class="button"></td>
    </tr>
  </table>
  <p class="link"><a href="pong-login.php">Log In</a></p>
  </div>
</form>

</body>
</html>