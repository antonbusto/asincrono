-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2022 a las 13:29:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `punk_rock`
--
CREATE DATABASE IF NOT EXISTS `punk_rock` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `punk_rock`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `idartista` int(3) NOT NULL,
  `nombre_artista` varchar(60) NOT NULL,
  `puesto_artista` varchar(60) NOT NULL,
  `idbanda` int(2) NOT NULL,
  `foto_artista` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`idartista`, `nombre_artista`, `puesto_artista`, `idbanda`, `foto_artista`) VALUES
(1, 'Joey Ramone', 'vocalista', 1, 'joey-ramone.jpg'),
(2, 'Johnny Ramone', 'guitarrista', 1, 'jonny-ramone.jpg'),
(3, 'Dee Dee Ramone', 'bajista', 1, 'dee-dee-ramone.jpg'),
(4, 'Tommy Ramone', 'baterista', 1, 'tommy-ramone.jpg'),
(5, 'Johnny Rotten', 'vocalista', 2, 'johnny-rotten.jpg'),
(6, 'Steve Jones', 'guitarrista', 2, 'steve-jones.jpg'),
(7, 'Sid Vicious', 'bajista', 2, 'sid-vicius.jpg'),
(8, 'Paul Cook', 'baterista', 2, 'paul-cook.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banda`
--

CREATE TABLE `banda` (
  `idbanda` int(2) NOT NULL,
  `nombre_banda` varchar(60) NOT NULL,
  `resumen_banda` varchar(600) NOT NULL,
  `foto_banda` varchar(60) NOT NULL,
  `logotipo_banda` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banda`
--

INSERT INTO `banda` (`idbanda`, `nombre_banda`, `resumen_banda`, `foto_banda`, `logotipo_banda`) VALUES
(1, 'Ramones', 'Ramones fue una banda de punk formada en Forest Hills, en el distrito de Queens (Nueva York, Estados Unidos) en 1974, y disuelta veintidós años más tarde, en 1996. <br>\r\nPioneros y líderes del naciente punk, cimentaron las bases de este género musical con composiciones simples, minimalistas, repetitivas y letras muy simples o incluso sin sentido, en clara oposición a la pomposidad y la fastuosidad de las bandas que triunfaban en el mercado de los años 1970.', 'ramones.jpg', 'logotipo-ramones.jpg'),
(2, 'Sex Pistols', 'Sex Pistols fue una banda de punk formada en Londres en 1975, considerada por algunas fuentes la responsable de haber iniciado el movimiento punk en el Reino Unido y de inspirar a muchos músicos de punk rock, heavy metal y el rock contemporáneo en general. ', 'sex-pistols.jpg', 'logotipo-sex-pistols.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`idartista`),
  ADD KEY `idbanda` (`idbanda`);

--
-- Indices de la tabla `banda`
--
ALTER TABLE `banda`
  ADD PRIMARY KEY (`idbanda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `idartista` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `banda`
--
ALTER TABLE `banda`
  MODIFY `idbanda` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`idbanda`) REFERENCES `banda` (`idbanda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
