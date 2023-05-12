<?php
    class Social{
        public $db;

        function get_social(){
            $this->db = new Database();
           
            try{
                $query = $this->db->conn->query("SELECT * FROM Social");
                $social = $query->fetchAll(PDO::FETCH_OBJ);
                return $social;
            }catch(PDOException $e){
                    print_r($e->getMessage());
                } 
            }
    }
    $Social = new Social();
?>