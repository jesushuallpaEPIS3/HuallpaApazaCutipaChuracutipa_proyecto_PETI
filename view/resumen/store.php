<?php require_once("../sesion/seguridad.php");?>
<?php
    require_once("../../controller/ResumenController.php");
    $obj = new ResumenController();
    
    echo "<script>console.logUser ID: " . $_SESSION['user_id'] . "');</script>";
    $obj->guardar($_SESSION['user_id'], $_POST['identificacion'], $_POST['conclucion']);
?>