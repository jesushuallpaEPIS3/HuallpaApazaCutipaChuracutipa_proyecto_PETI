<?php
    class infoModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $descripcion){
            $query = $this->PDO->prepare("INSERT INTO empresa(nombre, descripcion) values(:nombre,:descripcion)");
            $query->bindParam(":nombre",$nombre);
            $query->bindParam(":descripcion",$descripcion);
            return ($query->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function show($id){
            $query = $this->PDO->prepare("Select * from empresa where id = :id limit 1");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
        }
        // public function index(){

        // }
        public function update($id,$nombre,$descripcion){
            $query = $this->PDO->prepare("Update empresa SET nombre = :nombre, descripcion = :descripcion where id = :id");
            $query->bindParam(":nombre",$nombre);
            $query->bindParam(":descripcion",$descripcion);
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $id : false ;
        }
    }
?>