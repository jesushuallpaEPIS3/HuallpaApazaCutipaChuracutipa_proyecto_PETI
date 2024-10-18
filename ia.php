<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de texto con Google Gemini y historial</title>
</head>
<body>
    <h1>Generador de texto con Google Gemini</h1>
    <p>Selecciona las características que mejor describen a tu empresa:</p>
    <div id="features">
        <label><input type="checkbox" value="innovadora"> Innovadora</label><br>
        <label><input type="checkbox" value="orientada al cliente"> Orientada al cliente</label><br>
        <label><input type="checkbox" value="sostenible"> Sostenible</label><br>
        <label><input type="checkbox" value="de alta calidad"> De alta calidad</label><br>
        <label><input type="checkbox" value="con experiencia en tecnología"> Con experiencia en tecnología</label><br>
        <label><input type="checkbox" value="servicio al cliente excepcional"> Servicio al cliente excepcional</label><br>
        <label><input type="checkbox" value="enfocada en el crecimiento"> Enfocada en el crecimiento</label><br>
    </div>
    
    <input type="text" id="inputText" placeholder="Escribe algo adicional aquí...">
    <button id="generateButton">Generar</button>
    <div id="chatHistory"></div>

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

        let chatHistory = loadChatHistory();

        const chatElement = document.getElementById('chatHistory');

        document.getElementById('generateButton').addEventListener('click', async () => {
            const inputText = document.getElementById('inputText').value;
            const selectedFeatures = Array.from(document.querySelectorAll('#features input:checked'))
                .map(checkbox => checkbox.value)
                .join(', ');

            const prompt = `Genera la misión, visión y objetivos para una empresa que se caracteriza por: ${selectedFeatures}. ${inputText}`;

            try {
                const result = await model.generateContent(prompt);
                const response = await result.response;

                chatHistory.push({ prompt: prompt, response: response.text() });
                storeChatHistory(chatHistory);

                const chatLine = document.createElement('p');
                chatLine.innerText = `Tú: ${prompt}\nGemini: ${response.text()}`;
                chatElement.appendChild(chatLine);
                chatElement.scrollTop = chatElement.scrollHeight;
            } catch (error) {
                console.error('Error al generar contenido:', error);
            }
        });

        function storeChatHistory(history) {
            localStorage.setItem('chatHistory', JSON.stringify(history));
        }

        function loadChatHistory() {
            const storedHistory = localStorage.getItem('chatHistory');
            return storedHistory ? JSON.parse(storedHistory) : [];
        }

        chatHistory.forEach(message => {
            const chatLine = document.createElement('p');
            chatLine.innerText = `Tú: ${message.prompt}\nGemini: ${message.response}`;
            chatElement.appendChild(chatLine);
        });
    </script>
</body>
</html>
