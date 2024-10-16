<?php require_once("../sesion/seguridad.php");?>
<?php
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    
    echo "<script>console.logUser ID: " . $_SESSION['user_id'] . "');</script>";
    $obj->guardar($_SESSION['user_id'], $_POST['nombre'], $_POST['descripcion']);
?>