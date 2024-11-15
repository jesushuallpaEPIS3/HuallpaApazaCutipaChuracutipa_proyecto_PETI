<?php
    // Incluye el encabezado y el controlador
    require_once("../head/header.php");
    require_once("../../controller/ResumenController.php");
    $obj = new ResumenController();
    $date = $obj->show($_SESSION['user_id']);
    require_once("../../controller/cadenavalorController.php");
    $obj = new cadenavalorController();
    $date = $obj->verForm($_SESSION['user_id']);
    $foda = $obj->verfoda1($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>RESUMEN EJECUTIVO DEL PLAN ESTRATÉGICO</h1>
        </header>
        <main>
            <div class="container">
                <div class="column">
                    <?php include('../informacion/show.php'); ?>
                </div>
                <div class="column">
                    <?php include('../mision/show.php'); ?>
                </div>
                <div class="column">
                    <?php include('../vision/show.php'); ?>
                </div>
                <div class="column">
                    <?php include('../objetivos/show.php'); ?>
                </div>
                <div class="column">
                <body>
                    <div class="wrapper">
                        <header>
                            <h1>ANALISIS FODA</h1>
                        </header>
                        <main>
                            <section class="info-box">
                            <form method="post" action="store.php">
                            <br>
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">Fortalezas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>F1</td>
                                        <td><input type="text" name="f1" value="<?= $foda['f1'] ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td>F2</td>
                                        <td><input type="text" name="f2" value="<?= $foda['f2'] ?>" required></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">Debilidades</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>D1</td>
                                        <td><input type="text" name="d1" value="<?= $foda['d1'] ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td>D2</td>
                                        <td><input type="text" name="d2" value="<?= $foda['d2'] ?>" required></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>

                            </section>
                        </main>
                    </div>
                    <?php
                    require_once("../head/footer.php");
                ?>
                </body>
                </div>
                <div class="column">
                <body>
                    <div class="wrapper" oninput="generarMatrizBCG()">
                        <header>
                            <h1>MATRIZ PARTICIPACION</h1>
                        </header>
                        <main>
                            <section class="info-box">
                                <h2></h2>
                            
                            <!-- </section>
                            <section class="form-container"> -->

                        <form method="POST" action="store.php"> 
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">Fortalezas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>F3</td>
                                        <td><input type="text" name="f3" value="<?= $foda['f3'] ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td>F4</td>
                                        <td><input type="text" name="f4" value="<?= $foda['f4'] ?>" required></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">Debilidades</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>D3</td>
                                        <td><input type="text" name="d3" value="<?= $foda['d3'] ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td>D4</td>
                                        <td><input type="text" name="d4" value="<?= $foda['d4'] ?>" required></td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="submit" value="Enviar">
                        </form>
                            </section>
                        </main>
                        
                    </div>
                    <?php
                    //require_once("../head/footer.php");
                ?>
                </body>
                </div>
                <div class="column">
                    <?php
                        require_once("../head/header.php");
                        require_once("../../controller/ResumenController.php");
                        $obj = new ResumenController();
                        $date = $obj->show($_SESSION['user_id']);
                    ?>
                    <!DOCTYPE html>
                    <html lang="es">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Misión wasas de tu Empresa</title>
                        <link rel="stylesheet" href="../head/styles.css">

                        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
                    </head>
                    <div class="wrapper">
                        <header class="section-header">
                            <h1>Identificación de Estrategia</h1>
                        </header>
                        <section class="info-box">
                            <p class="content-text"><?= htmlspecialchars($date['identificacion']) ?></p>
                        </section>
                        <header class="section-header">
                            <h1>Conclusiones</h1>
                        </header>
                        <section class="info-box">
                            <p class="content-text"><?= htmlspecialchars($date['conclusion']) ?></p>
                            <a href="edit.php?id=<?= htmlspecialchars($date['id']) ?>" class="btn btn-secondary">Modificar</a>
                        </section>
                    </div>
                </div>
                    <td>
                        <a href="generar.php?id=<?= htmlspecialchars($date['id']) ?>">Generar PDF</a>
                    </td>
            </div>
        </main>
    </div>
    <?php require_once("../head/footer.php"); ?>
</body>
</html>