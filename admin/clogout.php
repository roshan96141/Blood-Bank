<?php
session_start();
$un=$_SESSION['Name'];
session_destroy();
header('location:cuserlog.php');
?>