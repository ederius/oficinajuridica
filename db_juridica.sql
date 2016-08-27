-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2015 a las 19:44:18
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_juridica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
`idusuario` int(11) NOT NULL,
  `nombre_completo` text NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `roll` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idusuario`, `nombre_completo`, `nombre_usuario`, `email`, `contrasena`, `roll`) VALUES
(7, 'Luisa Fernanda Herrera Sanchez', 'luisademanda', 'luisa1@gmail.com', '12345', 'Asesor Demandas'),
(8, 'Leonardo Fernandez Yusaju', 'leonardotutela', 'leonardo2@gmail.com', '12345', 'Asesor Tutelas'),
(10, 'Luisa Herrera Sanchez', 'luisaconciliaciones', 'luisita@hotmail.com', '12345', 'Asesor Conciliaciones'),
(11, 'leonardo Fernandez ', 'leonardoderechos', 'leonardo1@hotmail.com', '12345', 'Asesor Derechos'),
(12, 'Pilar Pomarico', 'pilar', 'picapopis@hotmail.com', '12345', 'Secretaria'),
(13, 'admin', 'admin', 'admin@centrojuridico.com', '12345', 'Jefe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`archivo`) VALUES
('prueba.py');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE IF NOT EXISTS `asesor` (
  `id_asesor` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`id_asesor`, `nombre`) VALUES
(1010, 'Felix Ramiro Sanchez'),
(1011, 'Sandra Martinez'),
(1012, 'Tatiana Martinez'),
(1013, 'Luz Leidys Medina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avances_tramite`
--

