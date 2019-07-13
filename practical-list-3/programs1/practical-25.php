
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg1" align="center">
        
        <div id="form25" align="center"> 
        <form action="" method="post">
            <input type="text" name="val1" placeholder="Enter String and anything to find dublicate.." id="inbox" min=0 style="width:700px;">
            <br/><input type="submit" name="find"  id="button" >
            </form>
            
        </div>
        <?php
        if(isset($_POST['find']))
        {
        $str = $_POST['val1'];
    //    echo $str;
          search($str);  
        
        
        }
        
        ?>
    </body></html>

<?php

function search($str)
{
     echo "your strting==>".$str;
    $len = strlen($str);
    
    for($i=0;$i<$len;$i++)
    { 
        $count=0;
       $a = $str[$i];
        for($j=0;$j<$len;$j++)
         {
            if($a === $str[$j])
             {
                
            $count++;
                $c=$j;
             }
         }
        if($count > 1)
        { ?><h5 id='p' style="color:white;  text-shadow: 2px 3px 8px black;"><?php
           
            echo "In this is string ".$count." Dublicats [  ".$str[$c]." ]";
             ?></h5><?php
        }
    }
}
?>