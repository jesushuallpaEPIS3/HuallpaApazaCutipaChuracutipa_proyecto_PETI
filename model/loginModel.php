<?php
class loginModel {
    private $PDO;

    public function __construct() {
        require_once("../../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function login($username, $password) {
        try {
            $query = $this->PDO->prepare("SELECT id FROM usuario WHERE username = :username AND password = :password");
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
            error_log("Error en la consulta de login: " . $e->getMessage());
            return false;
        }
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
            $query->bindParam(":password", $password);

            $query->execute();
            return $this->PDO->lastInsertId();
        } catch (PDOException $e) {
            error_log("Error en la consulta de registro: " . $e->getMessage());
            return false;
        }
    }
}
?>
