-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2015 a las 22:56:35
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymboree`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_participacion`
--

CREATE TABLE `registro_participacion` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `movil` varchar(45) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `ciudad` varchar(150) NOT NULL,
  `sucursal` varchar(150) NOT NULL,
  `fotografia` varchar(150) NOT NULL,
  `activo` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_participacion`
--

INSERT INTO `registro_participacion` (`id`, `id_user`, `nombre`, `apellidos`, `email`, `telefono`, `movil`, `estado`, `ciudad`, `sucursal`, `fotografia`, `activo`, `fecha_nacimiento`) VALUES
(1, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCalifornia', 'mexico', 'Mexicalli', '380120007-564cb259085a0', 1, '0000-00-00'),
(2, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCalifornia', 'mexico', 'Ensenada', '380120007-564cc48c11e1c', 1, '0000-00-00'),
(3, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCalifornia', 'mexico', 'Mexicalli', '380120007-564cdbc0eef14', 1, '0000-00-00'),
(4, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(5, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(6, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(7, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(8, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Torreon', '', 1, '0000-00-00'),
(9, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(10, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Torreon', '', 1, '0000-00-00'),
(11, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(12, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(13, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '0000-00-00'),
(14, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'DistritoFederal', 'mexico', 'Escandon Condesa', '', 1, '0000-00-00'),
(15, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'DistritoFederal', 'mexico', '--15/05/1992', '', 1, '0000-00-00'),
(16, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'DistritoFederal', 'mexico', 'Florida', '', 1, '0000-00-00'),
(17, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '2015-12-02'),
(18, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '1992-05-15'),
(19, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '1999-07-14'),
(20, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '2015-10-16'),
(21, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '2015-10-16'),
(22, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'EstadodeMexico', 'mexico', 'Cuautitlan', '', 1, '1992-05-15'),
(23, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Queretaro', 'mexico', 'Queretaro', '', 1, '1997-11-19'),
(24, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Queretaro', 'mexico', 'Queretaro', '', 1, '1997-11-05'),
(25, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Guanajuato', 'mexico', 'Celaya', '', 1, '1997-11-13'),
(26, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Guanajuato', 'mexico', 'Celaya', '', 1, '1997-11-19'),
(27, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Guanajuato', 'mexico', 'Celaya', '', 1, '1997-11-18'),
(28, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Guanajuato', 'mexico', 'Celaya', '', 1, '1997-11-17'),
(29, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '1994-07-14'),
(30, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCaliforniaSur', 'mexico', 'Los Cabos Bcs', '', 1, '1994-07-14'),
(31, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Nayarit', 'mexico', 'Nuevo Vallarta', '', 1, '1990-11-21'),
(32, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'QuintanaRoo', 'mexico', 'Cancún', '', 1, '1990-01-30'),
(33, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'QuintanaRoo', 'mexico', 'Cancún', '', 1, '1990-01-30'),
(34, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'QuintanaRoo', 'mexico', 'Cancún', '', 1, '1990-01-30'),
(35, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCalifornia', 'mexico', 'Mexicalli', '', 1, '1990-07-05'),
(36, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'BajaCalifornia', 'mexico', 'Ensenada', '', 1, '1990-07-05'),
(37, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Hidalgo', 'mexico', 'Pachuca', '', 1, '1990-06-12'),
(38, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Hidalgo', 'mexico', 'Pachuca', '', 1, '1990-06-12'),
(39, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '1991-07-10'),
(40, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-07-11'),
(41, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-07-11'),
(42, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-07-11'),
(43, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-07-11'),
(44, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-07-11'),
(45, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-07-11'),
(46, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(47, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(48, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(49, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(50, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(51, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(52, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(53, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(54, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(55, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(56, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(57, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(58, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(59, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-06-12'),
(60, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-03-01'),
(61, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-03-01'),
(62, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-03-01'),
(63, 1, 'Jorge', 'Hernández', '', '', '', '', '', '', '', 1, '1990-03-01'),
(64, 1, 'Jorge', 'Hernándes', '', '', '', '', '', '', '380120007-564e542982330', 1, '1990-07-12'),
(65, 1, 'Adrian', 'Hernándes', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Durango', 'mexico', 'Durango', '380120007-564e5710f268d', 1, '1990-07-12'),
(66, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Nayarit', 'mexico', 'Tepic', '380120007-564f6d9361ceb', 1, '1990-07-11'),
(67, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Nayarit', 'mexico', '', '380120007-564f6fabb94cc', 1, '1990-07-11'),
(68, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Nayarit', 'mexico', '', '380120007-564f71fb7535d', 1, '1990-07-11'),
(69, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Hidalgo', 'mexico', 'Pachuca', '380120007-564f7b04b4591', 1, '1990-11-20'),
(70, 1, '', '', '', '', '', '', '', '', '', 1, '0000-00-00'),
(71, 1, '', '', '', '', '', '', '', '', '', 1, '0000-00-00'),
(72, 1, '', '', 'asa', '', '', '', '', '', '', 1, '0000-00-00'),
(73, 1, '', '', 'asa', '', '', '', '', '', '', 1, '0000-00-00'),
(74, 1, 'Jorge', 'Hernández', 'jorge_delux_123@hotmail.com', '5538676965', '7171929', 'Coahuila', 'mexico', 'Saltillo', '', 1, '1990-07-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `email_sec` varchar(150) NOT NULL,
  `activo` int(11) NOT NULL,
  `no_registro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `matricula`, `email`, `email_sec`, `activo`, `no_registro`) VALUES
(1, '380120007', 'czp@imagen.com.mx', '', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_participacion`
--
ALTER TABLE `registro_participacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_participacion`
--
ALTER TABLE `registro_participacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
