-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2019 a las 08:24:43
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hosters`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `errors`
--

CREATE TABLE `errors` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hires`
--

CREATE TABLE `hires` (
  `site_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `started` datetime NOT NULL DEFAULT current_timestamp(),
  `finished` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `closed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hires`
--

INSERT INTO `hires` (`site_id`, `user_id`, `started`, `finished`, `closed`) VALUES
(13, 16, '2019-07-16 01:10:01', NULL, 0),
(15, 15, '2019-07-16 01:19:33', '2019-07-16 01:21:20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `session_id` int(11) NOT NULL,
  `entered` datetime NOT NULL DEFAULT current_timestamp(),
  `exited` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `leaved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `session_start` datetime NOT NULL DEFAULT current_timestamp(),
  `session_finish` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `user_id` int(10) NOT NULL,
  `closed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `session_start`, `session_finish`, `user_id`, `closed`) VALUES
(33, '2019-07-15 22:02:45', '2019-07-15 22:06:12', 16, 1),
(34, '2019-07-15 22:06:24', '2019-07-15 23:52:34', 15, 1),
(35, '2019-07-15 23:52:48', '2019-07-16 01:13:19', 16, 1),
(36, '2019-07-16 01:13:36', '2019-07-16 01:15:30', 16, 1),
(37, '2019-07-16 01:16:18', NULL, 15, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `priceperday` decimal(15,2) NOT NULL,
  `food` tinyint(1) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sites`
--

INSERT INTO `sites` (`id`, `title`, `description`, `user_id`, `priceperday`, `food`, `image`) VALUES
(13, 'Casa playa', 'asdasdasd', 15, '25.00', 0, 's-l400.jpg'),
(14, 'Casa parque', 'Casa frente al parque', 15, '55.00', 1, '01 (1).jpg'),
(15, 'Casa de campo', 'Hermosa casa de campo', 16, '100.00', 1, 'vento-ciudad-celeste.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_images`
--

CREATE TABLE `site_images` (
  `id` int(11) NOT NULL,
  `link` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_translation`
--

CREATE TABLE `site_translation` (
  `site_id` int(11) NOT NULL,
  `language` varchar(200) NOT NULL,
  `title` varchar(220) NOT NULL,
  `description` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` varchar(15) NOT NULL,
  `spanish` varchar(220) NOT NULL,
  `catari` varchar(220) NOT NULL,
  `russian` varchar(220) NOT NULL,
  `english` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET armscii8 NOT NULL,
  `password` text CHARACTER SET armscii8 NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created`, `modified`) VALUES
(15, 'MartÃ­n', 'Larrea', 'grantzero1@gmail.com', 'Parkourzer0ec', '2019-07-15 21:44:56', NULL),
(16, 'Daniel', 'Bermeo', 'dan23@gmail.com', 'IvkuZ08t3', '2019-07-15 22:02:34', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indices de la tabla `hires`
--
ALTER TABLE `hires`
  ADD KEY `site_id` (`site_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `site_images`
--
ALTER TABLE `site_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `site_translation`
--
ALTER TABLE `site_translation`
  ADD KEY `site_id` (`site_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `errors`
--
ALTER TABLE `errors`
  ADD CONSTRAINT `errors_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hires`
--
ALTER TABLE `hires`
  ADD CONSTRAINT `hires_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hires_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `site_images`
--
ALTER TABLE `site_images`
  ADD CONSTRAINT `site_images_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `site_translation`
--
ALTER TABLE `site_translation`
  ADD CONSTRAINT `site_translation_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
