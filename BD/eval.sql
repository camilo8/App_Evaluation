-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 22:50:02
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
-- Base de datos: `eval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `Id` int(11) NOT NULL,
  `Criterion1` varchar(30) NOT NULL,
  `Criterion2` varchar(30) NOT NULL,
  `Criterion3` varchar(30) NOT NULL,
  `Criterion4` varchar(30) NOT NULL,
  `Criterion5` varchar(30) NOT NULL,
  `Criterion6` varchar(30) NOT NULL,
  `Criterion7` varchar(30) NOT NULL,
  `Criterion8` varchar(30) NOT NULL,
  `Criterion9` varchar(30) NOT NULL,
  `Criterion10` varchar(30) NOT NULL,
  `Estudent_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterion`
--

CREATE TABLE `criterion` (
  `Id` varchar(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Grade_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `criterion`
--

INSERT INTO `criterion` (`Id`, `Name`, `Description`, `Grade_Id`) VALUES
('101A', 'De mentalidad abierta:', ' Aprecio y valoro mi historia personal y cultural,  así como estoy abierto a considerar los diferentes puntos de vista, perspectivas, valores y tradiciones de otras personas y comunidades.', 1),
('11A', 'Indagadores', 'Desarrollo una curiosidad natural por lo que me rodea e indago desde diversos procesos cuestiones que son interesantes y me contribuyen a un aprendizaje a nivel colaborativo y  autónomo.', 1),
('21A', 'Pensadores', 'Afronto de manera critica y creativa problemas complejos que me llevan a tomar desde mi propia iniciativa decisiones razonadas y éticas.', 1),
('31A', 'Íntegros', 'Demuestro honestidad e imparcialidad frente mis actos y situaciones que enfrento con los demás.', 1),
('41A', 'Audaces', 'Exploro de manera independiente nuevas ideas, roles y estrategias, para así afrontar cambios, metas y desafíos desde la innovación y creatividad.', 1),
('51A', 'Reflexivos', ' Auto evaluó mi aprendizaje como un proceso de crecimiento personal e intelectual.', 1),
('61A', 'Informados e instruidos', ' Exploro conceptos, ideas y cuestiones relevantes a diversas disciplinas, las cuales me permiten comprometerme con un aprendizaje a nivel local  y mundial.', 1),
('71A', 'Informados e instruidos', 'Exploro conceptos, ideas y cuestiones relevantes a diversas disciplinas, las cuales me permiten comprometerme con un aprendizaje a nivel local  y mundial.', 1),
('81A', 'Solidarios', 'Muestro empatía, sensibilidad y respeto por las necesidades de los demás con el propósito de contribuir positivamente en la vida de las personas y el medio ambiente', 1),
('91A', 'Equilibrados', ' Desarrollo un balance entre lo intelectual, emocional y físico para relacionarme con los demás y el entorno.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evalution`
--

CREATE TABLE `evalution` (
  `Id` int(11) NOT NULL,
  `Criterion1` varchar(12) NOT NULL,
  `Color1` varchar(11) NOT NULL,
  `Criterion2` varchar(12) NOT NULL,
  `Color2` varchar(11) NOT NULL,
  `Criterion3` varchar(12) NOT NULL,
  `Color3` varchar(11) NOT NULL,
  `Criterion4` varchar(12) NOT NULL,
  `Color4` varchar(11) NOT NULL,
  `Criterion5` varchar(12) NOT NULL,
  `Color5` varchar(11) NOT NULL,
  `Criterion6` varchar(12) NOT NULL,
  `Color6` varchar(11) NOT NULL,
  `Criterion7` varchar(12) NOT NULL,
  `Color7` varchar(11) NOT NULL,
  `Criterion8` varchar(12) NOT NULL,
  `Color8` varchar(11) NOT NULL,
  `Criterion9` varchar(12) NOT NULL,
  `Color9` varchar(11) NOT NULL,
  `Criterion10` varchar(12) NOT NULL,
  `Color10` varchar(11) NOT NULL,
  `Student_Id` int(11) NOT NULL,
  `Teacher_Id` int(11) DEFAULT NULL,
  `Commentary_Student` varchar(250) NOT NULL,
  `Commentary_Teacher` varchar(250) DEFAULT NULL,
  `End_Procces_Student` varchar(2) NOT NULL,
  `End_Procces_Teacher` varchar(2) DEFAULT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grade`
--

CREATE TABLE `grade` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grade`
--

INSERT INTO `grade` (`Id`, `Name`) VALUES
(1, '1A'),
(2, '2A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Codigo` int(4) NOT NULL,
  `Rol_Id` int(11) NOT NULL,
  `Grade_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`Id`, `Name`, `Surname`, `Codigo`, `Rol_Id`, `Grade_Id`) VALUES
(1, 'Juan Camilo', 'Penagos Yara', 1143, 1, 1),
(2, 'Jorge ', 'Ospina', 5468, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id`, `Name`) VALUES
(1, 'Student'),
(2, 'Teacher'),
(3, 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Estudent_Id` (`Estudent_Id`);

--
-- Indices de la tabla `criterion`
--
ALTER TABLE `criterion`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Grade_Id` (`Grade_Id`);

--
-- Indices de la tabla `evalution`
--
ALTER TABLE `evalution`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Student_Id` (`Student_Id`),
  ADD KEY `Teacher_Id` (`Teacher_Id`);

--
-- Indices de la tabla `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Code` (`Codigo`) USING BTREE,
  ADD KEY `Rol_Id` (`Rol_Id`),
  ADD KEY `Grade_Id` (`Grade_Id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evalution`
--
ALTER TABLE `evalution`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grade`
--
ALTER TABLE `grade`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `criterion`
--
ALTER TABLE `criterion`
  ADD CONSTRAINT `criterion_ibfk_1` FOREIGN KEY (`Grade_Id`) REFERENCES `grade` (`Id`);

--
-- Filtros para la tabla `evalution`
--
ALTER TABLE `evalution`
  ADD CONSTRAINT `evalution_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `person` (`Id`),
  ADD CONSTRAINT `evalution_ibfk_2` FOREIGN KEY (`Teacher_Id`) REFERENCES `person` (`Id`);

--
-- Filtros para la tabla `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`Rol_Id`) REFERENCES `rol` (`Id`),
  ADD CONSTRAINT `person_ibfk_2` FOREIGN KEY (`Grade_Id`) REFERENCES `grade` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
