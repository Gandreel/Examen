CREATE DATABASE  IF NOT EXISTS `examen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `examen`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: examen
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

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
-- Table structure for table `analisismuestras`
--

DROP TABLE IF EXISTS `analisismuestras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analisismuestras` (
  `idAnalisisMuestras` int(11) NOT NULL AUTO_INCREMENT,
  `fechaRecepcion` date NOT NULL,
  `temperaturaMuestra` decimal(3,1) NOT NULL,
  `cantidadMuestra` int(11) NOT NULL,
  `Empresa_codigoEmpresa` int(11) DEFAULT NULL,
  `Particular_codigoParticular` int(11) DEFAULT NULL,
  `rutEmpleadoRecibe` varchar(10) NOT NULL,
  PRIMARY KEY (`idAnalisisMuestras`),
  KEY `fk_Empresa_idx` (`Empresa_codigoEmpresa`),
  KEY `fk_Particular_idx` (`Particular_codigoParticular`),
  KEY `fk_empleado_idx` (`rutEmpleadoRecibe`),
  CONSTRAINT `fk_Empresa1` FOREIGN KEY (`Empresa_codigoEmpresa`) REFERENCES `empresa` (`codigoEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Particular1` FOREIGN KEY (`Particular_codigoParticular`) REFERENCES `particular` (`codigoParticular`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleado1` FOREIGN KEY (`rutEmpleadoRecibe`) REFERENCES `empleado` (`rutEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analisismuestras`
--

LOCK TABLES `analisismuestras` WRITE;
/*!40000 ALTER TABLE `analisismuestras` DISABLE KEYS */;
INSERT INTO `analisismuestras` VALUES (9,'2018-07-12',1.2,2,NULL,2,'19773471-k'),(10,'2018-07-12',1.2,2,NULL,2,'19773471-k');
/*!40000 ALTER TABLE `analisismuestras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `rutContacto` varchar(10) NOT NULL,
  `nombreContacto` varchar(30) NOT NULL,
  `emailContacto` varchar(45) NOT NULL,
  `telefonoContacto` varchar(15) NOT NULL,
  `Empresa_codigoEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`rutContacto`),
  KEY `fk_empresa_idx` (`Empresa_codigoEmpresa`),
  CONSTRAINT `fk_empresa` FOREIGN KEY (`Empresa_codigoEmpresa`) REFERENCES `empresa` (`codigoEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES ('1-1','Juanito perez','algo@algo.com','987456321',1);
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `rutEmpleado` varchar(10) NOT NULL,
  `nombreEmpleado` varchar(10) NOT NULL,
  `passwordEmpleado` varchar(10) NOT NULL,
  `categoria` varchar(1) NOT NULL,
  PRIMARY KEY (`rutEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES ('19773471-k','Javata','123456','1');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `codigoEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `rutEmpresa` varchar(10) NOT NULL,
  `nombreEmpresa` varchar(30) NOT NULL,
  `passwordEmpresa` varchar(10) NOT NULL,
  `direccionEmpresa` varchar(50) NOT NULL,
  PRIMARY KEY (`codigoEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'1-1','Juanito','123456','algo #754');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `particular`
--

DROP TABLE IF EXISTS `particular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `particular` (
  `codigoParticular` int(11) NOT NULL AUTO_INCREMENT,
  `rutParticular` varchar(45) NOT NULL,
  `passwordParticular` varchar(45) NOT NULL,
  `nombreParticular` varchar(45) NOT NULL,
  `direccionParticular` varchar(45) NOT NULL,
  `emailParticular` varchar(45) NOT NULL,
  `Activo` varchar(1) NOT NULL,
  PRIMARY KEY (`codigoParticular`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `particular`
--

LOCK TABLES `particular` WRITE;
/*!40000 ALTER TABLE `particular` DISABLE KEYS */;
INSERT INTO `particular` VALUES (2,'19328150-8','1234','Luis Laz','Olmue','Luis@gmail.com','A');
/*!40000 ALTER TABLE `particular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resultadoanalisis`
--

DROP TABLE IF EXISTS `resultadoanalisis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resultadoanalisis` (
  `idTipoAnalisis` int(11) NOT NULL,
  `idAnalisisMuestras` int(11) NOT NULL,
  `FechaRegistro` date NOT NULL,
  `PPM` int(11) NOT NULL,
  `estado` bit(1) NOT NULL,
  `rutEmpleadoAnalista` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idAnalisisMuestras`),
  KEY `fk_tipoAnalisis_idx` (`idTipoAnalisis`),
  KEY `fk_analisisMuestra_idx` (`idAnalisisMuestras`),
  KEY `fk_empleado2_idx` (`rutEmpleadoAnalista`),
  CONSTRAINT `fk_analisisMuestra` FOREIGN KEY (`idAnalisisMuestras`) REFERENCES `analisismuestras` (`idAnalisisMuestras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleado2` FOREIGN KEY (`rutEmpleadoAnalista`) REFERENCES `empleado` (`rutEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipoAnalisis` FOREIGN KEY (`idTipoAnalisis`) REFERENCES `tipoanalisis` (`idTipoAnalisis`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resultadoanalisis`
--

LOCK TABLES `resultadoanalisis` WRITE;
/*!40000 ALTER TABLE `resultadoanalisis` DISABLE KEYS */;
INSERT INTO `resultadoanalisis` VALUES (3,9,'2018-07-12',480,'','19773471-k'),(2,10,'2018-07-12',0,'\0',NULL);
/*!40000 ALTER TABLE `resultadoanalisis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefono` (
  `idTelefono` int(11) NOT NULL AUTO_INCREMENT,
  `numeroTelefono` varchar(15) NOT NULL,
  `Particular_codigoParticular` int(11) NOT NULL,
  PRIMARY KEY (`idTelefono`),
  KEY `FK_Particular_idx` (`Particular_codigoParticular`),
  CONSTRAINT `FK_Particular` FOREIGN KEY (`Particular_codigoParticular`) REFERENCES `particular` (`codigoParticular`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoanalisis`
--

DROP TABLE IF EXISTS `tipoanalisis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoanalisis` (
  `idTipoAnalisis` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoAnalisis`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoanalisis`
--

LOCK TABLES `tipoanalisis` WRITE;
/*!40000 ALTER TABLE `tipoanalisis` DISABLE KEYS */;
INSERT INTO `tipoanalisis` VALUES (2,'Metales Pesados','red'),(3,'Microtoxinas','blue'),(4,'Plagaguicidas','green'),(5,'Marea Roja','yellow'),(6,'Bacterias Nocivas','orange');
/*!40000 ALTER TABLE `tipoanalisis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-12 14:40:24
