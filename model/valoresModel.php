<?php
    class valoresModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $valor){
            $query = $this->PDO->prepare("INSERT INTO valores(id, valor) VALUES (:id, :valor)");
            $query->bindParam(":id", $id);
            $query->bindParam(":valor", $valor);
            return $query->execute();
        }
        public function show($id){
            $query = $this->PDO->prepare("SELECT * FROM valores WHERE id = :id");
            $query->bindParam(":id", $id);
            return ($query->execute()) ? $query->fetchAll() : false;
        }
        public function comprobar($id){
            try {
                $query = $this->PDO->prepare("SELECT * FROM valores WHERE id = :id");
                $query->bindParam(":id", $id);
                $query->execute();
                return $query->rowCount() > 0;
            } catch (PDOException $e) {
                error_log($e->getMessage());
                return false;
            }
        }
    }
?>
