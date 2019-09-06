-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2019 a las 17:22:03
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciarodeo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_tickets`
--

CREATE TABLE `cantidad_tickets` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cantidad_tickets`
--

INSERT INTO `cantidad_tickets` (`id`, `nombre`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colectivos`
--

CREATE TABLE `colectivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_de_ticket`
--

CREATE TABLE `estado_de_ticket` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_de_ticket`
--

INSERT INTO `estado_de_ticket` (`id`, `nombre`) VALUES
(1, 'OK'),
(2, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_salida`
--

CREATE TABLE `hora_salida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hora_salida`
--

INSERT INTO `hora_salida` (`id`, `nombre`) VALUES
(1, '08:10'),
(2, '12:30'),
(3, '15:40'),
(4, '17:20'),
(5, '19:40'),
(6, '22:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospedaje`
--

CREATE TABLE `hospedaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hospedaje`
--

INSERT INTO `hospedaje` (`id`, `nombre`) VALUES
(1, 'cabania'),
(2, 'hotel'),
(3, 'hostel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE `lineas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `nombre`) VALUES
(1, '20 julio'),
(2, 'leonsito'),
(3, 'rivadavia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `packs`
--

CREATE TABLE `packs` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `packs`
--

INSERT INTO `packs` (`id`, `nombre`) VALUES
(1, 'semi-basico'),
(2, 'avanzado'),
(3, 'basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `linea` int(11) DEFAULT NULL,
  `fecha_de_salida` varchar(70) DEFAULT NULL,
  `hora_de_salida` int(11) DEFAULT NULL,
  `tipo_de_asiento` int(11) DEFAULT NULL,
  `cantidad_tickets` int(11) DEFAULT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `paquete` varchar(60) DEFAULT NULL,
  `hospedaje` varchar(60) DEFAULT NULL,
  `estado_de_ticket` varchar(113) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_asiento`
--

CREATE TABLE `tipo_de_asiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_de_asiento`
--

INSERT INTO `tipo_de_asiento` (`id`, `nombre`) VALUES
(1, 'cama'),
(2, 'semi-cama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `nombre`) VALUES
(1, 'administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombrecompleto` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `clave` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombrecompleto`, `dni`, `email`, `telefono`, `clave`, `tipo_usuario`) VALUES
(43, 'samuel23', 'samuelsito', 53413243, 'df@d', 24353215, 'asd', 1),
(44, 'ulises282', 'asd', 4132434, 'df@d', 2147483647, 'asd', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colectivos`
--
ALTER TABLE `colectivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_de_ticket`
--
ALTER TABLE `estado_de_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hora_salida`
--
ALTER TABLE `hora_salida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hospedaje`
--
ALTER TABLE `hospedaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linea-reserva` (`linea`),
  ADD KEY `hora-reserva` (`hora_de_salida`),
  ADD KEY `tipoasiento-reserva` (`tipo_de_asiento`),
  ADD KEY `cantidad-reserva` (`cantidad_tickets`);

--
-- Indices de la tabla `tipo_de_asiento`
--
ALTER TABLE `tipo_de_asiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usu_tipo` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colectivos`
--
ALTER TABLE `colectivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_de_ticket`
--
ALTER TABLE `estado_de_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hora_salida`
--
ALTER TABLE `hora_salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `hospedaje`
--
ALTER TABLE `hospedaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lineas`
--
ALTER TABLE `lineas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `packs`
--
ALTER TABLE `packs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `tipo_de_asiento`
--
ALTER TABLE `tipo_de_asiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usu_tipo` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
