
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

            
            <h3>Date 2</h3>
            <input type="text" name="val4" placeholder="Enter your Day ... " id="inbox" min=0>
            <input type="text" name="val5" placeholder="Enter your month ... " id="inbox" min=0>
            <input type="text" name="val6" placeholder="Enter your year ... " id="inbox" min=0>
            <br/><input type="submit" name="find"  id="button" >
            </form>
            
     


<?php
        if(isset($_POST['find']))
        { 
            $d = $_POST['val1'];
            $m = $_POST['val2'];
            $y = $_POST['val3'];
            $d1 = $_POST['val4'];
            $m2 = $_POST['val5'];
            $y3 = $_POST['val6'];

  $t = mktime(0,0,0,$m,$d,$y);
  $t3 = mktime(0,0,0,$m2,$d1,$y3);

                            ?><h2 id="p" style="font-size:2em; color:red;" align="center"><?php    

            
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
            
echo date('d',$t3 % $t);
            
            /*   $t1 = time() - $t;
            $t2 = time() - $t3;
            
            $diff = date('y',$t3)-date('y',$t)."<br/>";
            $diff1 = date('m',$t3)-date('m',$t)."<br/>";
            $diff2 = date('d',$t3)-date('d',$t)."<br/>";
             
            /*$diff3 = date('y')-date('y',$t2)."<br/>";
            $diff4 = date('m')-date('m',$t2)."<br/>";
            $diff5 = date('d')-date('d',$t2)."<br/>";
       
            echo "Year=>".$diff;
            
            
            echo "==>After[-".$diff1."-".$diff2."]";
     */
        }
?>
            Days</h2>
        </div>    </body></html>