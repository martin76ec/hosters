-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2019 a las 11:43:35
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
(37, '2019-07-16 01:16:18', '2019-07-16 03:29:37', 15, 1),
(38, '2019-07-16 03:32:32', '2019-07-16 03:34:10', 15, 1),
(39, '2019-07-16 03:35:14', '2019-07-16 03:36:44', 15, 1),
(40, '2019-07-16 03:45:34', '2019-07-16 03:45:40', 15, 1),
(41, '2019-07-16 03:47:59', '2019-07-16 03:48:02', 15, 1),
(42, '2019-07-16 03:57:47', '2019-07-16 03:57:51', 15, 1),
(43, '2019-07-16 04:14:22', '2019-07-16 04:36:08', 15, 1);

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
  `catari` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `russian` varchar(220) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `spanish`, `catari`, `russian`, `english`) VALUES
('Catalogue', 'Catalogo', 'فهرس', 'каталог', 'Catalogue'),
('Myproperties', 'Mis inmuebles', 'ممتلكاتي', 'Мои объекты', 'My properties'),
('Misarriendos', 'Mis arriendos', 'بلدي عقود الإيجار', 'Мои договоры аренды', 'My leases'),
('Sign up', 'Registrate', 'التسجيل', 'Регистрация', 'Sign up'),
('Login', 'Iniciar sesion', 'دخول', 'Войти', 'Log in'),
('Signoff', 'Cerrar Sesion', 'الخروج', 'Выход', 'Sign off'),
('conflogooff', '¿Está seguro que desea cerrar sesión?', 'هل أنت متأكد أنك تريد تسجيل الخروج؟', 'Вы уверены, что хотите выйти?', 'Are you sure you want to log off?'),
('keepin', 'No, quiero seguir viendo', 'لا، أريد أن تبقي مشاهدة', 'Нет, я хочу продолжать смотреть', 'No, I want to keep watching'),
('', 'Si, me tomare un descanso ', 'إذا كنت تأخذ استراحة', 'Если я отдыхаю', 'If I take a break'),
('Tolease', 'Arrendar', 'عقد الإيجار', 'аренда', 'To lease'),
('rent', 'Arrendar', 'عقد الإيجار', 'аренда', 'To lease'),
('confrent', '¿Está seguro que desea arrendar este lugar?', 'هل أنت متأكد أنك ترغب في استئجار هذا المكان؟', 'Вы уверены, что хотите арендовать это место?', 'Are you sure you want to rent this place?'),
('Yes', 'Si', 'إذا', 'если', 'Yes'),
('Yes', 'Si', 'إذا', 'если', 'Yes'),
('Do not', 'No', 'ليس', 'не', 'Do not'),
('rentsucc', 'Renta registrada con exito', 'استئجار التسجيل بنجاح', 'Прокат успешно зарегистрирован', 'Rent successfully registered'),
('usercreated', 'Usuario creado correctamente', 'المستخدم إنشاء بنجاح', 'Пользователь успешно создан', 'User created successfully'),
('Error', 'Error', 'خطأ', 'ошибка', 'Error'),
('email', 'email', 'البريد الإلكتروني', '\r\nпо электронной почте', 'email'),
('password', 'contraseña', 'كلمة المرور', 'пароль', 'password'),
('name', 'nombre', 'اسم', 'имя', 'name'),
('lastname', 'apellido', 'لقب\r\n', 'фамилия', 'lastname'),
('cancel', 'cancelar', 'إلغاء', 'отменить', 'cancel'),
('pernight', 'por noche', 'في الليلة', '\r\nза ночь', 'per night'),
('includes', 'incluye alimentación', 'يشمل الغذاء', '\r\nвключает в себя еду', 'food included'),
('noincludes', 'no incluye alimentación', 'لا يشمل الغذاء\r\n', 'не включает еду', 'food not included'),
('discharge', 'dar de alta', 'تفريغ', 'разряд', 'discharge'),
('dischargesite', '¿Está seguro que desea dar de alta este lugar?', 'هل أنت متأكد أنك تريد تسجيل هذا', 'Вы уверены, что хотите зарегистрировать это место?', '\r\nAre you sure you want to register this place?'),
('addhost', 'añadir inmueble', 'إضافة الممتلكات', 'добавить недвижимость', 'add property');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
