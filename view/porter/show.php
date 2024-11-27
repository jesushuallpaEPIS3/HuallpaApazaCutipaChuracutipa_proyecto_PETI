<?php
    require_once("../head/header.php");
    require_once("../../controller/porterController.php");
    $obj = new porterController();
    $date = $obj->verForm($_SESSION['user_id']);
    $foda = $obj->verfoda1($_SESSION['user_id']);
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
                <?php 
            $enunciados = [
                "-Crecimiento",
                "-Naturale de los competidores" ,
                "-Exceso de capacidad productiva"	 ,
                "-Rentabilidad media del sector"	 ,
                "-Diferenciación del producto"	  ,
                "-Barreras de salidad",
                "-Economias de escala	",
                "-Necesidad de capital	",
                "-Acceso a la tecnologia	",
                "-Reglamentos o leyes limitativas	",
                "-Trámites burocráticos	",
                "-Reacción esperada actuales competidores	",
                "-Número de clientes	",
                "-Posibilidad de integración ascendente	",
                "-Rentabilidad de los clientes	",
                "-Coste de cambio de proveedor para cliente	",
                "-Disponibilidad de Productos Sustitutos"
            ];
           $clase1 = [
                "Lento",
                "Muchos",
                "Si",
                "Baja",
                "Escasa",
                "Bajas",
                "No",
                "Bajas",
                "Fácil",
                "No",
                "No",
                "Escasa",
                "Pocos",
                "Pequeña",
                "Baja",
                "Bajo",
                "Grande",
           ];

            $clase2= [
                "Rápido"
                ,"Pocos",
                "No",
                "Alta",
                "Elevada"
                ,"Altas",
                "Si",
                "Altas",
                "Difícil",
                "Si",
                "Si",
                "Energética",
                "Muchos",
                "Grande",
                "Alta",
                "Alto",
                "Pequeña"
            ]
            ?>
            <form method="post" action="store.php">
            <table border="1">
            <tbody>
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
                    <?php
                        for($i=0; $i<count($enunciados); $i++){?>
                        <?php $suma = $suma + $date[$i]['punto']; ?>
                            <tr>
                                <td><?= $enunciados[$i] ?></td>
                                <td><?= $clase1[$i] ?></td>
                                <?php
                                    for($j=1; $j<=5 ; $j++){ ?>
                                        <?php $checked = ($date[$i]['punto'] == $j) ? "checked" : "" ?>
                                        <td><input type="radio" name="puntos[<?= $i+1?>]" value="<?= $j ?>" required <?= $checked ?> ></td>
                                    <?php }?>
                                <td><?= $clase2[$i] ?></td>
                            </tr>
                        <?php } 
                    ?>
                    <tr>
                        <td colspan="7" rowspan="2">CONCLUSION</td>
                        <td>TOTAL</td>
                    </tr>
                    <tr>
                    <td name="resultado"><?= $suma ?></td>
                    </tr>
                    <tr>
                        <td colspan="8">
                            <?php
                            if($suma>60){
                                echo "Estamos en una situación excelente para la empresa.";
                            }else if($suma>45){
                                echo " La situación actual del mercado es favorable a la empresa.";
                            }else if($suma>30){
                                echo "Estamos en un mercado de competitividad relativamente alta, pero con ciertas modificaciones en el producto y la política comercial de la empresa, podría encontrarse un nicho de mercado.";
                            }else{
                                echo "Estamos en un mercado altamente competitivo, en el que es muy difícil hacerse un hueco en el mercado.";
                            }
                            ?>               
                        </td>
                    </tr>
                </tbody>
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
                        <td><input type="text" name="o1" value="<?= $foda['o1'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>O2</td>
                        <td><input type="text" name="o2" value="<?= $foda['o2'] ?>" required></td>
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
                        <td><input type="text" name="a1" value="<?= $foda['a1'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td><input type="text" name="a2" value="<?= $foda['a2'] ?>" required></td>
                    </tr>
                </tbody>
            </table>

            



            
                                    
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