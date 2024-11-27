<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/porterController.php");
    $obj = new porterController();
    $obj->comprobar($_SESSION['user_id']);
?>