-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 02:03:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sis_clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_especialidades`
--

CREATE TABLE `tb_especialidades` (
  `id_especialidad` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_especialidades`
--

INSERT INTO `tb_especialidades` (`id_especialidad`, `nombre`, `descripcion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'ODONTOLOGIA', 'Especialidad desinada para una consulta general', '2022-11-24 19:07:07', NULL, NULL, '1'),
(2, 'Prueba', 'Solo es una prueba', '2022-11-29 23:47:26', '2022-11-30 11:59:20', '2022-11-30 12:12:55', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_especialistas`
--

CREATE TABLE `tb_especialistas` (
  `id_especialista` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_especialistas`
--

INSERT INTO `tb_especialistas` (`id_especialista`, `nombres`, `apellidos`, `celular`, `ciudad`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Juan José', 'Espinal Osorio', '57649275', 'Ocotal', '2022-11-24 19:07:07', NULL, '2022-12-03 12:22:53', '0'),
(2, 'Rudy', 'Mejia', '6758999', 'Ocotal', '2022-11-30 18:57:55', NULL, '2022-11-30 19:33:57', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pacientes`
--

CREATE TABLE `tb_pacientes` (
  `id_paciente` int(11) NOT NULL,
  `no_expediente` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha_nacim` date DEFAULT NULL,
  `edad` varchar(11) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_pacientes`
--

INSERT INTO `tb_pacientes` (`id_paciente`, `no_expediente`, `nombres`, `apellidos`, `fecha_nacim`, `edad`, `celular`, `ciudad`, `direccion`, `email`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '120999', 'Juan', 'Pérez', '1999-09-12', '13', '120935', 'Ocotal', 'Cerca de aquí, lejos de allá.', 'juan@email.com', NULL, '2022-11-24 20:20:24', '2022-11-24 20:15:57', '1'),
(2, '1203', 'Oscar Magdiel', 'Suarez', '1999-05-24', '23', '123423', 'Ocotal', 'Sandino, Frente al bar', 'ssas@assad', '2022-11-24 19:07:07', '2022-11-24 19:56:28', '2022-11-24 20:20:33', '1'),
(3, 'wqe', 'Rudy', 'Mejia', '1999-09-12', '23', '2322', 'Ocotal', 'Sandino, Frente a la cancha', 'qwda@asas', '2022-11-24 19:08:19', NULL, '2022-11-24 20:15:32', '1'),
(4, '121', 'asdakls', 'ascla', '1999-09-12', '21', '34532', 'cxzzx', 'sakabkasxa', 'knxcz@askb', '2022-11-30 11:14:17', '2022-11-30 11:14:31', '2022-11-30 11:14:38', '0'),
(5, '1203', 'ksjxh', 'zkjczbka', '1999-09-12', '23', '2434', 'jksbx', 'kjxcbk', 'sdnccx@asc', '2022-12-03 12:22:05', NULL, NULL, '1'),
(6, '334', 'bvjv', 'kjh', '1223-09-12', '455', '', 'bkgujf', 'hjgjhc vfghjgkv jjgj jggjjjg jgffh jggjgg jggggg', 'aassd@sss', '2022-12-03 12:32:51', '2022-12-12 18:23:20', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contra` text NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `apellidos`, `cedula`, `celular`, `cargo`, `email`, `contra`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Juan José', 'Perez', '4811209991006F', '57997454', 'ADMINISTRADOR', 'cuentaprb40@gmail.com', '$2y$10$EtYiPjXLGnu/KiA1oh22gOReYKQybvPm5E6P0rFVPnwgrwJLl2D16', NULL, '2022-11-24 20:19:04', '2022-12-03 12:43:45', '1'),
(7, 'Pedro Antonio', 'Perez', 'ssacxczx', '234232', 'ESTUDIANTE', 'pedro@mio', '$2y$10$EQYrEMdMkpBp.1wEvSwDdeWsLCvnsgwLF.GHpqPghiivI.up9XWHS', '2022-11-10 19:31:07', '2022-12-03 21:51:08', '2022-11-15 20:13:46', '1'),
(8, 'Oscar Magdiel', 'Suarez', '4810302991001K', '84942070', 'DOCENTE', 'oscar117@gmail.com', '$2y$10$8umzBz2fMUtc9x/7ybSMjOM2qWlCVZodtWx86MRqc01pYSapc0e8u', '2022-11-11 19:26:54', NULL, '2022-11-24 20:19:15', '1'),
(9, 'Rudy', 'Mejia', '4811209991006F', '57997453', 'DOCENTE', 'rudy123@gmail.com', '$2y$10$Ij5hG./jVLoXxO18FlthseGHhuE76IvIYzErspldEH8m6Dj5i8exy', '2022-11-11 19:28:40', NULL, '2022-11-21 18:29:16', '1'),
(13, 'Isayara', 'Martinez', '232234', '1232322', 'ESTUDIANTE', 'dcsd@adrr', '$2y$10$5HkyaomjbQfOeQo2O8L5OehFOBoZYMfjqRQo0jQnwdd7fp6Sy7gqC', '2022-11-15 20:42:57', '2022-11-20 20:56:30', '2022-11-20 23:07:12', '1'),
(14, 'Santos Isaac', 'Martinez', '2323423432', '345355', 'DOCENTE', 'wdflnkes@sd', '$2y$10$.27MajV4Fv5dlPcNkSDdiuiiueB560MAmXro8qVtRe358KeVVrvz6', '2022-11-17 21:14:27', '2022-11-17 21:14:52', '2022-11-17 21:15:30', '1'),
(15, 'jhon', 'kenedy', '23231322', '32423', 'ESTUDIANTE', 'acxzx@asdas', '$2y$10$8VYIiu3hDd5fYeepxflQLe7ljwBD8nBmbDsWxqJpDMNrBrBsjaMeC', '2022-12-03 12:30:55', NULL, NULL, '1'),
(16, 'Marcos', 'Aguilar', '124443', '4544', 'ADMINISTRADOR', 'sdcs@asfsd', '$2y$10$0gzevBWlpL4Yl3IoEm6JSONNPdPjUzsJkd.k08SRhUWvJ26DVm9m.', '2022-12-12 18:24:31', NULL, '2022-12-12 18:24:42', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_especialidades`
--
ALTER TABLE `tb_especialidades`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `tb_especialistas`
--
ALTER TABLE `tb_especialistas`
  ADD PRIMARY KEY (`id_especialista`);

--
-- Indices de la tabla `tb_pacientes`
--
ALTER TABLE `tb_pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_especialidades`
--
ALTER TABLE `tb_especialidades`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_especialistas`
--
ALTER TABLE `tb_especialistas`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_pacientes`
--
ALTER TABLE `tb_pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
