<html>

<head>
    <title>Write a PHP script to calculate mod of two given integers without using modulus operator.</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

    <div align='center' style="font-size:3em;">
        <form action="" method="post">
            <input  id="input_box" type="text" name="val1" placeholder="Enter 1stAny Number." />
            <br/>
            <input id="input_box" type="text" name="val2" placeholder="Enter 2ndAny Number." />
            <br/>
            <input  id="submit" style="margin-top:20px;" type="Submit" name="ok" value="find Modulo Without Using % TAg" />

        </form>
    </div>

<div id="result" align="center">
    <h1 align="center">Result</h1>
    <hr>
    
<?php
error_reporting(0);
$a = $_POST['val1'];
$b = $_POST['val2'];
echo $a;
echo "<br/>";
echo $b;
echo "<br/>";
//$and = mod($a,$b);
//$ans = mod($b,$a);
echo "After divition Print Result-->";
$i = $b/$a;
echo $i;
echo "<br/>";
if(is_float($i))
{
        echo $b / $a;
        $i1 = (double)$i;
        echo "<br/>";
        echo "It's cantain only float value i1=".$i1 ;

        echo "<br/>";

        $ans = (int)$i;
        echo "It's contain only int value ans=".$ans;

        echo "<br/> Last sub Result=>";
        $ans1=$i-$ans;
        echo $ans1;


        echo "<strong><br/>Finally we get % Result = ></strong>";
        $result = $ans1 * $a;
        echo $result;
}
    else
    {
        $ans = $i * $a;

        echo "<strong><br/>Finally we get % Result = ></strong>";
        echo $ans - $b;
    
    }

?>
    
    
    \
    </div>

</body>

</html>


