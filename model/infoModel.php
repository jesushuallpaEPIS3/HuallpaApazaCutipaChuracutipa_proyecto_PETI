<?php
    class infoModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $nombre, $descripcion){
            $query = $this->PDO->prepare("INSERT INTO informacion(id, nombre, descripcion) values(:id,:nombre,:descripcion)");
            $query->bindParam(":nombre",$nombre);
            $query->bindParam(":descripcion",$descripcion);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? true : false;
        }
        public function show($id){
            $query = $this->PDO->prepare("Select * from informacion where id = :id limit 1");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
        }
        // public function index(){

        // }
        public function update($id,$nombre,$descripcion){
            $query = $this->PDO->prepare("Update informacion SET nombre = :nombre, descripcion = :descripcion where id = :id");
            $query->bindParam(":nombre",$nombre);
            $query->bindParam(":descripcion",$descripcion);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $id : false ;
        }
        public function comprobar($id){
            $query = $this->PDO->prepare("Select * from informacion where id = :id");
            $query->bindParam(":id",$id);
            $query->execute();
            return $query->rowCount() > 0;
        }
    }
?>