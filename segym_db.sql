-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2016 a las 21:12:14
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `segym_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(7) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(4) NOT NULL,
  `talla` int(4) NOT NULL,
  `imc` double NOT NULL,
  `peso` double NOT NULL,
  `img` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `resultado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `sexo`, `edad`, `talla`, `imc`, `peso`, `img`, `resultado`) VALUES
(48, 'brenda tineo', 'Mujer', 24, 165, 22.04, 60, 'img/silueta-mujer-2.jpg', 'Peso Saludable'),
(52, 'brenda tineo', 'Mujer', 24, 165, 22.04, 60, 'img/silueta-mujer-2.jpg', 'Peso Saludable'),
(53, 'brenda tineo', 'Mujer', 24, 165, 22.04, 60, 'img/silueta-mujer-2.jpg', 'Peso Saludable'),
(54, 'Brayan Laureano', 'Hombre', 20, 178, 25.25, 80, 'img/silueta-hombre-5.jpg', 'Sobrepeso'),
(55, 'Brayan Laureano', 'Hombre', 20, 178, 25.25, 80, 'img/silueta-hombre-5.jpg', 'Sobrepeso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
