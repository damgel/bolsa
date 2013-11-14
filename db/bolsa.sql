# SQL Manager for MySQL 4.6.0.1
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : bolsa


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `bolsa`;

CREATE DATABASE `bolsa`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `bolsa`;

#
# Structure for the `empresa` table : 
#

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `cod_em` int(11) NOT NULL AUTO_INCREMENT,
  `imagen_em` binary(1) DEFAULT NULL,
  `nombre_em` varchar(20) DEFAULT NULL,
  `password_em` varchar(20) DEFAULT NULL,
  `email_em` varchar(20) DEFAULT NULL,
  `telefono_em` varchar(20) DEFAULT NULL,
  `url_em` varchar(20) DEFAULT NULL,
  `textarea_em` varchar(20) DEFAULT NULL,
  `actividad_em` varchar(20) DEFAULT NULL,
  `departamento_em` varchar(20) DEFAULT NULL,
  `direccion_em` varchar(20) DEFAULT NULL,
  `activa_em` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`cod_em`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `ofertas` table : 
#

DROP TABLE IF EXISTS `ofertas`;

CREATE TABLE `ofertas` (
  `cod_of` int(11) NOT NULL AUTO_INCREMENT,
  `cod_em` int(11) DEFAULT NULL,
  `titulo_of` varchar(20) DEFAULT NULL,
  `descripcion_of` varchar(20) DEFAULT NULL,
  `area_of` int(11) DEFAULT NULL,
  `cargo_of` varchar(20) DEFAULT NULL,
  `vacantes_of` int(11) DEFAULT NULL,
  `contratacion_of` varchar(20) DEFAULT NULL,
  `anoexp_ofetas` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `genero_of` varchar(20) DEFAULT NULL,
  `vehiculo_ofetas` varchar(20) DEFAULT NULL,
  `salariomax_of` decimal(30,0) DEFAULT NULL,
  `salariomin_of` decimal(30,0) DEFAULT NULL,
  `departamento_of` varchar(20) DEFAULT NULL,
  `exp` varchar(20) DEFAULT NULL,
  `tituloen_of` varchar(20) DEFAULT NULL,
  `nivel_of` varchar(20) DEFAULT NULL,
  `disponible_of` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`cod_of`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `usuario` table : 
#

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `cod_u` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_u` varchar(20) DEFAULT NULL,
  `apellido_u` varchar(20) DEFAULT NULL,
  `fecha_nac_u` date DEFAULT NULL,
  `direccion_u` varchar(20) DEFAULT NULL,
  `telefono_u` varchar(20) DEFAULT NULL,
  `email_u` varchar(20) DEFAULT NULL,
  `password_u` varchar(20) DEFAULT NULL,
  `sexo_u` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod_u`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `perfilusuario` table : 
#

DROP TABLE IF EXISTS `perfilusuario`;

CREATE TABLE `perfilusuario` (
  `cod_u` int(11) NOT NULL AUTO_INCREMENT,
  `cod_regu` int(11) DEFAULT NULL,
  `nombrereferencia1_u` varchar(20) DEFAULT NULL,
  `apellidoreferencia1_u` varchar(20) DEFAULT NULL,
  `telreferencia1_u` varchar(20) DEFAULT NULL,
  `nombrereferencia2_u` varchar(20) DEFAULT NULL,
  `apellidoreferencia2_u` varchar(20) DEFAULT NULL,
  `telreferencia2_u` varchar(20) DEFAULT NULL,
  `nombrereferencia3_u` varchar(20) DEFAULT NULL,
  `apellidoreferencia3_u` varchar(20) DEFAULT NULL,
  `telreferencia3_u` varchar(20) DEFAULT NULL,
  `subir_u` binary(1) DEFAULT NULL,
  PRIMARY KEY (`cod_u`) USING BTREE,
  KEY `cod_u` (`cod_u`) USING BTREE,
  CONSTRAINT `perfilusuario_fk1` FOREIGN KEY (`cod_u`) REFERENCES `usuario` (`cod_u`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;