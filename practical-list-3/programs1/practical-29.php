<html>
<head>
    <link rel="stylesheet"> </head>
<body class="bg">
    <form action="" method="post" i>
    <input id="inbox" type="text" name="a" placeholder="name....." >
    <input id="inbox" type="email" name="b" placeholder="Email..." >
    <input type="number" id="inbox" name="c" placeholder="name....."  min=9000000000 max="9999999999">
    <input type="submit" name="submit" id="button" >
        
    </form>
    
    <?php
    if(isset($_POST['submit']))
    {
        echo "<br/>username=".$a = "Prashant";
        echo "<br/>emial=".$b = "prashant@gmail.com";
        echo "<br/>number".$c = "9724601127";
    echo "<br/>";
    echo $k = strlen($a);
            echo "<br/>";
    echo $l= strlen($b);
            echo "<br/>";
        echo $m=strlen($c);
    
        
for($i=0;$i<$k;$i++)
{
    $a1 = ord($a[$i]);
    $a[$i] = chr($a1+12);
    
}
for($i=0;$i<$l;$i++)
{
    $b1 = ord($b[$i]);
    $b[$i] = chr($b1+12);
    
}for($i=0;$i<$m;$i++)
{
    $c[$i]="$$$$$$$$$$";
}        echo "<br/>after encrepeted";
        echo "<hr>";
        
        echo $name = $a;
                echo "<hr>";

        echo $email = $b;
                echo "<hr>";

        echo $number  = $c;
    }
    ?>
    </body></html>
<?php


/*
function name($str)
{
    echo "your string= ".$str;
            echo "<hr>";
   for($i=0;$i< (strlen($str));$i++)
   {
       
   }
    return $result;

   
   
$methods = openssl_get_cipher_methods();

var_dump($methods);

$textToEncrypt = $str;
$secretKey = "glop";

echo '<pre>';
foreach ($methods as $method) {
    $encrypted = openssl_encrypt($textToEncrypt, $method, $secretKey);
    $decrypted = openssl_decrypt($encrypted, $method, $secretKey);
    echo $method . ': ' . $encrypted . ' ; ' . $decrypted . "\n";
}
echo '</pre>';
}
function email($str)
{
    echo "your string= ".$str;
        echo "<hr>";

}function number($str)
{
    echo "your string= ".$str;
        echo "<hr>";

}
*/
?>