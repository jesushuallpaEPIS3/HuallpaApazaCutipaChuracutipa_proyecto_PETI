<?php
class registroModel {
    private $PDO;

    public function __construct() {
        require_once("../../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function registrar($username, $password) {
        try {
            $query = $this->PDO->prepare("SELECT id FROM usuario WHERE username = :username");
            $query->bindParam(":username", $username);
            $query->execute();

            if ($query->rowCount() > 0) {
                return false; 
            }

            $query = $this->PDO->prepare("INSERT INTO usuario (username, password) VALUES (:username, :password)");
            $query->bindParam(":username", $username);
            $query->bindParam(":password", password_hash($password, PASSWORD_DEFAULT));
            
            $query->execute();

            return $this->PDO->lastInsertId(); 
        } catch (PDOException $e) {
            error_log("Error en la consulta: " . $e->getMessage());
            return false;
        }
    }
}
?>
