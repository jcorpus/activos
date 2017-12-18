-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 04:03 AM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyecto_activo`
--

-- --------------------------------------------------------

--
-- Table structure for table `activo2`
--

CREATE TABLE IF NOT EXISTS `activo2` (
  `id_act` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `pre_uni` decimal(10,2) NOT NULL,
  `fec_cre` date NOT NULL,
  `estado` enum('A','I') COLLATE utf8_unicode_ci NOT NULL,
  `id_det_mod_mar` int(11) NOT NULL,
  `id_tip_act` int(11) NOT NULL,
  `id_guia_con_int` int(11) NOT NULL,
  `id_tip_ing` int(11) NOT NULL,
  `depreciacion` decimal(10,2) NOT NULL,
  `years` decimal(11,0) NOT NULL,
  `porcentaje` decimal(10,2) NOT NULL,
  `residuo` decimal(10,2) NOT NULL,
  `id_depa` int(11) NOT NULL,
  PRIMARY KEY (`id_act`),
  KEY `id_det_mod_mar` (`id_det_mod_mar`),
  KEY `id_tip_act` (`id_tip_act`),
  KEY `id_guia_con_int` (`id_guia_con_int`),
  KEY `id_tip_ing` (`id_tip_ing`),
  KEY `id_depa` (`id_depa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `activo2`
--

INSERT INTO `activo2` (`id_act`, `descripcion`, `cantidad`, `pre_uni`, `fec_cre`, `estado`, `id_det_mod_mar`, `id_tip_act`, `id_guia_con_int`, `id_tip_ing`, `depreciacion`, `years`, `porcentaje`, `residuo`, `id_depa`) VALUES
(6, 'computadora', 5.00, 3000.00, '2017-12-14', 'A', 4, 2, 2, 2, 0.00, 5, 20.00, 0.00, 9),
(7, 'pc', 4.00, 4000.00, '2017-12-14', 'I', 3, 1, 1, 2, 750.00, 4, 10.00, 1000.00, 8);

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id_depa` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del departamento donde va dirigido el activo',
  `estado` enum('A','I') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_depa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`id_depa`, `descripcion`, `estado`) VALUES
(1, 'Tecnologia de informacion', 'A'),
(2, 'Secretaria', 'A'),
(3, 'Logistica', 'A'),
(4, 'Almacen', 'A'),
(5, 'RRHH', 'A'),
(8, 'Laboratorio de computo', 'A'),
(9, 'Cobranza', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_modelo_marca`
--

