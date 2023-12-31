-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2023 a las 08:56:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yoquese`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ClienteID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosfacturacion`
--

CREATE TABLE `datosfacturacion` (
  `FacturacionID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `CIF` varchar(15) DEFAULT NULL,
  `DireccionFacturacion` varchar(100) DEFAULT NULL,
  `NombreEmpresa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccionesenvio`
--

CREATE TABLE `direccionesenvio` (
  `DireccionID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `CodigoPostal` varchar(10) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL,
  `Provincia` varchar(50) DEFAULT NULL,
  `Pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juguetesempresa`
--

CREATE TABLE `juguetesempresa` (
  `ArticuloID` int(11) NOT NULL,
  `NombreArticulo` varchar(100) DEFAULT NULL,
  `StockDisponible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteID`);

--
-- Indices de la tabla `datosfacturacion`
--
ALTER TABLE `datosfacturacion`
  ADD PRIMARY KEY (`FacturacionID`),
  ADD KEY `ClienteID` (`ClienteID`);

--
-- Indices de la tabla `direccionesenvio`
--
ALTER TABLE `direccionesenvio`
  ADD PRIMARY KEY (`DireccionID`),
  ADD KEY `ClienteID` (`ClienteID`);

--
-- Indices de la tabla `juguetesempresa`
--
ALTER TABLE `juguetesempresa`
  ADD PRIMARY KEY (`ArticuloID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosfacturacion`
--
ALTER TABLE `datosfacturacion`
  ADD CONSTRAINT `datosfacturacion_ibfk_1` FOREIGN KEY (`ClienteID`) REFERENCES `clientes` (`ClienteID`);

--
-- Filtros para la tabla `direccionesenvio`
--
ALTER TABLE `direccionesenvio`
  ADD CONSTRAINT `direccionesenvio_ibfk_1` FOREIGN KEY (`ClienteID`) REFERENCES `clientes` (`ClienteID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `clientes` (`ClienteID`, `Nombre`, `Apellido`, `Usuario`, `Contraseña`, `CorreoElectronico`, `Telefono`)
VALUES
(1, 'Juan', 'Pérez', 'juanperez', 'contraseña123', 'juanperez@example.com', '1234567890'),
(2, 'María', 'Gómez', 'mariagomez', 'clave456', 'mariagomez@example.com', '9876543210');
-- Agrega más filas según sea necesario
INSERT INTO `datosfacturacion` (`FacturacionID`, `ClienteID`, `CIF`, `DireccionFacturacion`, `NombreEmpresa`)
VALUES
(1, 1, '123456789A', 'Calle Principal 123', 'Mi Empresa S.L.'),
(2, 2, '987654321B', 'Avenida Secundaria 456', 'Empresa de María');
-- Agrega más filas según sea necesario
INSERT INTO `direccionesenvio` (`DireccionID`, `ClienteID`, `Direccion`, `CodigoPostal`, `Ciudad`, `Provincia`, `Pais`)
VALUES
(1, 1, 'Calle Envío 1', '54321', 'Ciudad A', 'Provincia X', 'País 1'),
(2, 2, 'Avenida Envío 2', '98765', 'Ciudad B', 'Provincia Y', 'País 2');
-- Agrega más filas según sea necesario
INSERT INTO `juguetesempresa` (`ArticuloID`, `NombreArticulo`, `StockDisponible`)
VALUES
(1, 'Juguete 1', 100),
(2, 'Juguete 2', 50),
(3, 'Juguete 3', 75);
-- Agrega más filas según sea necesario
