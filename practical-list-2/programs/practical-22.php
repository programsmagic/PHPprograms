<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <form action="" method="post">
    <input type="text" name="string" id="input_box1" placeholder="Enter your String.." >
        <input id="submit" type="submit" name="ok" value="Convert to lowercase" style="font-size:2em;">
    </form>
    
    <?php
    
    if(isset($_POST['ok']))
    {
                  $str = $_POST['string'];

        echo "your Actucal String ===>".$str;
        for($i=0;$i<strlen($str);$i++)
        {
            
        echo   $f=ord($str[$i])."----<--<br/>";
            if($f<=97)
            {
                
            echo $ans = (int)$f+32;
            echo "<br/>".$str[$i] = chr($ans);
             
         //   echo "<br/>".$ans;
            }
        }
        echo "your converted string==>".$str;
    }
    ?>
    <input type="text" placeholder="<?php echo $str; ?>" id="input_box" style="font-size:2em;"/>
    </body></html>