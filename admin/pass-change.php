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
            <div class="form1">
                <div class="form1">
                <label> Confirm New Password</label>
                <input type="password" name="password2">
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
                $a=$db->query("SELECT pass FROM regis WHERE 
                pass='$ps'");
                if(!$a)
                {
                    echo "The username you entered does not exist";
                }
                if($nps==$cps)
                $b=$db->query("UPDATE regis SET pass='$nps' where 
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
            