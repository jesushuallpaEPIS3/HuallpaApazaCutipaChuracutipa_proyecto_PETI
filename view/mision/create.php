<?php
require_once("../head/header.php");

// Cargar la configuración
$config = require('../../config/configAPI.php');
$API_KEY = $config['API_KEY'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión de tu Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
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
                        <button type="button" id="correctButton">Corregir Ortografía IA</button>
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
    
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Comparar Misión Generada</h2>
            <h3>Tú escribiste:</h3>
            <p id="userMissionText"></p>
            <h3>Misión Generada:</h3>
            <p id="generatedMissionText"></p>
            <div class="button-container">
                <button id="insertTextButton">Insertar Texto</button>
                <button id="acceptButton">Aceptar</button>
                <button id="editButton">Editar</button>
            </div>
        </div>
    </div>

    <script type="importmap">
        {
            "imports": {
                "@google/generative-ai": "https://esm.run/@google/generative-ai"
            }
        }
    </script>
    <script type="module">
        import { GoogleGenerativeAI } from "@google/generative-ai";
        const API_KEY = '<?php echo $API_KEY; ?>';
        const genAI = new GoogleGenerativeAI(API_KEY);
        const model = genAI.getGenerativeModel({ model: "gemini-1.5-pro-latest" });

        const generatedMissions = {};

        document.getElementById('generateButton').addEventListener('click', async () => {
            const missionText = document.getElementById('mission').value;
            const tone = document.getElementById('tone').value;
            const key = `${missionText}-${tone}`;

            if (generatedMissions[key]) {
                document.getElementById('userMissionText').innerText = missionText;
                document.getElementById('generatedMissionText').innerText = generatedMissions[key];
                document.getElementById('myModal').style.display = "block";
            } else {
                const prompt = `Por favor, redacta una misión para una empresa con el siguiente texto: "${missionText}". Quiero que el tono sea ${tone}.`;
                try {
                    const result = await model.generateContent(prompt);
                    const response = await result.response;
                    const generatedText = response.text();

                    generatedMissions[key] = generatedText;

                    document.getElementById('userMissionText').innerText = missionText;
                    document.getElementById('generatedMissionText').innerText = generatedText;
                    document.getElementById('myModal').style.display = "block";
                } catch (error) {
                    console.error('Error al generar contenido:', error);
                    document.getElementById('result').innerText = 'Error al generar respuesta.';
                }
            }
        });


        document.getElementById('insertTextButton').onclick = function() {
            const generatedText = document.getElementById('generatedMissionText').innerText;
            document.getElementById('mission').value = generatedText;
            document.getElementById('myModal').style.display = "none";
        }

        document.getElementById('correctButton').addEventListener('click', async () => {
            const missionText = document.getElementById('mission').value;
            const prompt = `Por favor, corrige la ortografía del siguiente texto sin modificar el contenido: "${missionText}". Corrige solo tildes, mayúsculas, comas y puntos.`;
            try {
                const result = await model.generateContent(prompt);
                const response = await result.response;
                const correctedText = response.text();

                document.getElementById('mission').value = correctedText;
                alert('Ortografía corregida exitosamente.');
            } catch (error) {
                console.error('Error al corregir ortografía:', error);
                document.getElementById('result').innerText = 'Error al corregir ortografía.';
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

        document.getElementById('closeModal').onclick = function() {
            document.getElementById('myModal').style.display = "none";
        }

        document.getElementById('acceptButton').onclick = function() {
            document.getElementById('myModal').style.display = "none";
        }

        document.getElementById('editButton').onclick = function() {
            document.getElementById('myModal').style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                document.getElementById('myModal').style.display = "none";
            }
        }
    </script>
</body>
</html>
