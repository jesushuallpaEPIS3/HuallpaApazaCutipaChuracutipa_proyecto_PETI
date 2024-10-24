<?php
    class fodaModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar1($id,$f1,$f2,$d1,$d2){
            $query = $this->PDO->prepare("INSERT INTO foda(id,f1,f2,d1,d2) VALUES(:id,:f1,:f2,:d1,:d2)");
            $query->bindParam(":id",$id);
            $query->bindParam(":f1",$f1);
            $query->bindParam(":f2",$f2);
            $query->bindParam(":d1",$d1);
            $query->bindParam(":d2",$d2);
            return $query->execute();
        }
        public function show1($id){
            $query = $this->PDO->prepare("SELECT * FROM foda WHERE id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
        }
        public function delete1($id){
            $query = $this->PDO->prepare("DELETE FROM foda WHERE id = :id");
            $query->bindParam(":id",$id);
            return $query->execute();
        }
    }
?>