<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title> registration</title>
        <link rel="stylesheet" type="text/css" href="cregis.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
         <link rel="stylesheet" type="text/css" href="pass-change.css">
        <style>
            form, .content { 
                width: 26%;
                height: 30%;
                padding-top: 30px;
                }
            #but
            {
                margin-left: -75px;
            }
            .button{
                align-content: center;
            }.header{
                 width: 28.2%;
                height: 15%;
                margin-top: 90px;
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
        <table border="0">
        <div class="header">
            <h1>SEND REQUEST</h1>
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                <td>User Name</td>
                <td> <input type="text" name="Name" required></td>
                </tr>
                <tr>
                <td width="175px">Blood Group</td>
                <td><select name="bgroup">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select></td></tr>
                <tr>
                    <td> <center><button type="submit" name="registers" class="button" id="but">Request</button></center></td>
                </tr>
                </table>
            </div>
            </form>
            <?php
            if(isset($_POST['registers']))
            {
                $uname=$_POST['Name'];
                $bgroup=$_POST['bgroup'];
                $a=$db->prepare("INSERT INTO blood_req (uname,bgroup) VALUES (:uname,:bgroup)");
                $a->bindValue('uname',$uname);
                $a->bindValue('bgroup',$bgroup);
                if($a->execute())
                {
                    echo "<script>alert('Request Successful')</script>";
                }else
                {
                     echo "<script>alert('Request Unsucessful')</script>";
                }
            }
            
            
            
            
            
            ?>
            </div>
    </body>
</html>