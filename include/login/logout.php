<?php
    session_start();
     unset($_SESSION["user_name"]);
     unset($_SESSION["user_email"]); 
     echo '<a href="../../index.php"><img src="../../images/quit.jpeg" alt="You shal not pass." style="height: 100%; " ></a>';
    //session_destroy(); 
    header('URL = index.php');

?>