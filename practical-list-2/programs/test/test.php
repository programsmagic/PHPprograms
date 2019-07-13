<?php

$m = mktime(0,0,0,10,27,2000);


echo $str = date('l',$m);

if($str == "Sunday")
{
    echo "this date is weekend";
}
else
    echo "this is date is not weekend";

?>