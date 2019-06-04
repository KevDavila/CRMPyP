-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2019 a las 02:07:52
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `direccion`, `correo`, `fecha_nac`, `edad`, `telefono`, `id_venta`) VALUES
(1, 'Jose Ventura Cortes', 'c 80 entre 27 y 25', 'jose@hotmailcom', '2017-01-10', 0, 0, 0),
(2, 'Sara Gomez Guitierrez', 'c 40 entre 50 y 52', 'sara@gmail.com', '2019-04-15', 0, 12345234, 0),
(3, 'Jose Ventura Cortes', 'c 80 entre 27 y 25', 'jose@hotmailcom', '2017-01-10', 0, 0, 0),
(4, 'Sara Gomez Guitierrez', 'c 40 entre 50 y 52', 'sara@gmail.com', '2019-04-15', 0, 12345234, 0),
(5, 'Juan Martinez', 'c 60 entre 50 y 52', 'juan@gmail.com', '1996-09-18', 0, 1234534521, 0),
(6, 'Britney Garrido', 'c 32 entre 40 y 42', 'brit@gmail.com', '2000-01-15', 0, 12345234, 0),
(7, 'Oscar rolando', 'c 10 entre 20 y 22', 'rolando@outlok.com', '2016-04-20', 0, 12345234, 0),
(8, 'Andrea Caceres', 'c 70 entre 50 y 52', 'andre@gmail.com', '1999-01-20', 0, 12345234, 0),
(9, 'Nathalia Tzab', 'c 80 entre 30 y 32', 'Nat@gmail.com', '1996-05-20', 0, 12345234, 0),
(10, 'Angeles Uc', 'c 170 entre 150 y 152', 'Angy@gmail.com', '1994-02-05', 0, 12345234, 0),
(11, 'Maritere Azueta', 'c 10 entre 20 y 22', 'mari@gmail.com', '1996-05-30', 0, 12345234, 0),
(12, 'Kimberly Manzanilla', 'c 27 entre 60 y 58', 'kim@gmail.com', '1998-12-12', 0, 12345234, 0),
(13, 'Roselia Sanchez', 'c 120 entre 30 y 28', 'rose@gmail.com', '1992-10-09', 0, 12345234, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `telefono`, `correo`, `estado`, `mensaje`, `id_cliente`) VALUES
(1, 'Jose Ventura Cortes', 1234123412, 'jose@hotmailcom', 'Yucatan', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(2, 'Jose Ventura Cortes', 1234123412, 'jose@hotmailcom', 'Yucatan', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(3, 'Roselia sanchez', 1234123412, 'rose@hotmailcom', 'Mexicali', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(4, 'Jonatan rogelio ventura', 1234123412, 'rogelio@hotmailcom', 'Mexico', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(5, 'Roberto chance chi', 1234123412, 'Robert@hotmailcom', 'Campeche', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(6, 'Juan Martinez Aké', 1234123412, 'jhon@hotmailcom', 'Tijuana', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(7, 'Alice Ventura Rojas', 1234123412, 'ali@hotmailcom', 'Cancun', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(8, 'Angelica Cetina cortes', 1234123412, 'angy@hotmailcom', 'sinalio', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(9, 'Miguel Pech Mena', 1234123412, 'mike@hotmailcom', 'Yucatan', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0),
(10, 'Kimberly Manzanilla Coral', 1234123412, 'kimi@hotmailcom', 'Queretaro', 'Las ofertan que ofrecen son muy buenas y deberian mantenerlas o sacar mas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL,
  `producto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `costo` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id_cotizacion`, `producto`, `costo`, `cantidad`, `created_date`) VALUES
(1, 'Playera', 130, 25, '2002-03-18 23:00:00'),
(2, 'Tazas', 95, 40, '2019-02-13 23:00:00'),
(3, 'Tazas', 95, 60, '2019-02-19 23:00:00'),
(4, 'Gorra', 110, 15, '2019-02-09 23:00:00'),
(5, 'Serigrafiado', 130, 35, '2019-01-19 23:00:00'),
(6, 'Tazas', 95, 10, '2019-04-01 22:00:00'),
(7, 'Tarro', 80, 20, '2019-02-27 23:00:00'),
(8, 'Lona', 180, 3, '2019-02-28 23:00:00'),
(9, 'Lona', 90, 13, '2019-02-14 23:00:00'),
(10, 'Tazas', 95, 80, '2019-01-05 23:00:00'),
(11, 'Playeras', 120, 5, '2018-09-01 22:00:00'),
(12, 'Gorra', 150, 10, '2019-04-13 22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ape_paterno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ape_materno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `departamento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `ape_paterno`, `ape_materno`, `genero`, `fechaNac`, `departamento`, `id_venta`) VALUES
(2, 'Alicia', 'Sannchez', 'Ancona', 'Femenino', '1991-12-14', 'caja', 1),
(3, 'Angel', 'Pech', 'Mena', 'Masculino', '1995-03-10', 'caja', 2),
(4, 'Alejandra A', 'Sannchez', 'Acosta', 'Femenino', '1997-10-03', 'caja', 3),
(5, 'Nestor', 'Reyna', 'Caamal', 'Masculino', '1997-03-26', 'administracion', 4),
(6, 'Adriana', 'Ventura', 'Acosta', 'Femenino', '1997-08-02', 'finanzas', 5),
(7, 'Angel', 'Mendoza', 'Reyes', 'Masculino', '1997-07-07', 'produccion', 6),
(8, 'Carlos', 'Rivera', 'Ancona', 'Masculino', '1998-05-14', 'ventas', 7),
(9, 'Candy', 'Zapata', 'Martinez', 'Femenino', '1991-12-14', 'caja', 8),
(10, 'Elena', 'Martinez', 'Gomez', 'Femenino', '1997-12-14', 'produccion', 9),
(11, 'Pilar', 'Sannchez', 'Perez', 'Femenino', '1995-08-14', 'caja', 10),
(12, 'Guadalupe', 'Zamudio', 'Ancona', 'Femenino', '1990-07-26', 'finanzas', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marketing`
--

CREATE TABLE `marketing` (
  `id_marketing` int(11) NOT NULL,
  `producto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_vendida` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marketing`
--

INSERT INTO `marketing` (`id_marketing`, `producto`, `cantidad_vendida`, `costo`, `descuento`, `id_venta`) VALUES
(1, 'Playeras', 500, 30000, 50, 1),
(2, 'Gorra', 200, 3000, 15, 2),
(3, 'Tarro', 500, 2000, 10, 3),
(4, 'Taza', 500, 5000, 20, 4),
(5, 'Lona', 500, 1300, 30, 5),
(6, 'Vaso', 500, 1000, 50, 6),
(7, 'Playeras', 500, 4000, 15, 7),
(8, 'Tarro', 500, 3000, 15, 8),
(9, 'Serigrafia', 500, 1500, 10, 9),
(10, 'Bordado', 500, 30000, 10, 10),
(11, 'Playeras', 500, 30000, 30, 11),
(12, 'Vaso', 500, 30000, 20, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `credito` float NOT NULL,
  `contado` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `credito`, `contado`) VALUES
(1, 0, 1),
(2, 0, 1),
(3, 1, 0),
(4, 1, 0),
(5, 0, 1),
(6, 0, 1),
(7, 1, 0),
(8, 1, 0),
(9, 1, 0),
(10, 0, 1),
(11, 0, 1),
(12, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo_barra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_producto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_unitario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_barra`, `tipo_producto`, `Color`, `modelo`, `description`, `precio_unitario`, `cantidad`) VALUES
(2, '1121093463673', 'Playeras', 'Blanca', 'Vinil', 'Playeras personalizadas Blancas ', 110, 50),
(3, '1293480238121', 'Playeras', 'Multicolor', 'Vinil', 'Playeras personalizadas Colores ', 130, 30),
(4, '3218945382731', 'Playeras', 'Blanco', 'Vinil', 'Playera manga larga blanca ', 140, 30),
(5, '23193043892817', 'Serigrafia', 'Blanco', 'algodon', 'playeras blancas c/ impresión a 1 tinta ', 90, 20),
(6, '3460293485716', 'Serigrafia', 'Multicolor', 'algodon', 'playeras color c/ impresión a 1 tinta', 100, 20),
(7, '1234123657809', 'Gorra', 'Blanca', 'Cara blanca', 'Gorras Personalizadas básica  ', 100, 30),
(8, '4312342786901', 'Gorra', 'Blanco', 'Cara blanca', 'Gorras Personalizadas premiun', 120, 40),
(9, '3492834561231', 'Gorra', 'Blanco', 'Cara blanca', 'Gorra Acrilana Bordada ', 80, 30),
(10, '8976897612312', 'Tazas', 'Blanco', 'Pequeña', 'Taza blanca personalizada', 70, 30),
(11, '1923018347124', 'Tazas', 'Blanco', 'mediana', 'Taza blanca color personaliza ', 100, 30),
(12, '0154928141412', 'Tazas', 'Negra', 'Pequeña', 'Taza mágica negra', 150, 30),
(13, '1241658241321', 'Tarro', 'Blanco', 'Grande', 'Tarro Cerveza personalizado', 180, 15),
(14, '142542378909', 'Tarro', 'Blanco', 'Grande', 'Tarro para café personalizado', 180, 15),
(15, '1435609809123', 'Cilindros', 'Plata', 'Grande', 'Cilindro Aluminio', 130, 10),
(16, '3421567890234', 'Mouseped', 'Blanco', 'mediano', 'MousePad', 70, 20),
(17, '1234256789123', 'Lona', 'Blanco', 'Plastico', 'Lona mtr2', 130, 10),
(18, '2314512398071', 'Tarjetas', 'Blanco', 'Hoja Gruesa', '100 Tarjetas de presentacion', 150, 300),
(19, '1236780912341', 'Iman', 'Gris', 'Plastico', '100 imanes', 350, 300),
(20, '2341567589012', 'Vaso', 'Multicolor', 'Mediano', 'Vasos neones mínimo 25pzs / 30 o más piezas', 28, 20),
(21, '3452697801324', 'Vasos', 'Multicolor', 'Mediano', 'Anforas traslucidas mínimo 25pzs / 30 o más piezas', 45, 30),
(22, '5633267532132', 'Vasos', 'Multicolor', 'Pequeña', 'Anforas lake mínimo 25pzs / 30 o más piezas', 28, 50),
(23, '8564675321321', 'Vasos', 'Multicolor', 'Mediano', 'Vaso Chelero mínimo 25pzs / 30 o más piezas', 45, 30),
(24, '6748679123423', 'Vasos', 'Multicolor', 'Grande', 'Anfora Lake larga mínimo 25pzs / 30 o más piezas', 45, 30),
(25, '1329803402108', 'Vasos', 'Blanco', 'Pequeña', 'Cilindro blanco mínimo 25pzs / 30 o más piezas', 35, 30),
(26, '1325476980132', 'Vasos', 'Multicolor', 'Pequeña', 'Vasos con popote mínimo 25pzs / 30 o más piezas', 28, 30),
(27, '1243546243130', 'Playeras', 'Blanco', 'Polo', 'Playera Polo blanca bordada', 120, 20),
(28, '1243546524313', 'Playeras', 'Multicolor', 'Polo', 'Playera Polo color bordada', 135, 20),
(29, '2314109892143', 'Hilo', 'Multicolor', 'Borde', 'Bordado 8x8 cm', 40, 30),
(30, '3241534623412', 'Playeras', 'Negro', 'Dryfit', 'Polos Dryfit spiro c/ bordado o vinil', 180, 30),
(31, 'codigo_barra', 'tipo_producto', '', 'modelo', 'description', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `folio` int(11) NOT NULL,
  `nombre_contacto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom_empresa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`folio`, `nombre_contacto`, `telefono`, `correo`, `nom_empresa`, `direccion`, `id_producto`) VALUES
(1, 'Marissa Perez Gonzalez', 9991128668, 'mariendcol@hotmail.com', 'Mariendco', 'Calle 100 x 29 y 31', 10),
(2, 'Nestor Martinez E', 9995460897, 'playersnest@hotmail.com', 'Players', 'Calle 60 Norte', 3),
(3, 'Maria Naal Lopez', 6915356298, 'tennisteen@outlook.com', 'TennisTeen', 'Calle 45 x 60 y 63', 24),
(4, 'Jose Luis Mendez', 9999061212, 'colorsycolors@hotmail.com', 'ColorsyColors', 'Calle 13A x 50 y 53', 8),
(5, 'Jacobo Alexander', 9690512157, 'jacobtrue@outlook.com', 'True', 'Calle 25 Sur Merida', 17),
(6, 'Jhovany Mendoza Cruz', 9994299563, 'tasasytasas@gmail.com', 'TasasyTasas', 'Calle 30 x 98 y 100', 30),
(7, 'Alejandra Mendoza', 9995141485, 'hilos++@hotmail.com', 'Hilos++', 'Calle 85 x 30 y 33', 6),
(8, 'Jair Manzano', 9692049612, 'mousejm@outlook.com', 'Mouse', 'Calle 45 Santa Fe Norte', 22),
(9, 'Aurora Maria Lopez G', 9999096672, 'Colorplus@hotmail.com', 'ColorPlus', 'Calle 25B esquina', 29),
(10, 'Alezander River', 9690047923, 'aahilos@outlook.com', 'AAHilos', 'Calle 80 x 35 y 37', 15),
(11, 'Alejandro Camal', 9991059360, 'colorscorp@gmail.com', 'Colors', 'Calle 102 x 29 y 31', 26),
(19, 'Luis Perez', 9991808614, 'luisindustries@outlook.com', 'RopaColors', 'Calle 80 x 29 y 31', 2),
(20, 'Alejandra Uribe Caam', 9690045257, 'fashionnova@outlook.com', 'Fashion', 'Calle 47 x 19 Centro', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_dep` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `name`, `lastname`, `email`, `password`, `is_active`, `is_dep`, `is_admin`, `created_at`) VALUES
(1, 'admin', 'Adriana Isabel', 'Ventura Acosta', '', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 0, 1, '2018-10-29 19:30:32'),
(3, 'ventas', 'pedro ', 'perez pech', '', '1d415500d481e0c1c238189c22ea057da663c1e7', 1, 3, 0, '2019-05-02 10:50:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `descuento` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_cotizacion` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fecha_pedido`, `fecha_entrega`, `descuento`, `total`, `cantidad`, `id_producto`, `id_cliente`, `id_cotizacion`, `id_pago`) VALUES
(1, '2019-02-18', '2019-02-28', 20, 1700, 24, 3, 5, 2, 1),
(2, '2019-02-18', '2019-02-28', 10, 800, 8, 2, 1, 1, 2),
(3, '2019-02-18', '2019-02-28', 15, 1800, 15, 4, 2, 3, 3),
(4, '2019-02-18', '2019-02-28', 10, 1600, 10, 5, 3, 4, 4),
(5, '2019-02-18', '2019-02-28', 10, 2000, 15, 6, 4, 5, 5),
(6, '2019-02-18', '2019-02-28', 10, 800, 8, 7, 6, 6, 6),
(7, '2019-02-18', '2019-02-28', 10, 1200, 25, 8, 7, 7, 7),
(8, '2019-02-18', '2019-02-28', 10, 2200, 20, 9, 8, 8, 8),
(9, '2019-02-18', '2019-02-28', 10, 1800, 17, 10, 9, 9, 9),
(10, '2019-02-18', '2019-02-28', 10, 2000, 13, 11, 10, 10, 10),
(11, '2019-02-18', '2019-02-28', 10, 5000, 40, 12, 11, 11, 11),
(12, '2019-02-18', '2019-02-28', 10, 5000, 68, 13, 13, 12, 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id_marketing`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_cotizacion` (`id_cotizacion`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id_marketing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_contacto`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`);

--
-- Filtros para la tabla `marketing`
--
ALTER TABLE `marketing`
  ADD CONSTRAINT `marketing_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`),
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_pago`) REFERENCES `pago` (`id_pago`),
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
