-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2021 a las 00:18:59
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

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
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Adidasa', 'adidas', '2021-03-15 08:30:03', '2021-03-15 13:35:13'),
(2, 'Nike', 'nike', '2021-03-15 08:30:03', '2021-03-15 13:35:13'),
(3, 'Reebok', 'reebok', '2021-03-15 08:35:16', '2021-03-15 13:35:37'),
(4, 'Puma', 'puma', '2021-03-15 08:35:39', '2021-03-15 13:36:08'),
(5, 'Skechers', 'skechers', '2021-03-15 08:35:39', '2021-03-15 13:36:08'),
(6, 'New Balance', 'new-balance', '2021-03-15 08:37:05', '2021-03-15 13:37:48'),
(7, 'Le Coq Sportif', 'le-coq-sportif', '2021-03-15 08:37:05', '2021-03-15 13:37:48'),
(8, 'Converse', 'converse', '2021-03-15 08:38:00', '2021-03-15 13:38:14'),
(9, 'Kappa', 'kappa', '2021-03-15 08:38:17', '2021-03-15 13:38:30'),
(10, 'Alpha Tauri', 'alpha-tauri', '2021-03-15 08:38:33', '2021-03-15 13:38:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`categoryId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tenis', 'tenis', '2021-02-09 15:28:04', '2020-11-25 15:35:35'),
(2, 'Botas', 'botas', '2021-02-09 15:28:09', '2020-11-25 15:35:36'),
(3, 'Sandalias', 'sandalias', '2021-03-09 15:21:05', NULL),
(4, 'Tacones', 'tacones', '2021-03-09 15:21:05', NULL),
(5, 'Zapatos Casuales', 'zapatos-casuales', '2021-03-09 15:21:51', NULL),
(6, 'Baletas', 'baletas', '2021-03-09 15:21:51', NULL),
(7, 'Mocasines', 'mocasines', '2021-03-09 15:22:07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `genderId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`genderId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Femenino', 'feminino', '2021-02-09 15:35:07', '2020-11-26 15:34:50'),
(2, 'Masculino', 'masculino', '2021-02-09 15:35:12', '2020-11-25 15:34:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `imagesId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `portada` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`imagesId`, `productId`, `name`, `portada`, `created_at`, `updated_at`) VALUES
(1, 1, '/tenis-running1.jpg', '1', '2021-03-23 19:57:33', NULL),
(2, 2, '/botas-altas.jpg', '1', '2021-03-23 19:57:38', NULL),
(3, 3, '/sandalias-planas.jpg', '1', '2021-03-23 19:57:39', NULL),
(4, 4, '/sandalias-altas.jpg', '1', '2021-03-23 19:57:41', NULL),
(5, 5, '/sandalias.jpg', '1', '2021-03-23 19:57:43', NULL),
(6, 6, '/tenis.jpg', '1', '2021-03-23 19:57:46', NULL),
(7, 7, '/tenis-training.jpg', '1', '2021-03-23 19:57:50', NULL),
(8, 1, '/tenis-running2.jpg', '0', '2021-03-23 19:57:57', NULL),
(9, 1, '/tenis-running3.jpg', '0', '2021-03-23 19:57:59', NULL),
(10, 1, '/tenis-running4.jpg', '0', '2021-03-23 19:58:01', NULL),
(11, 29, '/mocasines-cuero.jpg', '1', '2021-03-29 14:33:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `material` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `brandId` int(11) NOT NULL,
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

INSERT INTO `products` (`productId`, `name`, `slug`, `material`, `price`, `description`, `color`, `brand`, `brandId`, `categoryId`, `genderId`, `statusProductId`, `storeId`, `created_at`, `updated_at`) VALUES
(1, 'Tenis Runningvvv', 'tenis-running', 'Tela', 100, '                                                                                                                Lorem ipsum dolor, elit.                                                                                                                 ', 'Azul', 'Running', 1, 1, 1, 2, 1, '2021-04-13 04:09:19', '2020-11-25 15:37:52'),
(2, 'Botas Altas', 'botas-altas', 'Cuero', 200, '                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint impedit nisi ipsam, temporibus quod blanditiis dolorum non ipsum tempora accusantium quidem molestiae, facere et aut quam corrupti! Quia, deleniti nobis?                                                        ', 'Café', 'Bata', 9, 2, 1, 1, 1, '2021-03-29 13:17:04', '2020-11-25 15:39:57'),
(3, 'Sandalias planas', 'sandalias-planas', 'Cuero', 50, 'Sandalia plana', 'Rosa', 'Velez', 8, 3, 1, 1, 1, '2021-03-26 05:13:25', '2020-11-25 15:37:52'),
(4, 'Sandalias altas 2020', 'sandalias-altas', 'Cuero', 50, '                            Sandalia tacon                            ', 'Rosa', 'Velez', 8, 2, 1, 1, 1, '2021-03-28 22:15:00', '2020-11-25 15:37:52'),
(5, 'Sandalias', 'sandalias', 'Cuero', 50, '                            Sandalia                            ', 'Rosa', 'Velez', 3, 3, 1, 2, 1, '2021-04-13 04:09:45', '2020-11-25 15:37:52'),
(6, 'Tenis', 'tenis', 'Tela', 100, 'Lorem ipsum dolor, elit. ', 'Azul', 'Running', 2, 1, 2, 1, 1, '2021-03-25 20:44:56', '2020-11-25 15:37:52'),
(7, 'Tenis Training', 'tenis-training', 'Tela', 100, 'Lorem ipsum dolor, elit. ', 'Blanco', 'Running', 2, 1, 2, 1, 1, '2021-03-25 20:44:52', '2020-11-25 15:37:52'),
(29, 'Mocasines Cuero', 'mocasines-cuero', 'Cuero', 200, '                            lkmjnhfgbvd                            ', 'Negro', 'Velez', 1, 7, 2, 1, 1, '2021-03-29 14:33:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productssize`
--

CREATE TABLE `productssize` (
  `productSizesId` int(11) NOT NULL,
  `sizeId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productssize`
--

INSERT INTO `productssize` (`productSizesId`, `sizeId`, `productId`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 35, 1, 1, '2021-03-09 15:02:32', '2021-03-09 15:02:32'),
(6, 37, 2, 1, '2021-03-09 15:02:32', '2021-03-09 15:02:32'),
(7, 36, 3, 4, '2021-04-18 19:38:44', '2021-04-18 19:38:44'),
(8, 37, 4, 4, '2021-04-18 19:38:44', '2021-04-18 19:38:44'),
(9, 37, 5, 3, '2021-03-09 15:03:23', '2021-03-09 15:03:23'),
(10, 33, 6, 1, '2021-03-09 15:04:00', '2021-03-09 15:04:00'),
(11, 38, 7, 1, '2021-03-09 15:04:00', '2021-03-09 15:04:00'),
(12, 38, 1, 1, '2021-03-11 21:40:16', '2021-03-11 21:40:16'),
(13, 35, 2, 1, '2021-03-09 15:02:32', '2021-03-09 15:02:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rolId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rolId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrador', 'superadministrador', '2021-02-09 15:38:52', '2020-11-22 14:42:26'),
(2, 'Administrador', 'administrador', '2021-02-09 15:39:09', '2020-11-23 14:42:26'),
(3, 'Cliente', 'cliente', '2021-02-09 15:39:15', '2020-11-23 14:43:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saledetails`
--

CREATE TABLE `saledetails` (
  `saleDetailsId` int(11) NOT NULL,
  `saleId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `price` double NOT NULL COMMENT 'No es necesario este campo porque cada producto tiene su precio',
  `size` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `saledetails`
--

INSERT INTO `saledetails` (`saleDetailsId`, `saleId`, `productId`, `price`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 50, 37, 1, '2021-04-18 19:09:37', '0000-00-00 00:00:00'),
(2, 1, 3, 50, 36, 1, '2021-04-18 19:09:37', '0000-00-00 00:00:00'),
(3, 2, 2, 200, 37, 1, '2021-04-18 19:51:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `saleId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `totalPrice` double NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `storeId` int(11) NOT NULL,
  `statusSaleId` int(11) NOT NULL,
  `observations` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`saleId`, `date`, `totalPrice`, `userId`, `storeId`, `statusSaleId`, `observations`, `created_at`, `updated_at`) VALUES
(1, '2021-04-18 19:09:37', 100, 39, 1, 4, 'Efectivo', '2021-04-18 19:09:37', '2021-04-18 19:38:43'),
(2, '2021-04-18 19:51:14', 200, 39, 1, 1, 'NULL', '2021-04-18 19:51:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `sizeId` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`sizeId`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-18 17:27:53', '2021-04-18 17:27:53'),
(2, 2, '2021-03-09 14:53:46', NULL),
(3, 3, '2021-03-09 14:53:46', NULL),
(4, 4, '2021-03-09 14:54:06', NULL),
(5, 5, '2021-03-09 14:54:06', NULL),
(6, 6, '2021-03-09 14:56:47', NULL),
(7, 6, '2021-03-09 14:56:47', NULL),
(8, 8, '2021-03-09 14:57:00', NULL),
(9, 9, '2021-03-09 14:57:00', NULL),
(10, 10, '2021-03-09 14:57:47', NULL),
(11, 11, '2021-03-09 14:57:47', NULL),
(12, 12, '2021-03-09 14:57:47', NULL),
(13, 13, '2021-03-09 14:57:47', NULL),
(14, 14, '2021-03-09 14:57:47', NULL),
(15, 15, '2021-03-09 14:58:30', NULL),
(16, 16, '2021-03-09 14:58:30', NULL),
(17, 17, '2021-03-09 14:58:30', NULL),
(18, 18, '2021-03-09 14:58:30', NULL),
(19, 19, '2021-03-09 14:58:30', NULL),
(20, 20, '2021-03-09 14:58:41', NULL),
(21, 21, '2021-03-09 14:58:41', NULL),
(22, 22, '2021-03-09 14:59:52', NULL),
(23, 23, '2021-03-09 14:59:52', NULL),
(24, 24, '2021-03-09 14:59:52', NULL),
(25, 25, '2021-03-09 14:59:52', NULL),
(26, 26, '2021-03-09 14:59:52', NULL),
(27, 27, '2021-03-09 14:59:52', NULL),
(28, 28, '2021-03-09 14:59:52', NULL),
(29, 29, '2021-03-09 14:59:52', NULL),
(30, 30, '2021-03-09 14:59:52', NULL),
(31, 31, '2021-03-09 15:00:43', NULL),
(32, 32, '2021-03-09 15:00:43', NULL),
(33, 33, '2021-03-09 15:00:43', NULL),
(34, 34, '2021-03-09 15:00:43', NULL),
(35, 35, '2021-03-09 15:00:43', NULL),
(36, 36, '2021-03-09 15:00:43', NULL),
(37, 37, '2021-03-09 15:00:43', NULL),
(38, 38, '2021-03-09 15:00:43', NULL),
(39, 39, '2021-03-09 15:00:43', NULL),
(40, 40, '2021-03-09 15:01:20', NULL),
(41, 41, '2021-03-09 15:01:20', NULL),
(42, 42, '2021-03-09 15:01:20', NULL),
(43, 43, '2021-03-09 15:01:20', NULL),
(44, 44, '2021-03-09 15:01:20', NULL),
(45, 45, '2021-03-09 15:01:20', NULL),
(46, 46, '2021-03-09 15:01:20', NULL),
(47, 47, '2021-03-09 15:01:20', NULL),
(48, 48, '2021-03-09 15:01:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statusproducts`
--

CREATE TABLE `statusproducts` (
  `statusProductId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `statusproducts`
--

INSERT INTO `statusproducts` (`statusProductId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Disponible', 'disponible', '2021-02-09 15:41:48', '2020-11-26 15:33:59'),
(2, 'Agotado', 'agotado', '2021-02-09 15:41:53', '2020-11-26 15:34:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statussale`
--

CREATE TABLE `statussale` (
  `statusSaleId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `statussale`
--

INSERT INTO `statussale` (`statusSaleId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'En proceso', 'en-proceso', '2021-02-09 15:43:12', '2020-11-28 14:45:42'),
(2, 'Enviado', 'enviado', '2021-02-09 15:43:16', '2020-11-28 14:45:45'),
(3, 'Cancelado', 'cancelado', '2021-02-09 15:43:24', '2020-11-28 14:45:48'),
(4, 'Anulado', 'anulado', '2021-02-09 15:43:28', '2020-11-28 14:45:53'),
(5, 'confirmado', 'confirmado', '2021-04-18 19:32:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stores`
--

CREATE TABLE `stores` (
  `storeId` int(11) NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stores`
--

INSERT INTO `stores` (`storeId`, `userId`, `name`, `slug`, `nit`, `image`, `description`, `cellphone`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'El Mundo Del Deporte', 'el-mundo-del-deporte', '90555623', '/shoes.png', '						Desde BD Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint impedit nisi ipsam, temporibus quod blanditiis dolorum non ipsum tempora accusantium quidem molestiae, facere et aut quam corrupti! Quia, deleniti nobis?					', '3128919343', 'Calle 34 BE 55A barrio La UIS', '2021-04-07 14:47:30', '2021-04-07 14:47:30'),
(8, 36, 'hse', 'hse', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '2021-04-18 06:06:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typedocuments`
--

CREATE TABLE `typedocuments` (
  `typeDocumentsId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `typedocuments`
--

INSERT INTO `typedocuments` (`typeDocumentsId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Cedula de ciudadanía', 'cedula-de-ciudadanía', '2021-02-09 15:46:51', '2020-11-28 14:46:53'),
(2, 'Cedula de extranjería', 'cedula-de-extranjería', '2021-02-09 15:47:01', '2020-11-28 14:46:56'),
(3, 'Pasaporte', 'pasaporte', '2021-03-11 01:37:25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdata`
--

CREATE TABLE `userdata` (
  `userDataId` int(11) NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `secondName` varchar(50) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `secondLastName` varchar(50) DEFAULT NULL,
  `documentNumber` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `typeDocumentId` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `userdata`
--

INSERT INTO `userdata` (`userDataId`, `userId`, `firstName`, `secondName`, `lastName`, `secondLastName`, `documentNumber`, `cellphone`, `birthDate`, `address`, `typeDocumentId`, `created_at`, `updated_at`) VALUES
(1, 2, 'Maria', 'Isabel', 'Herrera', 'Blanco', '1116040087', '3212563239', '2004-04-30', 'Calle 22 A # 30 - 81', 1, '2021-03-11 20:10:16', '2021-02-23 02:50:41'),
(2, 4, 'Patricia', 'Dina', 'Teheran', 'Altamar', '123456', '12345', '2020-05-14', 'Calle 22 A # 30 -75', 1, '2021-04-13 04:36:01', '2021-04-13 04:36:01'),
(28, 39, 'emilse palomares', 'NULL', 'NULL', 'NULL', '1099214218', 'NULL', '0000-00-00', 'NULL', 1, '2021-04-18 20:06:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT 0,
  `_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `slug`, `password`, `blocked`, `_token`, `created_at`, `updated_at`) VALUES
(1, 'El mundo del deporte', 'mundo@deporte', 2, 'mundo-deporte', '$2y$10$yODMvAyKUdu.oCaSpKG2oO.y4sq5i/rpmZH8NxUDYHDy90dacFdku', 0, 'arCZGSzZP/unGZP;Z;3FZg9dGgsAiE&K/L3bKkLcbn7Xw6.#:vNOK95*Vbcf#Mi.*;rzQ,l;C#V7o_xP_O4X|HBR5F5r,SGrNvN&', '2020-11-27 20:30:43', '2020-11-27 20:30:43'),
(2, 'Cliente', 'cliente@cliente', 3, 'cliente', '$2y$10$wG9Z57jugVoFCOmSiWBfiecGb.DKH9GJOtlE//3ZO6jXkiKg9tfPq', 0, NULL, '2020-11-27 20:36:40', '2020-11-27 20:36:40'),
(4, 'Diana', 'dalejandra402@gmail.com', 3, 'dalejandra402-gmail.com', '$2y$10$yODMvAyKUdu.oCaSpKG2oO.y4sq5i/rpmZH8NxUDYHDy90dacFdku', 0, 'yvk=f+K%8_Fth@o/KRIqqO:cRUf3DApTqEp8yzPBDFqp4Un\\mr4EEP@whFV8aQVN#=SM\\+P|t*5ZCNZHy.UZNi#,:3tahD54%J^H', '2021-03-10 14:20:31', '2021-04-13 04:36:01'),
(33, 'otis', 'otis@gatito', 3, 'otis-gatito', '$2y$10$cKfvLK8LMGZYyu7DoQKOQeRZyeG5GPyP4YCjSnTgqzn2o/kn3RSUC', 0, 'QQRWP+t\\!r3s_##ASzFvA9LBs&MOC.v?Jw\\dH+DC2+&OUwY5A&IZJf?JX?U,2RsatB#NNmzgBUc||SSp2SW*lI5CG++P\\.7U8IaS', '2021-04-18 17:09:56', '0000-00-00 00:00:00'),
(36, 'Johan David Castro Palomares', 'johanca965@gmail.com', 2, 'johanca965-gmail.com', '$2y$10$5aHVRqcGoQIlKn6FLShk5.CXmaDNirdXpgoMFRIPSwnsYfDO6AZ1u', 0, 'iGJOrxNI\\Q+|*hk7o*WF&W\\+9!TmS%Be0aZt&OP/XvV.XGcT!3aqO9Caq|^Y:7AXtB63xRj.TpyxHKPG3f\\%4tJC_p0VmKnwwBMq', '2021-04-18 06:06:49', '0000-00-00 00:00:00'),
(39, 'emilse palomares', 'test-user@hyperlinkse.com', 3, 'test-user-hyperlinkse.com', '$2y$10$8RzPKRTQQHedrCUXwwOvPu/zHZ0zZE7pf2G92cTLQBa42CJ3k4P2C', 0, ',X_izq/DvAXo\\@?_HXi6gIb.tK/fSL!w8lgwXEQE,^0Xl+6U,H?:PlIOBEthp+S\\K?8mN06m2MZ4D/J|aOiSt6;Mo7iTeN,GPvGZ', '2021-04-18 06:09:50', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderId`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imagesId`),
  ADD KEY `Product-Images` (`productId`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `Category` (`categoryId`),
  ADD KEY `StatusProduct` (`statusProductId`),
  ADD KEY `Store` (`storeId`),
  ADD KEY `Gender` (`genderId`),
  ADD KEY `brandId` (`brandId`);

--
-- Indices de la tabla `productssize`
--
ALTER TABLE `productssize`
  ADD PRIMARY KEY (`productSizesId`),
  ADD KEY `Size` (`sizeId`),
  ADD KEY `Product-Size` (`productId`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolId`);

--
-- Indices de la tabla `saledetails`
--
ALTER TABLE `saledetails`
  ADD PRIMARY KEY (`saleDetailsId`),
  ADD KEY `Product` (`productId`),
  ADD KEY `Sale` (`saleId`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleId`),
  ADD KEY `StatusSale` (`statusSaleId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `Store-Sales` (`storeId`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`sizeId`);

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
  ADD PRIMARY KEY (`storeId`),
  ADD KEY `User-Admin` (`userId`);

--
-- Indices de la tabla `typedocuments`
--
ALTER TABLE `typedocuments`
  ADD PRIMARY KEY (`typeDocumentsId`);

--
-- Indices de la tabla `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userDataId`),
  ADD KEY `TypeDocument` (`typeDocumentId`),
  ADD KEY `User` (`userId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`),
  ADD KEY `Rol` (`role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `genderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `imagesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `productssize`
--
ALTER TABLE `productssize`
  MODIFY `productSizesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `saledetails`
--
ALTER TABLE `saledetails`
  MODIFY `saleDetailsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `saleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `sizeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `statusproducts`
--
ALTER TABLE `statusproducts`
  MODIFY `statusProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `statussale`
--
ALTER TABLE `statussale`
  MODIFY `statusSaleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `stores`
--
ALTER TABLE `stores`
  MODIFY `storeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `typedocuments`
--
ALTER TABLE `typedocuments`
  MODIFY `typeDocumentsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userDataId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `Product-Images` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `Brandfk` FOREIGN KEY (`brandId`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `Category` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categoryId`),
  ADD CONSTRAINT `Gender` FOREIGN KEY (`genderId`) REFERENCES `genders` (`genderId`),
  ADD CONSTRAINT `StatusProduct` FOREIGN KEY (`statusProductId`) REFERENCES `statusproducts` (`statusProductId`),
  ADD CONSTRAINT `Store` FOREIGN KEY (`storeId`) REFERENCES `stores` (`storeId`);

--
-- Filtros para la tabla `productssize`
--
ALTER TABLE `productssize`
  ADD CONSTRAINT `Product-Size` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`),
  ADD CONSTRAINT `Size` FOREIGN KEY (`sizeId`) REFERENCES `sizes` (`sizeId`);

--
-- Filtros para la tabla `saledetails`
--
ALTER TABLE `saledetails`
  ADD CONSTRAINT `Product` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`),
  ADD CONSTRAINT `Sale` FOREIGN KEY (`saleId`) REFERENCES `sales` (`saleId`);

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `StatusSale` FOREIGN KEY (`statusSaleId`) REFERENCES `statussale` (`statusSaleId`),
  ADD CONSTRAINT `Store-Sales` FOREIGN KEY (`storeId`) REFERENCES `stores` (`storeId`),
  ADD CONSTRAINT `User-Sales` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `User-Admin` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `TypeDocument` FOREIGN KEY (`typeDocumentId`) REFERENCES `typedocuments` (`typeDocumentsId`),
  ADD CONSTRAINT `User` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Rol` FOREIGN KEY (`role`) REFERENCES `roles` (`rolId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
