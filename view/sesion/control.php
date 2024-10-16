<?php
    require_once("../../controller/loginController.php");
    $obj = new loginController();
    $obj->login($_POST['username'], $_POST['password']);
?>