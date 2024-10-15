<?php
session_start();

$companyName = $companyDescription = "";
$companyNameErr = $companyDescriptionErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["companyName"])) {
        $companyNameErr = "El nombre de la empresa es requerido";
    } else {
        $companyName = test_input($_POST["companyName"]);
    }
    
    if (empty($_POST["companyDescription"])) {
        $companyDescriptionErr = "La descripción de la empresa es requerida";
    } else {
        $companyDescription = test_input($_POST["companyDescription"]);
    }

    if (empty($companyNameErr) && empty($companyDescriptionErr)) {
        $_SESSION['companyInfo'] = [
            'name' => $companyName,
            'description' => $companyDescription
        ];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa - PETI</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
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
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus, textarea:focus {
            border-color: var(--primary-color);
            outline: none;
        }
        .error {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 5px;
        }
        button[type="submit"] {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #357abd;
        }
        .success-message {
            background-color: var(--success-color);
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
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
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="companyName">Nombre de la empresa:</label>
                <input type="text" id="companyName" name="companyName" value="<?php echo $companyName;?>" required>
                <span class="error"><?php echo $companyNameErr;?></span>
            </div>
            
            <div class="form-group">
                <label for="companyDescription">Descripción breve de lo que hace la empresa:</label>
                <textarea id="companyDescription" name="companyDescription" rows="5" required><?php echo $companyDescription;?></textarea>
                <span class="error"><?php echo $companyDescriptionErr;?></span>
            </div>
            
            <button type="submit">Enviar</button>
        </form>
        
        <?php
        if (isset($_SESSION['companyInfo'])) {
            echo "<div class='success-message'>";
            echo "<h2>Información enviada:</h2>";
            echo "<p><strong>Nombre de la empresa:</strong> " . $_SESSION['companyInfo']['name'] . "</p>";
            echo "<p><strong>Descripción de la empresa:</strong> " . $_SESSION['companyInfo']['description'] . "</p>";
            echo "</div>";
            unset($_SESSION['companyInfo']);
        }
        ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = form.querySelectorAll('input, textarea');

            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transform = 'scale(1.02)';
                });
                input.addEventListener('blur', function() {
                    this.style.transform = 'scale(1)';
                });
            });

            form.addEventListener('submit', function(e) {
                let isValid = true;
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.style.borderColor = 'var(--error-color)';
                    } else {
                        input.style.borderColor = '#ddd';
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Por favor, complete todos los campos.');
                }
            });
        });
    </script>
</body>
</html>
