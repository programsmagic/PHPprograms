<html>
<head>
    
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div>
        <input id="inbox" style="width:800px; padding:20px;"type="text" placeholder="Abc def ghi knowledge php dwpd  java abc inheritance class stack abc mysql database"/>
        </div>
        
        <div>
        <form id="form" action="" method="post">
            <input type="text" name="str1" placeholder="Enter your string for search and ....">            
            <input type="text" name="str2" placeholder="Enter your string for replace for your search string ....">            
            <input type="submit" name="ok" value="find and replace">            
            </form>
        </div>
    </body>
<?php
    if(isset($_POST['ok']))
    {
    $a  = $_POST['str1'];
    $b = $_POST['str2'];
    
    
    
    $str = "Abc def ghi knowledge php dwpd  java abc inheritance class stack abc mysql database";
    //echo "//str_replace(find,replace,string,count)";
   $str= str_replace($a,$b,$str);
        echo '<div>
        <input id="inbox" style="width:800px; padding:20px; color:red;"type="text" placeholder="'.$str.'"/>
        </div>"';
    //echo "<br/>new string==>".$str;
    }
    ?>
</html>
