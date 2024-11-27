<?php
    class pestController{
        private $model;
        public function __construct(){
            require_once("../../model/pestModel.php");
            require_once("../../model/fodaModel2.php");
            $this->model = new pestModel();
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
        public function guardarfoda($id,$o3,$o4,$a3,$a4){
            if($this->modelfoda->show1($id)){
                $this->modelfoda->update2($id,$o3,$o4,$a3,$a4);
            }else $this->modelfoda->insertar2($id,$o3,$o4,$a3,$a4);
        }
        public function verForm($id){
            return ($this->model->verForm($id)!=false) ? $this->model->verForm($id) : header("Location:create.php");
        }
        public function verfoda2($id){
            return ($this->modelfoda->show1($id)!=false) ? $this->modelfoda->show1($id) : "";
        }

        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>