<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/pestController.php");
    $obj = new pestController();

    $obj->guardar($_SESSION['user_id'], $_POST['puntos']);
    $obj->guardarfoda($_SESSION['user_id'], $_POST['o3'],$_POST['o4'],$_POST['a3'],$_POST['a4'])
?>