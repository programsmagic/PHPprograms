<html>
    <head><link rel="stylesheet" href="style.css"></head>
<body id="result1" style="background-color:black;margin-top:40px;">
    <?php
    
    $str =  array("this is code for string "," this is new program","programsmagic is my dream","and in this part of eduction growing practicaly knowlage","this ic","programmers World is my bloag","hy bhai log hoe are sadklfjkasl","mahesh and anjay is group member of programsmagic");      
    $tmp = $str[0];
    $tmp1 = $str[0];
    $tmp2 = $str[0];
        for($i=0;$i<count($str);$i++)
        {
            ?><?php echo "(".strlen($str[$i]).")==>{".$str[$i]."}";
            echo "<br/>";
              $t=strlen($str[$i]);
             $t2=strlen($tmp);
              $t3=strlen($tmp2);
    ?><?php
            if($t>$t2)
            {
                $tmp = $str[$i];
                
            }if($t<$t3)
            {
                $tmp1 = $str[$i];
                
            }
        }
    
    echo "<br/>lowest value is ==>".$tmp1;
    echo "<br/><br/><br/><br/>Biggest value is ==>".$tmp;
    
    ?>
    </body>
</html>