<?php
    class porterModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $enunciado, $punto){
            $query = $this->PDO->prepare("INSERT INTO porter(id, enunciado, punto) values(:id, :enunciado, :punto)");
            $query->bindParam(":id", $id);
            $query->bindParam(":enunciado", $enunciado);
            $query->bindParam(":punto", $punto);
            return $query->execute();
        }
        public function verForm($id){
            $query = $this->PDO->prepare("SELECT * FROM porter WHERE id = :id");
            $query->bindParam(":id", $id);
            return ($query->execute()) ? $query->fetchAll() : false;    
        }
        public function deleteForm($id){
            $query = $this->PDO->prepare("DELETE FROM porter where id = :id");
            $query->bindParam(":id", $id);
            return $query->execute();
        }
        public function comprobar($id){
            $query = $this->PDO->prepare("SELECT * FROM porter where id = :id");
            $query->bindParam(":id", $id);
            $query->execute();
            return $query->rowCount() > 0;
        }
    }
?>