-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2021 a las 05:23:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bjorshoop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` varchar(5) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nombre_producto` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `precio` double NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre_producto`, `descripcion`, `precio`, `stock`) VALUES
('02', 'mouse logitech', 'inalambrico', 350, 11),
('03', 'power bank adata', '1 unidad', 380, 12),
('01', 'teclado logitech', '1 unidad', 380, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(60) COLLATE utf8_general_mysql500_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_general_mysql500_ci NOT NULL,
  `correo` varchar(80) COLLATE utf8_general_mysql500_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_general_mysql500_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `contra` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellidos`, `correo`, `direccion`, `usuario`, `contra`) VALUES
('BLADIMIR DE JESUS', 'ORTIZ RAMIREZ', 'bladimir.ortiz25@gmail.com', 'LAS GRANJAS NUM 144 SAN FRACISCO JAVIER', 'bladi', '1234'),
('AXEL BRYAN', 'ORTIZ RAMIREZ', 'ortiz@gmail.con', 'Las Granjas', 'axel', '12345'),
('CLAUDIA', 'VELASCO GARCIA', '', '', 'axel', '12345'),
('JUANA', 'RAMIREZ', 'ortiz@gmail.con', 'Las Granjas', 'juana', '222'),
('AMADEO ', 'SANTOS VARGAS', 'ortiz@gmail.con', 'Las Granjas', 'amadeo', '444'),
('PEDRO', 'ORTIZ RAMIREZ', 'ortiz@gmail.con', 'Las Granjas', 'pedro', '111'),
('PEDRO', 'ORTIZ RAMIREZ', 'ortiz@gmail.con', 'Las Granjas', 'pedro', '111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
