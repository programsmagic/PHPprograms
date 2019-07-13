<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body >
        
        <div id="form" align="center"> 
        <form action="" method="post">
            <input type="number" name="val1" palceholder="Enter Row Value.." id="inbox" min=0>
            <input type="number" name="val2" palceholder="Enter Column Value.." id="inbox" min=0>
            <input type="submit" name="find" palceholder="find between Primary value" id="button" >
            </form>
        </div>
        <?php
        if(isset($_POST['find']))
        {
            $r = $_POST['val1'];
            $c = $_POST['val2'];
    
    ?>    
        
    <table border="1"  style="margin:auto; padding:20px;">
        <tr>
        <th colspan="5" align="center" id="p">Array [<?php echo $r; ?>] * [<?php echo $c; ?>]</th>
        </tr>
        <?php
      
        for($i=0;$i<$r;$i++)
        {
            ?><tr id="tab"><?php          
            for($j=0;$j<$c;$j++)
                    {
                     ?><td  id="p1"><?php echo $arr[$i][$j] = rand(0,200);
                     ?></td><?php
                    }
        ?></tr><?php          
        }
        
        ?>
        </table>    
    
    <div>
    <?php
        
        //here stored in array
$k=0;
            $sum =0;
        for($i=0;$i<$r;$i++)
        {
            ?><tr id="tab"><?php          
            for($j=0;$j<$c;$j++)
                    {
                
                $sa[$k]=$arr[$i][$j];
                $sum +=$sa[$k]; 
                $k++;
                    }
        ?></tr><?php          
        }
        ?>
        </div>
        
    <div id="result">
        <h1>One D Array[values]=></h1>

        <?php
        for($i=0;$i<$k;$i++)
         {?><span id="p1" style="padding:10px;"><?php
         echo $sa[$i]."--</span>";                   
         }
        
            echo '<span id="p1" style="padding:10px; color:red;">TOTAL OF ARRAY = >'.$sum.'</span>';           
        }
            ?>
        </div>
    </body>
</html>