<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="user-home.css">
    <link rel="stylesheet" type="text/css" href="pass-change.css">
    </head>
    <body>
        <div class="bg">
    <div class="topnav" id="myTopnav">
        <div class="topnav1" id="myTopnav"> <a href="admin-home.php" id="blood">ADMIN HOME</a></div>
        <a href="logout.php">LOG_OUT</a>
        <a href="log.php">LOG LIST</a>
          <a href="campinfo.php">CAMP LIST</a>
         <a href="userinfo.php">USER LIST</a>
    </div>
    <h1>Welcome Admin</h1>
    
    <?php
     $un=$_SESSION['Name'];
    if(!$un)
    {
        header("location:adlogin.php");
    }
        
   ?>
        </div>
    </body>
</html>