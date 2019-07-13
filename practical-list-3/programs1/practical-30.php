<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <input  style="width:800px; padding:20px;"type="text" placeholder="Abc def ghi knowledge php dwpd  java abc inheritance class stack abc mysql database">
    
    </body>
<?php
    $a  = 'Abc';
    $b= '☻☻☻c';
    
    
    $str = "Abc def ghi knowledge php dwpd  java abc inheritance class stack abc mysql database";
    echo "//str_replace(find,replace,string,count)";
   $str= str_replace($a,$b,$str);
    echo "<br/>new string==>".$str;
    
    ?>
</html>
