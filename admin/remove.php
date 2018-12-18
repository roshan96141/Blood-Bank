<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="user-home.css">
    </head>
    <body>
        <div class="bg">
    <div class="topnav" id="myTopnav">
      <div class="topnav1" id="myTopnav"> <a href="user-home.php" id="blood">USER HOME</a></div>
        <a href="userlogout.php">LOG_OUT</a>
         <a href="delete.php">REMOVE ACC </a><!--'echo " <script>alert('Are u Sure Want To Delete')</script>"'-->
          <a href="donatedlist.php">DONATED LIST</a>
          <a href="donatedlist.php">BLOOD DONATE</a>
        <a href="reqbloodlist.php">VIEW REQUEST</a>
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
        </div>
    <div>
       <form method="post" action="">
         <table>  <tr>
                    <td> <button type="submit" name="registers" class="button">Register</button></td>
                </tr>
                </table></form></div>
    
     <?php
                 if(isset($_POST['registers']))
            {
              $id=$_SESSION["id"];       
              $a=$db->query("DELETE FROM donorr_regis where id='$id'");
              if($a){
             header("location:userlog.php");
            }else
            {
                echo "<script>alert('Wrong User')</script>";
            }
            }
            ?>
        </div>
    </body>
</html>