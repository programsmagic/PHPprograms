<html><head><link rel="stylesheet" href="style.css" ></head><body style="font-size:3em; text-align:center;"><?php



?><h1 id="p">This is current date </h1>
<?php
$a = time();
echo date('d-m-Y H:i:s a',$a +12600 );


$c= $a +12600;
?><h1 id="p">After 7 days </h1>
<?php

echo date('d/l----m/M---Y',$a + (60*60*24*7) );

?>
    </body></html>