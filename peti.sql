-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
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

-- Volcando datos para la tabla peti.cadenavalor: ~75 rows (aproximadamente)
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
	(445567, 25, 3),
	(445569, 1, 3),
	(445569, 2, 2),
	(445569, 3, 2),
	(445569, 4, 3),
	(445569, 5, 2),
	(445569, 6, 2),
	(445569, 7, 2),
	(445569, 8, 2),
	(445569, 9, 2),
	(445569, 10, 2),
	(445569, 11, 2),
	(445569, 12, 2),
	(445569, 13, 3),
	(445569, 14, 2),
	(445569, 15, 2),
	(445569, 16, 2),
	(445569, 17, 2),
	(445569, 18, 2),
	(445569, 19, 4),
	(445569, 20, 2),
	(445569, 21, 2),
	(445569, 22, 2),
	(445569, 23, 2),
	(445569, 24, 2),
	(445569, 25, 3),
	(445570, 1, 1),
	(445570, 2, 2),
	(445570, 3, 4),
	(445570, 4, 3),
	(445570, 5, 5),
	(445570, 6, 3),
	(445570, 7, 2),
	(445570, 8, 4),
	(445570, 9, 3),
	(445570, 10, 5),
	(445570, 11, 3),
	(445570, 12, 3),
	(445570, 13, 5),
	(445570, 14, 3),
	(445570, 15, 2),
	(445570, 16, 3),
	(445570, 17, 2),
	(445570, 18, 3),
	(445570, 19, 2),
	(445570, 20, 3),
	(445570, 21, 3),
	(445570, 22, 3),
	(445570, 23, 2),
	(445570, 24, 2),
	(445570, 25, 3);

