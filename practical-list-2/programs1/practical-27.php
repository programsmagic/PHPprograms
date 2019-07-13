<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg1" align="center">
        
        <div id="form25" align="center"> 
        <form action="" method="post">
            
        
            
            <input type="number" name="val1" placeholder="Enter Arrays lenth" id="inbox" min=0 style="width:700px;">
            <br/><input type="submit" name="find"  id="button" >
            </form>
            
        </div>
        <div>
        <?php
        if(isset($_POST['find']))
        {
        $str = $_POST['val1'];
    
            
            for($i=0;$i<$str;$i++)
            { $arr[$i] = rand(0,100);
                ?>
            <input type="text" name="val<?php echo $i; ?>" id="inbox" min=0 value="<?php echo $arr[$i]; ?>">
            <br/><?php
            }
            ?>
<?php    
            
            
                max1($arr);
            
        echo max($arr);
            echo min($arr);
        
          }?>        
        </div>
    </body>
</html>

<?php

    
            function max1($arr)
            {
             echo var_dump($arr);
                $tmp = $arr[0];
                $tmp1 = $arr[0];
                for($i=0;$i<count($arr);$i++)
                    {
                               if($arr[$i] > $tmp)
                               {
                                   $tmp3 = $arr[$i];
                                   $arr[$i]= $tmp;
                                   $tmp= $tmp3;
                               }
                           if($arr[$i] < $tmp1)
                               {
                                   $tmp3 = $arr[$i];
                                   $arr[$i]= $tmp1;
                                   $tmp1= $tmp3;
                               }
                    }
                
                
                ?><h1 id="p1" style="font-size:2em;">
                  Maximum Value in this array = ><?php
                    echo $tmp; 
                ?></h1><h1 style="font-size:2em;" id="p1">
                  Maximum Value in this array = ><?php
                    echo $tmp1; 
                ?></h1><?php
            }
?>