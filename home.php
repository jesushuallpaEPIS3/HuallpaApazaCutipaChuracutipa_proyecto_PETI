<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Estratégico de Tecnologías de Información - PETI</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #008B8B;
            --primary-dark: #005f5f;
            --background-color: #f4f4f4;
            --text-color: #333;
            --card-background: #fff;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, var(--background-color) 0%, #c3cfe2 100%);
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            background-color: var(--card-background);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 30px var(--shadow-color);
        }

        h1, h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5em;
            text-align: center;
            padding: 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px;
            margin: -40px -40px 30px -40px;
        }

        p {
            margin-bottom: 15px;
        }

        .section-title {
            font-weight: bold;
            margin-top: 25px;
            font-size: 1.2em;
            color: var(--primary-color);
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 30px;
        }

        .button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 15px;
            text-align: left;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1em;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .button::before {
            content: attr(data-number);
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 0.8em;
        }

        .button:hover, .button:focus {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px var(--shadow-color);
        }

        .button-large {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 20px;
            margin-top: 30px;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2em;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .button-large:hover, .button-large:focus {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px var(--shadow-color);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
                margin: -20px -20px 20px -20px;
            }

            .button-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PLAN ESTRATÉGICO DE TECNOLOGÍAS DE INFORMACIÓN - PETI</h1>

        <p>El éxito de las organizaciones reside en gran parte en la capacidad que tienen sus directivos en ejecutar una estrategia más que en la calidad de la estrategia en sí. Su planificación y asignación de recursos son fundamentales para el logro de la misma. En este sentido, un Plan Estratégico de TI puede entenderse como el conjunto de acciones que han de llevarse a cabo para alinear los recursos y potencialidades tecnológicos al objeto de conseguir el estado deseado, es decir, adaptación y adquisición de competitividad empresarial, alineados al plan estratégico general.</p>

        <p>Esta aplicación le ayudará a reflexionar sobre la estrategia que debe llevar a cabo. Visualizará dónde quiere estar, dónde está actualmente y qué camino tendrá que trazar para llevarle a otro estado.</p>

        <div class="section-title">Para visualizar dónde quiere estar su empresa tendrá que definir:</div>
        <p>1- Misión<br>2- Visión<br>3- Valores</p>

        <div class="section-title">Para entender dónde está tendrá que llevar a cabo un doble análisis:</div>
        <p>1- Análisis interno<br>2- Análisis externo</p>

        <div class="section-title">Para trazar el camino para ir de un punto a otro tendrá que:</div>
        <p>1- Identificar la estrategia más conveniente<br>2- Determinar acciones para facilitar el logro de la estrategia</p>

        <p>Gracias al Plan Empresarial, determinará la forma de lograr una ventaja competitiva para su proyecto de inversión.</p>

        <h2>INFORMACIÓN DE LA EMPRESA</h2>
        <div class="button-container" role="group" aria-label="Opciones de información de la empresa">
            <button class="button" data-number="1" aria-label="Misión" onclick="location.href='mision/mision.php'">MISIÓN</button>
            <button class="button" data-number="5" aria-label="Análisis interno y externo" onclick="location.href='analisis_interno_externo/analisis_interno_externo.php'">ANÁLISIS INTERNO Y EXTERNO</button>
            <button class="button" data-number="9" aria-label="PEST" onclick="location.href='pest/pest.php'">PEST</button>

            <button class="button" data-number="2" aria-label="Visión" onclick="location.href='vision/vision.php'">VISIÓN</button>
            <button class="button" data-number="6" aria-label="Cadena de valor" onclick="location.href='cadena_de_valor/cadena_de_valor.php'">CADENA DE VALOR</button>
            <button class="button" data-number="10" aria-label="Identificación estrategia" onclick="location.href='identificacion_estrategia/identificacion_estrategia.php'">IDENTIFICACIÓN ESTRATEGIA</button>

            <button class="button" data-number="3" aria-label="Valores" onclick="location.href='valores/valores.php'">VALORES</button>
            <button class="button" data-number="7" aria-label="Matriz participación" onclick="location.href='matriz_participacion/matriz_participacion.php'">MATRIZ PARTICIPACIÓN</button>
            <button class="button" data-number="11" aria-label="Matriz CAME" onclick="location.href='matriz_came/matriz_came.php'">MATRIZ CAME</button>

            <button class="button" data-number="4" aria-label="Objetivos" onclick="location.href='objetivos/objetivos.php'">OBJETIVOS</button>
            <button class="button" data-number="8" aria-label="Las 5 fuerzas de Porter" onclick="location.href='las_5_fuerzas/las_5_fuerzas.php'">LAS 5 FUERZAS DE PORTER</button>
        </div>

        <button class="button-large" aria-label="Resumen del plan ejecutivo" onclick="location.href='resumen/resumen.php'">RESUMEN DEL PLAN EJECUTIVO</button>
    </div>
    <script>
        document.querySelectorAll('.button, .button-large').forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });
        });
    </script>
</body>
</html>
