<?php
    require_once("../head/header.php");
    require_once("../../controller/valoresController.php");

    $obj = new valoresController();

    $date = $obj->show($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores de tu Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Valores de la Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>Valores Ingresados:</h2>
                <?php if (!empty($date)): ?>
                    <ul>
                        <?php foreach ($date as $valor): ?>
                            <li><?= htmlspecialchars($valor['valores']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No se han ingresado valores aún.</p>
                <?php endif; ?>
                <a href="edit.php"><button>Modificar</button></a>
            </section>
        </main>
    </div>

<?php
    require_once("../head/footer.php");
?>
</body>
</html>
