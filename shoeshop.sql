-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2021 a las 23:49:41
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
-- Base de datos: `shoeshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`categoryId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tenis', '2020-11-25 15:35:35', '2020-11-25 15:35:35'),
(2, 'Botas', '2020-11-25 15:35:35', '2020-11-25 15:35:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `cityId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stateId` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `countryId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`countryId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Colombia', '2020-11-22 14:41:36', '2020-11-22 14:41:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `genderId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`genderId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Femenino', '2020-11-26 15:34:50', '2020-11-26 15:34:50'),
(2, 'Masculino', '2020-11-25 15:34:50', '2020-11-25 15:34:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `imagesId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `productId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_06_201542_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `genderId` int(11) NOT NULL,
  `statusProductId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`productId`, `name`, `material`, `price`, `description`, `color`, `brand`, `categoryId`, `genderId`, `statusProductId`, `storeId`, `created_at`, `updated_at`) VALUES
(1, 'Tenis Running', 'Tela', 100, 'Lorem ipsum dolor, elit. ', 'Azul', 'Running', 1, 1, 1, 1, '2020-11-27 15:05:13', '2020-11-25 15:37:52'),
(2, 'Botas Altas', 'Cuero', 200, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint impedit nisi ipsam, temporibus quod blanditiis dolorum non ipsum tempora accusantium quidem molestiae, facere et aut quam corrupti! Quia, deleniti nobis?', 'Café', 'Bata', 2, 1, 2, 1, '2020-11-27 15:05:04', '2020-11-25 15:39:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productssize`
--

CREATE TABLE `productssize` (
  `productSizesId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sizeId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rolId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rolId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrador', '2020-11-22 14:42:26', '2020-11-22 14:42:26'),
(2, 'Administrador', '2020-11-23 14:42:26', '2020-11-23 14:42:26'),
(3, 'Cliente', '2020-11-23 14:43:04', '2020-11-23 14:43:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saledetails`
--

CREATE TABLE `saledetails` (
  `saleDetails` int(11) NOT NULL,
  `price` double NOT NULL,
  `saleId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `userAddressId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `saledetails`
--

INSERT INTO `saledetails` (`saleDetails`, `price`, `saleId`, `productId`, `userAddressId`, `created_at`, `updated_at`) VALUES
(1, 100, 1, 1, 1, '2020-11-27 15:39:17', '2020-11-27 15:39:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `saleId` int(11) NOT NULL,
  `date` date NOT NULL,
  `totalPrice` double NOT NULL,
  `userId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `statusSaleId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`saleId`, `date`, `totalPrice`, `userId`, `storeId`, `statusSaleId`, `created_at`, `updated_at`) VALUES
(1, '2020-11-26', 200, 2, 1, 1, '2020-11-27 15:38:02', '2020-11-27 15:37:07'),
(2, '2020-11-26', 100, 2, 1, 1, '2020-11-27 15:37:44', '2020-11-27 15:37:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `sizeId` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`sizeId`, `number`, `created_at`, `updated_at`) VALUES
(1, 24, '2020-11-27 14:44:46', '2020-11-28 14:44:42'),
(2, 25, '2020-11-27 14:44:50', '2020-11-28 14:44:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `stateId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `countryId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statusproducts`
--

CREATE TABLE `statusproducts` (
  `statusProductId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `statusproducts`
--

INSERT INTO `statusproducts` (`statusProductId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Disponible', '2020-11-26 15:33:59', '2020-11-26 15:33:59'),
(2, 'Agotado', '2020-11-26 15:34:24', '2020-11-26 15:34:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statussale`
--

CREATE TABLE `statussale` (
  `statusSaleId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `statussale`
--

INSERT INTO `statussale` (`statusSaleId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'En proceso', '2020-11-27 14:45:44', '2020-11-28 14:45:42'),
(2, 'Enviado', '2020-11-27 14:45:47', '2020-11-28 14:45:45'),
(3, 'Cancelado', '2020-11-27 14:45:52', '2020-11-28 14:45:48'),
(4, 'Anulado', '2020-11-27 14:45:55', '2020-11-28 14:45:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stores`
--

CREATE TABLE `stores` (
  `storeId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stores`
--

INSERT INTO `stores` (`storeId`, `name`, `nit`, `image`, `description`, `cellphone`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'El mundo del deporte', '90555623', '/img/about.vsg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint impedit nisi ipsam, temporibus quod blanditiis dolorum non ipsum tempora accusantium quidem molestiae, facere et aut quam corrupti! Quia, deleniti nobis?', '3123652536', 2, '2020-11-27 14:41:18', '2020-11-25 15:36:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typedocuments`
--

CREATE TABLE `typedocuments` (
  `typeDocumentsId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `typedocuments`
--

INSERT INTO `typedocuments` (`typeDocumentsId`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cedula de ciudadanía', '2020-11-27 14:46:55', '2020-11-28 14:46:53'),
(2, 'Cedula de extranjería', '2020-11-27 14:46:58', '2020-11-28 14:46:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `useraddress`
--

CREATE TABLE `useraddress` (
  `userAddressId` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `postalCode` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `userDataId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdata`
--

CREATE TABLE `userdata` (
  `userDataId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `secondName` varchar(50) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `documentNumber` varchar(20) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `birthDate` date NOT NULL,
  `rolId` int(11) NOT NULL,
  `typeDocumentId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'El mundo del deporte', 'mundo@deporte', NULL, '$2y$10$yx5UuzALuIyqx9GbQxR/W.njtiLw5Mr6P2GzliCyvUivnd.E8dFDu', NULL, '2020-11-27 20:30:43', '2020-11-27 20:30:43'),
(2, 'Cliente', 'cliente@cliente', NULL, '$2y$10$wG9Z57jugVoFCOmSiWBfiecGb.DKH9GJOtlE//3ZO6jXkiKg9tfPq', NULL, '2020-11-27 20:36:40', '2020-11-27 20:36:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityId`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countryId`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderId`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imagesId`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indices de la tabla `productssize`
--
ALTER TABLE `productssize`
  ADD PRIMARY KEY (`productSizesId`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolId`);

--
-- Indices de la tabla `saledetails`
--
ALTER TABLE `saledetails`
  ADD PRIMARY KEY (`saleDetails`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleId`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`sizeId`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`stateId`);

--
-- Indices de la tabla `statusproducts`
--
ALTER TABLE `statusproducts`
  ADD PRIMARY KEY (`statusProductId`);

--
-- Indices de la tabla `statussale`
--
ALTER TABLE `statussale`
  ADD PRIMARY KEY (`statusSaleId`);

--
-- Indices de la tabla `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`storeId`);

--
-- Indices de la tabla `typedocuments`
--
ALTER TABLE `typedocuments`
  ADD PRIMARY KEY (`typeDocumentsId`);

--
-- Indices de la tabla `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`userAddressId`);

--
-- Indices de la tabla `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userDataId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `genderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `imagesId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productssize`
--
ALTER TABLE `productssize`
  MODIFY `productSizesId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `saledetails`
--
ALTER TABLE `saledetails`
  MODIFY `saleDetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `saleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `sizeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `stateId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `statusproducts`
--
ALTER TABLE `statusproducts`
  MODIFY `statusProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `statussale`
--
ALTER TABLE `statussale`
  MODIFY `statusSaleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `stores`
--
ALTER TABLE `stores`
  MODIFY `storeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `typedocuments`
--
ALTER TABLE `typedocuments`
  MODIFY `typeDocumentsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `userAddressId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userDataId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
