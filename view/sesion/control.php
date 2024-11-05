<?php
session_start();
require_once("../../controller/loginController.php");

$obj = new loginController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password']) && !isset($_POST['new_username'])) {
        $username = trim(htmlspecialchars($_POST['username']));
        $password = trim(htmlspecialchars($_POST['password']));
        $obj->login($username, $password);
    } 
    elseif (isset($_POST['new_username']) && isset($_POST['new_password'])) { 
        $newUsername = trim(htmlspecialchars($_POST['new_username']));
        $newPassword = trim(htmlspecialchars($_POST['new_password']));
        $obj->registro($newUsername, $newPassword);
    } else {
        $_SESSION['error'] = "Faltan datos para completar la operación solicitada.";
        header("Location: login.php");
        exit;
    }
} else {
    $_SESSION['error'] = "Método de solicitud no válido.";
    header("Location: login.php");
    exit;
}
