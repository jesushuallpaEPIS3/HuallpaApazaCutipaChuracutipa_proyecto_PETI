-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
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
	(445567, 'En EcoSolutions, nos comprometemos a ofrecer soluciones sostenibles e innovadoras que promuevan un futuro más limpio y saludable. Nuestra misión es empoderar a las comunidades a través de productos ecológicos y servicios que reduzcan el impacto ambiental, fomenten la economía circular y mejoren la calidad de vida. Trabajamos con pasión y dedicación para inspirar un cambio positivo en el mundo, promoviendo la conciencia ambiental y la responsabilidad social.');

-- Volcando estructura para tabla peti.objetivos
CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) DEFAULT NULL,
  `id_objetivo` int(11) DEFAULT NULL,
  `descripcionObj` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.objetivos: ~3 rows (aproximadamente)
INSERT INTO `objetivos` (`id`, `id_objetivo`, `descripcionObj`) VALUES
	(445567, 1, 'objetivo1'),
	(445567, 2, 'objetivo2'),
	(445567, 3, 'objetivo3');

-- Volcando estructura para tabla peti.obj_especificos
CREATE TABLE IF NOT EXISTS `obj_especificos` (
  `id_objetivo` int(11) DEFAULT NULL,
  `descripcionEspObj` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.obj_especificos: ~6 rows (aproximadamente)
INSERT INTO `obj_especificos` (`id_objetivo`, `descripcionEspObj`) VALUES
	(1, 'objetivo1.1'),
	(1, 'objetivo1.2'),
	(2, 'objetivo2.1'),
	(2, 'objetivo2.2'),
	(3, 'objetivo3.1'),
	(3, 'objetivo3.2');

-- Volcando estructura para tabla peti.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

-- Volcando datos para la tabla peti.vision: ~1 rows (aproximadamente)
INSERT INTO `vision` (`id`, `vision`) VALUES
	(445567, 'Ser líderes globales en la transformación hacia un futuro sostenible, donde cada persona y comunidad tenga acceso a soluciones ecológicas que preserven nuestro planeta. Aspiramos a inspirar un movimiento mundial hacia la conciencia ambiental y la innovación, convirtiéndonos en un referente de integridad y responsabilidad en la industria, mientras creamos un legado duradero de bienestar para las generaciones futuras.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
