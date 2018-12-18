<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>
     
    <title> registration</title>
        <link rel="stylesheet" type="text/css" href="registration.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            <div class="bg">
            <div class="topnav" id="myTopnav">
    <div class="topnav1" id="myTopnav"><a href="intro.css" id="blood">HOME</a></div>
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
        
        <table border="0">
        <div class="header">
            <h2>DONOR REGISTRATION</h2>
        </div></table>
        
        <form action="" method="post" id="vali">
              <table border="0">
            <div class="form1">
            
                <div width="200px" class="td">User_Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="uname" id="uname" required></div>
        
               <div width="200px" class="td"> Full Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   <input type="text" name="Name" id="dname" required></div>
                <div width="200px" class="td">Gender <input type="radio" name="gender" value="male" checked> M<input type="radio" name="gender" value="female">F</div>
                  <div width="200px" class="td"> Age &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                      <input type="text" name="age" required></div>
                 <div width="200px" class="td">Mobile No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                    <input type="text" name="mno" id="mmno" required></div>
               <div width="200px" class="td"> Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   <input type="text" name="Email" id="email" required></div>
                     <div width="200px" class="td">Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         <input type="password" name="password" id="password" required></div>
               <div width="200px" class="td"> Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   <input type="password" name="cpassword" required></div>
              <div width="200px" class="td"><button type="submit" name="registers" class="button">Register</button>
                OLd User?<a href="userlog.php" class="a">Login</a></div>
                
            </div>
                  </table>
            </form>
            <?php
            if(isset($_POST['registers']))
            {
                $uname=$_POST['uname'];
                $dname=$_POST['Name'];
                $sex=$_POST['gender'];
                $age=$_POST['age'];
                $mno=$_POST['mno'];
                $email=$_POST['Email'];
                $pass=$_POST['password'];
                $a=$db->prepare("INSERT INTO regis (uname,dname,sex,age,mno,email,pass) VALUES (:uname,:dname,:sex,:age,:mno,:email,:pass)");
                $a->bindValue('uname',$uname);
                $a->bindValue('dname',$dname);
                $a->bindValue('sex',$sex);
                $a->bindValue('age',$age);
                $a->bindValue('mno',$mno);
                $a->bindValue('email',$email);
                $a->bindValue('pass',$pass);
                if($a->execute())
                {
                    echo "<script>alert('Donor Registration Successful')</script>";
                }else
                {
                     echo "<script>alert('Donor Registration Unsucessful')</script>";
                }
            }
            ?>
            </div>
    </body>
</html>