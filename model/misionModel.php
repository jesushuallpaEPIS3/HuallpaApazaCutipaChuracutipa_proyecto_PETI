<?php
    class misionModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $mision){
            $query = $this->PDO->prepare("INSERT INTO mision(id, mision) values(:id,:mision) ");
            $query->bindParam(":id",$id);
            $query->bindParam(":mision",$mision);
            return ($query->execute()) ? true : false;
        }
        public function show($id){
            $query = $this->PDO->prepare("SELECT * FROM mision WHERE id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
        }
        public function update($id,$mision){
            $query = $this->PDO->prepare("UPDATE mision SET mision = :mision WHERE id = :id");
            $query->bindParam(":mision",$mision);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $id : false ;
        }
        public function comprobar($id){
            $query = $this->PDO->prepare("Select * from mision where id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? true : false ;
        }
    }
?>