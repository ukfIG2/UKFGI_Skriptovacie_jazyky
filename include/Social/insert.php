<?php
require('../database.php');
$db =  new Database();
if(isset($_POST['add_social'])){

    $data = [
        'name' => $_POST["Name"],
        'image' => $_POST["image"],
        'url' => $_POST["url"],
    ];

    $query = "INSERT INTO Social (Name, image, url) VALUES (:name, :image, :url)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
    header("Location: ../../admin.php");
}else{
    print_r("F");
}
?>