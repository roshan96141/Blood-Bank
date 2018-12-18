<?php
session_start();
$un=$_SESSION['Name'];
session_destroy();
header('location:adlogin.php');
?>