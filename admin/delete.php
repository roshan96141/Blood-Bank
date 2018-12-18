<?php
include('conn.php');
session_start();
?>

<html>
    <head>
    <title> Login</title>
        <link rel="stylesheet" type="text/css" href="login1.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
         <link rel="stylesheet" type="text/css" href="user-home.css">
        <style>
        
        form, .content { 
            width: 28%;
            height: 28%;
            }
        
        </style>
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
        <div class="header">
            <h1>DELETE_ACC</h1>
        </div>
        
        <form action="" method="post">
            
            <div class="form1">
                <label>UserName</label>
                <input type="text" name="uname" required>
            </div>
            <div class="form1">
                <label>Password</label>
                <input type="password" name="password1" required>
            </div>
            <div class="form1">
                <button type="submit" name="delete" class="button">Delete</button>
            </div>
                </form>
            <?php
            if(isset($_POST['delete']))
            {
                $uname=$_POST['uname'];
                $pass=$_POST['password1'];
                $a=$db->query("SELECT uname FROM regis WHERE 
                uname='$Uname'");
                if(!$a)
                {
                    echo "error";
                }
            
                $b=$db->query("DELETE FROM regis where uname='$uname' && pass='$pass'");
                if($b)
                {
                $_SESSION['uname']=$uname;
                echo "<script>alert('Entry deleted')</script>";
                header("location:userlog.php");
            }else
            {
                echo "<script>alert('Wrong User')</script>";
            }
            }
            ?>
               </div>
            </body>
    </html>