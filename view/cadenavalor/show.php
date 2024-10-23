<?php
    require_once("../head/header.php");
    require_once("../../controller/cadenavalorController.php");
    $obj = new cadenavalorController();
    $date = $obj->verForm($_SESSION['user_id']);
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
                <h2>tablita</h2>
            
            <!-- </section>
            <section class="form-container"> -->

            <?php 
            $enunciados = [
                "1. La empresa tiene una política sistematizada de cero defectos en la producción de productos/servicios.",
                "2. La empresa emplea los medios productivos tecnológicamente más avanzados de su sector.",
                "3. La empresa dispone de un sistema de información y control de gestión  eficiente y eficaz. ",
                "4. Los medios técnicos y técnológicos de la empresa están preparados para competir en un futuro a corto, medio y largo plazo.",
                "5. La empresa es un referente en su sector en I+D+i.",
                "6. La excelencia de los procedimientos de la empresa (en ISO, etc.) son una principal fuente de ventaja competiva.",
                "7. La empresa dispone de página web, y esta se emplea no sólo como escaparate virtual de productos/servicios, sino también para establecer relaciones con clientes y proveedores.",
                "8. Los productos/servicios que desarrolla nuestra empresa llevan incorporada una tecnología difícil de imitar.",
                "9. La empresa es referente en su sector en la optimización, en términos de coste,  de su cadena de producción, siendo ésta una de sus principales ventajas competitivas.",
                "10. La informatización de la empresa es una fuente de ventaja competitiva clara respecto a sus competidores.",
                "11. Los canales de distribución de la empresa son una importante fuente de ventajas competitivas.",
                "12. Los productos/servicios de la empresa son altamente, y diferencialmente, valorados por el cliente respecto a nuestros competidores.",
                "13. La empresa dispone y ejecuta un sistematico plan de marketing y ventas.",
                "14. La empresa tiene optimizada su gestión financiera.",
                "15. La empresa busca continuamente el mejorar la relación con sus clientes cortando los plazos de ejecución, personalizando la oferta o mejorando las condiciones de entrega. Pero siempre partiendo de un plan previo.",
                "16. La empresa es referente en su sector en el lanzamiento de innovadores productos y servicio de éxito demostrado en el mercado.",
                "17. Los Recursos Humanos son especialmente responsables del éxito de la empresa, considerándolos incluso como el principal activo estratégico.",
                "18. Se tiene una plantilla altamente motivada, que conoce con claridad las metas, objetivos y estrategias de la organización.",
                "19. La empresa siempre trabaja conforme a una estrategia y objetivos claros. ",
                "20. La gestión del circulante está optimizada.",
                "21. Se tiene definido claramente el posicionamiento estratégico de todos los productos de la empresa.",
                "22. Se dispone de una política de marca basada en la reputación que la empresa genera, en la gestión de relación con el cliente y en el posicionamiento estratégico previamente definido.",
                "23. La cartera de clientes de nuestra empresa está altamente fidelizada, ya que tenemos como principal propósito el deleitarlos día a día.",
                "24. Nuestra política y equipo de ventas y marketing es una importante ventaja competitiva de nuestra empresa respecto al sector.",
                "25. El servicio al cliente que prestamos es uno de nuestras principales ventajas competitivas respecto a nuestros competidores.",
            ];
            ?>
            <form method="post" action="store.php">
            <table border="1">
                <th>
                    <tr>
                        <th rowspan="2">AUTODIAGNÓSTICO DE LA CADENA DE VALOR INTERNA</tthd>
                        <th colspan="5">Valoracion</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </th>
                <tbody>
                    <?php
                        for($i=0; $i<count($enunciados); $i++){?>
                            <tr>
                                <td><?= $enunciados[$i] ?></td>
                                <?php
                                    for($j=1; $j<=5 ; $j++){ ?>
                                        <?php $checked = ($date[$i]['punto'] == $j) ? "checked" : "" ?>
                                        <td><input type="radio" name="puntos[<?= $i+1?>]" value="<?= $j ?>" required <?= $checked ?> ></td>
                                    <?php }?>
                            </tr>
                        <?php } 
                    ?>


                </tbody>
                
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