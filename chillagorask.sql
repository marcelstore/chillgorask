-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2021 a las 01:43:49
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chillagorask`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idevento` bigint(20) NOT NULL,
  `personaid` bigint(20) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `nombrehost` varchar(150) NOT NULL,
  `zonahoraria` varchar(150) NOT NULL,
  `usuariosmax` bigint(20) NOT NULL,
  `resolucion` bigint(20) NOT NULL,
  `duracion` int(11) NOT NULL,
  `fechahora` date NOT NULL,
  `codificacion` varchar(50) NOT NULL,
  `chat` int(11) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` bigint(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email_user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombres`, `apellidos`, `email_user`, `password`, `status`) VALUES
(1, 'Dario', 'Sanchez', 'darioflores170@gmail.com', '32613b632e060932bb6c348d46a398a035e81da368d0052a0cd91a4f8031b3a0', 1),
(2, 'Dario', 'Sanchez', 'darioflores175@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(3, 'Dario', 'Sanchez', 'darioflores180@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(4, 'Dario', 'Sanchez', 'darioflores190@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(5, 'Dario', 'Sanchez', 'darioflores200@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(6, 'Dario', 'Sanchez', 'darioflores250@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(7, 'Dario', 'Sanchez', 'darioflores290@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(8, 'Dario', 'Sanchez', 'darioflores300@gmail.com', '3ff254b5666126a2ac31909a82c33bd26756573c5c6ad993a5a72a0d74756ca4', 1),
(9, 'Michelle Sanchez', 'Sanchez', 'darioflores150@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(10, 'Michelle', 'Sanchez', 'asgsagsa@gmail.com', '32613b632e060932bb6c348d46a398a035e81da368d0052a0cd91a4f8031b3a0', 1),
(11, 'gasgsag', 'Sanchez', 'asgsagaasa@gmail.com', '32613b632e060932bb6c348d46a398a035e81da368d0052a0cd91a4f8031b3a0', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`),
  ADD KEY `personaid` (`personaid`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idevento` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`personaid`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
