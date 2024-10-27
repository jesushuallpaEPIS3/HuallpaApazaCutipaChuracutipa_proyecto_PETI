<?php
    //require_once("../head/header.php");
?>

    <!-- <title>MATRIZ PARTICIPACION</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head> -->
<script src="script.js" defer></script>

<body>
    <div class="wrapper">
        <header>
            <h1>MATRIZ PARTICIPACION</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>dsasd</h2>
            
            <!-- </section>
            <section class="form-container"> -->

            <!-- <form method="post" action="store.php"> -->
            
            <!-- PREVISIÓN DE VENTAS -->
            <table border="1">
                <tr>
                    <th colspan="3">PREVISIÓN DE VENTAS</th>
                </tr>
                <tr>
                    <th>Productos</th>
                    <th>Ventas</th>
                    <th>% S/ TOTAL</th>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="Producto 1" oninput="actualizarPorcentajes()"></td>
                    <td><input type="number" name="ventas" oninput="actualizarPorcentajes()" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="Producto 2" oninput="actualizarPorcentajes()"></td>
                    <td><input type="number" name="ventas" oninput="actualizarPorcentajes()" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="Producto 3" oninput="actualizarPorcentajes()"></td>
                    <td><input type="number" name="ventas" oninput="actualizarPorcentajes()" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="Producto 4" oninput="actualizarPorcentajes()"></td>
                    <td><input type="number" name="ventas" oninput="actualizarPorcentajes()" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><input type="text" name="producto" value="Producto 5" oninput="actualizarPorcentajes()"></td>
                    <td><input type="number" name="ventas" oninput="actualizarPorcentajes()" placeholder="0"></td>
                    <td name="porcentaje">0.00%</td>
                </tr>
                <tr>
                    <td><strong>TOTAL</strong></td>
                    <td id="totalVentas">0</td>
                    <td id="totalPorcentaje">100.00%</td>
                </tr>
            </table>

            <!-- TASAS DE CRECIMIENTO DEL MERCADO (TCM) -->
            <table border="1">
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
                    <td><input type="text" name="producto1" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2021</td><td>2022</td>
                    <td><input type="text" name="producto1" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2023</td><td>2023</td>
                    <td><input type="text" name="producto1" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2023</td><td>2024</td>
                    <td><input type="text" name="producto1" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" required oninput="mostarSimboloPorcentaje()"></td>
                </tr>
                <tr>
                    <td>2024</td><td>2024</td>
                    <td><input type="text" name="producto1" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto2" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto3" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto4" required oninput="mostarSimboloPorcentaje()"></td>
                    <td><input type="text" name="producto5" required oninput="mostarSimboloPorcentaje()"></td>
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
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>% S/VTAS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <table border="1">
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
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>2021</td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>2022</td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>2023</td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                    <td><input type="text" name="" required></td>
                </tr>
            </table>

            <table border="1">
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
                    <th></th>
                    <th>EMPRESA</th>
                    <th></th>
                    <th>EMPRESA</th>
                    <th></th>
                    <th>EMPRESA</th>
                    <th></th>
                    <th>EMPRESA</th>
                    <th></th>
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
                    <td><input type="text" name="" required></td>
                    <td>CP2-1</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-1</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-1</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-2</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-2</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-2</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-2</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-3</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-3</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-3</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-3</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-4</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-4</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-4</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-4</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-5</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-5</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-5</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-5</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-6</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-6</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-6</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-6</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-7</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-7</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-7</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-7</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-8</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-8</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-8</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-8</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>CP1-9</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-9</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-9</td>
                    <td><input type="text" name="" required></td>
                    <td>CP2-9</td>
                    <td><input type="text" name="" required></td>
                    <td>CP3-1</td>
                    <td><input type="text" name="" required></td>
                </tr>
                <tr>
                    <td>Mayor</td>
                    <td>0</td>
                    <td>Mayor</td>
                    <td>0</td>
                    <td>Mayor</td>
                    <td>0</td>
                    <td>Mayor</td>
                    <td>0</td>
                    <td>Mayor</td>
                    <td>0</td>
                </tr>
            </table>

            AQUI IRA GRAFICO
            DE LA VACA Y EL PERRO

            <table>
                <thead>
                    <tr>
                        <th colspan="2">Fortalezas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>F3</td>
                        <td><input type="text" name="f3" required></td>
                    </tr>
                    <tr>
                        <td>F4</td>
                        <td><input type="text" name="f4" required></td>
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
                        <td><input type="text" name="d3" required></td>
                    </tr>
                    <tr>
                        <td>D4</td>
                        <td><input type="text" name="d4" required></td>
                    </tr>
                </tbody>
            </table>

            </section>
        </main>
    </div>
    <?php
    //require_once("../head/footer.php");
?>
</body>
</html>