<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Empresarial</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #008B8B;
            --primary-dark: #005f5f;
            --background-color: #f4f4f4;
            --text-color: #333333;
            --card-background: #ffffff;
            --button-background: #e6f3f3; /* Nuevo color de fondo para los botones */
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
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
            border-radius: 20px;
            box-shadow: 0 15px 30px var(--shadow-color);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, var(--primary-color) 0%, transparent 70%);
            opacity: 0.05;
            z-index: -1;
        }

        h1 {
            color: var(--primary-color);
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        h1::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background-color: var(--primary-dark);
            margin: 10px auto;
        }

        .button-large {
            background: linear-gradient(45deg, var(--primary-color), var(--primary-dark));
            color: var(--card-background);
            border: none;
            padding: 20px;
            margin-bottom: 30px;
            text-align: center;
            border-radius: 12px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2em;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .button-large:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px var(--shadow-color);
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .button {
            background-color: var(--button-background);
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 20px 15px;
            text-align: center;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1em;
            font-weight: 600;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 120px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px var(--shadow-color);
        }

        .button::before {
            content: attr(data-number);
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--primary-color);
            color: var(--card-background);
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 0.8em;
            font-weight: bold;
        }

        .button:hover {
            background-color: var(--primary-color);
            color: var(--card-background);
            transform: translateY(-5px);
            box-shadow: 0 8px 15px var(--shadow-color);
        }

        .button::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-dark);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .button:hover::after {
            transform: scaleX(1);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            .button-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información Empresarial</h1>
        
        <button class="button-large" onclick="location.href='view/informacion/verify.php'">Explorar Nuestra Empresa</button>
        
        <div class="button-container" role="group" aria-label="Opciones de información de la empresa">
            <button class="button" data-number="1" onclick="location.href='view/mision/verify.php'">Misión</button>
            <button class="button" data-number="2" onclick="location.href='view/vision/verify.php'">Visión</button>
            <button class="button" data-number="3" onclick="location.href='view/valores/verify.php'">Valores</button>
            <button class="button" data-number="4" onclick="location.href='view/objetivos/verify.php'">Objetivos</button>
            <button class="button" data-number="5" onclick="location.href='analisis_interno_externo/analisis_interno_externo.php'">Análisis Interno y Externo</button>
            <button class="button" data-number="6" onclick="location.href='cadena_de_valor/cadena_de_valor.php'">Cadena de Valor</button>
            <button class="button" data-number="7" onclick="location.href='matriz_participacion/matriz_participacion.php'">Matriz de Participación</button>
            <button class="button" data-number="8" onclick="location.href='las_5_fuerzas/las_5_fuerzas.php'">5 Fuerzas de Porter</button>
            <button class="button" data-number="9" onclick="location.href='pest/pest.php'">Análisis PEST</button>
            <button class="button" data-number="10" onclick="location.href='identificacion_estrategia/identificacion_estrategia.php'">Identificación de Estrategia</button>
            <button class="button" data-number="11" onclick="location.href='matriz_came/matriz_came.php'">Matriz CAME</button>
        </div>
    </div>
</body>
</html>