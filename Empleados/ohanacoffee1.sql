-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 01:21:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ohanacoffee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nom_cli` varchar(30) NOT NULL,
  `ape_cli` varchar(30) NOT NULL,
  `dir_cli` varchar(100) NOT NULL,
  `tel_cli` int(11) NOT NULL,
  `correo_cli` varchar(50) NOT NULL,
  `fech_naci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nom_cli`, `ape_cli`, `dir_cli`, `tel_cli`, `correo_cli`, `fech_naci`) VALUES
(4157421, 'Irlanda', 'Montiel', 'Barrio La Brasilia N°29', 320541578, 'ilrlam10@gmail.com', '1997-06-08'),
(4521891, 'Hernesto', 'Valero', 'Barrio La Patria Mz E N° 5', 320551785, 'hernesto12@gmail.com', '1999-10-18'),
(7452145, 'Emiliano', 'Gonzales', 'Barrio Quindio Mz B N° 14', 321524871, 'Emigonza77@gmail.com', '2001-05-07'),
(7455124, 'Ferney', 'Palermo', 'Barrio La Clarita Mz C N° 10', 302651298, 'fpalermo22@gmail.com', '1994-03-05'),
(7854712, 'Martina', 'Martinez', 'Barrio La Patria Mz F N°9', 320458714, 'martinaM09@gmail.com', '1993-05-18'),
(48157452, 'Shirley', 'Rodriguez', 'Barrio Rojas Pinilla N° 7', 320554178, 'shirlyr9@gmail.com', '1997-10-22'),
(55417854, 'Angie', 'Ramirez', 'Barrio El Cincuentenario N°7', 320665412, 'angiram@gmail.com', '2001-05-20'),
(74512245, 'Santiago', 'Bermudez', 'Barrio El Caimo N°23', 320554178, 'santibz@gmail.com', '2000-04-12'),
(415574124, 'Fernando', 'Montoya', 'Barrio El Granada N°44', 320114785, 'fermonto91@gmail.com', '1999-05-21'),
(1135854712, 'Raul', 'Cardenas', 'Barrio Villa Carolina Mz H N°18', 322054781, 'raulcitocar10@gmail.com', '2000-02-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliarios`
--

CREATE TABLE `domiciliarios` (
  `id_domiciilario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `vehiculo` varchar(20) NOT NULL,
  `placa_vehiculo` varchar(10) NOT NULL,
  `activo` varchar(10) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `domiciliarios`
--

INSERT INTO `domiciliarios` (`id_domiciilario`, `nombre`, `telefono`, `direccion`, `vehiculo`, `placa_vehiculo`, `activo`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(11245763, 'Sara', 315264878, 'Barrio Altos la pavona N° 33', 'Automovil', 'ACM-102', 'Disponible', '2018-09-22', '2023-01-02'),
(11548719, 'Mariana', 320659154, 'Barrio 20 de Julio ', 'Motocicleta', 'PCF-45C', 'Ocupado', '2020-09-24', '2023-04-25'),
(75481245, 'Angelica', 32054187, 'Barrio Fundadores N°23', 'Automovil', 'XMV-509', 'Disponible', '2015-02-15', '2020-05-21'),
(112458749, 'David', 320154878, 'Barrio La Cecilia N°44', 'Automovil', 'XYZ-945', 'Disponible', '2017-02-12', '2021-08-21'),
(114751223, 'Harrison', 320154786, 'Barrio Limonares N°2', 'Motocicleta', 'XCN-23O', 'Disponible', '2018-10-22', '2022-05-12'),
(132548798, 'Adriana', 321548796, 'Barrio Platino N°28', 'Motocicleta', 'PCO-76Z', 'Ocupado', '2017-05-18', '2021-09-22'),
(754812369, 'Karol', 312457698, 'Barrio La Universal N°27', 'Motocicleta', 'NCA-76P', 'Ocupado', '2021-02-06', '2022-05-11'),
(1124536987, 'Alonso', 320154785, 'Barrio El Bosque N°10', 'Motocicleta', 'NOE-78N', 'Ocupado', '2015-03-05', '2020-09-09'),
(1145784512, 'Carlos', 32014587, 'Barrio Sucre N° 12', 'Motocicleta', 'ACF-76O', 'Ocupado', '2020-01-11', '2023-03-20'),
(1147541256, 'Martin', 320554178, 'Barrio La Montana N°8', 'Motocicleta', 'NXM-98C', 'Disponible', '2019-06-13', '2022-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `hora_despacho` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_domicilio` int(11) NOT NULL,
  `id_domiciliario` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `precio_domicilio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo_electro` varchar(30) NOT NULL,
  `fech_naci` date NOT NULL,
  `Puesto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido`, `direccion`, `telefono`, `correo_electro`, `fech_naci`, `Puesto`) VALUES
(11245784, 'Henry', 'Hernandez', 'Barrio San Andres', 320154874, 'Hhernandez@gmail.com', '1991-09-22', 'Mesero'),
(11548741, 'Jorge', 'Henao', 'Barrio Monteprado', 320154886, 'jorgito102@gmail.com', '1995-04-23', 'Chef'),
(41578451, 'Antonio', 'Rodriguez', 'Barrio Las Colinas N° 20', 320154788, 'antorodri02@gmail.com', '1995-03-23', 'Cajero'),
(41944751, 'Andres', 'Ortiz', 'Barrio Arcoiris', 320554871, 'ortizandre5@gmail.com', '1999-10-22', 'Mesero'),
(112459621, 'Diego', 'Marin', 'Barrio La Adiela', 301548794, 'diegomari@gmail.com', '1985-06-20', 'Aseador'),
(112541578, 'Milena', 'Parra', 'Barrio La Riviera', 320514847, 'mileparra@gmail.com', '1990-09-22', 'Auxiliar de cocina'),
(113254745, 'Jhon', 'Perez', 'Barrio El Prado', 320659182, 'jhonper27@gmail.com', '1996-09-12', 'Portero'),
(113254795, 'Mario', 'Osorio', 'Barrio Genesis', 320114758, 'mariosorio@gmail.com', '2000-01-24', 'Administrador'),
(115478121, 'Mariela', 'Arias', 'Barrio Villa Liliana', 320154789, 'mari.arias1@gmail.com', '1998-04-15', 'Administradora'),
(124578961, 'Jose', 'Lopez', 'Calle 45 N° 23 Norte', 320551478, 'joselop@gmail.com', '1995-05-17', 'Mesero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado` int(11) NOT NULL,
  `nombre_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `nom_plato` varchar(25) NOT NULL,
  `desc_plato` varchar(100) NOT NULL,
  `notas_adicionales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id_mesa` int(11) NOT NULL,
  `nombre_mesa` varchar(30) NOT NULL,
  `ubicacion_mesa` varchar(30) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `fech_hor_pedido` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `id_menus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `fech_hor_reserv` datetime NOT NULL,
  `est_reservacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `domiciliarios`
--
ALTER TABLE `domiciliarios`
  ADD PRIMARY KEY (`id_domiciilario`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_domiciliario` (`id_domiciliario`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estado`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_mesa` (`id_mesa`),
  ADD KEY `id_menus` (`id_menus`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_mesa` (`id_mesa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `domicilio_ibfk_1` FOREIGN KEY (`id_domiciliario`) REFERENCES `domiciliarios` (`id_domiciilario`),
  ADD CONSTRAINT `domicilio_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Filtros para la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD CONSTRAINT `mesas_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`estado`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_4` FOREIGN KEY (`id_menus`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id_mesa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
