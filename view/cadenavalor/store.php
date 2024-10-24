<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/cadenavalorController.php");
    $obj = new cadenavalorController();

    $obj->guardar($_SESSION['user_id'], $_POST['puntos']);
    $obj->guardarfoda($_SESSION['user_id'], $_POST['f1'],$_POST['f2'],$_POST['d1'],$_POST['d2'])
?>