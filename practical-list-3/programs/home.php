<?php
session_start();


if(!isset($_SESSION['user']))
{
    header('location: practical-45.php');
}

?>

<html>
<body bgcolor="lightblue">
    <h1 align="center">Welcome TO <?php echo $_SESSION['user']; ?></h1><a href="logout.php" align="right">Logout</a>
    <br><hr>

    <form action="home2.php" method="get" align="center">
        <input type="number" name="a" placeholder="Enter a=" min="0"><br>
        <input type="number" name="b" placeholder="Enter b=" min="0"><br>
        <input type="submit" name="ok" value="find calculation">
    </form>
   

    </body>    
    </html>