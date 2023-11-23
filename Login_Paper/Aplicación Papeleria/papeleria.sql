-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 03:28:13
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosreal`
--

CREATE TABLE `productosreal` (
  `Nombre` varchar(50) NOT NULL,
  `ID` int(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Precio` int(50) NOT NULL,
  `Activo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productosreal`
--

INSERT INTO `productosreal` (`Nombre`, `ID`, `Marca`, `Precio`, `Activo`) VALUES
('Resistol', 20, 'Alfa', 10, 0),
('Cuaderno', 5, 'scribe', 28, 0),
('Tijeras', 10, 'Barrilito', 20, 0),
('Lápiz', 15, 'Mapita', 2, 0),
('Crayones', 7, 'Barrilito', 22, 1),
('Silicón', 27, 'Smarty', 18, 0),
('Cartoncillo', 17, 'Smarty', 7, 1),
('Fomi', 18, 'Scribe', 10, 1),
('Colores ', 37, 'Mapita', 24, 1),
('Plumones', 80, 'Barrilito', 50, 0),
('Cuaderno Cuadros', 40, 'Scribe', 35, 1),
('Plumones', 11, 'Smarty', 55, 1),
('Juego Geométrico', 18, 'Barrilito', 35, 1),
('Plastilina', 12, 'León', 35, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
