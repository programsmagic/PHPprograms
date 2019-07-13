<html>
<head>
    <link rel="stylesheet" href="style.css" >
    </head>
<body align="center">
    <br>
    
    <h1 align="center" id="p" style="font-size:2em;">Write a PHP script to find whether entered date is weekend or not. </h1>
    <hr>
    
    <?php
   $count =0; 

    $a = time();

 $i=0;//date('d',$a);
   while($i> (-46)) 
   {    echo date('d-m-Y',$a-(60*60*24*$i));
       $str= (date('l',$a-(60*60*24*$i)));
 echo "<br/>";
if($str == 'Sunday')
{
    ?><h4 id="p1"><?php echo $str; ?></h4><?php
    $count++;
}
    $i--;
   }
    
    echo "in this 2-month weekend ==>".$count;
/**while($i<31)
{   
    $a=$a+(60*60*24);
    echo date('d-m-Y',$a);
//echo date_diff(date_create('01-08-2018'),date_create('31-08-2018'))->d;
 echo "<br/>";
$i++;    
    
}*/
//echo date('l');
    
    
    
    
    ?>
    </body>
</html>