<html>

<head>
    <title>this is a simple programs in php || find addition of first even 50 numbers</title>
    <meta charset="utf-8">
</head>


<body>
    <div style="margin:30px; " align="center">
        <h1>Find addition of first 50 evern numbers</h1>
        <h1><strong style=" color:blue;">Even Color:</strong></h1>
        <h1><strong style=" color:red;">Odd Color:</strong></h1>
    </div>
    <hr>
    <div style=" font-size:1em;">

        <?php
    $no = 50;
    $count =0;
    $result = 0;
    for($i=1;$no!=0; $i++)
    {
        if($i%2==0)
        {
         ?>
            <span style=" color:blue; font-size:3em;">
                <?php echo $i; ?>
            </span>
            <?php
            $no--;        
            $count = $count + $i;
        }
       else
       {                                  
         ?>
                <span style="padding:10px; color:red;"><?php echo $i; ?>
                </span>
                <?php
        }
    }
    
        echo "Total==>".$count;
    ?>
    
    
    
    
    </div>

</body>

</html>