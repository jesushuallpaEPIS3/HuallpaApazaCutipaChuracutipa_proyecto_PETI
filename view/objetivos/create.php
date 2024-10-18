<?php
    require_once("../head/header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivos de tu Empresa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>OBJETIVOS ESTRATÉGICOS</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>¿Qué es la Visión?</h2>
                <p>El siguiente paso es establecer los objetivos de una empresa en relación al sector al que pertenece. Un <strong>OBJETIVO ESTRATÉGICO</strong> es un fin deseado, clave para la organización y para la consecución de su visión. </p>
                
                <p>Para una correcta planificación, construya los objetivos formando una pirámide. Los objetivos de cada nivel indican qué es lo que quiere lograrse, siendo la estructura de objetivos que está en el nivel inmediatamente inferior la que indica el cómo.
            </p>
            <ul>
                <li><strong>M</strong> - MEDIBLES: que se les pueda asignar indicadores cuantitativos</li>
                <li><strong>E</strong> - ESPECÍFICOS: que sean enunciados de forma clara, breve y comprensible</li>
                <li><strong>T</strong> - TRAZABLES: que permita un registro de seguimiento y control</li>
                <li><strong>A</strong> - ALCANZABLES: realistas y motivadores</li>
                <li><strong>S</strong> - SENSATOS: lógicos y consecuentes con los recursos disponibles</li>
            </ul>
            <!-- </section>
            <section class="form-container"> -->
            <form method="post" action="store.php">
            <table class="objectives-table">
                <tr>
                    <th>MISIÓN</th>
                    <th>OBJETIVOS GENERALES O ESTRATÉGICOS</th>
                    <th>OBJETIVOS ESPECÍFICOS</th>
                </tr>
                <tr>
                    <td rowspan="3"><textarea name="mision" placeholder="no escribir nada acá xd"></textarea></td>
                    <td><textarea name="objetivo_estrategico_1" placeholder="Objetivo estratégico 1"></textarea></td>
                    <td>
                        <textarea name="objetivo_especifico_1_1" placeholder="Objetivo específico 1.1"></textarea>
                        <textarea name="objetivo_especifico_1_2" placeholder="Objetivo específico 1.2"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><textarea name="objetivo_estrategico_2" placeholder="Objetivo estratégico 2"></textarea></td>
                    <td>
                        <textarea name="objetivo_especifico_2_1" placeholder="Objetivo específico 2.1"></textarea>
                        <textarea name="objetivo_especifico_2_2" placeholder="Objetivo específico 2.2"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><textarea name="objetivo_estrategico_3" placeholder="Objetivo estratégico 3"></textarea></td>
                    <td>
                        <textarea name="objetivo_especifico_3_1" placeholder="Objetivo específico 3.1"></textarea>
                        <textarea name="objetivo_especifico_3_2" placeholder="Objetivo específico 3.2"></textarea>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>

            </section>
        </main>
    </div>
    <?php
    require_once("../head/footer.php");
?>
</body>
</html>