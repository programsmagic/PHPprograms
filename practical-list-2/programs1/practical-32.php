<html>
<body>
    <h1 align="center"> Find out on which day Republic day and Independence day will come in current year</h1>
    
    
    <?php 
    
    echo  '15-8-2019';
    
    $t = mktime(0,0,0,8,15,2019);
    //echo $c = (date('d') - date('d',$t); 

//    echo date('d-m-y',$t);
    echo "<h1/>will come =>".date('l',$t);
    echo  '<br><hr>26-1-2019';
    
    $t = mktime(0,0,0,1,26,2019);
    //echo $c = (date('d') - date('d',$t); 

//    echo date('d-m-y',$t);
    echo "<h1/>will independance day come =>".date('l',$t);
    ?>
    </body>

</html>