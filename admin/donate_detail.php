<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title>Balance</title>
        
      <link rel="stylesheet" type="text/css" href="dnor%20list.css">
      <link rel="stylesheet" type="text/css" href="admin-home.css">
        <style>
        .header {
         width: 76.3%;
        }
        </style>
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
                    <?php
                    $a=$db->query("SELECT * FROM regis");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                    $uname=$f->uname;
                    $dname=$f->dname;
                    $email=$f->email;
                    $mno=$f->mno;
                    }
                    ?>
                    <?php
                    $a=$db->query("SELECT * FROM blood_donate");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                    
                        $camp=$f->camp;
                        $date=$f->date;
                        $units=$f->units;
                    
                    }
                    ?>
                    <?php
                      
                    $b=$db->prepare("INSERT INTO donate_details (uname,dname,email,mno,camp,date,units) VALUES (:uname,:dname,:email,:mno,:camp,:date,:units)");
                    $b->bindValue('uname',$uname);
                    $b->bindValue('dname',$dname);
                    $b->bindValue('email',$email);
                    $b->bindValue('mno',$mno);
                    $b->bindValue('camp',$camp);
                    $b->bindValue('date',$date);
                    $b->bindValue('units',$units);
                    $b->execute();
                    
                   
                    ?>
                <div class="header">
                <h1>BLOOD_DONATED</h1>
                </div>
                     <center><table border="1">
                     <tr>
                        <td class="mid">UserName</td>
                        <td class="mid">Full Name</td>
                        <td class="mid">Email</td>
                        <td class="mid">Phone No</td> 
                        <td class="mid">Camp</td>
                        <td class="mid">Date</td>
                        <td class="mid">Units</td>
                    </tr>
                    <?php
                    $c=$db->query("SELECT * FROM donate_details");
                    while($d=$c->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr class="mi">
                        <td><?=$d->uname; ?></td>
                        <td><?=$d->dname; ?></td>
                        <td><?=$d->email; ?></td>
                        <td><?=$d->mno; ?></td>
                        <td><?=$d->camp; ?></td>
                        <td><?=$d->date; ?></td>
                        <td><?=$d->units; ?></td>
                    <?PHP
                    }
                    ?>
                        </tr>
                </table>
                </center>
            </div>
    </body>
</html>
