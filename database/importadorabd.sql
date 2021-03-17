-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2021 a las 06:41:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `importadorabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `codigoCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`codigoCategoria`, `nombreCategoria`) VALUES
(1, 'Bisuteria'),
(2, 'Cosmeticos'),
(3, 'Fiesta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `usuarioCliente` int(11) NOT NULL,
  `nombreCliente` varchar(45) DEFAULT NULL,
  `correoCliente` varchar(45) NOT NULL,
  `contrasenaCliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `codigoFactura` int(11) NOT NULL,
  `fechaFactura` date DEFAULT NULL,
  `PRODUCTO_codigoProducto` int(11) NOT NULL,
  `CLIENTE_usuarioCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigoProducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) DEFAULT NULL,
  `descripcionProducto` longtext DEFAULT NULL,
  `precioProducto` double DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `marcaProducto` varchar(45) DEFAULT NULL,
  `CATEGORIA_codigoCategoria` int(11) NOT NULL,
  `fotoProducto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigoProducto`, `nombreProducto`, `descripcionProducto`, `precioProducto`, `cantidadProducto`, `marcaProducto`, `CATEGORIA_codigoCategoria`, `fotoProducto`) VALUES
(1, 'Sombra', 'Sombra 70 colores, glitter, sombras mate y satinadas ', 10, 25, 'Mifuduo', 2, 'f01.jpg'),
(2, 'Brochas', 'Juego de 4 brochas de maquillaje para ojos', 5.5, 40, 'Hudabeauty', 2, 'f02.jpg'),
(3, 'Brocha', 'Perfecta para aplicar polvo suelto o polvo compacto', 3.55, 80, 'Hudabeauty', 2, 'f03.jpg'),
(4, 'Tinta de labio', 'Tinta de labio', 1.75, 5000, 'Posie Tint', 2, 'f04.jpg'),
(5, 'prueba', 'este es un producto', 50.5, 7000, 'prueba', 3, 'f05.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 0, 0, 4, 5.5, 0),
(2, 1, 0, 1, 5.5, 0),
(3, 1, 0, 1, 10, 0),
(4, 1, 0, 1, 5.5, 0),
(5, 1, 0, 1, 5.5, 0),
(6, 1, 0, 1, 5.5, 0),
(7, 1, 1, 1, 5.5, 0),
(8, 1, 1, 1, 3.55, 0),
(9, 0, 1, 1, 5.5, 5.5),
(10, 0, 1, 1, 3.55, 3.55),
(11, 0, 1, 16, 5.5, 88),
(12, 0, 1, 7, 10, 70),
(13, 0, 1, 1, 5.5, 5.5),
(14, 0, 1, 1, 10, 10),
(15, 1, 1, 1, 5.5, 5.5),
(16, 1, 1, 1, 5.5, 5.5),
(17, 1, 1, 1, 3.55, 3.55),
(18, 1, 1, 1, 3.55, 3.55),
(19, 0, 1, 1, 3.55, 3.55),
(20, 0, 1, 1, 5.5, 5.5),
(21, 1, 1, 1, 5.5, 5.5),
(22, 1, 1, 61, 5.5, 335.5),
(23, 1, 1, 15, 10, 150),
(24, 1, 1, 12, 0, 0),
(25, 1, 1, 2, 5.5, 11),
(26, 1, 1, 2, 0, 0),
(27, 1, 1, 1, 50.5, 50.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `codigoRol` int(11) NOT NULL,
  `nombreRol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`codigoRol`, `nombreRol`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarioUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(45) DEFAULT NULL,
  `correoUsuario` varchar(45) NOT NULL,
  `contrasenaUsuario` varchar(45) DEFAULT NULL,
  `ROL_codigoRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioUsuario`, `nombreUsuario`, `correoUsuario`, `contrasenaUsuario`, `ROL_codigoRol`) VALUES
(1, 'jvsacancela', 'javiersacancela@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigoCategoria`),
  ADD UNIQUE KEY `nombreCategoria_UNIQUE` (`nombreCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`usuarioCliente`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correoCliente`),
  ADD UNIQUE KEY `username_UNIQUE` (`usuarioCliente`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codigoFactura`,`PRODUCTO_codigoProducto`,`CLIENTE_usuarioCliente`),
  ADD KEY `fk_FACTURA_PRODUCTO_idx` (`PRODUCTO_codigoProducto`),
  ADD KEY `fk_FACTURA_CLIENTE1_idx` (`CLIENTE_usuarioCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigoProducto`,`CATEGORIA_codigoCategoria`),
  ADD KEY `fk_PRODUCTO_CATEGORIA1_idx` (`CATEGORIA_codigoCategoria`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`codigoRol`),
  ADD UNIQUE KEY `nombreRol_UNIQUE` (`nombreRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioUsuario`,`ROL_codigoRol`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correoUsuario`),
  ADD UNIQUE KEY `username_UNIQUE` (`usuarioUsuario`),
  ADD KEY `fk_USUARIO_ROL1_idx` (`ROL_codigoRol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_FACTURA_CLIENTE1` FOREIGN KEY (`CLIENTE_usuarioCliente`) REFERENCES `cliente` (`usuarioCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FACTURA_PRODUCTO` FOREIGN KEY (`PRODUCTO_codigoProducto`) REFERENCES `producto` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_PRODUCTO_CATEGORIA1` FOREIGN KEY (`CATEGORIA_codigoCategoria`) REFERENCES `categoria` (`codigoCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_ROL1` FOREIGN KEY (`ROL_codigoRol`) REFERENCES `rol` (`codigoRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
