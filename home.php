<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Estratégico - PETI</title>
    <link rel="stylesheet" href="login/estilos.css">
</head>
<body>
    <h1>Bienvenido al Plan Estratégico de Tecnologías de Información (PETI)</h1>
    <div class="grid-container">
        <button>Misión</button>
        <button>Visión</button>
        <button>Valores</button>
        <button>Objetivos</button>
        <button>Análisis Interno y Externo</button>
        <button>Cadena de Valor</button>
        <button>Matriz Participación</button>
        <button>Las 5 Fuerzas de Porter</button>
        <button>PEST</button>
        <button>Identificación Estrategia</button>
        <button>Matriz CAME</button>
    </div>
    <a href="login/logout.php">Cerrar sesión</a>
</body>
</html>