-- Volcando estructura para tabla peti.evo_demanda_global
CREATE TABLE IF NOT EXISTS `evo_demanda_global` (
  `id` int(11) DEFAULT NULL,
  `anio` varchar(50) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.evo_demanda_global: ~90 rows (aproximadamente)
INSERT INTO `evo_demanda_global` (`id`, `anio`, `producto`, `valor`, `cod`) VALUES
	(445567, NULL, '1', '1%', 121),
	(445567, NULL, '1', '2%', 122),
	(445567, NULL, '1', '3%', 123),
	(445567, NULL, '1', '4%', 124),
	(445567, NULL, '1', '5%', 125),
	(445567, NULL, '1', '6%', 126),
	(445567, NULL, '2', '7%', 127),
	(445567, NULL, '2', '3%', 128),
	(445567, NULL, '2', '21%', 129),
	(445567, NULL, '2', '3%', 130),
	(445567, NULL, '2', '12%', 131),
	(445567, NULL, '2', '3%', 132),
	(445567, NULL, '3', '8%', 133),
	(445567, NULL, '3', '9%', 134),
	(445567, NULL, '3', '32%', 135),
	(445567, NULL, '3', '11%', 136),
	(445567, NULL, '3', '666%', 137),
	(445567, NULL, '3', '21%', 138),
	(445567, NULL, '4', '10%', 139),
	(445567, NULL, '4', '12%', 140),
	(445567, NULL, '4', '31%', 141),
	(445567, NULL, '4', '22%', 142),
	(445567, NULL, '4', '12222%', 143),
	(445567, NULL, '4', '13%', 144),
	(445567, NULL, '5', '11%', 145),
	(445567, NULL, '5', '10%', 146),
	(445567, NULL, '5', '11%', 147),
	(445567, NULL, '5', '12%', 148),
	(445567, NULL, '5', '10%', 149),
	(445567, NULL, '5', '34%', 150),
	(445569, NULL, NULL, NULL, 151),
	(445569, NULL, NULL, NULL, 152),
	(445569, NULL, NULL, NULL, 153),
	(445569, NULL, NULL, NULL, 154),
	(445569, NULL, NULL, NULL, 155),
	(445569, NULL, NULL, NULL, 156),
	(445569, NULL, NULL, NULL, 157),
	(445569, NULL, NULL, NULL, 158),
	(445569, NULL, NULL, NULL, 159),
	(445569, NULL, NULL, NULL, 160),
	(445569, NULL, NULL, NULL, 161),
	(445569, NULL, NULL, NULL, 162),
	(445569, NULL, NULL, NULL, 163),
	(445569, NULL, NULL, NULL, 164),
	(445569, NULL, NULL, NULL, 165),
	(445569, NULL, NULL, NULL, 166),
	(445569, NULL, NULL, NULL, 167),
	(445569, NULL, NULL, NULL, 168),
	(445569, NULL, NULL, NULL, 169),
	(445569, NULL, NULL, NULL, 170),
	(445569, NULL, NULL, NULL, 171),
	(445569, NULL, NULL, NULL, 172),
	(445569, NULL, NULL, NULL, 173),
	(445569, NULL, NULL, NULL, 174),
	(445569, NULL, NULL, NULL, 175),
	(445569, NULL, NULL, NULL, 176),
	(445569, NULL, NULL, NULL, 177),
	(445569, NULL, NULL, NULL, 178),
	(445569, NULL, NULL, NULL, 179),
	(445569, NULL, NULL, NULL, 180),
	(445570, NULL, '1', '3%', 241),
	(445570, NULL, '1', '4%', 242),
	(445570, NULL, '1', '3%', 243),
	(445570, NULL, '1', '2%', 244),
	(445570, NULL, '1', '4%', 245),
	(445570, NULL, '1', '3%', 246),
	(445570, NULL, '2', '1%', 247),
	(445570, NULL, '2', '3%', 248),
	(445570, NULL, '2', '2%', 249),
	(445570, NULL, '2', '4%', 250),
	(445570, NULL, '2', '2%', 251),
	(445570, NULL, '2', '4%', 252),
	(445570, NULL, '3', '1%', 253),
	(445570, NULL, '3', '2%', 254),
	(445570, NULL, '3', '4%', 255),
	(445570, NULL, '3', '3%', 256),
	(445570, NULL, '3', '4%', 257),
	(445570, NULL, '3', '3%', 258),
	(445570, NULL, '4', '1%', 259),
	(445570, NULL, '4', '3%', 260),
	(445570, NULL, '4', '4%', 261),
	(445570, NULL, '4', '3%', 262),
	(445570, NULL, '4', '5%', 263),
	(445570, NULL, '4', '4%', 264),
	(445570, NULL, '5', '2%', 265),
	(445570, NULL, '5', '3%', 266),
	(445570, NULL, '5', '4%', 267),
	(445570, NULL, '5', '5%', 268),
	(445570, NULL, '5', '2%', 269),
	(445570, NULL, '5', '1%', 270);

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

-- Volcando datos para la tabla peti.foda: ~3 rows (aproximadamente)
INSERT INTO `foda` (`id`, `f1`, `f2`, `f3`, `f4`, `d1`, `d2`, `d3`, `d4`) VALUES
	(445567, 'Fortaleza 1', 'Fortaleza 2', 'Fortaleza 3', 'Fortaleza 4', 'Debilidad 1', 'Debilidad 2', 'Debilidad 3', 'Debilidad 4'),
	(445569, 'asdasd', 'asdasd', NULL, NULL, 'asda', 'asd', NULL, NULL),
	(445570, 'Innovación constante: Desarrollo de productos tecnológicos sostenibles con alta eficiencia energética.', 'Compromiso con el medio ambiente: El enfoque ecológico y el uso de materiales reciclables y de bajo impacto ambiental.', 'Innovación constante: EcoVerde se mantiene a la vanguardia en el desarrollo de nuevos productos ecológicos, adaptándose rápidamente a las tendencias y necesidades del mercado.', 'Compromiso con la sostenibilidad: Su modelo de negocio está completamente alineado con los principios de economía circular, lo que le otorga una ventaja competitiva en un mercado cada vez más consciente de la necesidad de proteger el medio ambiente.', 'Altos costos de producción iniciales: La implementación de tecnologías sostenibles y el uso de materiales ecológicos pueden resultar más caros al principio, lo que puede afectar la rentabilidad.', 'Dependencia de proveedores de materiales específicos: La disponibilidad y costo de materiales ecológicos pueden ser variables.', 'Altos costos de producción: El uso de materiales ecológicos y tecnologías limpias puede incrementar los costos en comparación con productos convencionales, lo que podría limitar el margen de beneficio.', 'Riesgos logísticos: El proceso de producción de productos ecológicos puede ser más complejo y requerir una cadena de suministro más eficiente, lo cual presenta desafíos logísticos.');

-- Volcando estructura para tabla peti.foda2
CREATE TABLE IF NOT EXISTS `foda2` (
  `id` int(11) DEFAULT NULL,
  `o1` text DEFAULT NULL,
  `o2` text DEFAULT NULL,
  `o3` text DEFAULT NULL,
  `o4` text DEFAULT NULL,
  `a1` text DEFAULT NULL,
  `a2` text DEFAULT NULL,
  `a3` text DEFAULT NULL,
  `a4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.foda2: ~1 rows (aproximadamente)
INSERT INTO `foda2` (`id`, `o1`, `o2`, `o3`, `o4`, `a1`, `a2`, `a3`, `a4`) VALUES
	(445570, 'Crecimiento de la demanda de productos sostenibles: El interés global por reducir el impacto ambiental y adoptar prácticas ecológicas está en aumento, lo que presenta una oportunidad de expansión en el mercado de productos sostenibles.', 'Incentivos gubernamentales y subsidios: Muchos países están implementando políticas y ofreciendo subsidios para la adopción de tecnologías limpias y renovables, lo que podría beneficiar a EcoTech Solutions al reducir costos y aumentar la accesibilidad a nuevos mercados.', 'Alianzas estratégicas: Existen oportunidades de colaboración con otras empresas tecnológicas o instituciones gubernamentales que promuevan la sostenibilidad, lo que podría facilitar el acceso a nuevos recursos y mercados.', 'Educación y sensibilización ambiental: La creciente preocupación por el cambio climático y la sostenibilidad presenta una oportunidad para que EcoTech amplíe su presencia en el mercado a través de campañas educativas sobre los beneficios de sus productos.', 'Competencia en el sector de tecnología sostenible: La creciente popularidad de la tecnología verde ha atraído a muchas empresas, lo que aumenta la competencia y podría presionar los márgenes de beneficio de EcoTech.', 'Fluctuaciones económicas globales: Factores económicos como recesiones o crisis financieras pueden reducir la demanda de productos sostenibles, que suelen tener un costo más alto que las alternativas tradicionales.', 'Regulaciones ambientales cambiantes: Las normativas sobre sostenibilidad y medio ambiente pueden cambiar con el tiempo, lo que podría generar costes adicionales de adaptación para EcoTech.', 'Cambios en las preferencias de los consumidores: La evolución de las preferencias de los consumidores en tecnología puede ser impredecible. Si EcoTech no se adapta rápidamente a las nuevas tendencias, podría perder cuota de mercado frente a competidores más ágiles.');

-- Volcando estructura para tabla peti.informacion
CREATE TABLE IF NOT EXISTS `informacion` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.informacion: ~2 rows (aproximadamente)
INSERT INTO `informacion` (`id`, `nombre`, `descripcion`) VALUES
	(445567, 'EcoInnovar', 'EcoInnovar es una empresa dedicada al desarrollo y la implementación de soluciones tecnológicas sostenibles que promueven el cuidado del medio ambiente. Ofrecemos productos y servicios que ayudan a reducir la huella de carbono y fomentan un estilo de vida más ecológico.'),
	(445570, 'EcoTech Solutions', 'EcoTech Solutions es una empresa innovadora que se dedica al desarrollo, fabricación y distribución de productos tecnológicos sostenibles. Su enfoque está en crear soluciones inteligentes que no solo mejoren la vida de las personas, sino que también promuevan la sostenibilidad y el cuidado del medio ambiente. Desde dispositivos electrónicos con bajo impacto ambiental hasta soluciones energéticas renovables para hogares y empresas, EcoTech busca transformar la manera en que interactuamos con la tecnología, asegurando un futuro más verde y responsable.');

-- Volcando estructura para tabla peti.matrizca
CREATE TABLE IF NOT EXISTS `matrizca` (
  `id` int(11) DEFAULT NULL,
  `valores` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.matrizca: ~0 rows (aproximadamente)
INSERT INTO `matrizca` (`id`, `valores`) VALUES
	(445570, 'Reducir costos de producción mediante la optimización de procesos y el uso de materiales más eficientes y menos costosos.'),
	(445570, 'Inversión en I+D para mejorar la competitividad y actualizar productos constantemente, manteniendo la innovación.'),
	(445570, 'Estrategias de branding para aumentar el reconocimiento de marca a nivel global y mejorar su visibilidad.'),
	(445570, 'Alianzas con fabricantes o proveedores para mejorar la producción a gran escala y reducir los costos asociados.'),
	(445570, 'Diversificación de productos para adaptarse a las tendencias y necesidades cambiantes del mercado.'),
	(445570, 'Vigilancia de tendencias regulatorias para anticipar cambios en las normativas y ajustarse rápidamente.'),
	(445570, 'Evaluación de precios competitivos para contrarrestar la competencia y ofrecer alternativas atractivas.'),
	(445570, 'Desarrollo de productos de bajo costo que atraigan a un segmento más amplio sin sacrificar la sostenibilidad.'),
	(445570, 'Continuar con la innovación tecnológica para seguir siendo líderes en soluciones sostenibles.'),
	(445570, 'Reforzar la imagen de marca destacando el compromiso con la sostenibilidad en todas las estrategias de marketing.'),
	(445570, 'Fomentar la diversificación de productos para mantener la ventaja competitiva en diversos segmentos.'),
	(445570, 'Promover la cultura organizacional que valore la innovación y sostenibilidad como pilares fundamentales.'),
	(445570, 'Aprovechar incentivos gubernamentales para reducir costos de producción e impulsar la adopción de productos.'),
	(445570, 'Formar alianzas estratégicas con otras empresas tecnológicas o entidades del sector ambiental.'),
	(445570, 'Expandir mercados internacionales donde la demanda de productos ecológicos está en crecimiento.'),
	(445570, 'Lanzar campañas educativas sobre los beneficios de la sostenibilidad, generando conciencia y posicionamiento de marca.');

-- Volcando estructura para tabla peti.mision
CREATE TABLE IF NOT EXISTS `mision` (
  `id` int(11) DEFAULT NULL,
  `mision` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.mision: ~3 rows (aproximadamente)
INSERT INTO `mision` (`id`, `mision`) VALUES
	(445567, 'En EcoSolutions, nos comprometemos a ofrecer soluciones sostenibles e innovadoras que promuevan un futuro más limpio y saludable. Nuestra misión es empoderar a las comunidades a través de productos ecológicos y servicios que reduzcan el impacto ambiental, fomenten la economía circular y mejoren la calidad de vida. Trabajamos con pasión y dedicación para inspirar un cambio positivo en el mundo, promoviendo la conciencia ambiental y la responsabilidad social.'),
	(445569, 'Proveer acceso sostenible a agua de calidad, garantizando su disponibilidad para las generaciones presentes y futuras.\r\n'),
	(445570, 'Desarrollar y ofrecer soluciones tecnológicas innovadoras y sostenibles que mejoren la calidad de vida de las personas, contribuyendo a la conservación del medio ambiente y promoviendo un futuro más verde y equitativo.');

-- Volcando estructura para tabla peti.niv_venta_competidor
CREATE TABLE IF NOT EXISTS `niv_venta_competidor` (
  `id` int(11) DEFAULT NULL,
  `competidor` varchar(50) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=406 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.niv_venta_competidor: ~135 rows (aproximadamente)
INSERT INTO `niv_venta_competidor` (`id`, `competidor`, `producto`, `valor`, `cod`) VALUES
	(445567, NULL, '1', 13, 181),
	(445567, NULL, '1', 14, 182),
	(445567, NULL, '1', 12, 183),
	(445567, NULL, '1', 32, 184),
	(445567, NULL, '1', 12, 185),
	(445567, NULL, '1', 31, 186),
	(445567, NULL, '1', 12, 187),
	(445567, NULL, '1', 21, 188),
	(445567, NULL, '1', 12, 189),
	(445567, NULL, '2', 11, 190),
	(445567, NULL, '2', 12, 191),
	(445567, NULL, '2', 1, 192),
	(445567, NULL, '2', 32, 193),
	(445567, NULL, '2', 2, 194),
	(445567, NULL, '2', 3, 195),
	(445567, NULL, '2', 4, 196),
	(445567, NULL, '2', 12, 197),
	(445567, NULL, '2', 5, 198),
	(445567, NULL, '3', 6, 199),
	(445567, NULL, '3', 32, 200),
	(445567, NULL, '3', 23, 201),
	(445567, NULL, '3', 32, 202),
	(445567, NULL, '3', 12, 203),
	(445567, NULL, '3', 12, 204),
	(445567, NULL, '3', 21, 205),
	(445567, NULL, '3', 11, 206),
	(445567, NULL, '3', 11, 207),
	(445567, NULL, '4', 32, 208),
	(445567, NULL, '4', 12, 209),
	(445567, NULL, '4', 42, 210),
	(445567, NULL, '4', 12, 211),
	(445567, NULL, '4', 21, 212),
	(445567, NULL, '4', 12, 213),
	(445567, NULL, '4', 12, 214),
	(445567, NULL, '4', 31, 215),
	(445567, NULL, '4', 12, 216),
	(445567, NULL, '5', 12, 217),
	(445567, NULL, '5', 21, 218),
	(445567, NULL, '5', 51, 219),
	(445567, NULL, '5', 31, 220),
	(445567, NULL, '5', 22, 221),
	(445567, NULL, '5', 12, 222),
	(445567, NULL, '5', 12, 223),
	(445567, NULL, '5', 1, 224),
	(445567, NULL, '5', 11, 225),
	(445569, NULL, NULL, NULL, 226),
	(445569, NULL, NULL, NULL, 227),
	(445569, NULL, NULL, NULL, 228),
	(445569, NULL, NULL, NULL, 229),
	(445569, NULL, NULL, NULL, 230),
	(445569, NULL, NULL, NULL, 231),
	(445569, NULL, NULL, NULL, 232),
	(445569, NULL, NULL, NULL, 233),
	(445569, NULL, NULL, NULL, 234),
	(445569, NULL, NULL, NULL, 235),
	(445569, NULL, NULL, NULL, 236),
	(445569, NULL, NULL, NULL, 237),
	(445569, NULL, NULL, NULL, 238),
	(445569, NULL, NULL, NULL, 239),
	(445569, NULL, NULL, NULL, 240),
	(445569, NULL, NULL, NULL, 241),
	(445569, NULL, NULL, NULL, 242),
	(445569, NULL, NULL, NULL, 243),
	(445569, NULL, NULL, NULL, 244),
	(445569, NULL, NULL, NULL, 245),
	(445569, NULL, NULL, NULL, 246),
	(445569, NULL, NULL, NULL, 247),
	(445569, NULL, NULL, NULL, 248),
	(445569, NULL, NULL, NULL, 249),
	(445569, NULL, NULL, NULL, 250),
	(445569, NULL, NULL, NULL, 251),
	(445569, NULL, NULL, NULL, 252),
	(445569, NULL, NULL, NULL, 253),
	(445569, NULL, NULL, NULL, 254),
	(445569, NULL, NULL, NULL, 255),
	(445569, NULL, NULL, NULL, 256),
	(445569, NULL, NULL, NULL, 257),
	(445569, NULL, NULL, NULL, 258),
	(445569, NULL, NULL, NULL, 259),
	(445569, NULL, NULL, NULL, 260),
	(445569, NULL, NULL, NULL, 261),
	(445569, NULL, NULL, NULL, 262),
	(445569, NULL, NULL, NULL, 263),
	(445569, NULL, NULL, NULL, 264),
	(445569, NULL, NULL, NULL, 265),
	(445569, NULL, NULL, NULL, 266),
	(445569, NULL, NULL, NULL, 267),
	(445569, NULL, NULL, NULL, 268),
	(445569, NULL, NULL, NULL, 269),
	(445569, NULL, NULL, NULL, 270),
	(445570, NULL, '1', 100, 361),
	(445570, NULL, '1', 130, 362),
	(445570, NULL, '1', 90, 363),
	(445570, NULL, '1', 90, 364),
	(445570, NULL, '1', 90, 365),
	(445570, NULL, '1', 76, 366),
	(445570, NULL, '1', 14, 367),
	(445570, NULL, '1', 22, 368),
	(445570, NULL, '1', 78, 369),
	(445570, NULL, '2', 120, 370),
	(445570, NULL, '2', 79, 371),
	(445570, NULL, '2', 90, 372),
	(445570, NULL, '2', 100, 373),
	(445570, NULL, '2', 80, 374),
	(445570, NULL, '2', 87, 375),
	(445570, NULL, '2', 120, 376),
	(445570, NULL, '2', 12, 377),
	(445570, NULL, '2', 87, 378),
	(445570, NULL, '3', 90, 379),
	(445570, NULL, '3', 8776, 380),
	(445570, NULL, '3', 89, 381),
	(445570, NULL, '3', 129, 382),
	(445570, NULL, '3', 70, 383),
	(445570, NULL, '3', 98, 384),
	(445570, NULL, '3', 13, 385),
	(445570, NULL, '3', 13, 386),
	(445570, NULL, '3', 87, 387),
	(445570, NULL, '4', 89, 388),
	(445570, NULL, '4', 78, 389),
	(445570, NULL, '4', 99, 390),
	(445570, NULL, '4', 129, 391),
	(445570, NULL, '4', 77, 392),
	(445570, NULL, '4', 90, 393),
	(445570, NULL, '4', 96, 394),
	(445570, NULL, '4', 12, 395),
	(445570, NULL, '4', 41, 396),
	(445570, NULL, '5', 987, 397),
	(445570, NULL, '5', 69, 398),
	(445570, NULL, '5', 99, 399),
	(445570, NULL, '5', 70, 400),
	(445570, NULL, '5', 88, 401),
	(445570, NULL, '5', 89, 402),
	(445570, NULL, '5', 112, 403),
	(445570, NULL, '5', 14, 404),
	(445570, NULL, '5', 69, 405);

-- Volcando estructura para tabla peti.objetivos
CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) DEFAULT NULL,
  `id_objetivo` int(11) DEFAULT NULL,
  `descripcionObj` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.objetivos: ~6 rows (aproximadamente)
INSERT INTO `objetivos` (`id`, `id_objetivo`, `descripcionObj`) VALUES
	(445567, 1, 'objetivo1'),
	(445567, 2, 'objetivo2'),
	(445567, 3, 'objetivo3'),
	(445570, 1, 'Desarrollar y lanzar una línea de productos tecnológicos sostenibles que reduzcan el impacto ambiental.'),
	(445570, 2, 'Expandir la presencia de EcoTech Solutions en mercados internacionales clave para el crecimiento del sector de tecnología verde.'),
	(445570, 3, 'Fomentar la educación y concienciación sobre la sostenibilidad tecnológica entre los consumidores y empresas.');

-- Volcando estructura para tabla peti.obj_especificos
CREATE TABLE IF NOT EXISTS `obj_especificos` (
  `id_objetivo` int(11) DEFAULT NULL,
  `descripcionEspObj` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.obj_especificos: ~12 rows (aproximadamente)
INSERT INTO `obj_especificos` (`id_objetivo`, `descripcionEspObj`) VALUES
	(1, 'Desarrollar al menos tres nuevos productos ecológicos (como dispositivos de bajo consumo energético y soluciones para la gestión de residuos) en los próximos 12 meses.'),
	(1, 'Utilizar materiales reciclables y biodegradables en el 90% de nuestros productos para finales del próximo año fiscal.'),
	(2, 'Establecer presencia en al menos dos nuevos mercados internacionales (por ejemplo, Europa o América del Norte) dentro de los próximos 18 meses.'),
	(2, 'Formar alianzas estratégicas con al menos tres distribuidores internacionales especializados en productos sostenibles para finales del próximo año.'),
	(3, 'Implementar una campaña de marketing digital y eventos educativos que llegue a al menos 100,000 personas dentro de los próximos 6 meses.'),
	(3, 'Ofrecer talleres o webinars mensuales sobre tecnología sostenible y eficiencia energética a empresas y consumidores, con el objetivo de capacitar a al menos 500 personas al final del próximo trimestre.'),
	(1, 'Desarrollar al menos tres nuevos productos ecológicos (como dispositivos de bajo consumo energético y soluciones para la gestión de residuos) en los próximos 12 meses.'),
	(1, 'Utilizar materiales reciclables y biodegradables en el 90% de nuestros productos para finales del próximo año fiscal.'),
	(2, 'Establecer presencia en al menos dos nuevos mercados internacionales (por ejemplo, Europa o América del Norte) dentro de los próximos 18 meses.'),
	(2, 'Formar alianzas estratégicas con al menos tres distribuidores internacionales especializados en productos sostenibles para finales del próximo año.'),
	(3, 'Implementar una campaña de marketing digital y eventos educativos que llegue a al menos 100,000 personas dentro de los próximos 6 meses.'),
	(3, 'Ofrecer talleres o webinars mensuales sobre tecnología sostenible y eficiencia energética a empresas y consumidores, con el objetivo de capacitar a al menos 500 personas al final del próximo trimestre.');

-- Volcando estructura para tabla peti.pest
CREATE TABLE IF NOT EXISTS `pest` (
  `id` int(11) DEFAULT NULL,
  `enunciado` int(11) DEFAULT NULL,
  `punto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.pest: ~50 rows (aproximadamente)
INSERT INTO `pest` (`id`, `enunciado`, `punto`) VALUES
	(445567, 1, 1),
	(445567, 2, 0),
	(445567, 3, 0),
	(445567, 4, 0),
	(445567, 5, 0),
	(445567, 6, 3),
	(445567, 7, 4),
	(445567, 8, 3),
	(445567, 9, 3),
	(445567, 10, 4),
	(445567, 11, 4),
	(445567, 12, 2),
	(445567, 13, 1),
	(445567, 14, 0),
	(445567, 15, 0),
	(445567, 16, 4),
	(445567, 17, 2),
	(445567, 18, 4),
	(445567, 19, 2),
	(445567, 20, 1),
	(445567, 21, 2),
	(445567, 22, 3),
	(445567, 23, 1),
	(445567, 24, 1),
	(445567, 25, 2),
	(445570, 1, 2),
	(445570, 2, 2),
	(445570, 3, 3),
	(445570, 4, 4),
	(445570, 5, 2),
	(445570, 6, 5),
	(445570, 7, 4),
	(445570, 8, 3),
	(445570, 9, 4),
	(445570, 10, 2),
	(445570, 11, 1),
	(445570, 12, 4),
	(445570, 13, 3),
	(445570, 14, 4),
	(445570, 15, 2),
	(445570, 16, 3),
	(445570, 17, 3),
	(445570, 18, 2),
	(445570, 19, 2),
	(445570, 20, 4),
	(445570, 21, 3),
	(445570, 22, 4),
	(445570, 23, 2),
	(445570, 24, 2),
	(445570, 25, 3);

-- Volcando estructura para tabla peti.porter
CREATE TABLE IF NOT EXISTS `porter` (
  `id` int(11) DEFAULT NULL,
  `enunciado` int(11) DEFAULT NULL,
  `punto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.porter: ~34 rows (aproximadamente)
INSERT INTO `porter` (`id`, `enunciado`, `punto`) VALUES
	(445567, 1, 1),
	(445567, 2, 2),
	(445567, 3, 2),
	(445567, 4, 2),
	(445567, 5, 4),
	(445567, 6, 1),
	(445567, 7, 1),
	(445567, 8, 1),
	(445567, 9, 1),
	(445567, 10, 1),
	(445567, 11, 1),
	(445567, 12, 1),
	(445567, 13, 1),
	(445567, 14, 1),
	(445567, 15, 1),
	(445567, 16, 1),
	(445567, 17, 1),
	(445570, 1, 2),
	(445570, 2, 3),
	(445570, 3, 2),
	(445570, 4, 3),
	(445570, 5, 2),
	(445570, 6, 2),
	(445570, 7, 3),
	(445570, 8, 4),
	(445570, 9, 4),
	(445570, 10, 4),
	(445570, 11, 2),
	(445570, 12, 2),
	(445570, 13, 2),
	(445570, 14, 3),
	(445570, 15, 3),
	(445570, 16, 2),
	(445570, 17, 3);

-- Volcando estructura para tabla peti.prevision_ventas
CREATE TABLE IF NOT EXISTS `prevision_ventas` (
  `id` int(11) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.prevision_ventas: ~15 rows (aproximadamente)
INSERT INTO `prevision_ventas` (`id`, `producto`, `venta`) VALUES
	(445567, 'Produccto 1', 12),
	(445567, 'Produccto 2', 65),
	(445567, 'Produccto 3', 13),
	(445567, 'Produccto 4', 70),
	(445567, 'Produccto 5', 80),
	(445569, 'Producto 1', NULL),
	(445569, 'Producto 2', NULL),
	(445569, 'Producto 3', NULL),
	(445569, 'Producto 4', NULL),
	(445569, 'Producto 5', NULL),
	(445570, 'EcoClean', 140),
	(445570, 'VerdeVibe', 130),
	(445570, 'BioBreeze', 170),
	(445570, 'GreenSnack', 160),
	(445570, 'ReCycleBag', 150);

-- Volcando estructura para tabla peti.resumen
CREATE TABLE IF NOT EXISTS `resumen` (
  `id` int(11) DEFAULT NULL,
  `identificacion` varchar(10000) DEFAULT NULL,
  `conclusion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.resumen: ~0 rows (aproximadamente)

-- Volcando estructura para tabla peti.tcm
CREATE TABLE IF NOT EXISTS `tcm` (
  `id` int(11) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.tcm: ~75 rows (aproximadamente)
INSERT INTO `tcm` (`id`, `periodo`, `producto`, `valor`, `cod`) VALUES
	(445567, NULL, '1', '1%', 101),
	(445567, NULL, '1', '2%', 102),
	(445567, NULL, '1', '3%', 103),
	(445567, NULL, '1', '4%', 104),
	(445567, NULL, '1', '5%', 105),
	(445567, NULL, '2', '1%', 106),
	(445567, NULL, '2', '5%', 107),
	(445567, NULL, '2', '4%', 108),
	(445567, NULL, '2', '3%', 109),
	(445567, NULL, '2', '2%', 110),
	(445567, NULL, '3', '7%', 111),
	(445567, NULL, '3', '6%', 112),
	(445567, NULL, '3', '10%', 113),
	(445567, NULL, '3', '9%', 114),
	(445567, NULL, '3', '8%', 115),
	(445567, NULL, '4', '8%', 116),
	(445567, NULL, '4', '7%', 117),
	(445567, NULL, '4', '9%', 118),
	(445567, NULL, '4', '10%', 119),
	(445567, NULL, '4', '6%', 120),
	(445567, NULL, '5', '12%', 121),
	(445567, NULL, '5', '0%', 122),
	(445567, NULL, '5', '12%', 123),
	(445567, NULL, '5', '0%', 124),
	(445567, NULL, '5', '11%', 125),
	(445569, NULL, NULL, NULL, 126),
	(445569, NULL, NULL, NULL, 127),
	(445569, NULL, NULL, NULL, 128),
	(445569, NULL, NULL, NULL, 129),
	(445569, NULL, NULL, NULL, 130),
	(445569, NULL, NULL, NULL, 131),
	(445569, NULL, NULL, NULL, 132),
	(445569, NULL, NULL, NULL, 133),
	(445569, NULL, NULL, NULL, 134),
	(445569, NULL, NULL, NULL, 135),
	(445569, NULL, NULL, NULL, 136),
	(445569, NULL, NULL, NULL, 137),
	(445569, NULL, NULL, NULL, 138),
	(445569, NULL, NULL, NULL, 139),
	(445569, NULL, NULL, NULL, 140),
	(445569, NULL, NULL, NULL, 141),
	(445569, NULL, NULL, NULL, 142),
	(445569, NULL, NULL, NULL, 143),
	(445569, NULL, NULL, NULL, 144),
	(445569, NULL, NULL, NULL, 145),
	(445569, NULL, NULL, NULL, 146),
	(445569, NULL, NULL, NULL, 147),
	(445569, NULL, NULL, NULL, 148),
	(445569, NULL, NULL, NULL, 149),
	(445569, NULL, NULL, NULL, 150),
	(445570, NULL, '1', '7%', 201),
	(445570, NULL, '1', '8%', 202),
	(445570, NULL, '1', '14%', 203),
	(445570, NULL, '1', '11%', 204),
	(445570, NULL, '1', '11%', 205),
	(445570, NULL, '2', '6%', 206),
	(445570, NULL, '2', '7%', 207),
	(445570, NULL, '2', '9%', 208),
	(445570, NULL, '2', '7%', 209),
	(445570, NULL, '2', '5%', 210),
	(445570, NULL, '3', '4%', 211),
	(445570, NULL, '3', '3%', 212),
	(445570, NULL, '3', '2%', 213),
	(445570, NULL, '3', '4%', 214),
	(445570, NULL, '3', '3%', 215),
	(445570, NULL, '4', '18%', 216),
	(445570, NULL, '4', '17%', 217),
	(445570, NULL, '4', '17%', 218),
	(445570, NULL, '4', '15%', 219),
	(445570, NULL, '4', '16%', 220),
	(445570, NULL, '5', '19%', 221),
	(445570, NULL, '5', '20%', 222),
	(445570, NULL, '5', '17%', 223),
	(445570, NULL, '5', '19%', 224),
	(445570, NULL, '5', '22%', 225);

-- Volcando estructura para tabla peti.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=445571 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.usuario: ~4 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
	(445567, 'user123', '123'),
	(445568, '123', '123'),
	(445569, 'nuevo', 'nuevo'),
	(445570, 'erick', '1234');

-- Volcando estructura para tabla peti.valores
CREATE TABLE IF NOT EXISTS `valores` (
  `id` int(11) DEFAULT NULL,
  `valores` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.valores: ~3 rows (aproximadamente)
INSERT INTO `valores` (`id`, `valores`) VALUES
	(445570, 'Sostenibilidad: Comprometidos con el medio ambiente, todos nuestros productos y procesos están diseñados para minimizar el impacto ambiental y promover el uso responsable de los recursos naturales. Buscamos soluciones que no solo sean tecnológicamente avanzadas, sino también respetuosas con el planeta.'),
	(445570, 'Innovación: Nos impulsa la creatividad y el desarrollo continuo para ofrecer productos y soluciones tecnológicas que marquen la diferencia. La innovación es clave para mejorar la vida de las personas y transformar la industria hacia un modelo más verde y eficiente.'),
	(445570, 'Responsabilidad Social: Creemos que el éxito empresarial debe ir de la mano de un impacto positivo en la sociedad. Nos esforzamos por generar beneficios tanto para nuestros clientes como para las comunidades, a través de la creación de empleos, la educación ambiental y el apoyo a causas sociales que fomenten un desarrollo sostenible y equitativo.');

-- Volcando estructura para tabla peti.vision
CREATE TABLE IF NOT EXISTS `vision` (
  `id` int(11) DEFAULT NULL,
  `vision` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla peti.vision: ~2 rows (aproximadamente)
INSERT INTO `vision` (`id`, `vision`) VALUES
	(445567, 'Ser líderes globales en la transformación hacia un futuro sostenible, donde cada persona y comunidad tenga acceso a soluciones ecológicas que preserven nuestro planeta. Aspiramos a inspirar un movimiento mundial hacia la conciencia ambiental y la innovación, convirtiéndonos en un referente de integridad y responsabilidad en la industria, mientras creamos un legado duradero de bienestar para las generaciones futuras.'),
	(445570, 'Ser líder en el mercado de la tecnología ecológica, reconocida por su compromiso con la sostenibilidad, la innovación constante y el impacto positivo en la sociedad y el planeta. A través de nuestras soluciones, buscamos transformar la industria tecnológica y fomentar un mundo más consciente y responsable con el medio ambiente.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
