<?php
    require_once("../../controller/AnalisisInternoExternoController.php");
    $obj = new AnalisisInternoExternoController();
    $obj->update($_POST['id'],$_POST['vision']);
?>