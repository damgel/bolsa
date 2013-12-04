CREATE TABLE `usuario` (
  `cod_u` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_u` varchar(20) DEFAULT NULL,
  `apellido_u` varchar(20) DEFAULT NULL,
  `fecha_nac_u` date DEFAULT NULL,
  `direccion_u` varchar(50) DEFAULT NULL,
  `telefono_u` varchar(20) DEFAULT NULL,
  `email_u` varchar(20) DEFAULT NULL,
  `carnet` varchar(60) DEFAULT NULL,
  `password_u` varchar(50) DEFAULT NULL,
  `sexo_u` varchar(20) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_u`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;