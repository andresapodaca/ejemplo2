-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2015 a las 23:01:21
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargadores`
--

CREATE TABLE IF NOT EXISTS `cargadores` (
  `pkCargador` int(11) NOT NULL AUTO_INCREMENT,
  `existencia` int(11) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`pkCargador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `cargadores`
--

INSERT INTO `cargadores` (`pkCargador`, `existencia`, `modelo`, `tipo`, `precio`) VALUES
(2, 1, 'SONY VAIO', 'LAPTOP', 350),
(3, 5, 'HP PUNTA AZUL', 'LAPTOP', 450),
(4, 1, 'HP PIN CENTRAL S. NUEVO', 'LAPTOP', 350),
(5, 6, 'ACCER / GATEWAY', 'LAPTOP', 350),
(6, 1, 'LENOVO S. NUEVO ORIG.', 'LAPTOP', 450),
(7, 1, '?..', 'C.TABLET', 90),
(8, 3, 'ELUX', 'C.P/ CEL BLANCO', 100),
(9, 2, 'MT LIDER', 'C. AZUL', 60),
(10, 4, '.COM', 'C. ROJO', 80),
(11, 4, 'MTLIDER', 'C. P / CARRO', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancia`
--

CREATE TABLE IF NOT EXISTS `mercancia` (
  `pkMerca` int(11) NOT NULL AUTO_INCREMENT,
  `merca` varchar(40) NOT NULL,
  `precio` varchar(15) NOT NULL,
  PRIMARY KEY (`pkMerca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Volcado de datos para la tabla `mercancia`
--

INSERT INTO `mercancia` (`pkMerca`, `merca`, `precio`) VALUES
(39, 'AUDIFONOS', '$55.00'),
(40, 'USB 8 GB', '$100.00'),
(41, 'GLOBOS', '$2.00 C/U'),
(42, 'PERFORADORA', '$ 26.00'),
(43, 'REGLAS', '$ 5.00'),
(44, 'TIJERAS', '$ 7.00'),
(45, 'BRILLANTINA', '$ 4.00'),
(46, 'CUTER', '$ 5.00'),
(47, 'MARCADORES ACEITE', '$ 12.00 C/U'),
(48, 'MARCADORES DE AGUA', '$ 7.00 C/U'),
(49, 'LIBRETAS', '$ 17.00'),
(50, 'PAQ. DE HOJAS P/CARPETAS', '$35.00'),
(51, 'HOJAS DE LIBRETAS SUELTAS', '3 X $ 1.00'),
(52, 'FOMI', '$ 2.00'),
(53, 'PAPEL CHINA', '$ 2.50'),
(54, 'PAPEL CREPE', '$ 5.00'),
(55, 'HOJAS DE COLOR', '$ 0.50'),
(56, 'MAPA', '$ 1.00'),
(57, 'SOLICITUDES', '$ 2.00'),
(58, 'HOJAS T/ OFICIO', '3 X $1.00'),
(59, 'HOJAS T/ CARTA', '4 X $1.00'),
(60, 'FOLDERS DE PLASTICO', '$ 12.00'),
(61, 'FICHAS DE TRABAJO', '$ 1.00'),
(62, 'PLASTILINAS', '$ 5.50'),
(63, 'RESISTOL', '$ 8.00'),
(64, 'PINTURAS DE AGUA Y ACEITE', '$ 6.00'),
(65, 'CLINEX', '$ 5.00'),
(66, 'PLUMONES DE AGUA', '$ 10.00'),
(67, 'PLUMAS AZUL,NEGRA Y ROJA', '$ 5.00'),
(68, 'PLUMAS COLORES', '$ 8.00'),
(69, 'PUNTILLAS 0.5 Y 0.7', '$ 10.00'),
(70, 'LAPIZ', '$ 3.00'),
(71, 'CILICON', '$ 2.00'),
(72, 'COLORES', '$ 4.00'),
(73, 'SACAPUNTAS', '$ 2.00'),
(74, 'PINCELES', '$ 4.00'),
(75, 'CORRECTOR', '$ 17.00'),
(76, 'CD DVD SOLO', '$ 15.00'),
(77, 'CD DVD CON CAJA', '$ 20.00'),
(78, 'CD SOLO', '$ 10.00'),
(79, 'CD CON CAJA', '$ 15.00'),
(80, 'CAJA P/CD', '$ 7.00'),
(81, 'ROTAFOLIO', '$ 5.00'),
(82, 'CARTULINA BLANCA', '$ 5.00'),
(83, 'CARTULINA COLOR', '$ 7.00'),
(84, 'PAPEL CASCARON GRANDE', '$ 12.00'),
(85, 'PAPEL CASCARON MEDIANO', '$ 8.00'),
(86, 'PAPEL CASCARON CHICO', '$ 5.00'),
(87, 'PAPEL LUSTRE', '$ 4.00'),
(88, 'ENMICADO GRANDE', '$ 10.00'),
(89, 'ENMICADO MEDIANO', '$ 8.00'),
(90, 'ENMICADO CHICO', '$ 7.00'),
(91, 'PAQ. LIGAS', '$ 5.00'),
(92, 'PALITOS DE MADERA', '$ 9.00'),
(93, 'CARPETA COLORES', '$ 5.00'),
(94, 'CARPETAS T/ CARTA', '$ 3.00'),
(95, 'CARPETAS T/ OFICIO', '$ 4.00'),
(96, 'CINTA SCORCH', '$ 5.00'),
(97, 'CARTERITA DE ESTRELLAS', '$ 6.00'),
(98, 'LAPICEROS', '$ 10.00'),
(99, 'IMPRECIONES B/N', '$ 1.00'),
(100, 'IMPRECIONES COLOR', '$ 3.00'),
(101, 'PAQ. HOJAS BLANCAS  T/ CARTA', '$ 50.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protectores`
--

CREATE TABLE IF NOT EXISTS `protectores` (
  `pkProtector` int(11) NOT NULL AUTO_INCREMENT,
  `existencia` int(11) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`pkProtector`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `protectores`
--

INSERT INTO `protectores` (`pkProtector`, `existencia`, `modelo`, `tipo`, `precio`) VALUES
(1, 1, 'NOTE 3', 'CARTERAS', 130),
(2, 1, 'NOTE II / 7100', 'CARTERAS', 130),
(3, 1, 'NOTE 3 / N7200/N9000/N900A/N9002/N9005', 'P / CILICON', 80),
(4, 1, 'SAMSUNG E500', 'CARTERAS', 130),
(5, 1, 'SAMSUNG G530 GRAND PRIME', 'CARTERAS', 130),
(6, 1, 'SAMSUNG S5', 'CARTERAS', 130),
(7, 1, 'IPHONE 5', 'CARTERAS', 130),
(8, 1, 'OPTIMUS GPRO / E980', 'P / CILICON', 80),
(9, 1, 'L70', 'P / CILICON / CLIP $100', 80),
(10, 3, 'G PRO LITE / D680', 'P / CILICON', 80),
(11, 2, 'SAMSUNG CORE 2', 'P / CILICON', 80);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
