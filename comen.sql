-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 00:02:23
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `comentario_id` int(11) NOT NULL,
  `parent_comentario_id` int(11) DEFAULT NULL,
  `comment` varchar(200) CHARACTER SET latin1 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla Comentarios';

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`comentario_id`, `parent_comentario_id`, `comment`, `comment_sender_name`, `date`) VALUES
(4, 0, 'Me fascina la programaciò', 'Luisa Maron', '2020-02-06 05:00:00'),
(5, 0, 'Los lenguajes de programación', 'Claudia Guillen', '2020-02-06 05:00:00'),
(6, 0, 'Prueba7', 'Prueba7', '2020-02-06 21:56:08'),
(7, 5, 'Prueba', 'Prueba', '2020-02-06 21:56:28'),
(8, 7, 'Prueba', 'Prueba', '2020-02-06 21:56:41'),
(9, 0, 'Prueba71', 'Prueba7', '2020-02-06 22:57:53'),
(10, 0, '  Prueba6', 'Prueba6', '2020-02-06 23:21:09'),
(11, 0, '  Prueba  Prueba6', 'juan jose', '2020-02-06 23:43:08'),
(12, 0, '  Pruebasssss   juan jose', 'juan jose', '2020-02-06 23:53:03'),
(13, 0, 'Prueba9', 'Prueba9', '2020-02-07 00:11:02'),
(14, 0, 'juan jose', 'juan jose', '2020-02-07 00:13:44'),
(15, 0, 'Pruebas 10', 'Pruebas 10', '2020-02-07 00:20:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `megusta_nomegusta`
--

CREATE TABLE `megusta_nomegusta` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comentario_id` int(11) NOT NULL,
  `like_unlike` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `megusta_nomegusta`
--

INSERT INTO `megusta_nomegusta` (`id`, `member_id`, `comentario_id`, `like_unlike`, `date`) VALUES
(2, 1, 3, 1, '2018-03-22 23:09:56'),
(3, 1, 5, 1, '2020-02-06 15:56:14'),
(4, 1, 4, 1, '2018-03-22 23:09:53'),
(5, 1, 0, 0, '2020-02-06 17:02:46'),
(6, 1, 0, 0, '2020-02-06 17:06:01'),
(7, 1, 0, 0, '2020-02-06 17:06:05'),
(8, 1, 0, 0, '2020-02-06 17:07:30'),
(9, 1, 0, 0, '2020-02-06 17:07:33'),
(10, 1, 0, 0, '2020-02-06 17:12:11'),
(11, 1, 0, 0, '2020-02-06 17:22:14'),
(12, 1, 0, 0, '2020-02-06 17:22:39'),
(13, 1, 0, 0, '2020-02-06 17:23:09'),
(14, 1, 0, 0, '2020-02-06 17:34:18'),
(15, 1, 0, 0, '2020-02-06 17:36:15'),
(16, 1, 0, 0, '2020-02-06 17:38:55'),
(17, 1, 0, 0, '2020-02-06 17:39:03'),
(18, 1, 0, 0, '2020-02-06 17:41:28'),
(19, 1, 0, 0, '2020-02-06 17:42:08'),
(20, 1, 0, 0, '2020-02-06 17:42:24'),
(21, 1, 0, 0, '2020-02-06 17:42:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`comentario_id`);

--
-- Indices de la tabla `megusta_nomegusta`
--
ALTER TABLE `megusta_nomegusta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `comentario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `megusta_nomegusta`
--
ALTER TABLE `megusta_nomegusta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
