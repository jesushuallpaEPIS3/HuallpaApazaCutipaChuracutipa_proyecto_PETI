<?php
    require_once("../head/header.php");
    require_once("../../controller/pestController.php");
    $obj = new pestController();
    $date = $obj->verForm($_SESSION['user_id']);
    $foda = $obj->verfoda2($_SESSION['user_id']);
?>

    <title>Objetivos de tu Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="script.js" defer></script>
<body>
    <div class="wrapper">
        <header>
            <h1>9. ANÁLISIS EXTERNO MACROENTORNO: PEST</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>PEST</h2>
                <!-- <div id="bar-chart" style="width:600px;height:400px;"></div> -->
                <canvas id="myBarChart" width="400" height="200"></canvas>            
            <!-- </section>
            <section class="form-container"> -->

            <?php 
            $suma = 0;
           $enunciados = [
                "1. Los cambios en la composición étnica de los consumidores de nuestro mercado están teniendo un notable impacto.",
                "2. El envejecimiento de la población tiene un importante impacto en la demanda.",
                "3. Los nuevos estilos de vida y tendencias originan cambios en la oferta de nuestro sector.",
                "4. El envejecimiento de la población tiene un importante impacto en la oferta del sector donde operamos.",
                "5. Las variaciones en el nivel de riqueza de la población impactan considerablemente en la demanda de los productos/servicios del sector donde operamos.",
                "6. La legislación fiscal afecta muy considerablemente a la economía de las empresas del sector donde operamos.",
                "7. La legislación laboral afecta muy considerablemente a la operativa del sector donde actuamos.",
                "8. Las subvenciones otorgadas por las Administraciones Públicas son claves en el desarrollo competitivo del mercado donde operamos.",
                "9. El impacto que tiene la legislación de protección al consumidor, en la manera de producir bienes y/o servicios es muy importante.",
                "10. La normativa autonómica tiene un impacto considerable en el funcionamiento del sector donde actuamos.",
                "11. Las expectativas de crecimiento económico generales afectan crucialmente al mercado donde operamos.",
                "12. La política de tipos de interés es fundamental en el desarrollo financiero del sector donde trabaja nuestra empresa.",
                "13. La globalización permite a nuestra industria gozar de importantes oportunidades en nuevos mercados.",
                "14. La situación del empleo es fundamental para el desarrollo económico de nuestra empresa y nuestro sector.",
                "15. Las expectativas del ciclo económico de nuestro sector impactan en la situación económica de sus empresas.",
                "16. Las Administraciones Públicas están incentivando el esfuerzo tecnológico de las empresas de nuestro sector.",
                "17. Internet, el comercio electrónico, el wireless y otras NTIC están impactando en la demanda de nuestros productos/servicios y en los de la competencia.",
                "18. El empleo de NTICs es generalizado en el sector donde trabajamos.",
                "19. En nuestro sector, es de gran importancia ser pionero o referente en el empleo de aplicaciones tecnológicas.",
                "20. En el sector donde operamos, para ser competitivos, es condición 'sine qua non' innovar constantemente.",
                "21. La legislación medioambiental afecta al desarrollo de nuestro sector.",
                "22. Los clientes de nuestro mercado exigen que se seamos socialmente responsables, en el plano medioambiental.",
                "23. En nuestro sector, las políticas medioambientales son una fuente de ventajas competitivas.",
                "24. La creciente preocupación social por el medio ambiente impacta notablemente en la demanda de productos/servicios ofertados en nuestro mercado.",
                "25. El factor ecológico es una fuente de diferenciación clara en el sector donde opera nuestra empresa.",
            ];
            ?>
            <form method="post" action="store.php">
            <table border="1" oninput="generarConclusiones(); maxVentaCp();">
                <tr>
                        <th rowspan="3">AUTODIAGNÓSTICO ENTORNO GLOBAL P.E.S.T.</tthd>
                        <th colspan="5">Valoracion</th>
                    </tr>
                    <tr>
                        <th>En total desacuerdo</th>
                        <th>No está de acuerdo</th>
                        <th>Está de acuerdo</th>
                        <th>Está bastante de acuerdo</th>
                        <th>En total acuerdo</th>
                    </tr>
                    <tr>
                        <th>0</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                <tbody>
                    <?php
                        for($i=0; $i<count($enunciados); $i++){?>
                            <?php $suma = $suma + $date[$i]['punto']; ?>
                            <tr>
                                <td><?= $enunciados[$i] ?></td>
                                <?php
                                    for($j=0; $j<=4 ; $j++){ ?>
                                        <?php $checked = ($date[$i]['punto'] == $j) ? "checked" : "" ?>
                                        <td><input type="radio" name="puntos[<?= $i+1?>]" value="<?= $j ?>" required <?= $checked ?> ></td>
                                    <?php }?>
                            </tr>
                        <?php } 
                    ?>
                    <tr><td colspan="6" name="conclu">CONCLUSIONES</td></tr>
                    <tr><td colspan="6" name="conclu">CONCLUSIONES</td></tr>
                    <tr><td colspan="6" name="conclu">CONCLUSIONES</td></tr>
                    <tr><td colspan="6" name="conclu">CONCLUSIONES</td></tr>
                    <tr><td colspan="6" name="conclu">CONCLUSIONES</td></tr>


                </tbody>
                
            </table>

            <br>
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Fortalezas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>O3</td>
                        <td><input type="text" name="o3" value="<?= $foda['o3'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>O2</td>
                        <td><input type="text" name="o4" value="<?= $foda['o4'] ?>" required></td>
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
                        <td>A3</td>
                        <td><input type="text" name="a3" value="<?= $foda['a3'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td><input type="text" name="a4" value="<?= $foda['a4'] ?>" required></td>
                    </tr>
                </tbody>
            </table>
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
