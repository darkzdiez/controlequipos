-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2013 a las 18:25:10
-- Versión del servidor: 5.5.34-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ciber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `ip`, `usuario`, `clave`) VALUES
(1, 'EQUIPO 01', '172.16.1.99', 'laboratorio01', 'es-lab*1'),
(2, 'EQUIPO 02', '172.16.1.58', 'laboratorio02', 'es-lab*1'),
(3, 'EQUIPO 03', '172.16.1.61', 'laboratorio03', 'es-lab*1'),
(4, 'EQUIPO 04', '172.16.1.62', 'laboratorio04', 'es-lab*1'),
(5, 'EQUIPO 05', '172.16.1.63', 'laboratorio05', 'es-lab*1'),
(6, 'EQUIPO 06', '172.16.1.67', 'laboratorio06', 'es-lab*1'),
(7, 'EQUIPO 07', '172.16.1.68', 'laboratorio07', 'es-lab*1'),
(8, 'EQUIPO 08', '172.16.1.70', 'laboratorio08', 'es-lab*1'),
(9, 'EQUIPO 09', '172.16.1.69', 'laboratorio09', 'es-lab*1'),
(10, 'EQUIPO 10', '172.16.1.71', 'laboratorio10', 'es-lab*1'),
(11, 'EQUIPO 11', '172.16.1.72', 'laboratorio11', 'es-lab*1'),
(12, 'EQUIPO 12', '172.16.1.74', 'laboratorio12', 'es-lab*1'),
(13, 'EQUIPO 13', '172.16.1.75', 'laboratorio13', 'es-lab*1'),
(14, 'EQUIPO 14', '172.16.1.76', 'laboratorio14', 'es-lab*1'),
(15, 'EQUIPO 15', '172.16.1.77', 'laboratorio15', 'es-lab*1'),
(16, 'EQUIPO 16', '172.16.1.78', 'laboratorio16', 'es-lab*1'),
(17, 'EQUIPO 17', '172.16.1.79', 'laboratorio17', 'es-lab*1'),
(18, 'EQUIPO 18', '172.16.1.80', 'laboratorio18', 'es-lab*1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
