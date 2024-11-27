<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/matrizcaController.php");
    $obj = new matrizcaController();

    $obj->guardar($_SESSION['user_id'], $_POST['came']);
?>