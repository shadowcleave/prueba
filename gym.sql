-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2016 a las 14:52:57
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasenna` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `contrasenna`, `email`, `telefono`, `fk_id_usuario`) VALUES
(47, 'esteban', '123', 'est@gmail.com', '3043643894', 58),
(48, 'daniels', '', 're@gmail.com', '3215484', 63),
(49, '', '', '', '', 64);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fk_id_categoria` int(11) DEFAULT NULL,
  `fk_id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nombre`, `descripcion`, `fk_id_categoria`, `fk_id_admin`) VALUES
(4, 'hdh', 'gdgs', NULL, NULL),
(6, 'hdh', 'gdgsggg', NULL, NULL),
(9, 'da', 'dddd', NULL, NULL),
(10, 'daniel', 'malo', NULL, NULL),
(11, 'ffff', 'reee', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contrasenna` varchar(50) NOT NULL,
  `peso` int(11) DEFAULT NULL,
  `estatura` varchar(10) DEFAULT NULL,
  `genero` varchar(12) DEFAULT NULL,
  `fechanac` varchar(50) DEFAULT NULL,
  `incapacidades` varchar(100) DEFAULT NULL,
  `fotoperfil` varchar(50) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `email`, `contrasenna`, `peso`, `estatura`, `genero`, `fechanac`, `incapacidades`, `fotoperfil`, `fk_id_usuario`) VALUES
(1, 'Daniel', 'are', '31232112', 'dafergo31@gmail.com', '', 12, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'fsa', 'faf', 'sasdf', 'gonza@hotmail.com', '123', 0, 'ss', '', '', 'sss', NULL, NULL),
(3, 'fsa', 'rrrr', '4323', 'gonza@hotmail.com', '123', 123, '12333', '', '', '', NULL, NULL),
(4, 'fsa', 'rrrr', '4323', 'gonza@hotmail.com', '123dd', 123, '12333', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_categoria`
--

CREATE TABLE IF NOT EXISTS `cliente_categoria` (
  `id_cliente` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_producto`
--

CREATE TABLE IF NOT EXISTS `cliente_producto` (
  `cod_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id_foto` int(11) NOT NULL,
  `ruta_foto` varchar(200) NOT NULL,
  `fk_id_gimnasio` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_foto`, `ruta_foto`, `fk_id_gimnasio`) VALUES
(16, 'ruta_foto', NULL),
(17, 'ruta_foto', NULL),
(18, 'ruta_foto', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gimnasio`
--

CREATE TABLE IF NOT EXISTS `gimnasio` (
  `id_gimnasio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `precioinscr` varchar(10) NOT NULL,
  `preciomens` varchar(10) NOT NULL,
  `horarios` varchar(30) NOT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `latitud` varchar(20) DEFAULT NULL,
  `linkins` varchar(200) DEFAULT NULL,
  `linkfb` varchar(200) DEFAULT NULL,
  `linktw` varchar(200) DEFAULT NULL,
  `fk_id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gimnasio_cliente`
--

CREATE TABLE IF NOT EXISTS `gimnasio_cliente` (
  `id_gimnasio` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gimnasio_servicios`
--

CREATE TABLE IF NOT EXISTS `gimnasio_servicios` (
  `id_gimnasio` int(11) NOT NULL,
  `Id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `cod_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `caracteristicas` varchar(300) NOT NULL,
  `precio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_admin`
--

CREATE TABLE IF NOT EXISTS `producto_admin` (
  `id_admin` int(11) NOT NULL,
  `cod_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `tiporservicio` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre`, `tiporservicio`) VALUES
(1, '', ''),
(2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_cliente`
--

CREATE TABLE IF NOT EXISTS `servicios_cliente` (
  `id_servicio` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superadmin`
--

CREATE TABLE IF NOT EXISTS `superadmin` (
  `id_superadmin` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasenna` varchar(30) NOT NULL,
  `tipousuario` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `contrasenna`, `tipousuario`, `fecha_registro`, `estado`) VALUES
(57, 'carlos', 'juan@hotmail.com', '716354', 'cliente', '0000-00-00', 0),
(58, 'esteban', 'est@gmail.com', '', 'administrador', '0000-00-00', 0),
(59, 'daniel', 'gonza@hotmail.com', '', 'cliente', '0000-00-00', 0),
(60, '', '', '', 'administrador', '0000-00-00', 0),
(61, 'fsa', 'gonza@hotmail.com', '', 'administrador', '0000-00-00', 0),
(62, 'fsa', 'gonza@hotmail.com', '', 'cliente', '0000-00-00', 0),
(63, 'daniels', 're@gmail.com', '', 'administrador', '0000-00-00', 0),
(64, '', '', '', 'administrador', '0000-00-00', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`),
  ADD KEY `fk_id_admin` (`fk_id_admin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `cliente_categoria`
--
ALTER TABLE `cliente_categoria`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `fk_id_gimnasio` (`fk_id_gimnasio`);

--
-- Indices de la tabla `gimnasio`
--
ALTER TABLE `gimnasio`
  ADD PRIMARY KEY (`id_gimnasio`),
  ADD KEY `fk_id_admin` (`fk_id_admin`);

--
-- Indices de la tabla `gimnasio_cliente`
--
ALTER TABLE `gimnasio_cliente`
  ADD PRIMARY KEY (`id_gimnasio`,`id_cliente`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `gimnasio_servicios`
--
ALTER TABLE `gimnasio_servicios`
  ADD PRIMARY KEY (`id_gimnasio`,`Id_servicio`),
  ADD KEY `Id_servicio` (`Id_servicio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `producto_admin`
--
ALTER TABLE `producto_admin`
  ADD PRIMARY KEY (`id_admin`,`cod_producto`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicios_cliente`
--
ALTER TABLE `servicios_cliente`
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id_superadmin`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `gimnasio`
--
ALTER TABLE `gimnasio`
  MODIFY `id_gimnasio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id_superadmin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`fk_id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `cliente_categoria`
--
ALTER TABLE `cliente_categoria`
  ADD CONSTRAINT `cliente_categoria_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `cliente_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD CONSTRAINT `cliente_producto_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`),
  ADD CONSTRAINT `cliente_producto_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`fk_id_gimnasio`) REFERENCES `gimnasio` (`id_gimnasio`);

--
-- Filtros para la tabla `gimnasio`
--
ALTER TABLE `gimnasio`
  ADD CONSTRAINT `gimnasio_ibfk_1` FOREIGN KEY (`fk_id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Filtros para la tabla `gimnasio_cliente`
--
ALTER TABLE `gimnasio_cliente`
  ADD CONSTRAINT `gimnasio_cliente_ibfk_1` FOREIGN KEY (`id_gimnasio`) REFERENCES `gimnasio` (`id_gimnasio`),
  ADD CONSTRAINT `gimnasio_cliente_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `gimnasio_servicios`
--
ALTER TABLE `gimnasio_servicios`
  ADD CONSTRAINT `gimnasio_servicios_ibfk_1` FOREIGN KEY (`id_gimnasio`) REFERENCES `gimnasio` (`id_gimnasio`),
  ADD CONSTRAINT `gimnasio_servicios_ibfk_2` FOREIGN KEY (`Id_servicio`) REFERENCES `servicios` (`id_servicio`);

--
-- Filtros para la tabla `producto_admin`
--
ALTER TABLE `producto_admin`
  ADD CONSTRAINT `producto_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `producto_admin_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`);

--
-- Filtros para la tabla `servicios_cliente`
--
ALTER TABLE `servicios_cliente`
  ADD CONSTRAINT `servicios_cliente_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`),
  ADD CONSTRAINT `servicios_cliente_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `superadmin`
--
ALTER TABLE `superadmin`
  ADD CONSTRAINT `superadmin_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
