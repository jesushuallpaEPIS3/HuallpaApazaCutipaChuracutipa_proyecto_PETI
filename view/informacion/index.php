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
        <h1>INFORMACIÓN DE EMPRESAS</h1>
        
        <p>El Plan Estratégico de Tecnologías de la Información – PETI, busca que la Entidad administre de manera eficiente los recursos de tecnología, los sistemas de información y la información, necesarios para la gestión de la organización.</p>
        
        <h2>Mi empresa</h2>
        
        <div class="example">
            <h3>#</h3>
            <p>#</p>
        </div>
        
    </div>

<?php
    require_once("../head/footer.php");
?>