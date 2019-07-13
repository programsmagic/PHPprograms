<?php

if(!isset($_SESSION['user']))
{
    header('location: practical-43.php');
}


session_start();


session_destroy();
?>