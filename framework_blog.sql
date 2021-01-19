-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2019 a las 23:57:32
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `framework_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd', '2019-10-03 23:14:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `prominent` tinyint(1) NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `photo`, `status`, `prominent`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Johan David Castro Palomares', 'johanca965@hotmail.com', 'default.png', 1, 2, 'asd as as as ', '2019-10-03 23:17:16', '2019-10-03 23:17:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `poster` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) UNSIGNED NOT NULL DEFAULT '1',
  `views` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `poster`, `content`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ejemplo de blog', 'ejemplo-de-blog', 'ejemplo-de-blog/15-29-banner-4.jpg', '<p>djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;<span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj&nbsp;</span><span style=\"font-size: 1rem;\">djkash dkjah kjah dkah kjhak hakjdkaskjgkj v</span><br></p>', 2, 4, '2019-10-03 23:15:45', '2019-10-03 23:15:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`) VALUES
(1, 1, 1, '2019-10-03 23:15:46'),
(2, 1, 1, '2019-10-03 23:15:46'),
(3, 1, 2, '2019-10-03 23:15:46'),
(4, 1, 3, '2019-10-03 23:15:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `ip` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rates`
--

INSERT INTO `rates` (`id`, `post_id`, `ip`, `created_at`, `updated_at`) VALUES
(2, 1, '::1', '2019-10-07 15:05:04', '2019-10-07 15:05:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `comment` text COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `name`, `email`, `photo`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'test user', 'test-user@hyperlinkse.com', 'johanca965.jpg', 1, 'asdasd', '2019-10-03 23:17:32', '2019-10-03 23:17:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`) VALUES
(1, 'asd', '2019-10-03 23:15:46'),
(2, '222', '2019-10-03 23:15:46'),
(3, 'ad', '2019-10-03 23:15:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `role` int(11) NOT NULL,
  `photo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `slug`, `password`, `role`, `photo`, `blocked`, `created_at`, `updated_at`) VALUES
(1, 'test user', 'test-user@hyperlinkse.com', 'test-user', '$2y$10$cctuD6fztAheXnm8JHnuF.xyQPHbdF.h74ay/AELfB6L/p9DVoF1e', 1, 'johanca965.jpg', 0, '2019-09-20 04:50:44', '2019-09-20 04:50:44'),
(2, 'johan castro', 'johanca965@hotmail.com', 'johan-castro', '$2y$10$aeOsIqv/UM6IFMjqyP2.uO04iGrZGOE3y7.bXAeBgMph8BZTC0o3K', 0, '', 0, '2019-10-01 03:38:52', '2019-10-01 03:38:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `keyword_id` (`tag_id`);

--
-- Indices de la tabla `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indices de la tabla `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
