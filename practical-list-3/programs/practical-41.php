<html>
<head>
    <title>Create a web application which will accept five different integer numbers through text boxes and display largest number among five numbers entered by user. [ USE POST METHOD ] </title>/
</head>
<body>
    <form action="" method="post">
        <?php
        for($i=1;$i<=5;$i++)
        {
            echo '<hr><br>Enter value '.$i.' =><input type="number" name="value'.$i.'" placeholder="value'.$i.'"/>';
        }
        ?>
        <br>
        <input type="submit" name="ok" value="find max value" />
    </form>
</body>
</html>
<?php
if(isset($_POST['ok']))
{echo "the max value is =>";
echo max($_POST['value1'],$_POST['value2'],$_POST['value3'],$_POST['value4'],$_POST['value5']);
}
?>