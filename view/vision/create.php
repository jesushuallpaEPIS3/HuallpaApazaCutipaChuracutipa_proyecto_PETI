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
                <p>La visión de una empresa define lo que la empresa/organización quiere lograr en el futuro. Es lo que la organización aspira a ser en los próximos 2-3 años.</p>
                <ul>
                    <li>Debe ser retadora, positiva, compartida y coherente con la misión.</li>
                    <li>Marca el fin último que la estrategia debe seguir.</li>
                    <li>Proyecta la imagen de destino que se pretende alcanzar.</li>
                </ul>
                <p>La visión debe ser conocida y compartida por todos los miembros de la empresa y también por aquellos que se relacionan con ella.</p>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Empresa de servicios:</strong> Ser el grupo empresarial de referencia en nuestras áreas de actividad.</p>
                </div>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Empresa productora de café:</strong> Queremos ser el punto de referencia de la cultura y de la excelencia del café en el mundo.</p>
                </div>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Agencia de certificación:</strong> Ser líderes en nuestro sector y un actor principal en todos los segmentos de mercado en los que estamos presentes.</p>
                </div>
            </section>
            <section class="form-container">
                <form id="visionForm" method="POST" action="store.php">
                    <label for="vision">Ingresa la Visión de tu empresa:</label>
                    <textarea id="vision" name="vision" required></textarea>
                    
                    <label for="tone">Selecciona el tono de la visión:</label>
                    <select id="tone" name="tone">
                        <option value="formal">Formal</option>
                        <option value="jovial">Jovial</option>
                        <option value="extenso">Extenso</option>
                        <option value="corto">Corto</option>
                    </select>
                    
                    <div class="button-container">
                        <button type="button" id="generateVisionButton" class="ai-button">
                            <div class="button-background"></div>
                            <div class="button-shimmer"></div>
                            <svg class="sparkle-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3l1.912 5.813a2 2 0 001.272 1.272L21 12l-5.813 1.912a2 2 0 00-1.272 1.272L12 21l-1.912-5.813a2 2 0 00-1.272-1.272L3 12l5.813-1.912a2 2 0 001.272-1.272L12 3z"/>
                            </svg>
                            <span class="button-text">Consultar con IA</span>
                            <span class="generating-text">Generando<span class="ellipsis">...</span></span>
                            <div class="spinner"></div>
                        </button>
                        <button type="button" id="correctButton" class="ai-button">
                            <div class="button-background"></div>
                            <div class="button-shimmer"></div>
                            <svg class="sparkle-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3l1.912 5.813a2 2 0 001.272 1.272L21 12l-5.813 1.912a2 2 0 00-1.272 1.272L12 21l-1.912-5.813a2 2 0 00-1.272-1.272L3 12l5.813-1.912a2 2 0 001.272-1.272L12 3z"/>
                            </svg>
                            <span class="button-text">Corregir Ortografía IA</span>
                            <span class="generating-text">Corrigiendo<span class="ellipsis">...</span></span>
                            <div class="spinner"></div>
                        </button>
                        <input type="submit" value="Guardar Visión" id="saveButton">
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
            <div class="modal-header">
                <h2>Comparar Visión Generada</h2>
                <span class="close" id="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <h3>Tú escribiste:</h3>
                <p id="userVisionText"></p>
                <h3>Visión Generada:</h3>
                <p id="generatedVisionText"></p>
            </div>
            <div class="modal-footer">
                <div class="button-container">
                    <button id="insertTextButton" class="btn btn-primary">Insertar Texto</button>
                    <button id="cancelButton" class="btn btn-secondary">Cancelar</button>
                </div>
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

        const generatedVisions = {};

        document.getElementById('generateVisionButton').addEventListener('click', async () => {
            const visionText = document.getElementById('vision').value;
            const tone = document.getElementById('tone').value;
            const key = `${visionText}-${tone}`;

            if (generatedVisions[key]) {
                document.getElementById('userVisionText').innerText = visionText;
                document.getElementById('generatedVisionText').innerText = generatedVisions[key];
                document.getElementById('myModal').style.display = "block";
            } else {
                const prompt = `Por favor, redacta una visión para una empresa con el siguiente texto: "${visionText}". Quiero que el tono sea ${tone}.`;
                try {
                    const result = await model.generateContent(prompt);
                    const response = await result.response;
                    const generatedText = response.text();

                    generatedVisions[key] = generatedText;

                    document.getElementById('userVisionText').innerText = visionText;
                    document.getElementById('generatedVisionText').innerText = generatedText;
                    document.getElementById('myModal').style.display = "block";
                } catch (error) {
                    console.error('Error al generar contenido:', error);
                    document.getElementById('result').innerText = 'Error al generar respuesta.';
                }
            }
        });

        document.getElementById('insertTextButton').onclick = function() {
            const generatedText = document.getElementById('generatedVisionText').innerText;
            document.getElementById('vision').value = generatedText;
            document.getElementById('myModal').style.display = "none";
        }

        document.getElementById('correctButton').addEventListener('click', async () => {
            const visionText = document.getElementById('vision').value;
            const prompt = `Por favor, corrige la ortografía del siguiente texto sin modificar el contenido: "${visionText}". Corrige solo tildes, mayúsculas, comas y puntos.`;
            try {
                const result = await model.generateContent(prompt);
                const response = await result.response;
                const correctedText = response.text();

                document.getElementById('vision').value = correctedText;
                alert('Ortografía corregida exitosamente.');
            } catch (error) {
                console.error('Error al corregir ortografía:', error);
                document.getElementById('result').innerText = 'Error al corregir ortografía.';
            }
        });

        document.getElementById('saveButton').addEventListener('click', async (event) => {
            event.preventDefault();
            const visionText = document.getElementById('vision').value;
            const tone = document.getElementById('tone').value;
            if (confirm('¿Estás seguro de que deseas guardar esta visión?')) {
                document.getElementById('visionForm').submit();
            } else {
                alert('Si quieres mejorar la redacción, usa el botón "Consultar con IA".');
            }
        });

        document.getElementById('closeModal').onclick = function() {
            document.getElementById('myModal').style.display = "none";
        }

        document.getElementById('cancelButton').onclick = function() {
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
