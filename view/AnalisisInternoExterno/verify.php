<?php require_once("../sesion/seguridad.php");?>
<?php
    require_once("../../controller/AnalisisInternoExternoController.php");
    $obj = new visionController();
    $obj->comprobar($_SESSION['user_id']);
?>