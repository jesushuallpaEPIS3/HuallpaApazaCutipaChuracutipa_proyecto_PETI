<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/objetivosController.php");
    $obj = new objetivosController();
    $obj->guardar($_SESSION['user_id'], 1,  $_POST['objetivo_estrategico_1'],  $_POST['objetivo_especifico_1_1']);
    $obj->guardar($_SESSION['user_id'], 1,  $_POST['objetivo_estrategico_1'],  $_POST['objetivo_especifico_1_2']);
    $obj->guardar($_SESSION['user_id'], 2,  $_POST['objetivo_estrategico_2'],  $_POST['objetivo_especifico_2_1']);
    $obj->guardar($_SESSION['user_id'], 2,  $_POST['objetivo_estrategico_2'],  $_POST['objetivo_especifico_2_2']);
    $obj->guardar($_SESSION['user_id'], 3,  $_POST['objetivo_estrategico_3'],  $_POST['objetivo_especifico_3_1']);
    $obj->guardar($_SESSION['user_id'], 3,  $_POST['objetivo_estrategico_3'],  $_POST['objetivo_especifico_3_2']);
?>
