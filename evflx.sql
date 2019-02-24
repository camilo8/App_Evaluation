-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 19:11:26
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evflx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterios`
--

CREATE TABLE `criterios` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(260) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Grado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `criterios`
--

INSERT INTO `criterios` (`Id`, `Titulo`, `Descripcion`, `Grado_id`) VALUES
(1, 'Indicadores ', 'Desarrollo una curiosidad natural por lo que me rodea e indago desde diversos procesos cuestiones que son interesantes y me contribuyen a un aprendizaje a nivel colaborativo y  autónomo.', 1),
(2, 'Pensadores', 'Afronto de manera critica y creativa problemas complejos que me llevan a tomar desde mi propia iniciativa decisiones razonadas y éticas.', 1),
(3, 'Integros', 'Demuestro honestidad e imparcialidad frente mis actos y situaciones que enfrento con los demás.', 1),
(4, 'Audaces ', 'Exploro de manera independiente nuevas ideas, roles y estrategias, para así afrontar cambios, metas y desafíos desde la innovación y creatividad.', 1),
(5, 'Reflexivos ', ' Auto evaluó  mi aprendizaje como un proceso de crecimiento personal e intelectual.', 1),
(6, 'Informados  e instruidos ', ' Exploro conceptos, ideas y cuestiones relevantes a diversas disciplinas, las cuales me permiten comprometerme con un aprendizaje a nivel local  y mundial.', 1),
(7, 'Buenos comunicadores ', 'Expreso ideas e información con confianza, creatividad y asertividad en  diversas lenguas, lenguajes y formas de comunicación, siempre respetando las perspectivas de otros.', 1),
(8, 'Solidarios ', 'Muestro empatia, sensibilidad y respeto por las necesidades de los demás con el propósito de contribuir positiva mente en la vida de las personas y el medio ambiente.', 1),
(9, 'De Mente abiertas ', 'Aprecio y valoro mi historia personal y cultural, y así como estoy abierto a considerar los diferentes puntos de vista, perspectivas, valores y tradiciones de otras personas y comunidades', 1),
(10, 'Criterio de A6', 'DSFDFSDF', 2),
(11, 'Criterio de A6', 'DSFDFSDF', 2),
(12, 'criterio A6 ', 'SADSD', 2),
(13, 'criterio A6 ', 'SADSD', 2),
(14, 'De Mente abiertas ', 'ASA', 2),
(15, 'Hola mundo6', 'ADSFSF', 2),
(16, 'Hola Mundo9', 'ASDSAD', 2),
(17, 'Hola mundo4', 'SDSAD', 2),
(18, 'SDAA', 'SDASDSDSA', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `Id` int(11) NOT NULL,
  `Criterio1` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio2` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio3` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio4` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio5` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio6` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio7` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio8` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Criterio9` varchar(15) CHARACTER SET latin1 NOT NULL,
  `DespcrionEstu` varchar(260) CHARACTER SET latin1 NOT NULL,
  `DespcrionPro` varchar(260) CHARACTER SET latin1 DEFAULT NULL,
  `Proceso` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Estudiante_id` int(11) NOT NULL,
  `Profesor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`Id`, `Criterio1`, `Criterio2`, `Criterio3`, `Criterio4`, `Criterio5`, `Criterio6`, `Criterio7`, `Criterio8`, `Criterio9`, `DespcrionEstu`, `DespcrionPro`, `Proceso`, `Estudiante_id`, `Profesor_id`) VALUES
(1, 'Siempre', 'Algunas veces', 'Algunas veces', 'Siempre', 'Casi nunca', 'Algunas veces', 'Algunas veces', 'Siempre', 'Algunas veces', 'hola Gracias por todo', 'hola', 'Ok', 1143, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Cantidad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`Id`, `Nombre`, `Cantidad`) VALUES
(1, '1A', 20),
(2, '1B', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Apellido` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Codigo` int(6) NOT NULL,
  `Rol_Id` int(11) NOT NULL,
  `Grado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Id`, `Nombre`, `Apellido`, `Codigo`, `Rol_Id`, `Grado_id`) VALUES
(123, 'Julian', 'Penagos', 123, 2, 1),
(1143, 'Jose', 'Penagos', 1143, 1, 1),
(1999, 'Catalina', 'Penagos', 1199, 1, 1),
(3641, 'Lisa Minelly', 'Castiblanco Castillon', 3641, 1, 1),
(5430, 'Jaime  Andres Marcus ', 'Barraza Tabares', 5430, 1, 2),
(5879, 'Santiago', 'Carlosama Burbano', 5879, 1, 1),
(8637, 'Luciana', 'Castaño Gomez ', 8637, 1, 2),
(9874, 'Andres ', 'Martinez', 9874, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id`, `Nombre`) VALUES
(1, 'Estudiante'),
(2, 'Profesor'),
(3, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Grado_id` (`Grado_id`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Estudiante_id` (`Estudiante_id`),
  ADD KEY `Profesor_id` (`Profesor_id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Codigo` (`Codigo`),
  ADD KEY `Rol_Id` (`Rol_Id`),
  ADD KEY `Grado_id` (`Grado_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9875;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD CONSTRAINT `criterios_ibfk_1` FOREIGN KEY (`Grado_id`) REFERENCES `grado` (`Id`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`Estudiante_id`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluacion_ibfk_2` FOREIGN KEY (`Profesor_id`) REFERENCES `persona` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`Grado_id`) REFERENCES `grado` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`Rol_Id`) REFERENCES `rol` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
