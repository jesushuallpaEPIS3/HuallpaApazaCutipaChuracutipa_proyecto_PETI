<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/valoresController.php");
    $obj = new valoresController();
    $obj->guardar($_SESSION['user_id'], $_POST['valores']);
?>
