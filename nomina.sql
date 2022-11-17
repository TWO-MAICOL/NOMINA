-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-11-2022 a las 14:24:58
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nomina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devengado`
--

CREATE TABLE `devengado` (
  `documento` int(12) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `basico` int(10) DEFAULT NULL,
  `diasTrabajados` int(2) DEFAULT NULL,
  `sueldo` int(10) DEFAULT NULL,
  `NHED` int(11) DEFAULT NULL,
  `NHEN` int(11) DEFAULT NULL,
  `NHEFD` int(11) DEFAULT NULL,
  `NHEFN` int(11) DEFAULT NULL,
  `VHED` int(11) DEFAULT NULL,
  `VHEN` int(11) DEFAULT NULL,
  `VHEFD` int(11) DEFAULT NULL,
  `VHEFN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `devengado`
--
ALTER TABLE `devengado`
  ADD PRIMARY KEY (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
