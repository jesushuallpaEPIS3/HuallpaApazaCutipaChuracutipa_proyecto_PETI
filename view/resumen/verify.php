<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/ResumenController.php");
    $obj = new ResumenController();
    $obj->comprobar($_SESSION['user_id']);
?>