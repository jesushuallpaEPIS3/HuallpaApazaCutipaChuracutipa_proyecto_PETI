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

-- Volcando estructura para tabla peti.bcg
CREATE TABLE IF NOT EXISTS `bcg` (
  `id` int(11) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `tcm` int(11) DEFAULT NULL,
  `prm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.bcg: ~0 rows (aproximadamente)

-- Volcando estructura para tabla peti.cadenavalor
CREATE TABLE IF NOT EXISTS `cadenavalor` (
  `id` int(11) DEFAULT NULL,
  `enunciado` int(11) DEFAULT NULL,
  `punto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.cadenavalor: ~25 rows (aproximadamente)
INSERT INTO `cadenavalor` (`id`, `enunciado`, `punto`) VALUES
	(445567, 1, 2),
	(445567, 2, 2),
	(445567, 3, 3),
	(445567, 4, 3),
	(445567, 5, 3),
	(445567, 6, 3),
	(445567, 7, 2),
	(445567, 8, 2),
	(445567, 9, 2),
	(445567, 10, 2),
	(445567, 11, 3),
	(445567, 12, 2),
	(445567, 13, 2),
	(445567, 14, 2),
	(445567, 15, 2),
	(445567, 16, 2),
	(445567, 17, 2),
	(445567, 18, 4),
	(445567, 19, 2),
	(445567, 20, 4),
	(445567, 21, 2),
	(445567, 22, 4),
	(445567, 23, 3),
	(445567, 24, 3),
	(445567, 25, 3);

-- Volcando estructura para tabla peti.evo_demanda_global
CREATE TABLE IF NOT EXISTS `evo_demanda_global` (
  `id` int(11) DEFAULT NULL,
  `anio` varchar(50) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.evo_demanda_global: ~30 rows (aproximadamente)
INSERT INTO `evo_demanda_global` (`id`, `anio`, `producto`, `valor`, `cod`) VALUES
	(445567, '1', '1', '1', 1),
	(445567, '2', '1', '2', 2),
	(445567, '3', '1', '3', 3),
	(445567, '4', '1', '4', 4),
	(445567, '5', '1', '5', 5),
	(445567, NULL, '1', '6', 6),
	(445567, '0', '2', '7', 7),
	(445567, '0', '2', '3', 8),
	(445567, '0', '2', '21', 9),
	(445567, NULL, '2', '3', 10),
	(445567, '6', '2', '12', 11),
	(445567, '7', '2', '3', 12),
	(445567, '8', '3', '8', 13),
	(445567, NULL, '3', '9', 14),
	(445567, '9', '3', NULL, 15),
	(445567, '12', '3', '11', 16),
	(445567, '13', '3', '666', 17),
	(445567, '14', '3', '21', 18),
	(445567, '15', '4', '10', 19),
	(445567, '2', '4', '12', 20),
	(445567, NULL, '4', '31', 21),
	(445567, NULL, '4', '22', 22),
	(445567, NULL, '4', '12222', 23),
	(445567, NULL, '4', '13', 24),
	(445567, NULL, '5', '11', 25),
	(445567, NULL, '5', '10', 26),
	(445567, NULL, '5', '11', 27),
	(445567, NULL, '5', '12', 28),
	(445567, NULL, '5', '10', 29),
	(445567, NULL, '5', '34', 30);

-- Volcando estructura para tabla peti.foda
CREATE TABLE IF NOT EXISTS `foda` (
  `id` int(11) DEFAULT NULL,
  `f1` text DEFAULT NULL,
  `f2` text DEFAULT NULL,
  `f3` text DEFAULT NULL,
  `f4` text DEFAULT NULL,
  `d1` text DEFAULT NULL,
  `d2` text DEFAULT NULL,
  `d3` text DEFAULT NULL,
  `d4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.foda: ~1 rows (aproximadamente)
INSERT INTO `foda` (`id`, `f1`, `f2`, `f3`, `f4`, `d1`, `d2`, `d3`, `d4`) VALUES
	(445567, 'Fortaleza 1', 'Fortaleza 2', 'Fortaleza 3', 'Fortaleza 4', 'Debilidad 1', 'Debilidad 2', 'Debilidad 3', 'Debilidad 4');

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

-- Volcando estructura para tabla peti.niv_venta_competidor
CREATE TABLE IF NOT EXISTS `niv_venta_competidor` (
  `id` int(11) DEFAULT NULL,
  `competidor` varchar(50) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.niv_venta_competidor: ~45 rows (aproximadamente)
INSERT INTO `niv_venta_competidor` (`id`, `competidor`, `producto`, `valor`, `cod`) VALUES
	(445567, NULL, '1', 13, 1),
	(445567, NULL, '1', 14, 2),
	(445567, NULL, '1', 12, 3),
	(445567, NULL, '1', 32, 4),
	(445567, NULL, '1', 12, 5),
	(445567, NULL, '1', 31, 6),
	(445567, NULL, '1', 12, 7),
	(445567, NULL, '1', 21, 8),
	(445567, NULL, '1', 12, 9),
	(445567, NULL, '2', 11, 10),
	(445567, NULL, '2', 12, 11),
	(445567, NULL, '2', 1, 12),
	(445567, NULL, '2', 32, 13),
	(445567, NULL, '2', 2, 14),
	(445567, NULL, '2', 3, 15),
	(445567, NULL, '2', 4, 16),
	(445567, NULL, '2', 12, 17),
	(445567, NULL, '2', 5, 18),
	(445567, NULL, '3', 6, 19),
	(445567, NULL, '3', 32, 20),
	(445567, NULL, '3', 23, 21),
	(445567, NULL, '3', 32, 22),
	(445567, NULL, '3', 12, 23),
	(445567, NULL, '3', 12, 24),
	(445567, NULL, '3', 21, 25),
	(445567, NULL, '3', 12, 26),
	(445567, NULL, '3', 11, 27),
	(445567, NULL, '4', 32, 28),
	(445567, NULL, '4', 12, 29),
	(445567, NULL, '4', 42, 30),
	(445567, NULL, '4', 12, 31),
	(445567, NULL, '4', 21, 32),
	(445567, NULL, '4', 12, 33),
	(445567, NULL, '4', 12, 34),
	(445567, NULL, '4', 31, 35),
	(445567, NULL, '4', 12, 36),
	(445567, NULL, '5', 12, 37),
	(445567, NULL, '5', 21, 38),
	(445567, NULL, '5', 51, 39),
	(445567, NULL, '5', 31, 40),
	(445567, NULL, '5', 22, 41),
	(445567, NULL, '5', 12, 42),
	(445567, NULL, '5', 12, 43),
	(445567, NULL, '5', 1, 44),
	(445567, NULL, '5', 11, 45);

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

-- Volcando estructura para tabla peti.prevision_ventas
CREATE TABLE IF NOT EXISTS `prevision_ventas` (
  `id` int(11) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.prevision_ventas: ~5 rows (aproximadamente)
INSERT INTO `prevision_ventas` (`id`, `producto`, `venta`) VALUES
	(445567, 'Produccto 1', NULL),
	(445567, 'Produccto 2', 65),
	(445567, 'Produccto 3', NULL),
	(445567, 'Produccto 4', 70),
	(445567, 'Produccto 5', NULL);

-- Volcando estructura para tabla peti.tcm
CREATE TABLE IF NOT EXISTS `tcm` (
  `id` int(11) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.tcm: ~25 rows (aproximadamente)
INSERT INTO `tcm` (`id`, `periodo`, `producto`, `valor`, `cod`) VALUES
	(445567, '2020-2021', '1', '1%', 1),
	(445567, NULL, '1', '2%', 2),
	(445567, NULL, '1', '3%', 3),
	(445567, NULL, '1', '4', 4),
	(445567, NULL, '1', '5', 5),
	(445567, '2020-2021', '2', '6', 6),
	(445567, NULL, '2', '7', 7),
	(445567, NULL, '2', '8', 8),
	(445567, NULL, '2', '9', 9),
	(445567, NULL, '2', '10', 10),
	(445567, '2020-2021', '3', '0', 11),
	(445567, '2020-2021', '3', '11', 12),
	(445567, NULL, '3', '12', 13),
	(445567, NULL, '3', '12', 14),
	(445567, NULL, '3', '0', 15),
	(445567, NULL, '4', '0', 16),
	(445567, NULL, '4', '13', 17),
	(445567, NULL, '4', '14', 18),
	(445567, NULL, '4', '15', 19),
	(445567, NULL, '4', '0', 20),
	(445567, '2020-2021', '5', '16', 21),
	(445567, NULL, '5', '17', 22),
	(445567, NULL, '5', '18', 23),
	(445567, NULL, '5', '0', 24),
	(445567, NULL, '5', '0', 25);

-- Volcando estructura para tabla peti.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=445569 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.usuario: ~2 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
	(445567, 'user123', '123'),
	(445568, '123', '123');

-- Volcando estructura para tabla peti.valores
CREATE TABLE IF NOT EXISTS `valores` (
  `id` int(11) DEFAULT NULL,
  `valores` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.valores: ~0 rows (aproximadamente)

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
