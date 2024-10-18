<?php
require_once("../head/header.php");
require_once("../../controller/visionController.php");
$obj = new visionController();
// $date = $obj->show($_GET['id'])
$date = $obj->show($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión de tu Empresa</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Visión de la Empresa</h1>
        </header>
        <main>
            <section class="info-box">
                <h2>¿Cuál es nuestra Visión?</h2>
                <p><?= $date['vision'] ?></p>
                <a href="edit.php?id=<?= $date['id']?>" class="btn btn-secondary">Modificar</a>    
            </section>
            <section>
                <h2>Autodiagnóstico de la Cadena de Valor Interna</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Pregunta</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. La empresa tiene una política sistematizada de cero defectos en la producción de productos/servicios.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2. La empresa emplea los medios productivos tecnológicamente más avanzados de su sector.</td>
                            <td></td>
                            <td></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3. La empresa dispone de un sistema de información y control de gestión eficiente y eficaz.</td>
                            <td></td>
                            <td></td>
                            <td>x</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4. Los medios técnicos y tecnológicos de la empresa están preparados para competir en un futuro a corto, medio y largo plazo.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>x</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5. La empresa es un referente en su sector en I+D+i.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6. La excelencia de los procedimientos de la empresa (en ISO, etc.) son una principal fuente de ventaja competitiva.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7. La empresa dispone de página web, y esta se emplea no sólo como escaparate virtual de productos/servicios, sino también para establecer relaciones con clientes y proveedores.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8. Los productos/servicios que desarrolla nuestra empresa llevan incorporada una tecnología difícil de imitar.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9. La empresa es referente en su sector en la optimización, en términos de coste, de su cadena de producción, siendo esta una de sus principales ventajas competitivas.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10. La informatización de la empresa es una fuente de ventaja competitiva clara respecto a sus competidores.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11. Los canales de distribución de la empresa son una importante fuente de ventajas competitivas.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12. Los productos/servicios de la empresa son altamente, y diferencialmente, valorados por el cliente respecto a nuestros competidores.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13. La empresa dispone y ejecuta un sistemático plan de marketing y ventas.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>14. La empresa tiene optimizada su gestión financiera.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>15. La empresa busca continuamente el mejorar la relación con sus clientes cortando los plazos de ejecución, personalizando la oferta o mejorando las condiciones de entrega. Pero siempre partiendo de un plan previo.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>16. La empresa es referente en su sector en el lanzamiento de innovadores productos y servicio de éxito demostrado en el mercado.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>17. Los Recursos Humanos son especialmente responsables del éxito de la empresa, considerándolos incluso como el principal activo estratégico.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>18. Se tiene una plantilla altamente motivada, que conoce con claridad las metas, objetivos y estrategias de la organización.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>19. La empresa siempre trabaja conforme a una estrategia y objetivos claros.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20. La gestión del circulante está optimizada.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>21. Se tiene definido claramente el posicionamiento estratégico de todos los productos de la empresa.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>22. Se dispone de una política de marca basada en la reputación que la empresa genera, en la gestión de relación con el cliente y en el posicionamiento estratégico previamente definido.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>23. La cartera de clientes de nuestra empresa está altamente fidelizada, ya que tenemos como principal propósito el deleitarlos día a día.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>24. La empresa tiene establecido un sistema de compensación que premia a los empleados que mejor contribuyen al éxito de la organización.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>25. La empresa tiene claramente definida su política de responsabilidad social empresarial.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>26. La empresa tiene un plan de negocio que incluye una parte importante dedicada a la sostenibilidad.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
<?php
require_once("../head/footer.php");
?>
