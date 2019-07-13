<html>
<head>
    </head>
<body bgcolor="red" align="center">
    <form action="" method="post">
    <div><h1>Login PAge</h1><br><hr>
    <label>Username:</label>
    <input type="text" name="user" placeholder="Enter username.."/>
    <br><label>password:</label>
    <input type="password" name="pass" placeholder="Enter username.."/>

    <br>    <input type="submit" name="login" value="login"/>
    </div>
    </form>
    </body>
</html>
<?php
    error_reporting(0);
if($_POST['user']=="admin" && $_POST['pass']=="admin")
{
    echo "<script>alert('Success fully login!')</script>";
    session_start();
    $_SESSION['user']= "admin";
    header('location: home.php');
}
?>

