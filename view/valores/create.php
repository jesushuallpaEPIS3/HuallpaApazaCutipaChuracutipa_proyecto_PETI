<?php
    require_once("../head/header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión de tu Empresa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Visión de tu Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>¿Qué es la Visión?</h2>
                <p>La visión de una empresa define lo que la empresa/organización quiere lograr
                en el futuro. Es lo que la organización aspira llegar a ser en torno a 2 -3 años.</p>
                <ul>
                    <li>Debe ser retadora, positiva, compartida y coherente con la misión.</li>
                    <li>Marca el fin último que la estrategia debe seguir.</li>
                    <li>Proyecta la imagen de destino que se pretende alcanzar.</li>
                </ul>
                <p>La visión debe ser conocida y compartida por todos los miembros de la empresa
                y también por aquellos que se relacionan con ella.
            </p>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Empresa de servicios:</strong> Ser el grupo empresarial de referencia en nuestras áreas de actividad</p>
                </div>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Empresa productora de café:</strong> Queremos ser en el mundo el punto de referencia de la cultura y de la
        excelencia del café. Una empresa innovadora que propone los mejores
        productos y lugares de consumo y que, gracias a ello, crece y se convierte en
        líder de la alta gama.</p>
                </div>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Agencia de certificación:</strong> Ser líderes en nuestro sector y un actor principal en todos los segmentos de
                    mercado en los que estamos presentes, en los mercados clave.</p>
                </div>
            </section>
            <section class="form-container">
            <form method="POST" action="store.php">
                <label for="valor">Ingresa los valores de tu empresa:</label>
                <div id="valores-container">
                    <input type="text" name="valores[]" required placeholder="Valor 1">
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