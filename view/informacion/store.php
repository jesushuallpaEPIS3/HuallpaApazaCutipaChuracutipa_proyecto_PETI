<?php
    require_once("../../config/db.php");
    require_once("../../controller/infoController.php");
    $infoObj = new infoController();
    $infoObj->guardar($_POST['nombre'], $_POST['descripcion']);
?>