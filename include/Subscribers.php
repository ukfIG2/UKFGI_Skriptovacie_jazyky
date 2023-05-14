<?php
    
    class Subscribers{
        public $db;
        function __construct()
        {
            $this->db = new Database();
        }
        function get_Subscribers(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM Subscribers");
                $subscribers = $query->fetchAll(PDO::FETCH_OBJ);
                return $subscribers;

              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Subscribers = new Subscribers();
    
?>