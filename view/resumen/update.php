<?php
    require_once("../../controller/ResumenController.php");
    $obj = new ResumenController();
    $obj->update($_POST['id'],$_POST['identificacion'],$_POST['conclusion']);
?>