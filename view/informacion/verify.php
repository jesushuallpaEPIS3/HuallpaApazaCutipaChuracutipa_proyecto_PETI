<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    $obj->comprobar($_SESSION['user_id']);
?>