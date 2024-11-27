<?php
    require_once("../head/header.php");
    require_once("../../controller/matrizcaController.php");
    $obj = new matrizcaController();

    $date = $obj->show($_SESSION['user_id']);
?>

    <title>Objetivos de tu Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>MATRIZ CAME</h1>
            
        </header>
        <main>
            <section class="info-box">
                <h2>11. MATRIZ CAME </h2>
                <p>Para finalizar de elaborar un Plan Estratégico, además de tener identificada la estrategia es necesario determinar acciones que permitan corregir las debilidades, afrontar las amenazas, mantener las fortalezas y explotar las oportunidades. </p>
            <!-- </section>
            <section class="form-container"> -->
<form method="POST" action="store.php">


            <table border="1">
                    <td></td>
                    <td>Acciones</td>
                    <td>Corregir las debilidades</td>
                <tbody>
                    <tr>
                        <td rowspan="4">C</td>
                        <td>1</td>
                        <td><input type="text" name="came[]" value="<?=$date[0][1]?>"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" name="came[]" value="<?=$date[1][1]?>"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="text" name="came[]" value="<?=$date[2][1]?>"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="text" name="came[]" value="<?=$date[3][1]?>"></td>
                    </tr>
                </tbody>
            </table>

            <table border="1">
                    <td></td>
                    <td>Acciones</td>
                    <td>Afrontar las amenazas</td>
                <tbody>
                    <tr>
                        <td rowspan="4">A</td>
                        <td>5</td>
                        <td><input type="text" name="came[]" value="<?=$date[4][1]?>"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><input type="text" name="came[]" value="<?=$date[5][1]?>"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><input type="text" name="came[]" value="<?=$date[6][1]?>"></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><input type="text" name="came[]" value="<?=$date[7][1]?>"></td>
                    </tr>
                </tbody>
            </table>
            <table border="1">
                    <td></td>
                    <td>Acciones</td>
                    <td>Mantener las fortalezas</td>
                <tbody>
                    <tr>
                        <td rowspan="4">M</td>
                        <td>9</td>
                        <td><input type="text" name="came[]" value="<?=$date[8][1]?>"></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><input type="text" name="came[]" value="<?=$date[9][1]?>"></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td><input type="text" name="came[]" value="<?=$date[10][1]?>"></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td><input type="text" name="came[]" value="<?=$date[11][1]?>"></td>
                    </tr>
                </tbody>
            </table>
            <table border="1">
                    <td></td>
                    <td>Acciones</td>
                    <td>Explotar las oportunidades</td>
                <tbody>
                    <tr>
                        <td rowspan="4">E</td>
                        <td>13</td>
                        <td><input type="text" name="came[]" value="<?=$date[12][1]?>"></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td><input type="text" name="came[]" value="<?=$date[13][1]?>"></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td><input type="text" name="came[]" value="<?=$date[14][1]?>"></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td><input type="text" name="came[]" value="<?=$date[15][1]?>"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Guardar">
            </form>       


            </section>
        </main>
    </div>
    <?php
    require_once("../head/footer.php");
?>
</body>
</html>