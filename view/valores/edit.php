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
            <h1>Valores</h1>
        </header>
        <main>
            <section class="form-container">
            <form method="POST" action="store.php">
                <label for="valor">Ingresa los valores de tu empresa:</label><br>
                <?php if (!empty($date)): ?>
                    <ul>
                        <?php foreach ($date as $valor): ?>
                            <input type="text" name="valores[]" value="<?= $valor['valores'] ?>">
                            <br>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No se han ingresado valores aún.</p>
                <?php endif; ?>
                <div id="valores-container">
                    <input type="text" name="valores[]" placeholder="Nuevo valor">
                    <br>
                </div>
                <button type="button" onclick="agregarValor()">Agregar otro valor</button>
                <input type="submit" value="Guardar Valores">
            </form>

            <script>
            function agregarValor() {
                var container = document.getElementById('valores-container');
                var input = document.createElement('input');
                input.type = 'text';
                input.name = 'valores[]';
                input.placeholder = 'Nuevo Valor';
                container.appendChild(input);
            }
            </script>
            </section>
        </main>
    </div>
    <?php
    require_once("../head/footer.php");
?>
</body>
</html>