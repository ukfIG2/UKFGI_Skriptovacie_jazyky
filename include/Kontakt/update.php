<?php
require('../config.php');
$kontakt = $Contact->get_contact();
$db =  new database();
if(isset($_POST['update_contact'])){
$data = [
        'id' => $_POST["idForm"],
        'answer' => $_POST["answer"],
    ];

    foreach ($kontakt as $q){
        if($q->idKontakt==$data['id']){

            if(empty($data['answer'])){
                $data['answer'] = $q->answer;
            }
        }
    }

    try{
        $query =  "UPDATE Kontakt SET Odpoved=:answer WHERE idKontakt=:id";
        
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