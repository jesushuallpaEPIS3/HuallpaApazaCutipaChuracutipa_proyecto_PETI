<?php
    class cadenavalorModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $enunciado, $punto){
            $query = $this->PDO->prepare("INSERT INTO cadenavalor(id, enunciado, punto) values(:id, :enunciado, :punto)");
            $query->bindParam(":id", $id);
            $query->bindParam(":enunciado", $enunciado);
            $query->bindParam(":punto", $punto);
            return $query->execute();
        }
        public function verForm($id){
            $query = $this->PDO->prepare("SELECT * FROM cadenavalor WHERE id = :id");
            $query->bindParam(":id", $id);
            return ($query->execute()) ? $query->fetchAll() : false;    
        }
    }
?>