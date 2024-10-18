<?php require_once("../sesion/seguridad.php");?>
<?php
    require_once("../../controller/visionController.php");
    $obj = new visionController();
    $obj->guardar($_SESSION['user_id'], $_POST['vision']);
?>