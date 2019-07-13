<html>
<head>
    
    </head>
<body bgcolor="red" align="center">
    <form action="" method="post">
    <div><h1>Login PAge</h1><br><hr>
    <label>Email:</label>
    <input type="text" name="user" placeholder="Enter username.."/>
    <br><label>password:</label>
    <input type="password" name="pass" placeholder="Enter username.."/>

    <br>    <input type="submit" name="login1" value="login1"/>
    </div>
    </form>
    </body>
</html>
<?php
if(isset($_POST['login1']))
{
    error_reporting(0);
$con=mysqli_connect('localhost','root','','test') or die("have some error");

$str = "select *from `user`";
$run  = mysqli_query($con,$str);

while($r = mysqli_fetch_array($run))
{
echo $email = $_POST['email']."<br>";
echo $pass = $_POST['pass'];
$id = $_POST['id'];
echo $name = $_POST['name'];
if($_POST['user']==$email && $_POST['pass']==$pass)
    {//if($_POST['user']=="admin" && $_POST['pass']=="admin")

    break;
}    
    
    echo "<script>alert('Success fully login!')</script>";
   //session_start();
    
//$_SESSION['user']= $name;
 // header('location: home.php');
}
}

?>

