<?php
include('conn.php');
session_start();
?>

<html>
    <head>
    <title> Login</title>
        <link rel="stylesheet" type="text/css" href="login1.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            <div class="bg">
            <div class="topnav" id="myTopnav">
            <div class="topnav1" id="myTopnav"><a href="intro.html" id="blood">HOME</a></div>
              <a href="contact.html">CONTACT US</a>
              <a href="about.html">ABOUT US</a>
                <div class="dropdown">
         <button class="dropbtn">LOGIN
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
          <a href="userlog.php" >DONOR</a>
          <a href="cuserlog.php" > CAMP</a>
         </div>
         </div> 
                <div class="dropdown">
         <button class="dropbtn">REGISTRATION
            <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
          <a href="registrationn.php" >DONOR</a>
          <a href="campregis.php" > CAMP</a>
         </div>
         </div> 
            </div>
        
        
        <div class="header">
            <h1>USER SIGN_IN</h1>
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
                <button type="submit" name="login" class="button">Login</button>
                 <strong class="white">New User?<a href="registrationn.php" class="a">Register</a></strong>
            </div>
                </form>
            <?php
            if(isset($_POST['login']))
            {
            $un=$_POST['uname'];
            $ps=$_POST['password1'];
            $a=$db->prepare("SELECT * FROM regis where uname='$un' && pass='$ps'");
            $a->execute();
            $res=$a->fetchAll(PDO::FETCH_OBJ);
            if($res)
            {
                $_SESSION['uname']=$un;
                header("location:user-home.php");
            }else
            {
                echo "<script>alert('Wrong User')</script>";
            }
            }
            ?>
               </div>
            </body>
    </html>
            