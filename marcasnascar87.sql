-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2024 a las 23:00:54
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
-- Estructura de tabla para la tabla `marcasnascar87`
--

CREATE TABLE `marcasnascar87` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(400) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `triunfos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcasnascar87`
--

INSERT INTO `marcasnascar87` (`id_marca`, `marca`, `img`, `triunfos`) VALUES
(0, 'Buick', 'https://i.pinimg.com/474x/39/32/50/3932509398b5b2ae39e7adbf164e5bf8.jpg', 1),
(1, 'Chevrolet', 'https://www.carburando.com/media/cache/post_desktop/images/logo_chevrolet1.jpg', 16),
(2, 'Ford', 'https://static.vecteezy.com/system/resources/previews/000/063/793/non_2x/vector-ford-logo.jpg', 11),
(3, 'Pontiac', 'https://i.pinimg.com/736x/1b/80/99/1b8099e85e0c87afd0f28f9b008da156.jpg', 2),
(4, 'Oldsmobile', 'https://i.pinimg.com/736x/68/86/91/688691396945b6d29ab2143bed4926cf.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcasnascar87`
--
ALTER TABLE `marcasnascar87`
  ADD PRIMARY KEY (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
