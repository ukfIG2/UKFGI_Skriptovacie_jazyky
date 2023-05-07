<?php
require('../config.php');
$db =  new Database();
$users = $User->get_users();

if(isset($_POST['add_user'])){
    //print_r($_POST) ;//ci a co posiela z formularu
    $data = [
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
    ];
    //Ak niektoré pole nie je vyplnené 
    if(empty($_POST["user_name"])||empty($_POST["user_email"]) || empty($_POST["user_password"])){
        echo('Všetky polia musia byť vyplnené  ');
        if (empty($_POST["user_name"])) echo "Prazdne name ";
        else echo "name OK ";
        if (empty($_POST["user_email"]))  echo "Prazdne Email ";
        else echo "email OK";
        if (empty($_POST["user_password"])) echo "Praznde password ";
        else echo "password OK";
    }
    //Ak sú všetky polia vyplnené
    else{
        //print_r($users);    //ci funfuje databaza
        //prejdem usermi v databaze
       
        //print_r($users[0]->Email);
        $fakt = true;
        if (count($users)==0){
            try{
                $query = "INSERT INTO Users (Name, Email, Password) VALUES (:user_name, :user_email,:user_password)";
                $query_run = $db->conn->prepare($query);        
                $query_run->execute($data);
                //header("Location: ../../thankyou.php");
                echo "pridany"; 
            }catch(PDOException $e){
                $e->getMessage();
                print($e);
            }
        }
        else{
            $fakt="true";
            for($i=0;   $i<count($users);    $i++){
                if($users[$i]->Email==$data['user_email']){
                    $fakt="false";
                    break;
                }
            }    
            if($fakt=="false"){
                echo "User so zadaným emailom už existuje";
            }
            if($fakt=="true"){
                try{
                    $query = "INSERT INTO Users (Name, Email, Password) VALUES (:user_name, :user_email,:user_password)";
                    $query_run = $db->conn->prepare($query);        
                    $query_run->execute($data);
                    //header("Location: ../../thankyou.php");
                    echo "pridany"; 
                }catch(PDOException $e){
                    $e->getMessage();
                    print($e);
                }
            }
            //echo $fakt;
        }
        
    }     
}
?>