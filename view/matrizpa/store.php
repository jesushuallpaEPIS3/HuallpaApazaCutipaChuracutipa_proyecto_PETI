<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/matrizpaController.php");
    $obj = new matrizpaController();

    $obj->guardarfoda($_SESSION['user_id'], $_POST['f1'],$_POST['f2'],$_POST['d1'],$_POST['d2']);
    $obj->guardar($_SESSION['user_id'], $_POST['puntos']);
    
?>