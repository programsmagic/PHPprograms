<a href="logout.php" align="right">Logout</a>
<?php
session_start();


if(!isset($_SESSION['user']))
{
    header('location: practical-45.php');
}

if(isset($_GET['ok']))
{
$a = $_GET['a'];
$b = $_GET['b'];
  
    error_reporting(0);
    echo "Additon $a+$b=";echo $a+$b;
    echo "<br>subtration $a-$b=";echo $a-$b;
    echo "<br>Multiphication $a*$b=";echo $a*$b;
    echo "<br>divition $a/$b=";echo $a/$b;
}
?>