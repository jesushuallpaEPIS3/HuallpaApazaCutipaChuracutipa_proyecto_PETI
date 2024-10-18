<?php
    require_once("../head/header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión de tu Empresa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>

    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Misión de tu Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>¿Qué es la Misión?</h2>
                <p>La MISIÓN es la razón de ser de la empresa/organización.</p>
                <ul>
                    <li>Debe ser clara, concisa y compartida.</li>
                    <li>Siempre orientada hacia el cliente, no hacia el producto o servicio.</li>
                    <li>Refleja el propósito fundamental de la empresa en el mercado.</li>
                </ul>
                <p>En términos generales describe la actividad y razón de ser de la organización y contribuye como una referencia permanente en el proceso de planificación estratégica. Se expresa a través de una oración que define el propósito fundamental de su existencia, estableciendo qué hace la empresa, por qué y para quién lo hace.</p>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Empresa de servicios:</strong> La gestión de servicios que contribuyen a la calidad de vida de las personas y generan valor para los grupos de interés.</p>
                </div>
            </section>

            <section class="form-container">
                <form id="missionForm" method="POST" action="store.php">
                    <label for="mission">Ingresa la Misión de tu empresa:</label>
                    <textarea id="mission" name="mision" required></textarea>
                    
                    <label for="tone">Selecciona el tono de la misión:</label>
                    <select id="tone" name="tone">
                        <option value="formal">Formal</option>
                        <option value="jovial">Jovial</option>
                        <option value="extenso">Extenso</option>
                        <option value="corto">Corto</option>
                    </select>
                    
                    <div class="button-container">
                        <button type="button" id="generateButton">Consultar con IA</button>
                        <input type="submit" value="Guardar Misión" id="saveButton">
                    </div>
                </form>
            </section>
            <div id="result"></div>
        </main>
    </div>
    
    <?php
    require_once("../head/footer.php");
    ?>

    <script type="importmap">
        {
            "imports": {
                "@google/generative-ai": "https://esm.run/@google/generative-ai"
            }
        }
    </script>
    <script type="module">
        import { GoogleGenerativeAI } from "@google/generative-ai";

        const API_KEY = 'MI_API_KEY :3';
        const genAI = new GoogleGenerativeAI(API_KEY);
        const model = genAI.getGenerativeModel({ model: "gemini-1.5-pro-latest" });

        document.getElementById('generateButton').addEventListener('click', async () => {
            const missionText = document.getElementById('mission').value;
            const tone = document.getElementById('tone').value;
            const prompt = `Por favor, redacta una misión para una empresa con el siguiente texto: "${missionText}". Quiero que el tono sea ${tone}.`;

            try {
                const result = await model.generateContent(prompt);
                const response = await result.response;

                document.getElementById('result').innerText = `Gemini: ${response.text()}`;
            } catch (error) {
                console.error('Error al generar contenido:', error);
                document.getElementById('result').innerText = 'Error al generar respuesta.';
            }
        });

        document.getElementById('saveButton').addEventListener('click', async (event) => {
            event.preventDefault();
            const missionText = document.getElementById('mission').value;
            const tone = document.getElementById('tone').value;

            if (confirm('¿Estás seguro de que deseas guardar esta misión?')) {
                document.getElementById('missionForm').submit();
            } else {
                alert('Si quieres mejorar la redacción, usa el botón "Consultar con IA".');
            }
        });
    </script>
</body>
</html>
