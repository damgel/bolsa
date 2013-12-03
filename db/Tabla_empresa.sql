-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2013 a las 23:52:05
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
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `cod_em` int(11) NOT NULL AUTO_INCREMENT,
  `activa_em` varchar(1) DEFAULT NULL,
  `imagen_em` varchar(120) DEFAULT NULL,
  `nombre_em` varchar(120) DEFAULT NULL,
  `usuario_em` varchar(45) DEFAULT NULL,
  `password_em` varchar(20) DEFAULT NULL,
  `email_em` varchar(50) DEFAULT NULL,
  `telefono_em` varchar(12) DEFAULT NULL,
  `url_em` varchar(120) DEFAULT NULL,
  `descripcion_em` varchar(250) DEFAULT NULL,
  `actividad_em` varchar(50) DEFAULT NULL,
  `departamento_em` varchar(20) DEFAULT NULL,
  `direccion_em` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_em`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`cod_em`, `activa_em`, `imagen_em`, `nombre_em`, `usuario_em`, `password_em`, `email_em`, `telefono_em`, `url_em`, `descripcion_em`, `actividad_em`, `departamento_em`, `direccion_em`) VALUES
(6, 'S', 'assets/images/empresa/529c9a1594dcaLogoAviancaTaca.jpg', 'Avianca Taca', 'avianca', 'avianca1', 'ramirinsv@gmail.com', '25140000', 'http://nuevaexperiencia.avianca.com/es-sv', 'AerolÃ­nea lÃ­der de AmÃ©rica Latina', 'Aeronaves', NULL, NULL),
(7, 'S', 'assets/images/empresa/529d15e92ca80logoBancoAgricola.jpg', 'Banco Agricola', 'bancoagricola', 'bancoagricola', 'gestionhumana@bancoagricola.com.sv', '22670000', 'http://www.bancoagricola.com', ' Empresa Financiera numero uno del paÃ­s', 'Bancos | Financieras', NULL, NULL),
(8, 'S', 'assets/images/empresa/529d1a0e725e7logoGrupoQ.jpg', 'Grupo Q', 'grupoq', 'grupoq11', 'gestionhumana@grupoq.com.sv', '22500000', 'http://www.grupoq.com/grupoQ/sv/home.html', ' Empresa lÃ­der en la industria automotriz', 'Automotriz', NULL, NULL),
(9, 'S', 'assets/images/empresa/529d1b28de62alogoTeleperformance.jpg', 'Teleperformance', 'teleperformance', 'teleperformance', 'gestionhumana@tperformance.com.sv', '22770000', 'https://www.facebook.com/pages/Teleperformance-El-Salvador/124642220888755', ' Empresa de Call Center', 'Call Center', NULL, NULL),
(10, 'S', 'assets/images/empresa/529d1c0e013b8LogoTigo.jpg', 'Tigo El Salvador', 'tigo', 'tigoelsalvador', 'gestionhumana@tigo.com.sv', '22074000', 'http://www.tigo.com.sv/', 'Empresa lÃ­der en Telecomunicaciones', 'Telecomunicaciones', NULL, NULL),
(11, 'S', 'assets/images/empresa/529d1c9a5a8ddLogoTigo.jpg', 'Tigo El Salvador', 'tigo', '', 'gestionhumana@tigo.com.sv', '22074000', 'http://www.tigo.com.sv/', 'Empresa lÃ­der en Telecomunicaciones', 'Telecomunicaciones', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
