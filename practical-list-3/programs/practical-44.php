<html>
<body bgcolor="lightblue">
    <h1 align="center">Registration /user</h1>
    <br>
    <hr>
     
    <form action="" method="post" align="center">
    <br>
    <label>Username:</label>
    <input type="text" name="a" placeholder="Enter username.."/>
<br>
      <br>  <label>Email ID</label>
       <input type="email" name="b" placeholder="Enter Email."/>
      <br>
        <br><label>Mob No.</label>
    <input type="tel" name="c" placeholder="Enter Number.."/>
<br>
        <br><label> Create password:</label>
    <input type="password" name="d" placeholder="Enter username.."/>
<br>
    <br>
        <input type="submit" name="login" value="login"/>
    </form>
    </body>
</html>
<?php
if(isset($_POST['login']))
{
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$con=mysqli_connect('localhost','root','','test') or die("have some error");
$str = "INSERT INTO `user` (`id`,`name`,`email`,`mob_no`,`pass`) VALUES ('NULL','$a','$b','$c','$d')";
$run = mysqli_query($con,$str);
if($run)
{
echo "<script>alert('successfully registration!')</script>";
}

}
?>