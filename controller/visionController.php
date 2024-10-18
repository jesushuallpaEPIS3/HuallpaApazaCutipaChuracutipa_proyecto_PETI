<?php
    class visionController{
        private $model;
        public function __construct(){
            require_once("../../model/visionModel.php");
            $this->model = new visionModel();
        }
        public function guardar($id, $vision){
            return ($this->model->insertar($id, $vision)) ? header("Location:show.php") : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:create.php") ;
        }
        // public function index(){

        // }
        public function update($id,$vision){
            return ($this->model->update($id,$vision)!=false) ? header("Location:show.php?id=$id") : header("Location:index.php") ;
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>