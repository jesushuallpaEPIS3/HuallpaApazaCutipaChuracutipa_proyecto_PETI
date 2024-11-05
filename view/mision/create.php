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
        /* Reset and base styles */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Custom properties */
        :root {
            --primary-color: #007f7f;
            --primary-dark: #005f5f;
            --primary-light: #e6f3f3;
            --background-color: #f8fafa;
            --text-color: #2c3e50;
            --border-color: #e2e8f0;
            --box-shadow: 0 4px 6px rgba(0, 127, 127, 0.1);
            --box-shadow-hover: 0 8px 15px rgba(0, 127, 127, 0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --border-radius: 8px;
            --spacing-unit: 1.5rem;
        }

        /* Main container */
        .wrapper {
            width: 100%;
            max-width: 1200px;
            background: white;
            box-shadow: var(--box-shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            margin: 0 auto;
            position: relative;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            text-align: center;
            padding: calc(var(--spacing-unit) * 2);
            position: relative;
        }

        header h1 {
            font-size: 2.75rem;
            font-weight: 700;
            line-height: 1.2;
        }

        /* Info Box */
        .info-box {
            background-color: var(--primary-light);
            border-left: 4px solid var(--primary-color);
            margin: var(--spacing-unit);
            padding: var(--spacing-unit);
            border-radius: var(--border-radius);
            transition: var(--transition);
            text-align: justify;
        }

        .info-box:hover {
            transform: translateY(-3px);
            box-shadow: var(--box-shadow-hover);
        }

        .info-box h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .example {
            background-color: #ffffff;
            border-left: 4px solid var(--primary-color);
            padding: 1rem;
            margin-top: 1rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .example h3 {
            color: var(--primary-dark);
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
        }

        /* Form styling */
        .form-container {
            margin: var(--spacing-unit);
        }

        label {
            display: block;
            margin: 1rem 0 0.5rem;
            color: var(--text-color);
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        textarea, select {
            width: 100%;
            padding: 0.9rem;
            margin-bottom: 1rem;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            background-color: white;
        }

        .button-container {
            display: flex;
            gap: 1rem;
            margin: var(--spacing-unit);
        }

        .button-container button,
        .button-container input[type="submit"] {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            background-color: var(--primary-color);
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }

        .button-container button:hover,
        .button-container input[type="submit"]:hover {
            background-color: var(--primary-dark);
            box-shadow: var(--box-shadow-hover);
        }

        /* Modal background */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s ease-in-out;
            backdrop-filter: blur(5px);
        }

        /* Modal Content */
        .modal-content {
            background-color: var(--background-color);
            margin: 5% auto;
            padding: 0;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            width: 90%;
            max-width: 550px;
            box-shadow: var(--box-shadow);
            animation: slideIn 0.4s ease-out;
            overflow: hidden;
        }

        /* Modal Header */
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--spacing-unit);
            background-color: var(--primary-color);
            color: #ffffff;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .modal-header .close {
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            transition: var(--transition);
            background: none;
            border: none;
            padding: 0.5rem;
            border-radius: 50%;
        }

        .modal-header .close:hover,
        .modal-header .close:focus {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Modal Body */
        .modal-body {
            padding: var(--spacing-unit);
            background-color: #ffffff;
        }

        .modal-body h3 {
            margin: 0 0 1rem 0;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .modal-body p {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text-color);
            margin-bottom: 1rem;
        }

        /* Modal Footer */
        .modal-footer {
            display: flex;
            justify-content: flex-end;
            padding: var(--spacing-unit);
            background-color: var(--primary-light);
            border-top: 1px solid var(--border-color);
        }

        .modal-footer .button-container {
            display: flex;
            gap: 1rem;
        }

        .modal-footer .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: var(--transition);
        }

        .modal-footer .btn-primary {
            background-color: var(--primary-color);
            color: #ffffff;
        }

        .modal-footer .btn-primary:hover {
            background-color: var(--primary-dark);
            box-shadow: var(--box-shadow-hover);
        }

        .modal-footer .btn-secondary {
            background-color: #ffffff;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .modal-footer .btn-secondary:hover {
            background-color: var(--primary-light);
            box-shadow: var(--box-shadow-hover);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .modal-content {
                width: 95%;
                margin: 10% auto;
            }

            .modal-header h2 {
                font-size: 1.5rem;
            }

            .modal-body {
                padding: var(--spacing-unit);
            }

            .modal-body h3 {
                font-size: 1.2rem;
            }

            .modal-body p {
                font-size: 0.9rem;
            }

            .modal-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .modal-footer .button-container {
                flex-direction: column;
            }

            .modal-footer .btn {
                width: 100%;
                margin-bottom: 0.5rem;
            }
        }

        /* Boton IA */
        .ai-button {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 32px;
    border-radius: 9999px;
    background: linear-gradient(to bottom right, var(--primary-color), var(--primary-dark));
    color: white;
    font-size: 18px;
    font-weight: 500;
    text-decoration: none;
    border: none;
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease;
}

.ai-button:hover {
    transform: scale(1.05);
    background: linear-gradient(to bottom right, var(--primary-light), var(--primary-color));
}

.ai-button:active {
    transform: scale(0.95);
}

.button-background {
    position: absolute;
    inset: -4px;
    z-index: -1;
    border-radius: 9999px;
    background: linear-gradient(to bottom right, var(--primary-color), var(--primary-dark));
    opacity: 0.4;
    filter: blur(8px);
    transition: opacity 0.3s;
}

.ai-button:hover .button-background {
    opacity: 0.7;
}

.button-shimmer {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.2),
        transparent
    );
    transition: 0.5s;
}

.ai-button:hover .button-shimmer {
    left: 100%;
}

.sparkle-icon {
    width: 20px;
    height: 20px;
    animation: rotate 4s linear infinite;
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.button-text {
    position: relative;
}

.button-text::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;
    background-color: white;
    transform: scaleX(0);
    transition: transform 0.3s;
}

.ai-button:hover .button-text::after {
    transform: scaleX(1);
}

.generating-text,
.spinner {
    display: none;
}

.ai-button:active .button-text,
.ai-button:active .sparkle-icon {
    display: none;
}

.ai-button:active .generating-text,
.ai-button:active .spinner {
    display: inline-flex;
}

.ellipsis {
    display: inline-block;
    overflow: hidden;
    vertical-align: bottom;
    animation: ellipsis 1.5s infinite;
}

@keyframes ellipsis {
    0% {
        width: 0;
    }
    33% {
        width: 0.5em;
    }
    66% {
        width: 1em;
    }
    100% {
        width: 1.5em;
    }
}

.spinner {
    width: 24px;
    height: 24px;
    border: 3px solid white;
    border-top: 3px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.ai-button.disabled {
    background-color: #cccccc; /* Color de botón desactivado */
    cursor: not-allowed;
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

        document.getElementById('generateButton').addEventListener('click', async () => {
    const button = document.getElementById('generateButton');
    const missionText = document.getElementById('mission').value;
    const tone = document.getElementById('tone').value;

    if (!missionText.trim()) {
        alert("Por favor, ingresa la misión de tu empresa.");
        return;
    }

    button.classList.add('disabled');
    button.disabled = true;

    const key = `${missionText}-${tone}`;
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

    button.classList.remove('disabled');
    button.disabled = false;
});

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
