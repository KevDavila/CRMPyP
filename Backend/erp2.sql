-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 11:33 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ausencias`
--

CREATE TABLE `ausencias` (
  `id_ausencia` int(15) NOT NULL,
  `f_inicio` date NOT NULL,
  `f_final` date NOT NULL,
  `autorizacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ausencias`
--

INSERT INTO `ausencias` (`id_ausencia`, `f_inicio`, `f_final`, `autorizacion`) VALUES
(2, '2018-12-03', '2018-12-08', 'Mauricio Ernesto Garcia Jimenez'),
(3, '2018-12-14', '2018-12-17', 'Alejandra Rocio Perez Alcala'),
(4, '2019-01-04', '2019-01-06', 'Gabriela Gomez Peraza'),
(5, '2019-01-17', '2019-01-18', 'Alejandra Rocio Perez Alcala'),
(6, '2019-11-23', '2019-11-25', 'kevin sergio'),
(7, '2018-10-11', '2018-10-23', 'Kevin Sergio');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
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

-- --------------------------------------------------------

--
-- Table structure for table `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL,
  `producto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `costo` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cotizacion`
--

INSERT INTO `cotizacion` (`id_cotizacion`, `producto`, `costo`, `cantidad`, `created_date`) VALUES
(1, 'Gorra Plana Trucker', 80, 14, '2019-11-04 10:00:00'),
(2, 'Playera Cuello V', 65, 35, '2019-11-04 10:30:00'),
(3, 'Playera Raglan', 140, 30, '2019-11-22 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ape_paterno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ape_materno` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `rfc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridad` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fechaingreso` date NOT NULL,
  `id_horario` int(15) DEFAULT NULL,
  `id_ausencia` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `ape_paterno`, `ape_materno`, `fechaNac`, `rfc`, `escolaridad`, `direccion`, `telefono`, `correo`, `departamento`, `fechaingreso`, `id_horario`, `id_ausencia`) VALUES
