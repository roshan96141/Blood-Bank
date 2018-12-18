<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title> registration</title>
        <link rel="stylesheet" type="text/css" href="pass-change.css">
        <link rel="stylesheet" type="text/css" href="user-home.css">
        <style>
            .date{
                color: white;
            }
            .camp
            {
                background: rgba(0,0,0,.5);
                background-color:black;
                color: white;
            }
            form, .content { 
                width: 28%;
                height: 47%;
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
            <h1>BLOOD_DONATE</h1>
        </div>
        
        <form action="" method="post">
             <div class="form1">
                <label>UserName</label>
                <input type="text" name="uname" required>
            </div>
            <div class="form1">
                <label>Blood Bank</label>
                <select name="cname" class="camp">
                    <option value="Blood Cross Society" name="cname">Blood Cross Society</option>
                    <option value="Rotary Blood Bank" name="cname">Rotary Blood Bank</option>
                    <option value="The Blood Association" name="cname">The Blood Association</option>
                    </select>
            </div>
            <div class="form1">
                <label> Date</label>
                <input type="date" name="date" class="date">
            </div>
                <div class="form1">
                    <table><tr>
                <td><label>Blood Group</label>
                <select name="bgroup">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select></td>
                    </tr></table>
            </div>
            <div class="form1" id="but">
             <center> <button type="submit" name="donate" class="button">Donate</button></center>
            </div>
                </form>
        <?php
            if(isset($_POST['donate']))
            {
                $uname=$_POST['uname'];
                $cname=$_POST['cname'];
                $date=$_POST['date'];
                $bgroup=$_POST['bgroup'];
                $a=$db->prepare("INSERT INTO donate_details (uname,cname,date,bgroup) VALUES (:uname,:cname,:date,:bgroup)");
                $a->bindValue('uname',$uname);
                $a->bindValue('cname',$cname);
                $a->bindValue('date',$date);
                $a->bindValue('bgroup',$bgroup);
                
                if($a->execute())
                {
                    echo "<script>alert('Donation Successful')</script>";
                }else
                {
                     echo "<script>alert('Donation Unsucessful')</script>";
                }
            }
            ?>
                </div>
    </body>
</html>