<?php
    require_once("view/head/header.php");
?>
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
    
<div class="container">
        <button class="button-large" aria-label="Informacion de la Empresa" onclick="location.href='view/informacion/create.php'">INFORMACION DE LA EMPRESA</button>
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

<?php
    require_once("view/head/footer.php");
?>