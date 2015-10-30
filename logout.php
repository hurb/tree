<?php

session_start();
session_unset(); 
session_destroy();

//<script>window.open(‘login.php’,’_self’)</script>;
echo "<script>alert('hacked')</script>";
header("Location: login.php");

?>