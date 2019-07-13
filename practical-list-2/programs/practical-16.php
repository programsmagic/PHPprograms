<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
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
    <div>
    <?php
        
        if(isset($_GET['ok']))
        {
            for($i=0;$i<$end;$i++)
            {
                echo "<h3 id='re'>".$arr[$i]= $_GET['var'.$i]."</h3>";
            }
        }
        
        ?>
    </div>
    <div>
    <h3 id="h">Are you want to delete any array's value with it's index
        so Enter a value of array</h3>
        <form action="" method="post"  align="center">
        <input id="input_box1" type="text" name="arr" placeholder="Enter array's Value." required />
        <input type="submit" name="value_ok" value="Find or Delete" id="submit1"   />
        </form>
    </div>
    <div>
<?php
    
        
    if(isset($_POST['value_ok']))
    {
        $value = $_POST['arr'];
        
        //echo $value;
    $value = intval($value);    
    for($i=0;$i<($end);$i++)
    {
        $arr[$i]=intval($arr[$i]);
    }
    $skip=0;
        //var_dump($value);
        echo "<br/>";
            for($i=0;$i<($end);$i++)
            { //echo "arr[i]=".$arr[$i]."=>";
             if($value == $arr[$i])
                {
                 for($j=$i;$j<$end-1;$j++)
                 {
                 $arr[$j]=$arr[$j+1];
                  $skip++;    
                 }
             }
            }

        if(isset($skip))
        {
        $a = count($arr);
            //echo $arr[$a-1];
        unset($arr[$a-1]);        
        }
            
        
        
        for($i=0;$i<count($arr);$i++)
            {
                    echo "<h3 id='re'>".$arr[$i]."</h3>";
            }
    }
        
        
        ?>
    </div>
</body>

</html>