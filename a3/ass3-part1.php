<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ass3-style.css"/>
    <title>The Web World of Harry Park - Assignment 3</title>
</head>

<body>
    <table class="layout">
    
    <tr><td colspan="3">
    <div id="heading">
		<h1 class="title">PHP Functions</h1>
        <hr>
    </div>
    </td></tr>

    <tr>
    <td class="fixnav">
    <div id="navigation">
        <table class="menu">
            <tr><td><a href="../index.html">Home</a></td></tr>
            <tr><td><a href="../a1/assignment1.html">Assignment 1</a></td></tr>
            <tr><td><a href="../a2/assignment2.html">Assignment 2</a></td></tr>
            <tr><td>Assignment 3</td></tr>
            <tr><td><a href="../a4/assignment4.html">Assignment 4</a></td></tr>
            <tr><td><a href="../a5/assignment5.html">Assignment 5</a></td></tr>
            <tr><td><a href="../p1/project1.html">Project 1</a></td></tr>
            <tr><td><a href="../p2/project2.html">Project 2</a></td></tr>
            <tr><td><a href="../p3/project3.html">Project 3</a></td></tr>
        </table>
    </div>
    </td>

    <td class="fixcontent">
    <div id="content">
        <?php
        function isBitten() {
            $r = rand (1, 100);
            if ($r <= 50)
                return true;
            else return false;
        }

        $charlie = isBitten();
        if ($charlie == "true") {
            print '<p class="center">Charlie ate my lunch!</p>';
        } else {
            print '<p class="center">Charlie did not eat my lunch!</p>';
        }
        ?>
        
        <br><br>
        <a href="assignment3.html" class="back">Back</a>
    </div>
    </td>

    <td class="gap">
    </td>

    </tr>

    </table>
</body>

</html>