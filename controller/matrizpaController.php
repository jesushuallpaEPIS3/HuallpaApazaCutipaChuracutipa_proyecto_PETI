<?php
    class cadenavalorController{
        private $model;
        public function __construct(){
            require_once("../../model/matrizpaModel.php");
            require_once("../../model/fodaModel.php");
            $this->model = new matrizpaModel();
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
        public function guardarfoda($id,$f3,$f4,$d3,$d4){
            if($this->modelfoda->show1($id)){
                $this->modelfoda->update2($id,$f3,$f4,$d3,$d4);
            }else $this->modelfoda->insertar2($id,$f3,$f4,$d3,$d4);
            
        }

        public function verfoda2($id){
            return ($this->modelfoda->show1($id)!=false) ? $this->modelfoda->show1($id) : "";
        }

        public function verDatosPV($id){
            return $this->model->showPV($id);
        }
        public function verDatosTCM($id){
            return  $this->model->showTCM($id);

        }
        public function verDatosEDGS($id){
            return $this->model->showEDGS($id);
        }

        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>