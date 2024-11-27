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

            <table border="1">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">OPORTUNIDADES</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>02</td>
                    <td>03</td>
                    <td>04</td>
                </tr>
                <tr>
                    <td rowspan="4">FORTALEZAS</td>
                    <td>F1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>


            <table border="1">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">AMENAZAS</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>02</td>
                    <td>03</td>
                    <td>04</td>
                </tr>
                <tr>
                    <td rowspan="4">FORTALEZAS</td>
                    <td>F1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>


            <table border="1">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">OPORTUNIDADES</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>02</td>
                    <td>03</td>
                    <td>04</td>
                </tr>
                <tr>
                    <td rowspan="4">DEBILIDADES</td>
                    <td>F1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>


            <table border="1">
                <tr>
                    <td rowspan="2" colspan="2"></td>
                    <td colspan="4">OPORTUNIDADES</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>02</td>
                    <td>03</td>
                    <td>04</td>
                </tr>
                <tr>
                    <td rowspan="4">AMENAZAS</td>
                    <td>F1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>F4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>

            
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
                        <td>0</td>
                        <td>Deberá adoptar estrategias de crecimiento</td>
                    </tr>
                    <tr>
                        <td>AF</td>
                        <td>Estrategia Defensiva</td>
                        <td>0</td>
                        <td>La empresa está preparada para enfrentarse a las amenazas</td>
                    </tr>
                    <tr>
                        <td>FD</td>
                        <td>Estrategia de Supervivencia</td>
                        <td>0</td>
                        <td>Se enfrenta a amenazas externas sin las fortalezas necesarias para luchar con la competencia</td>
                    </tr>
                    <tr>
                        <td>OD</td>
                        <td>Estrategia de Reorientación</td>
                        <td>0</td>
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