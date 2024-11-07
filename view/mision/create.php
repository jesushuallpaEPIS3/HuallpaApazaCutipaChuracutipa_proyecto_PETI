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
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
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
                        <button type="button" id="generateButton" class="ai-button">
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
                        <input type="submit" value="Guardar Misión" id="saveButton">
                    </div>
                </form>
            </section>
            <div id="result"></div>
        </main>
    </div>

    <div id="loadingOverlay" class="loading-overlay">
        <div class="loading-content">
            <div class="particles-container">
            </div>
            
            <div class="stars-container">
            <div class="star star-main">★</div>
            <div class="star star-secondary">★</div>
            <div class="star star-tertiary">★</div>
            </div>
            
            <div class="loading-text">
            Generando resultados...
        </div>
    </div>
    
    <?php
    require_once("../head/footer.php");
    ?>
    
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Comparar Misión Generada</h2>
                <span class="close" id="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <h3>Tú escribiste:</h3>
                <p id="userMissionText"></p>
                <h3>Misión Generada:</h3>
                <p id="generatedMissionText"></p>
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

        const generatedMissions = {};


        function createParticles() {
            const container = document.querySelector('.particles-container');
            container.innerHTML = '';
            
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                const size = Math.random() * 2 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                const tx = (Math.random() - 0.5) * 100;
                const ty = (Math.random() - 0.5) * 100;
                particle.style.setProperty('--tx', `${tx}px`);
                particle.style.setProperty('--ty', `${ty}px`);
                
                particle.style.animation = `particle-float ${2 + Math.random() * 2}s infinite`;
                particle.style.animationDelay = `${Math.random() * 2}s`;
                
                container.appendChild(particle);
            }
        }

        document.getElementById('generateButton').addEventListener('click', async () => {
            const button = document.getElementById('generateButton');
            const overlay = document.getElementById('loadingOverlay');
            const missionText = document.getElementById('mission').value;
            const tone = document.getElementById('tone').value;

            if (!missionText.trim()) {
                alert("Por favor, ingresa la misión de tu empresa.");
                return;
            }

            button.classList.add('loading');
            overlay.classList.add('active');
            createParticles();

            const key = `${missionText}-${tone}`;
            
            try {
                if (generatedMissions[key]) {
                    mostrarModal(missionText, generatedMissions[key]);
                } else {
                    const prompt = `Por favor, redacta una misión para una empresa con el siguiente texto: "${missionText}". Quiero que el tono sea ${tone}.`;
                    
                    try {
                        const result = await model.generateContent(prompt);
                        const response = await result.response;
                        const generatedText = response.text();

                        generatedMissions[key] = generatedText;
                        mostrarModal(missionText, generatedText);
                    } catch (error) {
                        console.error('Error al generar contenido:', error);
                        document.getElementById('result').innerText = 'Error al generar respuesta.';
                    }
                }
            } catch (error) {
                console.error('Error:', error);
                document.getElementById('result').innerText = 'Error al procesar la solicitud.';
            } finally {
                button.classList.remove('loading');
                overlay.classList.remove('active');
            }
        });

        document.addEventListener('DOMContentLoaded', createParticles);

        function mostrarModal(userText, generatedText) {
            document.getElementById('userMissionText').innerText = userText;
            document.getElementById('generatedMissionText').innerText = generatedText;
            document.getElementById('myModal').style.display = "block";
        }



        document.getElementById('insertTextButton').onclick = function() {
            const generatedText = document.getElementById('generatedMissionText').innerText;
            document.getElementById('mission').value = generatedText;
            document.getElementById('myModal').style.display = "none";
        }

        document.getElementById('correctButton').addEventListener('click', async () => {
            const button = document.getElementById('correctButton');
            const missionText = document.getElementById('mission').value;
            
            if (!missionText.trim()) {
                alert("Por favor, ingresa la misión de tu empresa.");
                return;
            }

            button.classList.add('disabled');
            button.disabled = true;

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

            button.classList.remove('disabled');
            button.disabled = false;
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
