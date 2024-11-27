<?php
    class idestrategiaController{
        private $model;
        public function __construct(){
            require_once("../../model/idestrategiaModel.php");
            require_once("../../model/fodaModel.php");
            $this->model = new idestrategiaModel();
            $this->modelfoda = new fodaModel();
        }
        public function guardar($id, $puntos){
            $this->model->deleteForm($id);
            $i = 1;
            foreach($puntos as $punto){
                $this->model->insertar($id, $i, $punto);
                $i++;
            }
            header("Location:show.php");
        }
        public function verForm($id){
            return ($this->model->verForm($id)!=false) ? $this->model->verForm($id) : header("Location:create.php");
        }
        public function verfodaAll($id){
            return ($this->modelfoda->show1($id)!=false) ? $this->modelfoda->fodaAll($id) : header("Location:create.php");
        }

        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>