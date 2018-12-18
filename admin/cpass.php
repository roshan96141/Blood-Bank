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
            <h1>PASS_CHANGE</h1>
        </div>
        
        <form action="" method="post">
            <div class="form1">
                <label>Old Password</label>
                <input type="password" name="password">
            </div>
            <div class="form1">
                <label> New Password</label>
                <input type="password" name="password1">
            <div>
                <div class="form1">
                <label> Confirm New Password</label>
                <input type="password" name="password2">
                </div>
            <div class="form1" id="but">
             <center> <button type="submit" name="login" class="button">Change</button></center>
            </div>
                </form>
       <?php
            if(isset($_POST['login']))
            {
                $ps=$_POST['password'];
                $nps=$_POST['password1'];
                $cps=$_POST['password2'];
                $a=$db->query("SELECT pass FROM cregis WHERE 
                pass='$ps'");
                if(!$a)
                {
                    echo "The username you entered does not exist";
                }
                if($nps==$cps)
                $b=$db->query("UPDATE cregis SET pass='$nps' where 
                    pass='$ps'");
                if($b)
                {
                    echo "<script>alert('Congratulations You have successfully changed your password')</script>";
                }
                else
                {
                    echo "<script>alert('Passwords do not match')</script>";
                }
            }
        ?>
                </div>
    </body>
</html>