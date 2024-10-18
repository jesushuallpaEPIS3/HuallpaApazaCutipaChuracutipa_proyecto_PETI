<?php
    require_once("../head/header.php");
    require_once("../../controller/AnalisisInternoExternoController.php");
    $obj = new AnalisisInternoExternoController();
    //$date = $obj->show($_GET['id'])
    $date = $obj->show($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis Interno y Externo</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Análisis Interno y Externo</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>5. ANÁLISIS INTERNO Y EXTERNO</h2>
                <p>
                    Fijados los objetivos estratégicos se debe analizar las distintas estrategias para lograrlos. De esta forma, las estrategias son los caminos, vías, o enfoques para alcanzar los objetivos. Responden a la pregunta <em>¿cómo?</em>.
                </p>
                <p>
                    Para determinar la estrategia, podríamos basarnos en el conjunto de estrategias genéricas y específicas que diferentes profesionales proponen al respecto. Esta guía, lejos de rozar la teoría, propone llevar a cabo un análisis interno y externo de su empresa para obtener una matriz cruzada e identificar la estrategia más conveniente a llevar a cabo.
                </p>
                <p>
                    Este análisis le permitirá detectar por un lado los factores de éxito (fortalezas y oportunidades), y por otro lado, las debilidades y amenazas que una empresa debe gestionar.
                </p>
                <!-- Image insertion -->
                <div class="image-container">
                    <img src="../../images/5_img1.png" alt="Análisis Interno y Externo Diagram" width="1100" height="500">
                </div>

                <!-- Text below the image -->
                <section class="analysis-details">
                <h3>Oportunidades:</h3>
                <p>Aquellos aspectos que pueden presentar una posibilidad para mejorar la rentabilidad de la empresa, aumentar la cifra de negocio y fortalecer la ventaja competitiva.</p>
                <p><strong>Ejemplos:</strong> Fuerte crecimiento, desarrollo de la externalización, nuevas tecnologías, seguridad de la distribución, atender a grupos adicionales de clientes, crecimiento rápido del mercado, etc.</p>

                <h3>Amenazas:</h3>
                <p>Son fuerzas y presiones del mercado-entorno que pueden impedir y dificultar el crecimiento de la empresa, la ejecución de la estrategia, reducir su eficacia o incrementar los riesgos en relación con el entorno y sector de actividad.</p>
                <p><strong>Ejemplos:</strong> Competencia en el mercado, aparición de nuevos competidores, reglamentación, monopolio en una materia prima, cambio en las necesidades de los consumidores, creciente poder de negociación de clientes y/o proveedores, etc.</p>

                <h3>Fortalezas:</h3>
                <p>Son capacidades, recursos, posiciones alcanzadas, ventajas competitivas que posee la empresa y que le ayudarán a aprovechar las oportunidades del mercado.</p>
                <p><strong>Ejemplos:</strong> Buena implantación en el territorio, notoriedad de la marca, capacidad de innovación, recursos financieros adecuados, ventajas en costes, líder en el mercado, buena imagen ante los consumidores, etc.</p>

                <h3>Debilidades:</h3>
                <p>Son todos aquellos aspectos que limitan o reducen la capacidad de desarrollo de la empresa. Constituyen dificultades para la organización y deben, por tanto, ser controladas y superadas.</p>
                <p><strong>Ejemplos:</strong> Precios elevados, productos en el final de su ciclo de vida, deficiente control de los riesgos, recursos humanos poco cualificados, débil imagen en el mercado, red de distribución débil, no hay dirección estratégica clara, etc.</p>

                <p>
                    Para elaborar el análisis FODA de su empresa, le proponemos que utilice distintos instrumentos para el análisis tanto interno como externo.
                </p>
                <!-- Image insertion -->
                <div class="image-container">
                    <img src="../../images/5_img2.png" alt="Análisis Interno y Externo Diagram" width="1100" height="500">
                </div>
            </section>
        </main>
    </div>

    <?php
        require_once("../head/footer.php");
    ?>
</body>
</html>