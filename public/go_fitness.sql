-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2020 a las 03:05:11
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `go_fitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Pecho'),
(2, 'Pierna'),
(3, 'Brazo'),
(4, 'Gluteos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `telefono` varchar(16) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `estatura` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `telefono`, `direccion`, `ciudad`, `estado`, `peso`, `estatura`) VALUES
(2, '1234567890', 'na', 'na', 'na', '90.00', '1.73');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demostrativos`
--

CREATE TABLE `demostrativos` (
  `id_demostrativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demostrativos`
--

INSERT INTO `demostrativos` (`id_demostrativo`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_membresia`
--

CREATE TABLE `descripcion_membresia` (
  `id_descripcion` int(11) NOT NULL,
  `id_tipo_membresia` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descripcion_membresia`
--

INSERT INTO `descripcion_membresia` (`id_descripcion`, `id_tipo_membresia`, `descripcion`) VALUES
(4, 1, 'no hay'),
(5, 2, 'no hay'),
(6, 3, 'si hay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios_rutina`
--

CREATE TABLE `ejercicios_rutina` (
  `id_ejercicio` int(11) NOT NULL,
  `id_rutina` int(11) NOT NULL,
  `nombre_ejercicio` varchar(255) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejercicios_rutina`
--

INSERT INTO `ejercicios_rutina` (`id_ejercicio`, `id_rutina`, `nombre_ejercicio`, `descripcion`) VALUES
(1, 4, 'Trepador', 'Te trepas hasta arriba como un chango'),
(2, 4, 'El mata paciones', 'Sentadilla con salto acrobatico'),
(3, 3, 'Mano', 'Aprieta el tubo con todas tus fuerzas y no lo sueltes'),
(4, 3, 'Agitando la vara', 'Sacude la vara muy rapidamente, pero con delicadesa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id_instructor` int(11) NOT NULL,
  `estudios` varchar(255) DEFAULT NULL,
  `experiencia` text,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`id_instructor`, `estudios`, `experiencia`, `foto`) VALUES
(3, 'bailarín exótico', 'Mover el bote a los vatos todos los días en el TableDance', 'no hay, esta bien pinche feo, parece changOso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `id_membresia` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `id_tipo_membresia` int(255) NOT NULL,
  `precio` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`id_membresia`, `id_periodo`, `id_tipo_membresia`, `precio`) VALUES
(4, 1, 1, '300.00'),
(5, 2, 1, '500.00'),
(6, 3, 1, '900.00'),
(7, 1, 2, '400.00'),
(8, 2, 2, '750.00'),
(9, 3, 2, '1500.00'),
(10, 1, 3, '900.00'),
(11, 2, 3, '1800.00'),
(13, 3, 3, '3200.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros_suscritos`
--

CREATE TABLE `miembros_suscritos` (
  `id_cliente` int(11) NOT NULL,
  `id_membresia` int(11) NOT NULL,
  `fecha_pago` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `miembros_suscritos`
--

INSERT INTO `miembros_suscritos` (`id_cliente`, `id_membresia`, `fecha_pago`) VALUES
(2, 6, '2020-06-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `nombre_noticia` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_suscripcion`
--

CREATE TABLE `periodo_suscripcion` (
  `id_periodo` int(11) NOT NULL,
  `periodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodo_suscripcion`
--

INSERT INTO `periodo_suscripcion` (`id_periodo`, `periodo`) VALUES
(1, 1),
(2, 6),
(3, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_rutina`
--

CREATE TABLE `permisos_rutina` (
  `id_tipo_membresia` int(11) NOT NULL,
  `id_rutina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos_rutina`
--

INSERT INTO `permisos_rutina` (`id_tipo_membresia`, `id_rutina`) VALUES
(1, 3),
(2, 3),
(2, 4),
(3, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Instructor'),
(4, 'Jefes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `id_rutina` int(11) NOT NULL,
  `equipamiento` text,
  `masculos_trabajar` text,
  `id_instructor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutina`
--

INSERT INTO `rutina` (`id_rutina`, `equipamiento`, `masculos_trabajar`, `id_instructor`) VALUES
(3, 'Mancuerna', 'Gluteos', 3),
(4, 'Tubo', 'Trasero y brazo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_memebresia`
--

CREATE TABLE `tipo_memebresia` (
  `id_tipo_membresia` int(11) NOT NULL,
  `nombre_membresia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_memebresia`
--

INSERT INTO `tipo_memebresia` (`id_tipo_membresia`, `nombre_membresia`) VALUES
(1, 'chida'),
(2, 'super chida'),
(3, 'te la mamaste');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `nombre_usuario`, `apellidos`, `fecha_nacimiento`, `correo`, `contraseña`, `nombre`) VALUES
(1, 1, 'fernanda', 'Oviedo', '1996-05-16', 'fernanda@gmail.com', '12345', 'Fernanda'),
(2, 2, 'oscar', 'Elías', '2020-06-01', 'oscar@gmail.com', '12345', 'Oscar'),
(3, 3, 'Juan', 'Padrón', '2020-06-01', 'juan@gmail.com', '12345', 'Juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre_video` varchar(255) DEFAULT NULL,
  `video_youtube` varchar(255) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id_video`, `id_categoria`, `nombre_video`, `video_youtube`, `descripcion`) VALUES
(1, 3, 'Duro', 'www.youtube.com', 'Video muy duro'),
(2, 4, 'mata grasa', 'www.youtube.com', 'entrenamiento muy duro'),
(3, 1, 'durisimo', 'www.youtube.com', 'Brazos de tamalera'),
(4, 2, 'Extremo 2.0', 'www.youtube.com', 'Chamorros bien macizos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `demostrativos`
--
ALTER TABLE `demostrativos`
  ADD PRIMARY KEY (`id_demostrativo`);

--
-- Indices de la tabla `descripcion_membresia`
--
ALTER TABLE `descripcion_membresia`
  ADD PRIMARY KEY (`id_descripcion`),
  ADD KEY `id_tipo_membresia` (`id_tipo_membresia`);

--
-- Indices de la tabla `ejercicios_rutina`
--
ALTER TABLE `ejercicios_rutina`
  ADD PRIMARY KEY (`id_ejercicio`),
  ADD KEY `id_video` (`id_rutina`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id_instructor`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`id_membresia`) USING BTREE,
  ADD UNIQUE KEY `id_periodo` (`id_periodo`,`id_tipo_membresia`),
  ADD KEY `id_tipo_membresia` (`id_tipo_membresia`);

--
-- Indices de la tabla `miembros_suscritos`
--
ALTER TABLE `miembros_suscritos`
  ADD PRIMARY KEY (`id_cliente`,`id_membresia`),
  ADD KEY `id_membresia` (`id_membresia`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `periodo_suscripcion`
--
ALTER TABLE `periodo_suscripcion`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `permisos_rutina`
--
ALTER TABLE `permisos_rutina`
  ADD PRIMARY KEY (`id_tipo_membresia`,`id_rutina`),
  ADD KEY `id_rutina` (`id_rutina`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`id_rutina`),
  ADD KEY `id_usuario` (`id_instructor`);

--
-- Indices de la tabla `tipo_memebresia`
--
ALTER TABLE `tipo_memebresia`
  ADD PRIMARY KEY (`id_tipo_membresia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `descripcion_membresia`
--
ALTER TABLE `descripcion_membresia`
  MODIFY `id_descripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ejercicios_rutina`
--
ALTER TABLE `ejercicios_rutina`
  MODIFY `id_ejercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `id_membresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo_suscripcion`
--
ALTER TABLE `periodo_suscripcion`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_memebresia`
--
ALTER TABLE `tipo_memebresia`
  MODIFY `id_tipo_membresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `demostrativos`
--
ALTER TABLE `demostrativos`
  ADD CONSTRAINT `demostrativos_ibfk_1` FOREIGN KEY (`id_demostrativo`) REFERENCES `video` (`id_video`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `descripcion_membresia`
--
ALTER TABLE `descripcion_membresia`
  ADD CONSTRAINT `descripcion_membresia_ibfk_1` FOREIGN KEY (`id_tipo_membresia`) REFERENCES `tipo_memebresia` (`id_tipo_membresia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejercicios_rutina`
--
ALTER TABLE `ejercicios_rutina`
  ADD CONSTRAINT `ejercicios_rutina_ibfk_1` FOREIGN KEY (`id_rutina`) REFERENCES `rutina` (`id_rutina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`id_instructor`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD CONSTRAINT `membresia_ibfk_1` FOREIGN KEY (`id_periodo`) REFERENCES `periodo_suscripcion` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membresia_ibfk_2` FOREIGN KEY (`id_tipo_membresia`) REFERENCES `tipo_memebresia` (`id_tipo_membresia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `miembros_suscritos`
--
ALTER TABLE `miembros_suscritos`
  ADD CONSTRAINT `miembros_suscritos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `miembros_suscritos_ibfk_2` FOREIGN KEY (`id_membresia`) REFERENCES `membresia` (`id_membresia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos_rutina`
--
ALTER TABLE `permisos_rutina`
  ADD CONSTRAINT `permisos_rutina_ibfk_1` FOREIGN KEY (`id_tipo_membresia`) REFERENCES `tipo_memebresia` (`id_tipo_membresia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_rutina_ibfk_2` FOREIGN KEY (`id_rutina`) REFERENCES `rutina` (`id_rutina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`id_rutina`) REFERENCES `video` (`id_video`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rutina_ibfk_2` FOREIGN KEY (`id_instructor`) REFERENCES `instructor` (`id_instructor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
