<?php
    require_once("../head/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Resumen</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>IDENTIFICACIÓN DE ESTRATEGIA </h2>
                <p>Escriba en el siguiente recuadro la estrategia identificada en la Matriz FODA</p>
                
                <form action="store.php" method="POST">
                    <div class="mb-3">
                        <label for="identificacion">estrategia identificada</label>
                        <input type="text" id="nombre" class="form-control" name="identificacion" required>
                    </div>
                    <h2>CONCLUSIONES</h2>
                    <p>Anote las conclusiones más relevantes de su Plan. </p>

                    <div class="mb-3">
                        <label for="conclusion">Descripción de la empresa</label>
                        <textarea id="descripcion" class="form-control" name="conclusion" required rows="4"></textarea>
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