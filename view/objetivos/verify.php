<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/objetivosController.php");
    $obj = new objetivosController();
    $obj->comprobar($_SESSION['user_id']);
?>