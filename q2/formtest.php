<!DOCTYPE html>
<html>

<head>
  <title>Form Data</title>
</head>
<body>

<h1>Raw Form Data</h1>
<pre>
<?php
   print_r($_POST);  // this prints the associative array for debugging
?>
</pre>

<!-- Extract each form item from posted data -->

<h1>Form input values</h1>
<p>Full Name: <?php print $_POST["fullName"] ?></p>
<p>E-mail: <?php print $_POST["email"] ?></p>
<p>Password: <?php print $_POST["password"] ?></p>
<p>Confirm Password: <?php print $_POST["confirmPassword"] ?></p>

<!-- Run thru all elements of the array of posted data -->

<h1>All Form Data</h1>

<?php
    foreach($_POST as $key=>$val)
    {
        if(is_array($val)) {
            print "<p>$key = ";
            foreach($val as $opt) {print "$opt, ";}
            print "</p>";
        }
        else {
            print "<p>$key = $val\n</p>";
        }
    }
?>

</body>
</html>
