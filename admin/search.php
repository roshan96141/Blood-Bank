<html>
    <head>
    </head>
<body>
    <form action="" method="post">
            
            <div class="form1">
                <label>blood</label>
                <select name="bgroup">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select>
            </div>
        <div class="form1">
                <button type="submit" name="submit" class="button">Search</button>
            </div>
    </form>
<?php

  $db=new PDO('mysql:host=localhost;dbname=roshan','root','');
session_start();
if($_POST && isset($_POST['submit'])){ 

    // preparing a statement
    $a  = $db->prepare("SELECT bgroup FROM donate_details WHERE bgroup = ?");

    // execute/run the statement. 
    $a->execute(array($_POST['submit']));

    // fetch the result. 
    $b = $a->fetchAll(\PDO::FETCH_ASSOC); 
    var_dump($bgoup); 
 }


if(!empty($bgroup)) {

	$query .= "AND bgroup LIKE '%$bgroup%' ";

}
    ?>
    <?php
                <table border="1">
                    <tr>
                        <td class="mid">Camp Name</td>
                        <td class="mid">Mobile no</td>
                        <td class="mid">Email</td>
                    </tr>
    $data=$db->query("SELECT * FROM cregis WHERE cname != 0");
while($f=$data->fetch(PDO::FETCH_OBJ))
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
    </body>
</html>