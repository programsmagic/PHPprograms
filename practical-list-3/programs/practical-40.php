<html>
<head>
    <title>Create a web application which will accept two integer numbers through text boxes and display result for basic mathematical operations (i.e. + , -, *, /) on another page. [USE GET METHOD] </title>
    </head>
<body>
    <form action="" method="get" align="center">
        <input type="number" name="a" placeholder="Enter a=" min="0"><br>
        <input type="number" name="b" placeholder="Enter b=" min="0"><br>
        <input type="submit" name="ok" value="find calculation">
    </form>
    </body>
</html>

<?php
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