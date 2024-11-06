<?php
    //require_once("../head/header.php");
?>

<?php
    require_once("../head/header.php");
    require_once("../../controller/matrizpaController.php");
    $id = $_SESSION['user_id'];
    $obj = new cadenavalorController();
    $foda = $obj->verfoda2($id);
    $tbPV = $obj->verDatosPV($id);
    $tbTCM = $obj->verDatosTCM($id);
    $tbEDGS = $obj->verDatosEDGS($id);
?>

    <!-- <title>MATRIZ PARTICIPACION</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head> -->
<script src="script.js" defer></script>
<link rel="stylesheet" href="grafico.css">
<body>
    <div class="wrapper" oninput="generarMatrizBCG()">
        <header>
            <h1>MATRIZ PARTICIPACION</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>dsasd</h2>
            
            <!-- </section>
            <section class="form-container"> -->

        <form method="post" action="store.php"> 

            <!-- PREVISIÓN DE VENTAS -->
            <table border="1" oninput="actualizarTbPrivisionVentas(); maxVentaCp();">
                <tr>
                    <th colspan="3">PREVISIÓN DE VENTAS</th>
                </tr>
                <tr>
                    <th>Productos</th>
                    <th>Ventas</th>
                    <th>% S/ TOTAL</th>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="<?= $tbPV[0][1] ?>"></td>
                    <td><input type="number" name="ventas" value="<?= $tbPV[0][2] ?>" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="<?= $tbPV[1][1] ?>"></td>
                    <td><input type="number" name="ventas" value="<?= $tbPV[1][2] ?>" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="<?= $tbPV[2][1] ?>"></td>
                    <td><input type="number" name="ventas" value="<?= $tbPV[2][2] ?>" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="<?= $tbPV[3][1] ?>"></td>
                    <td><input type="number" name="ventas" value="<?= $tbPV[3][2] ?>" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="<?= $tbPV[4][1] ?>" placeholder="asd"></td>
                    <td><input type="number" name="ventas" value="<?= $tbPV[4][2] ?>" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><strong>TOTAL</strong></td>
                    <td id="totalVentas">0</td>
                    <td id="totalPorcentaje">100.00%</td>
                </tr>
            </table>

            <!-- TASAS DE CRECIMIENTO DEL MERCADO (TCM) -->
            <table border="1" oninput="graficoBCG()">
                <tr><th colspan="7">TASAS DE CRECIMIENTO DEL MERCADO (TCM)</th></tr>
                <tr>
                    <th colspan="2" rowspan="2">PERIODOS</th>
                    <th colspan="5">MERCADOS</th>
                </tr>
                <tr>
                    <th name="nameproducto">Producto 1</th>
                    <th name="nameproducto">Producto 2</th>
                    <th name="nameproducto">Producto 3</th>
                    <th name="nameproducto">Producto 4</th>
                    <th name="nameproducto">Producto 5</th>
                </tr>
                <tr>
                    <td>2020</td><td>2021</td>
                    <td><input type="text" name="producto1" value="<?= $tbTCM[0][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" value="<?= $tbTCM[5][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" value="<?= $tbTCM[10][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" value="<?= $tbTCM[15][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" value="<?= $tbTCM[20][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2021</td><td>2022</td>
                    <td><input type="text" name="producto1" value="<?= $tbTCM[1][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" value="<?= $tbTCM[6][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" value="<?= $tbTCM[11][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" value="<?= $tbTCM[16][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" value="<?= $tbTCM[21][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2023</td><td>2023</td>
                    <td><input type="text" name="producto1" value="<?= $tbTCM[2][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" value="<?= $tbTCM[7][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" value="<?= $tbTCM[12][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" value="<?= $tbTCM[17][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" value="<?= $tbTCM[22][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2023</td><td>2024</td>
                    <td><input type="text" name="producto1" value="<?= $tbTCM[3][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" value="<?= $tbTCM[8][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" value="<?= $tbTCM[13][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" value="<?= $tbTCM[18][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" value="<?= $tbTCM[23][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2024</td><td>2024</td>
                    <td><input type="text" name="producto1" value="<?= $tbTCM[4][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" value="<?= $tbTCM[9][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" value="<?= $tbTCM[14][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" value="<?= $tbTCM[19][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" value="<?= $tbTCM[24][3] ?>" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
            </table>
            <!-- BCG -->
            <table border="1">
                <tr>
                    <th>BCG</th>
                    <th name="nameproducto">Producto 1</th>
                    <th name="nameproducto">Producto 2</th>
                    <th name="nameproducto">Producto 3</th>
                    <th name="nameproducto">Producto 4</th>
                    <th name="nameproducto">Producto 5</th>
                </tr>
                <tr>
                    <td>TCM</td>
                    <td name="tcm">0.00%</td>
                    <td name="tcm">0.00%</td>
                    <td name="tcm">0.00%</td>
                    <td name="tcm">0.00%</td>
                    <td name="tcm">0.00%</td>
                </tr>
                <tr>
                    <td>PRM</td>
                    <td name="prm">0.00</td>
                    <td name="prm">0.00</td>
                    <td name="prm">0.00</td>
                    <td name="prm">0.00</td>
                    <td name="prm">0.00</td>
                </tr>
                <tr>
                    <td>% S/VTAS</td>
                    <td name="bcgventas"></td>
                    <td name="bcgventas"></td>
                    <td name="bcgventas"></td>
                    <td name="bcgventas"></td>
                    <td name="bcgventas"></td>
                </tr>
            </table>

            <table border="1" oninput="simboloPorcentaje()">
                <tr><th colspan="6">EVOLUCION DE LA DEMANDA GLOBAL SECTOR (en miles de soles)</th></tr>
                <tr>
                    <th rowspan="2">AÑOS</th>
                    <th colspan="5">MERCADOS</th>
                </tr>
                <tr>
                    <th name="nameproducto">Producto 1</th>
                    <th name="nameproducto">Producto 2</th>
                    <th name="nameproducto">Producto 3</th>
                    <th name="nameproducto">Producto 4</th>
                    <th name="nameproducto">Producto 5</th>
                </tr>
                <tr>
                    <td>2019</td>
                    <td><input type="text" name="anoproducto1" value="<?= $tbEDGS[0][3] ?>" required ></td>
                    <td><input type="text" name="anoproducto2" value="<?= $tbEDGS[6][3] ?>" required></td>
                    <td><input type="text" name="anoproducto3" value="<?= $tbEDGS[12][3] ?>" required></td>
                    <td><input type="text" name="anoproducto4" value="<?= $tbEDGS[18][3] ?>" required></td>
                    <td><input type="text" name="anoproducto5" value="<?= $tbEDGS[24][3] ?>" required></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td><input type="text" name="anoproducto1" value="<?= $tbEDGS[1][3] ?>" required></td>
                    <td><input type="text" name="anoproducto2" value="<?= $tbEDGS[7][3] ?>" required></td>
                    <td><input type="text" name="anoproducto3" value="<?= $tbEDGS[13][3] ?>" required></td>
                    <td><input type="text" name="anoproducto4" value="<?= $tbEDGS[19][3] ?>" required></td>
                    <td><input type="text" name="anoproducto5" value="<?= $tbEDGS[25][3] ?>" required></td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td><input type="text" name="anoproducto1" value="<?= $tbEDGS[2][3] ?>" required></td>
                    <td><input type="text" name="anoproducto2" value="<?= $tbEDGS[8][3] ?>" required></td>
                    <td><input type="text" name="anoproducto3" value="<?= $tbEDGS[14][3] ?>" required></td>
                    <td><input type="text" name="anoproducto4" value="<?= $tbEDGS[20][3] ?>" required></td>
                    <td><input type="text" name="anoproducto5" value="<?= $tbEDGS[26][3] ?>" required></td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td><input type="text" name="anoproducto1" value="<?= $tbEDGS[3][3] ?>" required></td>
                    <td><input type="text" name="anoproducto2" value="<?= $tbEDGS[9][3] ?>" required></td>
                    <td><input type="text" name="anoproducto3" value="<?= $tbEDGS[15][3] ?>" required></td>
                    <td><input type="text" name="anoproducto4" value="<?= $tbEDGS[21][3] ?>" required></td>
                    <td><input type="text" name="anoproducto5" value="<?= $tbEDGS[27][3] ?>" required></td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td><input type="text" name="anoproducto1" value="<?= $tbEDGS[4][3] ?>" required></td>
                    <td><input type="text" name="anoproducto2" value="<?= $tbEDGS[10][3] ?>" required></td>
                    <td><input type="text" name="anoproducto3" value="<?= $tbEDGS[16][3] ?>" required></td>
                    <td><input type="text" name="anoproducto4" value="<?= $tbEDGS[22][3] ?>" required></td>
                    <td><input type="text" name="anoproducto5" value="<?= $tbEDGS[28][3] ?>" required></td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td><input type="text" name="anoproducto1" value="<?= $tbEDGS[5][3] ?>" required></td>
                    <td><input type="text" name="anoproducto2" value="<?= $tbEDGS[11][3] ?>" required></td>
                    <td><input type="text" name="anoproducto3" value="<?= $tbEDGS[17][3] ?>" required></td>
                    <td><input type="text" name="anoproducto4" value="<?= $tbEDGS[23][3] ?>" required></td>
                    <td><input type="text" name="anoproducto5" value="<?= $tbEDGS[29][3] ?>" required></td>
                </tr>
            </table>

            <table border="1" oninput="maxVentaCp()">
                <tr><th colspan="10">NIVELES DE VENTA DE LOS COMPETIDORES DE CADA PRODUCTO</th></tr>
                <tr>
                    <th colspan="2" name="nameproducto">Producto 1</th>
                    <th colspan="2" name="nameproducto">Producto 2</th>
                    <th colspan="2" name="nameproducto">Producto 3</th>
                    <th colspan="2" name="nameproducto">Producto 4</th>
                    <th colspan="2" name="nameproducto">Producto 5</th>
                </tr>
                <tr>
                    <th>EMPRESA</th>
                    <th name="ventasproduc"></th>
                    <th>EMPRESA</th>
                    <th name="ventasproduc"></th>
                    <th>EMPRESA</th>
                    <th name="ventasproduc"></th>
                    <th>EMPRESA</th>
                    <th name="ventasproduc"></th>
                    <th>EMPRESA</th>
                    <th name="ventasproduc"></th>
                </tr>
                <tr>
                    <td>Competidor</td>
                    <td>Ventas</td>
                    <td>Competidor</td>
                    <td>Ventas</td>
                    <td>Competidor</td>
                    <td>Ventas</td>
                    <td>Competidor</td>
                    <td>Ventas</td>
                    <td>Competidor</td>
                    <td>Ventas</td>
                </tr>
                <tr>
                    <td>CP1-1</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-1</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-1</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-1</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-2</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-2</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-2</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-2</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-3</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-3</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-3</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-3</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-4</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-4</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-4</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-4</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-5</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-5</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-5</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-5</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-6</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-6</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-6</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-6</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-7</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-7</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-7</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-7</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-8</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-8</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-8</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-8</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>CP1-9</td>
                    <td><input type="text" name="cpproducto1" required></td>
                    <td>CP2-9</td>
                    <td><input type="text" name="cpproducto2" required></td>
                    <td>CP2-9</td>
                    <td><input type="text" name="cpproducto3" required></td>
                    <td>CP2-9</td>
                    <td><input type="text" name="cpproducto4" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="cpproducto5" required></td>
                </tr>
                <tr>
                    <td>Mayor</td>
                    <td name="mayorcpproducto1">0</td>
                    <td>Mayor</td>
                    <td name="mayorcpproducto2">0</td>
                    <td>Mayor</td>
                    <td name="mayorcpproducto3">0</td>
                    <td>Mayor</td>
                    <td name="mayorcpproducto4">0</td>
                    <td>Mayor</td>
                    <td name="mayorcpproducto5">0</td>
                </tr>
            </table>

            AQUI IRA GRAFICO
            DE LA VACA Y EL PERRO
            <div class="bcg-container">
                <div class="quadrant" id="star-quadrant">
                    <img src="../../images/estrella.png" alt="estrella">
                    <div class="quadrant-label">Estrellas</div>
                </div>
                <div class="quadrant" id="question-quadrant">
                    <img src="../../images/interrogante.png" alt="Interrogante">
                    <div class="quadrant-label">Interrogantes</div>
                </div>
                <div class="quadrant" id="cashcow-quadrant">
                    <img src="../../images/vaca.png" alt="vaquita">
                    <div class="quadrant-label">Vacas Lecheras</div>
                </div>
                <div class="quadrant" id="dog-quadrant">
                    <img src="../../images/perro.png" alt="Perro">
                    <div class="quadrant-label">Perros</div>
                </div>
            </div>
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
                        <td><input type="text" name="f4" value="<?= $foda['f3'] ?>" required></td>
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
</html>