<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/misionController.php");
    $obj = new misionController();
    $obj->comprobar($_SESSION['user_id']);
?>