<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title> Donor List</title>
        <link rel="stylesheet" type="text/css" href="donor.css">
      <link rel="stylesheet" type="text/css" href="user-home.css">
        <style>
          .header {
                width: 34.8%;
                height: 75px;
                padding: 10px;
                margin-top: 150px;
                padding-top: 0px;
                padding-bottom: 15px;
                }
        
        </style>
    </head>
        <body>
              <div class="bg">
               <div class="topnav" id="myTopnav">
        <div class="topnav1" id="myTopnav"> <a href="admin-home.php" id="blood">ADMIN HOME</a></div>
        <a href="logout.php">LOG_OUT</a>
                   <a href="log.php">LOG LIST</a>
                    <a href="campinfo.php">CAMP LIST</a>
         <a href="userinfo.php">USER LIST</a>
    </div>
                <div class="header">
             <h1>REGISTERED_LIST</h1>
            </div>
            <center><div class="top">
                <table border="1">
                    <tr>
                        <td class="mid">Camp Name</td>
                        
                        <td class="mid">Mobile No</td>
                        <td class="mid">Email</td>
                    </tr>
                    <?php
                    $a=$db->query("SELECT cname,mno,email FROM cregis");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr>
                        <td class="mi"><?=$f->cname; ?></td>
                       
                        <td class="mi"><?=$f->mno; ?></td>
                        <td class="mi"><?=$f->email; ?></td>
                    </tr>
                    <?PHP
                    }
                    ?>
                    
                </table>
                </div>
            </center>
    </body>
</html>