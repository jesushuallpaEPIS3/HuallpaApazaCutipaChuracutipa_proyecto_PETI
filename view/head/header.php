<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto PETI</title>
    <?php require_once("../sesion/seguridad.php"); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            width: 280px;
            background-color: #005f5f;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
        }

        .nav-header {
            padding: 1.5rem;
            background-color: #004c4c;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-title:hover {
            color: #e6f3f3;
        }

        .nav-content {
            flex-grow: 1;
            padding: 1rem;
            overflow-y: auto;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 0.375rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: white;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            background-color: #007373;
        }

        .nav-link.active {
            background-color: #e6f3f3;
            color: #005f5f;
        }

        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 2rem;
            background-color: #00e6e6;
            border-radius: 0 4px 4px 0;
        }

        .nav-link i {
            width: 1.5rem;
            text-align: center;
            margin-right: 0.75rem;
            font-size: 1.125rem;
        }

        .nav-link .icon-right {
            margin-left: auto;
            font-size: 0.875rem;
            transition: transform 0.3s ease;
        }

        .nav-link:hover .icon-right {
            transform: translateX(4px);
        }

        .nav-footer {
            padding: 1rem;
            background-color: #004c4c;
            margin-top: auto;
        }

        .logout-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: white;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .logout-link:hover {
            background-color: #003939;
        }

        .logout-link i.fa-sign-out-alt {
            color: #ff6b6b;
        }

        .main-content {
            flex-grow: 1;
            padding: 2rem;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-header">
            <a href="../../" class="nav-title">
                <i class="fas fa-th-large"></i>
                Home
            </a>
        </div>

        <div class="nav-content">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="../informacion/verify.php" class="nav-link">
                    <i class="fas fa-building"></i>
                    Información de la Empresa
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="../mision/verify.php" class="nav-link">
                    <i class="fas fa-bullseye"></i>
                    Misión
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="../vision/verify.php" class="nav-link">
                    <i class="fas fa-eye"></i>
                    Visión
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="../valores/verify.php" class="nav-link">
                    <i class="fas fa-heart"></i>
                    Valores
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="../objetivos/verify.php" class="nav-link">
                    <i class="fas fa-flag"></i>
                    Objetivos
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-bar"></i>
                    Análisis Interno y Externo
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="../cadenavalor/verify.php" class="nav-link">
                    <i class="fas fa-link"></i>
                    Cadena de Valor
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-th"></i>
                    Matriz de Participación
                    <i class="fas fa-chevron-right icon-right"></i>
                </a>
            </li>
        </ul>

        </div>

        <div class="nav-footer">
            <a href="../sesion/salir.php" class="logout-link">
                <i class="fas fa-sign-out-alt"></i>
                <span style="margin-left: 0.75rem;">Cerrar Sesión</span>
                <i class="fas fa-chevron-right icon-right"></i>
            </a>
        </div>
    </nav>
</body>
</html>