<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title> registration</title>
        <link rel="stylesheet" type="text/css" href="stylelog.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            <div class="bg">
                
                <div class="topnav1" id="myTopnav"> <a href="intro.html" id="blood">BACK</a></div>
        <div class="header">
            <h1>SIGN_IN</h1>
        </div>
        
        <form action="" method="post">
            
            <div class="form1">
                <label>UserName</label>
                <input type="text" name="Name">
            </div>
            <div class="form1">
                <label>Password</label>
                <input type="password" name="password1">
            </div>
            <div class="form1">
                <button type="submit" name="login" class="button">Login</button>
            </div>
                </form>
            
            <?php
            if(isset($_POST['login']))
            {
            $un=$_POST['Name'];
            $ps=$_POST['password1'];
            $a=$db->prepare("SELECT * FROM admin where uname='$un' && pass='$ps'");
            $a->execute();
            $res=$a->fetchAll(PDO::FETCH_OBJ);
            if($res)
            {
                $_SESSION['Name']=$un;
                header("location:admin-home.php");
            }else
            {
                echo "<script>alert('Wrong User')</script>";
            }
            }
            ?>
            </div>
            </body>
    </html>
            