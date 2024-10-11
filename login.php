<?php
session_start();

$alertMessage = '';
$alertType = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'Admin' && $password === '123') {
        $_SESSION['loggedin'] = true;
        $alertMessage = "Inicio de sesión exitoso";
        $alertType = "success";
    } else {
        $alertMessage = "Usuario o contraseña incorrectos";
        $alertType = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Sistema Profesional</title>
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
            background: linear-gradient(135deg, var(--secondary-color) 0%, #c3cfe2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            transition: all 0.3s ease;
        }
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        h2 {
            color: var(--text-color);
            margin-bottom: 1.5rem;
            text-align: center;
            font-weight: 700;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
        }
        label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            color: #999;
            font-size: 1rem;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        input:focus + label,
        input:not(:placeholder-shown) + label {
            top: -0.5rem;
            left: 0.5rem;
            font-size: 0.8rem;
            color: var(--primary-color);
            background-color: #fff;
            padding: 0 0.3rem;
        }
        button {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        button:hover {
            background-color: #357abd;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.4);
        }
        button:active {
            transform: translateY(0);
            box-shadow: none;
        }
        .add-user {
            margin-top: 1.5rem;
            text-align: center;
        }
        .add-user a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .add-user a:hover {
            color: #357abd;
            text-decoration: underline;
        }
        .alert {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%) translateY(-100%);
            background-color: white;
            padding: 1rem;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }
        .alert.show {
            transform: translateX(-50%) translateY(0);
        }
        .alert-success {
            color: var(--success-color);
        }
        .alert-error {
            color: var(--error-color);
        }
        .alert button {
            margin-top: 0.5rem;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .login-container {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-group">
                <input type="text" id="username" name="username" required placeholder=" ">
                <label for="username">Usuario</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Contraseña</label>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <div class="add-user">
            <a href="#" id="addUserBtn">Agregar Usuario</a>
        </div>
    </div>

    <div id="alert" class="alert">
        <p id="alertMessage"></p>
        <button id="alertButton">Aceptar</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addUserBtn = document.getElementById('addUserBtn');
            const loginContainer = document.querySelector('.login-container');
            const alert = document.getElementById('alert');
            const alertMessage = document.getElementById('alertMessage');
            const alertButton = document.getElementById('alertButton');

            addUserBtn.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Funcionalidad para agregar usuario aún no implementada.');
            });

            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'scale(1.05)';
                });
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'scale(1)';
                });
            });

            <?php if ($alertMessage): ?>
                showAlert('<?php echo $alertMessage; ?>', '<?php echo $alertType; ?>');
            <?php endif; ?>

            function showAlert(message, type) {
                alertMessage.textContent = message;
                alert.classList.add(type === 'success' ? 'alert-success' : 'alert-error');
                alert.classList.add('show');

                if (type === 'success') {
                    setTimeout(() => {
                        window.location.href = 'home.php';
                    }, 2000);
                }
            }

            alertButton.addEventListener('click', function() {
                alert.classList.remove('show');
            });
        });
    </script>
</body>
</html>