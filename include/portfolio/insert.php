<?php
require('../database.php');
$db =  new Database();
if(isset($_POST['add_portfolio'])){

    $data = [
        'name' => $_POST["name"],
        'image' => $_POST["image"],
        'Text' => $_POST["Text"],
    ];
    print_r($data);
    $query = "INSERT INTO Portfolio (name, image, Text) VALUES (:name, :image, :Text)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
}else{
    print_r("F");
}
?>