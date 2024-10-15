<?php
    require_once("../head/header.php");
?>

    <style>
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #f5f7fa;
            --text-color: #333;
            --error-color: #e74c3c;
            --success-color: #2ecc71;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background: linear-gradient(135deg, var(--secondary-color) 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            color: var(--primary-color);
        }
        h1 {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 30px;
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: -30px -30px 30px -30px;
        }
        .example {
            background-color: var(--secondary-color);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .example:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>INFORMACIÓN DE LA EMPRESA</h1>
        
        <p>El Plan Estratégico de Tecnologías de la Información – PETI, busca que la Entidad administre de manera eficiente los recursos de tecnología, los sistemas de información y la información, necesarios para la gestión de la organización.</p>
        
        <p>Ejemplo de un plan estratégico de TI - <a href="https://www.inei.gob.pe/media/pte/PETI/Plan_Estrategico_de_Tecnologia_de_la_Informacion-PETI%20VF.PDF" target="_blank" rel="noopener noreferrer">Ver PDF</a></p>
        
        <h2>EJEMPLOS</h2>
        
        <div class="example">
            <h3>Apple Inc.</h3>
            <p>Apple es una empresa tecnológica multinacional con sede en Cupertino, California. Se especializa en el diseño, desarrollo y comercialización de productos electrónicos, software y servicios. Sus productos más conocidos incluyen el iPhone, el iPad, la Mac y el Apple Watch, además de su sistema operativo iOS y macOS. Apple también ofrece servicios como iTunes, Apple Music, iCloud y Apple Pay.</p>
        </div>
        
        <div class="example">
            <h3>Amazon.com, Inc.</h3>
            <p>Amazon es una de las mayores empresas de comercio electrónico y tecnología del mundo. Inicialmente, comenzó como una plataforma de venta de libros en línea, pero ha crecido para ofrecer una amplia variedad de productos y servicios, incluyendo Amazon Prime (entrega rápida), Amazon Web Services (servicios en la nube), dispositivos como el Kindle y la serie de altavoces inteligentes Echo, y producciones de contenido a través de Amazon Studios.</p>
        </div>
        
        <div class="example">
            <h3>Tesla, Inc.</h3>
            <p>Tesla es una empresa automotriz y de energía con sede en Palo Alto, California. Su enfoque principal es la fabricación de vehículos eléctricos, incluyendo el Model S, Model 3, Model X y Model Y. Además de los automóviles, Tesla se dedica a la producción de baterías y sistemas de almacenamiento de energía, como el Powerwall y Powerpack, así como a la energía solar a través de productos como los paneles solares Solarglass Roof. También está desarrollando tecnología de conducción autónoma.</p>
        </div>
        
        <form action="store.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="../../index.php" >Cancelar</a>
        </form>
        
        
    </div>

<?php
    require_once("../head/footer.php");
?>