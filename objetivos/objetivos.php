<?php
$mision = $objetivo_estrategico_1 = $objetivo_estrategico_2 = $objetivo_estrategico_3 = "";
$objetivo_especifico_1_1 = $objetivo_especifico_2_1 = $objetivo_especifico_3_1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mision = $_POST["mision"];
    $objetivo_estrategico_1 = $_POST["objetivo_estrategico_1"];
    $objetivo_estrategico_2 = $_POST["objetivo_estrategico_2"];
    $objetivo_estrategico_3 = $_POST["objetivo_estrategico_3"];
    $objetivo_especifico_1_1 = $_POST["objetivo_especifico_1_1"];
    $objetivo_especifico_2_1 = $_POST["objetivo_especifico_2_1"];
    $objetivo_especifico_3_1 = $_POST["objetivo_especifico_3_1"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Objetivos Estratégicos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>4. OBJETIVOS ESTRATÉGICOS</h2>
        
        <div class="content-box">
            <p>
                El siguiente paso es establecer los objetivos de una empresa en relación al sector al que pertenece. Un <strong>OBJETIVO ESTRATÉGICO</strong> es un fin deseado, clave para la organización y para la consecución de su visión. 
            </p>
            <p>
                Para una correcta planificación, construya los objetivos formando una pirámide. Los objetivos de cada nivel indican qué es lo que quiere lograrse, siendo la estructura de objetivos que está en el nivel inmediatamente inferior la que indica el cómo.
            </p>
        </div>

        <div class="pyramid-container">
          <div class="pyramid-level top">Misión, visión y valores</div>
          <div class="pyramid-level middle">Objetivos estratégicos o generales</div>
          <div class="pyramid-level base">Objetivos específicos</div>
        </div>

        <div class="content-box">
            <p><strong>Objetivos estratégicos:</strong> Concretan el contenido de la misión. Suelen referirse al crecimiento, rentabilidad y la sostenibilidad de la empresa. Su horizonte es entre 3 a 5 años.</p>
            <p><strong>Objetivos operativos:</strong> Son la concreción anual de los objetivos estratégicos. Han de ser claros, concisos y medibles.</p>
        </div>

        <table class="metas-table">
            <tr><td><strong>M</strong> - MEDIBLES: que se les pueda asignar indicadores cuantitativos</td></tr>
            <tr><td><strong>E</strong> - ESPECÍFICOS: que sean enunciados de forma clara, breve y comprensible</td></tr>
            <tr><td><strong>T</strong> - TRAZABLES: que permita un registro de seguimiento y control</td></tr>
            <tr><td><strong>A</strong> - ALCANZABLES: realistas y motivadores</td></tr>
            <tr><td><strong>S</strong> - SENSATOS: lógicos y consecuentes con los recursos disponibles</td></tr>
        </table>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table class="objectives-table">
                <tr>
                    <th>MISIÓN</th>
                    <th>OBJETIVOS GENERALES O ESTRATÉGICOS</th>
                    <th>OBJETIVOS ESPECÍFICOS</th>
                </tr>
                <tr>
                    <td rowspan="3"><textarea name="mision" placeholder="Ingrese la misión de su empresa"><?php echo htmlspecialchars($mision); ?></textarea></td>
                    <td><textarea name="objetivo_estrategico_1" placeholder="Objetivo estratégico 1"><?php echo htmlspecialchars($objetivo_estrategico_1); ?></textarea></td>
                    <td><textarea name="objetivo_especifico_1_1" placeholder="Objetivo específico 1.1"><?php echo htmlspecialchars($objetivo_especifico_1_1); ?></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="objetivo_estrategico_2" placeholder="Objetivo estratégico 2"><?php echo htmlspecialchars($objetivo_estrategico_2); ?></textarea></td>
                    <td><textarea name="objetivo_especifico_2_1" placeholder="Objetivo específico 2.1"><?php echo htmlspecialchars($objetivo_especifico_2_1); ?></textarea></td>
                </tr>
                <tr>
                    <td><textarea name="objetivo_estrategico_3" placeholder="Objetivo estratégico 3"><?php echo htmlspecialchars($objetivo_estrategico_3); ?></textarea></td>
                    <td><textarea name="objetivo_especifico_3_1" placeholder="Objetivo específico 3.1"><?php echo htmlspecialchars($objetivo_especifico_3_1); ?></textarea></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h3>Datos enviados:</h3>";
            echo "<p><strong>Misión:</strong> " . htmlspecialchars($mision) . "</p>";
            echo "<p><strong>Objetivo Estratégico 1:</strong> " . htmlspecialchars($objetivo_estrategico_1) . "</p>";
            echo "<p><strong>Objetivo Específico 1.1:</strong> " . htmlspecialchars($objetivo_especifico_1_1) . "</p>";
            echo "<p><strong>Objetivo Estratégico 2:</strong> " . htmlspecialchars($objetivo_estrategico_2) . "</p>";
            echo "<p><strong>Objetivo Específico 2.1:</strong> " . htmlspecialchars($objetivo_especifico_2_1) . "</p>";
            echo "<p><strong>Objetivo Estratégico 3:</strong> " . htmlspecialchars($objetivo_estrategico_3) . "</p>";
            echo "<p><strong>Objetivo Específico 3.1:</strong> " . htmlspecialchars($objetivo_especifico_3_1) . "</p>";
        }
        ?>
    </div>
</body>
</html>