(5, 'Manuel Jesus', 'Puga', 'Acosta', '1996-11-24', 'MAJEAC1954', 'Preparatoria', 'Calle 68 entre 40 y 42', '9995469076', 'isgerag@hotmail.com', 'Textil', '2018-03-15', 1, 2),
(8, 'Alejandra', 'Estrada', 'Ramirez', '1997-08-03', 'ALEESRA973', 'Universidad', 'Calle 100 entre 48', '999128668', 'alejandra97@outlook.com', 'Finanzas', '0205-04-16', 3, NULL),
(10, 'Maribel', 'Gonzalez', 'Martinez', '1997-08-03', 'MARIES9658', 'Preparatoria', 'Calle 58 entre 29', '9999025679', 'mari96@gmail.com', 'Caja', '2017-06-23', 3, NULL),
(11, 'Kendall', 'Pizarro', 'Gutierrez', '1995-12-12', 'kenpigu976', 'Primaria', 'Calle 60 entre 33', '9994586249', 'keni99@gmail.com', 'Limpieza', '2017-11-27', 1, NULL),
(12, 'Oscar', 'Delgado', 'Lopez', '1991-05-12', 'OSCLODE3793', 'Universidad', 'Calle 100 entre 48', '9999025679', 'oscar468@hotmail.com', 'Recursos Humanos', '2015-05-16', 3, NULL),
(13, 'Alicia ', 'Davila', 'Perez', '1996-11-25', 'ALDAPE9625', 'Secundaria', 'Calle 56 entre 33', '9991457329', 'aliisc@gmail.com', 'Gerente', '2016-09-14', 4, NULL),
(14, 'Cristal', 'Cruz', 'Pizarro', '1998-12-28', 'CRCRPIS974', 'Universidad', 'Calle 60 entre 33', '9999025679', 'kajkja@kla.com', 'Finanzas', '2017-11-27', 2, NULL),
(15, 'Pedro', 'Zacarias', 'Gutierrez', '1997-08-03', 'MARIES9658', 'Universidad', 'Calle 58 entre 29', '9994586249', 'mari96@gmail.com', 'Caja', '0205-04-16', 1, NULL),
(16, 'Antonio', 'Ventura', 'Martinez', '1997-08-03', 'OSCLODE3793', 'Primaria', 'Calle 100 entre 48', '999128668', 'alejandra97@outlook.com', 'Textil', '2015-05-16', 4, NULL),
(17, 'Sidney', 'Styles', 'Ken', '1996-11-25', 'ALEESRA973', 'Preparatoria', 'Calle 56 entre 33', '9994586249', 'lkansldk@fklfew.com', 'Gerente', '2017-11-27', 2, NULL),
(18, 'Carlos', 'Vargas', 'Aguirre', '1986-05-23', 'OSCLODE3793', 'Secundaria', 'Calle 58 entre 29', '999128668', 'alejandra97@outlook.com', 'Textil', '2015-05-16', 3, NULL),
(19, 'Aurelio', 'Casillas', 'Rodriguez', '1997-08-03', 'OSCLODE3793', 'Primaria', 'Calle 100 entre 48', '9994586249', 'alejandra97@outlook.com', 'Limpieza', '2016-09-14', 2, NULL),
(20, 'Jonatan', 'Campos', 'Gutierrez', '1997-08-03', 'kenpigu976', 'Universidad', 'Calle 56 entre 33', '9991457329', 'kajkja@kla.com', 'Finanzas', '2015-05-16', 4, NULL),
(21, 'Silvia', 'Villareal', 'Lopez', '1992-01-12', 'ALEESRA973', 'Preparatoria', 'Calle 58 entre 29', '9994586249', 'kev@df.com', 'Finanzas', '2017-06-23', 2, NULL),
(22, 'Cristina', 'Davila', 'Aguilera', '1996-11-25', 'kenpigu976', 'Primaria', 'Calle 100 entre 48', '999128668', 'alejandra97@outlook.com', 'Caja', '2017-11-27', 3, NULL),
(23, 'pedrito', 'ek', 'pech', '0000-00-00', 'SAAA9409173Z2', 'Universidad', 'Calle 100 entre 48', '9991457329', 'NO_KIA_5310@HOTMAIL.COM', 'Recursos Humanos', '2019-11-26', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `monto` decimal(11,0) NOT NULL,
  `id_tipo_gasto` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gastos`
--

INSERT INTO `gastos` (`id_gasto`, `descripcion`, `monto`, `id_tipo_gasto`, `fecha`) VALUES
(0, 'hola', '300', 0, '1992-12-12'),
(1, 'pago de empleado', '50000', 0, '0000-00-00'),
(2, 'pago de empleados', '53000', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(15) NOT NULL,
  `hentrada` time NOT NULL,
  `hsalida` time NOT NULL,
  `fecha` date NOT NULL,
  `hextra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horario`
--

INSERT INTO `horario` (`id_horario`, `hentrada`, `hsalida`, `fecha`, `hextra`) VALUES
(1, '08:00:00', '15:00:00', '2018-04-02', 0),
(2, '09:30:00', '17:00:00', '2017-06-05', 0),
(3, '01:01:00', '23:58:00', '2019-11-12', 2),
(4, '10:00:00', '18:00:00', '2019-08-05', 0),
(5, '04:00:00', '08:00:00', '2019-11-26', 3);

-- --------------------------------------------------------

--
-- Table structure for table `materiaprima`
--

CREATE TABLE `materiaprima` (
  `id_materia` int(15) NOT NULL,
  `tipo_materia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `talla` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio_unitario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_proveedor` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materiaprima`
--

INSERT INTO `materiaprima` (`id_materia`, `tipo_materia`, `Color`, `modelo`, `marca`, `talla`, `description`, `precio_unitario`, `cantidad`, `id_proveedor`) VALUES
(1, 'Playeras', 'Verde', 'Cuello V', 'Spire', 'CH', 'Playera color verde en talla pequeña', 48, 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `credito` tinyint(1) NOT NULL,
  `contado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pago`
--

INSERT INTO `pago` (`id_pago`, `credito`, `contado`) VALUES
(2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pedidocliente`
--

CREATE TABLE `pedidocliente` (
  `id_pedido` int(11) NOT NULL,
  `producto` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_vendida` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `id_produccion` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidomateria`
--

CREATE TABLE `pedidomateria` (
  `id_pedidomat` int(15) NOT NULL,
  `id_materia` int(15) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pedidomateria`
--

INSERT INTO `pedidomateria` (`id_pedidomat`, `id_materia`, `cantidad`, `fecha`) VALUES
(1, 1, 14, '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `produccion`
--

CREATE TABLE `produccion` (
  `id_produccion` int(15) NOT NULL,
  `id_pedido` int(15) NOT NULL,
  `id_materiap` int(15) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
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
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`folio`, `nombre_contacto`, `telefono`, `correo`, `nom_empresa`, `direccion`, `id_producto`) VALUES
(1, 'Esteban Gabriel Trujillo', 9994156897, 'marikk@hotmail.com', 'SpireCool', 'Calle 70 #201A entre 31 y 33', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `name`, `lastname`, `email`, `password`, `is_active`, `is_dep`, `is_admin`, `created_at`) VALUES
(1, 'admin', 'antonio', 'pech', 'pedrito.tony.stw@gmail.com', 'admin', 1, 0, 1, '2019-11-18 00:00:00'),
(2, 'admin', 'Adriana Isabel', 'Ventura Acosta', '', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 0, 1, '2018-10-29 19:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
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
-- Dumping data for table `ventas`
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
(12, '2019-02-18', '2019-02-28', 10, 5000, 68, 13, 13, 12, 12),
(13, '2019-06-07', '2019-06-08', 5677, 234, 20, 2, 5, 1, 1),
(14, '2019-06-07', '2019-06-08', 5677, 234, 20, 2, 5, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ausencias`
--
ALTER TABLE `ausencias`
  ADD PRIMARY KEY (`id_ausencia`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indexes for table `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_horario` (`id_horario`,`id_ausencia`),
  ADD KEY `id_ausencia` (`id_ausencia`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `id_tipo_gasto` (`id_tipo_gasto`) USING BTREE;

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indexes for table `materiaprima`
--
ALTER TABLE `materiaprima`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indexes for table `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indexes for table `pedidocliente`
--
ALTER TABLE `pedidocliente`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_venta` (`id_produccion`);

--
-- Indexes for table `pedidomateria`
--
ALTER TABLE `pedidomateria`
  ADD PRIMARY KEY (`id_pedidomat`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indexes for table `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id_produccion`),
  ADD KEY `id_pedido` (`id_pedido`,`id_materiap`),
  ADD KEY `id_materiap` (`id_materiap`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_cotizacion` (`id_cotizacion`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ausencias`
--
ALTER TABLE `ausencias`
  MODIFY `id_ausencia` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materiaprima`
--
ALTER TABLE `materiaprima`
  MODIFY `id_materia` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pedidocliente`
--
ALTER TABLE `pedidocliente`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidomateria`
--
ALTER TABLE `pedidomateria`
  MODIFY `id_pedidomat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id_produccion` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_ausencia`) REFERENCES `ausencias` (`id_ausencia`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`);

--
-- Constraints for table `materiaprima`
--
ALTER TABLE `materiaprima`
  ADD CONSTRAINT `materiaprima_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`folio`);

--
-- Constraints for table `pedidocliente`
--
ALTER TABLE `pedidocliente`
  ADD CONSTRAINT `pedidocliente_ibfk_1` FOREIGN KEY (`id_produccion`) REFERENCES `produccion` (`id_produccion`);

--
-- Constraints for table `pedidomateria`
--
ALTER TABLE `pedidomateria`
  ADD CONSTRAINT `pedidomateria_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materiaprima` (`id_materia`);

--
-- Constraints for table `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`id_materiap`) REFERENCES `materiaprima` (`id_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
