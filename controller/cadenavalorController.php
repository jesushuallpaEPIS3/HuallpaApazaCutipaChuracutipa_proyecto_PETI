<?php
    class cadenavalorController{
        private $model;
        public function __construct(){
            require_once("../../model/cadenavalorModel.php");
            require_once("../../model/fodaModel.php");
            $this->model = new cadenavalorModel();
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
        public function guardarfoda($id,$f1,$f2,$d1,$d2){
            $this->modelfoda->delete1($id);
            $this->modelfoda->insertar1($id,$f1,$f2,$d1,$d2);
        }
        public function verForm($id){
            return ($this->model->verForm($id)!=false) ? $this->model->verForm($id) : header("Location:create.php");
        }
        public function verfoda1($id){
            return ($this->modelfoda->show1($id)!=false) ? $this->modelfoda->show1($id) : header("Location:create.php");
        }

        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>