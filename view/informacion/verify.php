<?php
    
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    echo "<script>console.log('User ID: " . $_SESSION['user_id'] . "');</script>";

    $obj->comprobar($_SESSION['user_id']);
?>