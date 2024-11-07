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


            $id = $this->PDO->lastInsertId();
            
            $query0 = $this->PDO->prepare("INSERT INTO foda(id) VALUES(:id)");
            $query0->bindParam(":id",$id);
            $query0->execute();

            for($i=1; $i<6; $i++){
                $producto = "Producto " . $i;
                $query1 = $this->PDO->prepare("INSERT INTO prevision_ventas(id,producto) VALUES(:id,:producto)");
                $query1->bindParam(":id",$id);
                $query1->bindParam(":producto",$producto);
                $query1->execute();
            }
            for($i=0; $i<25; $i++){
                $query2 = $this->PDO->prepare("INSERT INTO tcm(id) VALUES(:id)");
                $query2->bindParam(":id",$id);
                $query2->execute();
            }
            for($i=0; $i<30; $i++){
                $query3 = $this->PDO->prepare("INSERT INTO evo_demanda_global(id) VALUES(:id)");
                $query3->bindParam(":id",$id);
                $query3->execute();
            }
            for($i=0; $i<45; $i++){
                $query4 = $this->PDO->prepare("INSERT INTO niv_venta_competidor(id) VALUES(:id)");
                $query4->bindParam(":id",$id);
                $query4->execute();
            }


            return $this->PDO->lastInsertId();
        } catch (PDOException $e) {
            error_log("Error en la consulta de registro: " . $e->getMessage());
            return false;
        }
    }
}
?>
