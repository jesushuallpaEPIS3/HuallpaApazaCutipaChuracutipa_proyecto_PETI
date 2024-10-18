<?php
    class objetivosModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id, $id_objetivo, $descripcionObj, $descripcionEspObj) {
            try {
                $this->PDO->beginTransaction();
        
                $query = $this->PDO->prepare("SELECT COUNT(*) FROM objetivos WHERE id_objetivo = :id_objetivo AND id = :id");
                $query->bindParam(":id_objetivo", $id_objetivo);
                $query->bindParam(":id", $id);
                $query->execute();
                $count = $query->fetchColumn();

                if ($count == 0) {
                    $query1 = $this->PDO->prepare("INSERT INTO objetivos (id, id_objetivo, descripcionObj) VALUES (:id, :id_objetivo, :descripcionObj)");
                    $query1->bindParam(":id", $id);
                    $query1->bindParam(":id_objetivo", $id_objetivo);
                    $query1->bindParam(":descripcionObj", $descripcionObj);
                    $query1->execute();
                }

                $query2 = $this->PDO->prepare("INSERT INTO obj_especificos (id_objetivo, descripcionEspObj) VALUES (:id_objetivo, :descripcionEspObj)");
                $query2->bindParam(":id_objetivo", $id_objetivo);
                $query2->bindParam(":descripcionEspObj", $descripcionEspObj);
                $query2->execute();
        
                $this->PDO->commit();
                return true;
            } catch (Exception $e) {
                $this->PDO->rollBack();
                throw $e;
            }
        }
        public function show($id){
            $query = $this->PDO->prepare("SELECT m.mision, o.descripcionObj, e.descripcionEspObj FROM objetivos o  JOIN obj_especificos e JOIN mision m ON o.id_objetivo = e.id_objetivo AND m.id = o.id AND o.id = :id");
            $query->bindParam(":id", $id);
            return ($query->execute()) ? $query->fetchAll() : false;
        }
        public function comprobar($id){
            try {
                $query = $this->PDO->prepare("SELECT * FROM objetivos WHERE id = :id");
                $query->bindParam(":id", $id);
                $query->execute();
                return $query->rowCount() > 0;
            } catch (PDOException $e) {
                error_log($e->getMessage());
                return false;
            }
        }
    }
?>
