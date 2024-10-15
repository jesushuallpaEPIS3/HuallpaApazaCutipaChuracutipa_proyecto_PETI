<?php
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    $obj->update($_POST['id'],$_POST['nombre'],$_POST['descripcion']);
?>