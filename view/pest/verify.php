<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/pestController.php");
    $obj = new pestController();
    $obj->comprobar($_SESSION['user_id']);
?>