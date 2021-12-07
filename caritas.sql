-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Temps de generació: 07-12-2021 a les 11:29:02
-- Versió del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versió de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `caritas`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `Categoria`
--

CREATE TABLE `Categoria` (
  `id_categoria` int NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcament de dades per a la taula `Categoria`
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
-- Estructura de la taula `LineaPedido`
--

CREATE TABLE `LineaPedido` (
  `id_pedido` int NOT NULL,
  `id_producto` int NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `Pedido`
--

CREATE TABLE `Pedido` (
  `id_pedido` int NOT NULL,
  `creado` date NOT NULL,
  `precio_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `Producto`
--

CREATE TABLE `Producto` (
  `id_producto` int NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcament de dades per a la taula `Producto`
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
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índexs per a la taula `LineaPedido`
--
ALTER TABLE `LineaPedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Índexs per a la taula `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índexs per a la taula `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la taula `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT per la taula `Producto`
--
ALTER TABLE `Producto`
  MODIFY `id_producto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `LineaPedido`
--
ALTER TABLE `LineaPedido`
  ADD CONSTRAINT `LineaPedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `Pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LineaPedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `Producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriccions per a la taula `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `Categoria` (`id_categoria`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
