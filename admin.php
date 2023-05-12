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
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Phone</th>";
                    echo "<th>Element</th>";
                    echo "<th>Message</th>";
                    echo "<th>Date</th>";
                    echo "<th>Odpoved</th>";
                  echo "</tr>";
                foreach($contact as $c){
                    echo '<tr>';
                      echo '<td>'.$c->idKontakt;'</td>';
                      echo '<td>'.$c->Name;'</td>';
                      echo '<td>'.$c->Email;'</td>';
                      echo '<td>'.$c->Phone;'</td>';
                      echo '<td>'.$c->Element;'</td>';
                      echo '<td>'.$c->Message;'</td>';
                      echo '<td>'.$c->Date;'</td>';
                      echo '<td>'.$c->Odpoved;'</td>';
                      echo '<td>
                              <form action="include/Kontakt/delete.php" method="post">
                                  <button type = "submit" name="delete_contact" value="'.$c->idKontakt.'"'.'>Vymazať</button>
                            </form></td>';
                      echo '<td>
                            <form action="include/Kontakt/update.php" method="post">
                            <input type="text" name="answer"placeholder="Názov odpovede">
                                <button type = "submit" name="update_contact" value="'.$c->idKontakt.'"'.'>Aktualizovat odpoved</button>
                          </form></td>';
                            
                    echo '</tr>';
                }
                echo '</table>';
  ?>
</div>

<div>
  <h1>Elementy(portfolio)</h1>

  <form action="include/portfolio/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Názov portfólia">
            <input type="text" name="image" id="image" placeholder="Cesta k obrázku">
            <input type="text" name="Text" id="Text" placeholder="Text k obrazku">
            <input type="submit" value="Pridať" name="add_portfolio">
  </form>

  <?php

  $portfolio = $Portfolio->get_portfolio();
    
                echo '<table class="admin-table" >';
                  echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Image</th>";
                    echo "<th>Text</th>";
                  echo "</tr>";
                foreach($portfolio as $c){
                    echo '<tr>';
                      echo '<td>'.$c->idPortfolio;'</td>';
                      echo '<td>'.$c->name;'</td>';
                      echo '<td>'.$c->image;'</td>';
                      echo '<td>'.$c->Text;'</td>';
                      echo '<td>
                              <form action="include/portfolio/delete.php" method="post">
                                  <button type = "submit" name="delete_portfolio" value="'.$c->idPortfolio.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
  ?>

</div>

<div>
  <h1>Socialne siete</h1>

  <form action="include/Social/insert.php" method="post">
            <input type="text" name="Name" id="Name" placeholder="Názov socialnej siete">
            <input type="text" name="image" id="image" placeholder="Cesta k obrázku">
            <input type="text" name="url" id="Text" placeholder="Url socialnej siete">
            <input type="submit" value="Pridať" name="add_social">
  </form>

    <?php
      $social = $Social->get_social();

      echo '<table class="admin-table" >';
      echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>image</th>";
        echo "<th>URL</th>";
      echo "</tr>";
    foreach($social as $c){
        echo '<tr>';
          echo '<td>'.$c->idSocial;'</td>';
          echo '<td>'.$c->Name;'</td>';
          echo '<td>'.$c->image;'</td>';
          echo '<td>'.$c->url;'</td>';
          echo '<td>
                  <form action="include/Social/delete.php" method="post">
                      <button type = "submit" name="delete_social" value="'.$c->idSocial.'"'.'>Vymazať</button>
                </form></td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>

</div>

</body>
</html>







