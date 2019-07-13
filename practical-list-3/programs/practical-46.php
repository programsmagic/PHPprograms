<?php

$con= mysqli_connect('localhost','root','','test') or die("Error in connection !");

$str = "select *from `movies`";

$run = mysqli_query($con,$str);


if(isset($run))
{
    echo "Query is fir eaily";
    
    
    while($r= mysqli_fetch_array($run))
    {

    $a = $r['name'];
    $a = $r['rate'];
    $a = $r[''];
    $a = $r['name'];
    }
}



?>