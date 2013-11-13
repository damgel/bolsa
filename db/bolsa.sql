# SQL Manager Lite for MySQL 5.3.1.7
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : bolsa


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `bolsa`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `bolsa`;

#
# Structure for the `ofertasempleo` table : 
#

CREATE TABLE `ofertasempleo` (
  `cod_ofertas` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `titulo_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `descripcion_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `area_ofertas` INTEGER(11) DEFAULT NULL,
  `cargo_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `vacantes_ofertas` INTEGER(11) DEFAULT NULL,
  `tipodecontratacion_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `anoexp_ofetas` INTEGER(11) DEFAULT NULL,
  `edad` INTEGER(11) DEFAULT NULL,
  `genero_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `vehiculo_ofetas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `salariomax_ofertas` DECIMAL(30,0) DEFAULT NULL,
  `salariomin_ofertas` DECIMAL(30,0) DEFAULT NULL,
  `departamento_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `exp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `tituloen_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nivel_ofertas` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`cod_ofertas`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `reg_empleador` table : 
#

CREATE TABLE `reg_empleador` (
  `cod_emp` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `password_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `confirm_password_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `email_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefono_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `url_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `textarea_emp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `actividad_empresa` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`cod_emp`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `perfilempleador` table : 
#

CREATE TABLE `perfilempleador` (
  `cod_perfilemp` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `cod_emp` INTEGER(11) DEFAULT NULL,
  `direc_perfilemp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `departamento_perfilemp` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `subirlog_perfilemp` BINARY(1) DEFAULT NULL,
  PRIMARY KEY USING BTREE (`cod_perfilemp`) COMMENT '',
   INDEX `cod_emp` USING BTREE (`cod_emp`) COMMENT '',
  CONSTRAINT `perfilempleador_fk1` FOREIGN KEY (`cod_emp`) REFERENCES `reg_empleador` (`cod_emp`)
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `reg_usuario` table : 
#

CREATE TABLE `reg_usuario` (
  `cod_regu` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `apellido_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `fecha_nac_regu` DATE DEFAULT NULL,
  `direccion_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefono_contacto_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `email_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `password_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `password2_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `genero_regu` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`cod_regu`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `perfilusuario` table : 
#

CREATE TABLE `perfilusuario` (
  `cod_u` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `cod_regu` INTEGER(11) DEFAULT NULL,
  `nombrereferencia1_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `apellidoreferencia1_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `telreferencia1_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nombrereferencia2_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `apellidoreferencia2_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `telreferencia2_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `nombrereferencia3_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `apellidoreferencia3_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `telreferencia3_u` CHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `subir_u` BINARY(1) DEFAULT NULL,
  PRIMARY KEY USING BTREE (`cod_u`) COMMENT '',
   INDEX `cod_regu` USING BTREE (`cod_regu`) COMMENT '',
  CONSTRAINT `perfilusuario_fk1` FOREIGN KEY (`cod_regu`) REFERENCES `reg_usuario` (`cod_regu`)
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;