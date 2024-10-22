<?php
    //require_once("../head/header.php");
?>

    <title>Objetivos de tu Empresa</title>
    <!-- <link rel="stylesheet" href="../head/styles.css"> -->
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
            <form method="post" action="store.php">
            
            <?php 
            $enunciados = [
                "1. La empresa tiene una política sistematizada de cero defectos en la producción de productos/servicios.",
                "2. La empresa emplea los medios productivos tecnológicamente más avanzados de su sector.",
                "3. La empresa dispone de un sistema de información y control de gestión  eficiente y eficaz. ",
                "4. Los medios técnicos y técnológicos de la empresa están preparados para competir en un futuro a corto, medio y largo plazo.",
                // Agregar el resto de los enunciados...
            ];
            ?>
            
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
                                    for($j=0; $j<=4 ; $j++){ ?>
                                        <td><input type="radio" name="p<?= $i+1 ?>" value="<?= $j ?>"></td>
                                    <?php } ?> 
                                ?>
                            </tr>
                        <?php } ?>
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