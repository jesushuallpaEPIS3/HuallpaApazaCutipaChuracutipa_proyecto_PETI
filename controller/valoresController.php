<?php
    class valoresController{
        private $model;
        public function __construct(){
            require_once("../../model/valoresModel.php");
            $this->model = new valoresModel();
        }
        public function guardar($id, $valores){
            if(!$this->model->delete($id)){
                header("Location:edit.php");
            }
            foreach($valores as $valor){
                if(!empty($valor)) {
                    $this->model->insertar($id, $valor);
                }
            }
            header("Location:show.php");
        }
        public function show($id){
            return ($this->model->show($id)!=false) ? $this->model->show($id) : header("Location:create.php");
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
    }
?>
