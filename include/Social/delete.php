<?php
require('../database.php');
$db =  new Database();
if(isset($_POST['delete_social'])){
    try{
        $id = $_POST["delete_social"];
        //print_r($id);
        $sql = $sql = 'DELETE FROM Social WHERE idSocial ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>