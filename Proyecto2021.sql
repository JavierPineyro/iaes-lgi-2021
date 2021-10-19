-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-10-2021 a las 18:24:51
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Proyecto2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admin`
--

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE IF NOT EXISTS `Admin` (
  `idadmin` int(3) NOT NULL AUTO_INCREMENT,
  `nombread` varchar(50) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `idcar` int(3) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(50) NOT NULL,
  `duracion` int(2) NOT NULL,
  PRIMARY KEY (`idcar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carxuser`
--

DROP TABLE IF EXISTS `carxuser`;
CREATE TABLE IF NOT EXISTS `carxuser` (
  `idcar` int(3) NOT NULL,
  `iduser` int(8) NOT NULL,
  `añofinal` date NOT NULL,
  KEY `idcar` (`idcar`),
  KEY `iduser` (`iduser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento`
--

DROP TABLE IF EXISTS `Departamento`;
CREATE TABLE IF NOT EXISTS `Departamento` (
  `idep` int(3) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(50) NOT NULL,
  `idpro` int(2) NOT NULL,
  PRIMARY KEY (`idep`),
  KEY `idpro` (`idpro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresas`
--

DROP TABLE IF EXISTS `Empresas`;
CREATE TABLE IF NOT EXISTS `Empresas` (
  `idempresa` int(8) NOT NULL AUTO_INCREMENT,
  `empresa` int(100) NOT NULL,
  `cuit` int(12) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `localidad` int(3) NOT NULL,
  `municipio` int(3) NOT NULL,
  `pronvicia` int(2) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `buscando` int(1) NOT NULL,
  PRIMARY KEY (`idempresa`),
  KEY `localidad` (`localidad`),
  KEY `municipio` (`municipio`),
  KEY `pronvicia` (`pronvicia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia`
--

DROP TABLE IF EXISTS `experiencia`;
CREATE TABLE IF NOT EXISTS `experiencia` (
  `iduser` int(8) NOT NULL,
  `idempresa` int(8) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `puesto` int(11) NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `contacto` varchar(100) NOT NULL,
  KEY `iduser` (`iduser`),
  KEY `idempresa` (`idempresa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

DROP TABLE IF EXISTS `idiomas`;
CREATE TABLE IF NOT EXISTS `idiomas` (
  `idi` int(2) NOT NULL AUTO_INCREMENT,
  `idioma` varchar(40) NOT NULL,
  PRIMARY KEY (`idi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioxuser`
--

DROP TABLE IF EXISTS `idioxuser`;
CREATE TABLE IF NOT EXISTS `idioxuser` (
  `iduser` int(8) NOT NULL,
  `idi` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

DROP TABLE IF EXISTS `localidad`;
CREATE TABLE IF NOT EXISTS `localidad` (
  `idloc` int(3) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(50) NOT NULL,
  `idep` int(3) NOT NULL,
  PRIMARY KEY (`idloc`),
  KEY `idmun` (`idep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE IF NOT EXISTS `provincia` (
  `idpro` int(2) NOT NULL AUTO_INCREMENT,
  `provincia` varchar(50) NOT NULL,
  PRIMARY KEY (`idpro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `iduser` int(8) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `dni` int(8) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `discapacidades` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contactio` varchar(30) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `localidad` int(3) NOT NULL,
  `departamento` int(3) NOT NULL,
  `provincia` int(2) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `cursos` varchar(200) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `licencia` int(1) NOT NULL,
  `auto` int(1) NOT NULL,
  `situacionlab` int(1) NOT NULL,
  `area` varchar(200) NOT NULL,
  `salariomin` decimal(8,0) NOT NULL,
  `dispoviajar` int(1) NOT NULL,
  `dispomuda` int(1) NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `localidad` (`localidad`),
  KEY `departamento` (`departamento`),
  KEY `provincia` (`provincia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
