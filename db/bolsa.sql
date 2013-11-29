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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad_empresa`
--

LOCK TABLES `actividad_empresa` WRITE;
/*!40000 ALTER TABLE `actividad_empresa` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (3,'N','assets/images/empresa/528699d2405d6emp.jpg','blogger and partnerds','dn@hotmail.com','destiny132002','bloogger1234@mails.com','700000003','www.somethinwild.com',' empresa muy cool','internet',NULL,NULL),(4,'N','assets/images/empresa/52869c4687992emp.jpg','blogger','blog402','alumina132002','bloogger@mails.com','700000003','www.somethinwild.com',' ','internet',NULL,NULL);
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
-- Table structure for table `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ofertas`
--

LOCK TABLES `ofertas` WRITE;
/*!40000 ALTER TABLE `ofertas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ofertas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfilusuario`
--

DROP TABLE IF EXISTS `perfilusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfilusuario`
--

LOCK TABLES `perfilusuario` WRITE;
/*!40000 ALTER TABLE `perfilusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `perfilusuario` ENABLE KEYS */;
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
  PRIMARY KEY (`cod_u`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
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

-- Dump completed on 2013-11-28 20:55:38
