<html>
    <head>
    <link rel="stylesheet" href="style.css" >
    </head>
<body>
    
    <form action="" method="post" align="center">

        <input type="text" name="string" placeholder="Enter Your String...." id="input_box" style="font-size:2em;"/>
        <br/>
        <br/>
        <input type="submit" name="ok" value="Find" id="submit" style="font-size:2em;"/>
        
    </form>
    </body>
</html>




<?php
if(isset($_POST['ok']))
   {
    //echo "ertqwer";
$str = $_POST['string'];
$sl = strlen($str);
    
    //for($i=0;$i<=$sl;$i++)
    {
        echo "<h1 align='center'> ".$str."<br/>";
    }
    for($i=0;$i<$sl;$i++)
    {
     $r = substr_count($str,$str[$i]);
 //       echo "<br/>";
    
echo "(".$str[$i].")==>".$r."<br/>";
   }
}
?>
</h1>