CREATE DATABASE  IF NOT EXISTS `bolsa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bolsa`;
-- MySQL dump 10.13  Distrib 5.6.12, for Win64 (x86_64)
--
-- Host: localhost    Database: bolsa
-- ------------------------------------------------------
-- Server version	5.6.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad_empresa`
--

DROP TABLE IF EXISTS `actividad_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividad_empresa` (
  `idac_empresa` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_actividad` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`idac_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad_empresa`
--

LOCK TABLES `actividad_empresa` WRITE;
/*!40000 ALTER TABLE `actividad_empresa` DISABLE KEYS */;
INSERT INTO `actividad_empresa` VALUES (1,'Aeronaves'),(2,'Agencia de reclutamiento'),(3,'Agrícola | Ganadera'),(4,'Agroindustria'),(5,'Arquitectura | Diseño | Decoración'),(6,'Automotriz'),(7,'Bancos | Financieras'),(8,'Bebidas | Alimentos'),(9,'Bienes Raíces'),(10,'Bufete de Abogados'),(11,'Call Center'),(12,'Carpintería|Muebles'),(13,'Científica'),(14,'Combustible |(Gas | Petroleo)'),(15,'Comercial'),(16,'Comercio Mayorista'),(17,'Comercio Minorista'),(18,'Confecciones'),(19,'Construcción'),(20,'Consultoría | Asesoría'),(21,'Defensa'),(22,'Educación | Capacitación'),(23,'Electricidad Distribución | Generación'),(24,'Entretenimiento'),(25,'Estudios Jurídicos'),(26,'Exportación | Importación'),(27,'Farmaceutica'),(28,'Forestal | Papel | Celulosa'),(29,'Gobierno'),(30,'Hotelera | Turismo | Restaurantes'),(31,'Imprenta | Editoriales'),(32,'Industrial'),(33,'Ingeniería'),(34,'Internet'),(35,'Inmobiliaria | Propiedades'),(36,'Inversiones'),(37,'Logística | Distribución'),(38,'Manufacturas varias'),(39,'Maquila'),(40,'Materiales de consrucción'),(41,'Medicina | Salud'),(42,'Medios de Comunicación'),(43,'Metalmecánica; Minería'),(44,'Naviera'),(45,'Operaciones Portuarias'),(46,'Organizaciones sin Fines de Lucro'),(47,'Pesquera'),(48,'Publicidad | Marketing'),(49,'Química'),(50,'Seguros | Previsión Servicios'),(51,'Servicios Financieros varios'),(52,'Tecnologías de Información'),(53,'Telecomunicaciones'),(54,'Textil | Maquila'),(55,'Transporte'),(56,'Otros');
/*!40000 ALTER TABLE `actividad_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departamentoscol_UNIQUE` (`departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (3,'Ahuachapán'),(4,'Cabañas'),(5,'Chalatenango'),(6,'Cuscatlán'),(7,'La Libertad'),(8,'La Paz'),(9,'La Unión'),(10,'Morazán'),(11,'San Miguel'),(12,'San Salvador'),(13,'San Vicente'),(14,'Santa Ana'),(15,'Sonsonate'),(16,'Usulután');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (3,'S','assets/images/empresa/528699d2405d6emp.jpg','TIGO','dn@hotmail.com','destiny132002','deakill@hotmail.com','700000003','www.somethinwild.com',' empresa muy cool','internet',NULL,NULL),(4,'S','assets/images/empresa/52869c4687992emp.jpg','TELEPERFORMANCE','blog402','alumina132002','bloogger@mails.com','700000003','www.somethinwild.com',' ','internet',NULL,NULL),(5,'S','assets/images/empresa/529a425b9d34e528b919259dd5descarga.jpg','AVIANCA','empresa01','persecuta','empresa01@emp.com','81214789','http://www.somethinwild.com',' empresa muy exitosa con 4 anios de experiencia realizando trabajo a nivel empresarial, dentro y fuera del pais.','Bienes RaÃ­ces',NULL,NULL),(6,'N','assets/images/empresa/52a059c1e6d52images.jpg','SUPER EMPRESA','superempresa','destiny132002','empresa01@hotmail.com','79263016','http://www.google.com','esta es una empresa dedicada al procesamiento y venta exclusiva de productos artesanales. ','Otros',NULL,NULL),(7,'S','assets/images/empresa/52a05c8581464Telefono.jpg','SUPER EMPRESA2','empresa sa de sv','destiny132002','empresa02@hotmail.com','700000000','http://www.somecold.com','empresa dedicada a la renta de apartamentos','Comercio Minorista','Usulutan',NULL),(8,'S','assets/images/empresa/52a05d935afdf2566829399_86e0600664_m_thumb.jpg','Telefonica','telefonica','telefonica','telefonica@telefonica.com','22770000','http://www.telefonica.com.sv','Empresa telefonica Espanola','Telecomunicaciones','San Salvador',NULL);
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero`
--

DROP TABLE IF EXISTS `genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero` (
  `idgenero` int(5) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idgenero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oferta_aplicaciones`
--

DROP TABLE IF EXISTS `oferta_aplicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oferta_aplicaciones` (
  `cod_detalleOferta` int(20) NOT NULL AUTO_INCREMENT,
  `cod_em` int(20) DEFAULT NULL,
  `cod_u` int(20) DEFAULT NULL,
  `cod_oferta` int(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_detalleOferta`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oferta_aplicaciones`
--

LOCK TABLES `oferta_aplicaciones` WRITE;
/*!40000 ALTER TABLE `oferta_aplicaciones` DISABLE KEYS */;
INSERT INTO `oferta_aplicaciones` VALUES (2,3,1,2,'2013-12-04 13:22:23'),(3,3,1,2,'2013-12-04 13:22:28'),(11,4,9,8,'2013-12-05 02:45:57'),(12,4,9,8,'2013-12-05 02:46:25'),(26,4,9,12,'2013-12-05 03:55:32'),(27,4,9,12,'2013-12-05 03:55:39'),(28,3,9,2,'2013-12-05 03:58:08'),(29,4,9,22,'2013-12-05 04:05:39'),(30,4,9,22,'2013-12-05 04:11:05'),(31,4,9,22,'2013-12-05 04:24:10');
/*!40000 ALTER TABLE `oferta_aplicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ofertas` (
  `cod_oferta` int(20) NOT NULL AUTO_INCREMENT,
  `cod_em` int(20) DEFAULT NULL,
  `titulo_of` varchar(120) DEFAULT NULL,
  `descripcion_of` varchar(250) DEFAULT NULL,
  `area_of` int(11) DEFAULT NULL,
  `cargo_of` varchar(20) DEFAULT NULL,
  `vacantes_of` int(11) DEFAULT NULL,
  `contratacion_of` varchar(20) DEFAULT NULL,
  `anoexp_ofetas` int(11) DEFAULT NULL,
  `edad` int(10) DEFAULT NULL,
  `genero_of` varchar(20) DEFAULT NULL,
  `vehiculo_ofetas` varchar(20) DEFAULT NULL,
  `salariomax_of` decimal(30,0) DEFAULT NULL,
  `salariomin_of` decimal(30,0) DEFAULT NULL,
  `departamento_of` varchar(20) DEFAULT NULL,
  `experiencia` varchar(20) DEFAULT NULL,
  `tituloen_of` varchar(20) DEFAULT NULL,
  `nivel_of` varchar(20) DEFAULT NULL,
  `disponible_of` int(1) DEFAULT '0',
  `aprovacion_of` int(1) DEFAULT '0',
  `fecha_of` datetime DEFAULT NULL,
  `fechaFin_of` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_oferta`) USING BTREE,
  UNIQUE KEY `cod_oferta_UNIQUE` (`cod_oferta`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofertas`
--

LOCK TABLES `ofertas` WRITE;
/*!40000 ALTER TABLE `ofertas` DISABLE KEYS */;
INSERT INTO `ofertas` VALUES (2,3,'DESARROLLADOR PHP','se necesita desarrollador php con experiencia en mvc y template engines. Tambien se requiren conocimientos avanzados en el desarrollo de plugins con javascript y uso avanzado de jquey. Tambien debe poseer solidos conocimientos con bases de datos.',0,'Jefe de Proyecto',1,'TC',0,26,'M','',500,1200,'San Salvador','el aspirante debe ma','INGENIERO','Estudiante Universit',1,1,'2013-12-04 11:09:45','2013-12-04 10:30:37'),(15,5,'Aplicacion 14','se necesita desarrollador php con experiencia en mvc y template engines ',0,'Jefe de Proyecto',1,'TC',0,26,'M','',500,1200,'San Salvador','el aspirante debe ma','INGENIERO','Estudiante Universit',1,0,'2013-12-01 17:41:08','2013-12-04 10:30:59'),(16,5,'Aplicacion 15','se necesita desarrollador php con experiencia en mvc y template engines ',0,'Jefe de Proyecto',1,'TC',0,26,'M','',500,1200,'San Salvador','el aspirante debe ma','INGENIERO','Estudiante Universit',1,0,'2013-12-01 17:41:10','2013-12-04 10:31:01'),(22,4,'BRAND NEW OFERTA','OFERTA EXCLUSIVA, PERVERT WAY. ',0,'sexy girl',1,'MT',0,19,'F','No',500,150,'Cuscatlan',NULL,NULL,NULL,1,1,'2013-12-05 03:25:03',NULL),(23,3,'DESARROLLO DE APLICACIONES JAV','SE OFRECE UN PUESTO DE TRABAJO PARA  ',0,'administrador',1,'TC',0,26,'F','Si',500,150,'San Salvador',NULL,NULL,NULL,1,0,'2013-12-05 04:28:03',NULL),(24,8,'dba oracle','Administrador base de datos ',0,'dba oracle',1,'TC',0,25,'M','Si',1700,1200,'San Salvador',NULL,NULL,NULL,1,0,'2013-12-05 05:12:10',NULL);
/*!40000 ALTER TABLE `ofertas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'fname1','lname1','(000)000-0000','name1@gmail.com'),(4,'fname2','lname2','(000)000-0000','name2@gmail.com'),(5,'fname3','lname3','(000)000-0000','name3@gmail.com'),(7,'fname4','lname4','(000)000-0000','name4@gmail.com'),(8,'fname5','lname5','(000)000-0000','name5@gmail.com'),(9,'fname6','lname6','(000)000-0000','name6@gmail.com'),(10,'fname7','lname7','(000)000-0000','name7@gmail.com'),(11,'fname8','lname8','(000)000-0000','name8@gmail.com'),(12,'fname9','lname9','(000)000-0000','name9@gmail.com'),(13,'fname10','lname10','(000)000-0000','name10@gmail.com'),(14,'jose','manuel','guillen','damgel@outlook.com'),(15,'jose','manuel','guillen','damgel@outlook.com'),(16,'jose','manuel','guillen','damgel@outlook.com'),(17,'jose','manuel','guillen','damgel@outlook.com'),(18,'jose','manuel','guillen','damgel@outlook.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `carnet` varchar(60) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_u`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (9,'JOSE GUILLEN','RAMIREZZ','1991-04-14','FINAL 4A CALLE PONIE','79263016','deakill@hotmail.com','destiny132002','Masculino','gr102909','2013-12-05 02:39:58');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bolsa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-06 11:39:16
