<?php
require('../database.php');
$db =  new Database();

if(isset($_POST['subscribe_us'])){

    $data = [
        'Email' => $_POST["Email"],
    ];

    try{
        $query = "INSERT INTO Subscribers (Email) VALUES (:Email)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        echo '<a href="../../index.php">Domov</a>';
        echo '<img src="../../images/subscribe.jpg" alt="Thank you for your qestion." style="height: 90%; width: 100%;" >';
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}else{
    print_r("F");
}
?>