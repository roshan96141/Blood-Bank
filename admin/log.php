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
                width: 40.5%;
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
             <h1>LOG_LIST</h1>
            </div>
            <center><div class="top">
                <table border="1">
                    <tr>
                        <td class="mid">Id</td>
                        <td class="mid">UserName</td>
                        <td class="mid">Action</td>
                        <td class="mid">Date</td>
                    </tr>
                    <?php
                    $a=$db->query("SELECT id,uname,action,cdate FROM log");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr>
                        <td class="mi"><?=$f->id; ?></td>
                        <td class="mi"><?=$f->uname; ?></td>
                        <td class="mi"><?=$f->action; ?></td>
                        <td class="mi"><?=$f->cdate; ?></td>
                    </tr>
                    <?PHP
                    }
                    ?>
                    
                </table>
                </div>
            </center>
    </body>
</html>