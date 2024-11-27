<?php
    require_once("../head/header.php");
    require_once("../../controller/idestrategiaController.php");
    $obj = new idestrategiaController();
    //$date = $obj->verForm($_SESSION['user_id']);
    $foda = $obj->verfodaAll($_SESSION['user_id']);
?>

    <title>Objetivos de tu Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>CADENA DE VALOR</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>10. IDENTIFICACIÓN DE ESTRATEGIAS </h2>
                <p>
                Tras el análisis realizado habiéndose identificado las oportunidades, amenazas, fortalezas y debilidades, es momento de identificar la estrategia que debe seguir en su empresa para el logro de sus objetivos empresariales.
                Se trata de realizar una Matriz Cruzada tal y como se refleja en el siguente dibujo para identificar la estrategía más conveniente a llevar a cabo.  
                </p>
                <img src="../../images/idestrategia.png" alt="sda">
            <!-- </section>
            <section class="form-container"> -->
            <p>
            Según ha ido cumplimentando en las fases anteriores, los factores internos y externos  de su empresa son los siguientes: 						
            </p>
            <table border="1">
                <tr>
                    <td rowspan="4">DEBILIDADES</td>
                    <td><?=$foda['d1']?></td>
                </tr>
                <tr>
                    <td><?=$foda['d2']?></td>
                </tr>
                <tr>
                    <td><?=$foda['d3']?></td>
                </tr>
                <tr>
                    <td><?=$foda['d4']?></td>
                </tr>
                <tr>
                    <td rowspan="4">AMENAZAS</td>
                    <td><?=$foda['a1']?></td>
                </tr>
                <tr>
                    <td><?=$foda['a2']?></td>
                </tr>
                <tr>
                    <td><?=$foda['a3']?></td>
                </tr>
                <tr>
                    <td><?=$foda['a4']?></td>
                </tr>
                <tr>
                    <td rowspan="4">FORTALEZAS</td>
                    <td><?=$foda['f1']?></td>
                </tr>
                <tr>
                    <td><?=$foda['f2']?></td>
                </tr>
                <tr>
                    <td><?=$foda['f3']?></td>
                </tr>
                <tr>
                    <td><?=$foda['f4']?></td>
                </tr>
                <tr>
                    <td rowspan="4">OPORTUNIDADES</td>
                    <td><?=$foda['o1']?></td>
                </tr>
                <tr>
                    <td><?=$foda['o2']?></td>
                </tr>
                <tr>
                    <td><?=$foda['o3']?></td>
                </tr>
                <tr>
                    <td><?=$foda['o4']?></td>
                </tr>
            </table>

            <p>
            Las fortalezas se usan para tomar ventaja en cada una las oportunidades.						
            0=En total desacuerdo, 1= No está de acuerdo, 2= Esta de acuerdo, 3= Bastante de acuerdo y 4=En total acuerdo						
            </p>
            <table border="1" oninput="actualizarFO()">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">OPORTUNIDADES</td>
                </tr>
                <tr>
                    <td>O1</td>
                    <td>O2</td>
                    <td>O3</td>
                    <td>O4</td>
                </tr>
                <tr>
                    <td rowspan="4">FORTALEZAS</td>
                    <td>F1</td>
                    <td><input type="number" min="0" max="4" step="1" name="FO1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO4[]"></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td><input type="number" min="0" max="4" step="1" name="FO1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO4[]"></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td><input type="number" min="0" max="4" step="1" name="FO1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO4[]"></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td><input type="number" min="0" max="4" step="1" name="FO1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FO4[]"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="FO">0</td>
                    <td id="FO1">0</td>
                    <td id="FO2">0</td>
                    <td id="FO3">0</td>
                    <td id="FO4">0</td>
                </tr>
            </table>

            <p>
            Las fortalezas evaden el efecto negativo de  las amenazas.						
            0=En total desacuerdo, 1= No está de acuerdo, 2= Esta de acuerdo, 3= Bastante de acuerdo y 4=En total acuerdo						
            </p>
            <table border="1" oninput="actualizarAF()">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">AMENAZAS</td>
                </tr>
                <tr>
                    <td>A1</td>
                    <td>A2</td>
                    <td>A3</td>
                    <td>A4</td>
                </tr>
                <tr>
                    <td rowspan="4">FORTALEZAS</td>
                    <td>F1</td>
                    <td><input type="number" min="0" max="4" step="1" name="AF1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF4[]"></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td><input type="number" min="0" max="4" step="1" name="AF1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF4[]"></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td><input type="number" min="0" max="4" step="1" name="AF1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF4[]"></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td><input type="number" min="0" max="4" step="1" name="AF1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="AF4[]"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="AF">0</td>
                    <td id="AF1">0</td>
                    <td id="AF2">0</td>
                    <td id="AF3">0</td>
                    <td id="AF4">0</td>
                </tr>
            </table>

            <p>
            Superamos las debilidades tomando ventaja de las oportunidades						
            0=En total desacuerdo, 1= No está de acuerdo, 2= Esta de acuerdo, 3= Bastante de acuerdo y 4=En total acuerdo						
            </p>
            <table border="1" oninput="actualizarFD()">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">OPORTUNIDADES</td>
                </tr>
                <tr>
                    <td>O1</td>
                    <td>O2</td>
                    <td>O3</td>
                    <td>O4</td>
                </tr>
                <tr>
                    <td rowspan="4">DEBILIDADES</td>
                    <td>F1</td>
                    <td><input type="number" min="0" max="4" step="1" name="FD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD4[]"></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td><input type="number" min="0" max="4" step="1" name="FD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD4[]"></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td><input type="number" min="0" max="4" step="1" name="FD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD4[]"></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td><input type="number" min="0" max="4" step="1" name="FD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="FD4[]"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="FD">0</td>
                    <td id="FD1">0</td>
                    <td id="FD2">0</td>
                    <td id="FD3">0</td>
                    <td id="FD4">0</td>
                </tr>
            </table>

            <p>
            Las debilidades intensifican notablemente el efecto negativo de las amenazas						
            0=En total desacuerdo, 1= No está de acuerdo, 2= Esta de acuerdo, 3= Bastante de acuerdo y 4=En total acuerdo						
            </p>
            <table border="1" oninput="actualizarOD()">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">AMENAZAS</td>
                </tr>
                <tr>
                    <td>A1</td>
                    <td>A2</td>
                    <td>A3</td>
                    <td>A4</td>
                </tr>
                <tr>
                    <td rowspan="4">DEBILIDADES</td>
                    <td>D1</td>
                    <td><input type="number" min="0" max="4" step="1" name="OD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD4[]"></td>
                </tr>
                <tr>
                    <td>D2</td>
                    <td><input type="number" min="0" max="4" step="1" name="OD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD4[]"></td>
                </tr>
                <tr>
                    <td>D3</td>
                    <td><input type="number" min="0" max="4" step="1" name="OD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD4[]"></td>
                </tr>
                <tr>
                    <td>D4</td>
                    <td><input type="number" min="0" max="4" step="1" name="OD1[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD2[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD3[]"></td>
                    <td><input type="number" min="0" max="4" step="1" name="OD4[]"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="OD">0</td>
                    <td id="OD1">0</td>
                    <td id="OD2">0</td>
                    <td id="OD3">0</td>
                    <td id="OD4">0</td>
                </tr>
            </table>

            <p>
            SINTESIS DE RESULTADOS
            </p>
            <TABLE border="1">
                    <tr>
                        <td>Relaciones</td>
                        <td>Tipologia de estrategia</td>
                        <td>Puntuacion</td>
                        <td>Descripcion</td>
                    </tr>
                <tbody>
                    <tr>
                        <td>FO</td>
                        <td>Estrategia Ofensiva</td>
                        <td id="FOtotal">0</td>
                        <td>Deberá adoptar estrategias de crecimiento</td>
                    </tr>
                    <tr>
                        <td>AF</td>
                        <td>Estrategia Defensiva</td>
                        <td id="AFtotal">0</td>
                        <td>La empresa está preparada para enfrentarse a las amenazas</td>
                    </tr>
                    <tr>
                        <td>FD</td>
                        <td>Estrategia de Supervivencia</td>
                        <td id="FDtotal">0</td>
                        <td>Se enfrenta a amenazas externas sin las fortalezas necesarias para luchar con la competencia</td>
                    </tr>
                    <tr>
                        <td>OD</td>
                        <td>Estrategia de Reorientación</td>
                        <td id="ODtotal">0</td>
                        <td>La empresa no puede aprovechar las oportunidades porque carece de preparación adecuada</td>
                    </tr>
                </tbody>
            </TABLE>

            La puntuacion mayor le indica la estrategia que deberá llevar a cabo

            </section>
        </main>
    </div>
    <?php
    require_once("../head/footer.php");
?>
</body>
</html>