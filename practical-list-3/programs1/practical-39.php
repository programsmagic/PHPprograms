
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

    /*$date1=date_create("2018-08-16");
$date2=date_create("2018-02-09");
$diff=date_diff($date1,$date2);
  */

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
echo date('y',$t3)- date('y',$t);
            
echo date('----m----d',$t3 % $t);
     echo "<br>";
            echo 10 - date('m',$t3);
            echo date('d',$t) - date('d',$t3);
        //    $t1 = time()  $t;
            /*
            $diff = date('y')- date('y',$t)."<br/>";
            $diff1 = date('m')-date('m',$t)."<br/>";
            $diff2 = date('d')-date('d',$t)."<br/>";
            
            echo "Year=>".$diff;
            
            
            echo "Become your birthday==>After[";
            echo "Month=>".$diff1."Days=>".$diff2."]";
        ///    <?php 
/*
# procedural
            ?><h4 id="p1"><?php
echo "year===>";
echo date_diff(date_create($dat),date_create('today'))->y."<br>";
echo "Month===>";
echo date_diff(date_create($dat), date_create('today'))->m."<br>";
echo "Day===>";
echo date_diff(date_create($dat), date_create('today'))->d."<br>";

            /*echo date_diff(date_create('2001-01-03'), date_create('today'))->d."<br>";
echo date_diff(date_create('2001-01-03'), date_create('today'))->m;

?>
            */
            
            
            
            
            
            ///this is different between two dates    $diff=date_diff($date1,$date2);
            
        //echo 'you are completed '.date("y",time($a - $b)).'years ---- '.date("m",time($a - $b)).'months ----'.date("d",time($a - $b)).'Days on this Earth and used your life ';// (60*60*24*365*18));
            /*
            echo date('d-m-Y',mktime(0,0,0,$m,$d,$y));
            echo date('d-m-Y',mktime(0,0,0,$m,$d,$y));
            echo date('d-m-Y',mktime(0,0,0,$m,$d,$y));

*/
        }

?>
            </h4>
               </div>
    </body></html>