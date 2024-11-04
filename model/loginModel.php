<?php
    class loginModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function login($username,$password){
            try {
                $query = $this->PDO->prepare("SELECT id FROM usuario WHERE username = :username and password = :password");
                $query->bindParam(":username", $username);
                $query->bindParam(":password", $password);
                
                $query->execute();

                if ($query->rowCount() > 0) {
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    return $result['id']; 
                } else {
                    return false; 
                }
                
            } catch (PDOException $e) {
                error_log("Error en la consulta: " . $e->getMessage());
                return false;
            }
        }
    }
?>