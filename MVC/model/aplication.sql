-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-07-2020 a las 21:06:20
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

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

DROP TABLE IF EXISTS `aplication`;
CREATE TABLE IF NOT EXISTS `aplication` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `FirstLastName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `SecondLastName` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CURP` varchar(18) COLLATE utf8_spanish2_ci NOT NULL,
  `Age` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Street` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `Number` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `Suburb` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `IdLocality` int(11) NOT NULL,
  `Level` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `Grade` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Turn` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `Score` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `IdSchool` int(11) NOT NULL,
  `IdSchoolLocal` int(11) NOT NULL,
  `DadName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `DadEmployment` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `DadWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MomName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `MomEmployment` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `MomWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TutorName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `TutorEmployment` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `TutorWorkplace` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `WhoIncome` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `Income` decimal(10,0) NOT NULL,
  `Email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Phone2` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Sign` enum('Padre','Madre','Tutor''') COLLATE utf8_spanish2_ci NOT NULL,
  `SignName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aplication`
--

INSERT INTO `aplication` (`Id`, `Name`, `FirstLastName`, `SecondLastName`, `CURP`, `Age`, `Street`, `Number`, `Suburb`, `IdLocality`, `Level`, `Grade`, `Turn`, `Score`, `IdSchool`, `IdSchoolLocal`, `DadName`, `DadEmployment`, `DadWorkplace`, `MomName`, `MomEmployment`, `MomWorkplace`, `TutorName`, `TutorEmployment`, `TutorWorkplace`, `WhoIncome`, `Income`, `Email`, `Phone`, `Phone2`, `Sign`, `SignName`, `Status`) VALUES
(1, 'Jose', 'Garcia', NULL, 'GAAJ800615HTGR12', '18', 'HIDALGO 106', '', 'CENTRO', 1, 'P', '2', '', '90', 2, 0, 'PAPA', 'SU CASA', NULL, 'MAMA', 'SU CASA MAMA', NULL, '', '', '', '', '0', '', '', '', 'Madre', 'LA MAMA', 1),
(2, 'Diego', 'Pizano', NULL, 'PILD200200HGTSR04', '20', 'no se', '12', 'otra', 2, 'S', '8', 'M', '85', 3, 3, 'El papa de diego', 'norteño', 'USA', 'La mama de diego', 'Ama', 'USA', '', '', '', '', '20000', 'diego@gmail.com', '4125488040', '', 'Madre', 'La mama', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
