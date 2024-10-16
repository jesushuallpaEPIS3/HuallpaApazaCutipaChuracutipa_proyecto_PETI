<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['autenticado'] != 'SI') {
    header("Location: ../sesion/login.php");
    exit();
}
?>
