<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title> Donor List</title>
        <link rel="stylesheet" type="text/css" href="blood%20stock.css">
          <link rel="stylesheet" type="text/css" href="user-home.css">
        <style>
            td{
                width: 150px;
            }
        </style>
    </head>
        <body>
              <div class="bg">
    <div class="topnav" id="myTopnav">
      <div class="topnav1" id="myTopnav"> <a href="camphome.php" id="blood">CAMP HOME</a></div>
        <a href="delete.php">REMOVE ACC </a>
        <a href="clogout.php">LOG_OUT</a>
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
                 <h2>BLOOD_STOCK</h2>
            </div>
            <center><div class="top">
                <table border="1">
                    <tr>
                        <td class="mid">GROUP</td>
                        <td class="mid">UNITS(IN 100ML)</td>
                    </tr>
                    <tr>
                        <td class="mid">A+</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='A+' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">A-</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='A-' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">B+</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='B+' ");
                            echo $b=$a->rowcount()
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">B-</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='B-' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">O+</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='O+' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">O-</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='O-' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">AB+</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='AB+' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="mid">AB-</td>
                        <td class="mid">
                            <?php
                            $a=$db->query("SELECT * FROM donate_details where bgroup='AB-' ");
                            echo $b=$a->rowcount();
                            ?>
                        </td>
                    </tr>
                </table>
                </div>
            </center>
            </div>
    </body>
</html>
