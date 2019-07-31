<?php

$user = 'root';
$password = 'harry';
$db = 'smart_users';
$host = 'localhost';
$port = 3306;

$con = mysqli_init();
$success = mysqli_real_connect(
   $con,
   $host,
   $user,
   $password,
   $db,
   $port
) OR die('Network connection error. Check connection then reload');

/*
$con=mysqli_connect('localhost:3306','root','harry','smart_users') OR die('Network connection error. Check connection then reload');
print(var_dump($con));

$con=mysqli_connect("localhost","root","pass123","smart_users") OR die('Network connection error. Check connection then reload');
*/

 ?>
