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
        public function showPV($id){
            $query = $this->PDO->prepare("SELECT * FROM  prevision_ventas WHERE id=:id");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        public function insertPV($id, $producto, $venta){
            $query = $this->PDO->prepare("INSERT INTO prevision_ventas(id,producto,venta) VALUES(:id,:producto,:venta)");
            $query->bindParam(":id",$id);
            $query->bindParam(":producto",$producto);
            $query->bindParam(":venta",$venta);
            $query->execute();
        }
        public function showTCM($id){
            $query = $this->PDO->prepare("SELECT * FROM tcm WHERE id=:id ORDER BY producto ASC");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        public function insertTCM($id,$producto,$valor){
            $query = $this->PDO->prepare("INSERT INTO tcm(id,producto,valor) VALUES(:id, :producto, :valor)");
            $query->bindParam(":id",$id);
            $query->bindParam(":producto",$producto);
            $query->bindParam(":valor",$valor);
            return $query->execute();
        }
        public function showEDGS($id){
            $query = $this->PDO->prepare("SELECT * FROM evo_demanda_global WHERE id=:id");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        public function insertEDGS($id,$producto,$valor){
            $query = $this->PDO->prepare("INSERT INTO evo_demanda_global(id,producto,valor) VALUES(:id,:producto,:valor)");
            $query->bindParam(":id",$id);
            $query->bindParam(":producto",$producto);
            $query->bindParam(":valor",$valor);
            return $query->execute();
        }
        public function showNVCCP($id){
            $query = $this->PDO->prepare("SELECT * FROM niv_venta_competidor WHERE  id=:id");
            $query->bindParam(":id",$id);
            $query->execute();
            return ($query->rowCount() > 0) ? $query->fetchAll() : false;
        }
        public function insertNVCCP($id,$producto,$valor){
            $query = $this->PDO->prepare("INSERT INTO niv_venta_competidor(id,producto,valor) VALUES(:id,:producto,:valor)");
            $query->bindParam(":id",$id);
            $query->bindParam(":producto",$producto);
            $query->bindParam(":valor",$valor);
            return $query->execute();
        }
        public function deleteAll($id){
            $query = $this->PDO->prepare("DELETE FROM prevision_ventas WHERE id=:id");
            $query1 = $this->PDO->prepare("DELETE FROM tcm WHERE id=:id");
            $query2 = $this->PDO->prepare("DELETE FROM evo_demanda_global WHERE id=:id");
            $query3 = $this->PDO->prepare("DELETE FROM niv_venta_competidor WHERE id=:id");
            $query->bindParam(":id",$id);
            $query1->bindParam(":id",$id);
            $query2->bindParam(":id",$id);
            $query3->bindParam(":id",$id);
            $query->execute();
            $query1->execute();
            $query2->execute();
            $query3->execute();
            return;
        }
    }
?>