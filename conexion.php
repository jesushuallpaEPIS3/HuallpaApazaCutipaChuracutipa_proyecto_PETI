<?php
class Conectar {
    public static function conexion() {
        $conexion = new mysqli("localhost", "root", "", "db_peti");
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
