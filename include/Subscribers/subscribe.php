<?php
require('../config.php');
$subscribers = $Subscribers->get_Subscribers();
$db =  new database();
if(isset($_POST['update_subscribers'])){
$data = [
        'id' => $_POST["idForm"],
        'answer' => "True",
    ];
    print_r($data);
    foreach ($subscribers as $s){
        if($s->idSubscribers==$data['id']){

        }
    }

    try{
        $query =  "UPDATE Subscribers SET UnSucribed=:answer WHERE idSubscribers=:id";
        
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header("Location: ../../admin.php");

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    print_r("F");
}
?>