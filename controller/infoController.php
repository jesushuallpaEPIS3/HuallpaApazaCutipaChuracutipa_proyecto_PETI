<?php
    class infoController{
        private $model;
        public function __construct(){
            require_once("../../model/infoModel.php");
            $this->model = new infoModel();
        }
        public function guardar($id, $nombre, $descripcion){
            return ($this->model->insertar($id, $nombre, $descripcion)) ? header("Location:show.php") : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:create.php") ;
        }
        // public function index(){

        // }
        public function update($id,$nombre,$descripcion){
            return ($this->model->update($id,$nombre,$descripcion)!=false) ? header("Location:show.php?id=$id") : header("Location:index.php") ;
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>