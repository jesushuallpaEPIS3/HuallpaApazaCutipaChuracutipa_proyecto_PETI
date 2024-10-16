<?php
    class visionModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $vision){
            $query = $this->PDO->prepare("INSERT INTO vision(id, vision) values(:id,:vision) ");
            $query->bindParam(":id",$id);
            $query->bindParam(":vision",$vision);
            return ($query->execute()) ? true : false;
        }
        public function show($id){
            $query = $this->PDO->prepare("SELECT * FROM vision WHERE id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
        }
        public function update($id,$vision){
            $query = $this->PDO->prepare("UPDATE vision SET vision = :vision WHERE id = :id");
            $query->bindParam(":vision",$vision);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $id : false ;
        }
        public function comprobar($id){
            $query = $this->PDO->prepare("Select * from vision where id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? true : false ;
        }
    }
?>