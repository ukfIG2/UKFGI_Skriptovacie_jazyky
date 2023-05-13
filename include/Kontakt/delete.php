<?php
require('../database.php');
$db =  new Database();
if(isset($_POST['delete_contact'])){
   print_r($_POST);
    try{
        $id = $_POST["delete_contact"];
        print_r($id);
        $sql = $sql = 'DELETE FROM Kontakt WHERE idKontakt ='.$id;
        $db->conn->exec($sql);
        header("Location: ../../admin.php");
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>