<?php
echo "nieco1";
require('../config.php');
echo "nieco2";
$kontakt = $Contact->get_contact();
echo "nieco3";
$db =  new database();
if(isset($_POST['update_contact'])){
echo "";    $data = [
        'id' => $_POST["idKontakt"],
        'answer' => $_POST["answer"],
    ];
    print_r($data);
    foreach ($kontakt as $q){
        if($q->id==$data['id']){

            if(empty($data['answer'])){
                $data['answer'] = $q->answer;
            }
        }
    }
    echo "ll";
    try{
        echo "mm";
        $query =  "UPDATE Kontakt SET Odpoved=:answer WHERE idKontakt=:id";
        
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        echo "nn";
        

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    print_r("F");
}
?>