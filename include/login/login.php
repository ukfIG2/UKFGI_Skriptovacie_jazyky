<?php
    require('../config.php');
    session_start();
//    echo "nieco";
    $users = $User->get_users();
    $db =  new Database();
    $data = [
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
    ];
    //print_r($data); //formular posiela
    //print_r($data["user_email"]); //formular posiela
    if(isset($_POST['log_user'])){
            //našli sme usera

            $query = "SELECT Email  FROM Users WHERE Email='".$data['user_email']."'";
            $query = $db->conn->query($query);
            $user_exists =  $query->fetchAll(PDO::FETCH_OBJ);
            //print_r($user_exists);
            
            if($user_exists){
                //kontrolujem, ci zadal spravne heslo
                $query = "SELECT Password  FROM Users WHERE Email='".$data['user_email']."'";
                $query = $db->conn->query($query);
                $password =  $query->fetchAll(PDO::FETCH_OBJ);
                //print_r($password); //dava heslo
                //var_dump($password[0]->user_password);
                if($password){
                    /*echo "formular Passwrod..";
                    print_r($data["user_password"]); //formular posiela
                    echo "......Databaza password..";
                    print_r($password); //dava heslo*/
                    
                    if($data['user_password']==$password[0]->Password){
                        echo "tu";
                        $_SESSION['valid'] = true;
                        $query = "SELECT Name  FROM Users WHERE Email='".$data['user_email']."'";
                        $query = $db->conn->query($query);
                        $name =  $query->fetchAll(PDO::FETCH_OBJ);
                        $_SESSION['user_name'] = $name;
                        
                        header("Location: ../../admin.php");
                    }else{
                        echo 'Nesprávne heslo';
                    }
            }
            }else{
                echo 'pouzivatel neexistuje';
            }
    }
    else "Isset nejde";

?>