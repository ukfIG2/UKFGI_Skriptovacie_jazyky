<?php
    include('partials/header.php');
    //require("include/config.php");
        session_start();
        if(!isset($_SESSION['user_name'])){
            header("Location:no-permission.php");
        }
  ?>
  
<div class="service_section layout_padding">
        <h1>Admin rozhranie</h1>
        <p>Nazdar <?php echo($_SESSION['user_name'][0]->Name);?></p><br>
        <a href="include/login/logout.php">Odhlásiť sa</a>
</div>











<?php
    include('partials/footer.php');
  ?>
</html>