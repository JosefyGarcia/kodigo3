-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2019 a las 16:44:54
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kodigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales_economicos`
--

CREATE TABLE `datospersonales_economicos` (
  `id_datospersonales_economicos` int(11) NOT NULL,
  `id_nivel_academico` int(11) DEFAULT NULL,
  `ingresos_familiares` float DEFAULT NULL,
  `cantidad_personas` int(11) DEFAULT NULL,
  `carnet_alumno` int(11) DEFAULT NULL,
  `id_pre_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales_economicos`
--

INSERT INTO `datospersonales_economicos` (`id_datospersonales_economicos`, `id_nivel_academico`, `ingresos_familiares`, `cantidad_personas`, `carnet_alumno`, `id_pre_formulario`) VALUES
(1, 6, 2, 1, 19161, 161),
(2, 2, 2222, 22, 19161, 161),
(3, 2, 22, 1, 19161, 161),
(4, 1, 1111, 11, 19161, 161),
(5, 2, 2222, 2, 19171, 171),
(6, 5, 1900, 1, 19177, 177),
(7, 6, 2222, 22, 19178, 178),
(8, 6, 1111, 11, 19180, 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales_informativos`
--

CREATE TABLE `datospersonales_informativos` (
  `id_datospersonales_informativos` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `descripcion_personal` varchar(100) DEFAULT NULL,
  `razon_ingreso` varchar(200) DEFAULT NULL,
  `descripcion_kodigo` varchar(200) DEFAULT NULL,
  `asumir_costos` tinyint(4) DEFAULT NULL,
  `carnet_alumno` int(11) DEFAULT NULL,
  `posibilidad_etapa_examen` tinyint(1) DEFAULT NULL,
  `id_pre_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales_informativos`
--

INSERT INTO `datospersonales_informativos` (`id_datospersonales_informativos`, `id_usuario`, `descripcion_personal`, `razon_ingreso`, `descripcion_kodigo`, `asumir_costos`, `carnet_alumno`, `posibilidad_etapa_examen`, `id_pre_formulario`) VALUES
(1, NULL, 'aaaaaaaa', 'aaaaa', 'aaaaaaa', 1, 19161, NULL, 161),
(2, NULL, 'prueba de modificacion', 'queremos ver si cambio o hace un nuevo alumno', 'no sabemos ', 1, 19161, NULL, 161),
(3, NULL, 'ahora siiiii', 'probeemos ', 'AAAAA', 1, 19161, NULL, 161),
(4, NULL, 'aaaaaaaaaa', 'aaaaaa', 'aaaa', 1, 19161, NULL, 161),
(5, NULL, 'aaa', '3334ddeeee', 'aaae43333', 1, 19171, NULL, 171),
(6, NULL, '2222222', 'aaaaaa', 'aaaaaa', 1, 19177, NULL, 177),
(7, NULL, 'aaaaaaaa', 'aaaa', 'aaaa', 1, 19178, NULL, 178),
(8, NULL, 'aaaaaaa', 'aaaa', 'aaaaa', 1, 19180, NULL, 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales_intereses`
--

CREATE TABLE `datospersonales_intereses` (
  `id_datospersonales_intereses` int(11) NOT NULL,
  `puntaje_tecnologia` int(11) DEFAULT NULL,
  `nivel_programacion` varchar(50) DEFAULT NULL,
  `actividades` varchar(50) DEFAULT NULL,
  `computadora` tinyint(4) DEFAULT NULL,
  `internet` tinyint(4) DEFAULT NULL,
  `acceso_internet` varchar(50) DEFAULT NULL,
  `frecuencia_internet` varchar(50) DEFAULT NULL,
  `smartphone` tinyint(4) DEFAULT NULL,
  `frecuencia_computadora` varchar(50) DEFAULT NULL,
  `acceso_examen` tinyint(4) DEFAULT NULL,
  `carnet_alumno` int(8) DEFAULT NULL,
  `id_pre_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales_intereses`
--

INSERT INTO `datospersonales_intereses` (`id_datospersonales_intereses`, `puntaje_tecnologia`, `nivel_programacion`, `actividades`, `computadora`, `internet`, `acceso_internet`, `frecuencia_internet`, `smartphone`, `frecuencia_computadora`, `acceso_examen`, `carnet_alumno`, `id_pre_formulario`) VALUES
(1, 3, 'basico', 'animaciones', 1, 1, 'Con el wifi de un familiar/amigo', 'Unas veces al mes', 1, 'Unas veces al mes', NULL, 19161, 161),
(2, 3, 'intermedio', 'Realidad virtual', 1, 1, 'Uso de datos móviles', 'Unas veces al mes', 1, 'Todos los días', NULL, 19161, 161),
(3, 3, 'avanzado', 'videojuegos', 1, 1, 'Uso de datos móviles', 'Unas veces a la semana', 1, 'Unas veces a la semana', NULL, 19161, 161),
(4, 3, 'basico', 'animaciones', 1, 1, 'Con el wifi de un familiar/amigo', 'Unas veces al mes', 1, 'Casi nunca', NULL, 19161, 161),
(5, 3, 'intermedio', 'Realidad virtual', 1, 1, 'Con el wifi de la escuela o universidad', 'Unas veces a la semana', 1, 'Todos los días', NULL, 19171, 171),
(6, 2, 'Nunca he programado', 'Programación/Desarrollo web', 1, 1, 'Con el wifi de la escuela o universidad', 'Unas veces al mes', 1, 'Casi nunca', NULL, 19177, 177),
(7, 2, 'basico', 'Diseño web', 1, 1, 'Uso de datos móviles', 'Unas veces a la semana', 1, 'Unas veces al mes', NULL, 19178, 178),
(8, 2, 'basico', 'Redes sociales', 1, 1, 'Uso de datos móviles', 'Unas veces al mes', 1, 'Casi nunca', NULL, 19180, 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales_profesionales`
--

CREATE TABLE `datospersonales_profesionales` (
  `id_datospersonales_profesionales` int(11) NOT NULL,
  `trabajo_previo` varchar(100) DEFAULT NULL,
  `tipo_trabajo` varchar(50) DEFAULT NULL,
  `puesto_trabajo` varchar(100) DEFAULT NULL,
  `trabajo_formal` tinyint(4) DEFAULT NULL,
  `sueldo_mensual` float DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  `recursos_pagar` varchar(100) DEFAULT NULL,
  `carnet_alumno` int(8) DEFAULT NULL,
  `id_pre_formulario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales_profesionales`
--

INSERT INTO `datospersonales_profesionales` (`id_datospersonales_profesionales`, `trabajo_previo`, `tipo_trabajo`, `puesto_trabajo`, `trabajo_formal`, `sueldo_mensual`, `horario`, `recursos_pagar`, `carnet_alumno`, `id_pre_formulario`) VALUES
(1, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19161, 161),
(2, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19161, 161),
(3, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19161, 161),
(4, 'Sí, trabajé antes y no estoy trabajando actualmente', '', '', 0, 0, '', 'nodejariatrabajo', 19161, 161),
(5, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19171, 171),
(6, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19177, 177),
(7, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19178, 178),
(8, 'No, nunca he trabajado', NULL, NULL, NULL, NULL, NULL, NULL, 19180, 180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales_usuario`
--

CREATE TABLE `datospersonales_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT 1,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `id_pre_formulario` int(11) DEFAULT NULL,
  `id_nivel_academico` int(11) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `numero_documento` varchar(15) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `hijos` tinyint(4) DEFAULT NULL,
  `estudiante_activo` tinyint(4) DEFAULT NULL,
  `carrera_estudiada` varchar(100) DEFAULT NULL,
  `centro_estudio` varchar(100) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_inicio_proceso` date DEFAULT NULL,
  `fecha_inicio_alumno` date DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL,
  `carnet_alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales_usuario`
--

INSERT INTO `datospersonales_usuario` (`id_usuario`, `id_departamento`, `id_estado`, `id_tipo_documento`, `id_pre_formulario`, `id_nivel_academico`, `fecha_nacimiento`, `numero_documento`, `genero`, `direccion`, `facebook`, `hijos`, `estudiante_activo`, `carrera_estudiada`, `centro_estudio`, `fecha_registro`, `fecha_inicio_proceso`, `fecha_inicio_alumno`, `fecha_retiro`, `carnet_alumno`) VALUES
(1, 2, 1, 2, 161, 8, '2016-11-04', '1111', 'Masculino', 'aaaaaaa', 'aaa', 0, 0, NULL, NULL, '2019-11-12 19:26:55', NULL, NULL, NULL, 19161),
(2, 5, 1, 2, 161, 8, '2016-11-12', '7777', 'Masculino', 'aaa', '', 0, 1, NULL, NULL, '2019-11-12 19:32:15', NULL, NULL, NULL, 19161),
(3, 5, 1, 2, 161, 8, '2016-11-04', '3333-333333-3', 'Masculino', 'aaaa', '', 1, 1, NULL, NULL, '2019-11-12 19:40:37', NULL, NULL, NULL, 19161),
(4, 2, 1, 2, 161, 7, '2016-11-12', '2222-222222-2', 'Masculino', 'aaa', '', 0, 1, '', NULL, '2019-11-12 19:54:28', NULL, NULL, NULL, 19161),
(5, 3, 1, 3, 171, 8, '0000-00-00', 'a34ddffgggg', 'Masculino', 'aaa34455aaa', 'aaa', 0, 1, NULL, NULL, '2019-11-13 15:49:26', NULL, NULL, NULL, 19171),
(6, 3, 1, 1, 177, 8, '0000-00-00', '22222222-2', 'Masculino', 'aaaaaa', '', 0, 1, NULL, NULL, '2019-11-14 16:01:09', NULL, NULL, NULL, 19177),
(7, 2, 1, 2, 178, 2, '0000-00-00', '1111-111111-1', 'Femenino', 'aaaaaa', '', 0, 1, 'aaaa', NULL, '2019-11-14 16:04:34', NULL, NULL, NULL, 19178),
(8, 2, 1, 3, 179, 8, '0000-00-00', 'aaaaaaaa', 'Femenino', 'ffff', '', 0, 1, NULL, NULL, '2019-11-14 16:14:00', NULL, NULL, NULL, 19179),
(9, 5, 1, 2, 180, 8, '0000-00-00', '2222-222222-2', 'Femenino', 'aaaaa', '', 0, 1, NULL, NULL, '2019-11-14 16:20:06', NULL, NULL, NULL, 19180);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento`) VALUES
(1, 'Ahuachapán'),
(2, 'Santa Ana'),
(3, 'Sonsonate'),
(4, 'La Libertad'),
(5, 'Chalatenango'),
(6, 'San Salvador'),
(7, 'Cuscatlán'),
(8, 'La Paz'),
(9, 'Cabañas'),
(10, 'San Vicente'),
(11, 'Usulután'),
(12, 'Morazán'),
(13, 'San Miguel'),
(14, 'La Unión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_usuarios`
--

CREATE TABLE `estados_usuarios` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados_usuarios`
--

INSERT INTO `estados_usuarios` (`id_estado`, `nombre_estado`) VALUES
(1, 'Aspirante'),
(2, 'Examen'),
(3, 'Prebasico'),
(4, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `municipio`, `id_departamento`) VALUES
(1, 'Ahuachapán', 1),
(2, 'Jujutla', 1),
(3, 'Atiquizaya', 1),
(4, 'Concepción de Ataco', 1),
(5, 'El Refugio', 1),
(6, 'Guaymango', 1),
(7, 'Apaneca', 1),
(8, 'San Francisco Menéndez', 1),
(9, 'San Lorenzo', 1),
(10, 'San Pedro Puxtla', 1),
(11, 'Tacuba', 1),
(12, 'Turín', 1),
(13, 'Candelaria de la Frontera', 2),
(14, 'Chalchuapa', 2),
(15, 'Coatepeque', 2),
(16, 'El Congo', 2),
(17, 'El Porvenir', 2),
(18, 'Masahuat', 2),
(19, 'Metapán', 2),
(20, 'San Antonio Pajonal', 2),
(21, 'San Sebastián Salitrillo', 2),
(22, 'Santa Ana', 2),
(23, 'Santa Rosa Guachipilín', 2),
(24, 'Santiago de la Frontera', 2),
(25, 'Texistepeque', 2),
(26, 'Acajutla', 3),
(27, 'Armenia', 3),
(28, 'Caluco', 3),
(29, 'Cuisnahuat', 3),
(30, 'Izalco', 3),
(31, 'Juayúa', 3),
(32, 'Nahuizalco', 3),
(33, 'Nahulingo', 3),
(34, 'Salcoatitán', 3),
(35, 'San Antonio del Monte', 3),
(36, 'San Julián', 3),
(37, 'Santa Catarina Masahuat', 3),
(38, 'Santa Isabel Ishuatán', 3),
(39, 'Santo Domingo de Guzmán', 3),
(40, 'Sonsonate', 3),
(41, 'Sonzacate', 3),
(42, 'Alegría', 11),
(43, 'Berlín', 11),
(44, 'California', 11),
(45, 'Concepción Batres', 11),
(46, 'El Triunfo', 11),
(47, 'Ereguayquín', 11),
(48, 'Estanzuelas', 11),
(49, 'Jiquilisco', 11),
(50, 'Jucuapa', 11),
(51, 'Jucuarán', 11),
(52, 'Mercedes Umaña', 11),
(53, 'Nueva Granada', 11),
(54, 'Ozatlán', 11),
(55, 'Puerto El Triunfo', 11),
(56, 'San Agustín', 11),
(57, 'San Buenaventura', 11),
(58, 'San Dionisio', 11),
(59, 'San Francisco Javier', 11),
(60, 'Santa Elena', 11),
(61, 'Santa María', 11),
(62, 'Santiago de María', 11),
(63, 'Tecapán', 11),
(64, 'Usulután', 11),
(65, 'Carolina', 13),
(66, 'Chapeltique', 13),
(67, 'Chinameca', 13),
(68, 'Chirilagua', 13),
(69, 'Ciudad Barrios', 13),
(70, 'Comacarán', 13),
(71, 'El Tránsito', 13),
(72, 'Lolotique', 13),
(73, 'Moncagua', 13),
(74, 'Nueva Guadalupe', 13),
(75, 'Nuevo Edén de San Juan', 13),
(76, 'Quelepa', 13),
(77, 'San Antonio del Mosco', 13),
(78, 'San Gerardo', 13),
(79, 'San Jorge', 13),
(80, 'San Luis de la Reina', 13),
(81, 'San Miguel', 13),
(82, 'San Rafael Oriente', 13),
(83, 'Sesori', 13),
(84, 'Uluazapa', 13),
(85, 'Arambala', 12),
(86, 'Cacaopera', 12),
(87, 'Chilanga', 12),
(88, 'Corinto', 12),
(89, 'Delicias de Concepción', 12),
(90, 'El Divisadero', 12),
(91, 'El Rosario (Morazán)', 12),
(92, 'Gualococti', 12),
(93, 'Guatajiagua', 12),
(94, 'Joateca', 12),
(95, 'Jocoaitique', 12),
(96, 'Jocoro', 12),
(97, 'Lolotiquillo', 12),
(98, 'Meanguera', 12),
(99, 'Osicala', 12),
(100, 'Perquín', 12),
(101, 'San Carlos', 12),
(102, 'San Fernando (Morazán)', 12),
(103, 'San Francisco Gotera', 12),
(104, 'San Isidro (Morazán)', 12),
(105, 'San Simón', 12),
(106, 'Sensembra', 12),
(107, 'Sociedad', 12),
(108, 'Torola', 12),
(109, 'Yamabal', 12),
(110, 'Yoloaiquín', 12),
(111, 'La Unión', 14),
(112, 'San Alejo', 14),
(113, 'Yucuaiquín', 14),
(114, 'Conchagua', 14),
(115, 'Intipucá', 14),
(116, 'San José', 14),
(117, 'El Carmen (La Unión)', 14),
(118, 'Yayantique', 14),
(119, 'Bolívar', 14),
(120, 'Meanguera del Golfo', 14),
(121, 'Santa Rosa de Lima', 14),
(122, 'Pasaquina', 14),
(123, 'Anamoros', 14),
(124, 'Nueva Esparta', 14),
(125, 'El Sauce', 14),
(126, 'Concepción de Oriente', 14),
(127, 'Polorós', 14),
(128, 'Lislique', 14),
(129, 'Antiguo Cuscatlán', 4),
(130, 'Chiltiupán', 4),
(131, 'Ciudad Arce', 4),
(132, 'Colón', 4),
(133, 'Comasagua', 4),
(134, 'Huizúcar', 4),
(135, 'Jayaque', 4),
(136, 'Jicalapa', 4),
(137, 'La Libertad', 4),
(138, 'Santa Tecla', 4),
(139, 'Nuevo Cuscatlán', 4),
(140, 'San Juan Opico', 4),
(141, 'Quezaltepeque', 4),
(142, 'Sacacoyo', 4),
(143, 'San José Villanueva', 4),
(144, 'San Matías', 4),
(145, 'San Pablo Tacachico', 4),
(146, 'Talnique', 4),
(147, 'Tamanique', 4),
(148, 'Teotepeque', 4),
(149, 'Tepecoyo', 4),
(150, 'Zaragoza', 4),
(151, 'Agua Caliente', 5),
(152, 'Arcatao', 5),
(153, 'Azacualpa', 5),
(154, 'Cancasque', 5),
(155, 'Chalatenango', 5),
(156, 'Citalá', 5),
(157, 'Comapala', 5),
(158, 'Concepción Quezaltepeque', 5),
(159, 'Dulce Nombre de María', 5),
(160, 'El Carrizal', 5),
(161, 'El Paraíso', 5),
(162, 'La Laguna', 5),
(163, 'La Palma', 5),
(164, 'La Reina', 5),
(165, 'Las Vueltas', 5),
(166, 'Nueva Concepción', 5),
(167, 'Nueva Trinidad', 5),
(168, 'Nombre de Jesús', 5),
(169, 'Ojos de Agua', 5),
(170, 'Potonico', 5),
(171, 'San Antonio de la Cruz', 5),
(172, 'San Antonio Los Ranchos', 5),
(173, 'San Fernando (Chalatenango)', 5),
(174, 'San Francisco Lempa', 5),
(175, 'San Francisco Morazán', 5),
(176, 'San Ignacio', 5),
(177, 'San Isidro Labrador', 5),
(178, 'Las Flores', 5),
(179, 'San Luis del Carmen', 5),
(180, 'San Miguel de Mercedes', 5),
(181, 'San Rafael', 5),
(182, 'Santa Rita', 5),
(183, 'Tejutla', 5),
(184, 'Cojutepeque', 7),
(185, 'Candelaria', 7),
(186, 'El Carmen (Cuscatlán)', 7),
(187, 'El Rosario (Cuscatlán)', 7),
(188, 'Monte San Juan', 7),
(189, 'Oratorio de Concepción', 7),
(190, 'San Bartolomé Perulapía', 7),
(191, 'San Cristóbal', 7),
(192, 'San José Guayabal', 7),
(193, 'San Pedro Perulapán', 7),
(194, 'San Rafael Cedros', 7),
(195, 'San Ramón', 7),
(196, 'Santa Cruz Analquito', 7),
(197, 'Santa Cruz Michapa', 7),
(198, 'Suchitoto', 7),
(199, 'Tenancingo', 7),
(200, 'Aguilares', 6),
(201, 'Apopa', 6),
(202, 'Ayutuxtepeque', 6),
(203, 'Cuscatancingo', 6),
(204, 'Ciudad Delgado', 6),
(205, 'El Paisnal', 6),
(206, 'Guazapa', 6),
(207, 'Ilopango', 6),
(208, 'Mejicanos', 6),
(209, 'Nejapa', 6),
(210, 'Panchimalco', 6),
(211, 'Rosario de Mora', 6),
(212, 'San Marcos', 6),
(213, 'San Martín', 6),
(214, 'San Salvador', 6),
(215, 'Santiago Texacuangos', 6),
(216, 'Santo Tomás', 6),
(217, 'Soyapango', 6),
(218, 'Tonacatepeque', 6),
(219, 'Zacatecoluca', 8),
(220, 'Cuyultitán', 8),
(221, 'El Rosario (La Paz)', 8),
(222, 'Jerusalén', 8),
(223, 'Mercedes La Ceiba', 8),
(224, 'Olocuilta', 8),
(225, 'Paraíso de Osorio', 8),
(226, 'San Antonio Masahuat', 8),
(227, 'San Emigdio', 8),
(228, 'San Francisco Chinameca', 8),
(229, 'San Pedro Masahuat', 8),
(230, 'San Juan Nonualco', 8),
(231, 'San Juan Talpa', 8),
(232, 'San Juan Tepezontes', 8),
(233, 'San Luis La Herradura', 8),
(234, 'San Luis Talpa', 8),
(235, 'San Miguel Tepezontes', 8),
(236, 'San Pedro Nonualco', 8),
(237, 'San Rafael Obrajuelo', 8),
(238, 'Santa María Ostuma', 8),
(239, 'Santiago Nonualco', 8),
(240, 'Tapalhuaca', 8),
(241, 'Cinquera', 9),
(242, 'Dolores', 9),
(243, 'Guacotecti', 9),
(244, 'Ilobasco', 9),
(245, 'Jutiapa', 9),
(246, 'San Isidro (Cabañas)', 9),
(247, 'Sensuntepeque', 9),
(248, 'Tejutepeque', 9),
(249, 'Victoria', 9),
(250, 'Apastepeque', 10),
(251, 'Guadalupe', 10),
(252, 'San Cayetano Istepeque', 10),
(253, 'San Esteban Catarina', 10),
(254, 'San Ildefonso', 10),
(255, 'San Lorenzo', 10),
(256, 'San Sebastián', 10),
(257, 'San Vicente', 10),
(258, 'Santa Clara', 10),
(259, 'Santo Domingo', 10),
(260, 'Tecoluca', 10),
(261, 'Tepetitán', 10),
(262, 'Verapaz', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_academico`
--

CREATE TABLE `nivel_academico` (
  `id_nivel_academico` int(11) NOT NULL,
  `tipo_nivel_academico` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel_academico`
--

INSERT INTO `nivel_academico` (`id_nivel_academico`, `tipo_nivel_academico`) VALUES
(1, 'Primaria'),
(2, 'Secundaria'),
(3, 'Bachillerato'),
(4, 'Superior universitario Incompleto'),
(5, 'Superior universitario Egresado'),
(6, 'Superior universitario Completo'),
(7, 'Maestria/Posgrado'),
(8, 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_formulario`
--

CREATE TABLE `pre_formulario` (
  `id_pre_formulario` int(11) NOT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `celular` varchar(9) DEFAULT NULL,
  `primer_nombre` varchar(100) DEFAULT NULL,
  `segundo_nombre` varchar(100) DEFAULT NULL,
  `primer_apellido` varchar(100) DEFAULT NULL,
  `segundo_apellido` varchar(100) DEFAULT NULL,
  `otro_nombre` varchar(100) DEFAULT NULL,
  `carnet_alumno` varchar(8) DEFAULT NULL,
  `forma_conocer_kodigo` varchar(100) DEFAULT NULL,
  `dias_clase` varchar(100) DEFAULT NULL,
  `postulacion` tinyint(1) DEFAULT NULL,
  `etapas_kodigo` varchar(100) DEFAULT NULL,
  `modalidad_kodigo` varchar(100) DEFAULT NULL,
  `duracion_bootcamp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pre_formulario`
--

INSERT INTO `pre_formulario` (`id_pre_formulario`, `correo_electronico`, `celular`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `otro_nombre`, `carnet_alumno`, `forma_conocer_kodigo`, `dias_clase`, `postulacion`, `etapas_kodigo`, `modalidad_kodigo`, `duracion_bootcamp`) VALUES
(161, 'azucena@gmail.com', '3333-3333', 'Primer', 'registro', 'dealumno', '', '', '19161', 'Redes Sociales', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(162, 'aaa@fafafa', '2222-2222', 'pruebaaaa', 'carmen', 'juana', '', '', '19162', 'Periódico', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(163, 'aa@aaaaa', '2222-2222', 'pruebaaaaa', 'aaaa', 'aaa', '', '', '19163', 'Google', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(164, 'a@gg', '2222-2222', 'aaaaaaaaa', 'aaa', 'aaa', '', '', '19164', 'Redes Sociales', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(165, 'qqq@aaaa', '2222-2222', 'qqqqqqqqqqqqqq', 'qqqq', 'qqqqq', '', '', '19165', 'Televisión', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(166, 'rrr@aaaaa', '3333-3333', 'rrrr', 'rrr', 'rr', '', '', '19166', 'Redes Sociales', '3 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(167, 'yyy@sssss', '5555-5555', 'yyyyyyy', 'yyyyyyy', 'yyyyyyyyyy', '', '', '19167', 'Radio', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(168, 'hh@aaaa', '3333-3333', 'hhhhh', 'hhh', 'hhhh', '', '', '19168', 'Radio', '3 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(169, 'ggg@aaaa', '4444-4444', 'ggg', 'ggg', 'gggg', '', '', '19169', 'Periódico', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(170, 'aaa@ddddd', '2222-2222', 'aaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', '', '', '19170', 'Radio', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(171, 'aaa@aaaa', '3333-3333', 'aaaa', 'aaa', 'aaa', '', '', '19171', 'Redes Sociales', '3 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(172, 'aaaaa@ssss', '4444-4444', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaa', '', '', '19172', 'Periódico', '3 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(173, 'aaaa@aaaaa', '5555-5555', 'aaaaa', 'aaaaa', 'aaaaa', '', '', '19173', 'Redes Sociales', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(174, 'aa@gagaga', '2222-2222', 'azucena empera', 'no tenfo', 'asisiii', '', '', '19174', 'Periódico', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(175, 'aaa@ffff', '4444-4444', 'azucena emperat', 'aaa', 'aaa', '', '', '19175', 'Periódico', 'No poseo esa Disponibilidad', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(176, 'aaa@aaaaaa', '2222-2222', 'a', 'aaa', 'aaaaaa', '', '', '19176', 'Redes Sociales', '3 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(177, 'aaa@ffff', '3333-3333', 'probando nuevamente', 'para saber ', 'si ', 'funciona', '', '19177', 'Redes Sociales', '3 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(178, 'ddd@ffffff', '2222-2222', 'dddddd', 'dddddd', 'ddd', '', '', '19178', 'Redes Sociales', 'Disponibilidad Completa', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(179, 'eee@ffff', '3333-3333', 'eeeeeeeeee', 'eeee', 'eeee', '', '', '19179', 'Redes Sociales', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(180, 'aaaaQ@ffffdfd', '5555-5555', 'aaaa', 'aaaaa', 'aaaa', '', '', '19180', 'Periódico', 'No poseo esa Disponibilidad', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses'),
(181, 'azu@gaag.com', '2222-2222', 'azucena', 'emperatriz', 'fernandez', '', '', '19181', 'Redes Sociales', '4 dias', 1, 'Registro-Examen-Curso básico-Entrevista', 'Hybrida (Online y Presencial)', '18 meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `nombre`) VALUES
(1, 'DUI'),
(2, 'NIT'),
(3, 'PASAPORTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datospersonales_economicos`
--
ALTER TABLE `datospersonales_economicos`
  ADD PRIMARY KEY (`id_datospersonales_economicos`),
  ADD KEY `id_nivel_academico` (`id_nivel_academico`),
  ADD KEY `datos_personales_economicos_ibk_3` (`id_pre_formulario`);

--
-- Indices de la tabla `datospersonales_informativos`
--
ALTER TABLE `datospersonales_informativos`
  ADD PRIMARY KEY (`id_datospersonales_informativos`),
  ADD KEY `id_pre_formulario` (`id_pre_formulario`);

--
-- Indices de la tabla `datospersonales_intereses`
--
ALTER TABLE `datospersonales_intereses`
  ADD PRIMARY KEY (`id_datospersonales_intereses`),
  ADD KEY `id_pre_formulario` (`id_pre_formulario`);

--
-- Indices de la tabla `datospersonales_profesionales`
--
ALTER TABLE `datospersonales_profesionales`
  ADD PRIMARY KEY (`id_datospersonales_profesionales`),
  ADD KEY `id_pre_formulario` (`id_pre_formulario`);

--
-- Indices de la tabla `datospersonales_usuario`
--
ALTER TABLE `datospersonales_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_tipo_documento` (`id_tipo_documento`),
  ADD KEY `id_nivel_academico` (`id_nivel_academico`),
  ADD KEY `id_pre_formulario` (`id_pre_formulario`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `estados_usuarios`
--
ALTER TABLE `estados_usuarios`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `FK_REFERENCE_36` (`id_departamento`);

--
-- Indices de la tabla `nivel_academico`
--
ALTER TABLE `nivel_academico`
  ADD PRIMARY KEY (`id_nivel_academico`);

--
-- Indices de la tabla `pre_formulario`
--
ALTER TABLE `pre_formulario`
  ADD PRIMARY KEY (`id_pre_formulario`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datospersonales_economicos`
--
ALTER TABLE `datospersonales_economicos`
  MODIFY `id_datospersonales_economicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datospersonales_informativos`
--
ALTER TABLE `datospersonales_informativos`
  MODIFY `id_datospersonales_informativos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datospersonales_intereses`
--
ALTER TABLE `datospersonales_intereses`
  MODIFY `id_datospersonales_intereses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datospersonales_profesionales`
--
ALTER TABLE `datospersonales_profesionales`
  MODIFY `id_datospersonales_profesionales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datospersonales_usuario`
--
ALTER TABLE `datospersonales_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estados_usuarios`
--
ALTER TABLE `estados_usuarios`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de la tabla `nivel_academico`
--
ALTER TABLE `nivel_academico`
  MODIFY `id_nivel_academico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pre_formulario`
--
ALTER TABLE `pre_formulario`
  MODIFY `id_pre_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datospersonales_economicos`
--
ALTER TABLE `datospersonales_economicos`
  ADD CONSTRAINT `datos_personales_economicos_ibk_3` FOREIGN KEY (`id_pre_formulario`) REFERENCES `pre_formulario` (`id_pre_formulario`),
  ADD CONSTRAINT `datospersonales_economicos_ibfk_2` FOREIGN KEY (`id_nivel_academico`) REFERENCES `nivel_academico` (`id_nivel_academico`);

--
-- Filtros para la tabla `datospersonales_informativos`
--
ALTER TABLE `datospersonales_informativos`
  ADD CONSTRAINT `datospersonales_informativos_fkb_1` FOREIGN KEY (`id_pre_formulario`) REFERENCES `pre_formulario` (`id_pre_formulario`);

--
-- Filtros para la tabla `datospersonales_intereses`
--
ALTER TABLE `datospersonales_intereses`
  ADD CONSTRAINT `datospersonales_intereses_ibfk_2` FOREIGN KEY (`id_pre_formulario`) REFERENCES `pre_formulario` (`id_pre_formulario`);

--
-- Filtros para la tabla `datospersonales_profesionales`
--
ALTER TABLE `datospersonales_profesionales`
  ADD CONSTRAINT `datospersonales_profesionales_ibfk_2` FOREIGN KEY (`id_pre_formulario`) REFERENCES `pre_formulario` (`id_pre_formulario`);

--
-- Filtros para la tabla `datospersonales_usuario`
--
ALTER TABLE `datospersonales_usuario`
  ADD CONSTRAINT `datospersonales_usuario_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`),
  ADD CONSTRAINT `datospersonales_usuario_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados_usuarios` (`id_estado`),
  ADD CONSTRAINT `datospersonales_usuario_ibfk_3` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`),
  ADD CONSTRAINT `datospersonales_usuario_ibfk_4` FOREIGN KEY (`id_nivel_academico`) REFERENCES `nivel_academico` (`id_nivel_academico`),
  ADD CONSTRAINT `datospersonales_usuario_ibfk_5` FOREIGN KEY (`id_pre_formulario`) REFERENCES `pre_formulario` (`id_pre_formulario`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `FK_REFERENCE_36` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
