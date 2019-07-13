<html>

<head>
    <link rel="stylesheet" href="style.css" >
    </head>
    <body>
    
    <h1><?php  echo $a = date('d-m-Y'); ?></h1>
    <?php
        $d = date('d',$a);
        $m = date('m',$a);
        $y = date('y',$a);
        
        error_reporting(0);
        
    ?><h2 id="p1" style="font-size:4em; color:red;" align="center"><?php    
        if(checkdate($d,$m,$y))
        {
        echo "date is right ";
        }
        else
        {
                echo "date is not right ";

        }
        ?>
        </h2>
    </body>
</html>