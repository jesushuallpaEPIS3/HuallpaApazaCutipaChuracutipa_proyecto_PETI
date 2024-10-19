<?php
    require_once("../head/header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empresa</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>REGISTRAR EMPRESA</h1>
        
        <p>El Plan Estratégico de Tecnologías de la Información – PETI, busca que la Entidad administre de manera eficiente los recursos de tecnología, los sistemas de información y la información, necesarios para la gestión de la organización.</p>
        
        <form action="store.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción de la empresa</label>
                <input type="text" class="form-control" name="descripcion" required>
            </div>
            <div class="button-container">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" id="generateButton" class="btn btn-secondary">Consultar con IA</button>
                <a class="btn btn-danger" href="../../index.php">Cancelar</a>
            </div>
        </form>
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
            const nombreempresa = document.querySelector('input[name="nombre"]').value;
            const descripcion = document.querySelector('input[name="descripcion"]').value;
            const prompt = `Por favor, redacta una descripción para la empresa con el nombre: "${nombreempresa}".y con esta descripcion que dio "${descripcion}", no me des mas opciones, solo queiro una recomendacion`;
            try {
                const result = await model.generateContent(prompt);
                const response = await result.response;
                document.querySelector('.container').insertAdjacentHTML('beforeend', `<p>${response.text()}</p>`);
            } catch (error) {
                console.error('Error al generar contenido:', error);
                alert('Error al generar respuesta.');
            }
        });
    </script>
</body>
</html>


