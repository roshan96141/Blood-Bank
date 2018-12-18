<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title> Donor List</title>
        <link rel="stylesheet" type="text/css" href="donor.css">
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
                <div class="header">
             <h1>REQUEST LIST</h1>
            </div>
            <center><div class="top">
                <table border="1">
                    <tr>
                        <td class="mid"> Name</td>
                        <td class="mid">Sex</td>
                        <td class="mid">Age</td>
                      
                        <td class="mid">Mobile no</td>
                       
                        <td class="mid">Email</td>
                         <td class="mid">Blood Group</td>
                    </tr>
                    <?php
                    $a=$db->query("SELECT dname,sex,age,mno,email,bgroup FROM regis, blood_req WHERE regis.uname=blood_req.uname");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr>
                        <td width="230" class="mi"><?=$f->dname; ?></td>
                        <td class="mi"><?=$f->sex; ?></td>
                        <td class="mi"><?=$f->age; ?></td>
                        <td class="mi"><?=$f->mno; ?></td>
                        <td width="232" class="mi"><?=$f->email; ?></td>
                         <td class="mi"><?=$f->bgroup; ?></td>
                    </tr>
                    <?PHP
                    }
                    ?>
                    
                </table>
                </div>
            </center>
            </div>
    </body>
</html>
