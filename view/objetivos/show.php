<?php
    require_once("../head/header.php");
    require_once("../../controller/objetivosController.php");
    $obj = new objetivosController();
    $date = $obj->show($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión de tu Empresa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
    <div class="wrapper">
        <header>
            <h1>Objetivos de la Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <table>
                    <tr>
                        <th>Mision</th>
                        <th>Objetivos Estratégicos</th>
                        <th>Objetivos específicos</th>
                    </tr>
                    <!-- FILA 0 -->
                    <tr>
                        <td rowspan="6"><?= $date[0][0] ?></td>
                        <td rowspan="2"><?= $date[0][1] ?></td>
                        <td><?= $date[0][2] ?></td>
                    </tr>
                    <!-- FILA 1 -->
                    <tr>
                        <td><?= $date[1][2] ?></td>
                    </tr>
                    <!-- FILA 2 -->
                    <tr>
                        <td rowspan="2"><?= $date[2][1] ?></td>
                        <td><?= $date[2][2] ?></td>
                    </tr>
                    <!-- FILA 3 -->
                    <tr>
                        <td><?= $date[3][2] ?></td>
                    </tr>
                    <!-- FILA 4 -->
                    <tr>
                        <td rowspan="2"><?= $date[4][1] ?></td>
                        <td><?= $date[4][2] ?></td>
                    </tr>
                    <!-- FILA 5 -->
                    <tr>
                        <td><?= $date[5][2] ?></td>
                    </tr>
                    
                </table>   
            </section>
        </main>
    </div>

<?php
    require_once("../head/footer.php");
?>