<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: ../home.php'); // Redirigir a la página principal fuera de la carpeta login
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    require '../conexion.php'; // Cambiar la ruta al archivo de conexión
    $conexion = Conectar::conexion();

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../home.php'); // Redirigir tras iniciar sesión
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PETI</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Ruta correcta para los estilos -->
</head>
<body>
    <div class="login-box">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="POST"> <!-- Ruta correcta -->
            <div class="user-box">
                <input type="text" name="usuario" required="">
                <label>Usuario</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Contraseña</label>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
