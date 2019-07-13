<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body class="tab">
    <div>
   
    <table border="1">
        <tr>
            <th>
                <h1>SR.no:</h1>
            </th>
            <th>
                <h1>Student Enrolment NO:</h1>
            </th>
            <th>
                <h1> DWPD Marks:</h1>
            </th>
        </tr>
            <?php 
        $j=166450307001;
        $k = 23;
        for($i=0;$i<50;$i++)
        { $k = rand(0,100);
            echo "<tr><td>$i</td>
            <td>".$j."</td>
            <td>".$k."</td></tr>";
        $j++;
         $arr[$i]=$k;
        }
        
        $tmp1 = $arr[0];
        $tm1 = $arr[0];
        
        $tmp2 = 0;
        $tmp3 = 0;
        $tmp4 = 0;
        $tmp5 = 0;
        $tm2 = 0;
        $tm3 = 0;
        $tm4 = 0;
        $tm5 = 0;
?><div><?php
        for($i=0;$i<50;$i++)
        {
            /*if($arr[$i]==$tmp1)
            {
                continue;
            }
            else
            { if($arr[$i]==$tmp2)
                {
                    continue;
                }
                else
                {*/
            if($arr[$i]>$tmp1)
            {   $tmp2 = $tmp1;
                $tmp1=$arr[$i];
            }
            else
            {
                 if($arr[$i]>$tmp2)
                     {   $tmp3 = $tmp2;
                         $tmp2=$arr[$i];
                      }
                    else
                     {
                        if($arr[$i]>$tmp3)
                          {   $tmp4 = $tmp3;
                              $tmp3=$arr[$i];
                          }
                          else
                          {
                              if($arr[$i]>$tmp4)
                                 {   $tmp5 = $tmp4;
                                     $tmp4=$arr[$i];
                                  }
                          }
                    } 
               }   
            
            if($arr[$i]<$tm1)
            {   $tm2 = $tm1;
                $tm1=$arr[$i];
            }
            else
            {
                 if($arr[$i]<$tm2)
                     {   $tm3 = $tm2;
                         $tm2=$arr[$i];
                      }
                    else
                     {
                        if($arr[$i]<$tm3)
                          {   $tm4 = $tm3;
                              $tm3=$arr[$i];
                          }
                          else
                          {
                              if($arr[$i]<$tm4)
                                 {   $tm5 = $tm4;
                                     $tm4=$arr[$i];
                                  }
                          }
                    } 
               }   
            }
       /* }
    }*/
        ?>
        </div>
        </table>
         </div>

    <div style="text-align:right; margin-top:-95%; margin-left:280px; font-family:Times new roman; ">
    
    <?php
        echo "<div align='center'> <h1>5 heigest Marks</h1><br/>";
        echo "<h1>$tmp1</h1>";
        echo "<h1>$tmp2</h1>";
        echo "<h1>$tmp3</h1>";
        echo "<h1>$tmp4</h1>";
        echo "<h1>$tmp5</h1>";
        echo "<div align='center'> <h1>5 lowest Marks</h1><br/>";
        echo "<h1>$tm1</h1>";
        echo "<h1>$tm2</h1>";
        echo "<h1>$tm3</h1>";
        echo "<h1>$tm4</h1>";
        echo "<h1>$tm5</h1>";
        
        ?>
    </div>
         
        </body>

</html>