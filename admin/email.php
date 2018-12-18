<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title>UPDATE</title>
        <link rel="stylesheet" type="text/css" href="pass-change.css">
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
        <div class="header">
            <h1>UPDATE_EMAIL</h1>
        </div>
        
        <form action="" method="post">
            <div class="form1">
                <label>User Name</label>
                <input type="text" name="Name" required>
            </div>
            <div class="form1">
                <label>Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="form1">
                <button type="submit" name="login" class="button">Update</button>
            </div>
                </form>
       <?php
            if(isset($_POST['login']))
            {
                $uname=$_POST['Name'];
                $email=$_POST['email'];
                $a=$db->query("SELECT dname FROM regis WHERE 
                uname='$uname'");
                if(!$a)
                {
                    echo "The username you entered does not exist";
                }
                $b=$db->query("UPDATE regis SET email='$email' where 
                    uname='$uname'");
                echo "<script>alert('Email Updated Successfully')</script>";
            }
        ?>
            </div>
    </body>
</html>
            