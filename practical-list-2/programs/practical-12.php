<html>
<body>
    <div style="background:lightgreen; font-size:3em;;" align="center">
        <form action="" method="post">
            <input type="text" name="email" placeholder="Enter email.." style="font-size:1em;"/>
            <input style="font-size:1em;" type="submit" name="ok" value="submit"/>
        </form>
    </div>
    <div align="center">
    <?php
        
        if($_POST['ok'])
        {
            if($_POST['email'] == "")
            {
                echo "email contain nothing";
            }
            else{
    $email=$_POST['email'];
echo "Srign length = ";
        echo $len=strlen($email);
        echo "<br/>";
        
                $c=0;
                $o=0;
        for($i=0;$i<$len;$i++)
        {
        echo $email[$i]."<br>";
            if($email[$i] == '@')
            {
                $o=1;
            }if($email[$i] == '.')
            {
               $c=1;
                //echo "dfkalsdkf";
            }
        }
        
        if($c!=1||$o!=1)
        {            
            $c = 0;
            $o = 0;
        //    header("location: practical-13.php");
    echo "Please Enter Email example@email.com";
        }
        else
        {
             $count = 0;
            echo "Email is verifyed";
        }
        }}
        ?>
    </div>
    </body>
</html>