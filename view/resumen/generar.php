<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir FPDF
require_once '../../config/fpdf/fpdf.php';

// Clase para manejar la conexión a la base de datos con PDO
class db {
    private $host = "db";
    private $dbname = "peti";
    private $user = "root";
    private $password = "";

    public function conexion() {
        try {
            $PDO = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8mb4",
                $this->user,
                $this->password
            );
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
}

// Verificar si se pasó el ID del usuario por GET
if (isset($_GET['id'])) {
    $userId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if (!$userId) {
        die("ID de usuario no válido");
    }

    // Conectar a la base de datos
    $db = new db();
    $conexion = $db->conexion();

    try {
        // Consultar datos del usuario
        $stmtUsuario = $conexion->prepare("SELECT id, username, password FROM usuario WHERE id = ?");
        $stmtUsuario->execute([$userId]);
        $usuario = $stmtUsuario->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            die("Usuario no encontrado");
        }

        // Consultar datos de la tabla 'informacion'
        $stmtInformacion = $conexion->prepare("SELECT nombre, descripcion FROM informacion WHERE id = ?");
        $stmtInformacion->execute([$userId]);
        $informacion = $stmtInformacion->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'mision'
        $stmtMision = $conexion->prepare("SELECT mision FROM mision WHERE id = ?");
        $stmtMision->execute([$userId]);
        $mision = $stmtMision->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'vision'
        $stmtVision = $conexion->prepare("SELECT vision FROM vision WHERE id = ?");
        $stmtVision->execute([$userId]);
        $vision = $stmtVision->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'valores'
        $stmtValores = $conexion->prepare("SELECT valores FROM valores WHERE id = ?");
        $stmtValores->execute([$userId]);
        $valores = $stmtValores->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'objetivos'
        $stmtObjetivos = $conexion->prepare("SELECT id_objetivo, descripcionObj FROM objetivos WHERE id = ?");
        $stmtObjetivos->execute([$userId]);
        $objetivos = $stmtObjetivos->fetchAll(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'obj_especificos'
        $stmtObjEspecificos = $conexion->prepare("SELECT descripcionEspObj FROM obj_especificos WHERE id_objetivo IN (SELECT id_objetivo FROM objetivos WHERE id = ?)");
        $stmtObjEspecificos->execute([$userId]);
        $objEspecificos = $stmtObjEspecificos->fetchAll(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'foda2'
        $stmtFoda2 = $conexion->prepare("SELECT * FROM foda2 WHERE id = ?");
        $stmtFoda2->execute([$userId]);
        $foda2 = $stmtFoda2->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'foda'
        $stmtFoda = $conexion->prepare("SELECT * FROM foda WHERE id = ?");
        $stmtFoda->execute([$userId]);
        $foda = $stmtFoda->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'matrizca'
        $stmtMatrizCA = $conexion->prepare("SELECT valores FROM matrizca WHERE id = ?");
        $stmtMatrizCA->execute([$userId]);
        $matrizCA = $stmtMatrizCA->fetch(PDO::FETCH_ASSOC);

        // Consultar datos de la tabla 'resumen'
        $stmtResumen = $conexion->prepare("SELECT identificacion, conclusion FROM resumen WHERE id = ?");
        $stmtResumen->execute([$userId]);
        $resumen = $stmtResumen->fetch(PDO::FETCH_ASSOC);

        // Función para convertir texto a ISO-8859-1
        function convertirTexto($texto) {
            return iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $texto);
        }

        // Crear el PDF
        $pdf = new FPDF('P', 'mm', 'letter');
        $pdf->AddPage();
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetTitle(convertirTexto("Detalles del Usuario"));

        // Encabezado general
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Detalles del Usuario'), 0, 1, 'C');
        $pdf->Ln(10);

        // Información del usuario


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, convertirTexto('Username:'), 0, 0, 'L');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, convertirTexto($usuario['username']), 0, 1, 'L');

        $pdf->Ln(10);

        // Información de Información
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Información'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($informacion['descripcion'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de Misión
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Misión'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($mision['mision'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de Visión
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Visión'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($vision['vision'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de Valores
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Valores'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($valores['valores'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de Objetivos y Específicos
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Objetivos'), 0, 1, 'C');
        foreach ($objetivos as $obj) {
            $pdf->SetFont('Arial', '', 12);
            $pdf->MultiCell(0, 10, convertirTexto($obj['descripcionObj']));
        }

        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Objetivos Específicos'), 0, 1, 'C');
        foreach ($objEspecificos as $esp) {
            $pdf->SetFont('Arial', '', 12);
            $pdf->MultiCell(0, 10, convertirTexto($esp['descripcionEspObj']));
        }
        $pdf->Ln(10);

        // Información de FODA
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('FODA'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($foda['f1'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda['f2'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda['f3'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda['f4'] ?? 'No disponible'));

        $pdf->MultiCell(0, 10, convertirTexto($foda['d1'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda['d2'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda['d3'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda['d4'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de FODA2
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('FODA2'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($foda2['o1'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda2['o2'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda2['o3'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda2['o4'] ?? 'No disponible'));

        $pdf->MultiCell(0, 10, convertirTexto($foda2['a1'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda2['a2'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda2['a3'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($foda2['a4'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de Matriz CA
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Matriz CA'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($matrizCA['valores'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Información de Resumen
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, convertirTexto('Resumen'), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, convertirTexto($resumen['identificacion'] ?? 'No disponible'));
        $pdf->MultiCell(0, 10, convertirTexto($resumen['conclusion'] ?? 'No disponible'));
        $pdf->Ln(10);

        // Salida del PDF
        header('Content-Type: application/pdf');
        ob_clean(); // Limpiar el búfer antes de generar el PDF
        $pdf->Output();
        exit;
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
    }
} else {
    die("ID de usuario no proporcionado");
