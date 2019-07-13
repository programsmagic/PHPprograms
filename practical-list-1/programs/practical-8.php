<html>
<body bgcolor="red">
    <?php
    
    
    
    allopration();
    
    function allopration()
    {
        $a = 2;
        $b = 4;
        
        ?>
    
        <div align="center" style="color:white; background:blue; margin:250px; padding:20px; font-size:2em;">
    <?php    
        echo " Addition 2+4= ".$ans=$a+$b."<br/>"; 
        echo " Multiphication 2*4= ".$ans=$a*$b."<br/>"; 
        echo " Divistion 2/4= ".$ans=$a/$b."<br/>"; 
        echo " Subtration 2-4= ".$ans=$a-$b."<br/>"; 
        echo " Modulo 2%4= ".$ans=$a%$b."<br/>"; 
        echo " GatherThen 2>4= ".$ans=$a>$b."<br/>"; 
        echo " LessThen 2<4= ".$ans=$a<$b."<br/>"; 
        ?>
            </div>

<?php
    }
    
    ?>
    
    </body></html>