<!DOCTYPE>
<html>
<link rel="stylesheet" href="style.css" type="text/css">

<body>
    <div style="font-size:2em; " align="center">

        <form action="" method="get">

            <?php 
        $end = 5;
        for($i=0;$i<$end;$i++)
        {
            ?>
            <div>
                <input id="input_box" type="number" name="var<?php echo $i; ?>" min="-1000" max="9999" placeholder="Enter value <?php echo $i; ?>" style="margin-top:5px;" />
            </div>

            <?php
        }
        ?>
                <input type="submit" name="ok" id="submit" style="margin-top:10px;" />
        </form>
    </div>
    <div id="result">
        <?php
    if(isset($_GET['ok']))
    {
        
       echo "your Array Values->";
        echo "<br/>";
    for($i=0;$i<$end;$i++)
      {
        $arr[$i] = $_GET['var'.$i];
        echo $_GET['var'.$i];
        echo "<br/>";
      }
        
    ?>
    </div>
    <div id="result">
        <?php
        
//here all values in Disassending order
       echo "DisAssending value->"; 
            echo "<br/>";
            for($i=0;$i<$end;$i++)
            {
                //$tmp = $arr[0];
                      for($j=0;$j<($end-($i+1));$j++)
                      {
                          //if($arr[$j]< $tmp)
                          if($arr[$j]< $arr[$j+1] )
                          {
                              $tmp2 = $arr[$j];
                               $arr[$j] = $arr[$j+1];
                              //$tmp = $tmp2;
                              $arr[$j+1] = $tmp2;
                          }
                      }
            }
            for($i=0;$i<$end;$i++)
                  {
                    echo $arr[$i];
                    echo "<br/>";
                  }
       ?>
    </div>
    <div id="result">
        <?php
//here start to All values in assending order
        echo "Assending Order all values->"; 
        echo "<br/>";
    
        for($i=0;$i<$end;$i++)
            {
                //$tmp = $arr[0];
                      for($j=0;$j<($end-($i+1));$j++)
                      {
                          //if($arr[$j]< $tmp)
                          if($arr[$j]> $arr[$j+1] )
                          {
                              $tmp2 = $arr[$j];
                               $arr[$j] = $arr[$j+1];
                              //$tmp = $tmp2;
                              $arr[$j+1] = $tmp2;
                          }
                      }
            }
        
 
        for($i=0;$i<$end;$i++)
        {
            echo "<br/>";
            echo $arr[$i];
        }
}

        
    ?>
    </div>

</body>

</html>
