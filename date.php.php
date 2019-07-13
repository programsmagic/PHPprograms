<?php 

# procedural
echo date_diff(date_create('2001-01-03'), date_create('today'))->y."<br>";
echo date_diff(date_create('2001-01-03'), date_create('today'))->d."<br>";
echo date_diff(date_create('2001-01-03'), date_create('today'))->m;

?>