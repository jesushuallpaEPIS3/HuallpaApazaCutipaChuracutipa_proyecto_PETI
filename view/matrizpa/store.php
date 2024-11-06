<?php require_once("../sesion/seguridad.php"); ?>
<?php
    require_once("../../controller/matrizpaController.php");
    $obj = new matrizpaController();
    $id = $_SESSION['user_id'];
    
    $obj->limpiarDatos($id);

    $obj->guardarPV($id, $_POST['producto'],$_POST['ventas']);

    $obj->guardarTCM($id,1 ,$_POST['producto1']);
    $obj->guardarTCM($id,2 ,$_POST['producto2']);
    $obj->guardarTCM($id,3 ,$_POST['producto3']);
    $obj->guardarTCM($id,4 ,$_POST['producto4']);
    $obj->guardarTCM($id,5 ,$_POST['producto5']);

    $obj->guardarEDGS($id,1,$_POST['anoproducto1']);
    $obj->guardarEDGS($id,2,$_POST['anoproducto2']);
    $obj->guardarEDGS($id,3,$_POST['anoproducto3']);
    $obj->guardarEDGS($id,4,$_POST['anoproducto4']);
    $obj->guardarEDGS($id,5,$_POST['anoproducto5']);

    $obj->guardarNVCCP($id,1,$_POST['cpproducto1']);
    $obj->guardarNVCCP($id,2,$_POST['cpproducto2']);
    $obj->guardarNVCCP($id,3,$_POST['cpproducto3']);
    $obj->guardarNVCCP($id,4,$_POST['cpproducto4']);
    $obj->guardarNVCCP($id,5,$_POST['cpproducto5']);

    $obj->guardarfoda($id, $_POST['f3'],$_POST['f4'],$_POST['d3'],$_POST['d4']);

    header("Location: show.php");
?>