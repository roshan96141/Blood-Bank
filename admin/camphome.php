<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title> registration</title>
        <link rel="stylesheet" type="text/css" href="pass-change.css">
        <link rel="stylesheet" type="text/css" href="user-home.css">
    </head>
    <body>
         <div class="bg">
    <div class="topnav" id="myTopnav">
      <div class="topnav1" id="myTopnav"> <a href="camphome.php" id="blood">CAMP HOME</a></div>
        <a href="delete.php">REMOVE ACC </a>
        <a href="userlogout.php">LOG_OUT</a>
        <a href="reqbloodlist.php">VIEW REQUEST</a>
          <a href="blood%20stock.php">BLOOD STOCK</a>
         <div class="dropdown">
         <button class="dropbtn">UPDATE INFO
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
         <a href="cemail.php">EMAIL</a>
         <a href="cmobile%20no.php">MOBILE NO</a>
              <a href="cpass.php">PASSWORD</a>
         </div>
         </div> 
        </div>
    <h1 class="up">Welcome</h1>
    
    <?php
     $un=$_SESSION['uname'];
    if(!$un)
    {
        header("location:cuserlog.php");
    }
        
   ?>
        </div>
    </body>
</html>