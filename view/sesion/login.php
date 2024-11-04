<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form method="post" action="control.php" onsubmit="return validateCaptcha()">
            <div class="input-group">
                <input type="text" id="username" name="username" required placeholder=" ">
                <label for="username">Usuario</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Contraseña</label>
            </div>
            <div class="captcha" id="captchaContainer">
                <canvas id="captchaCanvas" width="120" height="40"></canvas>
            </div>
            <input type="text" id="captchaInput" name="captcha" required placeholder="Ingrese el código" maxlength="4">
            <button type="submit">Iniciar Sesión</button>
        </form>

        <div class="add-user">
            <a href="#" id="addUserBtn">Agregar Usuario</a>
        </div>

        <div id="registrationForm" style="display: none;">
            <h2>Registrar Nuevo Usuario</h2>
            <form method="post" action="control.php">
                <div class="input-group">
                    <input type="text" id="newUsername" name="new_username" required placeholder=" ">
                    <label for="newUsername">Nuevo Usuario</label>
                </div>
                <div class="input-group">
                    <input type="password" id="newPassword" name="new_password" required placeholder=" ">
                    <label for="newPassword">Nueva Contraseña</label>
                </div>
                <button type="submit">Registrar</button>
                <button type="button" id="cancelRegistrationBtn">Cancelar</button>
            </form>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>
    <div id="alert" class="alert">
        <p id="alertMessage"></p>
        <button id="alertButton">Aceptar</button>
    </div>

    <script>
        let captchaValue;

        function generateCaptcha() {
            captchaValue = Math.floor(1000 + Math.random() * 9000).toString();
            const canvas = document.getElementById('captchaCanvas');
            const ctx = canvas.getContext('2d');
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = "#f5f7fa";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.font = "bold 24px Arial";
            ctx.fillStyle = "#4a90e2";
            ctx.fillText(captchaValue, 10, 30);
        }

        function validateCaptcha() {
            const userInput = document.getElementById('captchaInput').value;
            const alertMessage = document.getElementById('alertMessage');
            const alertBox = document.getElementById('alert');
            const overlay = document.getElementById('overlay');
            
            if (userInput === captchaValue) {
                return true;
            } else {
                alertMessage.textContent = "El código captcha no es correcto. Intenta de nuevo.";
                overlay.style.display = 'block';
                alertBox.classList.add('show');
                generateCaptcha();
                return false; 
            }
        }

        document.getElementById('alertButton').onclick = function() {
            const alertBox = document.getElementById('alert');
            const overlay = document.getElementById('overlay');
            alertBox.classList.remove('show');
            overlay.style.display = 'none';
        };

        window.onload = generateCaptcha;

        document.getElementById('addUserBtn').onclick = function() {
            document.getElementById('registrationForm').style.display = 'block';
            document.querySelector('.login-container form').style.display = 'none';
        };

        document.getElementById('cancelRegistrationBtn').onclick = function() {
            document.getElementById('registrationForm').style.display = 'none';
            document.querySelector('.login-container form').style.display = 'block';
        };
    </script>
</body>
</html>
