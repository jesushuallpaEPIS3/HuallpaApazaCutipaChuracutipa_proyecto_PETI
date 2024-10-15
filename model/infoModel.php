<?php
    class infoModel{
        private $PDO;
        public function __construct(){
            //require_once(db)
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $descripcion){
            $query = $this->PDO->prepare("INSERT INTO empresa(nombre, descripcion) values(:nombre,:descripcion)");
            $query->bindParam(":nombre",$nombre);
            $query->bindParam(":descripcion",$descripcion);
            return ($query->execute()) ? $this->PDO->lastInsertId() : false;
        }
    }
?>