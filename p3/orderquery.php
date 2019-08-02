<?php
  $conn = new mysqli('localhost', 'root', 'harry', 'finalproject')
  or die ('Cannot connect to db');
  $user = $_SESSION['login_user'];

  $result = $conn->query("select * from orders where username='$user'");

  while ($row = $result->fetch_assoc()) {

    unset($id, $name);

    echo '<tr>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['rentalcar'] . '</td>';
    echo '<td>' . $row['carprice'] . '</td>';
    echo '<td>' . $row['parking'] . '</td>';
    echo '<td>' . $row['parkingprice'] . '</td>';
    echo '</tr>';
  }
?>
