-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 08:58:19
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
-- Base de datos: `joshtech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_compo`
--

CREATE TABLE `mis_compo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mis_compo`
--

INSERT INTO `mis_compo` (`id`, `name`, `img`, `description`, `price`, `created`, `modified`, `status`) VALUES
(11, 'Procesador AMD Ryzen 5 5600X', 'img/r5600x.jpg', 'Procesador AMD Ryzen 5 5600X / 6 Core / 12 Thread / 3.7GHz / 4.6GHz Boost / TDP 65W / Wraith Stealth / (Requiere Tarjeta de Video)', 3069.00, '2023-04-30 22:56:22', '2023-04-30 22:56:22', '1'),
(12, 'PROCESADOR AMD RYZEN 7 5700G', 'img/r5700.jpg', 'PROCESADOR AMD RYZEN 7 5700G APU 3.8GHZ / 4.6GHZ / 8 CORE 16Threads / AM4 / Con disipador Wraith Stealth / Radeon Graphics 8 Nucleos Integrada / 100-100000263BOX', 3499.00, '2023-04-30 23:04:04', '2023-04-30 23:04:04', '1'),
(13, 'Procesador Intel Core i5-12400F', 'img/i512.png', 'Procesador Intel Core i5-12400F 2.5GHz / 4.3GHz / 6 Nucleos / 12 Hilos / Socket LGA1700 - Intel 12TH Generación / Requiere Tarjeta de Video / BX8071512400F', 3499.00, '2023-04-30 23:04:04', '2023-04-30 23:04:04', '1'),
(14, 'Tarjeta de Video MSI RX 6650 XT', 'img/rx6650.jpg', 'Tarjeta de Video MSI RX 6650 XT 2X OC / 8GB GDDR6 / HDMI / DP / 912-V502-062 / Gratis Juego TLOU', 7599.00, '2023-04-30 23:06:52', '2023-04-30 23:06:52', '1'),
(15, 'Tarjeta de video NVIDIA GeForce RTX 4090', 'img/rtx4090.jpg', 'Tarjeta de video NVIDIA GeForce RTX 4090 24GB / GIGABYTE GeForce RTX™ 4090 GAMING OC 24G / 24GB GDDR6X / GV-N4090GAMING OC-24GD ', 36999.00, '2023-04-30 23:08:47', '2023-04-30 23:08:47', '1'),
(16, 'Tarjeta de video NVIDIA GeForce GTX 1650', 'img/gtx1650.jpg', 'Tarjeta de video NVIDIA GeForce GTX 1650 4GB GDDR6 / MSI D6 VENTUS XS OCV1 / HDMI, DP / 912-V809-3616', 3299.00, '2023-04-30 23:11:00', '2023-04-30 23:11:00', '1'),
(17, 'Tarjeta Madre Asus PRIME B550M', 'img/B550.jpg', 'Tarjeta Madre Asus PRIME B550M-A AC / AM4 / AMD RYZEN 3000 SERIES / micro ATX', 2069.00, '2023-04-30 23:12:00', '2023-04-30 23:12:00', '1'),
(18, 'Tarjeta Madre Gigabyte A520M', 'img/A520.jpg', 'Tarjeta Madre Gigabyte A520M-S2H / AM4 / AMD RYZEN 3000 SERIES / Micro-ATX', 1499.00, '2023-04-30 23:12:55', '2023-04-30 23:12:55', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `img`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'Computadora Gamer PRIDE PUG', 'img/compu1.png', 'AMD RADEON RX 550 2GB GDDR5 / Intel Core i3-10100F / 8GB RAM / 480GB SSD / 400W', 8999.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(2, 'Computadora PRIDE GAMING WEEVIL', 'img/compu2.png', 'AMD RADEON VEGA 7 / AMD Ryzen 5 PRO 4650G / 16GB RAM / 480GB SSD SATA / 480W 80+ BRONZE', 7999.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(3, 'Computadora PRIDE GAMING T-REX', 'img/compu3.png', 'NVIDIA® GeForce GTX™ 1050 Ti / Intel Pentium Gold G6400 / 8GB RAM / 240GB SSD / 400W /', 11699.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(4, 'Computadora PRIDE GAMING SNAIL', 'img/compu4.png', 'MD RADEON GRAPHICS / AMD Ryzen 7 5700G / 16GB RAM / 480GB SSD / 550W 80+ BRONZE / Tu primer Ryzen', 14999.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(5, 'Computadora PRIDE LOGIC RABBIT', 'img/compu4.jpg', 'Intel Core i5-10400 / 8GB RAM / 480GB SSD SATA / 450W 80+ BRONZE', 9599.00, '2023-04-30 22:31:43', '2023-04-30 22:31:43', '1'),
(6, 'Computadora PRIDE GAMING AORUS PC FENRIR', 'img/compu5.jpg', 'NVIDIA® GeForce RTX™ 4090 / AMD Ryzen 9 7950X / 64GB DDR5 RAM / 2TB SSD M.2 NVMe / 2TB HDD / ENF. LIQ. 360MM / 1300W 80+ GOLD', 109999.00, '2023-04-30 22:35:16', '2023-04-30 22:35:16', '1'),
(7, 'Computadora PRIDE CREATOR BUTTERFLY', 'img/compu6.png', 'Nvidia Quadro P620 2GB / Intel Core i3-10100F / 16GB RAM / 500GB SSD M.2 / 450W 80+ Bronze / Disipador por Aire', 14799.00, '2023-04-30 22:35:54', '2023-04-30 22:35:54', '1'),
(8, 'Computadora PRIDE GAMING CRICKET', 'img/compu7.png', 'Radeon Vega Graphics / AMD Ryzen 3 PRO 4350G / 8GB RAM / 480GB SSD SATA', 7999.00, '2023-04-30 22:38:31', '2023-04-30 22:38:31', '1'),
(9, 'Computadora PRIDE GAMING AORUS PC CAMEL', 'img/compu8.jpg', 'NVIDIA® GeForce RTX™ 2060 / Intel Core i3-10100F / 16GB RAM / 500GB SSD M.2 / DISIPADOR POR AIRE RGB / 550W 80+ BRONZE', 17999.00, '2023-04-30 22:39:14', '2023-04-30 22:39:14', '1'),
(10, 'Computadora PRIDE GAMING LION', 'img/compu9.png', 'AMD RADEON RX 6800 XT / AMD Ryzen 7 5800X / 32GB RAM / 1TB SSD M.2 / DISIPADOR POR AIRE RGB / 750W 80+ BRONZE', 58999.00, '2023-04-30 22:40:00', '2023-04-30 22:40:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_p` int(10) NOT NULL,
  `nombre_p` varchar(50) NOT NULL,
  `precio_p` varchar(50) NOT NULL,
  `imagen_p` varchar(50) NOT NULL,
  `descripcion_p` varchar(50) NOT NULL,
  `Cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_p`, `nombre_p`, `precio_p`, `imagen_p`, `descripcion_p`, `Cantidad`) VALUES
(1, 'Computadora PRIDE PUG', '7,999.00', 'compu1.png', 'AMD RADEON RX 550 2GB GDDR5 / Intel Core i3-10100F', 10),
(2, 'Computadora WEEVIL', '7,999.00', 'compu2.png', 'AMD RADEON VEGA 7 / AMD Ryzen 5 PRO 4650G', 10),
(3, 'Computadora T-REX', '11,699.00', 'compu3.png', 'NVIDIA® GeForce GTX™ 1050 Ti / Intel Pentium Gold ', 10),
(4, 'Computadora LOGIC RABBIT', '9,599.00', 'compu4.jpg', 'Intel Core i5-10400 / 8GB RAM / 480GB SSD SATA', 10),
(5, 'Computadora PRIDE GAMING SNAIL', '14,999.00', 'compu4.png', 'MD RADEON GRAPHICS / AMD Ryzen 7 5700G / 16GB RAM ', 10),
(6, 'Computadora PRIDE GAMING AORUS PC FENRIR', '109,999.00', 'compu5.jpg', 'NVIDIA® GeForce RTX™ 4090 / AMD Ryzen 9 7950X ', 10),
(7, 'Computadora PRIDE CREATOR BUTTERFLY', '14,799.00', 'compu6.png', 'Nvidia Quadro P620 2GB / Intel Core i3-10100F', 10),
(8, 'Computadora PRIDE GAMING CRICKET', '7,999.00', 'compu7.png', 'Radeon Vega Graphics / AMD Ryzen 3 PRO 4350G / 8GB', 10),
(9, 'Computadora PRIDE GAMING AORUS PC CAMEL', '17,999.00', 'compu8.jpg', 'NVIDIA® GeForce RTX™ 2060 / Intel Core i3-10100F', 10),
(10, 'Computadora PRIDE GAMING LION', '58,999.00', 'compu9.png', 'AMD RADEON RX 6800 XT / AMD Ryzen 7 5800X / 32GB', 10),
(11, 'Computadora PRIDE CREATOR MACAW', '29,999.00', 'compu10.png', 'Nvidia Quadro RTX A2000 6GB / Intel Core i7-11700F', 10),
(12, 'Computadora PRIDE PBA CREATOR AROD', '45,999.00', 'compu11.png', 'NVIDIA® GeForce RTX™ 3070 TI / AMD Ryzen 7 5800X', 10),
(13, 'Computadora PRIDE PUG', '7,999.00', 'compu1.png', 'AMD RADEON RX 550 2GB GDDR5 / Intel Core i3-10100F', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_User` int(10) NOT NULL,
  `nombre_u` varchar(50) NOT NULL,
  `apaterno_u` varchar(50) NOT NULL,
  `amaterno_u` varchar(50) NOT NULL,
  `edad_u` int(10) NOT NULL,
  `correo_u` varchar(50) NOT NULL,
  `telefono_u` varchar(50) NOT NULL,
  `sexo_u` varchar(50) NOT NULL,
  `nickname_u` varchar(50) NOT NULL,
  `hobbies_u` varchar(50) NOT NULL,
  `password_u` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_User`, `nombre_u`, `apaterno_u`, `amaterno_u`, `edad_u`, `correo_u`, `telefono_u`, `sexo_u`, `nickname_u`, `hobbies_u`, `password_u`) VALUES
(1, 'David Ismael', 'Hurtado', 'Rodrigez', 18, 'david@gmail.com', '3329586710', 'Hombre', 'David12', 'VIDEOJUEGOS', '12345'),
(3, 'Francisco Joshua', 'Becerra', 'Hernandez', 17, 'joshua@gmail.com', '3329851029', 'Hombre', 'Joshua516', 'DEPORTES--MUSICA--VIDEOJUEGOS--', '12367rf'),
(4, 'IAN', 'Macias', 'Meza', 18, 'ian@gmail.com', '3312345612', 'Hombre', 'IAN12374', 'DEPORTES--MUSICA--VIDEOJUEGOS--', '1234'),
(5, 'Caleb', 'Becerra', 'Hernandez', 17, 'caleb@gmail.com', '3312345612', 'Hombre', 'asd13123', 'MUSICA--VIDEOJUEGOS--', '1234'),
(6, 'Abner', 'Fernandez', 'Gomez', 18, 'abner@gmail.com', '3312345612', 'Hombre', 'Abner1235', 'DEPORTES--MUSICA--VIDEOJUEGOS--', '1234'),
(7, 'Joshua', 'Becerra', 'Hernandez', 17, 'joshua@gmail.com', '3312345612', 'Hombre', 'Joshua5161', 'DEPORTES--MUSICA--VIDEOJUEGOS--', '1234'),
(8, 'Francisco', 'Becerra', 'Rodriez', 18, 'joshua@gmail.com', '3312345612', 'Hombre', 'Joshua5165', 'DEPORTES--MUSICA--VIDEOJUEGOS--', '1234'),
(9, 'alan', 'Macias', 'Hernandez', 17, 'alan@gmail.com', '3312345612', 'Hombre', 'alan123', 'DEPORTES--MUSICA--', '1234'),
(10, 'hola', 'dgs', 'sdfs', 16, '12@ganasd.com', '3301028323', 'Hombre', '123sad1', 'DEPORTES--', '1234'),
(11, 'Arenita', 'Mejilla', 'Mejilla', 25, 'arenita@gmail.com', '0123456789', 'Hombre', 'arena', 'DEPORTES--', '123'),
(12, 'Juanito', 'Escarcha', 'Escarcha', 50, 'juanito@ceti.mx', '0123456789', 'Mujer', 'El juanito bebe', 'DEPORTES--', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_User` int(10) NOT NULL,
  `nombre_u` varchar(50) NOT NULL,
  `password_u` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_User`, `nombre_u`, `password_u`) VALUES
(1, 'Joshua', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_compo`
--
ALTER TABLE `mis_compo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_User`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mis_compo`
--
ALTER TABLE `mis_compo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
