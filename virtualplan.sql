-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2014 a las 16:49:49
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `virtualplan`
--
CREATE DATABASE IF NOT EXISTS `virtualplan` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `virtualplan`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `iddocentes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_docentes` varchar(45) DEFAULT NULL,
  `usudocente` varchar(45) DEFAULT NULL,
  `passdocente` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iddocentes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`iddocentes`, `nombre_docentes`, `usudocente`, `passdocente`, `imagen`) VALUES
(1, 'MARCO PERAFAN', '10546487', '10546487', 'caricatura2.jpg'),
(2, 'PEPITO PEREZ', '123456', '123456', 'caricatura8.jpg'),
(4, 'SANDRA CASTRO RESTREPO', '123', '123', 'caricatura7.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `idplanes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_plan` varchar(45) DEFAULT NULL,
  `asignatura` enum('MATEMATICAS','ESPAÑOL','BIOLOGIA','QUIMICA') DEFAULT NULL,
  `grado` enum('SEXTOJT') DEFAULT NULL,
  `iddocente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idplanes`),
  KEY `nombre_docente_idx` (`iddocente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`) VALUES
(1, 'admin', '28f28cc6233119fc932ef94247a45db47a9fd26e');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `nombre_docente` FOREIGN KEY (`iddocente`) REFERENCES `docentes` (`iddocentes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
