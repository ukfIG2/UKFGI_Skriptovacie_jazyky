<?php
    class Database{
        public $conn;

        function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host=localhost;dbname=GabrisIvan;charset=utf8','root','');
            }catch(PDOException $e){
                var_dump($e->getMessage());
            }
            /*if($this->conn){
                echo "Sme spojeni";
             } else echo "nie sme";
             */

        }
    }
    /*$db = new Database();
    $dv -> conn;
    Toto je na kontrolu spojenia
    */
?>