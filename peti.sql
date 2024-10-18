-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para peti
CREATE DATABASE IF NOT EXISTS `peti` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `peti`;

-- Volcando estructura para tabla peti.informacion
CREATE TABLE IF NOT EXISTS `informacion` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.informacion: ~1 rows (aproximadamente)
INSERT INTO `informacion` (`id`, `nombre`, `descripcion`) VALUES
	(445567, 'EcoInnovar', 'EcoInnovar es una empresa dedicada al desarrollo y la implementación de soluciones tecnológicas sostenibles que promueven el cuidado del medio ambiente. Ofrecemos productos y servicios que ayudan a reducir la huella de carbono y fomentan un estilo de vida más ecológico.');

-- Volcando estructura para tabla peti.mision
CREATE TABLE IF NOT EXISTS `mision` (
  `id` int(11) DEFAULT NULL,
  `mision` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.mision: ~1 rows (aproximadamente)
INSERT INTO `mision` (`id`, `mision`) VALUES
	(445567, 'Nuestra misión es ser líderes en innovación sostenible, ofreciendo soluciones que integren la tecnología con el respeto por el medio ambiente, contribuyendo así a un futuro más limpio y sostenible para las próximas generaciones.\r\n\r\n');

-- Volcando estructura para tabla peti.objetivos
CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) DEFAULT NULL,
  `id_objetivo` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.objetivos: ~2 rows (aproximadamente)
INSERT INTO `objetivos` (`id`, `id_objetivo`, `descripcion`) VALUES
	(445567, 1, 'objetivo1'),
	(445567, 2, 'objetivo2');

-- Volcando estructura para tabla peti.obj_especificos
CREATE TABLE IF NOT EXISTS `obj_especificos` (
  `id_objetivo` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.obj_especificos: ~4 rows (aproximadamente)
INSERT INTO `obj_especificos` (`id_objetivo`, `descripcion`) VALUES
	(1, 'objetivoespecifico1'),
	(1, 'objetivoespecifico1'),
	(2, 'objetivoespecifico2'),
	(2, 'objetivoespecifico2');

-- Volcando estructura para tabla peti.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=445569 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
	(445567, 'user123', '123');

-- Volcando estructura para tabla peti.valores
CREATE TABLE IF NOT EXISTS `valores` (
  `id` int(11) DEFAULT NULL,
  `valores` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.valores: ~5 rows (aproximadamente)
INSERT INTO `valores` (`id`, `valores`) VALUES
	(445567, 'Sostenibilidad: Comprometidos con la protección del medio ambiente en cada decisión que tomamos.'),
	(445567, 'Innovación: Fomentamos la creatividad y la búsqueda constante de nuevas soluciones que mejoren la calidad de vida.'),
	(445567, 'Integridad: Actuamos con transparencia y honestidad en todas nuestras interacciones.'),
	(445567, 'Colaboración: Trabajamos en equipo y valoramos las ideas de nuestros empleados, clientes y socios.'),
	(445567, 'Responsabilidad Social: Nos involucramos en la comunidad y apoyamos iniciativas que beneficien a la sociedad.');

-- Volcando estructura para tabla peti.vision
CREATE TABLE IF NOT EXISTS `vision` (
  `id` int(11) DEFAULT NULL,
  `vision` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.vision: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
