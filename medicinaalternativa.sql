-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 22:58:04
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medicinaalternativa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesousuario`
--

CREATE TABLE `accesousuario` (
  `cedula` varchar(20) COLLATE ucs2_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE ucs2_spanish2_ci NOT NULL,
  `password` varchar(20) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `idPerfil` varchar(20) COLLATE ucs2_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `accesousuario`
--

INSERT INTO `accesousuario` (`cedula`, `nombre`, `password`, `estado`, `idPerfil`) VALUES
('112233', 'Veronica Morales', 'verq123', 0, '4'),
('1234', 'edwin', '1234', 0, '3'),
('22334455', 'Zahira Morales', 'dsfd4343', 0, '4'),
('3344', 'edwin', 'pass', 0, '2'),
('334455', 'Maria Mahecha', 'maria123', 0, '4'),
('34455', 'Sara Morales', 'dfdf433', 0, '4'),
('434324', 'Jairo Barreo', 'dytfgd565', 0, '4'),
('4345', 'Jiro Mahecha', 'sdjh234', 0, '4'),
('445566', 'Edwin Lopez', 'edwin123', 0, '4'),
('45663', 'Karla Alvarez', 'dsds2332', 0, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargolaboral`
--

CREATE TABLE `cargolaboral` (
  `idCargo` int(11) NOT NULL,
  `nombreCargo` varchar(25) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `cargolaboral`
--

INSERT INTO `cargolaboral` (`idCargo`, `nombreCargo`, `estado`) VALUES
(2, 'Empleado', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaprod`
--

CREATE TABLE `categoriaprod` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(25) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `categoriaprod`
--

INSERT INTO `categoriaprod` (`idCategoria`, `nombreCategoria`, `estado`) VALUES
(1, 'Sedantes', 0),
(3, 'Belleza', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cedula` int(11) NOT NULL,
  `nombre1` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `nombre2` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `apellido1` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `apellido2` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `direccion` varchar(25) COLLATE utf16_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `movil` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `direccion`, `telefono`, `movil`, `correo`, `idMunicipio`, `estado`) VALUES
(43455, 'Andres', '', 'lopez', 'Morales', 'call 12', '33344545', '3335455', 'lopez@gmail.com', 2, 0),
(112233, 'Veronica', 'Andrea', 'Morales', 'Morales', 'carrera 44a', '345433', '321434345', 'vero@gmail.com', 4, 0),
(334455, 'Maria', 'Paula', 'Mahecha', '', 'carrera 12 # 34-12', '3344553', '32215565434', 'Maria@gmail.com', 3, 0),
(445566, 'Edwin', 'Steban', 'Lopez', 'Morales', 'carrera 23', '343545', '32155545', 'steban@gmail.com', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_prod`
--

CREATE TABLE `compra_prod` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `categoriaprod` int(11) NOT NULL,
  `fecha_fab` date NOT NULL,
  `fecha_venc` date NOT NULL,
  `laboratorio` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compra_prod`
--

INSERT INTO `compra_prod` (`id`, `idProducto`, `categoriaprod`, `fecha_fab`, `fecha_venc`, `laboratorio`, `estado`) VALUES
(1, 2, 3, '2021-05-02', '2021-05-29', 2, 0),
(2, 3, 3, '2021-05-02', '2021-05-29', 3, 0),
(3, 4, 3, '2021-05-02', '2021-05-29', 2, 0),
(4, 6, 3, '2021-05-02', '2021-05-29', 2, 0),
(5, 7, 1, '2021-05-02', '2021-05-29', 2, 0),
(6, 8, 3, '2021-05-02', '2021-05-29', 2, 0),
(7, 50, 3, '2021-05-02', '2021-05-29', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `nombreDepartamento` varchar(25) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `idDepartamento`, `nombreDepartamento`, `estado`) VALUES
(6, 2, 'Cundinamarca', 0),
(7, 3, 'Antioquia', 0),
(8, 4, 'Meta', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cedula` int(14) NOT NULL,
  `nombre1` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `nombre2` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `apellido1` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `apellido2` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `genero` varchar(10) COLLATE utf16_spanish_ci NOT NULL,
  `direccion` varchar(25) COLLATE utf16_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `movil` varchar(12) COLLATE utf16_spanish_ci NOT NULL,
  `correo` varchar(25) COLLATE utf16_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `idSucursal` int(10) NOT NULL,
  `idCargoLaboral` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `genero`, `direccion`, `telefono`, `movil`, `correo`, `fecha_nacimiento`, `idSucursal`, `idCargoLaboral`, `estado`) VALUES
(1234, 'Andres', '', 'lopez', 'Morales', 'Masculino', 'call 12', '33344545', '3335455', 'lopez@gmail.com', '2021-05-02', 2, 2, 0),
(667788, 'Jairo', 'Adrian', 'Mora', 'Uribe', 'Masculino', 'avenida 12', '5543321', '3203454543', 'jairoA@email.com', '2010-12-05', 2, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_producto`
--

CREATE TABLE `forma_producto` (
  `idForma` int(10) NOT NULL,
  `forma` varchar(15) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `forma_producto`
--

INSERT INTO `forma_producto` (`idForma`, `forma`, `estado`) VALUES
(1, 'gr', 1),
(2, 'Planta', 0),
(3, 'Liquido', 0),
(4, 'Polvo', 0),
(5, 'Jarabe', 0),
(6, 'Capsulas', 0),
(7, 'Crema', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE ucs2_spanish2_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE ucs2_spanish2_ci NOT NULL,
  `formaProducto` int(10) NOT NULL,
  `medida` int(10) NOT NULL,
  `cantidad_medida` varchar(20) COLLATE ucs2_spanish2_ci NOT NULL,
  `cantidad_prod` varchar(20) COLLATE ucs2_spanish2_ci NOT NULL,
  `porc_ganancia` varchar(3) COLLATE ucs2_spanish2_ci NOT NULL,
  `existe` varchar(3) COLLATE ucs2_spanish2_ci NOT NULL,
  `image` varchar(250) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idProducto`, `nombre`, `costo`, `descripcion`, `formaProducto`, `medida`, `cantidad_medida`, `cantidad_prod`, `porc_ganancia`, `existe`, `image`, `estado`) VALUES
(1, 'ortiga', 20, 'descrip', 7, 1, '10', '15', '20', 'Si', '', 1),
(2, 'Romero', 10000, 'Se le atribuyen efectos terapéuticos diferenciados, como colagogo, colerético (favorece la síntesis de bilis), diurético, protector hepático, antiinflamatorio, digestivo                                                                                      ', 2, 3, '300', '10', '35', 'Si', 'romero.jpg', 0),
(3, 'Albahaca', 15000, 'Es un ingrediente activo en los jarabes para la tos y la bronquitis. Para hacer uno casero se pueden hervir sus hojas en agua y beber.', 2, 3, '400', '15', '20', 'Si', 'albahaca.jpg', 0),
(4, 'Ortiga', 25000, 'Sus beneficios antiinflamatorios, antidiarreicos, inmunoestimulantes y antialérgicos se han estado empleando durante siglos.                                            ', 7, 3, '350', '20', '20', 'Si', 'ortiga.jpg', 0),
(5, 'planta2', 2000, 'descrip', 2, 3, '12', '15', '20', 'Si', '', 1),
(6, 'Quina', 20000, 'Se usa en el tratamiento de la frecuencia cardíaca anormal y otros trastornos del ritmo cardíaco, dado que  mejora la resistencia.', 2, 3, '250', '40', '20', 'No', 'quina.jpg', 0),
(7, 'Aloe vera', 35000, 'Tiene efectos analgésicos, favorece la regeneración de tejidos internos. protege el sistema inmunitario.', 3, 4, '650', '29', '20', '\r\n ', 'aloe.jpg', 0),
(8, 'Moringa', 13000, 'Tiene propiedades antiinflamatorias, antimicrobianas, antioxidantes, cardiovasculares, y hepatoprotectoras.', 2, 3, '20', '6', '25', '\r\n ', 'moringa.png', 0),
(50, 'Diente de león', 20000, 'Es un mineral básico en el desarrollo y fortalecimiento de los huesos. Además, también es rico en vitamina C y luteína.                                            ', 6, 3, '250', '22', '30', 'Si', 'dienteLeon.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `idLaboratorio` int(11) NOT NULL,
  `nombreLaboratorio` varchar(30) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `telefono` int(10) NOT NULL,
  `invima` varchar(3) DEFAULT NULL,
  `direccion` varchar(30) NOT NULL,
  `idMunicipio` int(11) DEFAULT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`idLaboratorio`, `nombreLaboratorio`, `correo`, `telefono`, `invima`, `direccion`, `idMunicipio`, `estado`) VALUES
(2, 'natural', 'susalud@gmail.com', 443322, 'Si', 'carrera 14', 4, b'0'),
(3, 'Naturales', 'natura@gmail.com', 445556, 'Si', 'Carrera 10a # 44 aa 33 Buenos ', 4, b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `codigo` int(10) NOT NULL,
  `nombreMedida` varchar(10) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`codigo`, `nombreMedida`, `estado`) VALUES
(1, 'Kg', 0),
(2, 'mg', 1),
(3, 'gr', 0),
(4, 'ml', 0),
(5, 'Litros', 0),
(6, 'onzas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modopago`
--

CREATE TABLE `modopago` (
  `idModoPago` int(11) NOT NULL,
  `nombrePago` varchar(25) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `modopago`
--

INSERT INTO `modopago` (`idModoPago`, `nombrePago`, `estado`) VALUES
(1, 'Efectivo', 0),
(2, 'Tarjeta débito', 0),
(3, 'Tarjeta crédito', 0),
(4, 'Pse', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `nombreMunicipio` varchar(30) NOT NULL,
  `idDep` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `idMunicipio`, `nombreMunicipio`, `idDep`, `estado`) VALUES
(4, 2, 'Medellin', 3, 0),
(5, 3, 'Santa Fé', 3, 0),
(6, 4, 'Bogotá', 2, 0),
(7, 5, 'Acacias', 4, 0),
(8, 6, 'Villavicencio', 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `idEmpleado` int(14) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `fechaEntrega` date NOT NULL,
  `modoPago` int(11) NOT NULL,
  `totalPedido` double NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `idEmpleado`, `idCliente`, `fechaPedido`, `horaPedido`, `fechaEntrega`, `modoPago`, `totalPedido`, `estado`) VALUES
(26, 1234, 445566, '2021-05-21', '17:51:00', '0000-00-00', 1, 50277.5, 0),
(27, 1234, 445566, '2021-05-21', '19:54:00', '0000-00-00', 1, 142800, 0),
(28, 1234, 445566, '2021-05-21', '19:56:00', '0000-00-00', 1, 88060, 0),
(29, 1234, 445566, '2021-05-21', '20:03:00', '0000-00-00', 1, 73185, 0),
(30, 1234, 112233, '2021-05-22', '07:35:00', '0000-00-00', 1, 78837.5, 0),
(31, 1234, 334455, '2021-05-22', '11:43:00', '0000-00-00', 1, 102340, 0),
(35, 1234, 445566, '2021-05-22', '11:54:00', '0000-00-00', 1, 64260, 0),
(36, 1234, 445566, '2021-05-22', '11:55:00', '0000-00-00', 1, 345100, 0),
(37, 1234, 445566, '2021-05-22', '11:56:00', '0000-00-00', 4, 38675, 0),
(38, 1234, 445566, '2021-05-22', '11:57:00', '0000-00-00', 3, 30940, 0),
(39, 1234, 445566, '2021-05-22', '11:58:00', '0000-00-00', 2, 16065, 0),
(40, 1234, 445566, '2021-05-22', '11:58:00', '0000-00-00', 2, 642600, 0),
(41, 1234, 445566, '2021-05-22', '11:59:00', '0000-00-00', 4, 19337.5, 0),
(42, 1234, 445566, '2021-05-26', '18:10:00', '0000-00-00', 3, 100257.5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoproducto`
--

CREATE TABLE `pedidoproducto` (
  `IdpedidoProducto` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valorIva` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidoproducto`
--

INSERT INTO `pedidoproducto` (`IdpedidoProducto`, `idProducto`, `idPedido`, `precio`, `cantidad`, `valorIva`, `subTotal`) VALUES
(41, 8, 26, 19338, 1, 19, 19338),
(43, 4, 27, 35700, 4, 19, 142800),
(44, 4, 28, 35700, 1, 19, 35700),
(45, 3, 28, 21420, 1, 19, 21420),
(47, 2, 29, 16065, 1, 19, 16065),
(48, 3, 29, 21420, 1, 19, 21420),
(49, 4, 29, 35700, 1, 19, 35700),
(51, 8, 30, 19338, 1, 19, 19338),
(52, 6, 30, 28560, 1, 19, 28560),
(53, 3, 31, 21420, 1, 19, 21420),
(54, 7, 31, 49980, 1, 19, 49980),
(56, 2, 35, 16065, 4, 19, 64260),
(57, 6, 36, 28560, 11, 19, 314160),
(59, 8, 37, 19338, 2, 19, 38675),
(61, 2, 39, 16065, 1, 19, 16065),
(62, 4, 39, 35700, 18, 19, 642600),
(63, 8, 41, 19338, 1, 19, 19338),
(64, 8, 42, 19338, 1, 19, 19338),
(65, 50, 42, 30940, 1, 19, 30940),
(66, 7, 42, 49980, 1, 19, 49980);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` varchar(20) COLLATE ucs2_spanish2_ci NOT NULL,
  `nombrePerfil` varchar(25) COLLATE ucs2_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `nombrePerfil`, `estado`) VALUES
('2', 'Empleado', 0),
('3', 'Administrador', 0),
('4', 'Cliente', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idSucursal` int(10) NOT NULL,
  `nombreSucursal` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `direccion` varchar(25) COLLATE utf16_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `nit` varchar(15) COLLATE utf16_spanish_ci NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idSucursal`, `nombreSucursal`, `direccion`, `telefono`, `correo`, `nit`, `idMunicipio`, `estado`) VALUES
(2, 'Sucursal1', 'call 12', '33344545', 'sucursal1@gmail.com', '43424', 7, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesousuario`
--
ALTER TABLE `accesousuario`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- Indices de la tabla `cargolaboral`
--
ALTER TABLE `cargolaboral`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `categoriaprod`
--
ALTER TABLE `categoriaprod`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `idMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `compra_prod`
--
ALTER TABLE `compra_prod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoriaprod`),
  ADD KEY `laboratorio` (`laboratorio`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `idCargoLaboral` (`idCargoLaboral`),
  ADD KEY `idSucursal` (`idSucursal`);

--
-- Indices de la tabla `forma_producto`
--
ALTER TABLE `forma_producto`
  ADD PRIMARY KEY (`idForma`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `medida` (`medida`),
  ADD KEY `formaProducto` (`formaProducto`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`idLaboratorio`),
  ADD KEY `idMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `modopago`
--
ALTER TABLE `modopago`
  ADD PRIMARY KEY (`idModoPago`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDep` (`idDep`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `modoPago` (`modoPago`),
  ADD KEY `idEmpleado` (`idEmpleado`,`idCliente`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD PRIMARY KEY (`IdpedidoProducto`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idSucursal`),
  ADD KEY `idMunicipio` (`idMunicipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra_prod`
--
ALTER TABLE `compra_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  MODIFY `IdpedidoProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesousuario`
--
ALTER TABLE `accesousuario`
  ADD CONSTRAINT `accesousuario_ibfk_1` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra_prod`
--
ALTER TABLE `compra_prod`
  ADD CONSTRAINT `compra_prod_ibfk_2` FOREIGN KEY (`laboratorio`) REFERENCES `laboratorio` (`idLaboratorio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_prod_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `inventario` (`idProducto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_prod_ibfk_4` FOREIGN KEY (`categoriaprod`) REFERENCES `categoriaprod` (`idCategoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idCargoLaboral`) REFERENCES `cargolaboral` (`idCargo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`medida`) REFERENCES `medida` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`formaProducto`) REFERENCES `forma_producto` (`idForma`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD CONSTRAINT `laboratorio_ibfk_1` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`cedula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD CONSTRAINT `pedidoproducto_ibfk_2` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidoproducto_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `inventario` (`idProducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `sucursal_ibfk_1` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
