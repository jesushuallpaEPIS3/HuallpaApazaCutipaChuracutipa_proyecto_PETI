<?php
    class fodaModel{
        private $PDO;
        public function __construct(){
            require_once("../../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar1($id,$o1,$o2,$a1,$a2){
            $query = $this->PDO->prepare("INSERT INTO foda2(id,o1,o2,a1,a2) VALUES(:id,:o1,:o2,:a1,:a2)");
            $query->bindParam(":id",$id);
            $query->bindParam(":o1",$o1);
            $query->bindParam(":o2",$o2);
            $query->bindParam(":a1",$a1);
            $query->bindParam(":a2",$a2);
            return $query->execute();
        }
        public function insertar2($id,$o3,$o4,$a3,$a4){
            $query = $this->PDO->prepare("INSERT INTO foda2(id,o3,o4,a3,a4) VALUES(:id,:o3,:o4,:a3,:a4)");
            $query->bindParam(":id",$id);
            $query->bindParam(":o3",$o3);
            $query->bindParam(":o4",$o4);
            $query->bindParam(":a3",$a3);
            $query->bindParam(":a4",$a4);
            return $query->execute();
        }
        public function show1($id){
            try {
                $query = $this->PDO->prepare("SELECT * FROM foda2 WHERE id = :id");
            $query->bindParam(":id",$id);
            return ($query->execute()) ? $query->fetch() : false;
            } catch (PDOException $e) {
                error_log($e->getMessage());
                return false;
            }
            
        }
        public function delete1($id){
            $query = $this->PDO->prepare("DELETE FROM foda2 WHERE id = :id");
            $query->bindParam(":id",$id);
            return $query->execute();
        }
        public function update1($id,$o1,$o2,$a1,$a2){
            $query = $this->PDO->prepare("UPDATE foda2 SET o1 = :o1, o2 = :o2,  a1 = :a1, a2 = :a2 WHERE id = :id");
            $query->bindParam(":id",$id);
            $query->bindParam(":o1",$o1);
            $query->bindParam(":o2",$o2);
            $query->bindParam(":a1",$a1);
            $query->bindParam(":a2",$a2);
            return $query->execute();
        }
        public function update2($id,$o3,$o4,$a3,$a4){
            $query = $this->PDO->prepare("UPDATE foda2 SET o3 = :o3, o4 = :o4,  a3 = :a3, a4 = :a4 WHERE id = :id");
            $query->bindParam(":id",$id);
            $query->bindParam(":o3",$o3);
            $query->bindParam(":o4",$o4);
            $query->bindParam(":a3",$a3);
            $query->bindParam(":a4",$a4);
            return $query->execute();
        }
    }
?>