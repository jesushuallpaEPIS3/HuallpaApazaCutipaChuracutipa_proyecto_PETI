<?php
    class objetivosController{
        private $model;
        public function __construct(){
            require_once("../../model/objetivosModel.php");
            $this->model = new objetivosModel();
        }
        public function guardar($id, $id_objetivo, $descripcionObj, $descripcionEspObj){
            return ($this->model->insertar($id, $id_objetivo, $descripcionObj, $descripcionEspObj)) ? header("Location:show.php") : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:create.php");
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>
