-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2021 a las 18:23:27
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
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `stateId` int(11) NOT NULL,
  `name` varchar(70) CHARACTER SET utf8mb4 NOT NULL,
  `slug` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `stateId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Medellin', 'medellin', '0000-00-00 00:00:00', NULL),
(2, 1, 'Abejorral', 'abejorral', '0000-00-00 00:00:00', NULL),
(3, 1, 'Abriaqui', 'abriaqui', '0000-00-00 00:00:00', NULL),
(4, 1, 'Alejandria', 'alejandria', '0000-00-00 00:00:00', NULL),
(5, 1, 'Amaga', 'amaga', '0000-00-00 00:00:00', NULL),
(6, 1, 'Amalfi', 'amalfi', '0000-00-00 00:00:00', NULL),
(7, 1, 'Andes', 'andes', '0000-00-00 00:00:00', NULL),
(8, 1, 'Angelopolis', 'angelopolis', '0000-00-00 00:00:00', NULL),
(9, 1, 'Angostura', 'angostura', '0000-00-00 00:00:00', NULL),
(10, 1, 'Anori', 'anori', '0000-00-00 00:00:00', NULL),
(11, 1, 'Antioquia', 'antioquia', '0000-00-00 00:00:00', NULL),
(12, 1, 'Anza', 'anza', '0000-00-00 00:00:00', NULL),
(13, 1, 'Apartado', 'apartado', '0000-00-00 00:00:00', NULL),
(14, 1, 'Arboletes', 'arboletes', '0000-00-00 00:00:00', NULL),
(15, 1, 'Argelia', 'argelia', '0000-00-00 00:00:00', NULL),
(16, 1, 'Armenia', 'armenia', '0000-00-00 00:00:00', NULL),
(17, 1, 'Barbosa', 'barbosa', '0000-00-00 00:00:00', NULL),
(18, 1, 'Belmira', 'belmira', '0000-00-00 00:00:00', NULL),
(19, 1, 'Bello', 'bello', '0000-00-00 00:00:00', NULL),
(20, 1, 'Betania', 'betania', '0000-00-00 00:00:00', NULL),
(21, 1, 'Betulia', 'betulia', '0000-00-00 00:00:00', NULL),
(22, 1, 'Bolivar', 'bolivar', '0000-00-00 00:00:00', NULL),
(23, 1, 'Briceño', 'briceno', '0000-00-00 00:00:00', NULL),
(24, 1, 'Buritica', 'buritica', '0000-00-00 00:00:00', NULL),
(25, 1, 'Caceres', 'caceres', '0000-00-00 00:00:00', NULL),
(26, 1, 'Caicedo', 'caicedo', '0000-00-00 00:00:00', NULL),
(27, 1, 'Caldas', 'caldas', '0000-00-00 00:00:00', NULL),
(28, 1, 'Campamento', 'campamento', '0000-00-00 00:00:00', NULL),
(29, 1, 'Cañasgordas', 'canasgordas', '0000-00-00 00:00:00', NULL),
(30, 1, 'Caracoli', 'caracoli', '0000-00-00 00:00:00', NULL),
(31, 1, 'Caramanta', 'caramanta', '0000-00-00 00:00:00', NULL),
(32, 1, 'Carepa', 'carepa', '0000-00-00 00:00:00', NULL),
(33, 1, 'Carmen De Viboral', 'carmen-de-viboral', '0000-00-00 00:00:00', NULL),
(34, 1, 'Carolina', 'carolina', '0000-00-00 00:00:00', NULL),
(35, 1, 'Caucasia', 'caucasia', '0000-00-00 00:00:00', NULL),
(36, 1, 'Chigorodo', 'chigorodo', '0000-00-00 00:00:00', NULL),
(37, 1, 'Cisneros', 'cisneros', '0000-00-00 00:00:00', NULL),
(38, 1, 'Cocorna', 'cocorna', '0000-00-00 00:00:00', NULL),
(39, 1, 'Concepcion', 'concepcion', '0000-00-00 00:00:00', NULL),
(40, 1, 'Concordia', 'concordia', '0000-00-00 00:00:00', NULL),
(41, 1, 'Copacabana', 'copacabana', '0000-00-00 00:00:00', NULL),
(42, 1, 'Dabeiba', 'dabeiba', '0000-00-00 00:00:00', NULL),
(43, 1, 'Don Matias', 'don-matias', '0000-00-00 00:00:00', NULL),
(44, 1, 'Ebejico', 'ebejico', '0000-00-00 00:00:00', NULL),
(45, 1, 'El Bagre', 'el-bagre', '0000-00-00 00:00:00', NULL),
(46, 1, 'Entrerrios', 'entrerrios', '0000-00-00 00:00:00', NULL),
(47, 1, 'Envigado', 'envigado', '0000-00-00 00:00:00', NULL),
(48, 1, 'Fredonia', 'fredonia', '0000-00-00 00:00:00', NULL),
(49, 1, 'Frontino', 'frontino', '0000-00-00 00:00:00', NULL),
(50, 1, 'Giraldo', 'giraldo', '0000-00-00 00:00:00', NULL),
(51, 1, 'Girardota', 'girardota', '0000-00-00 00:00:00', NULL),
(52, 1, 'Gomez Plata', 'gomez-plata', '0000-00-00 00:00:00', NULL),
(53, 1, 'Granada', 'granada', '0000-00-00 00:00:00', NULL),
(54, 1, 'Guadalupe', 'guadalupe', '0000-00-00 00:00:00', NULL),
(55, 1, 'Guarne', 'guarne', '0000-00-00 00:00:00', NULL),
(56, 1, 'Guatape', 'guatape', '0000-00-00 00:00:00', NULL),
(57, 1, 'Heliconia', 'heliconia', '0000-00-00 00:00:00', NULL),
(58, 1, 'Hispania', 'hispania', '0000-00-00 00:00:00', NULL),
(59, 1, 'Itagui', 'itagui', '0000-00-00 00:00:00', NULL),
(60, 1, 'Ituango', 'ituango', '0000-00-00 00:00:00', NULL),
(61, 1, 'Jardin', 'jardin', '0000-00-00 00:00:00', NULL),
(62, 1, 'Jerico', 'jerico', '0000-00-00 00:00:00', NULL),
(63, 1, 'La Ceja', 'la-ceja', '0000-00-00 00:00:00', NULL),
(64, 1, 'La Estrella', 'la-estrella', '0000-00-00 00:00:00', NULL),
(65, 1, 'La Pintada', 'la-pintada', '0000-00-00 00:00:00', NULL),
(66, 1, 'La Union', 'la-union', '0000-00-00 00:00:00', NULL),
(67, 1, 'Liborina', 'liborina', '0000-00-00 00:00:00', NULL),
(68, 1, 'Maceo', 'maceo', '0000-00-00 00:00:00', NULL),
(69, 1, 'Marinilla', 'marinilla', '0000-00-00 00:00:00', NULL),
(70, 1, 'Montebello', 'montebello', '0000-00-00 00:00:00', NULL),
(71, 1, 'Murindo', 'murindo', '0000-00-00 00:00:00', NULL),
(72, 1, 'Mutata', 'mutata', '0000-00-00 00:00:00', NULL),
(73, 1, 'Narino', 'narino', '0000-00-00 00:00:00', NULL),
(74, 1, 'Necocli', 'necocli', '0000-00-00 00:00:00', NULL),
(75, 1, 'Nechi', 'nechi', '0000-00-00 00:00:00', NULL),
(76, 1, 'Olaya', 'olaya', '0000-00-00 00:00:00', NULL),
(77, 1, 'Peñol', 'penol', '0000-00-00 00:00:00', NULL),
(78, 1, 'Peque', 'peque', '0000-00-00 00:00:00', NULL),
(79, 1, 'Pueblorrico', 'pueblorrico', '0000-00-00 00:00:00', NULL),
(80, 1, 'Puerto Berrio', 'puerto-berrio', '0000-00-00 00:00:00', NULL),
(81, 1, 'Puerto Nare (La Magdalena)', 'puerto-nare', '0000-00-00 00:00:00', NULL),
(82, 1, 'Puerto Triunfo', 'puerto-triunfo', '0000-00-00 00:00:00', NULL),
(83, 1, 'Remedios', 'remedios', '0000-00-00 00:00:00', NULL),
(84, 1, 'Retiro', 'retiro', '0000-00-00 00:00:00', NULL),
(85, 1, 'Rionegro', 'rionegro', '0000-00-00 00:00:00', NULL),
(86, 1, 'Sabanalarga', 'sabanalarga', '0000-00-00 00:00:00', NULL),
(87, 1, 'Sabaneta', 'sabaneta', '0000-00-00 00:00:00', NULL),
(88, 1, 'Salgar', 'salgar', '0000-00-00 00:00:00', NULL),
(89, 1, 'San Andres', 'san-andres', '0000-00-00 00:00:00', NULL),
(90, 1, 'San Carlos', 'san-carlos', '0000-00-00 00:00:00', NULL),
(91, 1, 'San Francisco', 'san-francisco', '0000-00-00 00:00:00', NULL),
(92, 1, 'San Jeronimo', 'san-jeronimo', '0000-00-00 00:00:00', NULL),
(93, 1, 'San Jose De La Montana', 'san-jose-de-la-montana', '0000-00-00 00:00:00', NULL),
(94, 1, 'San Juan De Uraba', 'san-juan-de-uraba', '0000-00-00 00:00:00', NULL),
(95, 1, 'San Luis', 'san-luis', '0000-00-00 00:00:00', NULL),
(96, 1, 'San Pedro', 'san-pedro', '0000-00-00 00:00:00', NULL),
(97, 1, 'San Pedro De Uraba', 'san-pedro-de-uraba', '0000-00-00 00:00:00', NULL),
(98, 1, 'San Rafael', 'san-rafael', '0000-00-00 00:00:00', NULL),
(99, 1, 'San Roque', 'san-roque', '0000-00-00 00:00:00', NULL),
(100, 1, 'San Vicente', 'san-vicente', '0000-00-00 00:00:00', NULL),
(101, 1, 'Santa Barbara', 'santa-barbara', '0000-00-00 00:00:00', NULL),
(102, 1, 'Santa Rosa De Osos', 'santa-rosa-de-osos', '0000-00-00 00:00:00', NULL),
(103, 1, 'Santo Domingo', 'santo-domingo', '0000-00-00 00:00:00', NULL),
(104, 1, 'Santuario', 'santuario', '0000-00-00 00:00:00', NULL),
(105, 1, 'Segovia', 'segovia', '0000-00-00 00:00:00', NULL),
(106, 1, 'Sonson', 'sonson', '0000-00-00 00:00:00', NULL),
(107, 1, 'Sopetran', 'sopetran', '0000-00-00 00:00:00', NULL),
(108, 1, 'Tamesis', 'tamesis', '0000-00-00 00:00:00', NULL),
(109, 1, 'Taraza', 'taraza', '0000-00-00 00:00:00', NULL),
(110, 1, 'Tarso', 'tarso', '0000-00-00 00:00:00', NULL),
(111, 1, 'Titiribi', 'titiribi', '0000-00-00 00:00:00', NULL),
(112, 1, 'Toledo', 'toledo', '0000-00-00 00:00:00', NULL),
(113, 1, 'Turbo', 'turbo', '0000-00-00 00:00:00', NULL),
(114, 1, 'Uramita', 'uramita', '0000-00-00 00:00:00', NULL),
(115, 1, 'Urrao', 'urrao', '0000-00-00 00:00:00', NULL),
(116, 1, 'Valdivia', 'valdivia', '0000-00-00 00:00:00', NULL),
(117, 1, 'Valparaiso', 'valparaiso', '0000-00-00 00:00:00', NULL),
(118, 1, 'Vegachi', 'vegachi', '0000-00-00 00:00:00', NULL),
(119, 1, 'Venecia', 'venecia', '0000-00-00 00:00:00', NULL),
(120, 1, 'Vigia Del Fuerte', 'vigia-del-fuerte', '0000-00-00 00:00:00', NULL),
(121, 1, 'Yali', 'yali', '0000-00-00 00:00:00', NULL),
(122, 1, 'Yarumal', 'yarumal', '0000-00-00 00:00:00', NULL),
(123, 1, 'Yolombo', 'yolombo', '0000-00-00 00:00:00', NULL),
(124, 1, 'Yondo', 'yondo', '0000-00-00 00:00:00', NULL),
(125, 1, 'Zaragoza', 'zaragoza', '0000-00-00 00:00:00', NULL),
(126, 2, 'Barranquilla (Distrito Especial Industrial Y Portuario De Barranquilla', 'barranquilla', '0000-00-00 00:00:00', NULL),
(127, 2, 'Baranoa', 'baranoa', '0000-00-00 00:00:00', NULL),
(128, 2, 'Campo De La Cruz', 'campo-de-la-cruz', '0000-00-00 00:00:00', NULL),
(129, 2, 'Candelaria', 'candelaria', '0000-00-00 00:00:00', NULL),
(130, 2, 'Galapa', 'galapa', '0000-00-00 00:00:00', NULL),
(131, 2, 'Juan De Acosta', 'juan-de-acosta', '0000-00-00 00:00:00', NULL),
(132, 2, 'Luruaco', 'luruaco', '0000-00-00 00:00:00', NULL),
(133, 2, 'Malambo', 'malambo', '0000-00-00 00:00:00', NULL),
(134, 2, 'Manati', 'manati', '0000-00-00 00:00:00', NULL),
(135, 2, 'Palmar De Varela', 'palmar-de-varela', '0000-00-00 00:00:00', NULL),
(136, 2, 'Piojo', 'piojo', '0000-00-00 00:00:00', NULL),
(137, 2, 'Polo Nuevo', 'polo-nuevo', '0000-00-00 00:00:00', NULL),
(138, 2, 'Ponedera', 'ponedera', '0000-00-00 00:00:00', NULL),
(139, 2, 'Puerto Colombia', 'puerto-colombia', '0000-00-00 00:00:00', NULL),
(140, 2, 'Repelon', 'repelon', '0000-00-00 00:00:00', NULL),
(141, 2, 'Sabanagrande', 'sabanagrande', '0000-00-00 00:00:00', NULL),
(142, 2, 'Sabanalarga', 'sabanalarga', '0000-00-00 00:00:00', NULL),
(143, 2, 'Santa Lucia', 'santa-lucia', '0000-00-00 00:00:00', NULL),
(144, 2, 'Santo Tomas', 'santo-tomas', '0000-00-00 00:00:00', NULL),
(145, 2, 'Soledad', 'soledad', '0000-00-00 00:00:00', NULL),
(146, 2, 'Suan', 'suan', '0000-00-00 00:00:00', NULL),
(147, 2, 'Tubara', 'tubara', '0000-00-00 00:00:00', NULL),
(148, 2, 'Usiacuri', 'usiacuri', '0000-00-00 00:00:00', NULL),
(149, 3, 'Santa Fe De Bogotá', 'santa-fe-de-bogota', '0000-00-00 00:00:00', NULL),
(150, 3, 'Usaquen', 'usaquen', '0000-00-00 00:00:00', NULL),
(151, 3, 'Chapinero', 'chapinero', '0000-00-00 00:00:00', NULL),
(152, 3, 'Santa Fe', 'santa-fe', '0000-00-00 00:00:00', NULL),
(153, 3, 'San Cristobal', 'san-cristobal', '0000-00-00 00:00:00', NULL),
(154, 3, 'Usme', 'usme', '0000-00-00 00:00:00', NULL),
(155, 3, 'Tunjuelito', 'tunjuelito', '0000-00-00 00:00:00', NULL),
(156, 3, 'Bosa', 'bosa', '0000-00-00 00:00:00', NULL),
(157, 3, 'Kennedy', 'kennedy', '0000-00-00 00:00:00', NULL),
(158, 3, 'Fontibon', 'fontibon', '0000-00-00 00:00:00', NULL),
(159, 3, 'Engativa', 'engativa', '0000-00-00 00:00:00', NULL),
(160, 3, 'Suba', 'suba', '0000-00-00 00:00:00', NULL),
(161, 3, 'Barrios Unidos', 'barrios-unidos', '0000-00-00 00:00:00', NULL),
(162, 3, 'Teusaquillo', 'teusaquillo', '0000-00-00 00:00:00', NULL),
(163, 3, 'Martires', 'martires', '0000-00-00 00:00:00', NULL),
(164, 3, 'Antonio Nariño', 'antonio-narino', '0000-00-00 00:00:00', NULL),
(165, 3, 'Puente Aranda', 'puente-aranda', '0000-00-00 00:00:00', NULL),
(166, 3, 'Candelaria', 'candelaria', '0000-00-00 00:00:00', NULL),
(167, 3, 'Rafael Uribe', 'rafael-uribe', '0000-00-00 00:00:00', NULL),
(168, 3, 'Ciudad Bolivar', 'ciudad-bolivar', '0000-00-00 00:00:00', NULL),
(169, 3, 'Sumapaz', 'sumapaz', '0000-00-00 00:00:00', NULL),
(170, 4, 'Cartagena', 'cartagena', '0000-00-00 00:00:00', NULL),
(171, 4, 'Achi', 'achi', '0000-00-00 00:00:00', NULL),
(172, 4, 'Altos Del Rosario', 'altos-del-rosario', '0000-00-00 00:00:00', NULL),
(173, 4, 'Arenal', 'arenal', '0000-00-00 00:00:00', NULL),
(174, 4, 'Arjona', 'arjona', '0000-00-00 00:00:00', NULL),
(175, 4, 'Arroyohondo', 'arroyohondo', '0000-00-00 00:00:00', NULL),
(176, 4, 'Barranco De Loba', 'barranco-de-loba', '0000-00-00 00:00:00', NULL),
(177, 4, 'Calamar', 'calamar', '0000-00-00 00:00:00', NULL),
(178, 4, 'Cantagallo', 'cantagallo', '0000-00-00 00:00:00', NULL),
(179, 4, 'Cicuco', 'cicuco', '0000-00-00 00:00:00', NULL),
(180, 4, 'Cordoba', 'cordoba', '0000-00-00 00:00:00', NULL),
(181, 4, 'Clemencia', 'clemencia', '0000-00-00 00:00:00', NULL),
(182, 4, 'El Carmen De Bolivar', 'el-carmen-de-bolivar', '0000-00-00 00:00:00', NULL),
(183, 4, 'El Guamo', 'el-guamo', '0000-00-00 00:00:00', NULL),
(184, 4, 'El Penon', 'el-penon', '0000-00-00 00:00:00', NULL),
(185, 4, 'Hatillo De Loba', 'hatillo-de-loba', '0000-00-00 00:00:00', NULL),
(186, 4, 'Magangue', 'magangue', '0000-00-00 00:00:00', NULL),
(187, 4, 'Mahates', 'mahates', '0000-00-00 00:00:00', NULL),
(188, 4, 'Margarita', 'margarita', '0000-00-00 00:00:00', NULL),
(189, 4, 'Maria La Baja', 'maria-la-baja', '0000-00-00 00:00:00', NULL),
(190, 4, 'Montecristo', 'montecristo', '0000-00-00 00:00:00', NULL),
(191, 4, 'Mompos', 'mompos', '0000-00-00 00:00:00', NULL),
(192, 4, 'Morales', 'morales', '0000-00-00 00:00:00', NULL),
(193, 4, 'Pinillos', 'pinillos', '0000-00-00 00:00:00', NULL),
(194, 4, 'Regidor', 'regidor', '0000-00-00 00:00:00', NULL),
(195, 4, 'Rio Viejo', 'rio-viejo', '0000-00-00 00:00:00', NULL),
(196, 4, 'San Cristobal', 'san-cristobal', '0000-00-00 00:00:00', NULL),
(197, 4, 'San Estanislao', 'san-estanislao', '0000-00-00 00:00:00', NULL),
(198, 4, 'San Fernando', 'san-fernando', '0000-00-00 00:00:00', NULL),
(199, 4, 'San Jacinto', 'san-jacinto', '0000-00-00 00:00:00', NULL),
(200, 4, 'San Jacinto Del Cauca', 'san-jacinto-del-cauca', '0000-00-00 00:00:00', NULL),
(201, 4, 'San Juan Nepomuceno', 'san-juan-nepomuceno', '0000-00-00 00:00:00', NULL),
(202, 4, 'San Martin De Loba', 'san-martin-de-loba', '0000-00-00 00:00:00', NULL),
(203, 4, 'San Pablo', 'san-pablo', '0000-00-00 00:00:00', NULL),
(204, 4, 'Santa Catalina', 'santa-catalina', '0000-00-00 00:00:00', NULL),
(205, 4, 'Santa Rosa', 'santa-rosa', '0000-00-00 00:00:00', NULL),
(206, 4, 'Santa Rosa Del Sur', 'santa-rosa-del-sur', '0000-00-00 00:00:00', NULL),
(207, 4, 'Simiti', 'simiti', '0000-00-00 00:00:00', NULL),
(208, 4, 'Soplaviento', 'soplaviento', '0000-00-00 00:00:00', NULL),
(209, 4, 'Talaigua Nuevo', 'talaigua-nuevo', '0000-00-00 00:00:00', NULL),
(210, 4, 'Tiquisio (Puerto Rico)', 'tiquisio-(puerto-rico)', '0000-00-00 00:00:00', NULL),
(211, 4, 'Turbaco', 'turbaco', '0000-00-00 00:00:00', NULL),
(212, 4, 'Turbana', 'turbana', '0000-00-00 00:00:00', NULL),
(213, 4, 'Villanueva', 'villanueva', '0000-00-00 00:00:00', NULL),
(214, 4, 'Zambrano', 'zambrano', '0000-00-00 00:00:00', NULL),
(215, 5, 'Tunja', 'tunja', '0000-00-00 00:00:00', NULL),
(216, 5, 'Almeida', 'almeida', '0000-00-00 00:00:00', NULL),
(217, 5, 'Aquitania', 'aquitania', '0000-00-00 00:00:00', NULL),
(218, 5, 'Arcabuco', 'arcabuco', '0000-00-00 00:00:00', NULL),
(219, 5, 'Belen', 'belen', '0000-00-00 00:00:00', NULL),
(220, 5, 'Berbeo', 'berbeo', '0000-00-00 00:00:00', NULL),
(221, 5, 'Beteitiva', 'beteitiva', '0000-00-00 00:00:00', NULL),
(222, 5, 'Boavita', 'boavita', '0000-00-00 00:00:00', NULL),
(223, 5, 'Boyaca', 'boyaca', '0000-00-00 00:00:00', NULL),
(224, 5, 'Briceño', 'briceno', '0000-00-00 00:00:00', NULL),
(225, 5, 'Buenavista', 'buenavista', '0000-00-00 00:00:00', NULL),
(226, 5, 'Busbanza', 'busbanza', '0000-00-00 00:00:00', NULL),
(227, 5, 'Caldas', 'caldas', '0000-00-00 00:00:00', NULL),
(228, 5, 'Campohermoso', 'campohermoso', '0000-00-00 00:00:00', NULL),
(229, 5, 'Cerinza', 'cerinza', '0000-00-00 00:00:00', NULL),
(230, 5, 'Chinavita', 'chinavita', '0000-00-00 00:00:00', NULL),
(231, 5, 'Chiquinquira', 'chiquinquira', '0000-00-00 00:00:00', NULL),
(232, 5, 'Chiscas', 'chiscas', '0000-00-00 00:00:00', NULL),
(233, 5, 'Chita', 'chita', '0000-00-00 00:00:00', NULL),
(234, 5, 'Chitaraque', 'chitaraque', '0000-00-00 00:00:00', NULL),
(235, 5, 'Chivata', 'chivata', '0000-00-00 00:00:00', NULL),
(236, 5, 'Cienega', 'cienega', '0000-00-00 00:00:00', NULL),
(237, 5, 'Combita', 'combita', '0000-00-00 00:00:00', NULL),
(238, 5, 'Coper', 'coper', '0000-00-00 00:00:00', NULL),
(239, 5, 'Corrales', 'corrales', '0000-00-00 00:00:00', NULL),
(240, 5, 'Covarachia', 'covarachia', '0000-00-00 00:00:00', NULL),
(241, 5, 'Cubara', 'cubara', '0000-00-00 00:00:00', NULL),
(242, 5, 'Cucaita', 'cucaita', '0000-00-00 00:00:00', NULL),
(243, 5, 'Cuitiva', 'cuitiva', '0000-00-00 00:00:00', NULL),
(244, 5, 'Chiquiza', 'chiquiza', '0000-00-00 00:00:00', NULL),
(245, 5, 'Chivor', 'chivor', '0000-00-00 00:00:00', NULL),
(246, 5, 'Duitama', 'duitama', '0000-00-00 00:00:00', NULL),
(247, 5, 'El Cocuy', 'el-cocuy', '0000-00-00 00:00:00', NULL),
(248, 5, 'El Espino', 'el-espino', '0000-00-00 00:00:00', NULL),
(249, 5, 'Firavitoba', 'firavitoba', '0000-00-00 00:00:00', NULL),
(250, 5, 'Floresta', 'floresta', '0000-00-00 00:00:00', NULL),
(251, 5, 'Gachantiva', 'gachantiva', '0000-00-00 00:00:00', NULL),
(252, 5, 'Gameza', 'gameza', '0000-00-00 00:00:00', NULL),
(253, 5, 'Garagoa', 'garagoa', '0000-00-00 00:00:00', NULL),
(254, 5, 'Guacamayas', 'guacamayas', '0000-00-00 00:00:00', NULL),
(255, 5, 'Guateque', 'guateque', '0000-00-00 00:00:00', NULL),
(256, 5, 'Guayata', 'guayata', '0000-00-00 00:00:00', NULL),
(257, 5, 'Guican', 'guican', '0000-00-00 00:00:00', NULL),
(258, 5, 'Iza', 'iza', '0000-00-00 00:00:00', NULL),
(259, 5, 'Jenesano', 'jenesano', '0000-00-00 00:00:00', NULL),
(260, 5, 'Jerico', 'jerico', '0000-00-00 00:00:00', NULL),
(261, 5, 'Labranzagrande', 'labranzagrande', '0000-00-00 00:00:00', NULL),
(262, 5, 'La Capilla', 'la-capilla', '0000-00-00 00:00:00', NULL),
(263, 5, 'La Victoria', 'la-victoria', '0000-00-00 00:00:00', NULL),
(264, 5, 'La Uvita', 'la-uvita', '0000-00-00 00:00:00', NULL),
(265, 5, 'Villa De Leiva', 'villa-de-leiva', '0000-00-00 00:00:00', NULL),
(266, 5, 'Macanal', 'macanal', '0000-00-00 00:00:00', NULL),
(267, 5, 'Maripi', 'maripi', '0000-00-00 00:00:00', NULL),
(268, 5, 'Miraflores', 'miraflores', '0000-00-00 00:00:00', NULL),
(269, 5, 'Mongua', 'mongua', '0000-00-00 00:00:00', NULL),
(270, 5, 'Mongui', 'mongui', '0000-00-00 00:00:00', NULL),
(271, 5, 'Moniquira', 'moniquira', '0000-00-00 00:00:00', NULL),
(272, 5, 'Motavita', 'motavita', '0000-00-00 00:00:00', NULL),
(273, 5, 'Muzo', 'muzo', '0000-00-00 00:00:00', NULL),
(274, 5, 'Nobsa', 'nobsa', '0000-00-00 00:00:00', NULL),
(275, 5, 'Nuevo Colon', 'nuevo-colon', '0000-00-00 00:00:00', NULL),
(276, 5, 'Oicata', 'oicata', '0000-00-00 00:00:00', NULL),
(277, 5, 'Otanche', 'otanche', '0000-00-00 00:00:00', NULL),
(278, 5, 'Pachavita', 'pachavita', '0000-00-00 00:00:00', NULL),
(279, 5, 'Paez', 'paez', '0000-00-00 00:00:00', NULL),
(280, 5, 'Paipa', 'paipa', '0000-00-00 00:00:00', NULL),
(281, 5, 'Pajarito', 'pajarito', '0000-00-00 00:00:00', NULL),
(282, 5, 'Panqueba', 'panqueba', '0000-00-00 00:00:00', NULL),
(283, 5, 'Pauna', 'pauna', '0000-00-00 00:00:00', NULL),
(284, 5, 'Paya', 'paya', '0000-00-00 00:00:00', NULL),
(285, 5, 'Paz Del Rio', 'paz-del-rio', '0000-00-00 00:00:00', NULL),
(286, 5, 'Pesca', 'pesca', '0000-00-00 00:00:00', NULL),
(287, 5, 'Pisba', 'pisba', '0000-00-00 00:00:00', NULL),
(288, 5, 'Puerto Boyaca', 'puerto-boyaca', '0000-00-00 00:00:00', NULL),
(289, 5, 'Quipama', 'quipama', '0000-00-00 00:00:00', NULL),
(290, 5, 'Ramiriqui', 'ramiriqui', '0000-00-00 00:00:00', NULL),
(291, 5, 'Raquira', 'raquira', '0000-00-00 00:00:00', NULL),
(292, 5, 'Rondon', 'rondon', '0000-00-00 00:00:00', NULL),
(293, 5, 'Saboya', 'saboya', '0000-00-00 00:00:00', NULL),
(294, 5, 'Sachica', 'sachica', '0000-00-00 00:00:00', NULL),
(295, 5, 'Samaca', 'samaca', '0000-00-00 00:00:00', NULL),
(296, 5, 'San Eduardo', 'san-eduardo', '0000-00-00 00:00:00', NULL),
(297, 5, 'San Jose De Pare', 'san-jose-de-pare', '0000-00-00 00:00:00', NULL),
(298, 5, 'San Luis De Gaceno', 'san-luis-de-gaceno', '0000-00-00 00:00:00', NULL),
(299, 5, 'San Mateo', 'san-mateo', '0000-00-00 00:00:00', NULL),
(300, 5, 'San Miguel De Sema', 'san-miguel-de-sema', '0000-00-00 00:00:00', NULL),
(301, 5, 'San Pablo De Borbur', 'san-pablo-de-borbur', '0000-00-00 00:00:00', NULL),
(302, 5, 'Santana', 'santana', '0000-00-00 00:00:00', NULL),
(303, 5, 'Santa Maria', 'santa-maria', '0000-00-00 00:00:00', NULL),
(304, 5, 'Santa Rosa De Viterbo', 'santa-rosa-de-viterbo', '0000-00-00 00:00:00', NULL),
(305, 5, 'Santa Sofia', 'santa-sofia', '0000-00-00 00:00:00', NULL),
(306, 5, 'Sativanorte', 'sativanorte', '0000-00-00 00:00:00', NULL),
(307, 5, 'Sativasur', 'sativasur', '0000-00-00 00:00:00', NULL),
(308, 5, 'Siachoque', 'siachoque', '0000-00-00 00:00:00', NULL),
(309, 5, 'Soata', 'soata', '0000-00-00 00:00:00', NULL),
(310, 5, 'Socota', 'socota', '0000-00-00 00:00:00', NULL),
(311, 5, 'Socha', 'socha', '0000-00-00 00:00:00', NULL),
(312, 5, 'Sogamoso', 'sogamoso', '0000-00-00 00:00:00', NULL),
(313, 5, 'Somondoco', 'somondoco', '0000-00-00 00:00:00', NULL),
(314, 5, 'Sora', 'sora', '0000-00-00 00:00:00', NULL),
(315, 5, 'Sotaquira', 'sotaquira', '0000-00-00 00:00:00', NULL),
(316, 5, 'Soraca', 'soraca', '0000-00-00 00:00:00', NULL),
(317, 5, 'Susacon', 'susacon', '0000-00-00 00:00:00', NULL),
(318, 5, 'Sutamarchan', 'sutamarchan', '0000-00-00 00:00:00', NULL),
(319, 5, 'Sutatenza', 'sutatenza', '0000-00-00 00:00:00', NULL),
(320, 5, 'Tasco', 'tasco', '0000-00-00 00:00:00', NULL),
(321, 5, 'Tenza', 'tenza', '0000-00-00 00:00:00', NULL),
(322, 5, 'Tibana', 'tibana', '0000-00-00 00:00:00', NULL),
(323, 5, 'Tibasosa', 'tibasosa', '0000-00-00 00:00:00', NULL),
(324, 5, 'Tinjaca', 'tinjaca', '0000-00-00 00:00:00', NULL),
(325, 5, 'Tipacoque', 'tipacoque', '0000-00-00 00:00:00', NULL),
(326, 5, 'Toca', 'toca', '0000-00-00 00:00:00', NULL),
(327, 5, 'Togui', 'togui', '0000-00-00 00:00:00', NULL),
(328, 5, 'Topaga', 'topaga', '0000-00-00 00:00:00', NULL),
(329, 5, 'Tota', 'tota', '0000-00-00 00:00:00', NULL),
(330, 5, 'Tunungua', 'tunungua', '0000-00-00 00:00:00', NULL),
(331, 5, 'Turmeque', 'turmeque', '0000-00-00 00:00:00', NULL),
(332, 5, 'Tuta', 'tuta', '0000-00-00 00:00:00', NULL),
(333, 5, 'Tutasa', 'tutasa', '0000-00-00 00:00:00', NULL),
(334, 5, 'Umbita', 'umbita', '0000-00-00 00:00:00', NULL),
(335, 5, 'Ventaquemada', 'ventaquemada', '0000-00-00 00:00:00', NULL),
(336, 5, 'Viracacha', 'viracacha', '0000-00-00 00:00:00', NULL),
(337, 5, 'Zetaquira', 'zetaquira', '0000-00-00 00:00:00', NULL),
(338, 6, 'Manizales', 'manizales', '0000-00-00 00:00:00', NULL),
(339, 6, 'Aguadas', 'aguadas', '0000-00-00 00:00:00', NULL),
(340, 6, 'Anserma', 'anserma', '0000-00-00 00:00:00', NULL),
(341, 6, 'Aranzazu', 'aranzazu', '0000-00-00 00:00:00', NULL),
(342, 6, 'Belalcazar', 'belalcazar', '0000-00-00 00:00:00', NULL),
(343, 6, 'Chinchina', 'chinchina', '0000-00-00 00:00:00', NULL),
(344, 6, 'Filadelfia', 'filadelfia', '0000-00-00 00:00:00', NULL),
(345, 6, 'La Dorada', 'la-dorada', '0000-00-00 00:00:00', NULL),
(346, 6, 'La Merced', 'la-merced', '0000-00-00 00:00:00', NULL),
(347, 6, 'Manzanares', 'manzanares', '0000-00-00 00:00:00', NULL),
(348, 6, 'Marmato', 'marmato', '0000-00-00 00:00:00', NULL),
(349, 6, 'Marquetalia', 'marquetalia', '0000-00-00 00:00:00', NULL),
(350, 6, 'Marulanda', 'marulanda', '0000-00-00 00:00:00', NULL),
(351, 6, 'Neira', 'neira', '0000-00-00 00:00:00', NULL),
(352, 6, 'Norcasia', 'norcasia', '0000-00-00 00:00:00', NULL),
(353, 6, 'Pacora', 'pacora', '0000-00-00 00:00:00', NULL),
(354, 6, 'Palestina', 'palestina', '0000-00-00 00:00:00', NULL),
(355, 6, 'Pensilvania', 'pensilvania', '0000-00-00 00:00:00', NULL),
(356, 6, 'Riosucio', 'riosucio', '0000-00-00 00:00:00', NULL),
(357, 6, 'Risaralda', 'risaralda', '0000-00-00 00:00:00', NULL),
(358, 6, 'Salamina', 'salamina', '0000-00-00 00:00:00', NULL),
(359, 6, 'Samana', 'samana', '0000-00-00 00:00:00', NULL),
(360, 6, 'San Jose', 'san-jose', '0000-00-00 00:00:00', NULL),
(361, 6, 'Supia', 'supia', '0000-00-00 00:00:00', NULL),
(362, 6, 'Victoria', 'victoria', '0000-00-00 00:00:00', NULL),
(363, 6, 'Villamaria', 'villamaria', '0000-00-00 00:00:00', NULL),
(364, 6, 'Viterbo', 'viterbo', '0000-00-00 00:00:00', NULL),
(365, 7, 'Florencia', 'florencia', '0000-00-00 00:00:00', NULL),
(366, 7, 'Albania', 'albania', '0000-00-00 00:00:00', NULL),
(367, 7, 'Belen De Los Andaquies', 'belen-de-los-andaquies', '0000-00-00 00:00:00', NULL),
(368, 7, 'Cartagena Del Chaira', 'cartagena-del-chaira', '0000-00-00 00:00:00', NULL),
(369, 7, 'Curillo', 'curillo', '0000-00-00 00:00:00', NULL),
(370, 7, 'El Doncello', 'el-doncello', '0000-00-00 00:00:00', NULL),
(371, 7, 'El Paujil', 'el-paujil', '0000-00-00 00:00:00', NULL),
(372, 7, 'La Montañita', 'la-montanita', '0000-00-00 00:00:00', NULL),
(373, 7, 'Milan', 'milan', '0000-00-00 00:00:00', NULL),
(374, 7, 'Morelia', 'morelia', '0000-00-00 00:00:00', NULL),
(375, 7, 'Puerto Rico', 'puerto-rico', '0000-00-00 00:00:00', NULL),
(376, 7, 'San Jose De Fragua', 'san-jose-de-fragua', '0000-00-00 00:00:00', NULL),
(377, 7, 'San Vicente Del Caguan', 'san-vicente-del-caguan', '0000-00-00 00:00:00', NULL),
(378, 7, 'Solano', 'solano', '0000-00-00 00:00:00', NULL),
(379, 7, 'Solita', 'solita', '0000-00-00 00:00:00', NULL),
(380, 7, 'Valparaiso', 'valparaiso', '0000-00-00 00:00:00', NULL),
(381, 8, 'Popayan', 'popayan', '0000-00-00 00:00:00', NULL),
(382, 8, 'Almaguer', 'almaguer', '0000-00-00 00:00:00', NULL),
(383, 8, 'Argelia', 'argelia', '0000-00-00 00:00:00', NULL),
(384, 8, 'Balboa', 'balboa', '0000-00-00 00:00:00', NULL),
(385, 8, 'Bolivar', 'bolivar', '0000-00-00 00:00:00', NULL),
(386, 8, 'Buenos Aires', 'buenos-aires', '0000-00-00 00:00:00', NULL),
(387, 8, 'Cajibio', 'cajibio', '0000-00-00 00:00:00', NULL),
(388, 8, 'Caldono', 'caldono', '0000-00-00 00:00:00', NULL),
(389, 8, 'Caloto', 'caloto', '0000-00-00 00:00:00', NULL),
(390, 8, 'Corinto', 'corinto', '0000-00-00 00:00:00', NULL),
(391, 8, 'El Tambo', 'el-tambo', '0000-00-00 00:00:00', NULL),
(392, 8, 'Florencia', 'florencia', '0000-00-00 00:00:00', NULL),
(393, 8, 'Guapi', 'guapi', '0000-00-00 00:00:00', NULL),
(394, 8, 'Inza', 'inza', '0000-00-00 00:00:00', NULL),
(395, 8, 'Jambalo', 'jambalo', '0000-00-00 00:00:00', NULL),
(396, 8, 'La Sierra', 'la-sierra', '0000-00-00 00:00:00', NULL),
(397, 8, 'La Vega', 'la-vega', '0000-00-00 00:00:00', NULL),
(398, 8, 'Lopez (Micay)', 'lopez-(micay)', '0000-00-00 00:00:00', NULL),
(399, 8, 'Mercaderes', 'mercaderes', '0000-00-00 00:00:00', NULL),
(400, 8, 'Miranda', 'miranda', '0000-00-00 00:00:00', NULL),
(401, 8, 'Morales', 'morales', '0000-00-00 00:00:00', NULL),
(402, 8, 'Padilla', 'padilla', '0000-00-00 00:00:00', NULL),
(403, 8, 'Paez (Belalcazar)', 'paez-(belalcazar)', '0000-00-00 00:00:00', NULL),
(404, 8, 'Patia (El Bordo)', 'patia-(el bordo)', '0000-00-00 00:00:00', NULL),
(405, 8, 'Piamonte', 'piamonte', '0000-00-00 00:00:00', NULL),
(406, 8, 'Piendamo', 'piendamo', '0000-00-00 00:00:00', NULL),
(407, 8, 'Puerto Tejada', 'puerto-tejada', '0000-00-00 00:00:00', NULL),
(408, 8, 'Purace (Coconuco)', 'purace-(coconuco)', '0000-00-00 00:00:00', NULL),
(409, 8, 'Rosas', 'rosas', '0000-00-00 00:00:00', NULL),
(410, 8, 'San Sebastian', 'san-sebastian', '0000-00-00 00:00:00', NULL),
(411, 8, 'Santander De Quilichao', 'santander-de-quilichao', '0000-00-00 00:00:00', NULL),
(412, 8, 'Santa Rosa', 'santa-rosa', '0000-00-00 00:00:00', NULL),
(413, 8, 'Silvia', 'silvia', '0000-00-00 00:00:00', NULL),
(414, 8, 'Sotara (Paispamba)', 'sotara-(paispamba)', '0000-00-00 00:00:00', NULL),
(415, 8, 'Suarez', 'suarez', '0000-00-00 00:00:00', NULL),
(416, 8, 'Timbio', 'timbio', '0000-00-00 00:00:00', NULL),
(417, 8, 'Timbiqui', 'timbiqui', '0000-00-00 00:00:00', NULL),
(418, 8, 'Toribio', 'toribio', '0000-00-00 00:00:00', NULL),
(419, 8, 'Totoro', 'totoro', '0000-00-00 00:00:00', NULL),
(420, 8, 'Villarica', 'villarica', '0000-00-00 00:00:00', NULL),
(421, 9, 'Valledupar', 'valledupar', '0000-00-00 00:00:00', NULL),
(422, 9, 'Aguachica', 'aguachica', '0000-00-00 00:00:00', NULL),
(423, 9, 'Agustin Codazzi', 'agustin-codazzi', '0000-00-00 00:00:00', NULL),
(424, 9, 'Astrea', 'astrea', '0000-00-00 00:00:00', NULL),
(425, 9, 'Becerril', 'becerril', '0000-00-00 00:00:00', NULL),
(426, 9, 'Bosconia', 'bosconia', '0000-00-00 00:00:00', NULL),
(427, 9, 'Chimichagua', 'chimichagua', '0000-00-00 00:00:00', NULL),
(428, 9, 'Chiriguana', 'chiriguana', '0000-00-00 00:00:00', NULL),
(429, 9, 'Curumani', 'curumani', '0000-00-00 00:00:00', NULL),
(430, 9, 'El Copey', 'el-copey', '0000-00-00 00:00:00', NULL),
(431, 9, 'El Paso', 'el-paso', '0000-00-00 00:00:00', NULL),
(432, 9, 'Gamarra', 'gamarra', '0000-00-00 00:00:00', NULL),
(433, 9, 'Gonzalez', 'gonzalez', '0000-00-00 00:00:00', NULL),
(434, 9, 'La Gloria', 'la-gloria', '0000-00-00 00:00:00', NULL),
(435, 9, 'La Jagua Ibirico', 'la-jagua-ibirico', '0000-00-00 00:00:00', NULL),
(436, 9, 'Manaure (Balcon Del Cesar)', 'manaure-(balcon del cesar)', '0000-00-00 00:00:00', NULL),
(437, 9, 'Pailitas', 'pailitas', '0000-00-00 00:00:00', NULL),
(438, 9, 'Pelaya', 'pelaya', '0000-00-00 00:00:00', NULL),
(439, 9, 'Pueblo Bello', 'pueblo-bello', '0000-00-00 00:00:00', NULL),
(440, 9, 'Rio De Oro', 'rio-de-oro', '0000-00-00 00:00:00', NULL),
(441, 9, 'La Paz (Robles)', 'la-paz-(robles)', '0000-00-00 00:00:00', NULL),
(442, 9, 'San Alberto', 'san-alberto', '0000-00-00 00:00:00', NULL),
(443, 9, 'San Diego', 'san-diego', '0000-00-00 00:00:00', NULL),
(444, 9, 'San Martin', 'san-martin', '0000-00-00 00:00:00', NULL),
(445, 9, 'Tamalameque', 'tamalameque', '0000-00-00 00:00:00', NULL),
(446, 10, 'Monteria', 'monteria', '0000-00-00 00:00:00', NULL),
(447, 10, 'Ayapel', 'ayapel', '0000-00-00 00:00:00', NULL),
(448, 10, 'Buenavista', 'buenavista', '0000-00-00 00:00:00', NULL),
(449, 10, 'Canalete', 'canalete', '0000-00-00 00:00:00', NULL),
(450, 10, 'Cerete', 'cerete', '0000-00-00 00:00:00', NULL),
(451, 10, 'Chima', 'chima', '0000-00-00 00:00:00', NULL),
(452, 10, 'Chinu', 'chinu', '0000-00-00 00:00:00', NULL),
(453, 10, 'Cienaga De Oro', 'cienaga-de-oro', '0000-00-00 00:00:00', NULL),
(454, 10, 'Cotorra', 'cotorra', '0000-00-00 00:00:00', NULL),
(455, 10, 'La Apartada', 'la-apartada', '0000-00-00 00:00:00', NULL),
(456, 10, 'Lorica', 'lorica', '0000-00-00 00:00:00', NULL),
(457, 10, 'Los Cordobas', 'los-cordobas', '0000-00-00 00:00:00', NULL),
(458, 10, 'Momil', 'momil', '0000-00-00 00:00:00', NULL),
(459, 10, 'Montelibano', 'montelibano', '0000-00-00 00:00:00', NULL),
(460, 10, 'Moñitos', 'monitos', '0000-00-00 00:00:00', NULL),
(461, 10, 'Planeta Rica', 'planeta-rica', '0000-00-00 00:00:00', NULL),
(462, 10, 'Pueblo Nuevo', 'pueblo-nuevo', '0000-00-00 00:00:00', NULL),
(463, 10, 'Puerto Escondido', 'puerto-escondido', '0000-00-00 00:00:00', NULL),
(464, 10, 'Puerto Libertador', 'puerto-libertador', '0000-00-00 00:00:00', NULL),
(465, 10, 'Purisima', 'purisima', '0000-00-00 00:00:00', NULL),
(466, 10, 'Sahagun', 'sahagun', '0000-00-00 00:00:00', NULL),
(467, 10, 'San Andres Sotavento', 'san-andres-sotavento', '0000-00-00 00:00:00', NULL),
(468, 10, 'San Antero', 'san-antero', '0000-00-00 00:00:00', NULL),
(469, 10, 'San Bernardo Del Viento', 'san-bernardo-del-viento', '0000-00-00 00:00:00', NULL),
(470, 10, 'San Carlos', 'san-carlos', '0000-00-00 00:00:00', NULL),
(471, 10, 'San Pelayo', 'san-pelayo', '0000-00-00 00:00:00', NULL),
(472, 10, 'Tierralta', 'tierralta', '0000-00-00 00:00:00', NULL),
(473, 10, 'Valencia', 'valencia', '0000-00-00 00:00:00', NULL),
(474, 11, 'Agua De Dios', 'agua-de-dios', '0000-00-00 00:00:00', NULL),
(475, 11, 'Alban', 'alban', '0000-00-00 00:00:00', NULL),
(476, 11, 'Anapoima', 'anapoima', '0000-00-00 00:00:00', NULL),
(477, 11, 'Anolaima', 'anolaima', '0000-00-00 00:00:00', NULL),
(478, 11, 'Arbelaez', 'arbelaez', '0000-00-00 00:00:00', NULL),
(479, 11, 'Beltran', 'beltran', '0000-00-00 00:00:00', NULL),
(480, 11, 'Bituima', 'bituima', '0000-00-00 00:00:00', NULL),
(481, 11, 'Bojaca', 'bojaca', '0000-00-00 00:00:00', NULL),
(482, 11, 'Cabrera', 'cabrera', '0000-00-00 00:00:00', NULL),
(483, 11, 'Cachipay', 'cachipay', '0000-00-00 00:00:00', NULL),
(484, 11, 'Cajica', 'cajica', '0000-00-00 00:00:00', NULL),
(485, 11, 'Caparrapi', 'caparrapi', '0000-00-00 00:00:00', NULL),
(486, 11, 'Caqueza', 'caqueza', '0000-00-00 00:00:00', NULL),
(487, 11, 'Carmen De Carupa', 'carmen-de-carupa', '0000-00-00 00:00:00', NULL),
(488, 11, 'Chaguani', 'chaguani', '0000-00-00 00:00:00', NULL),
(489, 11, 'Chia', 'chia', '0000-00-00 00:00:00', NULL),
(490, 11, 'Chipaque', 'chipaque', '0000-00-00 00:00:00', NULL),
(491, 11, 'Choachi', 'choachi', '0000-00-00 00:00:00', NULL),
(492, 11, 'Choconta', 'choconta', '0000-00-00 00:00:00', NULL),
(493, 11, 'Cogua', 'cogua', '0000-00-00 00:00:00', NULL),
(494, 11, 'Cota', 'cota', '0000-00-00 00:00:00', NULL),
(495, 11, 'Cucunuba', 'cucunuba', '0000-00-00 00:00:00', NULL),
(496, 11, 'El Colegio', 'el-colegio', '0000-00-00 00:00:00', NULL),
(497, 11, 'El Peñon', 'el-penon', '0000-00-00 00:00:00', NULL),
(498, 11, 'El Rosal', 'el-rosal', '0000-00-00 00:00:00', NULL),
(499, 11, 'Facatativa', 'facatativa', '0000-00-00 00:00:00', NULL),
(500, 11, 'Fomeque', 'fomeque', '0000-00-00 00:00:00', NULL),
(501, 11, 'Fosca', 'fosca', '0000-00-00 00:00:00', NULL),
(502, 11, 'Funza', 'funza', '0000-00-00 00:00:00', NULL),
(503, 11, 'Fuquene', 'fuquene', '0000-00-00 00:00:00', NULL),
(504, 11, 'Fusagasuga', 'fusagasuga', '0000-00-00 00:00:00', NULL),
(505, 11, 'Gachala', 'gachala', '0000-00-00 00:00:00', NULL),
(506, 11, 'Gachancipa', 'gachancipa', '0000-00-00 00:00:00', NULL),
(507, 11, 'Gacheta', 'gacheta', '0000-00-00 00:00:00', NULL),
(508, 11, 'Gama', 'gama', '0000-00-00 00:00:00', NULL),
(509, 11, 'Girardot', 'girardot', '0000-00-00 00:00:00', NULL),
(510, 11, 'Granada', 'granada', '0000-00-00 00:00:00', NULL),
(511, 11, 'Guacheta', 'guacheta', '0000-00-00 00:00:00', NULL),
(512, 11, 'Guaduas', 'guaduas', '0000-00-00 00:00:00', NULL),
(513, 11, 'Guasca', 'guasca', '0000-00-00 00:00:00', NULL),
(514, 11, 'Guataqui', 'guataqui', '0000-00-00 00:00:00', NULL),
(515, 11, 'Guatavita', 'guatavita', '0000-00-00 00:00:00', NULL),
(516, 11, 'Guayabal De Siquima', 'guayabal de siquima', '0000-00-00 00:00:00', NULL),
(517, 11, 'Guayabetal', 'guayabetal', '0000-00-00 00:00:00', NULL),
(518, 11, 'Gutierrez', 'gutierrez', '0000-00-00 00:00:00', NULL),
(519, 11, 'Jerusalen', 'jerusalen', '0000-00-00 00:00:00', NULL),
(520, 11, 'Junin', 'junin', '0000-00-00 00:00:00', NULL),
(521, 11, 'La Calera', 'la-calera', '0000-00-00 00:00:00', NULL),
(522, 11, 'La Mesa', 'la-mesa', '0000-00-00 00:00:00', NULL),
(523, 11, 'La Palma', 'la-palma', '0000-00-00 00:00:00', NULL),
(524, 11, 'La Peña', 'la-pena', '0000-00-00 00:00:00', NULL),
(525, 11, 'La Vega', 'la-vega', '0000-00-00 00:00:00', NULL),
(526, 11, 'Lenguazaque', 'lenguazaque', '0000-00-00 00:00:00', NULL),
(527, 11, 'Macheta', 'macheta', '0000-00-00 00:00:00', NULL),
(528, 11, 'Madrid', 'madrid', '0000-00-00 00:00:00', NULL),
(529, 11, 'Manta', 'manta', '0000-00-00 00:00:00', NULL),
(530, 11, 'Medina', 'medina', '0000-00-00 00:00:00', NULL),
(531, 11, 'Mosquera', 'mosquera', '0000-00-00 00:00:00', NULL),
(532, 11, 'Nariño', 'narino', '0000-00-00 00:00:00', NULL),
(533, 11, 'Nemocon', 'nemocon', '0000-00-00 00:00:00', NULL),
(534, 11, 'Nilo', 'nilo', '0000-00-00 00:00:00', NULL),
(535, 11, 'Nimaima', 'nimaima', '0000-00-00 00:00:00', NULL),
(536, 11, 'Nocaima', 'nocaima', '0000-00-00 00:00:00', NULL),
(537, 11, 'Venecia (Ospina Perez)', 'venecia-(ospina-perez)', '0000-00-00 00:00:00', NULL),
(538, 11, 'Pacho', 'pacho', '0000-00-00 00:00:00', NULL),
(539, 11, 'Paime', 'paime', '0000-00-00 00:00:00', NULL),
(540, 11, 'Pandi', 'pandi', '0000-00-00 00:00:00', NULL),
(541, 11, 'Paratebueno', 'paratebueno', '0000-00-00 00:00:00', NULL),
(542, 11, 'Pasca', 'pasca', '0000-00-00 00:00:00', NULL),
(543, 11, 'Puerto Salgar', 'puerto-salgar', '0000-00-00 00:00:00', NULL),
(544, 11, 'Puli', 'puli', '0000-00-00 00:00:00', NULL),
(545, 11, 'Quebradanegra', 'quebradanegra', '0000-00-00 00:00:00', NULL),
(546, 11, 'Quetame', 'quetame', '0000-00-00 00:00:00', NULL),
(547, 11, 'Quipile', 'quipile', '0000-00-00 00:00:00', NULL),
(548, 11, 'Apulo (Rafael Reyes)', 'apulo-(rafael reyes)', '0000-00-00 00:00:00', NULL),
(549, 11, 'Ricaurte', 'ricaurte', '0000-00-00 00:00:00', NULL),
(550, 11, 'San Antonio Del Tequendama', 'san-antonio-del-tequendama', '0000-00-00 00:00:00', NULL),
(551, 11, 'San Bernardo', 'san-bernardo', '0000-00-00 00:00:00', NULL),
(552, 11, 'San Cayetano', 'san-cayetano', '0000-00-00 00:00:00', NULL),
(553, 11, 'San Francisco', 'san-francisco', '0000-00-00 00:00:00', NULL),
(554, 11, 'San Juan De Rioseco', 'san-juan-de-rioseco', '0000-00-00 00:00:00', NULL),
(555, 11, 'Sasaima', 'sasaima', '0000-00-00 00:00:00', NULL),
(556, 11, 'Sesquile', 'sesquile', '0000-00-00 00:00:00', NULL),
(557, 11, 'Sibate', 'sibate', '0000-00-00 00:00:00', NULL),
(558, 11, 'Silvania', 'silvania', '0000-00-00 00:00:00', NULL),
(559, 11, 'Simijaca', 'simijaca', '0000-00-00 00:00:00', NULL),
(560, 11, 'Soacha', 'soacha', '0000-00-00 00:00:00', NULL),
(561, 11, 'Sopo', 'sopo', '0000-00-00 00:00:00', NULL),
(562, 11, 'Subachoque', 'subachoque', '0000-00-00 00:00:00', NULL),
(563, 11, 'Suesca', 'suesca', '0000-00-00 00:00:00', NULL),
(564, 11, 'Supata', 'supata', '0000-00-00 00:00:00', NULL),
(565, 11, 'Susa', 'susa', '0000-00-00 00:00:00', NULL),
(566, 11, 'Sutatausa', 'sutatausa', '0000-00-00 00:00:00', NULL),
(567, 11, 'Tabio', 'tabio', '0000-00-00 00:00:00', NULL),
(568, 11, 'Tausa', 'tausa', '0000-00-00 00:00:00', NULL),
(569, 11, 'Tena', 'tena', '0000-00-00 00:00:00', NULL),
(570, 11, 'Tenjo', 'tenjo', '0000-00-00 00:00:00', NULL),
(571, 11, 'Tibacuy', 'tibacuy', '0000-00-00 00:00:00', NULL),
(572, 11, 'Tibirita', 'tibirita', '0000-00-00 00:00:00', NULL),
(573, 11, 'Tocaima', 'tocaima', '0000-00-00 00:00:00', NULL),
(574, 11, 'Tocancipa', 'tocancipa', '0000-00-00 00:00:00', NULL),
(575, 11, 'Topaipi', 'topaipi', '0000-00-00 00:00:00', NULL),
(576, 11, 'Ubala', 'ubala', '0000-00-00 00:00:00', NULL),
(577, 11, 'Ubaque', 'ubaque', '0000-00-00 00:00:00', NULL),
(578, 11, 'Ubate', 'ubate', '0000-00-00 00:00:00', NULL),
(579, 11, 'Une', 'une', '0000-00-00 00:00:00', NULL),
(580, 11, 'Utica', 'utica', '0000-00-00 00:00:00', NULL),
(581, 11, 'Vergara', 'vergara', '0000-00-00 00:00:00', NULL),
(582, 11, 'Viani', 'viani', '0000-00-00 00:00:00', NULL),
(583, 11, 'Villagomez', 'villagomez', '0000-00-00 00:00:00', NULL),
(584, 11, 'Villapinzon', 'villapinzon', '0000-00-00 00:00:00', NULL),
(585, 11, 'Villeta', 'villeta', '0000-00-00 00:00:00', NULL),
(586, 11, 'Viota', 'viota', '0000-00-00 00:00:00', NULL),
(587, 11, 'Yacopi', 'yacopi', '0000-00-00 00:00:00', NULL),
(588, 11, 'Zipacon', 'zipacon', '0000-00-00 00:00:00', NULL),
(589, 11, 'Zipaquira', 'zipaquira', '0000-00-00 00:00:00', NULL),
(590, 12, 'Quibdo (San Francisco De Quibdo)', 'quibdo-(san-francisco-de-quibdo)', '0000-00-00 00:00:00', NULL),
(591, 12, 'Acandi', 'acandi', '0000-00-00 00:00:00', NULL),
(592, 12, 'Alto Baudo (Pie De Pato)', 'alto-baudo-(pie-de-pato)', '0000-00-00 00:00:00', NULL),
(593, 12, 'Atrato', 'atrato', '0000-00-00 00:00:00', NULL),
(594, 12, 'Bagado', 'bagado', '0000-00-00 00:00:00', NULL),
(595, 12, 'Bahia Solano (Mutis)', 'bahia-solano-(mutis)', '0000-00-00 00:00:00', NULL),
(596, 12, 'Bajo Baudo (Pizarro)', 'bajo-baudo-(pizarro)', '0000-00-00 00:00:00', NULL),
(597, 12, 'Bojaya (Bellavista)', 'bojaya-(bellavista)', '0000-00-00 00:00:00', NULL),
(598, 12, 'Canton De San Pablo (Managru)', 'canton-de-san-pablo-(managru)', '0000-00-00 00:00:00', NULL),
(599, 12, 'Condoto', 'condoto', '0000-00-00 00:00:00', NULL),
(600, 12, 'El Carmen De Atrato', 'el-carmen-de-atrato', '0000-00-00 00:00:00', NULL),
(601, 12, 'Litoral Del Bajo San Juan (Santa Genoveva De Docordo)', 'litoral-del-bajo-san-juan-(santa-genoveva-de-docordo)', '0000-00-00 00:00:00', NULL),
(602, 12, 'Istmina', 'istmina', '0000-00-00 00:00:00', NULL),
(603, 12, 'Jurado', 'jurado', '0000-00-00 00:00:00', NULL),
(604, 12, 'Lloro', 'lloro', '0000-00-00 00:00:00', NULL),
(605, 12, 'Medio Atrato', 'medio-atrato', '0000-00-00 00:00:00', NULL),
(606, 12, 'Medio Baudo', 'medio-baudo', '0000-00-00 00:00:00', NULL),
(607, 12, 'Novita', 'novita', '0000-00-00 00:00:00', NULL),
(608, 12, 'Nuqui', 'nuqui', '0000-00-00 00:00:00', NULL),
(609, 12, 'Rioquito', 'rioquito', '0000-00-00 00:00:00', NULL),
(610, 12, 'Riosucio', 'riosucio', '0000-00-00 00:00:00', NULL),
(611, 12, 'San Jose Del Palmar', 'san-jose-del-palmar', '0000-00-00 00:00:00', NULL),
(612, 12, 'Sipi', 'sipi', '0000-00-00 00:00:00', NULL),
(613, 12, 'Tado', 'tado', '0000-00-00 00:00:00', NULL),
(614, 12, 'Unguia', 'unguia', '0000-00-00 00:00:00', NULL),
(615, 12, 'Union Panamericana', 'union-panamericana', '0000-00-00 00:00:00', NULL),
(616, 13, 'Neiva', 'neiva', '0000-00-00 00:00:00', NULL),
(617, 13, 'Acevedo', 'acevedo', '0000-00-00 00:00:00', NULL),
(618, 13, 'Agrado', 'agrado', '0000-00-00 00:00:00', NULL),
(619, 13, 'Aipe', 'aipe', '0000-00-00 00:00:00', NULL),
(620, 13, 'Algeciras', 'algeciras', '0000-00-00 00:00:00', NULL),
(621, 13, 'Altamira', 'altamira', '0000-00-00 00:00:00', NULL),
(622, 13, 'Baraya', 'baraya', '0000-00-00 00:00:00', NULL),
(623, 13, 'Campoalegre', 'campoalegre', '0000-00-00 00:00:00', NULL),
(624, 13, 'Colombia', 'colombia', '0000-00-00 00:00:00', NULL),
(625, 13, 'Elias', 'elias', '0000-00-00 00:00:00', NULL),
(626, 13, 'Garzon', 'garzon', '0000-00-00 00:00:00', NULL),
(627, 13, 'Gigante', 'gigante', '0000-00-00 00:00:00', NULL),
(628, 13, 'Guadalupe', 'guadalupe', '0000-00-00 00:00:00', NULL),
(629, 13, 'Hobo', 'hobo', '0000-00-00 00:00:00', NULL),
(630, 13, 'Iquira', 'iquira', '0000-00-00 00:00:00', NULL),
(631, 13, 'Isnos (San Jose De Isnos)', 'isnos-(san-jose-de-isnos)', '0000-00-00 00:00:00', NULL),
(632, 13, 'La Argentina', 'la-argentina', '0000-00-00 00:00:00', NULL),
(633, 13, 'La Plata', 'la-plata', '0000-00-00 00:00:00', NULL),
(634, 13, 'Nataga', 'nataga', '0000-00-00 00:00:00', NULL),
(635, 13, 'Oporapa', 'oporapa', '0000-00-00 00:00:00', NULL),
(636, 13, 'Paicol', 'paicol', '0000-00-00 00:00:00', NULL),
(637, 13, 'Palermo', 'palermo', '0000-00-00 00:00:00', NULL),
(638, 13, 'Palestina', 'palestina', '0000-00-00 00:00:00', NULL),
(639, 13, 'Pital', 'pital', '0000-00-00 00:00:00', NULL),
(640, 13, 'Pitalito', 'pitalito', '0000-00-00 00:00:00', NULL),
(641, 13, 'Rivera', 'rivera', '0000-00-00 00:00:00', NULL),
(642, 13, 'Saladoblanco', 'saladoblanco', '0000-00-00 00:00:00', NULL),
(643, 13, 'San Agustin', 'san-agustin', '0000-00-00 00:00:00', NULL),
(644, 13, 'Santa Maria', 'santa-maria', '0000-00-00 00:00:00', NULL),
(645, 13, 'Suaza', 'suaza', '0000-00-00 00:00:00', NULL),
(646, 13, 'Tarqui', 'tarqui', '0000-00-00 00:00:00', NULL),
(647, 13, 'Tesalia', 'tesalia', '0000-00-00 00:00:00', NULL),
(648, 13, 'Tello', 'tello', '0000-00-00 00:00:00', NULL),
(649, 13, 'Teruel', 'teruel', '0000-00-00 00:00:00', NULL),
(650, 13, 'Timana', 'timana', '0000-00-00 00:00:00', NULL),
(651, 13, 'Villavieja', 'villavieja', '0000-00-00 00:00:00', NULL),
(652, 13, 'Yaguara', 'yaguara', '0000-00-00 00:00:00', NULL),
(653, 14, 'Riohacha', 'riohacha', '0000-00-00 00:00:00', NULL),
(654, 14, 'Barrancas', 'barrancas', '0000-00-00 00:00:00', NULL),
(655, 14, 'Dibulla', 'dibulla', '0000-00-00 00:00:00', NULL),
(656, 14, 'Distraccion', 'distraccion', '0000-00-00 00:00:00', NULL),
(657, 14, 'El Molino', 'el-molino', '0000-00-00 00:00:00', NULL),
(658, 14, 'Fonseca', 'fonseca', '0000-00-00 00:00:00', NULL),
(659, 14, 'Hatonuevo', 'hatonuevo', '0000-00-00 00:00:00', NULL),
(660, 14, 'La Jagua Del Pilar', 'la-jagua-del-pilar', '0000-00-00 00:00:00', NULL),
(661, 14, 'Maicao', 'maicao', '0000-00-00 00:00:00', NULL),
(662, 14, 'Manaure', 'manaure', '0000-00-00 00:00:00', NULL),
(663, 14, 'San Juan Del Cesar', 'san-juan-del-cesar', '0000-00-00 00:00:00', NULL),
(664, 14, 'Uribia', 'uribia', '0000-00-00 00:00:00', NULL),
(665, 14, 'Urumita', 'urumita', '0000-00-00 00:00:00', NULL),
(666, 14, 'Villanueva', 'villanueva', '0000-00-00 00:00:00', NULL),
(667, 15, 'Santa Marta', 'santa-marta', '0000-00-00 00:00:00', NULL),
(668, 15, 'Algarrobo', 'algarrobo', '0000-00-00 00:00:00', NULL),
(669, 15, 'Aracataca', 'aracataca', '0000-00-00 00:00:00', NULL),
(670, 15, 'Ariguani (El Dificil)', 'ariguani-(el-dificil)', '0000-00-00 00:00:00', NULL),
(671, 15, 'Cerro San Antonio', 'cerro-san-antonio', '0000-00-00 00:00:00', NULL),
(672, 15, 'Chivolo', 'chivolo', '0000-00-00 00:00:00', NULL),
(673, 15, 'Cienaga', 'cienaga', '0000-00-00 00:00:00', NULL),
(674, 15, 'Concordia', 'concordia', '0000-00-00 00:00:00', NULL),
(675, 15, 'El Banco', 'el-banco', '0000-00-00 00:00:00', NULL),
(676, 15, 'El Piñon', 'el-pinon', '0000-00-00 00:00:00', NULL),
(677, 15, 'El Reten', 'el-reten', '0000-00-00 00:00:00', NULL),
(678, 15, 'Fundacion', 'fundacion', '0000-00-00 00:00:00', NULL),
(679, 15, 'Guamal', 'guamal', '0000-00-00 00:00:00', NULL),
(680, 15, 'Pedraza', 'pedraza', '0000-00-00 00:00:00', NULL),
(681, 15, 'Pijiño Del Carmen (Pijiño)', 'pijiño-del-carmen-(pijiño)', '0000-00-00 00:00:00', NULL),
(682, 15, 'Pivijay', 'pivijay', '0000-00-00 00:00:00', NULL),
(683, 15, 'Plato', 'plato', '0000-00-00 00:00:00', NULL),
(684, 15, 'Puebloviejo', 'puebloviejo', '0000-00-00 00:00:00', NULL),
(685, 15, 'Remolino', 'remolino', '0000-00-00 00:00:00', NULL),
(686, 15, 'Sabanas De San Angel', 'sabanas-de-san-angel', '0000-00-00 00:00:00', NULL),
(687, 15, 'Salamina', 'salamina', '0000-00-00 00:00:00', NULL),
(688, 15, 'San Sebastian De Buenavista', 'san-sebastian-de-buenavista', '0000-00-00 00:00:00', NULL),
(689, 15, 'San Zenon', 'san-zenon', '0000-00-00 00:00:00', NULL),
(690, 15, 'Santa Ana', 'santa-ana', '0000-00-00 00:00:00', NULL),
(691, 15, 'Sitionuevo', 'sitionuevo', '0000-00-00 00:00:00', NULL),
(692, 15, 'Tenerife', 'tenerife', '0000-00-00 00:00:00', NULL),
(693, 16, 'Villavicencio', 'villavicencio', '0000-00-00 00:00:00', NULL),
(694, 16, 'Acacias', 'acacias', '0000-00-00 00:00:00', NULL),
(695, 16, 'Barranca De Upia', 'barranca-de-upia', '0000-00-00 00:00:00', NULL),
(696, 16, 'Cabuyaro', 'cabuyaro', '0000-00-00 00:00:00', NULL),
(697, 16, 'Castilla La Nueva', 'castilla-la-nueva', '0000-00-00 00:00:00', NULL),
(698, 16, 'San Luis De Cubarral', 'san-luis-de-cubarral', '0000-00-00 00:00:00', NULL),
(699, 16, 'Cumaral', 'cumaral', '0000-00-00 00:00:00', NULL),
(700, 16, 'El Calvario', 'el-calvario', '0000-00-00 00:00:00', NULL),
(701, 16, 'El Castillo', 'el-castillo', '0000-00-00 00:00:00', NULL),
(702, 16, 'El Dorado', 'el-dorado', '0000-00-00 00:00:00', NULL),
(703, 16, 'Fuente De Oro', 'fuente-de-oro', '0000-00-00 00:00:00', NULL),
(704, 16, 'Granada', 'granada', '0000-00-00 00:00:00', NULL),
(705, 16, 'Guamal', 'guamal', '0000-00-00 00:00:00', NULL),
(706, 16, 'Mapiripan', 'mapiripan', '0000-00-00 00:00:00', NULL),
(707, 16, 'Mesetas', 'mesetas', '0000-00-00 00:00:00', NULL),
(708, 16, 'La Macarena', 'la-macarena', '0000-00-00 00:00:00', NULL),
(709, 16, 'La Uribe', 'la-uribe', '0000-00-00 00:00:00', NULL),
(710, 16, 'Lejanias', 'lejanias', '0000-00-00 00:00:00', NULL),
(711, 16, 'Puerto Concordia', 'puerto-concordia', '0000-00-00 00:00:00', NULL),
(712, 16, 'Puerto Gaitan', 'puerto-gaitan', '0000-00-00 00:00:00', NULL),
(713, 16, 'Puerto Lopez', 'puerto-lopez', '0000-00-00 00:00:00', NULL),
(714, 16, 'Puerto Lleras', 'puerto-lleras', '0000-00-00 00:00:00', NULL),
(715, 16, 'Puerto Rico', 'puerto-rico', '0000-00-00 00:00:00', NULL),
(716, 16, 'Restrepo', 'restrepo', '0000-00-00 00:00:00', NULL),
(717, 16, 'San Carlos De Guaroa', 'san-carlos-de-guaroa', '0000-00-00 00:00:00', NULL),
(718, 16, 'San Juan De Arama', 'san-juan-de-arama', '0000-00-00 00:00:00', NULL),
(719, 16, 'San Juanito', 'san-juanito', '0000-00-00 00:00:00', NULL),
(720, 16, 'San Martin', 'san-martin', '0000-00-00 00:00:00', NULL),
(721, 16, 'Vistahermosa', 'vistahermosa', '0000-00-00 00:00:00', NULL),
(722, 17, 'Pasto (San Juan De Pasto)', 'pasto-(san-juan-de-pasto)', '0000-00-00 00:00:00', NULL),
(723, 17, 'Alban (San Jose)', 'alban-(san-jose)', '0000-00-00 00:00:00', NULL),
(724, 17, 'Aldana', 'aldana', '0000-00-00 00:00:00', NULL),
(725, 17, 'Ancuya', 'ancuya', '0000-00-00 00:00:00', NULL),
(726, 17, 'Arboleda (Berruecos)', 'arboleda-(berruecos)', '0000-00-00 00:00:00', NULL),
(727, 17, 'Barbacoas', 'barbacoas', '0000-00-00 00:00:00', NULL),
(728, 17, 'Belen', 'belen', '0000-00-00 00:00:00', NULL),
(729, 17, 'Buesaco', 'buesaco', '0000-00-00 00:00:00', NULL),
(730, 17, 'Colon (Genova)', 'colon-(genova)', '0000-00-00 00:00:00', NULL),
(731, 17, 'Consaca', 'consaca', '0000-00-00 00:00:00', NULL),
(732, 17, 'Contadero', 'contadero', '0000-00-00 00:00:00', NULL),
(733, 17, 'Cordoba', 'cordoba', '0000-00-00 00:00:00', NULL),
(734, 17, 'Cuaspud (Carlosama)', 'cuaspud-(carlosama)', '0000-00-00 00:00:00', NULL),
(735, 17, 'Cumbal', 'cumbal', '0000-00-00 00:00:00', NULL),
(736, 17, 'Cumbitara', 'cumbitara', '0000-00-00 00:00:00', NULL),
(737, 17, 'Chachagui', 'chachagui', '0000-00-00 00:00:00', NULL),
(738, 17, 'El Charco', 'el-charco', '0000-00-00 00:00:00', NULL),
(739, 17, 'El Peñol', 'el-penol', '0000-00-00 00:00:00', NULL),
(740, 17, 'El Rosario', 'el-rosario', '0000-00-00 00:00:00', NULL),
(741, 17, 'El Tablon', 'el-tablon', '0000-00-00 00:00:00', NULL),
(742, 17, 'El Tambo', 'el-tambo', '0000-00-00 00:00:00', NULL),
(743, 17, 'Funes', 'funes', '0000-00-00 00:00:00', NULL),
(744, 17, 'Guachucal', 'guachucal', '0000-00-00 00:00:00', NULL),
(745, 17, 'Guaitarilla', 'guaitarilla', '0000-00-00 00:00:00', NULL),
(746, 17, 'Gualmatan', 'gualmatan', '0000-00-00 00:00:00', NULL),
(747, 17, 'Iles', 'iles', '0000-00-00 00:00:00', NULL),
(748, 17, 'Imues', 'imues', '0000-00-00 00:00:00', NULL),
(749, 17, 'Ipiales', 'ipiales', '0000-00-00 00:00:00', NULL),
(750, 17, 'La Cruz', 'la-cruz', '0000-00-00 00:00:00', NULL),
(751, 17, 'La Florida', 'la-florida', '0000-00-00 00:00:00', NULL),
(752, 17, 'La Llanada', 'la-llanada', '0000-00-00 00:00:00', NULL),
(753, 17, 'La Tola', 'la-tola', '0000-00-00 00:00:00', NULL),
(754, 17, 'La Union', 'la-union', '0000-00-00 00:00:00', NULL),
(755, 17, 'Leiva', 'leiva', '0000-00-00 00:00:00', NULL),
(756, 17, 'Linares', 'linares', '0000-00-00 00:00:00', NULL),
(757, 17, 'Los Andes (Sotomayor)', 'los-andes-(sotomayor)', '0000-00-00 00:00:00', NULL),
(758, 17, 'Magui (Payan)', 'magui-(payan)', '0000-00-00 00:00:00', NULL),
(759, 17, 'Mallama (Piedrancha)', 'mallama-(piedrancha)', '0000-00-00 00:00:00', NULL),
(760, 17, 'Mosquera', 'mosquera', '0000-00-00 00:00:00', NULL),
(761, 17, 'Olaya Herrera (Bocas De Satinga)', 'olaya-herrera-(bocas-de-satinga)', '0000-00-00 00:00:00', NULL),
(762, 17, 'Ospina', 'ospina', '0000-00-00 00:00:00', NULL),
(763, 17, 'Francisco Pizarro (Salahonda)', 'francisco-pizarro-(salahonda)', '0000-00-00 00:00:00', NULL),
(764, 17, 'Policarpa', 'policarpa', '0000-00-00 00:00:00', NULL),
(765, 17, 'Potosi', 'potosi', '0000-00-00 00:00:00', NULL),
(766, 17, 'Providencia', 'providencia', '0000-00-00 00:00:00', NULL),
(767, 17, 'Puerres', 'puerres', '0000-00-00 00:00:00', NULL),
(768, 17, 'Pupiales', 'pupiales', '0000-00-00 00:00:00', NULL),
(769, 17, 'Ricaurte', 'ricaurte', '0000-00-00 00:00:00', NULL),
(770, 17, 'Roberto Payan (San Jose)', 'roberto-payan-(san-jose)', '0000-00-00 00:00:00', NULL),
(771, 17, 'Samaniego', 'samaniego', '0000-00-00 00:00:00', NULL),
(772, 17, 'Sandona', 'sandona', '0000-00-00 00:00:00', NULL),
(773, 17, 'San Bernardo', 'san-bernardo', '0000-00-00 00:00:00', NULL),
(774, 17, 'San Lorenzo', 'san-lorenzo', '0000-00-00 00:00:00', NULL),
(775, 17, 'San Pablo', 'san-pablo', '0000-00-00 00:00:00', NULL),
(776, 17, 'San Pedro De Cartago', 'san-pedro-de-cartago', '0000-00-00 00:00:00', NULL),
(777, 17, 'Santa Barbara (Iscuande)', 'santa-barbara-(iscuande)', '0000-00-00 00:00:00', NULL),
(778, 17, 'Santa Cruz (Guachaves)', 'santa-cruz-(guachaves)', '0000-00-00 00:00:00', NULL),
(779, 17, 'Sapuyes', 'sapuyes', '0000-00-00 00:00:00', NULL),
(780, 17, 'Taminango', 'taminango', '0000-00-00 00:00:00', NULL),
(781, 17, 'Tangua', 'tangua', '0000-00-00 00:00:00', NULL);
INSERT INTO `cities` (`id`, `stateId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(782, 17, 'Tumaco', 'tumaco', '0000-00-00 00:00:00', NULL),
(783, 17, 'Tuquerres', 'tuquerres', '0000-00-00 00:00:00', NULL),
(784, 17, 'Yacuanquer', 'yacuanquer', '0000-00-00 00:00:00', NULL),
(785, 18, 'Cucuta', 'cucuta', '0000-00-00 00:00:00', NULL),
(786, 18, 'Abrego', 'abrego', '0000-00-00 00:00:00', NULL),
(787, 18, 'Arboledas', 'arboledas', '0000-00-00 00:00:00', NULL),
(788, 18, 'Bochalema', 'bochalema', '0000-00-00 00:00:00', NULL),
(789, 18, 'Bucarasica', 'bucarasica', '0000-00-00 00:00:00', NULL),
(790, 18, 'Cacota', 'cacota', '0000-00-00 00:00:00', NULL),
(791, 18, 'Cachira', 'cachira', '0000-00-00 00:00:00', NULL),
(792, 18, 'Chinacota', 'chinacota', '0000-00-00 00:00:00', NULL),
(793, 18, 'Chitaga', 'chitaga', '0000-00-00 00:00:00', NULL),
(794, 18, 'Convencion', 'convencion', '0000-00-00 00:00:00', NULL),
(795, 18, 'Cucutilla', 'cucutilla', '0000-00-00 00:00:00', NULL),
(796, 18, 'Durania', 'durania', '0000-00-00 00:00:00', NULL),
(797, 18, 'El Carmen', 'el-carmen', '0000-00-00 00:00:00', NULL),
(798, 18, 'El Tarra', 'el-tarra', '0000-00-00 00:00:00', NULL),
(799, 18, 'El Zulia', 'el-zulia', '0000-00-00 00:00:00', NULL),
(800, 18, 'Gramalote', 'gramalote', '0000-00-00 00:00:00', NULL),
(801, 18, 'Hacari', 'hacari', '0000-00-00 00:00:00', NULL),
(802, 18, 'Herran', 'herran', '0000-00-00 00:00:00', NULL),
(803, 18, 'Labateca', 'labateca', '0000-00-00 00:00:00', NULL),
(804, 18, 'La Esperanza', 'la-esperanza', '0000-00-00 00:00:00', NULL),
(805, 18, 'La Playa', 'la-playa', '0000-00-00 00:00:00', NULL),
(806, 18, 'Los Patios', 'los-patios', '0000-00-00 00:00:00', NULL),
(807, 18, 'Lourdes', 'lourdes', '0000-00-00 00:00:00', NULL),
(808, 18, 'Mutiscua', 'mutiscua', '0000-00-00 00:00:00', NULL),
(809, 18, 'Ocaña', 'ocaña', '0000-00-00 00:00:00', NULL),
(810, 18, 'Pamplona', 'pamplona', '0000-00-00 00:00:00', NULL),
(811, 18, 'Pamplonita', 'pamplonita', '0000-00-00 00:00:00', NULL),
(812, 18, 'Puerto Santander', 'puerto-santander', '0000-00-00 00:00:00', NULL),
(813, 18, 'Ragonvalia', 'ragonvalia', '0000-00-00 00:00:00', NULL),
(814, 18, 'Salazar', 'salazar', '0000-00-00 00:00:00', NULL),
(815, 18, 'San Calixto', 'san-calixto', '0000-00-00 00:00:00', NULL),
(816, 18, 'San Cayetano', 'san-cayetano', '0000-00-00 00:00:00', NULL),
(817, 18, 'Santiago', 'santiago', '0000-00-00 00:00:00', NULL),
(818, 18, 'Sardinata', 'sardinata', '0000-00-00 00:00:00', NULL),
(819, 18, 'Silos', 'silos', '0000-00-00 00:00:00', NULL),
(820, 18, 'Teorama', 'teorama', '0000-00-00 00:00:00', NULL),
(821, 18, 'Tibu', 'tibu', '0000-00-00 00:00:00', NULL),
(822, 18, 'Toledo', 'toledo', '0000-00-00 00:00:00', NULL),
(823, 18, 'Villacaro', 'villacaro', '0000-00-00 00:00:00', NULL),
(824, 18, 'Villa Del Rosario', 'villa-del-rosario', '0000-00-00 00:00:00', NULL),
(825, 19, 'Armenia', 'armenia', '0000-00-00 00:00:00', NULL),
(826, 19, 'Buenavista', 'buenavista', '0000-00-00 00:00:00', NULL),
(827, 19, 'Calarca', 'calarca', '0000-00-00 00:00:00', NULL),
(828, 19, 'Circasia', 'circasia', '0000-00-00 00:00:00', NULL),
(829, 19, 'Cordoba', 'cordoba', '0000-00-00 00:00:00', NULL),
(830, 19, 'Filandia', 'filandia', '0000-00-00 00:00:00', NULL),
(831, 19, 'Genova', 'genova', '0000-00-00 00:00:00', NULL),
(832, 19, 'La Tebaida', 'la-tebaida', '0000-00-00 00:00:00', NULL),
(833, 19, 'Montenegro', 'montenegro', '0000-00-00 00:00:00', NULL),
(834, 19, 'Pijao', 'pijao', '0000-00-00 00:00:00', NULL),
(835, 19, 'Quimbaya', 'quimbaya', '0000-00-00 00:00:00', NULL),
(836, 19, 'Salento', 'salento', '0000-00-00 00:00:00', NULL),
(837, 20, 'Pereira', 'pereira', '0000-00-00 00:00:00', NULL),
(838, 20, 'Apia', 'apia', '0000-00-00 00:00:00', NULL),
(839, 20, 'Balboa', 'balboa', '0000-00-00 00:00:00', NULL),
(840, 20, 'Belen De Umbria', 'belen-de-umbria', '0000-00-00 00:00:00', NULL),
(841, 20, 'Dos Quebradas', 'dos-quebradas', '0000-00-00 00:00:00', NULL),
(842, 20, 'Guatica', 'guatica', '0000-00-00 00:00:00', NULL),
(843, 20, 'La Celia', 'la-celia', '0000-00-00 00:00:00', NULL),
(844, 20, 'La Virginia', 'la-virginia', '0000-00-00 00:00:00', NULL),
(845, 20, 'Marsella', 'marsella', '0000-00-00 00:00:00', NULL),
(846, 20, 'Mistrato', 'mistrato', '0000-00-00 00:00:00', NULL),
(847, 20, 'Pueblo Rico', 'pueblo-rico', '0000-00-00 00:00:00', NULL),
(848, 20, 'Quinchia', 'quinchia', '0000-00-00 00:00:00', NULL),
(849, 20, 'Santa Rosa De Cabal', 'santa-rosa-de-cabal', '0000-00-00 00:00:00', NULL),
(850, 20, 'Santuario', 'santuario', '0000-00-00 00:00:00', NULL),
(851, 21, 'Bucaramanga', 'bucaramanga', '0000-00-00 00:00:00', NULL),
(852, 21, 'Aguada', 'aguada', '0000-00-00 00:00:00', NULL),
(853, 21, 'Albania', 'albania', '0000-00-00 00:00:00', NULL),
(854, 21, 'Aratoca', 'aratoca', '0000-00-00 00:00:00', NULL),
(855, 21, 'Barbosa', 'barbosa', '0000-00-00 00:00:00', NULL),
(856, 21, 'Barichara', 'barichara', '0000-00-00 00:00:00', NULL),
(857, 21, 'Barrancabermeja', 'barrancabermeja', '0000-00-00 00:00:00', NULL),
(858, 21, 'Betulia', 'betulia', '0000-00-00 00:00:00', NULL),
(859, 21, 'Bolivar', 'bolivar', '0000-00-00 00:00:00', NULL),
(860, 21, 'Cabrera', 'cabrera', '0000-00-00 00:00:00', NULL),
(861, 21, 'California', 'california', '0000-00-00 00:00:00', NULL),
(862, 21, 'Capitanejo', 'capitanejo', '0000-00-00 00:00:00', NULL),
(863, 21, 'Carcasi', 'carcasi', '0000-00-00 00:00:00', NULL),
(864, 21, 'Cepita', 'cepita', '0000-00-00 00:00:00', NULL),
(865, 21, 'Cerrito', 'cerrito', '0000-00-00 00:00:00', NULL),
(866, 21, 'Charala', 'charala', '0000-00-00 00:00:00', NULL),
(867, 21, 'Charta', 'charta', '0000-00-00 00:00:00', NULL),
(868, 21, 'Chima', 'chima', '0000-00-00 00:00:00', NULL),
(869, 21, 'Chipata', 'chipata', '0000-00-00 00:00:00', NULL),
(870, 21, 'Cimitarra', 'cimitarra', '0000-00-00 00:00:00', NULL),
(871, 21, 'Concepcion', 'concepcion', '0000-00-00 00:00:00', NULL),
(872, 21, 'Confines', 'confines', '0000-00-00 00:00:00', NULL),
(873, 21, 'Contratacion', 'contratacion', '0000-00-00 00:00:00', NULL),
(874, 21, 'Coromoro', 'coromoro', '0000-00-00 00:00:00', NULL),
(875, 21, 'Curiti', 'curiti', '0000-00-00 00:00:00', NULL),
(876, 21, 'El Carmen De Chucury', 'el-carmen-de-chucury', '0000-00-00 00:00:00', NULL),
(877, 21, 'El Guacamayo', 'el-guacamayo', '0000-00-00 00:00:00', NULL),
(878, 21, 'El Peñon', 'el-penon', '0000-00-00 00:00:00', NULL),
(879, 21, 'El Playon', 'el-playon', '0000-00-00 00:00:00', NULL),
(880, 21, 'Encino', 'encino', '0000-00-00 00:00:00', NULL),
(881, 21, 'Enciso', 'enciso', '0000-00-00 00:00:00', NULL),
(882, 21, 'Florian', 'florian', '0000-00-00 00:00:00', NULL),
(883, 21, 'Floridablanca', 'floridablanca', '0000-00-00 00:00:00', NULL),
(884, 21, 'Galan', 'galan', '0000-00-00 00:00:00', NULL),
(885, 21, 'Gambita', 'gambita', '0000-00-00 00:00:00', NULL),
(886, 21, 'Giron', 'giron', '0000-00-00 00:00:00', NULL),
(887, 21, 'Guaca', 'guaca', '0000-00-00 00:00:00', NULL),
(888, 21, 'Guadalupe', 'guadalupe', '0000-00-00 00:00:00', NULL),
(889, 21, 'Guapota', 'guapota', '0000-00-00 00:00:00', NULL),
(890, 21, 'Guavata', 'guavata', '0000-00-00 00:00:00', NULL),
(891, 21, 'Guepsa', 'guepsa', '0000-00-00 00:00:00', NULL),
(892, 21, 'Hato', 'hato', '0000-00-00 00:00:00', NULL),
(893, 21, 'Jesus Maria', 'jesus-maria', '0000-00-00 00:00:00', NULL),
(894, 21, 'Jordan', 'jordan', '0000-00-00 00:00:00', NULL),
(895, 21, 'La Belleza', 'la-belleza', '0000-00-00 00:00:00', NULL),
(896, 21, 'Landazuri', 'landazuri', '0000-00-00 00:00:00', NULL),
(897, 21, 'La Paz', 'la-paz', '0000-00-00 00:00:00', NULL),
(898, 21, 'Lebrija', 'lebrija', '0000-00-00 00:00:00', NULL),
(899, 21, 'Los Santos', 'los-santos', '0000-00-00 00:00:00', NULL),
(900, 21, 'Macaravita', 'macaravita', '0000-00-00 00:00:00', NULL),
(901, 21, 'Malaga', 'malaga', '0000-00-00 00:00:00', NULL),
(902, 21, 'Matanza', 'matanza', '0000-00-00 00:00:00', NULL),
(903, 21, 'Mogotes', 'mogotes', '0000-00-00 00:00:00', NULL),
(904, 21, 'Molagavita', 'molagavita', '0000-00-00 00:00:00', NULL),
(905, 21, 'Ocamonte', 'ocamonte', '0000-00-00 00:00:00', NULL),
(906, 21, 'Oiba', 'oiba', '0000-00-00 00:00:00', NULL),
(907, 21, 'Onzaga', 'onzaga', '0000-00-00 00:00:00', NULL),
(908, 21, 'Palmar', 'palmar', '0000-00-00 00:00:00', NULL),
(909, 21, 'Palmas Del Socorro', 'palmas-del-socorro', '0000-00-00 00:00:00', NULL),
(910, 21, 'Paramo', 'paramo', '0000-00-00 00:00:00', NULL),
(911, 21, 'Piedecuesta', 'piedecuesta', '0000-00-00 00:00:00', NULL),
(912, 21, 'Pinchote', 'pinchote', '0000-00-00 00:00:00', NULL),
(913, 21, 'Puente Nacional', 'puente-nacional', '0000-00-00 00:00:00', NULL),
(914, 21, 'Puerto Parra', 'puerto-parra', '0000-00-00 00:00:00', NULL),
(915, 21, 'Puerto Wilches', 'puerto-wilches', '0000-00-00 00:00:00', NULL),
(916, 21, 'Rionegro', 'rionegro', '0000-00-00 00:00:00', NULL),
(917, 21, 'Sabana De Torres', 'sabana-de-torres', '0000-00-00 00:00:00', NULL),
(918, 21, 'San Andres', 'san-andres', '0000-00-00 00:00:00', NULL),
(919, 21, 'San Benito', 'san-benito', '0000-00-00 00:00:00', NULL),
(920, 21, 'San Gil', 'san-gil', '0000-00-00 00:00:00', NULL),
(921, 21, 'San Joaquin', 'san-joaquin', '0000-00-00 00:00:00', NULL),
(922, 21, 'San Jose De Miranda', 'san-jose-de-miranda', '0000-00-00 00:00:00', NULL),
(923, 21, 'San Miguel', 'san-miguel', '0000-00-00 00:00:00', NULL),
(924, 21, 'San Vicente De Chucuri', 'san-vicente-de-chucuri', '0000-00-00 00:00:00', NULL),
(925, 21, 'Santa Barbara', 'santa-barbara', '0000-00-00 00:00:00', NULL),
(926, 21, 'Santa Helena Del Opon', 'santa-helena-del-opon', '0000-00-00 00:00:00', NULL),
(927, 21, 'Simacota', 'simacota', '0000-00-00 00:00:00', NULL),
(928, 21, 'Socorro', 'socorro', '0000-00-00 00:00:00', NULL),
(929, 21, 'Suaita', 'suaita', '0000-00-00 00:00:00', NULL),
(930, 21, 'Sucre', 'sucre', '0000-00-00 00:00:00', NULL),
(931, 21, 'Surata', 'surata', '0000-00-00 00:00:00', NULL),
(932, 21, 'Tona', 'tona', '0000-00-00 00:00:00', NULL),
(933, 21, 'Valle San Jose', 'valle-san-jose', '0000-00-00 00:00:00', NULL),
(934, 21, 'Velez', 'velez', '0000-00-00 00:00:00', NULL),
(935, 21, 'Vetas', 'vetas', '0000-00-00 00:00:00', NULL),
(936, 21, 'Villanueva', 'villanueva', '0000-00-00 00:00:00', NULL),
(937, 21, 'Zapatoca', 'zapatoca', '0000-00-00 00:00:00', NULL),
(938, 22, 'Sincelejo', 'sincelejo', '0000-00-00 00:00:00', NULL),
(939, 22, 'Buenavista', 'buenavista', '0000-00-00 00:00:00', NULL),
(940, 22, 'Caimito', 'caimito', '0000-00-00 00:00:00', NULL),
(941, 22, 'Coloso (Ricaurte)', 'coloso-(ricaurte)', '0000-00-00 00:00:00', NULL),
(942, 22, 'Corozal', 'corozal', '0000-00-00 00:00:00', NULL),
(943, 22, 'Chalan', 'chalan', '0000-00-00 00:00:00', NULL),
(944, 22, 'Galeras (Nueva Granada)', 'galeras-(nueva granada)', '0000-00-00 00:00:00', NULL),
(945, 22, 'Guaranda', 'guaranda', '0000-00-00 00:00:00', NULL),
(946, 22, 'La Union', 'la-union', '0000-00-00 00:00:00', NULL),
(947, 22, 'Los Palmitos', 'los-palmitos', '0000-00-00 00:00:00', NULL),
(948, 22, 'Majagual', 'majagual', '0000-00-00 00:00:00', NULL),
(949, 22, 'Morroa', 'morroa', '0000-00-00 00:00:00', NULL),
(950, 22, 'Ovejas', 'ovejas', '0000-00-00 00:00:00', NULL),
(951, 22, 'Palmito', 'palmito', '0000-00-00 00:00:00', NULL),
(952, 22, 'Sampues', 'sampues', '0000-00-00 00:00:00', NULL),
(953, 22, 'San Benito Abad', 'san-benito-abad', '0000-00-00 00:00:00', NULL),
(954, 22, 'San Juan De Betulia', 'san-juan-de-betulia', '0000-00-00 00:00:00', NULL),
(955, 22, 'San Marcos', 'san-marcos', '0000-00-00 00:00:00', NULL),
(956, 22, 'San Onofre', 'san-onofre', '0000-00-00 00:00:00', NULL),
(957, 22, 'San Pedro', 'san-pedro', '0000-00-00 00:00:00', NULL),
(958, 22, 'Since', 'since', '0000-00-00 00:00:00', NULL),
(959, 22, 'Sucre', 'sucre', '0000-00-00 00:00:00', NULL),
(960, 22, 'Tolu', 'tolu', '0000-00-00 00:00:00', NULL),
(961, 22, 'Toluviejo', 'toluviejo', '0000-00-00 00:00:00', NULL),
(962, 23, 'Ibague', 'ibague', '0000-00-00 00:00:00', NULL),
(963, 23, 'Alpujarra', 'alpujarra', '0000-00-00 00:00:00', NULL),
(964, 23, 'Alvarado', 'alvarado', '0000-00-00 00:00:00', NULL),
(965, 23, 'Ambalema', 'ambalema', '0000-00-00 00:00:00', NULL),
(966, 23, 'Anzoategui', 'anzoategui', '0000-00-00 00:00:00', NULL),
(967, 23, 'Armero (Guayabal)', 'armero-(guayabal)', '0000-00-00 00:00:00', NULL),
(968, 23, 'Ataco', 'ataco', '0000-00-00 00:00:00', NULL),
(969, 23, 'Cajamarca', 'cajamarca', '0000-00-00 00:00:00', NULL),
(970, 23, 'Carmen Apicala', 'carmen-apicala', '0000-00-00 00:00:00', NULL),
(971, 23, 'Casabianca', 'casabianca', '0000-00-00 00:00:00', NULL),
(972, 23, 'Chaparral', 'chaparral', '0000-00-00 00:00:00', NULL),
(973, 23, 'Coello', 'coello', '0000-00-00 00:00:00', NULL),
(974, 23, 'Coyaima', 'coyaima', '0000-00-00 00:00:00', NULL),
(975, 23, 'Cunday', 'cunday', '0000-00-00 00:00:00', NULL),
(976, 23, 'Dolores', 'dolores', '0000-00-00 00:00:00', NULL),
(977, 23, 'Espinal', 'espinal', '0000-00-00 00:00:00', NULL),
(978, 23, 'Falan', 'falan', '0000-00-00 00:00:00', NULL),
(979, 23, 'Flandes', 'flandes', '0000-00-00 00:00:00', NULL),
(980, 23, 'Fresno', 'fresno', '0000-00-00 00:00:00', NULL),
(981, 23, 'Guamo', 'guamo', '0000-00-00 00:00:00', NULL),
(982, 23, 'Herveo', 'herveo', '0000-00-00 00:00:00', NULL),
(983, 23, 'Honda', 'honda', '0000-00-00 00:00:00', NULL),
(984, 23, 'Icononzo', 'icononzo', '0000-00-00 00:00:00', NULL),
(985, 23, 'Lerida', 'lerida', '0000-00-00 00:00:00', NULL),
(986, 23, 'Libano', 'libano', '0000-00-00 00:00:00', NULL),
(987, 23, 'Mariquita', 'mariquita', '0000-00-00 00:00:00', NULL),
(988, 23, 'Melgar', 'melgar', '0000-00-00 00:00:00', NULL),
(989, 23, 'Murillo', 'murillo', '0000-00-00 00:00:00', NULL),
(990, 23, 'Natagaima', 'natagaima', '0000-00-00 00:00:00', NULL),
(991, 23, 'Ortega', 'ortega', '0000-00-00 00:00:00', NULL),
(992, 23, 'Palocabildo', 'palocabildo', '0000-00-00 00:00:00', NULL),
(993, 23, 'Piedras', 'piedras', '0000-00-00 00:00:00', NULL),
(994, 23, 'Planadas', 'planadas', '0000-00-00 00:00:00', NULL),
(995, 23, 'Prado', 'prado', '0000-00-00 00:00:00', NULL),
(996, 23, 'Purificacion', 'purificacion', '0000-00-00 00:00:00', NULL),
(997, 23, 'Rioblanco', 'rioblanco', '0000-00-00 00:00:00', NULL),
(998, 23, 'Roncesvalles', 'roncesvalles', '0000-00-00 00:00:00', NULL),
(999, 23, 'Rovira', 'rovira', '0000-00-00 00:00:00', NULL),
(1000, 23, 'Saldaña', 'saldaña', '0000-00-00 00:00:00', NULL),
(1001, 23, 'San Antonio', 'san-antonio', '0000-00-00 00:00:00', NULL),
(1002, 23, 'San Luis', 'san-luis', '0000-00-00 00:00:00', NULL),
(1003, 23, 'Santa Isabel', 'santa-isabel', '0000-00-00 00:00:00', NULL),
(1004, 23, 'Suarez', 'suarez', '0000-00-00 00:00:00', NULL),
(1005, 23, 'Valle De San Juan', 'valle-de-san-juan', '0000-00-00 00:00:00', NULL),
(1006, 23, 'Venadillo', 'venadillo', '0000-00-00 00:00:00', NULL),
(1007, 23, 'Villahermosa', 'villahermosa', '0000-00-00 00:00:00', NULL),
(1008, 23, 'Villarrica', 'villarrica', '0000-00-00 00:00:00', NULL),
(1009, 24, 'Cali (Santiago De Cali)', 'cali-(santiago de cali)', '0000-00-00 00:00:00', NULL),
(1010, 24, 'Alcala', 'alcala', '0000-00-00 00:00:00', NULL),
(1011, 24, 'Andalucia', 'andalucia', '0000-00-00 00:00:00', NULL),
(1012, 24, 'Ansermanuevo', 'ansermanuevo', '0000-00-00 00:00:00', NULL),
(1013, 24, 'Argelia', 'argelia', '0000-00-00 00:00:00', NULL),
(1014, 24, 'Bolivar', 'bolivar', '0000-00-00 00:00:00', NULL),
(1015, 24, 'Buenaventura', 'buenaventura', '0000-00-00 00:00:00', NULL),
(1016, 24, 'Buga', 'buga', '0000-00-00 00:00:00', NULL),
(1017, 24, 'Bugalagrande', 'bugalagrande', '0000-00-00 00:00:00', NULL),
(1018, 24, 'Caicedonia', 'caicedonia', '0000-00-00 00:00:00', NULL),
(1019, 24, 'Calima (Darien)', 'calima-(darien)', '0000-00-00 00:00:00', NULL),
(1020, 24, 'Candelaria', 'candelaria', '0000-00-00 00:00:00', NULL),
(1021, 24, 'Cartago', 'cartago', '0000-00-00 00:00:00', NULL),
(1022, 24, 'Dagua', 'dagua', '0000-00-00 00:00:00', NULL),
(1023, 24, 'El Aguila', 'el-aguila', '0000-00-00 00:00:00', NULL),
(1024, 24, 'El Cairo', 'el-cairo', '0000-00-00 00:00:00', NULL),
(1025, 24, 'El Cerrito', 'el-cerrito', '0000-00-00 00:00:00', NULL),
(1026, 24, 'El Dovio', 'el-dovio', '0000-00-00 00:00:00', NULL),
(1027, 24, 'Florida', 'florida', '0000-00-00 00:00:00', NULL),
(1028, 24, 'Ginebra', 'ginebra', '0000-00-00 00:00:00', NULL),
(1029, 24, 'Guacari', 'guacari', '0000-00-00 00:00:00', NULL),
(1030, 24, 'Jamundi', 'jamundi', '0000-00-00 00:00:00', NULL),
(1031, 24, 'La Cumbre', 'la-cumbre', '0000-00-00 00:00:00', NULL),
(1032, 24, 'La Union', 'la-union', '0000-00-00 00:00:00', NULL),
(1033, 24, 'La Victoria', 'la-victoria', '0000-00-00 00:00:00', NULL),
(1034, 24, 'Obando', 'obando', '0000-00-00 00:00:00', NULL),
(1035, 24, 'Palmira', 'palmira', '0000-00-00 00:00:00', NULL),
(1036, 24, 'Pradera', 'pradera', '0000-00-00 00:00:00', NULL),
(1037, 24, 'Restrepo', 'restrepo', '0000-00-00 00:00:00', NULL),
(1038, 24, 'Riofrio', 'riofrio', '0000-00-00 00:00:00', NULL),
(1039, 24, 'Roldanillo', 'roldanillo', '0000-00-00 00:00:00', NULL),
(1040, 24, 'San Pedro', 'san-pedro', '0000-00-00 00:00:00', NULL),
(1041, 24, 'Sevilla', 'sevilla', '0000-00-00 00:00:00', NULL),
(1042, 24, 'Toro', 'toro', '0000-00-00 00:00:00', NULL),
(1043, 24, 'Trujillo', 'trujillo', '0000-00-00 00:00:00', NULL),
(1044, 24, 'Tulua', 'tulua', '0000-00-00 00:00:00', NULL),
(1045, 24, 'Ulloa', 'ulloa', '0000-00-00 00:00:00', NULL),
(1046, 24, 'Versalles', 'versalles', '0000-00-00 00:00:00', NULL),
(1047, 24, 'Vijes', 'vijes', '0000-00-00 00:00:00', NULL),
(1048, 24, 'Yotoco', 'yotoco', '0000-00-00 00:00:00', NULL),
(1049, 24, 'Yumbo', 'yumbo', '0000-00-00 00:00:00', NULL),
(1050, 24, 'Zarzal', 'zarzal', '0000-00-00 00:00:00', NULL),
(1051, 25, 'Arauca', 'arauca', '0000-00-00 00:00:00', NULL),
(1052, 25, 'Arauquita', 'arauquita', '0000-00-00 00:00:00', NULL),
(1053, 25, 'Cravo Norte', 'cravo-norte', '0000-00-00 00:00:00', NULL),
(1054, 25, 'Fortul', 'fortul', '0000-00-00 00:00:00', NULL),
(1055, 25, 'Puerto Rondon', 'puerto-rondon', '0000-00-00 00:00:00', NULL),
(1056, 25, 'Saravena', 'saravena', '0000-00-00 00:00:00', NULL),
(1057, 25, 'Tame', 'tame', '0000-00-00 00:00:00', NULL),
(1058, 26, 'Yopal', 'yopal', '0000-00-00 00:00:00', NULL),
(1059, 26, 'Aguazul', 'aguazul', '0000-00-00 00:00:00', NULL),
(1060, 26, 'Chameza', 'chameza', '0000-00-00 00:00:00', NULL),
(1061, 26, 'Hato Corozal', 'hato corozal', '0000-00-00 00:00:00', NULL),
(1062, 26, 'La Salina', 'la-salina', '0000-00-00 00:00:00', NULL),
(1063, 26, 'Mani', 'mani', '0000-00-00 00:00:00', NULL),
(1064, 26, 'Monterrey', 'monterrey', '0000-00-00 00:00:00', NULL),
(1065, 26, 'Nunchia', 'nunchia', '0000-00-00 00:00:00', NULL),
(1066, 26, 'Orocue', 'orocue', '0000-00-00 00:00:00', NULL),
(1067, 26, 'Paz De Ariporo', 'paz-de-ariporo', '0000-00-00 00:00:00', NULL),
(1068, 26, 'Pore', 'pore', '0000-00-00 00:00:00', NULL),
(1069, 26, 'Recetor', 'recetor', '0000-00-00 00:00:00', NULL),
(1070, 26, 'Sabanalarga', 'sabanalarga', '0000-00-00 00:00:00', NULL),
(1071, 26, 'Sacama', 'sacama', '0000-00-00 00:00:00', NULL),
(1072, 26, 'San Luis De Palenque', 'san-luis-de-palenque', '0000-00-00 00:00:00', NULL),
(1073, 26, 'Tamara', 'tamara', '0000-00-00 00:00:00', NULL),
(1074, 26, 'Tauramena', 'tauramena', '0000-00-00 00:00:00', NULL),
(1075, 26, 'Trinidad', 'trinidad', '0000-00-00 00:00:00', NULL),
(1076, 26, 'Villanueva', 'villanueva', '0000-00-00 00:00:00', NULL),
(1077, 27, 'Mocoa', 'mocoa', '0000-00-00 00:00:00', NULL),
(1078, 27, 'Colon', 'colon', '0000-00-00 00:00:00', NULL),
(1079, 27, 'Orito', 'orito', '0000-00-00 00:00:00', NULL),
(1080, 27, 'Puerto Asis', 'puerto-asis', '0000-00-00 00:00:00', NULL),
(1081, 27, 'Puerto Caicedo', 'puerto-caicedo', '0000-00-00 00:00:00', NULL),
(1082, 27, 'Puerto Guzman', 'puerto-guzman', '0000-00-00 00:00:00', NULL),
(1083, 27, 'Puerto Leguizamo', 'puerto-leguizamo', '0000-00-00 00:00:00', NULL),
(1084, 27, 'Sibundoy', 'sibundoy', '0000-00-00 00:00:00', NULL),
(1085, 27, 'San Francisco', 'san-francisco', '0000-00-00 00:00:00', NULL),
(1086, 27, 'San Miguel (La Dorada)', 'san-miguel-(la-dorada)', '0000-00-00 00:00:00', NULL),
(1087, 27, 'Santiago', 'santiago', '0000-00-00 00:00:00', NULL),
(1088, 27, 'La Hormiga (Valle Del Guamuez)', 'la-hormiga-(valle-del-guamuez)', '0000-00-00 00:00:00', NULL),
(1089, 27, 'Villagarzon', 'villagarzon', '0000-00-00 00:00:00', NULL),
(1090, 28, 'San Andres', 'san-andres', '0000-00-00 00:00:00', NULL),
(1091, 28, 'Providencia', 'providencia', '0000-00-00 00:00:00', NULL),
(1092, 29, 'Leticia', 'leticia', '0000-00-00 00:00:00', NULL),
(1093, 29, 'El Encanto', 'el-encanto', '0000-00-00 00:00:00', NULL),
(1094, 29, 'La Chorrera', 'la-chorrera', '0000-00-00 00:00:00', NULL),
(1095, 29, 'La Pedrera', 'la-pedrera', '0000-00-00 00:00:00', NULL),
(1096, 29, 'La Victoria', 'la-victoria', '0000-00-00 00:00:00', NULL),
(1097, 29, 'Miriti-Parana', 'miriti-parana', '0000-00-00 00:00:00', NULL),
(1098, 29, 'Puerto Alegria', 'puerto-alegria', '0000-00-00 00:00:00', NULL),
(1099, 29, 'Puerto Arica', 'puerto-arica', '0000-00-00 00:00:00', NULL),
(1100, 29, 'Puerto Nariño', 'puerto-nariño', '0000-00-00 00:00:00', NULL),
(1101, 29, 'Puerto Santander', 'puerto-santander', '0000-00-00 00:00:00', NULL),
(1102, 29, 'Tarapaca', 'tarapaca', '0000-00-00 00:00:00', NULL),
(1103, 30, 'Puerto Inirida', 'puerto-inirida', '0000-00-00 00:00:00', NULL),
(1104, 30, 'Barranco Minas', 'barranco-minas', '0000-00-00 00:00:00', NULL),
(1105, 30, 'San Felipe', 'san-felipe', '0000-00-00 00:00:00', NULL),
(1106, 30, 'Puerto Colombia', 'puerto-colombia', '0000-00-00 00:00:00', NULL),
(1107, 30, 'La Guadalupe', 'la-guadalupe', '0000-00-00 00:00:00', NULL),
(1108, 30, 'Cacahual', 'cacahual', '0000-00-00 00:00:00', NULL),
(1109, 30, 'Pana Pana (Campo Alegre)', 'pana-pana-(campo-alegre)', '0000-00-00 00:00:00', NULL),
(1110, 30, 'Morichal (Morichal Nuevo)', 'morichal-(morichal-nuevo)', '0000-00-00 00:00:00', NULL),
(1111, 31, 'San Jose Del Guaviare', 'san-jose-del-guaviare', '0000-00-00 00:00:00', NULL),
(1112, 31, 'Calamar', 'calamar', '0000-00-00 00:00:00', NULL),
(1113, 31, 'El Retorno', 'el-retorno', '0000-00-00 00:00:00', NULL),
(1114, 31, 'Miraflores', 'miraflores', '0000-00-00 00:00:00', NULL),
(1115, 32, 'Mitu', 'mitu', '0000-00-00 00:00:00', NULL),
(1116, 32, 'Caruru', 'caruru', '0000-00-00 00:00:00', NULL),
(1117, 32, 'Pacoa', 'pacoa', '0000-00-00 00:00:00', NULL),
(1118, 32, 'Taraira', 'taraira', '0000-00-00 00:00:00', NULL),
(1119, 32, 'Papunaua (Morichal)', 'papunaua-(morichal)', '0000-00-00 00:00:00', NULL),
(1120, 32, 'Yavarate', 'yavarate', '0000-00-00 00:00:00', NULL),
(1121, 33, 'Puerto Carreño', 'puerto-carreño', '0000-00-00 00:00:00', NULL),
(1122, 33, 'La Primavera', 'la-primavera', '0000-00-00 00:00:00', NULL),
(1123, 33, 'Santa Rita', 'santa-rita', '0000-00-00 00:00:00', NULL),
(1124, 33, 'Santa Rosalia', 'santa-rosalia', '0000-00-00 00:00:00', NULL),
(1125, 33, 'San Jose De Ocune', 'san-jose-de-ocune', '0000-00-00 00:00:00', NULL),
(1126, 33, 'Cumaribo', 'cumaribo', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `countryId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`countryId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Colombia', 'colombia', '2021-02-09 15:32:47', '2020-11-22 14:41:36');

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
  `name` varchar(250) NOT NULL,
  `productId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`imagesId`, `name`, `productId`, `created_at`, `updated_at`) VALUES
(1, '/tennis.jpg', 1, '2021-03-09 14:32:40', NULL),
(2, '/botas-altas.jpg', 2, '2021-03-09 14:17:04', NULL),
(3, '/sandalias-planas.jpg', 3, '2021-03-09 14:17:55', NULL),
(4, '/sandalias-altas.jpg', 4, '2021-03-09 14:19:11', NULL),
(5, '/sandalias.jpg', 5, '2021-03-09 14:20:17', NULL),
(6, '/tenis.jpg', 6, '2021-03-09 14:21:12', NULL),
(7, '/tenis-training.jpg', 7, '2021-03-09 14:22:05', NULL);

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

INSERT INTO `products` (`productId`, `name`, `slug`, `material`, `price`, `description`, `color`, `brand`, `categoryId`, `genderId`, `statusProductId`, `storeId`, `created_at`, `updated_at`) VALUES
(1, 'Tenis Running', 'tenis-running', 'Tela', 100, 'Lorem ipsum dolor, elit. ', 'Azul', 'Running', 1, 1, 1, 1, '2021-02-09 15:37:30', '2020-11-25 15:37:52'),
(2, 'Botas Altas', 'botas-altas', 'Cuero', 200, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint impedit nisi ipsam, temporibus quod blanditiis dolorum non ipsum tempora accusantium quidem molestiae, facere et aut quam corrupti! Quia, deleniti nobis?', 'Café', 'Bata', 2, 1, 1, 1, '2021-02-23 03:13:32', '2020-11-25 15:39:57'),
(3, 'Sandalias planas', 'sandalias-planas', 'Cuero', 50, 'Sandalia plana', 'Rosa', 'Velez', 3, 1, 1, 1, '2021-03-09 15:22:27', '2020-11-25 15:37:52'),
(4, 'Sandalias altas', 'sandalias-altas', 'Cuero', 50, 'Sandalia tacon', 'Rosa', 'Velez', 4, 1, 1, 1, '2021-03-09 15:22:37', '2020-11-25 15:37:52'),
(5, 'Sandalias', 'sandalias', 'Cuero', 50, 'Sandalia', 'Rosa', 'Velez', 3, 1, 1, 1, '2021-03-09 15:22:41', '2020-11-25 15:37:52'),
(6, 'Tenis', 'tenis', 'Tela', 100, 'Lorem ipsum dolor, elit. ', 'Azul', 'Running', 1, 2, 1, 1, '2021-02-09 15:37:30', '2020-11-25 15:37:52'),
(7, 'Tenis Training', 'tenis-training', 'Tela', 100, 'Lorem ipsum dolor, elit. ', 'Blanco', 'Running', 1, 2, 1, 1, '2021-02-09 15:37:30', '2020-11-25 15:37:52');

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
(5, 35, 1, 2, '2021-03-09 15:02:32', '2021-03-09 15:02:32'),
(6, 37, 2, 2, '2021-03-09 15:02:32', '2021-03-09 15:02:32'),
(7, 36, 3, 2, '2021-03-09 15:03:03', '2021-03-09 15:03:03'),
(8, 37, 4, 3, '2021-03-09 15:03:03', '2021-03-09 15:03:03'),
(9, 37, 5, 3, '2021-03-09 15:03:23', '2021-03-09 15:03:23'),
(10, 33, 6, 1, '2021-03-09 15:04:00', '2021-03-09 15:04:00'),
(11, 38, 7, 3, '2021-03-09 15:04:00', '2021-03-09 15:04:00');

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

INSERT INTO `saledetails` (`saleDetailsId`, `price`, `saleId`, `productId`, `userAddressId`, `created_at`, `updated_at`) VALUES
(1, 100, 1, 1, 1, '2020-11-27 15:39:17', '2020-11-27 15:39:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `saleId` int(11) NOT NULL,
  `date` date NOT NULL,
  `totalPrice` double NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`sizeId`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-03-09 14:53:39', NULL),
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
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `countryId` int(11) NOT NULL,
  `name` varchar(70) CHARACTER SET utf8mb4 NOT NULL,
  `slug` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `countryId`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Antioquia', 'antioquia', '2020-01-28 00:00:00', NULL),
(2, 1, 'Atlantico', 'tlantico', '2020-01-28 00:00:00', NULL),
(3, 1, 'D. C. Santa Fe de Bogotá', 'd-c-santa-fe-de-bogota', '2020-01-28 00:00:00', NULL),
(4, 1, 'Bolivar', 'bolivar', '2020-01-28 00:00:00', NULL),
(5, 1, 'Boyaca', 'boyaca', '2020-01-28 00:00:00', NULL),
(6, 1, 'Caldas', 'caldas', '2020-01-28 00:00:00', NULL),
(7, 1, 'Caqueta', 'caqueta', '2020-01-28 00:00:00', NULL),
(8, 1, 'Cauca', 'cauca', '2020-01-28 00:00:00', NULL),
(9, 1, 'Cesar', 'cesar', '2020-01-28 00:00:00', NULL),
(10, 1, 'Cordoba', 'cordoba', '2020-01-28 00:00:00', NULL),
(11, 1, 'Cundinamarca', 'cundinamarca', '2020-01-28 00:00:00', NULL),
(12, 1, 'Chocó', 'choco', '2020-01-28 00:00:00', NULL),
(13, 1, 'Huila', 'huila', '2020-01-28 00:00:00', NULL),
(14, 1, 'La Guajira', 'la-guajira', '2020-01-28 00:00:00', NULL),
(15, 1, 'Magdalena', 'magdalena', '2020-01-28 00:00:00', NULL),
(16, 1, 'Meta', 'meta', '2020-01-28 00:00:00', NULL),
(17, 1, 'Nariño', 'narino', '2020-01-28 00:00:00', NULL),
(18, 1, 'Norte de Santander', 'norte-de-santander', '2020-01-28 00:00:00', NULL),
(19, 1, 'Quindío', 'quindio', '2020-01-28 00:00:00', NULL),
(20, 1, 'Risaralda', 'risaralda', '2020-01-28 00:00:00', NULL),
(21, 1, 'Santander', 'santander', '2020-01-28 00:00:00', NULL),
(22, 1, 'Sucre', 'sucre', '2020-01-28 00:00:00', NULL),
(23, 1, 'Tolima', 'tolima', '2020-01-28 00:00:00', NULL),
(24, 1, 'Valle', 'valle', '2020-01-28 00:00:00', NULL),
(25, 1, 'Arauca', 'arauca', '2020-01-28 00:00:00', NULL),
(26, 1, 'Casanare', 'casanare', '2020-01-28 00:00:00', NULL),
(27, 1, 'Putumayo', 'putumayo', '2020-01-28 00:00:00', NULL),
(28, 1, 'San Andres', 'san-andres', '2020-01-28 00:00:00', NULL),
(29, 1, 'Amazonas', 'amazonas', '2020-01-28 00:00:00', NULL),
(30, 1, 'Guainía', 'guainia', '2020-01-28 00:00:00', NULL),
(31, 1, 'Guaviare', 'guaviare', '2020-01-28 00:00:00', NULL),
(32, 1, 'Vaupés', 'vaupes', '2020-01-28 00:00:00', NULL),
(33, 1, 'Vichada', 'vichada', '2020-01-28 00:00:00', NULL);

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
(4, 'Anulado', 'anulado', '2021-02-09 15:43:28', '2020-11-28 14:45:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stores`
--

CREATE TABLE `stores` (
  `storeId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stores`
--

INSERT INTO `stores` (`storeId`, `name`, `slug`, `nit`, `image`, `description`, `cellphone`, `userId`, `created_at`, `updated_at`) VALUES
(1, 'El mundo del deporte', 'el-mundo-del-deporte', '90555623', '/img/about.vsg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint impedit nisi ipsam, temporibus quod blanditiis dolorum non ipsum tempora accusantium quidem molestiae, facere et aut quam corrupti! Quia, deleniti nobis?', '3123652536', 1, '2021-02-23 02:49:43', '2020-11-25 15:36:20');

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
(2, 'Cedula de extranjería', 'cedula-de-extranjería', '2021-02-09 15:47:01', '2020-11-28 14:46:56');

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

--
-- Volcado de datos para la tabla `useraddress`
--

INSERT INTO `useraddress` (`userAddressId`, `address`, `description`, `postalCode`, `cityId`, `userDataId`, `created_at`, `updated_at`) VALUES
(1, 'Calle 22 A # 30 - 81', 'Segundo piso', 850002, 1058, 1, '2021-02-23 02:48:02', NULL);

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
  `userId` int(11) UNSIGNED NOT NULL,
  `typeDocumentId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `userdata`
--

INSERT INTO `userdata` (`userDataId`, `firstName`, `secondName`, `lastName`, `documentNumber`, `cellphone`, `birthDate`, `userId`, `typeDocumentId`, `created_at`, `updated_at`) VALUES
(1, 'Maria', 'Isabel', 'Herrera', '1116040087', '3212563239', '2004-04-30', 2, 1, '2021-02-23 02:50:49', '2021-02-23 02:50:41');

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
(1, 'El mundo del deporte', 'mundo@deporte', 2, 'el-mundo-del-deporte', '$2y$10$yx5UuzALuIyqx9GbQxR/W.njtiLw5Mr6P2GzliCyvUivnd.E8dFDu', 0, NULL, '2020-11-27 20:30:43', '2020-11-27 20:30:43'),
(2, 'Cliente', 'cliente@cliente', 3, 'cliente', '$2y$10$wG9Z57jugVoFCOmSiWBfiecGb.DKH9GJOtlE//3ZO6jXkiKg9tfPq', 0, NULL, '2020-11-27 20:36:40', '2020-11-27 20:36:40'),
(3, 'Diana', 'dalejandra402@gmail.com', 1, 'dalejandra402-gmail.com', '$2y$10$hsY5dRG2HEHsYBf9kA45HehvJx.snUm4w.a8zaHbbstZAwwTinIMy', 0, NULL, '2021-03-09 16:26:36', '0000-00-00 00:00:00');

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
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `Gender` (`genderId`);

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
  ADD KEY `Sale` (`saleId`),
  ADD KEY `UserAddress-Sale` (`userAddressId`);

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
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_fk` (`countryId`);

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
-- Indices de la tabla `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`userAddressId`),
  ADD KEY `City` (`cityId`),
  ADD KEY `UserData-Address` (`userDataId`);

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
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1127;

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
  MODIFY `imagesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productssize`
--
ALTER TABLE `productssize`
  MODIFY `productSizesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `saledetails`
--
ALTER TABLE `saledetails`
  MODIFY `saleDetailsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `userAddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userDataId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `state` FOREIGN KEY (`stateId`) REFERENCES `states` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `Product-Images` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
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
  ADD CONSTRAINT `Sale` FOREIGN KEY (`saleId`) REFERENCES `sales` (`saleId`),
  ADD CONSTRAINT `UserAddress-Sale` FOREIGN KEY (`userAddressId`) REFERENCES `useraddress` (`userAddressId`);

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `StatusSale` FOREIGN KEY (`statusSaleId`) REFERENCES `statussale` (`statusSaleId`),
  ADD CONSTRAINT `Store-Sales` FOREIGN KEY (`storeId`) REFERENCES `stores` (`storeId`),
  ADD CONSTRAINT `User-Sales` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `country_fk` FOREIGN KEY (`countryId`) REFERENCES `countries` (`countryId`);

--
-- Filtros para la tabla `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `User-Admin` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `City` FOREIGN KEY (`cityId`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `UserData-Address` FOREIGN KEY (`userDataId`) REFERENCES `userdata` (`userDataId`);

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