CREATE TABLE IF NOT EXISTS `avances_tramite` (
`id_avance` int(11) NOT NULL,
  `fecha_entrada` varchar(10) NOT NULL,
  `fecha_salida` varchar(10) NOT NULL,
  `correccion` text NOT NULL,
  `id_dependencias` int(4) NOT NULL,
  `beneficiario` text NOT NULL,
  `recibe_rectoria_firma` varchar(10) NOT NULL,
  `fecha_salida_correccion` varchar(10) NOT NULL,
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2013166 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avances_tramite`
--

INSERT INTO `avances_tramite` (`id_avance`, `fecha_entrada`, `fecha_salida`, `correccion`, `id_dependencias`, `beneficiario`, `recibe_rectoria_firma`, `fecha_salida_correccion`, `archivo`) VALUES
(2013162, '12/03/2014', '', '', 7, 'Carlos Garcia', '', '', '../archivos/6668d0_planilla_de_conciliaciones.pdf'),
(2013163, '12/03/2014', '', '', 7, 'Carlos Garcia', '', '', '../archivos/4a9464_planilla_de_conciliaciones.pdf'),
(2013164, '12/03/2014', '', '', 7, 'Carlos Garcia', '', '', ''),
(2013165, '12/03/2014', '', '', 7, 'Carlos Garcia', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_avances`
--

CREATE TABLE IF NOT EXISTS `comentarios_avances` (
`id_comentario` int(11) NOT NULL,
  `contenido` varchar(800) NOT NULL,
  `id_avance` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `segundos` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_avances`
--

INSERT INTO `comentarios_avances` (`id_comentario`, `contenido`, `id_avance`, `id_administrador`, `fecha`, `hora`, `segundos`) VALUES
(1, ' hola               ', 2013163, 1, '07/1/2015', '08:57:42', '1420639062'),
(2, '      fgh          ', 1, 1, '12/1/2015', '01:14:27', '1421043267'),
(3, '      fgh          ', 1, 1, '12/1/2015', '01:14:31', '1421043271'),
(4, ' df', 1, 1, '12/1/2015', '01:14:47', '1421043287'),
(5, 'pajaroo', 1, 1, '12/1/2015', '01:15:56', '1421043356'),
(6, 'pajaroo', 1, 1, '12/1/2015', '01:15:58', '1421043358'),
(7, 'hola                ', 1, 1, '12/1/2015', '01:17:46', '1421043466');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_conciliacion`
--

CREATE TABLE IF NOT EXISTS `comentarios_conciliacion` (
`id_comentario` int(11) NOT NULL,
  `contenido` varchar(800) NOT NULL,
  `id_conciliacion` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `segundos` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios_conciliacion`
--

INSERT INTO `comentarios_conciliacion` (`id_comentario`, `contenido`, `id_conciliacion`, `id_asesor`, `fecha`, `hora`, `segundos`) VALUES
(1, ' hola               ', 2, 1, '13/11/2014', '17:25:52', '1415917552'),
(9, '  hola q hay              ', 2, 1, '13/11/2014', '17:48:51', '1415918931'),
(10, 'ola como estas?\n                ', 3, 1, '21/11/2014', '16:16:36', '1416604596'),
(11, 'bien  y tu tal', 3, 1, '21/11/2014', '16:16:48', '1416604608'),
(12, 'hola\n', 3, 1, '26/11/2014', '22:02:30', '1417057350'),
(13, 'jiijijii', 3, 1, '26/11/2014', '22:15:08', '1417058108'),
(14, '  jiijiji              ', 73, 1, '26/11/2014', '22:29:10', '1417058950'),
(15, 'p::p', 3, 1, '26/11/2014', '23:47:14', '1417063634');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_demanda`
--

CREATE TABLE IF NOT EXISTS `comentarios_demanda` (
`id_comentario` int(11) NOT NULL,
  `contenido` varchar(800) NOT NULL,
  `id_demanda` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `segundos` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios_demanda`
--

INSERT INTO `comentarios_demanda` (`id_comentario`, `contenido`, `id_demanda`, `id_asesor`, `fecha`, `hora`, `segundos`) VALUES
(24, 'como va ser', 73, 1, '05/11/2014', '23:12:41', 1415247161),
(32, '   esta demanda me parece absurda deberiamos apelar a ella             ', 80, 1, '06/11/2014', '00:55:09', 1415253309),
(33, '   esta demanda me parece absurda deberiamos apelar a ella             ', 80, 1, '06/11/2014', '00:55:50', 1415253350),
(34, 'comentario 73', 73, 1, '06/11/2014', '01:00:50', 1415253650),
(37, '  :D', 80, 1, '06/11/2014', '01:04:53', 1415253893),
(40, 'hola\n', 73, 1, '07/11/2014', '12:48:22', 1415382502),
(41, 'sdzfsdzfsdfsdfdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 73, 1, '07/11/2014', '12:49:15', 1415382555),
(42, 'primer comentario prueba', 73, 1, '07/11/2014', '12:52:48', 1415382768),
(76, '  a              ', 73, 1, '26/11/2014', '22:50:37', 1417060237);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_derechos`
--

CREATE TABLE IF NOT EXISTS `comentarios_derechos` (
`id_comentario` int(11) NOT NULL,
  `contenido` varchar(800) NOT NULL,
  `id_derecho` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `segundos` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios_derechos`
--

INSERT INTO `comentarios_derechos` (`id_comentario`, `contenido`, `id_derecho`, `id_asesor`, `fecha`, `hora`, `segundos`) VALUES
(1, '                ', 1, 1, '18/11/2014', '00:05:37', '1416287137'),
(2, 'hola mi nombre es eder', 1, 1, '18/11/2014', '00:05:50', '1416287150'),
(3, '  jejejej              ', 1, 1, '18/11/2014', '00:11:44', '1416287504'),
(4, 'loquillo        ', 1, 1, '18/11/2014', '00:12:27', '1416287547'),
(5, 'soy eder', 1, 1, '18/11/2014', '00:14:04', '1416287644'),
(6, 'soy leo\n', 1, 1, '26/11/2014', '22:05:18', '1417057518'),
(7, '                asdasd', 1, 1, '26/11/2014', '23:52:16', '1417063936');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_polizas`
--

CREATE TABLE IF NOT EXISTS `comentarios_polizas` (
`id_comentario` int(11) NOT NULL,
  `contenido` varchar(800) NOT NULL,
  `id_poliza` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `segundos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_polizas`
--

INSERT INTO `comentarios_polizas` (`id_comentario`, `contenido`, `id_poliza`, `id_administrador`, `fecha`, `hora`, `segundos`) VALUES
(4, 'Soy Luisa                ', 1, 1, '12/1/2015', '00:46:13', 1421041573),
(5, 'hola', 1, 1, '12/1/2015', '00:46:31', 1421041591),
(6, 'hola                ', 1, 1, '12/1/2015', '00:47:56', 1421041676),
(7, ' Me gusta esta poliza              ', 1, 1, '12/1/2015', '00:52:40', 1421041960),
(8, 'me gusta esta poliza                ', 2, 1, '12/1/2015', '00:53:25', 1421042005),
(9, '  hola q tal              ', 4, 1, '12/1/2015', '00:56:08', 1421042168),
(16, '                hola\n', 1, 1, '12/1/2015', '01:19:10', 1421043550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_tutela`
--

CREATE TABLE IF NOT EXISTS `comentarios_tutela` (
`id_comentario` int(11) NOT NULL,
  `contenido` varchar(800) NOT NULL,
  `id_tutela` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `segundos` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='tabla';

--
-- Volcado de datos para la tabla `comentarios_tutela`
--

INSERT INTO `comentarios_tutela` (`id_comentario`, `contenido`, `id_tutela`, `id_asesor`, `fecha`, `hora`, `segundos`) VALUES
(1, ' hola               ', 1, 1, '16/11/2014', '19:38:14', 1416184694),
(12, '                hola', 1, 2, '11/11/2014', '14:38:43', 1415734723),
(13, '                hola', 1, 2, '11/11/2014', '14:45:37', 1415735137),
(15, '  yo bien y tu que tal              ', 1, 1, '11/11/2014', '14:48:16', 1415735296),
(16, ' excelente :D               ', 1, 2, '11/11/2014', '14:48:44', 1415735324),
(17, 'hola', 1, 1, '26/11/2014', '22:02:15', 1417057335),
(18, 'hola\n', 1, 1, '26/11/2014', '22:37:03', 1417059423),
(19, '     hhhhh           ', 1, 1, '26/11/2014', '23:43:00', 1417063380),
(20, 'sdsd', 1, 1, '26/11/2014', '23:44:32', 1417063472),
(21, 'hola', 1, 1, '26/11/2014', '23:45:30', 1417063530),
(22, 'estas bien\n', 1, 1, '26/11/2014', '23:45:38', 1417063538),
(23, '', 1, 1, '26/11/2014', '23:45:40', 1417063540);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conciliacion`
--

CREATE TABLE IF NOT EXISTS `conciliacion` (
`id_conciliacion` int(11) NOT NULL,
  `radicado` int(11) NOT NULL,
  `fecha_peticion` varchar(10) NOT NULL,
  `convocante` int(11) NOT NULL,
  `convocado` smallint(6) NOT NULL,
  `notificacion` varchar(10) NOT NULL,
  `cuantia` decimal(20,0) NOT NULL,
  `pretensiones` text NOT NULL,
  `fecha_comite_conciliacion` varchar(10) NOT NULL,
  `audiencia` varchar(10) NOT NULL,
  `aprobacion` text,
  `resolucion_pago` text,
  `fecha_pago` varchar(10) DEFAULT NULL,
  `accion_repeticion` text,
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conciliacion`
--

INSERT INTO `conciliacion` (`id_conciliacion`, `radicado`, `fecha_peticion`, `convocante`, `convocado`, `notificacion`, `cuantia`, `pretensiones`, `fecha_comite_conciliacion`, `audiencia`, `aprobacion`, `resolucion_pago`, `fecha_pago`, `accion_repeticion`, `archivo`) VALUES
(4, 12, '11/04/2014', 53, 1, '11/12/2014', '111111111111111', 'sdsdsdsdsd', '11/26/2014', '11/20/2014', '2', '', '02/08/2014', '', '../archivos/7fe2be_planilla_de_conciliaciones.pdf'),
(5, 233, '11/25/2014', 29, 1, '11/28/2014', '12333333', 'asdad', '11/28/2014', '11/30/2014', '2', '', '04/08/2014', '', '../archivos/dad785_planilla_de_conciliaciones.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocado`
--

CREATE TABLE IF NOT EXISTS `convocado` (
  `id_convocado` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convocado`
--

INSERT INTO `convocado` (`id_convocado`, `nombre`) VALUES
(1, 'Universidad de la Guajira');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
`id_dependencias` tinyint(4) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id_dependencias`, `nombre`) VALUES
(1, 'No definido'),
(2, 'audivisuales'),
(3, 'Admision'),
(4, 'Ciencias Económicas y Administrativas '),
(5, 'Facultad de la Etnoeducacion'),
(6, 'Bienestar Universitario'),
(7, 'Biblioteca Nelfy Abuchaide'),
(8, 'Contratación, Bloque Administrativo'),
(9, 'Oficina de Talento Humano, Bloque Administrativo'),
(10, 'Red de Investigación, Bloque Administrativo'),
(11, 'Facultad de ingeniería ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_accion`
--

CREATE TABLE IF NOT EXISTS `dmo_accion` (
`id_accion` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_accion`
--

INSERT INTO `dmo_accion` (`id_accion`, `nombre`) VALUES
(1, 'ReparaciÃ³n Directa'),
(2, 'u'),
(3, 'nulidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_apelacion`
--

CREATE TABLE IF NOT EXISTS `dmo_apelacion` (
`id_apelacion` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_apelacion`
--

INSERT INTO `dmo_apelacion` (`id_apelacion`, `nombre`) VALUES
(1, 'Apelacion'),
(2, 'Alegatos'),
(3, 'Apelacion de Sentencia'),
(4, 'Al despacho a Sentencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_clase`
--

CREATE TABLE IF NOT EXISTS `dmo_clase` (
`id_clase` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_clase`
--

INSERT INTO `dmo_clase` (`id_clase`, `nombre`) VALUES
(1, 'interes particular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_demanda`
--

CREATE TABLE IF NOT EXISTS `dmo_demanda` (
`id_demanda` int(11) NOT NULL,
  `radicado` int(11) NOT NULL,
  `id_accion` smallint(6) NOT NULL,
  `notificacion` varchar(15) NOT NULL,
  `id_demandante` int(11) NOT NULL,
  `id_demandado` smallint(6) NOT NULL,
  `id_juzgado` smallint(6) NOT NULL,
  `audiencia1` varchar(10) DEFAULT NULL,
  `audiencia2` varchar(10) DEFAULT NULL,
  `cambio_radicado` text,
  `cuantia` varchar(20) NOT NULL,
  `pretensiones` text NOT NULL,
  `contestacion` varchar(15) NOT NULL,
  `id_apelacion` varchar(10) DEFAULT NULL,
  `conciliacion` text,
  `pruebas` text NOT NULL,
  `alegatos` text NOT NULL,
  `fallo_1` text,
  `fallo_2` text,
  `id_proceso` smallint(6) NOT NULL,
  `traslado_demanda` text,
  `impugnacion` text,
  `setencia` text,
  `observaciones` text,
  `id_asesor` int(11) NOT NULL,
  `archivo` varchar(100) NOT NULL,
  `id_resultado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_demanda`
--

INSERT INTO `dmo_demanda` (`id_demanda`, `radicado`, `id_accion`, `notificacion`, `id_demandante`, `id_demandado`, `id_juzgado`, `audiencia1`, `audiencia2`, `cambio_radicado`, `cuantia`, `pretensiones`, `contestacion`, `id_apelacion`, `conciliacion`, `pruebas`, `alegatos`, `fallo_1`, `fallo_2`, `id_proceso`, `traslado_demanda`, `impugnacion`, `setencia`, `observaciones`, `id_asesor`, `archivo`, `id_resultado`) VALUES
(1, 147, 1, '01/13/2015', 12, 2011, 4, '01/27/2015', '03/05/2014', 'No', '1478523697', 'Que se haga Juzticia', '01/13/2015', '', '', 'VIdeos y audios', 'Las Pruebas son contundentes', '', '', 4, 'No', '', '', '   ', 1, '../archivos/8b4457_planilla_de_conciliaciones.pdf', 1),
(2, 234, 1, '01/06/2015', 9, 2011, 6, '01/27/2015', '02/05/2014', 'No', '123666550', 'sdfsdf', '01/27/2015', '3', 'sdfsdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfdsggggggggggggggggggggggggggggggggggggggggggggggg hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'sfsdfsdfsdf', 4, 'No', '', 'sdfsdfsdfdsf', '  sdfsdfsdfsdfsdf', 1, '../archivos/e259c9_chart.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_demandado`
--

CREATE TABLE IF NOT EXISTS `dmo_demandado` (
`id_demandado` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2012 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_demandado`
--

INSERT INTO `dmo_demandado` (`id_demandado`, `nombre`) VALUES
(2011, 'Universidad de la Guajira');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_derecho`
--

CREATE TABLE IF NOT EXISTS `dmo_derecho` (
`id_derechopeticion` int(6) NOT NULL,
  `fecharecibido` varchar(10) NOT NULL,
  `id_peticionario` int(11) NOT NULL,
  `id_apoderado` int(11) NOT NULL,
  `id_asesor` int(6) NOT NULL,
  `id_clase` int(6) NOT NULL,
  `id_peticion` int(6) NOT NULL,
  `id_estado` int(6) NOT NULL,
  `vencimientotermino` varchar(10) NOT NULL,
  `respuesta` varchar(200) NOT NULL,
  `archivo` varchar(50) NOT NULL,
  `id_resultado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_derecho`
--

INSERT INTO `dmo_derecho` (`id_derechopeticion`, `fecharecibido`, `id_peticionario`, `id_apoderado`, `id_asesor`, `id_clase`, `id_peticion`, `id_estado`, `vencimientotermino`, `respuesta`, `archivo`, `id_resultado`) VALUES
(2, '11/04/2014', 4, 12, 1, 1, 1, 2, '11/27/2014', '11/29/2014', '../archivos/a2bfad_planilla_de_conciliaciones.pdf', 1),
(3, '01/06/2015', 7, 0, 1, 1, 2, 1, '01/20/2015', '01/30/2015', '../archivos/aecaa7_Certificado.pdf', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_estado`
--

CREATE TABLE IF NOT EXISTS `dmo_estado` (
`id_estado` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_estado`
--

INSERT INTO `dmo_estado` (`id_estado`, `nombre`) VALUES
(1, 'En tramite'),
(2, 'Proceso Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_fallo_instancia`
--

CREATE TABLE IF NOT EXISTS `dmo_fallo_instancia` (
  `radicado` int(11) NOT NULL,
  `instancia` varchar(40) NOT NULL,
  `dato` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_fallo_instancia`
--

INSERT INTO `dmo_fallo_instancia` (`radicado`, `instancia`, `dato`) VALUES
(20131226, 'primera instancia', 'En tramite'),
(20131227, 'primera', 'todo el proceso marcha en tramite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_juzgado`
--

CREATE TABLE IF NOT EXISTS `dmo_juzgado` (
`id_juzgado` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_juzgado`
--

INSERT INTO `dmo_juzgado` (`id_juzgado`, `nombre`) VALUES
(1, 'ju'),
(2, 'ju'),
(3, 'ju'),
(4, 'Juzgado Primero de Riohacha'),
(5, 'Juzgado Principal Maicao'),
(6, 'Fiscalia General de la Nacion, Seccional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_peticion`
--

CREATE TABLE IF NOT EXISTS `dmo_peticion` (
`id_peticion` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_peticion`
--

INSERT INTO `dmo_peticion` (`id_peticion`, `nombre`) VALUES
(1, 'cesantias retroactivas'),
(2, 'Fecha de pago de prestaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_proceso`
--

CREATE TABLE IF NOT EXISTS `dmo_proceso` (
`id_proceso` smallint(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dmo_proceso`
--

INSERT INTO `dmo_proceso` (`id_proceso`, `nombre`) VALUES
(1, 'Proceso o'),
(2, 'Proceso Ordinario'),
(4, 'Proceso Ejecutivo'),
(5, 'Proceso Disciplinario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dmo_requerimiento`
--

CREATE TABLE IF NOT EXISTS `dmo_requerimiento` (
`id_requerimiento` smallint(6) NOT NULL,
  `fecha` date NOT NULL,
  `anunciante` varchar(40) NOT NULL,
  `asunto` text NOT NULL,
  `dias` varchar(20) NOT NULL,
  `plazo_vencimineto` date NOT NULL,
  `id_asesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
`id_estado` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre`) VALUES
(1, 'Ganada(o)'),
(2, 'Perdida(o)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
`id_nivel` tinyint(1) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nivel`) VALUES
(1, 'Jefe'),
(2, 'Secretaria'),
(3, 'Asesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` bigint(11) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `fechanacimiento` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sexo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `apellido`, `nombre`, `direccion`, `telefono`, `fechanacimiento`, `email`, `sexo`) VALUES
(4, 'Diaz Granados', 'Martin Elias', 'calle 7 #12b 17 ', '3001478523', 'undefined', 'martin@gmail.com', 'masculino'),
(6, 'Diaz Toro', 'Eder Alberto', 'calle 20 #12c 39', '3003919455', '01/01/1991', 'ederdiaz_@hotmail.com', 'masculino'),
(7, 'Quinte', 'Jaider ', 'calle 14 # 12 234', '3002587741', '08/05/1954', 'jaiber@hotmail.com', 'masculino'),
(8, 'Vieco', 'Luis', 'Crr 8 #23 45', '326547888', '0sdsdsd', 'sdfdsf', 'sdfsfd'),
(9, 'Torres Cuadrado', 'Yulieth Yuleidys', 'crr 7 #19 45', '3016617574', '03/03/1990', 'yuleidys@gmail.com', 'femenina'),
(10, 'Pomarico', 'Pilar', 'calle 11 # 12b 14', '3012587411', '01/02/85', '', 'feminina'),
(12, 'Fernandez', 'Leonardo', 'crr 14 #14 34', '3002587411', '01/02/1989', 'leo@gmail.com', 'masculino'),
(13, 'Toro FInce', 'Carmen Alicia', 'calle 20#12c  13', '9547896', '01/01/01', 'adasdasd', 'asdasd'),
(14, 'Rodriguez', 'JAmes', 'cale #######', ' 3025544444', 'fgdgdfgfd', 'dffgdfg', 'dfgfdgdfgdf'),
(15, 'Ospina', 'David', 'cale #', '342434', '11/26/2014', '3454hotmail.com', 'Masculino'),
(27, 'Yepes', 'Mario Alberto', 'calle 34343434', '21548799', '11/27/2014', 'sdsdf', 'Masculino'),
(28, 'Yepes', 'Mario Alberto', 'calle 34343434', '21548799', '11/27/2014', 'sdsdf', 'Masculino'),
(29, 'Vaca', 'Carlos', 'calle $$$$', '12364789', '11/16/2014', 'adasd', 'Masculino'),
(30, 'Armero', 'stifler', 'calee44444', '1236547896', '11/29/2014', 'dsd', 'Masculino'),
(31, 'Mejia', 'estiben', 'calle 21 444', '3215456687', '05/14/2015', 'asssds', 'Masculino'),
(38, 'Martines', 'Jackson', 'calle 14 25 87e', '1478253699', '11/24/2014', 'ederhot.com', 'Masculino'),
(40, 'Ibarra Freyle', 'David Jose', 'calle 20 #12c 35 ', '32165487', '11/04/2014', 'tomu@hotmail.ccom', 'Masculino'),
(47, 'zapata', 'cristian', 'crr 12 c 34 5', '1475222', '09/03/2001', 'sdsdsd', 'Masculino'),
(48, 'Falcao Garcia', 'Radamel ', 'calle 20', '1234', '10/01/2014', 'sdfsdf', 'Masculino'),
(49, 'Vargas', 'Camilo', 'calle 34 # 23 23 ', '123455622', '10/31/2011', 'dfggdg', 'Masculino'),
(50, 'Sanchez', 'Sanchez', 'crr 104 23 23', '231546977', '11/02/2014', 'san@hot.com', 'Masculino'),
(51, 'Romero Cuello', 'Sandy ', 'calle 12 #23 45', '302654789', '01/05/1970', 'sandy@gmail.com', 'Masculino'),
(52, 'Mebarack', 'Shakira ', 'calle 67 "23 34', '300987772', '11/28/2014', 'e@hotmail.com', 'Masculino'),
(53, 'Cuadrado', 'Marbel ', 'Crr 34 #15-40', '30258741', '03/05/2000', 'asdasdasd', 'Femenino'),
(1598741, 'pomarico', 'Pilar', 'calle 58 #24 58', '7289899', '02/04/1968', 'picapopi@gmail.com', 'Femenino'),
(147852369, 'Arebalo Calzadilla', 'Carlos Antonio', 'carrera 4 # 14 74', '7295486', '02/16/2015', 'arebacalza@hotmail.com', 'Masculino'),
(1118835324, 'Diaz Toro', 'Maria Fernanda ', 'Calle 58 # 25 85', '302154879', '02/21/1991', 'mjose@hotmail.com', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_asegurado`
--

CREATE TABLE IF NOT EXISTS `plz_asegurado` (
`id_asegurado` tinyint(4) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_asegurado`
--

INSERT INTO `plz_asegurado` (`id_asegurado`, `nombre`) VALUES
(1, 'Universidad de la Guajira'),
(2, 'Bloque de iNGENIERIA'),
(4, 'Sala de Redes (Bloque II)'),
(5, 'Leonardo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_cargos`
--

CREATE TABLE IF NOT EXISTS `plz_cargos` (
`id_cargos` tinyint(4) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_cargos`
--

INSERT INTO `plz_cargos` (`id_cargos`, `nombre`) VALUES
(1, 'No definido'),
(2, 'secretaria'),
(3, 'Asesor'),
(4, 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_contrato`
--

CREATE TABLE IF NOT EXISTS `plz_contrato` (
  `id_contrato` int(11) NOT NULL,
  `objeto_contrato` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_contrato`
--

INSERT INTO `plz_contrato` (`id_contrato`, `objeto_contrato`) VALUES
(0, ''),
(12, 'bsduhdk'),
(89, 'gffujhu'),
(219034, 'hxkkxnh'),
(237890, 'nxbntrusi'),
(2341517, 'nxjhxjhcx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_entidadaseguradora`
--

CREATE TABLE IF NOT EXISTS `plz_entidadaseguradora` (
`id_entidad` tinyint(4) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_entidadaseguradora`
--

INSERT INTO `plz_entidadaseguradora` (`id_entidad`, `nombre`) VALUES
(2, 'SURAMERICANA'),
(3, 'Previsora seguro'),
(4, 'hola'),
(6, 'Fallabela'),
(7, 'Previsora de Seguros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_poliza`
--

CREATE TABLE IF NOT EXISTS `plz_poliza` (
  `id_poliza` int(11) NOT NULL,
  `fecha_expedicion` varchar(10) NOT NULL,
  `vigencia_desde` varchar(10) NOT NULL,
  `vigencia_hasta` varchar(10) NOT NULL,
  `numero_contrato` int(11) NOT NULL,
  `objeto_contrato` text NOT NULL,
  `valorasegurado` bigint(20) NOT NULL,
  `id_entidad` tinyint(4) NOT NULL,
  `id_riesgoasegurado` smallint(6) NOT NULL,
  `id_asegurado` tinyint(4) NOT NULL,
  `id_tipodeamparo` tinyint(4) NOT NULL,
  `id_tomador` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_poliza`
--

INSERT INTO `plz_poliza` (`id_poliza`, `fecha_expedicion`, `vigencia_desde`, `vigencia_hasta`, `numero_contrato`, `objeto_contrato`, `valorasegurado`, `id_entidad`, `id_riesgoasegurado`, `id_asegurado`, `id_tipodeamparo`, `id_tomador`, `id_supervisor`, `archivo`) VALUES
(1, '01/06/2015', '01/12/2015', '01/26/2015', 1234, 'asdsad', 1234123123, 3, 2, 2, 3, 9, 3, '../archivos/4fbd66_planilla_de_conciliaciones.pdf'),
(2, '01/11/2015', '01/12/2015', '01/26/2015', 12, 'jhj', 123300000000, 3, 2, 1, 1, 9, 3, '../archivos/08298a_planilla_de_conciliaciones.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_riesgoasegurado`
--

CREATE TABLE IF NOT EXISTS `plz_riesgoasegurado` (
`id_riesgoasegurado` smallint(6) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_riesgoasegurado`
--

INSERT INTO `plz_riesgoasegurado` (`id_riesgoasegurado`, `nombre`, `fecha`, `url`) VALUES
(1, 'contratacion 18 del 2013', '2013-11-20', 'www.contratacionuniguajira.com'),
(2, 'contratacion docentes', '2013-03-03', 'www.pagina.com'),
(3, 'contratacion', '2013-04-03', 'www.uniguajira.com'),
(4, 'Accidentes con mutilaciÃ³n', '0000-00-00', ''),
(5, 'Muerte', '0000-00-00', ''),
(6, 'MutilaciÃ³n', '02/08/2014', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_supervisor`
--

CREATE TABLE IF NOT EXISTS `plz_supervisor` (
`id_supervisor` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `id_dependencias` tinyint(4) NOT NULL,
  `id_cargos` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_supervisor`
--

INSERT INTO `plz_supervisor` (`id_supervisor`, `nombre`, `id_dependencias`, `id_cargos`) VALUES
(1, '', 1, 1),
(2, 'Adanies Diaz', 0, 3),
(3, 'Rafael Santos', 0, 3),
(4, 'Silvestre Dangond', 2, 3),
(5, 'Luisa Herrera', 7, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_tipodeamparo`
--

CREATE TABLE IF NOT EXISTS `plz_tipodeamparo` (
`id_tipodeamparo` tinyint(4) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_tipodeamparo`
--

INSERT INTO `plz_tipodeamparo` (`id_tipodeamparo`, `nombre`) VALUES
(1, 'auxilio contrato'),
(2, 'Medicina General Maicao'),
(3, 'Cumplimiento de Contrato'),
(4, 'Cumplimiento de Contrato'),
(5, 'contrato terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plz_tomador`
--

CREATE TABLE IF NOT EXISTS `plz_tomador` (
`id_tomador` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `id_dependencias` tinyint(4) NOT NULL,
  `id_cargos` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plz_tomador`
--

INSERT INTO `plz_tomador` (`id_tomador`, `nombre`, `id_dependencias`, `id_cargos`) VALUES
(9, 'Churo Diaz', 8, 3),
(10, 'Leonardo ', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
`id_t` int(11) NOT NULL,
  `f1` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id_t`, `f1`) VALUES
(1, '2014-06-05'),
(2, '2014-06-05'),
(3, '2014-06-06'),
(4, '2014-06-07'),
(5, '2014-06-08'),
(6, '2014-06-09'),
(7, '2014-06-10'),
(8, '2014-06-11'),
(9, '2014-06-12'),
(10, '2014-06-13'),
(11, '2014-06-14'),
(12, '2014-06-15'),
(13, '2014-06-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion_docente`
--

CREATE TABLE IF NOT EXISTS `resolucion_docente` (
  `numero_resolucion` bigint(20) NOT NULL,
  `nit_cedula` int(11) NOT NULL,
  `valor` bigint(20) NOT NULL,
  `valor_total` bigint(20) NOT NULL,
  `documento_completo` text NOT NULL,
  `estado_docente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resolucion_docente`
--

INSERT INTO `resolucion_docente` (`numero_resolucion`, `nit_cedula`, `valor`, `valor_total`, `documento_completo`, `estado_docente`) VALUES
(12, 0, 2000000, 2000000, 'si', 'Laborando'),
(23, 0, 24000, 2147483647, 'si', 'si'),
(245, 0, 23000000, 3000000, 'si', 'Laborando'),
(2013100, 0, 1200000, 2400000, 'si', 'Laborando'),
(2013101, 0, 34, 68, 'si', 'si'),
(2013103, 0, 34, 68, 'si', 'Laborando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
`id_sexo` tinyint(1) NOT NULL,
  `sexo` varchar(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `sexo`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutelas`
--

CREATE TABLE IF NOT EXISTS `tutelas` (
`id_tutela` int(11) NOT NULL,
  `radicado` int(11) NOT NULL,
  `accionante` int(11) NOT NULL,
  `accionado` smallint(6) NOT NULL,
  `asesor_encargado` smallint(6) NOT NULL,
  `pretensiones` text NOT NULL,
  `contestacion` varchar(10) NOT NULL,
  `archivo` varchar(50) NOT NULL,
  `fallo_1` text,
  `traslado_demanda` text,
  `impugnacion` text,
  `fallo_2` text,
  `id_resultado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutelas`
--

INSERT INTO `tutelas` (`id_tutela`, `radicado`, `accionante`, `accionado`, `asesor_encargado`, `pretensiones`, `contestacion`, `archivo`, `fallo_1`, `traslado_demanda`, `impugnacion`, `fallo_2`, `id_resultado`) VALUES
(1, 0, 8, 1, 1, 'loka loka1', '11/04/2015', '../archivos/75aefc_ca.crt', 'Se determino que la tutela se efectuara a mas tardar en un plazo de 6 meses, y se retribuira al afectado lo pactado', 'no', '', 'Se determino que la tutela se efectuara a mas tardar en un plazo de 6 meses, y se retribuira al afectado lo pactado', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
 ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
 ADD PRIMARY KEY (`archivo`);

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
 ADD PRIMARY KEY (`id_asesor`);

--
-- Indices de la tabla `avances_tramite`
--
ALTER TABLE `avances_tramite`
 ADD PRIMARY KEY (`id_avance`), ADD KEY `dependencia` (`id_dependencias`), ADD KEY `id_dependencias` (`id_dependencias`), ADD KEY `id_dependencias_2` (`id_dependencias`);

--
-- Indices de la tabla `comentarios_avances`
--
ALTER TABLE `comentarios_avances`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `comentarios_conciliacion`
--
ALTER TABLE `comentarios_conciliacion`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `comentarios_demanda`
--
ALTER TABLE `comentarios_demanda`
 ADD PRIMARY KEY (`id_comentario`), ADD KEY `id_demanda` (`id_demanda`,`id_asesor`);

--
-- Indices de la tabla `comentarios_derechos`
--
ALTER TABLE `comentarios_derechos`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `comentarios_polizas`
--
ALTER TABLE `comentarios_polizas`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `comentarios_tutela`
--
ALTER TABLE `comentarios_tutela`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `conciliacion`
--
ALTER TABLE `conciliacion`
 ADD PRIMARY KEY (`id_conciliacion`), ADD UNIQUE KEY `radicado` (`radicado`), ADD KEY `convocante` (`convocante`), ADD KEY `convocado` (`convocado`);

--
-- Indices de la tabla `convocado`
--
ALTER TABLE `convocado`
 ADD PRIMARY KEY (`id_convocado`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
 ADD PRIMARY KEY (`id_dependencias`);

--
-- Indices de la tabla `dmo_accion`
--
ALTER TABLE `dmo_accion`
 ADD PRIMARY KEY (`id_accion`);

--
-- Indices de la tabla `dmo_apelacion`
--
ALTER TABLE `dmo_apelacion`
 ADD PRIMARY KEY (`id_apelacion`);

--
-- Indices de la tabla `dmo_clase`
--
ALTER TABLE `dmo_clase`
 ADD PRIMARY KEY (`id_clase`);

--
-- Indices de la tabla `dmo_demanda`
--
ALTER TABLE `dmo_demanda`
 ADD PRIMARY KEY (`id_demanda`), ADD UNIQUE KEY `radicado` (`radicado`), ADD KEY `id_demandado` (`id_demandado`), ADD KEY `id_demandante` (`id_demandante`), ADD KEY `id_accion` (`id_accion`), ADD KEY `id_juzgado` (`id_juzgado`), ADD KEY `id_apelacion` (`id_apelacion`), ADD KEY `id_proceso` (`id_proceso`), ADD KEY `id_asesor` (`id_asesor`), ADD KEY `id_asesor_2` (`id_asesor`);

--
-- Indices de la tabla `dmo_demandado`
--
ALTER TABLE `dmo_demandado`
 ADD PRIMARY KEY (`id_demandado`);

--
-- Indices de la tabla `dmo_derecho`
--
ALTER TABLE `dmo_derecho`
 ADD PRIMARY KEY (`id_derechopeticion`), ADD KEY `id_peticionario` (`id_peticionario`), ADD KEY `id_apoderado` (`id_apoderado`), ADD KEY `id_asesor` (`id_asesor`), ADD KEY `id_clase` (`id_clase`), ADD KEY `id_peticion` (`id_peticion`), ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `dmo_estado`
--
ALTER TABLE `dmo_estado`
 ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `dmo_fallo_instancia`
--
ALTER TABLE `dmo_fallo_instancia`
 ADD PRIMARY KEY (`radicado`);

--
-- Indices de la tabla `dmo_juzgado`
--
ALTER TABLE `dmo_juzgado`
 ADD PRIMARY KEY (`id_juzgado`);

--
-- Indices de la tabla `dmo_peticion`
--
ALTER TABLE `dmo_peticion`
 ADD PRIMARY KEY (`id_peticion`);

--
-- Indices de la tabla `dmo_proceso`
--
ALTER TABLE `dmo_proceso`
 ADD PRIMARY KEY (`id_proceso`);

--
-- Indices de la tabla `dmo_requerimiento`
--
ALTER TABLE `dmo_requerimiento`
 ADD PRIMARY KEY (`id_requerimiento`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
 ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
 ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
 ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `plz_asegurado`
--
ALTER TABLE `plz_asegurado`
 ADD PRIMARY KEY (`id_asegurado`);

--
-- Indices de la tabla `plz_cargos`
--
ALTER TABLE `plz_cargos`
 ADD PRIMARY KEY (`id_cargos`);

--
-- Indices de la tabla `plz_contrato`
--
ALTER TABLE `plz_contrato`
 ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `plz_entidadaseguradora`
--
ALTER TABLE `plz_entidadaseguradora`
 ADD PRIMARY KEY (`id_entidad`), ADD KEY `id_entidad` (`id_entidad`), ADD KEY `id_entidad_2` (`id_entidad`), ADD KEY `id_entidad_3` (`id_entidad`), ADD KEY `id_entidad_4` (`id_entidad`);

--
-- Indices de la tabla `plz_poliza`
--
ALTER TABLE `plz_poliza`
 ADD PRIMARY KEY (`id_poliza`), ADD KEY `id_entidad` (`id_entidad`,`id_riesgoasegurado`,`id_asegurado`,`id_tipodeamparo`), ADD KEY `id_riesgoasegurado` (`id_riesgoasegurado`), ADD KEY `id_asegurado` (`id_asegurado`), ADD KEY `id_tipodeamparo` (`id_tipodeamparo`), ADD KEY `id_tomador` (`id_tomador`), ADD KEY `id_supervisor` (`id_supervisor`);

--
-- Indices de la tabla `plz_riesgoasegurado`
--
ALTER TABLE `plz_riesgoasegurado`
 ADD PRIMARY KEY (`id_riesgoasegurado`);

--
-- Indices de la tabla `plz_supervisor`
--
ALTER TABLE `plz_supervisor`
 ADD PRIMARY KEY (`id_supervisor`), ADD KEY `id_dependencias` (`id_dependencias`), ADD KEY `id_cargos` (`id_cargos`);

--
-- Indices de la tabla `plz_tipodeamparo`
--
ALTER TABLE `plz_tipodeamparo`
 ADD PRIMARY KEY (`id_tipodeamparo`);

--
-- Indices de la tabla `plz_tomador`
--
ALTER TABLE `plz_tomador`
 ADD PRIMARY KEY (`id_tomador`), ADD KEY `id_dependencias` (`id_dependencias`), ADD KEY `id_cargos` (`id_cargos`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
 ADD PRIMARY KEY (`id_t`);

--
-- Indices de la tabla `resolucion_docente`
--
ALTER TABLE `resolucion_docente`
 ADD PRIMARY KEY (`numero_resolucion`), ADD KEY `nit_cedula` (`nit_cedula`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
 ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tutelas`
--
ALTER TABLE `tutelas`
 ADD PRIMARY KEY (`id_tutela`), ADD UNIQUE KEY `radicado` (`radicado`), ADD KEY `accionante` (`accionante`), ADD KEY `accionado` (`accionado`), ADD KEY `asesor_encargado` (`asesor_encargado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `id_nivel` (`id_nivel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `avances_tramite`
--
ALTER TABLE `avances_tramite`
MODIFY `id_avance` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2013166;
--
-- AUTO_INCREMENT de la tabla `comentarios_avances`
--
ALTER TABLE `comentarios_avances`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `comentarios_conciliacion`
--
ALTER TABLE `comentarios_conciliacion`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `comentarios_demanda`
--
ALTER TABLE `comentarios_demanda`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `comentarios_derechos`
--
ALTER TABLE `comentarios_derechos`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `comentarios_polizas`
--
ALTER TABLE `comentarios_polizas`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `comentarios_tutela`
--
ALTER TABLE `comentarios_tutela`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `conciliacion`
--
ALTER TABLE `conciliacion`
MODIFY `id_conciliacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
MODIFY `id_dependencias` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `dmo_accion`
--
ALTER TABLE `dmo_accion`
MODIFY `id_accion` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `dmo_apelacion`
--
ALTER TABLE `dmo_apelacion`
MODIFY `id_apelacion` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `dmo_clase`
--
ALTER TABLE `dmo_clase`
MODIFY `id_clase` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `dmo_demanda`
--
ALTER TABLE `dmo_demanda`
MODIFY `id_demanda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dmo_demandado`
--
ALTER TABLE `dmo_demandado`
MODIFY `id_demandado` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2012;
--
-- AUTO_INCREMENT de la tabla `dmo_derecho`
--
ALTER TABLE `dmo_derecho`
MODIFY `id_derechopeticion` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `dmo_estado`
--
ALTER TABLE `dmo_estado`
MODIFY `id_estado` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dmo_juzgado`
--
ALTER TABLE `dmo_juzgado`
MODIFY `id_juzgado` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `dmo_peticion`
--
ALTER TABLE `dmo_peticion`
MODIFY `id_peticion` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dmo_proceso`
--
ALTER TABLE `dmo_proceso`
MODIFY `id_proceso` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `dmo_requerimiento`
--
ALTER TABLE `dmo_requerimiento`
MODIFY `id_requerimiento` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
MODIFY `id_nivel` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `plz_asegurado`
--
ALTER TABLE `plz_asegurado`
MODIFY `id_asegurado` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `plz_cargos`
--
ALTER TABLE `plz_cargos`
MODIFY `id_cargos` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `plz_entidadaseguradora`
--
ALTER TABLE `plz_entidadaseguradora`
MODIFY `id_entidad` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `plz_riesgoasegurado`
--
ALTER TABLE `plz_riesgoasegurado`
MODIFY `id_riesgoasegurado` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `plz_supervisor`
--
ALTER TABLE `plz_supervisor`
MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `plz_tipodeamparo`
--
ALTER TABLE `plz_tipodeamparo`
MODIFY `id_tipodeamparo` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `plz_tomador`
--
ALTER TABLE `plz_tomador`
MODIFY `id_tomador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
MODIFY `id_sexo` tinyint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tutelas`
--
ALTER TABLE `tutelas`
MODIFY `id_tutela` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tutelas`
--
ALTER TABLE `tutelas`
ADD CONSTRAINT `tutelas_ibfk_3` FOREIGN KEY (`accionado`) REFERENCES `convocado` (`id_convocado`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
