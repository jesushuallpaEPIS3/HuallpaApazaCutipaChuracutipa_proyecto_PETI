<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión Empresarial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2 class="header">2. VISIÓN</h2>
    
    <p class="description">
        La VISIÓN de una empresa define lo que la empresa/organización quiere lograr
        en el futuro. Es lo que la organización aspira llegar a ser en torno a 2 -3 años.
    </p>
    
    <ul class="bullet-points">
        <li>Debe ser retadora, positiva, compartida y coherente con la misión.</li>
        <li>Marca el fin último que la estrategia debe seguir.</li>
        <li>Proyecta la imagen de destino que se pretende alcanzar.</li>
    </ul>
    
    <p class="extra-info">
        La visión debe ser conocida y compartida por todos los miembros de la empresa
        y también por aquellos que se relacionan con ella.
    </p>
    
    <h3 class="sub-header">EJEMPLOS</h3>
    
    <div class="example">
        <h4>Empresa de servicios</h4>
        <p>Ser el grupo empresarial de referencia en nuestras áreas de actividad</p>
    </div>
    
    <div class="example">
        <h4>Empresa productora de café</h4>
        <p>Queremos ser en el mundo el punto de referencia de la cultura y de la
        excelencia del café. Una empresa innovadora que propone los mejores
        productos y lugares de consumo y que, gracias a ello, crece y se convierte en
        líder de la alta gama.</p>
    </div>
    
    <div class="example">
        <h4>Agencia de certificación</h4>
        <p>Ser líderes en nuestro sector y un actor principal en todos los segmentos de
        mercado en los que estamos presentes, en los mercados clave.</p>
    </div>
    
    <div class="input-section">
        <p class="instruction">En este apartado describa la Visión de su empresa.</p>
        <textarea class="input-box" id="visionInput"></textarea>
        <button onclick="mostrarVision()">Mostrar Visión</button>
        <p id="visionOutput" class="description"></p>
    </div>
    
    <div class="diagram">
        <div class="circle left">Misión</div>
        <div class="process">Procesos cotidianos</div>
        <div class="circle right">Visión</div>
        <div class="question left">¿Cuál es la situación actual?</div>
        <div class="question center">¿Qué camino a seguir?</div>
        <div class="question right">¿Cuál es la situación futura?</div>
    </div>
</div>

<script>
    function mostrarVision() {
        const visionInput = document.getElementById('visionInput').value;
        document.getElementById('visionOutput').innerText = visionInput;
    }
</script>
</body>
</html>
