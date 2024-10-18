<?php
    class misionController{
        private $model;
        public function __construct(){
            require_once("../../model/misionModel.php");
            $this->model = new misionModel();
        }
        public function guardar($id, $mision){
            return ($this->model->insertar($id, $mision)) ? header("Location:show.php") : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:create.php") ;
        }
        // public function index(){

        // }
        public function update($id,$mision){
            return ($this->model->update($id,$mision)!=false) ? header("Location:show.php?id=$id") : header("Location:index.php") ;
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>