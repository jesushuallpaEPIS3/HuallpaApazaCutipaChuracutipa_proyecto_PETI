<?php
    require_once("../head/header.php");
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
        <section class="info-box">
            <h2>¿Qué son los Valores?</h2>
            <p>
                Los <strong>valores</strong> de una empresa son el conjunto de principios, reglas y aspectos culturales con los que se rige la organización.
                Son las pautas de comportamiento de la empresa y generalmente son pocos, entre 3 y 6. Son tan fundamentales y tan arraigados que casi nunca cambian.
            </p>
            <ul>
                <li>Debe ser retadora, positiva, compartida y coherente con la misión.</li>
                <li>Marca el fin último que la estrategia debe seguir.</li>
                <li>Proyecta la imagen de destino que se pretende alcanzar.</li>
            </ul>
            <p>
                La visión debe ser conocida y compartida por todos los miembros de la empresa y también por aquellos que se relacionan con ella.
            </p>
            
            <div class="example">
                <h3>Empresa de servicios</h3>
                <ul>
                    <li>La excelencia en la prestación de servicios.</li>
                    <li>La innovación orientada a la mejora continua de procesos productos y servicios.</li>
                    <li>La promoción del diálogo y compromiso con los grupos de interés.</li>
                </ul>
            </div>
            
            <div class="example">
                <h3>Empresa productora de café</h3>
                <p>
                    Nuestro valor es la búsqueda de la perfección o bien la pasión por la excelencia, entendida como amor por lo bello y bien hecho, 
                    y la ética, entendida como construcción de valor en el tiempo a través de la sostenibilidad, la transparencia, y la valorización de las personas.
                </p>
            </div>
            
            <div class="example">
                <h3>Agencia de certificación</h3>
                <ul>
                    <li>Integridad y ética.</li>
                    <li>Consejo y validación imparciales.</li>
                    <li>Respeto por todas las personas.</li>
                    <li>Responsabilidad social y medioambiental.</li>
                </ul>
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