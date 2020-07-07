-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-07-2020 a las 14:38:57
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
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `Name` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `FirstLastName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `SecondLastName` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CURP` varchar(18) COLLATE utf8_spanish2_ci NOT NULL,
  `Age` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Street` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `Number` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `Suburb` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `IdLocality` int(11) DEFAULT NULL,
  `Level` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Grade` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Turn` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Score` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IdSchool` int(11) DEFAULT NULL,
  `IdSchoolLocal` int(11) DEFAULT NULL,
  `DadName` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DadEmployment` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DadWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MomName` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MomEmployment` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MomWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TutorName` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TutorEmployment` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TutorWorkplace` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `WhoIncome` varchar(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Income` decimal(10,0) DEFAULT NULL,
  `Email` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Phone2` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Sign` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SignName` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DocCurp` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DocScore` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DocProofAddress` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DocIdentificationTutor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aplication`
--

INSERT INTO `aplication` (`Id`, `Fecha`, `Name`, `FirstLastName`, `SecondLastName`, `CURP`, `Age`, `Street`, `Number`, `Suburb`, `IdLocality`, `Level`, `Grade`, `Turn`, `Score`, `IdSchool`, `IdSchoolLocal`, `DadName`, `DadEmployment`, `DadWorkplace`, `MomName`, `MomEmployment`, `MomWorkplace`, `TutorName`, `TutorEmployment`, `TutorWorkplace`, `WhoIncome`, `Income`, `Email`, `Phone`, `Phone2`, `Sign`, `SignName`, `DocCurp`, `DocScore`, `DocProofAddress`, `DocIdentificationTutor`, `Status`) VALUES
(1, '2020-07-06 19:20:57', 'Jose', 'Garcia', NULL, 'GAAJ800615HTGR12', '18', 'HIDALGO 106', '', 'CENTRO', 1, 'P', '2', '', '90', 2, 0, 'PAPA', 'SU CASA', NULL, 'MAMA', 'SU CASA MAMA', NULL, '', '', '', '', '0', '', '', '', 'Madre', 'LA MAMA', '', '', '', '', 1),
(2, '2020-07-06 19:20:57', 'Diego', 'Pizano', NULL, 'PILD200200HGTSR04', '20', 'no se', '12', 'otra', 2, 'S', '8', 'M', '85', 3, 3, 'El papa de diego', 'norteño', 'USA', 'La mama de diego', 'Ama', 'USA', '', '', '', '', '20000', 'diego@gmail.com', '4125488040', '', 'Madre', 'La mama', '', '', '', '', 1),
(3, '2020-07-06 19:20:57', 'Luis', 'Rivera', 'Cervantes', 'RICL890215HGTRS04', '25', 'la calle', '25', '', 25, 'S', '9', 'V', '85', 10, 25, 'Papa de luis', 'pocero', 'en todos lados', 'Luis mama', 'cada ama', 'su casa de luis', '', '', '', 'P', '10000', 'luis@gmail.com', '4121578041', '', 'Madre', 'Luis mama firma', 'RICLcurp.pdf', 'RICLboleta.pdf', 'RICLcfe.pdf', 'RICLine.pdf', 1),
(4, '2020-07-06 19:20:57', 'Luis', 'Rivera', 'Cervantes', 'RICL890215HGTRS04', '25', 'la calle', '25', '', 25, 'S', '9', 'V', '85', 10, 25, 'Papa de luis', 'pocero', 'en todos lados', 'Luis mama', 'cada ama', 'su casa de luis', '', '', '', 'P', '10000', 'luis@gmail.com', '4121578041', '', 'Madre', 'Luis mama firma', 'RICLcurp.pdf', 'RICLboleta.pdf', 'RICLcfe.pdf', 'RICLine.pdf', 1),
(21, '2020-07-06 19:23:01', 'Jose', 'Alvarez', '', 'GAAJ810526HGTRS012', '38', 'Nogal', '123', 'La colonia', 23, 'P', '2', 'M', '90', 1, 2, 'Ruben', 'Obrero', 'Bachoco', 'Maria', 'ama de casa', 'la casa', '', '', '', 'P', '4000', 'sistemas@juventinorosas.gob.mx', '4121578040', '', 'M', 'Maria Alvarez', 'GAAJ810526HGTRS012/1-9-100092-6752.pdf', 'GAAJ810526HGTRS012/1-9-100093-2179.pdf', 'GAAJ810526HGTRS012/VLANS PRESIDENCIA.xlsx', 'GAAJ810526HGTRS012/rolMayo2020sistemas.xlsx', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
