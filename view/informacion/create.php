<?php
    require_once("../head/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Registrar Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>Información de la Empresa</h2>
                <p>El Plan Estratégico de Tecnologías de la Información – PETI, busca que la Entidad administre de manera eficiente los recursos de tecnología, los sistemas de información y la información, necesarios para la gestión de la organización.</p>
                
                <form action="store.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre">Nombre de la empresa</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="descripcion">Descripción de la empresa</label>
                        <textarea id="descripcion" class="form-control" name="descripcion" required rows="4"></textarea>
                    </div>
                    
                    <div class="button-container">
                        <button type="submit" class="btn">Guardar</button>
                        <a href="../../index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>

<?php
    require_once("../head/footer.php");
?>