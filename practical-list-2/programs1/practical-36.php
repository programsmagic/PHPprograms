
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg" align="center">
   
<?php

 $a = time();//Total time to current situation 
echo "<br/>";
 //$b=mktime(0,0,0,$m,$d,$y);
echo "<br/>";
?><h4 id="p1"><?php            

            
    
//date_default_timezone_set('Asia/Kolkata');

        /*echo date('d-m-Y H:i');?></h4><?php
        echo "<br/>this time code is {-->date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y H:i');<--}";
*/
        ?><h4 id="p1" style="font-size:1.9em;"><?php
        $a =time();
        echo "GMT ->".date('d-m-Y H:i:s a',$a);
        echo "<br/>";

        echo "current indian time---->".date('d-m-Y H:i:s a',$a +16200);//12600 );//+3:30 
     
        
        ?>
        </h4>
    </body></html>