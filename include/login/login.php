<?php
    require('../config.php');
    session_start();

    $users = $User->get_users();
    $db =  new Database();
    $data = [
        'user_email' => $_POST["user_email"],
        'user_password' => sha1($_POST["user_password"]),
    ];

    if(isset($_POST['log_user'])){
            //našli sme usera

            $query = "SELECT Email  FROM Users WHERE Email='".$data['user_email']."'";
            $query = $db->conn->query($query);
            $user_exists =  $query->fetchAll(PDO::FETCH_OBJ);
            
            if($user_exists){
                //kontrolujem, ci zadal spravne heslo
                $query = "SELECT Password  FROM Users WHERE Email='".$data['user_email']."'";
                $query = $db->conn->query($query);
                $password =  $query->fetchAll(PDO::FETCH_OBJ);

                if($password){

                    
                    if($data['user_password']==$password[0]->Password){
                        $_SESSION['valid'] = true;
                        $query = "SELECT Name  FROM Users WHERE Email='".$data['user_email']."'";
                        $query = $db->conn->query($query);
                        $name =  $query->fetchAll(PDO::FETCH_OBJ);
                        $_SESSION['user_name'] = $name;
                        
                        header("Location: ../../admin.php");
                    }else{
                        //echo 'Nesprávne heslo';
                        echo '<a href="../../login.php"><img src="../../images/password.jpg" alt="Your password is wrongg." style="height: 100%; width: 100%;" ></a>';       
                    }
            }
            }else{
                //echo 'pouzivatel neexistuje';
                echo '<a href="../../login.php"><img src="../../images/username.jpg" alt="Your username is wrong." style="height: 100%; width: 100%;" ></a>';
            }
    }
    else "Isset nejde";

?>