CREATE TABLE IF NOT EXISTS `detalle_modelo_marca` (
  `id_det_mod_mar` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla detalle entre modelo y marca. ',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del detalle entre modelo y marca. Valores permitidos: A|I.',
  `id_mod` int(11) NOT NULL COMMENT 'Clave for?nea de modelo.',
  `id_mar` int(11) NOT NULL COMMENT 'Clave for?nea de marca.',
  PRIMARY KEY (`id_det_mod_mar`),
  KEY `fk_marca` (`id_mar`),
  KEY `fk_modelo` (`id_mod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `detalle_modelo_marca`
--

INSERT INTO `detalle_modelo_marca` (`id_det_mod_mar`, `estado`, `id_mod`, `id_mar`) VALUES
(1, 'A', 1, 1),
(2, 'A', 2, 1),
(3, 'A', 13, 1),
(4, 'A', 1, 2),
(5, 'I', 2, 2),
(8, 'A', 13, 2),
(10, 'I', 1, 3),
(35, 'A', 13, 3),
(36, 'A', 2, 3),
(37, 'A', 1, 4),
(38, 'A', 2, 4),
(39, 'A', 13, 4),
(41, 'A', 1, 5),
(42, 'A', 2, 5),
(43, 'A', 13, 5),
(44, 'A', 16, 5),
(45, 'A', 1, 6),
(46, 'A', 2, 6),
(47, 'A', 13, 6),
(48, 'A', 16, 6),
(49, 'A', 4, 7),
(50, 'A', 5, 7),
(51, 'A', 6, 7),
(52, 'A', 11, 7),
(53, 'A', 14, 9),
(54, 'A', 15, 9),
(55, 'A', 17, 9),
(56, 'A', 18, 9),
(57, 'A', 19, 9),
(58, 'A', 20, 9),
(59, 'A', 21, 10),
(60, 'A', 22, 10);

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla empleado.',
  `cedula` int(10) NOT NULL COMMENT 'Es la identificaci?n laboral de cada empleado.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del empleado. Valores permitidos. A|I. ',
  `id_per` int(11) NOT NULL COMMENT 'Clave for?nea de la tabla persona.',
  `id_depa` int(11) NOT NULL COMMENT 'Clave for?nea de la tabla departamento.',
  PRIMARY KEY (`id_emp`),
  KEY `fk_departamento` (`id_depa`),
  KEY `fk_persona` (`id_per`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`id_emp`, `cedula`, `estado`, `id_per`, `id_depa`) VALUES
(1, 9887, 'A', 39, 2),
(2, 6545678, 'A', 40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `entrega_custodios`
--

CREATE TABLE IF NOT EXISTS `entrega_custodios` (
  `id_ent_cus` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla entrega de custodios.',
  `fec_ent` datetime NOT NULL COMMENT 'Es la fecha de entrega de custodios.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del estado. Valores permitidos: A|I.',
  `id_act` int(11) NOT NULL COMMENT 'C?digo ?nico de los activos ingresado.',
  `id_emp` int(11) NOT NULL COMMENT 'Clave primaria de la tabla empleado.',
  PRIMARY KEY (`id_ent_cus`),
  KEY `fk_activo` (`id_act`),
  KEY `fk_empleado` (`id_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gia_control_interno`
--

CREATE TABLE IF NOT EXISTS `gia_control_interno` (
  `id_gia_con_int` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla gia de control interno.',
  `descripcion` varchar(20) NOT NULL COMMENT 'Es la descripcion de la gia de control interno.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del estado. Valores permitidos: A|I.',
  PRIMARY KEY (`id_gia_con_int`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gia_control_interno`
--

INSERT INTO `gia_control_interno` (`id_gia_con_int`, `descripcion`, `estado`) VALUES
(1, 'solicitud', 'A'),
(2, 'traslado', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id_mar` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla marca.',
  `descripcion` varchar(20) NOT NULL COMMENT 'Detalle del Modelo del activo.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual de la marca. Valores permitidos: A|I.',
  PRIMARY KEY (`id_mar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id_mar`, `descripcion`, `estado`) VALUES
(1, 'Samsung', 'A'),
(2, 'Sony', 'A'),
(3, 'Epson', 'A'),
(4, 'HP', 'A'),
(5, 'LG', 'A'),
(6, 'Lenovo', 'A'),
(7, 'HoliDay', 'A'),
(9, 'Faber Castell', 'A'),
(10, 'Loro', 'A'),
(17, 'Sansung', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `modelo`
--

CREATE TABLE IF NOT EXISTS `modelo` (
  `id_mod` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla marca.',
  `descripcion` varchar(20) NOT NULL COMMENT 'Detalle del Modelo del activo.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del modelo. Valores permitidos: A|I.',
  PRIMARY KEY (`id_mod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `modelo`
--

INSERT INTO `modelo` (`id_mod`, `descripcion`, `estado`) VALUES
(1, 'Laptop', 'A'),
(2, 'Computadora de Escri', 'A'),
(3, 'Mesa Escritorio', 'A'),
(4, 'Estante', 'A'),
(5, 'Mesa', 'A'),
(6, 'Sillas', 'A'),
(7, 'carola', 'A'),
(8, 'Toyota', 'I'),
(9, 'Nissan', 'A'),
(10, 'k10', 'A'),
(11, 'Escritorio en L Curv', 'I'),
(12, 'Portatil', 'A'),
(13, 'Tablet', 'A'),
(14, 'Lapiceros', 'A'),
(15, 'hojas bon', 'A'),
(16, 'Proyector', 'A'),
(17, 'corrector', 'A'),
(18, 'Borrador', 'A'),
(19, 'lapiz', 'A'),
(20, 'engrampador', 'A'),
(21, 'Cuaderno', 'A'),
(22, 'Folder', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_per` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de persona.',
  `nombres` varchar(30) NOT NULL COMMENT 'Nombres de los empleados que se encuentran dentro de la empresa.',
  `ape_pat` varchar(15) NOT NULL COMMENT 'Apellido paterno de los empleados de la empresa donde laboran.',
  `ape_mat` varchar(15) NOT NULL COMMENT 'Apellido materno de los empleados de la empresa donde laboran.',
  `fec_nac` date NOT NULL COMMENT 'Acta de nacimiento registrado del empleado en la empresa.',
  `dni` char(8) DEFAULT NULL,
  `sexo` enum('M','F') NOT NULL COMMENT 'Sexualidad del empleado. Valores permitidos M|F.',
  `direccion` varchar(30) NOT NULL COMMENT 'Direcci?n del empleado donde se le puede ubicar.',
  `telefono` int(9) NOT NULL COMMENT 'N?mero de tel?fono por la cual poden comunicarse con el empleado.',
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_per`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id_per`, `nombres`, `ape_pat`, `ape_mat`, `fec_nac`, `dni`, `sexo`, `direccion`, `telefono`, `email`) VALUES
(1, 'Enrique', 'Ubillus', 'Luna', '1993-09-08', '70193662', 'M', 'Casma', 989955777, 'doombakuryo@gmail.com'),
(2, 'aldino', 'Fructuoso', 'Barahona', '1989-03-14', '45637132', 'M', 'Moro', 921343022, 'aldi31489@gmail.com'),
(28, 'aldino', 'nieve', 'snow', '2017-11-09', '76767676', 'F', 'alfonso ugarte', 2147483647, 'aldi31489@gmail.com'),
(30, 'maykol', 'cruz', 'lopez', '1993-08-12', '46851298', 'M', 'chimbote', 990390919, 'aldi31489@gmail.com'),
(39, 'aldino', 'f', 'b', '2017-11-22', '43534534', 'M', 'Nuevo Chimbote', 455854645, 'aldi31489@gmail.com'),
(40, 'adrian', 'u', 'l', '2001-11-08', '76578987', 'M', 'Nuevo Chimbote', 975118172, 'ubillusluanenrique@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rotacion`
--

CREATE TABLE IF NOT EXISTS `rotacion` (
  `id_rot` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla rotaci?n.',
  `descripcion` varchar(20) NOT NULL COMMENT 'Detalles acerca de la rotaci?n ',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual de la rotaci?n. Valores permitidos: A|I.',
  `id_act` int(11) NOT NULL,
  `id_depa` int(11) NOT NULL,
  PRIMARY KEY (`id_rot`),
  KEY `id_act` (`id_act`),
  KEY `id_depa` (`id_depa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=192 ;

--
-- Dumping data for table `rotacion`
--

INSERT INTO `rotacion` (`id_rot`, `descripcion`, `estado`, `id_act`, `id_depa`) VALUES
(189, 'Por Incapacidad', 'A', 6, 2),
(190, 'falla stecnicas', 'A', 6, 4),
(191, '7jhg', 'A', 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_activo`
--

CREATE TABLE IF NOT EXISTS `tipo_activo` (
  `id_tip_act` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla tipo de activo.',
  `descripcion` varchar(20) NOT NULL COMMENT 'Detalles de los activos seg?n su tipo.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del tipo de activo. Valores permitidos A|I',
  PRIMARY KEY (`id_tip_act`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo_activo`
--

INSERT INTO `tipo_activo` (`id_tip_act`, `descripcion`, `estado`) VALUES
(1, 'moviliario', 'A'),
(2, 'inmobiliario', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_ingreso`
--

CREATE TABLE IF NOT EXISTS `tipo_ingreso` (
  `id_tip_ing` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla tipo de ingreso.',
  `descripcion` varchar(20) NOT NULL COMMENT 'Es el detalle por la cual est? ingresando ',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del tipo de ingreso. Valores permitidos: A|I.',
  PRIMARY KEY (`id_tip_ing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipo_ingreso`
--

INSERT INTO `tipo_ingreso` (`id_tip_ing`, `descripcion`, `estado`) VALUES
(1, 'Donacion', 'A'),
(2, 'compra', 'A'),
(4, 'Traslado', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tip_usu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria del tipo de usuario. ',
  `descripcion` varchar(20) NOT NULL COMMENT 'Es el nombre del tipo de usuario.',
  `estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual del tipo de usuario. Valores permitidos: A|I.',
  PRIMARY KEY (`id_tip_usu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tip_usu`, `descripcion`, `estado`) VALUES
(1, 'administrador', 'A'),
(2, 'empleado', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria del usuario ',
  `usu_nombre` varchar(20) NOT NULL COMMENT 'Usuario o nombre de pila de un empleado registrado en la empresa.',
  `usu_clave` varchar(20) NOT NULL COMMENT 'Contrase?a con la cual podr? ingresar al sistema un empleado.',
  `usu_estado` enum('A','I') NOT NULL COMMENT 'Situaci?n actual de un usuario de la empresa. Valores permitidos: A|I.',
  `id_per` int(11) NOT NULL,
  `id_tip_usu` int(11) NOT NULL,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `id_per` (`id_per`),
  UNIQUE KEY `usu_nombre` (`usu_nombre`),
  KEY `id_tip_usu` (`id_tip_usu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `usu_clave`, `usu_estado`, `id_per`, `id_tip_usu`) VALUES
(1, 'ubillus', '1234', 'A', 1, 1),
(3, 'aldino', '123', 'A', 2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activo2`
--
ALTER TABLE `activo2`
  ADD CONSTRAINT `activo2_ibfk_1` FOREIGN KEY (`id_det_mod_mar`) REFERENCES `detalle_modelo_marca` (`id_det_mod_mar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activo2_ibfk_2` FOREIGN KEY (`id_tip_act`) REFERENCES `tipo_activo` (`id_tip_act`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activo2_ibfk_3` FOREIGN KEY (`id_guia_con_int`) REFERENCES `gia_control_interno` (`id_gia_con_int`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activo2_ibfk_4` FOREIGN KEY (`id_tip_ing`) REFERENCES `tipo_ingreso` (`id_tip_ing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activo2_ibfk_5` FOREIGN KEY (`id_depa`) REFERENCES `departamento` (`id_depa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detalle_modelo_marca`
--
ALTER TABLE `detalle_modelo_marca`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`id_mar`) REFERENCES `marca` (`id_mar`),
  ADD CONSTRAINT `fk_modelo` FOREIGN KEY (`id_mod`) REFERENCES `modelo` (`id_mod`);

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_persona` FOREIGN KEY (`id_per`) REFERENCES `persona` (`id_per`);

--
-- Constraints for table `entrega_custodios`
--
ALTER TABLE `entrega_custodios`
  ADD CONSTRAINT `fk_empleado` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`);

--
-- Constraints for table `rotacion`
--
ALTER TABLE `rotacion`
  ADD CONSTRAINT `rotacion_ibfk_2` FOREIGN KEY (`id_depa`) REFERENCES `departamento` (`id_depa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rotacion_ibfk_3` FOREIGN KEY (`id_act`) REFERENCES `activo2` (`id_act`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `persona` (`id_per`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_tip_usu`) REFERENCES `tipo_usuario` (`id_tip_usu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
