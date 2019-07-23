<?php session_start();
    session_destroy();
    header("location:pong-login.php");
    exit;
?>