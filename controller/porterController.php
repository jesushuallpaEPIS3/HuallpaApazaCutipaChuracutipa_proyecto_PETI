<?php
    class porterController{
        private $model;
        public function __construct(){
            require_once("../../model/porterModel.php");
            require_once("../../model/fodaModel2.php");
            $this->model = new porterModel();
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
        public function guardarfoda($id,$o1,$o2,$a1,$a2){
            if($this->modelfoda->show1($id)){
                $this->modelfoda->update1($id,$o1,$o2,$a1,$a2);
            }else $this->modelfoda->insertar1($id,$o1,$o2,$a1,$a2);
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