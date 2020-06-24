-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2020 a las 22:25:50
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `becas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplication`
--

CREATE TABLE `aplication` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `FirstLastName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `SecondLastName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `CURP` varchar(18) COLLATE utf8_spanish2_ci NOT NULL,
  `Age` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Address` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `Suburb` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `IdLocality` int(11) NOT NULL,
  `Phone` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Phone2` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Level` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `Grade` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Score` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `IdSchool` int(11) NOT NULL,
  `DadName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `DadWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DadWorkplaceAddress` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MomName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `MomWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MomWorkplaceAddress` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Tutor` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TutorWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TutorWorkplaceAddress` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Sign` enum('Padre','Madre','Tutor','') COLLATE utf8_spanish2_ci NOT NULL,
  `SignName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `urlCURPAlumno` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `urlProofAddress` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `urlDocScore` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplication`
--
ALTER TABLE `aplication`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aplication`
--
ALTER TABLE `aplication`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
