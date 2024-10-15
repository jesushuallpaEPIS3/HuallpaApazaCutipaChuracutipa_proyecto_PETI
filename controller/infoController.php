<?php
    class infoController{
        private $model;
        public function __construct(){
            require_once("../../model/infoModel.php");
            $this->model = new infoModel();
        }
        public function guardar($nombre, $descripcion){
            $id = $this->model->insertar($nombre, $descripcion);
            return ($id!=false) ? header("Location:index.php?id=".$id) : header("Location:create.php");
        }
    }
?>