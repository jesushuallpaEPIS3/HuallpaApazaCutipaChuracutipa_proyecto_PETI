<?php
    class matrizpaController{
        private $model;
        public function __construct(){
            require_once("../../model/matrizpaModel.php");
            require_once("../../model/fodaModel.php");
            $this->model = new matrizpaModel();
            $this->modelfoda = new fodaModel();
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
        public function guardarPV($id, $productos, $ventas){
            $i = 0;
            foreach($ventas as $venta){
                $this->model->insertPV($id,$productos[$i], $venta);
                $i++;
            }
        }
        public function verDatosTCM($id){
            return  $this->model->showTCM($id);
        }
        public function guardarTCM($id,$nproducto,$valores){
            foreach($valores as $valor){
                $this->model->insertTCM($id,$nproducto, $valor);
            }
        }
        public function verDatosEDGS($id){
            return $this->model->showEDGS($id);
        }
        public function guardarEDGS($id,$producto,$valores){
            foreach($valores as $valor){
                $this->model->insertEDGS($id,$producto,$valor);
            }
        }
        public function verDatosNVCCP($id){
            return $this->model->showNVCCP($id);
        }
        public function guardarNVCCP($id,$producto,$valores){
            foreach($valores as $valor){
                $this->model->insertNVCCP($id,$producto,$valor);
            }
        }
        public function comprobar($id){
            return ($this->model->comprobar($id)) ? header("Location: show.php") : header("Location: create.php") ;
        }
        public function limpiarDatos($id){
            $this->model->deleteAll($id);
        }
    }
?>