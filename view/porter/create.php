<?php
    require_once("../head/header.php");
?>

    <title>Objetivos de tu Empresa</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>MATRIZ DE PORTER</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>8. ANALISIS EXTERNO MICROENTORNO: MATRIZ DE PORTER</h2>
                <p>
                El Modelo de las 5 Fuerzas de Porter estudia un determinado negocio en función de la amenaza de nuevos competidores y productos sustituivos, así como el poder de negociación de los proveedores y clientes, teniendo en cuenta el grado de competencia del sector. Esto proporciona una clara imagen de la situación competitiva de un mercado en concreto. El conjunto de las cinco fuerzas determina la intensidad competitiva, la rentabilidad del sector y, de forma derivada, las posibilidades futuras de éste. Por ejemplo, si un sector está obteniendo rendimientos escasos, es dudoso que disponga de recursos para financiar el desarrollo de productos sustitutivos dentro del mismo sector.
                </p>
                <img src="../../images/porter.png" alt="">
            <form method="post" action="store.php">

            <table border ="1">
                <tr>
                    <td>PERFIL COMPETITIVO</td>
                    <td>Hostil</td>
                    <td>Nada</td>
                    <td>Poco</td>
                    <td>Medio</td>
                    <td>Alto</td>
                    <td>Muy Alto</td>
                    <td>FAVORABLE</td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td>Rivalidad empresas del sector</td>
                    <td colspan="7"></td>
                </tr>
                <tr>
                    <td>-Crecimiento</td>
                    <td>Lento</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Rápido</td>
                </tr>
                <tr>
                    <td>-Naturaleza de los competidores</td>
                    <td>Muchos</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="natur[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Pocos</td>
                </tr>
                <tr>
                    <td>-Exceso de capacidad productiva</td>
                    <td>Si</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>No</td>
                </tr>
                <tr>
                    <td>-Rentabilidad media del sector</td>
                    <td>Baja</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Alta</td>
                </tr>
                <tr>
                    <td>-Diferenciación del producto</td>
                    <td>Escasa</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Elevada</td>
                </tr>
                <tr>
                    <td>-Barreras de salidad</td>
                    <td>Bajas</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Altas</td>
                </tr>
                <!--  -->
                <!--  -->
                <tr>
                    <td>Barreras de Entrada</td>
                    <td colspan="7"></td>
                </tr>
                <tr>
                    <td>-Economias de escala</td>
                    <td>No</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Si</td>
                </tr>
                <tr>
                    <td>-Necesidad de capital</td>
                    <td>Bajas</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="natur[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Altas</td>
                </tr>
                <tr>
                    <td>-Acceso a la tecnologia</td>
                    <td>Fácil</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Dificil</td>
                </tr>
                <tr>
                    <td>-Reglamentos o leyes limitativas</td>
                    <td>No</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Si</td>
                </tr>
                <tr>
                    <td>-Trámites burocráticos</td>
                    <td>No</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Si</td>
                </tr>
                <tr>
                    <td>-Reacción esperada actuales competidores</td>
                    <td>Escasa</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Energética</td>
                </tr>
                <!--  -->
                <!--  -->
                <tr>
                    <td>Poder de los Clientes</td>
                    <td colspan="7"></td>
                </tr>
                <tr>
                    <td>-Número de clientes</td>
                    <td>Pocos</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Muchos</td>
                </tr>
                <tr>
                    <td>-Posibilidad de integración ascendente</td>
                    <td>Pequeña</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="natur[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Grande</td>
                </tr>
                <tr>
                    <td>-Rentabilidad de los clientes</td>
                    <td>Baja</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Alta</td>
                </tr>
                <tr>
                    <td>-Coste de cambio de proveedor para cliente</td>
                    <td>Bajo</td>
                    <?php
                    for($j=1; $j<=5 ; $j++){ ?>
                    <td><input type="radio" name="creci[<?= $i+1?>]" value="<?= $j ?>" required></td>
                    <?php }?>
                    <td>Alto</td>
                </tr>
            </table>

            <table>
                <thead>
                    <tr>
                        <th colspan="2">Oportunidades</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>O1</td>
                        <td><input type="text" name="f1" required></td>
                    </tr>
                    <tr>
                        <td>O2</td>
                        <td><input type="text" name="f2" required></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Amenazas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A1</td>
                        <td><input type="text" name="d1" required></td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td><input type="text" name="d2" required></td>
                    </tr>
                </tbody>
            </table>















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
                                        <td><input type="radio" name="puntos[<?= $i+1?>]" value="<?= $j ?>" required></td>
                                    <?php }?>
                            </tr>
                        <?php } 
                    ?>


                </tbody>
                
            </table>

            <br>
            <div class>
                <label>Reflexione sobre el resultado obtenido. Anote aquellas observaciones que puedan ser de su interés. Identifique sus fortalezas y debilidades respecto a su cadena de valor </label>
                <input type="text" class="form-control" name="descripcion">
            </div>
                                    
            <!-- FODA -->

            

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