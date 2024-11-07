<?php
    class ResumenModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $identificacion, $conclusion){
            $query = $this->PDO->prepare("INSERT INTO resumen(id, identificacion, conclusion) values(:id,:identificacion,:conclusion)");
            $query->bindParam(":identificacion",$identificacion);
            $query->bindParam(":conclusion",$conclusion);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? true : false;
        }
        public function show($id) {
            $query = $this->PDO->prepare("SELECT * FROM resumen WHERE id = :id LIMIT 1");
            $query->bindParam(":id", $id);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC); // Asegúrate de devolver un array asociativo
        }
        
        
        // public function index(){

        // }
        public function update($id,$identificacion,$conclusion){
            $query = $this->PDO->prepare("Update resumen SET identificacion = :identificacion, conclusion = :conclusion where id = :id");
            $query->bindParam(":identificacion",$identificacion);
            $query->bindParam(":conclusion",$conclusion);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $id : false ;
        }
        public function comprobar($id){
            $query = $this->PDO->prepare("Select * from resumen where id = :id");
            $query->bindParam(":id",$id);
            $query->execute();
            return $query->rowCount() > 0;
        }
    }
?>