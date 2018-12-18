<?php
include('conn.php');
session_start();
$uname=$_SESSION['uname'];
?>
<html>
    <head>
        <title> Donor List</title>
        <link rel="stylesheet" type="text/css" href="donor.css">
      <link rel="stylesheet" type="text/css" href="user-home.css">
        <style>
          .header {
                width: 33.3%;
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
             <h1>DONATED_LIST</h1>
            </div>
            <center><div class="top">
                <table border="1">
                    <tr>
                        <td class="mid">Blood Bank</td>
                        <td class="mid">Date</td>
                        <td class="mid">Units</td>
                    </tr>
                    <?php
                    $a=$db->query("SELECT * FROM donate_details WHERE uname ='".$_SESSION['uname']."'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr>
                        <td width="215px" class="mi" ><?=$f->cname; ?></td>
                        <td  width="14px" class="mi"><?=$f->date; ?></td>
                        <td  class="mi"><?=$f->bgroup; ?></td>
                    </tr>
                    <?PHP
                    }
                    ?>
                    
                </table>
                </div>
            </center>
    </body>
</html>