<?php
    class db{
        private $host= "db"; #db para hacer el contenedor  -  localhost para xampp
        private $dbname = "peti";
        private $user = "root";
        private $password = "";
        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8mb4", $this->user, $this->password);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>
