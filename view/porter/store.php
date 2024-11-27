<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/porterController.php");
    $obj = new porterController();

    $obj->guardar($_SESSION['user_id'], $_POST['puntos']);
    $obj->guardarfoda($_SESSION['user_id'], $_POST['o1'],$_POST['o2'],$_POST['a1'],$_POST['a2'])
?>