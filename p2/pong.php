<?php session_start();
    if(!isset($_SESSION['UserData']['Username'])){
        header("location:pong-login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="pong-style.css"/>
    <title>Classic Pong Game</title>
</head>

<body>
    <script src="pong.js"></script>
    <p>Click <a href="pong-logout.php">here</a> to Logout.</p>
    <canvas id="gameCanvas" width="1280" height="720"></canvas>
    <h3>Score as many points as you can before the COM gets 3 points!</h3>
</body>

</html>