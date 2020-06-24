-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-06-2020 a las 19:16:48
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
  `SecondLastName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `CURP` varchar(18) COLLATE utf8_spanish2_ci NOT NULL,
  `Age` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Address` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `Suburb` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `IdLocality` int(11) NOT NULL,
  `Phone` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Level` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `Grade` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Score` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `IdSchool` int(11) NOT NULL,
  `DadName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `DadAddress` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `DadPhone` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `DadWorkplace` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `DadIncome` decimal(10,0) NOT NULL,
  `MomName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `MomAddress` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `MomPhone` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `MomWorkplace` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `MomIncome` decimal(10,0) NOT NULL,
  `Sign` enum('Padre','Madre','Tutor','') COLLATE utf8_spanish2_ci NOT NULL,
  `SignName` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localities`
--

DROP TABLE IF EXISTS `localities`;
CREATE TABLE IF NOT EXISTS `localities` (
  `IdLocality` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `Locality` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Ambit` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `Latitude` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Longitude` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Altitude` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `Municipality` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `State` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IdLocality`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `localities`
--

INSERT INTO `localities` (`IdLocality`, `Locality`, `Ambit`, `Latitude`, `Longitude`, `Altitude`, `Municipality`, `State`) VALUES
('1', 'Juventino Rosas', 'U', '20.6432', '-100.994037', '1755', 'Santa Cruz de Juvent', 'Guanajuato'),
('2', 'Agua Zarca', 'R', '20.768843', '-101.020857', '2150', 'Santa Cruz de Juvent', 'Guanajuato'),
('3', 'Alvarado', 'R', '20.703769', '-101.078977', '2070', 'Santa Cruz de Juvent', 'Guanajuato'),
('4', 'Los Angeles', 'R', '20.612496', '-100.921429', '1751', 'Santa Cruz de Juvent', 'Guanajuato'),
('5', 'Las Ardillas', 'R', '20.757511', '-101.035447', '2113', 'Santa Cruz de Juvent', 'Guanajuato'),
('6', 'El Bordito', 'R', '20.720346', '-101.069071', '2042', 'Santa Cruz de Juvent', 'Guanajuato'),
('8', 'El Carmen de Arriba', 'R', '20.687516', '-101.062814', '2049', 'Santa Cruz de Juvent', 'Guanajuato'),
('9', 'Cerrito de Gasca', 'R', '20.617298', '-101.061108', '1740', 'Santa Cruz de Juvent', 'Guanajuato'),
('10', 'Cerrito de los Arellano', 'R', '20.753423', '-101.015161', '2263', 'Santa Cruz de Juvent', 'Guanajuato'),
('12', 'El Crucero [Deshidratadora Agrícola]', 'R', '20.611264', '-100.935477', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('14', 'Emiliano Zapata', 'R', '20.619813', '-101.042441', '1737', 'Santa Cruz de Juvent', 'Guanajuato'),
('15', 'Encinillas Segunda Fracción', 'R', '20.617363', '-100.912763', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('18', 'Franco', 'R', '20.601787', '-100.913289', '1752', 'Santa Cruz de Juvent', 'Guanajuato'),
('19', 'Las Fuentes', 'R', '20.660548', '-101.031059', '1816', 'Santa Cruz de Juvent', 'Guanajuato'),
('20', 'Galera de la Esperanza', 'R', '20.622744', '-101.022557', '1742', 'Santa Cruz de Juvent', 'Guanajuato'),
('21', 'Galera Prieta', 'R', '20.700217', '-101.051048', '2042', 'Santa Cruz de Juvent', 'Guanajuato'),
('22', 'Hacienda el Garambullo', 'R', '20.582596', '-101.042638', '1738', 'Santa Cruz de Juvent', 'Guanajuato'),
('23', 'Guadalupe', 'R', '20.622177', '-100.967427', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('25', 'La Huerta', 'R', '20.686181', '-100.937762', '1840', 'Santa Cruz de Juvent', 'Guanajuato'),
('26', 'El Jagüey', 'R', '20.71955', '-101.086656', '2103', 'Santa Cruz de Juvent', 'Guanajuato'),
('27', 'Jaralillo', 'R', '20.664901', '-100.976658', '1791', 'Santa Cruz de Juvent', 'Guanajuato'),
('29', 'La Laguna de Guadalupe', 'R', '20.7426', '-101.026257', '2190', 'Santa Cruz de Juvent', 'Guanajuato'),
('30', 'San José de los Llanos', 'R', '20.633174', '-100.92276', '1771', 'Santa Cruz de Juvent', 'Guanajuato'),
('32', 'San José de Merino', 'R', '20.584174', '-101.033768', '1735', 'Santa Cruz de Juvent', 'Guanajuato'),
('33', 'Mesas de Acosta', 'R', '20.747715', '-101.076866', '1967', 'Santa Cruz de Juvent', 'Guanajuato'),
('34', 'Mesas de Almanza', 'R', '20.778047', '-101.06159', '2171', 'Santa Cruz de Juvent', 'Guanajuato'),
('35', 'San Antonio de Morales', 'R', '20.581469', '-100.909538', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('36', 'El Murciélago', 'R', '20.696081', '-100.980848', '1835', 'Santa Cruz de Juvent', 'Guanajuato'),
('37', 'El Naranjillo', 'R', '20.716282', '-101.002149', '1860', 'Santa Cruz de Juvent', 'Guanajuato'),
('38', 'San Antonio Nuevo Valencia (La Chiripa)', 'R', '20.669719', '-100.988251', '1783', 'Santa Cruz de Juvent', 'Guanajuato'),
('41', 'Ojo de Agua de Otates', 'R', '20.695936', '-101.009861', '1832', 'Santa Cruz de Juvent', 'Guanajuato'),
('42', 'Ojo de Agua del Carrizal', 'R', '20.694299', '-101.014789', '1869', 'Santa Cruz de Juvent', 'Guanajuato'),
('43', 'La Peña (Peña Colorada)', 'R', '20.680694', '-100.946882', '1823', 'Santa Cruz de Juvent', 'Guanajuato'),
('45', 'El Pino', 'R', '20.608942', '-100.898465', '1757', 'Santa Cruz de Juvent', 'Guanajuato'),
('46', 'San Andrés Pozo Blanco', 'R', '20.602945', '-100.904171', '1753', 'Santa Cruz de Juvent', 'Guanajuato'),
('47', 'Pozos', 'U', '20.620117', '-100.895837', '1761', 'Santa Cruz de Juvent', 'Guanajuato'),
('48', 'San Juan de la Proveedora', 'R', '20.567645', '-101.034714', '1728', 'Santa Cruz de Juvent', 'Guanajuato'),
('49', 'La Purísima', 'R', '20.629406', '-101.046899', '1748', 'Santa Cruz de Juvent', 'Guanajuato'),
('50', 'Los Dulces Nombres', 'R', '20.650247', '-100.964534', '1773', 'Santa Cruz de Juvent', 'Guanajuato'),
('52', 'El Rinconcillo', 'R', '20.680649', '-101.018225', '1842', 'Santa Cruz de Juvent', 'Guanajuato'),
('53', 'Rincón de Centeno', 'U', '20.661646', '-100.883914', '1850', 'Santa Cruz de Juvent', 'Guanajuato'),
('54', 'Romero', 'R', '20.754564', '-100.991959', '1957', 'Santa Cruz de Juvent', 'Guanajuato'),
('55', 'El Rosillo', 'R', '20.688265', '-100.919675', '1874', 'Santa Cruz de Juvent', 'Guanajuato'),
('56', 'San Agustín', 'R', '20.617958', '-100.958282', '1745', 'Santa Cruz de Juvent', 'Guanajuato'),
('57', 'San Antonio del Salitre (La Providencia)', 'R', '20.602456', '-100.980004', '1740', 'Santa Cruz de Juvent', 'Guanajuato'),
('58', 'San Antonio de Romerillo', 'R', '20.607725', '-100.947874', '1744', 'Santa Cruz de Juvent', 'Guanajuato'),
('59', 'San Diego de los Dolores', 'R', '20.726261', '-101.028534', '1902', 'Santa Cruz de Juvent', 'Guanajuato'),
('60', 'San Francisco de Cuenda', 'R', '20.592676', '-100.987188', '1739', 'Santa Cruz de Juvent', 'Guanajuato'),
('61', 'San Isidro de Tavera', 'R', '20.612256', '-100.931561', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('62', 'San José de las Pilas', 'R', '20.654106', '-101.045496', '1825', 'Santa Cruz de Juvent', 'Guanajuato'),
('63', 'San Jos? del Sauz', 'R', '20.674609', '-100.984236', '1805', 'Santa Cruz de Juvent', 'Guanajuato'),
('64', 'San Jos? de Manantiales', 'R', '20.597741', '-100.911319', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('65', 'San Juan de la Cruz', 'R', '20.633223', '-100.912428', '1779', 'Santa Cruz de Juvent', 'Guanajuato'),
('66', 'San Juli?n Tierra Blanca', 'R', '20.595627', '-101.042075', '1731', 'Santa Cruz de Juvent', 'Guanajuato'),
('67', 'San Luis', 'R', '20.587886', '-100.877933', '1759', 'Santa Cruz de Juvent', 'Guanajuato'),
('69', 'San Nicol?s', 'R', '20.639044', '-101.012896', '1746', 'Santa Cruz de Juvent', 'Guanajuato'),
('71', 'Santa Ana de Agostadero', 'R', '20.688798', '-100.938497', '1849', 'Santa Cruz de Juvent', 'Guanajuato'),
('73', 'Santa In?s', 'R', '20.596315', '-100.87806', '1760', 'Santa Cruz de Juvent', 'Guanajuato'),
('74', 'Santa Mar?a de Guadalupe (El Ranchito)', 'R', '20.610013', '-101.035953', '1736', 'Santa Cruz de Juvent', 'Guanajuato'),
('75', 'Santiago de Cuenda', 'U', '20.598934', '-100.995288', '1739', 'Santa Cruz de Juvent', 'Guanajuato'),
('76', 'El Saucillo', 'R', '20.688923', '-100.990203', '1808', 'Santa Cruz de Juvent', 'Guanajuato'),
('78', 'Franco Tavera', 'R', '20.606411', '-100.929011', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('79', 'El Tecolote', 'R', '20.629985', '-100.957124', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('80', 'La Tinaja', 'R', '20.70468', '-101.038212', '2006', 'Santa Cruz de Juvent', 'Guanajuato'),
('81', 'La Trinidad', 'R', '20.574793', '-101.065311', '1729', 'Santa Cruz de Juvent', 'Guanajuato'),
('82', 'Valencia', 'R', '20.644351', '-100.963047', '1762', 'Santa Cruz de Juvent', 'Guanajuato'),
('83', 'El Venado', 'R', '20.601562', '-100.878223', '1761', 'Santa Cruz de Juvent', 'Guanajuato'),
('84', 'Insurgentes P?pila', 'R', '20.66303', '-100.972587', '1795', 'Santa Cruz de Juvent', 'Guanajuato'),
('85', 'Pastores', 'R', '20.778056', '-101.059167', '2177', 'Santa Cruz de Juvent', 'Guanajuato'),
('86', 'Laguna Seca de San Isidro', 'R', '20.681892', '-101.048414', '2046', 'Santa Cruz de Juvent', 'Guanajuato'),
('92', 'El Chupadero', 'R', '20.687816', '-101.012818', '1858', 'Santa Cruz de Juvent', 'Guanajuato'),
('94', 'Agua Nueva', 'R', '20.604813', '-100.893067', '1758', 'Santa Cruz de Juvent', 'Guanajuato'),
('95', 'Ojo de Agua de Valadez', 'R', '20.633189', '-100.941359', '1767', 'Santa Cruz de Juvent', 'Guanajuato'),
('96', 'El Baj?o', 'R', '20.626527', '-100.96211', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('97', 'San Antonio de las Maravillas', 'R', '20.581895', '-100.894272', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('98', 'La Esperanza', 'R', '20.602796', '-100.919315', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('102', 'Tejada', 'R', '20.585183', '-101.03613', '1734', 'Santa Cruz de Juvent', 'Guanajuato'),
('103', 'Mandujano', 'R', '20.739017', '-101.048337', '2055', 'Santa Cruz de Juvent', 'Guanajuato'),
('104', 'Los Patolitos', 'R', '20.724274', '-101.063061', '2051', 'Santa Cruz de Juvent', 'Guanajuato'),
('106', 'Luz Eugenia', 'R', '20.597547', '-100.955824', '1742', 'Santa Cruz de Juvent', 'Guanajuato'),
('109', 'Casa Blanca', 'R', '20.618722', '-100.945989', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('110', 'San Rom?n', 'R', '20.613781', '-100.881488', '1762', 'Santa Cruz de Juvent', 'Guanajuato'),
('114', 'Granja Am?rica', 'R', '20.623398', '-100.961066', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('115', 'La Estancia', 'R', '20.580191', '-101.003175', '1735', 'Santa Cruz de Juvent', 'Guanajuato'),
('116', 'Guadalupe', 'R', '20.595519', '-100.883978', '1758', 'Santa Cruz de Juvent', 'Guanajuato'),
('117', 'Granja Mary', 'R', '20.60832', '-100.938538', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('118', 'Merino (La Esperanza de Merino)', 'R', '20.602349', '-101.022918', '1737', 'Santa Cruz de Juvent', 'Guanajuato'),
('120', 'El Venadito', 'R', '20.601866', '-100.890987', '1757', 'Santa Cruz de Juvent', 'Guanajuato'),
('121', 'El Zapote (La Nopalera)', 'R', '20.729601', '-101.064962', '2055', 'Santa Cruz de Juvent', 'Guanajuato'),
('122', 'N?mero 19 [Granja Av?cola]', 'R', '20.628808', '-100.963389', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('123', 'San Carlos', 'R', '20.626261', '-100.956008', '1748', 'Santa Cruz de Juvent', 'Guanajuato'),
('124', 'Los Nogales', 'R', '20.622927', '-100.951641', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('125', 'Blanca Lucero (Fracci?n Casa Blanca)', 'R', '20.617222', '-100.943889', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('128', 'Las Palomas', 'R', '20.637989', '-100.944908', '1791', 'Santa Cruz de Juvent', 'Guanajuato'),
('129', 'San Miguelito', 'R', '20.632818', '-100.933684', '1772', 'Santa Cruz de Juvent', 'Guanajuato'),
('131', 'Encinal de Canoas', 'R', '20.794522', '-101.052771', '2222', 'Santa Cruz de Juvent', 'Guanajuato'),
('132', 'Caridad Dom?nguez [Empacadora de Hortalizas]', 'R', '20.627702', '-100.967178', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('135', 'El Pato', 'R', '20.576655', '-101.057953', '1729', 'Santa Cruz de Juvent', 'Guanajuato'),
('136', 'Hacienda Comontuoso', 'R', '20.631241', '-100.995288', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('139', 'Los Ramos (La Reserva)', 'R', '20.58868', '-100.958596', '1741', 'Santa Cruz de Juvent', 'Guanajuato'),
('143', 'Galeras (La Estrella)', 'R', '20.580683', '-100.940473', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('145', 'San Crist?bal', 'R', '20.589182', '-100.97384', '1740', 'Santa Cruz de Juvent', 'Guanajuato'),
('146', 'La Herradura [Granja]', 'R', '20.624399', '-100.953383', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('147', 'N?mero 10 [Granja Av?cola]', 'R', '20.604757', '-100.974976', '1741', 'Santa Cruz de Juvent', 'Guanajuato'),
('148', 'El Pasamano (Mar?a de Jes?s Romero)', 'R', '20.571502', '-100.91326', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('149', 'Los ?lamos', 'R', '20.608679', '-100.907884', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('151', 'Andr?s Celed?n', 'R', '20.740989', '-101.056449', '2081', 'Santa Cruz de Juvent', 'Guanajuato'),
('152', 'N?mero Tres [Granja Av?cola]', 'R', '20.588748', '-100.890612', '1753', 'Santa Cruz de Juvent', 'Guanajuato'),
('153', 'N?mero 18 [Granja Av?cola]', 'R', '20.625403', '-100.952123', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('154', 'N?mero Cinco [Granja Av?cola]', 'R', '20.603659', '-100.98635', '1740', 'Santa Cruz de Juvent', 'Guanajuato'),
('155', 'N?mero 53 [Granja Av?cola]', 'R', '20.608984', '-100.950683', '1744', 'Santa Cruz de Juvent', 'Guanajuato'),
('156', 'N?mero Ocho [Granja Av?cola]', 'R', '20.599844', '-100.959122', '1742', 'Santa Cruz de Juvent', 'Guanajuato'),
('157', 'N?mero Seis [Granja Av?cola]', 'R', '20.616899', '-100.955637', '1745', 'Santa Cruz de Juvent', 'Guanajuato'),
('158', 'Las Cajitas', 'R', '20.732188', '-101.057227', '2065', 'Santa Cruz de Juvent', 'Guanajuato'),
('159', 'El Carmen de Abajo', 'R', '20.568471', '-101.063053', '1727', 'Santa Cruz de Juvent', 'Guanajuato'),
('160', 'La Casita', 'R', '20.637932', '-100.970219', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('161', 'Encinillas Primera Fracci?n', 'R', '20.618641', '-100.903442', '1758', 'Santa Cruz de Juvent', 'Guanajuato'),
('162', 'El Establo', 'R', '20.641283', '-100.96627', '1757', 'Santa Cruz de Juvent', 'Guanajuato'),
('163', 'Esteban Luna Luna', 'R', '20.736143', '-101.063621', '2062', 'Santa Cruz de Juvent', 'Guanajuato'),
('164', 'Epifanio Moreno Macera', 'R', '20.587169', '-100.96262', '1740', 'Santa Cruz de Juvent', 'Guanajuato'),
('165', 'Familia Almaraz Vargas (Pozo del Monte)', 'R', '20.593555', '-100.904886', '1751', 'Santa Cruz de Juvent', 'Guanajuato'),
('166', 'El Corral', 'R', '20.593056', '-100.893108', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('167', 'Familia Montoya', 'R', '20.590784', '-101.044501', '1729', 'Santa Cruz de Juvent', 'Guanajuato'),
('168', 'Familia Olvera', 'R', '20.581811', '-100.899752', '1748', 'Santa Cruz de Juvent', 'Guanajuato'),
('170', 'Familia Sierra Valencia', 'R', '20.657446', '-100.987877', '1763', 'Santa Cruz de Juvent', 'Guanajuato'),
('171', 'Familia V?zquez Rodr?guez', 'R', '20.749238', '-101.040086', '2088', 'Santa Cruz de Juvent', 'Guanajuato'),
('172', 'Finca Mar?a Elena', 'R', '20.652442', '-100.981617', '1763', 'Santa Cruz de Juvent', 'Guanajuato'),
('173', 'El Doctor', 'R', '20.557113', '-101.052555', '1729', 'Santa Cruz de Juvent', 'Guanajuato'),
('174', 'El Garambullo', 'R', '20.591534', '-101.040421', '1731', 'Santa Cruz de Juvent', 'Guanajuato'),
('175', 'La Herradura [Colonia]', 'R', '20.632181', '-100.952222', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('176', 'Granja Guadalupe', 'R', '20.61093', '-100.97059', '1744', 'Santa Cruz de Juvent', 'Guanajuato'),
('177', 'Granja la Bugambilia (Familia Reyes Alberto)', 'R', '20.605', '-100.935278', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('178', 'Granja Olvera', 'R', '20.606619', '-100.998154', '1741', 'Santa Cruz de Juvent', 'Guanajuato'),
('179', 'Granja San Luis (El ?rbol)', 'R', '20.599319', '-101.006233', '1738', 'Santa Cruz de Juvent', 'Guanajuato'),
('180', 'Hacienda del Llanito', 'R', '20.626248', '-100.916033', '1758', 'Santa Cruz de Juvent', 'Guanajuato'),
('181', 'Honorio Mendoza Rodr?guez', 'R', '20.664823', '-100.992084', '1777', 'Santa Cruz de Juvent', 'Guanajuato'),
('183', 'Juan ?lvarez Palo Alto', 'R', '20.693807', '-101.031988', '2010', 'Santa Cruz de Juvent', 'Guanajuato'),
('184', 'Juan Mendoza Rangel (Ejidal Z??iga)', 'R', '20.654965', '-100.998076', '1759', 'Santa Cruz de Juvent', 'Guanajuato'),
('185', 'Juan Ramos Torres', 'R', '20.604229', '-101.045953', '1730', 'Santa Cruz de Juvent', 'Guanajuato'),
('186', 'Ria?o (La Lagunita)', 'R', '20.745968', '-101.062031', '2080', 'Santa Cruz de Juvent', 'Guanajuato'),
('187', 'El Mezquital (Maggie Aboytes)', 'R', '20.617286', '-100.933774', '1751', 'Santa Cruz de Juvent', 'Guanajuato'),
('188', 'San Javier', 'R', '20.607821', '-100.964426', '1743', 'Santa Cruz de Juvent', 'Guanajuato'),
('189', 'El Oasis', 'R', '20.605984', '-101.042086', '1732', 'Santa Cruz de Juvent', 'Guanajuato'),
('191', 'La Paloma', 'R', '20.623561', '-100.958817', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('192', 'Pozo Cuatro', 'R', '20.576199', '-100.899687', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('194', 'Pozo de C?ndido Banda', 'R', '20.621902', '-100.9873', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('195', 'La Trinidad', 'R', '20.615', '-100.926667', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('197', 'La Providencia', 'R', '20.605711', '-100.989153', '1742', 'Santa Cruz de Juvent', 'Guanajuato'),
('198', 'Pozo de Narciso Hortelano', 'R', '20.608675', '-101.018457', '1739', 'Santa Cruz de Juvent', 'Guanajuato'),
('199', 'Pozo de Pablo Mendoza', 'R', '20.60289', '-100.939757', '1746', 'Santa Cruz de Juvent', 'Guanajuato'),
('200', 'Pozo el Romerillo (Ram?n Mart?nez)', 'R', '20.592129', '-100.952431', '1743', 'Santa Cruz de Juvent', 'Guanajuato'),
('201', 'Pozo de Gilberto Garc?a', 'R', '20.6022', '-101.015945', '1738', 'Santa Cruz de Juvent', 'Guanajuato'),
('202', 'Pozo Javier Usabiaga (El Garambullo)', 'R', '20.57454', '-101.039506', '1727', 'Santa Cruz de Juvent', 'Guanajuato'),
('203', 'Ninguno [Productora de Semillas]', 'R', '20.582723', '-101.050391', '1725', 'Santa Cruz de Juvent', 'Guanajuato'),
('204', 'La Providencia', 'R', '20.633177', '-100.882074', '1781', 'Santa Cruz de Juvent', 'Guanajuato'),
('205', 'La Pur?sima', 'R', '20.609431', '-100.98638', '1742', 'Santa Cruz de Juvent', 'Guanajuato'),
('206', 'Rancho Bugambilias', 'R', '20.595999', '-100.93987', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('207', 'Machi [Rancho]', 'R', '20.599466', '-100.952082', '1743', 'Santa Cruz de Juvent', 'Guanajuato'),
('208', 'Rancho Nuevo', 'R', '20.611132', '-100.991019', '1744', 'Santa Cruz de Juvent', 'Guanajuato'),
('209', 'Cirino V?zquez Guzm?n', 'R', '20.657268', '-101.00112', '1763', 'Santa Cruz de Juvent', 'Guanajuato'),
('210', 'San Antonio (El Coyote Blanco)', 'R', '20.62206', '-100.991242', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('211', 'San Miguel (Ex Hacienda de Pozos)', 'R', '20.624203', '-100.886614', '1767', 'Santa Cruz de Juvent', 'Guanajuato'),
('213', 'Los Sauces', 'R', '20.614828', '-101.032588', '1738', 'Santa Cruz de Juvent', 'Guanajuato'),
('214', 'Severiano Arellano (San Felipe de Jes?s)', 'R', '20.682688', '-101.002529', '1841', 'Santa Cruz de Juvent', 'Guanajuato'),
('215', 'Tom?s Gonz?lez Z?rate', 'R', '20.676192', '-101.005233', '1832', 'Santa Cruz de Juvent', 'Guanajuato'),
('216', 'La Torna (El Pasamanos)', 'R', '20.657816', '-100.986191', '1764', 'Santa Cruz de Juvent', 'Guanajuato'),
('217', 'El Z??iga (Los Pinos)', 'R', '20.696717', '-100.989103', '1808', 'Santa Cruz de Juvent', 'Guanajuato'),
('218', 'El Rocillito', 'R', '20.642015', '-100.937208', '1813', 'Santa Cruz de Juvent', 'Guanajuato'),
('219', 'Quinta Dany', 'R', '20.615622', '-100.941292', '1748', 'Santa Cruz de Juvent', 'Guanajuato'),
('220', 'Pozo de R?mula S?nchez', 'R', '20.596965', '-100.893223', '1755', 'Santa Cruz de Juvent', 'Guanajuato'),
('222', 'El Cerrito', 'R', '20.58737', '-100.894701', '1751', 'Santa Cruz de Juvent', 'Guanajuato'),
('223', 'La Presita de los Figueroa', 'R', '20.640274', '-100.897561', '1782', 'Santa Cruz de Juvent', 'Guanajuato'),
('225', 'El Gigante', 'R', '20.641511', '-100.881023', '1795', 'Santa Cruz de Juvent', 'Guanajuato'),
('227', 'Los Herrera', 'R', '20.596756', '-100.89537', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('232', 'El Capul?n', 'R', '20.646669', '-100.981044', '1761', 'Santa Cruz de Juvent', 'Guanajuato'),
('235', 'Loma Alta del Santo Ni?o', 'R', '20.803236', '-101.043642', '2296', 'Santa Cruz de Juvent', 'Guanajuato'),
('236', 'Pozo el Profe', 'R', '20.657197', '-101.006098', '1771', 'Santa Cruz de Juvent', 'Guanajuato'),
('237', 'Jos? Mar?a Calder?n Llanos', 'R', '20.663063', '-101.004868', '1786', 'Santa Cruz de Juvent', 'Guanajuato'),
('238', 'Presa de Guadalupe', 'R', '20.68071', '-100.992674', '1790', 'Santa Cruz de Juvent', 'Guanajuato'),
('241', 'Leopoldo Z??iga God?nez (Los ?calos)', 'R', '20.637489', '-101.007707', '1747', 'Santa Cruz de Juvent', 'Guanajuato'),
('243', 'Seraf?n Robles Castillo (Robles)', 'R', '20.628415', '-101.011647', '1744', 'Santa Cruz de Juvent', 'Guanajuato'),
('246', 'Valent?n Conejo Hern?ndez', 'R', '20.646238', '-101.006271', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('247', 'Santa B?rbara (Valerio)', 'R', '20.622936', '-100.996991', '1746', 'Santa Cruz de Juvent', 'Guanajuato'),
('248', 'Erasmo Calero Vargas', 'R', '20.650634', '-101.009769', '1757', 'Santa Cruz de Juvent', 'Guanajuato'),
('249', 'Mar?a Guadalupe Cerrito Cerrito', 'R', '20.595114', '-100.992684', '1738', 'Santa Cruz de Juvent', 'Guanajuato'),
('250', 'La Huerta', 'R', '20.646903', '-100.886116', '1807', 'Santa Cruz de Juvent', 'Guanajuato'),
('251', 'La Lupita', 'R', '20.64883', '-101.020753', '1760', 'Santa Cruz de Juvent', 'Guanajuato'),
('256', 'Las S?bilas [Rancho]', 'R', '20.6791', '-100.989242', '1793', 'Santa Cruz de Juvent', 'Guanajuato'),
('257', 'Los Arellano', 'R', '20.648606', '-100.970653', '1764', 'Santa Cruz de Juvent', 'Guanajuato'),
('259', 'Rancho Ca?ada', 'R', '20.625059', '-100.982021', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('260', 'La Gloria', 'R', '20.628945', '-100.995172', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('261', 'Colonia la Gloria', 'R', '20.66452', '-101.004208', '1787', 'Santa Cruz de Juvent', 'Guanajuato'),
('262', 'Isidro L?pez Galindo', 'R', '20.661729', '-101.003574', '1778', 'Santa Cruz de Juvent', 'Guanajuato'),
('264', 'Salvador Maldonado Rangel', 'R', '20.649228', '-101.002431', '1756', 'Santa Cruz de Juvent', 'Guanajuato'),
('266', 'El Tejas (El Pozo)', 'R', '20.653235', '-100.984954', '1763', 'Santa Cruz de Juvent', 'Guanajuato'),
('267', 'UNIDEG', 'R', '20.659951', '-100.996898', '1773', 'Santa Cruz de Juvent', 'Guanajuato'),
('268', 'Colonia Bellavista', 'R', '20.66084', '-101.002606', '1772', 'Santa Cruz de Juvent', 'Guanajuato'),
('269', 'Los Razo', 'R', '20.590152', '-101.049051', '1728', 'Santa Cruz de Juvent', 'Guanajuato'),
('270', 'Ex-Hacienda la Galera', 'R', '20.605093', '-101.026136', '1737', 'Santa Cruz de Juvent', 'Guanajuato'),
('271', 'Caja de Guadalupe', 'R', '20.613283', '-100.9973', '1743', 'Santa Cruz de Juvent', 'Guanajuato'),
('272', 'Colonia Ganadera', 'R', '20.591248', '-101.002971', '1737', 'Santa Cruz de Juvent', 'Guanajuato'),
('273', 'El Alto', 'R', '20.56387', '-101.016716', '1733', 'Santa Cruz de Juvent', 'Guanajuato'),
('274', 'Zeferino Lerma Gonz?lez', 'R', '20.566583', '-101.013269', '1734', 'Santa Cruz de Juvent', 'Guanajuato'),
('275', 'Rancho la Herradura', 'R', '20.5959', '-101.026599', '1735', 'Santa Cruz de Juvent', 'Guanajuato'),
('276', 'Miguel Conejo', 'R', '20.627471', '-100.979939', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('277', 'Esteban Alvarado', 'R', '20.626572', '-100.986467', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('278', 'Manuel Rocha', 'R', '20.6274', '-100.982955', '1750', 'Santa Cruz de Juvent', 'Guanajuato'),
('279', 'Fraccionamiento las Maravillas', 'R', '20.591667', '-100.89', '1758', 'Santa Cruz de Juvent', 'Guanajuato'),
('280', 'El Santuario [Comercializadora]', 'R', '20.607296', '-101.046556', '1730', 'Santa Cruz de Juvent', 'Guanajuato'),
('281', 'Rancho San Rafael (Hermanos Armenta)', 'R', '20.618465', '-100.891887', '1761', 'Santa Cruz de Juvent', 'Guanajuato'),
('282', 'Cerrito Blanco', 'R', '20.715097', '-101.04315', '2056', 'Santa Cruz de Juvent', 'Guanajuato'),
('283', 'El Progreso [Rancho]', 'R', '20.553823', '-101.051651', '1727', 'Santa Cruz de Juvent', 'Guanajuato'),
('284', 'Juventino Rico', 'R', '20.622', '-101.002644', '1745', 'Santa Cruz de Juvent', 'Guanajuato'),
('285', 'Rosal?o Ramos [Rancho del Doctor]', 'R', '20.592086', '-101.020583', '1734', 'Santa Cruz de Juvent', 'Guanajuato'),
('286', 'San Rafael [Caja]', 'R', '20.623941', '-101.003545', '1745', 'Santa Cruz de Juvent', 'Guanajuato'),
('287', 'Jes?s Aboytes [Pozo]', 'R', '20.624053', '-101.009906', '1746', 'Santa Cruz de Juvent', 'Guanajuato'),
('288', 'El Fresno', 'R', '20.648804', '-101.004928', '1753', 'Santa Cruz de Juvent', 'Guanajuato'),
('289', 'San Jorge (El Ranchito)', 'R', '20.624973', '-100.983142', '1749', 'Santa Cruz de Juvent', 'Guanajuato'),
('290', 'Ninguno [Pozo Cinco]', 'R', '20.576681', '-100.905203', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('291', 'Ninguno [Pozo de Rodolfo Mendoza]', 'R', '20.637698', '-100.965117', '1754', 'Santa Cruz de Juvent', 'Guanajuato'),
('292', 'Eduardo Zaraz?a', 'R', '20.596377', '-100.900989', '1752', 'Santa Cruz de Juvent', 'Guanajuato'),
('293', 'El Torre?n (Fam. Alem?n) [Predio]', 'R', '20.594484', '-100.891427', '1755', 'Santa Cruz de Juvent', 'Guanajuato'),
('294', 'La Hacienda [Fraccionamiento]', 'R', '20.647778', '-100.975806', '1760', 'Santa Cruz de Juvent', 'Guanajuato'),
('295', 'San Pedro [Granja]', 'R', '20.648356', '-101.008778', '1752', 'Santa Cruz de Juvent', 'Guanajuato'),
('296', 'San Crist?bal (La Granjita)', 'R', '20.593678', '-100.961483', '1741', 'Santa Cruz de Juvent', 'Guanajuato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schooles`
--

DROP TABLE IF EXISTS `schooles`;
CREATE TABLE IF NOT EXISTS `schooles` (
  `IdSchool` int(11) NOT NULL AUTO_INCREMENT,
  `School` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Ambit` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Urbana o Rural',
  `IdLocality` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IdSchool`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
