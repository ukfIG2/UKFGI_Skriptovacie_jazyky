<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  

<!--<?php
    include('include/config.php');
    //require("include/config.php");
        session_start();
        if(!isset($_SESSION['user_name'])){
            header("Location:no-permission.php");
        }
  ?>
  -->
<div class="admin">
        <h1>Admin rozhranie</h1>
        <p>Nazdar <?php echo($_SESSION['user_name'][0]->Name);?></p><br>
        <a href="include/login/logout.php">Odhlásiť sa</a>
</div>

<div>
  <h1>Kontaktovali nas</h1>

  <?php

    $contact = $Contact->get_contact();
    //print_r($contact); //Databaza ide
    
                echo '<table class="admin-table" >';
                  echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Phone</th>";
                    echo "<th>Element</th>";
                    echo "<th>Message</th>";
                  echo "</tr>";
                foreach($contact as $c){
                    echo '<tr>';
                      echo '<td>'.$c->Name;'</td>';
                      echo '<td>'.$c->Email;'</td>';
                      echo '<td>'.$c->Phone;'</td>';
                      echo '<td>'.$c->Element;'</td>';
                      echo '<td>'.$c->Message;'</td>';
                      echo '<td>
                              <form action="inc/contact/delete.php" method="post">
                                  <button type = "submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
  ?>
</div>

</body>
</html>







