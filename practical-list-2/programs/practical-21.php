<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <form action="" method="post" align="center">
    <input type="text" name="string" id="input_box1" placeholder="Enter your String.." >
        <input id="submit1" type="submit" name="ok" value="Click here for Convert to lowercase">
    </form>
    
    <?php
    
    if(isset($_POST['ok']))
    {
        $str = $_POST['string'];
     
        //$str = strtoupper($str);
    
        
        for($i=0;$i<strlen($str);$i++)
        {
            //$s = $str[$i]+12;
        //    echo $s = ord($str[$i]);
          //  echo "<br/>";
        echo   $f=ord($str[$i])."----<--<br/>";
            if($f>=97)
            {
                
        //$s = ord($str[$i]);
            echo $ans = (int)$f-32;
            echo "<br/>".$str[$i] = chr($ans);
             
            echo "<br/>".$ans;
            }/*if($f<=65)
            
        if($f<=97){
          echo $ans = (int)$f-32;
            echo "<br/>".$str[$i] = chr($ans);
                  
            echo $ans;
            }*/
        }
        
        
        
        
        
        
        echo "your converted string==>";
    ?>
     <input type="text" placeholder="<?php echo $str; ?>" id="input_box" style="font-size:2em;"/>
    </body></html>
    <?php }
    
    
    
    ?>
    
    
   