<?php
require('../database.php');
$db =  new Database();

if(isset($_POST['contact_us'])){

    $data = [
        'contact_name' => $_POST["contact_name"],
        'contact_email' => $_POST["contact_email"],
        'contact_phone' => $_POST["contact_phone"],
        'contact_message' => $_POST["contact_message"],
        'contact_element' => $_POST["contact_element"],
    ];
    //print_r($data);
    try{
        $query = "INSERT INTO Kontakt (Name, Phone, Email, Message, Element) VALUES (:contact_name, :contact_phone, :contact_email,:contact_message, :contact_element)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        echo '<a href="../../index.php">Domov</a>';
        echo '<img src="../../images/question.jpg" alt="Thank you for your qestion." style="height: 90%; width: 100%;" >';
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}else{
    print_r("F");
}
?>