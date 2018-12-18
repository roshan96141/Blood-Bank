<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title> Donor List</title>
        <link rel="stylesheet" type="text/css" href="dnor%20list.css">
      <link rel="stylesheet" type="text/css" href="admin-home.css">
    </head>
        <body>
            <div class="bg">
             <div class="topnav" id="myTopnav">
             <div class="topnav1" id="myTopnav"> <a href="admin-home.php" id="blood">ADMIN HOME</a></div>
             <a href="logout.php">LOG_OUT</a>
             <a href="#">NGO</a>
             <a href="donate_detail.php">BLOOD DONATED</a>
             <a href="blood%20stock.php">STOCK BLOOD LIST</a>
             <a href="donor%20list.php">DONOR LIST</a>
             </div>
                <div class="header">
             <h1>DONOR LIST</h1>
            </div>
            <center><div class="top">
                <table border="1">
                    <tr>
                        <td class="mid">User Name</td>
                        <td class="mid">Full Name</td>
                        <td class="mid">Gender</td>
                        <td class="mid">Age</td>
                        <td class="mid">Mobile no</td>
                        <td class="mid">Email</td>
                    </tr>
                    <?php
                    $a=$db->query("CALL `getRegis`();");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr>
                        <td class="mi"><?=$f->uname; ?></td>
                        <td class="mi"><?=$f->dname; ?></td>
                        <td class="mi"><?=$f->sex; ?></td>
                        <td class="mi"><?=$f->age; ?></td>
                        <td class="mi"><?=$f->mno; ?></td>
                        <td class="mi"><?=$f->email; ?></td>
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





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </center>