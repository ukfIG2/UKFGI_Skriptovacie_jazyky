<?php
require('../database.php');
$db =  new Database();
if(isset($_POST['delete_portfolio'])){
    try{
        $id = $_POST["delete_portfolio"];
        //print_r($id);
        $sql = $sql = 'DELETE FROM Portfolio WHERE idPortfolio ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>