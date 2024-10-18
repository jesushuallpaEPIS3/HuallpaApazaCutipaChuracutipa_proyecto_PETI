<?php require_once("../sesion/seguridad.php");?>
<?php
    
    require_once("../../controller/CadenaDeValorController.php");
    $obj = new CadenaDeValorController();
    $obj->comprobar($_SESSION['user_id']);
?>