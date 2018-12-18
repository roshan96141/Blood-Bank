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
      <div class="topnav1" id="myTopnav"> <a href="camphome.php" id="blood">CAMP HOME</a></div>
        <a href="delete.php">REMOVE ACC </a>
        <a href="clogout.php">LOG_OUT</a>
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
                $cname=$_POST['Name'];
                $email=$_POST['email'];
                $a=$db->query("SELECT c_uname FROM cregis WHERE 
                cname='$cname'");
                if(!$a)
                {
                    echo "The username you entered does not exist";
                }
                $b=$db->query("UPDATE cregis SET email='$email' where 
                    cname='$cname'");
                echo "<script>alert('Email Updated Successfully')</script>";
            }
        ?>
            </div>
    </body>
</html>
            