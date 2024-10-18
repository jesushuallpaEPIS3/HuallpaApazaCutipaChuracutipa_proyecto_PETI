<?php
    require_once("../head/header.php");
    require_once("../../controller/infoController.php");
    $obj = new infoController();
    $date = $obj->show($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión de tu Empresa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
    <div class="wrapper">
        <header>
            <h1>Información de la Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>Nombre: <?= $date['nombre']?></h2>
                <p><?= $date['descripcion'] ?></p>
                <a href="edit.php?id=<?= $date['id']?>" class="btn btn-secondary">Modificar</a>    
            </section>
        </main>
    </div>

<?php
    require_once("../head/footer.php");
?>