

<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg" align="center">
        <div id="form" align="center"> 
        <form action="" method="post">
            <input type="number" name="val1" palceholder="Enter Start Value.." id="inbox" min=0>
            <input type="number" name="val2" palceholder="Enter End Value.." id="inbox" min=0>
            <input type="submit" name="find" palceholder="find between Primary value" id="button" >
            </form>
        </div>
    <?php
        if(isset($_POST['find']))
        {
            $a = $_POST['val1'];
            $b = $_POST['val2'];
        
            for($i=$a;$i<$b;$i++)
            { $count=0;
               for($j=1;$j<=$i;$j++)
               {
                   if($i % $j==0)
                   {
                       $count++;
                   }
               }
             if($count == 2)
             {?><h5 id='p'><?php
                 echo $i."=>This value is primary number";
              ?></h5><?php
             
             }
            else
                 {echo $i."--is not prime number";
                  }
            }

        }
?>    </body>
</html>      
  <?php           /*  
       
function primeno($n){

  for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
          }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){

               print $i." is Prime <br/>";
        }
    }
} 

primeno(100); 
*/ ?>
  