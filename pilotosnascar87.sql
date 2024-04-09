-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2024 a las 23:01:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpespecial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilotosnascar87`
--

CREATE TABLE `pilotosnascar87` (
  `id_Piloto` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `poles` int(11) NOT NULL,
  `ganadas` int(11) NOT NULL,
  `cantCarreras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pilotosnascar87`
--

INSERT INTO `pilotosnascar87` (`id_Piloto`, `nombre`, `apellido`, `marca`, `img`, `id_marca`, `numero`, `poles`, `ganadas`, `cantCarreras`) VALUES
(16, 'Morgan', 'Shepherd', 'Buick', 'https://showroom-assets.tradingpaints.gg/pics/490747_1.jpg', 0, 26, 1, 0, 29),
(17, 'Bobby', 'Hillin Jr.', 'Buick', 'https://showroom-assets.tradingpaints.gg/pics/490379_4.jpg', 0, 8, 0, 0, 29),
(18, 'Bobby', 'Allison', 'Buick', 'https://showroom-assets.tradingpaints.gg/pics/490395_3.jpg', 0, 22, 1, 1, 29),
(19, 'Dale', 'Earnhardt', 'Chevrolet', 'https://showroom-assets.tradingpaints.gg/pics/275407_1.jpg', 1, 3, 1, 11, 29),
(20, 'Terry', 'Labonte', 'Chevrolet', 'https://showroom-assets.tradingpaints.gg/pics/674340_1.jpg', 1, 11, 4, 1, 29),
(21, 'Darrell', 'Waltrip', 'Chevrolet', 'https://showroom-assets.tradingpaints.gg/pics/673462_1.jpg', 1, 17, 0, 1, 29),
(22, 'Dave', 'Marcis', 'Chevrolet', 'https://showroom-assets.tradingpaints.gg/pics/417737_1.jpg', 1, 71, 0, 0, 29),
(23, 'Connie', 'Saylor', 'Chevrolet', 'https://showroom-assets.tradingpaints.gg/pics/417282_2.jpg', 1, 6, 0, 0, 10),
(24, 'Harry', 'Gant', 'Chevrolet', 'https://showroom-assets.tradingpaints.gg/pics/277320_5.jpg', 1, 33, 1, 0, 29),
(25, 'Kyle', 'Petty', 'Ford', 'https://showroom-assets.tradingpaints.gg/pics/275601_1.jpg', 2, 21, 0, 1, 29),
(26, 'Bill', 'Elliott', 'Ford', 'https://i.pinimg.com/originals/dd/0d/8a/dd0d8aff9eb39115d0db5991ed59b378.jpg', 2, 9, 8, 6, 29),
(27, 'Derrike', 'Cope', 'Ford', 'https://showroom-assets.tradingpaints.gg/pics/416417_1.jpg', 2, 19, 0, 0, 12),
(28, 'Sterling', 'Marlin', 'Oldsmobile', 'https://showroom-assets.tradingpaints.gg/pics/671685_1.jpg', 4, 44, 0, 0, 29),
(29, 'Cale', 'Yarborough', 'Oldsmobile', 'https://i.pinimg.com/736x/3f/76/12/3f7612eed9d262fde8e75afa925fc6da.jpg', 4, 29, 0, 0, 16),
(30, 'Rick ', 'Wilson', 'Oldsmobile', 'https://showroom-assets.tradingpaints.gg/pics/676850_1.jpg', 4, 4, 0, 0, 19),
(31, 'Lake ', 'Speed', 'Oldsmobile', 'https://showroom-assets.tradingpaints.gg/pics/280450_4.jpg', 4, 83, 0, 0, 13),
(32, 'Buddy', 'Baker', 'Oldsmobile', 'https://showroom-assets.tradingpaints.gg/pics/673631_1.jpg', 4, 88, 0, 0, 20),
(33, 'Richard', 'Petty', 'Pontiac', 'https://showroom-assets.tradingpaints.gg/pics/670290_1.jpg', 3, 43, 0, 0, 29),
(34, 'Rusty', 'Wallace', 'Pontiac', 'https://showroom-assets.tradingpaints.gg/pics/670231_1.jpg', 3, 27, 1, 2, 29),
(35, 'Greg', 'Sacks', 'Pontiac', 'https://showroom-assets.tradingpaints.gg/pics/670687_1.jpg', 3, 50, 0, 0, 16),
(39, 'Jimmy', 'Means', 'Pontiac', 'https://showroom-assets.tradingpaints.gg/pics/674144_1.jpg', 3, 52, 0, 0, 28),
(40, 'J. D.', 'McDuffie', 'Pontiac', 'https://showroom-assets.tradingpaints.gg/pics/670359_1.jpg', 3, 70, 0, 0, 17);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pilotosnascar87`
--
ALTER TABLE `pilotosnascar87`
  ADD PRIMARY KEY (`id_Piloto`) USING BTREE,
  ADD KEY `FK_id_marca` (`id_marca`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pilotosnascar87`
--
ALTER TABLE `pilotosnascar87`
  MODIFY `id_Piloto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pilotosnascar87`
--
ALTER TABLE `pilotosnascar87`
  ADD CONSTRAINT `pilotosnascar87_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marcasnascar87` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
