-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2022 a las 22:04:33
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `heavy_metal`
--
CREATE DATABASE IF NOT EXISTS `heavy_metal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `heavy_metal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `idbanda` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id`, `idbanda`, `nombre`) VALUES
(1, 1, 'Seventh Son Of A Seventh Son'),
(2, 1, 'Powerslave'),
(3, 1, 'The Number Of The Beast'),
(4, 2, 'Master of Puppets'),
(5, 2, 'Ride the Lightning'),
(6, 2, 'Kill Em All'),
(7, 3, 'Paranoid'),
(8, 3, 'Master of Reality'),
(9, 3, 'Heaven and Hell'),
(10, 4, 'British Steel'),
(11, 4, 'Defenders of the Faith'),
(12, 4, 'Painkiller'),
(13, 4, 'Screaming For Vengeance'),
(14, 5, 'Killing is my Business'),
(15, 5, 'Rust in Peace'),
(16, 5, 'Countdown to Extinction');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banda`
--

CREATE TABLE `banda` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `banda`
--

INSERT INTO `banda` (`id`, `nombre`) VALUES
(1, ' Iron Maiden'),
(2, 'Metallica'),
(3, 'Black Sabbath'),
(4, 'Judas Priest'),
(5, 'Megadeth');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discos_r01_idx` (`idbanda`);

--
-- Indices de la tabla `banda`
--
ALTER TABLE `banda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `banda`
--
ALTER TABLE `banda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `discos_r01` FOREIGN KEY (`idbanda`) REFERENCES `banda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
