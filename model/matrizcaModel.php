<?php
    class matrizcaModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $valor){
            

            $query = $this->PDO->prepare("INSERT INTO matrizca(id, valores) VALUES (:id, :valor)");
            $query->bindParam(":id", $id);
            $query->bindParam(":valor", $valor);
            return $query->execute();
        }
        public function show($id){
            $query = $this->PDO->prepare("SELECT * FROM matrizca WHERE id = :id");
            $query->bindParam(":id", $id);
            return ($query->execute()) ? $query->fetchAll() : false;
        }
        public function comprobar($id){
            try {
                $query = $this->PDO->prepare("SELECT * FROM matrizca WHERE id = :id");
                $query->bindParam(":id", $id);
                $query->execute();
                return $query->rowCount() > 0;
            } catch (PDOException $e) {
                error_log($e->getMessage());
                return false;
            }
        }
        public function delete($id){
            $query = $this->PDO->prepare("DELETE FROM matrizca WHERE id = :id");
            $query->bindParam(":id", $id);
            
            if(!$query->execute()){
                return false;
            }
        }
    }
?>
