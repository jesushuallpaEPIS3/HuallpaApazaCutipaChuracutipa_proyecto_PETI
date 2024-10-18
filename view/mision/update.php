<?php
    require_once("../../controller/misionController.php");
    $obj = new misionController();
    $obj->update($_POST['id'],$_POST['mision']);
?>