<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="user-home.css">
    </head>
    <body>
        <div class="bg">
    <div class="topnav" id="myTopnav">
      <div class="topnav1" id="myTopnav"> <a href="user-home.php" id="blood">USER HOME</a></div>
        <a href="delete.php">REMOVE ACC </a>
        <a href="userlogout.php">LOG_OUT</a>
          <a href="donatedlist.php">DONATED LIST</a>
          <a href="blooddonated.php">BLOOD DONATE</a>
         <a href="breq.php">BLOOD REQUEST</a>
         <div class="dropdown">
         <button class="dropbtn">UPDATE INFO
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
         <a href="email.php">EMAIL</a>
         <a href="mobile%20no.php">MOBILE NO</a>
              <a href="pass-change.php">PASSWORD</a>
         </div>
         </div> 
        </div>
    <h1 class="up">Welcome User</h1>
    
    <?php
     $un=$_SESSION['uname'];
    if(!$un)
    {
        header("location:userlog.php");
    }
        
   ?>
        </div>
    </body>
</html>