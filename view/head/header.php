<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto PETI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <?php require_once("../sesion/seguridad.php");?>
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/peti/">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menú
              </a>
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#">Información</a></li>
                <li><a class="dropdown-item" href="#">Misión</a></li>
                <li><a class="dropdown-item" href="#">Visión</a></li>
                <li><a class="dropdown-item" href="#">Valores</a></li>
                <li><a class="dropdown-item" href="#">Objetivos</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <a href="../sesion/salir.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
  </nav>
</div>
<div class="container-fluid">
