<?php
    class AnalisisInternoExternoModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function comprobar($id){
            $query = $this->PDO->prepare("Select * from vision where id = :id");
            $query->bindParam(":id",$id);
            $query->execute();
            return $query->rowCount() > 0;
        }
    }
?>