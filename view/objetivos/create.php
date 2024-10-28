<?php
    require_once("../head/header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivos Estratégicos</title>
    <link rel="stylesheet" href="../head/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Objetivos Estratégicos</h1>
        </header>
        <main>
            <div class="objectives-container">
                <section class="info-box">
                    <h2>Planificación Estratégica</h2>
                    <p>El siguiente paso es establecer los objetivos de su empresa en relación al sector al que pertenece. Un <strong>objetivo estratégico</strong> es un fin deseado, clave para la organización y para la consecución de su visión.</p>
                    
                    <p>Para una correcta planificación, construya los objetivos formando una pirámide. Los objetivos de cada nivel indican qué es lo que quiere lograrse, siendo la estructura de objetivos que está en el nivel inmediatamente inferior la que indica el cómo.</p>
                </section>

                <div class="metas-box">
                    <h3>Criterios METAS para Objetivos Efectivos</h3>
                    <ul class="metas-list">
                        <li class="metas-item">
                            <strong>M</strong>EDIBLES
                            <p>Que se les pueda asignar indicadores cuantitativos</p>
                        </li>
                        <li class="metas-item">
                            <strong>E</strong>SPECÍFICOS
                            <p>Que sean enunciados de forma clara, breve y comprensible</p>
                        </li>
                        <li class="metas-item">
                            <strong>T</strong>RAZABLES
                            <p>Que permita un registro de seguimiento y control</p>
                        </li>
                        <li class="metas-item">
                            <strong>A</strong>LCANZABLES
                            <p>Realistas y motivadores</p>
                        </li>
                        <li class="metas-item">
                            <strong>S</strong>ENSATOS
                            <p>Lógicos y consecuentes con los recursos disponibles</p>
                        </li>
                    </ul>
                </div>

                <form method="post" action="store.php">
                    <table class="objectives-table">
                        <thead>
                            <tr>
                                <th>Misión</th>
                                <th>Objetivos Generales</th>
                                <th>Objetivos Específicos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3">
                                    <textarea 
                                        name="mision" 
                                        placeholder="La misión se cargará automáticamente" 
                                        readonly
                                    ></textarea>
                                </td>
                                <td>
                                    <textarea 
                                        name="objetivo_estrategico_1" 
                                        placeholder="Ingrese el primer objetivo estratégico"
                                    ></textarea>
                                </td>
                                <td>
                                    <textarea 
                                        name="objetivo_especifico_1_1" 
                                        placeholder="Ingrese el objetivo específico 1.1"
                                    ></textarea>
                                    <textarea 
                                        name="objetivo_especifico_1_2" 
                                        placeholder="Ingrese el objetivo específico 1.2"
                                    ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea 
                                        name="objetivo_estrategico_2" 
                                        placeholder="Ingrese el segundo objetivo estratégico"
                                    ></textarea>
                                </td>
                                <td>
                                    <textarea 
                                        name="objetivo_especifico_2_1" 
                                        placeholder="Ingrese el objetivo específico 2.1"
                                    ></textarea>
                                    <textarea 
                                        name="objetivo_especifico_2_2" 
                                        placeholder="Ingrese el objetivo específico 2.2"
                                    ></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea 
                                        name="objetivo_estrategico_3" 
                                        placeholder="Ingrese el tercer objetivo estratégico"
                                    ></textarea>
                                </td>
                                <td>
                                    <textarea 
                                        name="objetivo_especifico_3_1" 
                                        placeholder="Ingrese el objetivo específico 3.1"
                                    ></textarea>
                                    <textarea 
                                        name="objetivo_especifico_3_2" 
                                        placeholder="Ingrese el objetivo específico 3.2"
                                    ></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="button-container">
                        <a href="../../index.php" class="btn btn-danger">Cancelar</a>
                        <button type="submit" class="btn">Guardar Objetivos</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    
    <?php require_once("../head/footer.php"); ?>

</body>
</html>