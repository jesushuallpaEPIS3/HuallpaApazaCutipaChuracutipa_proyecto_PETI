<?php
    class AnalisisInternoExternoController{
        private $model;
        public function __construct(){
            require_once("../../model/AnalisisInternoExternoModel.php");
            $this->model = new AnalisisInternoExternoModel();
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: analisis.php") ;
        }
    }
?>