<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mission = $_POST["mission"];
    $_SESSION["mission"] = $mission;
    $success = true;
}
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
                    <li>Siempre orientada hacia el cliente no hacia el producto o servicio.</li>
                    <li>Refleja el propósito fundamental de la empresa en el mercado.</li>
                </ul>
                <p>En términos generales describe la actividad y razón de ser de la organización y contribuye como una referencia permanente en el proceso de planificación estratégica. Se expresa a través de una oración que define el propósito fundamental de su existencia, estableciendo qué hace la empresa, por qué y para quién lo hace.</p>
                <div class="example">
                    <h3>Ejemplo:</h3>
                    <p><strong>Empresa de servicios:</strong> La gestión de servicios que contribuyen a la calidad de vida de las personas y generan valor para los grupos de interés.</p>
                </div>
            </section>
            <section class="form-container">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="mission">Ingresa la Misión de tu empresa:</label>
                    <textarea id="mission" name="mission" required><?php echo isset($_SESSION["mission"]) ? htmlspecialchars($_SESSION["mission"]) : ''; ?></textarea>
                    <input type="submit" value="Guardar Misión">
                </form>
                
                <?php if (isset($success) && $success): ?>
                <div class="success-message">
                    ¡La Misión ha sido guardada exitosamente!
                </div>
                <?php endif; ?>
            </section>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('mission');
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        });
    </script>
</body>
</html>