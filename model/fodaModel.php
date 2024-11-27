<?php
    class fodaModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar1($id,$f1,$f2,$d1,$d2){
            $query = $this->PDO->prepare("INSERT INTO foda(id,f1,f2,d1,d2) VALUES(:id,:f1,:f2,:d1,:d2)");
            $query->bindParam(":id",$id);
            $query->bindParam(":f1",$f1);
            $query->bindParam(":f2",$f2);
            $query->bindParam(":d1",$d1);
            $query->bindParam(":d2",$d2);
            return $query->execute();
        }
        public function insertar2($id,$f3,$f4,$d3,$d4){
            $query = $this->PDO->prepare("INSERT INTO foda(id,f3,f4,d3,d4) VALUES(:id,:f3,:f4,:d3,:d4)");
            $query->bindParam(":id",$id);
            $query->bindParam(":f3",$f3);
            $query->bindParam(":f4",$f4);
            $query->bindParam(":d3",$d3);
            $query->bindParam(":d4",$d4);
            return $query->execute();
        }
        public function show1($id){
            try {
                $query = $this->PDO->prepare("SELECT * FROM foda WHERE id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
            } catch (PDOException $e) {
                error_log($e->getMessage());
                return false;
            }
            
        }
        public function delete1($id){
            $query = $this->PDO->prepare("DELETE FROM foda WHERE id = :id");
            $query->bindParam(":id",$id);
            return $query->execute();
        }
        public function update1($id,$f1,$f2,$d1,$d2){
            $query = $this->PDO->prepare("UPDATE foda SET f1 = :f1, f2 = :f2,  d1 = :d1, d2 = :d2 WHERE id = :id");
            $query->bindParam(":id",$id);
            $query->bindParam(":f1",$f1);
            $query->bindParam(":f2",$f2);
            $query->bindParam(":d1",$d1);
            $query->bindParam(":d2",$d2);
            return $query->execute();
        }
        public function update2($id,$f3,$f4,$d3,$d4){
            $query = $this->PDO->prepare("UPDATE foda SET f3 = :f3, f4 = :f4,  d3 = :d3, d4 = :d4 WHERE id = :id");
            $query->bindParam(":id",$id);
            $query->bindParam(":f3",$f3);
            $query->bindParam(":f4",$f4);
            $query->bindParam(":d3",$d3);
            $query->bindParam(":d4",$d4);
            return $query->execute();
        }
        public function fodaAll($id){
            $query = $this->PDO->prepare("SELECT * FROM foda INNER JOIN foda2 WHERE foda.id = :id");
            $query->bindParam(":id",$id);   
            return ($query->execute()) ? $query->fetch() : false; 
        }
    }
?>