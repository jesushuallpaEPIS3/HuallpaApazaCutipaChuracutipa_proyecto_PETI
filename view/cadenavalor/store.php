<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/cadenavalorController.php");
    $obj = new cadenavalorController();

    $obj->guardar($_SESSION['user_id'], $_POST['puntos']);
?>