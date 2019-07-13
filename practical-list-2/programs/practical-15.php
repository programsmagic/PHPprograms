<html>
<head><title>Create an associative array which stores name of country as key and name of its capital as value. Create minimum 20 elements. Sort the array according to name of capital and print.</title>
    
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body style="background-color:Black;">
    <div>
        <?php
        
    $arr = array('pakistan'=>"Islamabad",'india'=>"New Delhi",'japan'=>"Tokyo",'Australia'=>"Canberra",'Brazil'=>"Brasilia",'Canada'=>"	Ottawa",'China'=>"Beijing",'Egypt'=>"Cairo",'Indonesia'=>"Jakarta",'Kuwait'=>"Kuwait City",'Mexico'=>"Mexico City",'Nepal'=>"Kathmandu",'New Zealand'=>"Wellington",'Netherlands'=>"Amsterdam",'North Korea'=>"Pyongyang",'Philippines'=>"Manila",'Russia'=>"Moscow",'Sri Lanka'=>"Sri Jayawardenepura Kotte",'Thailand'=>"Bangkok",'United Kingdom'=>"London",'United States of America'=>"Washington, D.C.",'Zimbabwe'=>"	Harare");
    

        $arr1 = array('pakistan','india','japan','Australia','Brazil','Canada','China','Egypt','Indonesia','Kuwait','Mexico','Nepal','New Zealand','Netherlands','North Korea','Philippines','Russia','Sri Lanka','Thailand','United Kingdom','Zimbabwe');
        
        ?>
        <div id="Result1">
            <?php
            
            
            /*
            
            echo "this is new value for country in assending order by Character<bt/>";
            
        for($i=0;$i<count($arr1);$i++)
        {
            
          $a=  substr($arr[$arr1[$i]],0,1);
            $character['$a'] = $arr[$arr1[$i]];

        }
                    echo "<br>result";    
$j='A';
           while($j<='Z')
           {
             echo  $character['$j'];
        $j++;
           }
            
            
        echo "<br>result";    
        echo "<br>result";    
    */    for($i=0;$i<count($arr1);$i++)
        {  
            echo "$i.".$arr1[$i]."----♠----[";
            echo "      ".$arr[$arr1[$i]]."     ]";
    
            echo "<br/>";
        }
            
                        
        ?>
        </div>
        </div>
    
    
    
    
    </body>
</html>