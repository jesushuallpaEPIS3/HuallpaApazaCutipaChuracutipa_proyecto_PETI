<?php
    class cadenavalorController{
        private $model;
        public function __construct(){
            require_once("../../model/cadenavalorModel.php");
            $this->model = new cadenavalorModel();
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
    }
?>