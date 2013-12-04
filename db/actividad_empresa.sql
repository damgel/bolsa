-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2013 a las 23:36:41
-- Versión del servidor: 5.5.34-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bolsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_empresa`
--

CREATE TABLE IF NOT EXISTS `actividad_empresa` (
  `idac_empresa` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_actividad` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idac_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `actividad_empresa`
--

INSERT INTO `actividad_empresa` (`idac_empresa`, `nombre_actividad`) VALUES
(1, 'Aeronaves'),
(2, 'Agencia de reclutamiento'),
(3, 'Agrícola | Ganadera'),
(4, 'Agroindustria'),
(5, 'Arquitectura | Diseño | Decoración'),
(6, 'Automotriz'),
(7, 'Bancos | Financieras'),
(8, 'Bebidas | Alimentos'),
(9, 'Bienes Raíces'),
(10, 'Bufete de Abogados'),
(11, 'Call Center'),
(12, 'Carpintería|Muebles'),
(13, 'Científica'),
(14, 'Combustible |(Gas | Petroleo)'),
(15, 'Comercial'),
(16, 'Comercio Mayorista'),
(17, 'Comercio Minorista'),
(18, 'Confecciones'),
(19, 'Construcción'),
(20, 'Consultoría | Asesoría'),
(21, 'Defensa'),
(22, 'Educación | Capacitación'),
(23, 'Electricidad Distribución | Generación'),
(24, 'Entretenimiento'),
(25, 'Estudios Jurídicos'),
(26, 'Exportación | Importación'),
(27, 'Farmaceutica'),
(28, 'Forestal | Papel | Celulosa'),
(29, 'Gobierno'),
(30, 'Hotelera | Turismo | Restaurantes'),
(31, 'Imprenta | Editoriales'),
(32, 'Industrial'),
(33, 'Ingeniería'),
(34, 'Internet'),
(35, 'Inmobiliaria | Propiedades'),
(36, 'Inversiones'),
(37, 'Logística | Distribución'),
(38, 'Manufacturas varias'),
(39, 'Maquila'),
(40, 'Materiales de consrucción'),
(41, 'Medicina | Salud'),
(42, 'Medios de Comunicación'),
(43, 'Metalmecánica; Minería'),
(44, 'Naviera'),
(45, 'Operaciones Portuarias'),
(46, 'Organizaciones sin Fines de Lucro'),
(47, 'Pesquera'),
(48, 'Publicidad | Marketing'),
(49, 'Química'),
(50, 'Seguros | Previsión Servicios'),
(51, 'Servicios Financieros varios'),
(52, 'Tecnologías de Información'),
(53, 'Telecomunicaciones'),
(54, 'Textil | Maquila'),
(55, 'Transporte'),
(56, 'Otros');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
