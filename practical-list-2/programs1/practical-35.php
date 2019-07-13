
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg" align="center">
        
        <div id="form25" align="center"> 
        <form action="" method="post">
            <input type="text" name="val1" placeholder="Enter your Day ... " id="inbox" min=0>
            <input type="text" name="val2" placeholder="Enter your month ... " id="inbox" min=0>
            <input type="text" name="val3" placeholder="Enter your year ... " id="inbox" min=0>
            <br/><input type="submit" name="find"  id="button" >
            </form>
            
     


<?php
        if(isset($_POST['find']))
        { 
            $d = $_POST['val1'];
            $m = $_POST['val2'];
            $y = $_POST['val3'];

    

  $t = mktime(0,0,0,$m,$d,$y);
     $t3=time();              
       echo date('d-m-Y',$t);
            echo "----bettween---";
       echo date('d-m-Y',$t3);
            
            ?></h2><h2 id="p1" style="font-size:4em; color:red;" align="center"><?php 
            
            if($t3>$t)
            {
                
            }
            else
            {
                $tmp = $t3;
                $t3 = $t;
                $t = $tmp;
            }
//echo date('y',$t3)- date('y',$t);
            
//echo date('----m----d',$t3 % $t);
     echo "<br>";
            echo date('m',$t) - date('m',$t3);
            echo " Months and ";
            echo date('d',$t) - date('d',$t3);
        echo " Days Are Remaining your birthday";
        }
?>
            </h4>
               </div>
    </body></html>