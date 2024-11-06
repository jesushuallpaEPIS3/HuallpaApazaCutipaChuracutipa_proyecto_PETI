<?php
    class matrizpaModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function delete($id){
            $query = $this->PDO->prepare("DELETE FROM foda WHERE id = :id");
            $query->bindParam(":id",$id);
            return $query->execute();
        }
        
        public function insertarPV($id, $producto, $cantidad){
            $query = $this->PDO->prepare("INSERT INTO privision_ventas(id,producto,cantidad) VALUES(:id,:producto,:cantidad)");
            $query->bindParam(":id",$id);
            $query->bindParam(":producto",$producto);
            $query->bindParam(":cantidad",$cantidad);
            $query->execute();
        }
        public function showPV($id){
            $query = $this->PDO->prepare("SELECT * FROM  prevision_ventas WHERE id=:id");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        public function showTCM($id){
            $query = $this->PDO->prepare("SELECT * FROM tcm WHERE id=:id ORDER BY producto ASC");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        public function showEDGS($id){
            $query = $this->PDO->prepare("SELECT * FROM evo_demanda_global WHERE id=:id");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        
    }
?>