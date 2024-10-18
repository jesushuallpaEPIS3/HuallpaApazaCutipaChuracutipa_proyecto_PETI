<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/valoresController.php");
    $obj = new valoresController();
    $obj->comprobar($_SESSION['user_id']);
?>