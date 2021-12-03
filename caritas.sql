-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-12-2021 a las 10:34:43
-- Versión del servidor: 5.7.31-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caritas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categoria`
--

INSERT INTO `Categoria` (`id_categoria`, `descripcion`) VALUES
(1, 'Brou, oli i farina'),
(2, 'Desdejuni'),
(3, 'Fruita i sucre'),
(4, 'Higiene'),
(5, 'Llegums i arrós'),
(6, 'Pasta'),
(7, 'Verdures');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CestaCompra`
--

CREATE TABLE `CestaCompra` (
  `id_cesta` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LineaCesta`
--

CREATE TABLE `LineaCesta` (
  `id_cesta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LineaPedido`
--

CREATE TABLE `LineaPedido` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE `Pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_producto`, `descripcion`, `precio`, `imagen`, `id_categoria`) VALUES
(1, 'Brou de pollastre', 1.5, 'caldo_pollastre.jpg', 1),
(2, 'Brou de peix', 1, 'caldo_peix.jpg', 1),
(3, 'Oli de girasol', 1, 'botella_oli.jpg', 1),
(4, 'Farina', 1, 'farina.jpg', 1),
(5, 'Cereals', 1.5, 'cereals.jpg', 2),
(6, 'Galletes', 1, 'galletes.jpg', 2),
(7, 'Mermelada', 1, 'mermelada2.png', 2),
(8, 'Llet', 1, 'llet2.jpg', 2),
(9, 'Pinya al natural', 1, 'pinya.jpg', 3),
(10, 'Préssec al natural', 1.5, 'pressec.jpg', 3),
(11, 'Sucre', 1, 'sucre.jpg', 3),
(12, 'Detergent', 1.5, 'detergent.jpg', 4),
(13, 'Desodorant', 1.5, 'desodorant.jpg', 4),
(14, 'Gel', 1, 'gel.jpg', 4),
(15, 'Pasta de dents', 1, 'pasta.jpg', 4),
(16, 'Raspall de dents', 1, 'raspall3.jpg', 4),
(17, 'Xampú', 1, 'xampu.jpg', 4),
(18, 'Cigrons', 1, 'cigrons.jpg', 5),
(19, 'Fesols', 1, 'fesol.jpg', 5),
(20, 'Lentilles', 1, 'lentilles.jpg', 5),
(21, 'Arrós', 1, 'arros.jpg', 5),
(22, 'Fideus', 0.5, 'fideus2.jpg', 6),
(23, 'Espagueti', 1, 'espaguetti.jpg', 6),
(24, 'Macarrons', 1, 'macarrons.jpg', 6),
(25, 'Panís', 1, 'panis.jpg', 7),
(26, 'Pèsol', 1, 'pessol.jpg', 7),
(27, 'Pot de tomata', 1, 'tomata.jpg', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `CestaCompra`
--
ALTER TABLE `CestaCompra`
  ADD PRIMARY KEY (`id_cesta`);

--
-- Indices de la tabla `LineaCesta`
--
ALTER TABLE `LineaCesta`
  ADD PRIMARY KEY (`id_cesta`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `LineaPedido`
--
ALTER TABLE `LineaPedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `CestaCompra`
--
ALTER TABLE `CestaCompra`
  MODIFY `id_cesta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `LineaCesta`
--
ALTER TABLE `LineaCesta`
  ADD CONSTRAINT `LineaCesta_ibfk_1` FOREIGN KEY (`id_cesta`) REFERENCES `CestaCompra` (`id_cesta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LineaCesta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `Producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `LineaPedido`
--
ALTER TABLE `LineaPedido`
  ADD CONSTRAINT `LineaPedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `Pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LineaPedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `Producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `Categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
