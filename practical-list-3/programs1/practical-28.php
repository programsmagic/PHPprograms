<html>
<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h4 id="font-family:justify; text-color:black;">This is our String<h2>Abc def ghi knowledge php dwpd  java abc inheritance class stack abc mysql database</h2>You can search any word in this string</h4>

        
        <form id="form" action="" method="post">
        <input id="inbox" style="width:800px; padding:20px; color:red;" name="str" type="text" placeholder="Enter your string to search from in top Side String "/>
            <input type="submit" name="ok" id="button"value="search">
        </form>
    
<?php
if(isset($_POST['ok']))
{
    $se = $_POST['str'];
   
    $str = "Abc def ghi knowledge php dwpd  java abc inheritance class stack abc mysql database";
        
   echo "Strating String is matched...__>       ".strstr($str,$se);
       
    
}
    
?>
        
        
    </body>
</html>