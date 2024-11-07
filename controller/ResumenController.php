<?php
    class ResumenController{
        private $model;
        public function __construct(){
            require_once("../../model/ResumenModel.php");
            $this->model = new ResumenModel();
        }

        public function guardar($id, $identificacion, $conclusion){
            return ($this->model->insertar($id, $identificacion, $conclusion)) ? header("Location:show.php") : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:create.php") ;
        }
        // public function index(){

        // }
        public function update($id,$identificacion,$conclusion){
            return ($this->model->update($id,$identificacion,$conclusion)!=false) ? header("Location:show.php?id=$id") : header("Location:index.php") ;
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>