-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 01:31:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

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
-- Estructura de tabla para la tabla `detalles del pedido`
--

CREATE TABLE `detalles del pedido` (
  `id_detalle` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_platillo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles del pedido`
--

INSERT INTO `detalles del pedido` (`id_detalle`, `id_pedido`, `id_platillo`, `cantidad`) VALUES
(1, 1, 8, 2),
(2, 2, 1, 3),
(3, 3, 7, 4),
(4, 4, 10, 5),
(5, 5, 5, 3),
(6, 6, 9, 4),
(7, 7, 6, 4),
(8, 8, 5, 2),
(9, 9, 10, 6),
(10, 10, 4, 8);

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

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`hora_despacho`, `id_domicilio`, `id_domiciliario`, `id_pedido`, `precio_domicilio`) VALUES
('2023-05-17 02:59:08', 1, 132548798, 1, 6000),
('2023-05-17 03:01:32', 2, 1124536987, 2, 8000),
('2023-05-17 03:01:44', 3, 75481245, 3, 9000),
('2023-05-17 03:02:07', 4, 1145784512, 4, 7000),
('2023-05-17 03:02:19', 5, 112458749, 5, 8000),
('2023-05-17 03:03:08', 6, 114751223, 6, 5000),
('2023-05-17 03:07:13', 7, 754812369, 7, 9000),
('2023-05-17 03:04:32', 8, 11548719, 8, 7000),
('2023-05-17 03:06:59', 9, 1147541256, 9, 4000),
('2023-05-17 03:07:25', 10, 11245763, 10, 7000);

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

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`estado`, `nombre_estado`) VALUES
(1, 'Disponible'),
(2, 'Ocupada'),
(3, 'reservada'),
(4, 'dañada'),
(5, 'mantenimiento');

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

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `nom_plato`, `desc_plato`, `notas_adicionales`) VALUES
(1, 'Capuchino', 'Un delicioso café preparado con café expreso y leche montada con vapor para darle cremosidad', 'Agrega cacao en polvo o canela al gusto'),
(2, 'Café Moca', 'Se combina una medida de expreso con chocolate en polvo o sirope, seguido de leche o nata. Al gusto', 'Contiene lácteos'),
(3, 'Café Irish', 'Un café con leche clásico (frio) donde se utiliza nata con canela encima para darle un toque sabroso', 'Se puede elegir sin canela'),
(4, 'Café Americano', 'Un café caliente hecho a base de agua.', 'Amargo'),
(5, 'Café Helado', 'Se hace un café con leche con bastante hielo ', 'Elección con o sin azúcar '),
(6, 'Café Doble', 'Un café con doble esencia lo que lo hace mas amargo', 'Elección a añadir azúcar'),
(7, 'Galletas de Café', 'Unas deliciosas galletas, hechas con masa artesanal y un toque delicioso de café dulce.', 'Viene acompañado de un café pequeño'),
(8, 'Chocolate con Café', 'Un delicioso chocolate de pastilla adicionando café, excelente para una tarde fría.', 'Se le puede agregar leche'),
(9, 'Pastel de Café', 'Un pastel exquisito para un cumpleaños, comer una porción o compartirlo con tus amigos.', 'Se vende individual o entero'),
(10, 'Helado de Café', 'Una opción deliciosa para un día caluroso', 'Máximo 3 bolas ');

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

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id_mesa`, `nombre_mesa`, `ubicacion_mesa`, `capacidad`, `estado`) VALUES
(1, 'mesa 1', 'Sala principal', 4, 1),
(2, 'mesa 2', 'Terraza', 2, 1),
(3, 'mesa 3', 'Sala principal', 5, 1),
(4, 'mesa 4', 'Terraza', 3, 1),
(5, 'mesa 5', 'balcón ', 4, 1),
(6, 'mesa 6', 'Terraza', 6, 1),
(7, 'mesa 7', 'segundo piso', 3, 1),
(8, 'mesa 8', 'balcón ', 5, 1),
(9, 'mesa 9', 'segundo piso', 2, 1),
(10, 'mesa 10', 'Terraza', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `fech_hor_pedido` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `id_empleado`, `id_mesa`, `fech_hor_pedido`) VALUES
(1, 55417854, 41944751, 1, '2023-05-17 02:41:57'),
(2, 7452145, 41578451, 2, '2023-05-17 02:43:04'),
(3, 415574124, 112459621, 3, '2023-05-17 02:43:28'),
(4, 7455124, 11245784, 4, '2023-05-17 02:44:19'),
(5, 4521891, 113254745, 5, '2023-05-17 02:45:09'),
(6, 4157421, 11548741, 6, '2023-05-17 02:45:30'),
(7, 7854712, 124578961, 7, '2023-05-17 02:46:13'),
(8, 1135854712, 115478121, 8, '2023-05-17 02:46:39'),
(9, 74512245, 113254795, 9, '2023-05-17 02:46:53'),
(10, 48157452, 112541578, 10, '2023-05-17 02:47:08');

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
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `id_cliente`, `id_mesa`, `fech_hor_reserv`, `est_reservacion`) VALUES
(1, 55417854, 1, '2023-05-24 14:00:00', 'Confirmada'),
(2, 7452145, 2, '2023-05-20 18:25:00', 'confirmada'),
(3, 415574124, 3, '2023-06-20 07:30:00', 'pendiente '),
(4, 7455124, 4, '2023-05-30 13:40:00', 'cancelada '),
(5, 4521891, 5, '2023-05-13 10:30:00', 'pendiente'),
(6, 4157421, 6, '2023-05-27 11:10:00', 'confirmada\r\n'),
(7, 7854712, 7, '2023-05-29 08:20:00', 'pendiente '),
(8, 1135854712, 8, '2023-06-06 15:30:00', 'cancelada'),
(9, 74512245, 8, '2023-05-04 13:15:00', 'confirmada '),
(10, 48157452, 10, '2023-05-01 19:40:00', 'confirmada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalles del pedido`
--
ALTER TABLE `detalles del pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_platillo` (`id_platillo`),
  ADD KEY `cantidad` (`cantidad`);

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
  ADD KEY `id_mesa` (`id_mesa`);

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
-- Filtros para la tabla `detalles del pedido`
--
ALTER TABLE `detalles del pedido`
  ADD CONSTRAINT `detalles del pedido_ibfk_1` FOREIGN KEY (`id_platillo`) REFERENCES `platillos` (`id_platillo`),
  ADD CONSTRAINT `detalles del pedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

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
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id_mesa`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `mesas` (`id_mesa`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
