<?php
    require_once("../../controller/visionController.php");
    $obj = new visionController();
    $obj->update($_POST['id'],$_POST['vision']);
?>