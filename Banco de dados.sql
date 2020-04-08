CREATE DATABASE  IF NOT EXISTS `dbhemocentro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbhemocentro`;
-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: dbhemocentro
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

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
-- Table structure for table `coordenador`
--

DROP TABLE IF EXISTS `coordenador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordenador` (
  `idCoordenador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_coordenador` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCoordenador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coordenador`
--

LOCK TABLES `coordenador` WRITE;
/*!40000 ALTER TABLE `coordenador` DISABLE KEYS */;
INSERT INTO `coordenador` VALUES (1,'Danilo','danilo@gmail.com','12345');
/*!40000 ALTER TABLE `coordenador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doador`
--

DROP TABLE IF EXISTS `doador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doador` (
  `idDoador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `etinia` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL,
  `estadocivil` varchar(45) DEFAULT NULL,
  `escolaridade` varchar(45) DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `pa` varchar(45) DEFAULT NULL,
  `hhbht` varchar(45) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `estadodoacao` varchar(45) DEFAULT NULL,
  `pai` varchar(45) DEFAULT NULL,
  `mae` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `profissao` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDoador`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doador`
--

LOCK TABLES `doador` WRITE;
/*!40000 ALTER TABLE `doador` DISABLE KEYS */;
INSERT INTO `doador` VALUES (1,'dione','Feminino','4','br','1','6',1.8,80,NULL,NULL,NULL,'2019-06-05','54545','5959959','dddddd','ipora','762000','1','des','ilda','brr','estudante','595959','mato'),(2,'samuel','Masculino','Negro','bb','ViÃºvo','3Âº Grau Incomp',1.8,80,NULL,NULL,NULL,'2019-06-04','55','999999','njbhjnhjjhgj','hgjhjkh','77777777','1','jjjjjjjj','jjjjjjjjjjjjj','bb','est','555555','mamama'),(3,NULL,NULL,NULL,NULL,NULL,'sõao',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'feio','Masculino','Negro','bb','ViÃºvo','3Âº Grau Incomp',1.8,80,NULL,NULL,NULL,'2019-06-04','55','999999','njbhjnhjjhgj','hgjhjkh','77777777','1','jjjjjjjj','jjjjjjjjjjjjj','bb','est','555555','mamama'),(5,'ddd','Masculino','Negro','bb','ViÃºvo','3Âº Grau Incomp',1.8,80,NULL,NULL,NULL,'2019-06-04','55','999999','njbhjnhjjhgj','hgjhjkh','77777777','1','jjjjjjjj','jjjjjjjjjjjjj','bb','est','555555','mamama');
/*!40000 ALTER TABLE `doador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doenca`
--

DROP TABLE IF EXISTS `doenca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doenca` (
  `idDoenca` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `Doador_idDoador` int(11) NOT NULL,
  PRIMARY KEY (`idDoenca`),
  KEY `fk_Doenca_Doador_idx` (`Doador_idDoador`),
  CONSTRAINT `fk_Doenca_Doador` FOREIGN KEY (`Doador_idDoador`) REFERENCES `doador` (`idDoador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doenca`
--

LOCK TABLES `doenca` WRITE;
/*!40000 ALTER TABLE `doenca` DISABLE KEYS */;
/*!40000 ALTER TABLE `doenca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estoquesangue`
--

DROP TABLE IF EXISTS `estoquesangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estoquesangue` (
  `idestoque` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `quantidade` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestoque`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estoquesangue`
--

LOCK TABLES `estoquesangue` WRITE;
/*!40000 ALTER TABLE `estoquesangue` DISABLE KEYS */;
INSERT INTO `estoquesangue` VALUES (1,'A+','0'),(2,'A-','0'),(3,'B+','0'),(4,'B-','0'),(5,'AB+','0'),(6,'AB-','0'),(7,'O+','0'),(8,'O+','0');
/*!40000 ALTER TABLE `estoquesangue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sangue`
--

DROP TABLE IF EXISTS `sangue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sangue` (
  `idSangue` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `quantidade` varchar(45) DEFAULT NULL,
  `datadoacao` date DEFAULT NULL,
  `Doador_idDoador` int(11) NOT NULL,
  PRIMARY KEY (`idSangue`),
  KEY `fk_Sangue_Doador1_idx` (`Doador_idDoador`),
  CONSTRAINT `fk_Sangue_Doador1` FOREIGN KEY (`Doador_idDoador`) REFERENCES `doador` (`idDoador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sangue`
--

LOCK TABLES `sangue` WRITE;
/*!40000 ALTER TABLE `sangue` DISABLE KEYS */;
/*!40000 ALTER TABLE `sangue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sintoma`
--

DROP TABLE IF EXISTS `sintoma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sintoma` (
  `idSintoma` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `Doador_idDoador` int(11) NOT NULL,
  PRIMARY KEY (`idSintoma`),
  KEY `fk_Sintoma_Doador1_idx` (`Doador_idDoador`),
  CONSTRAINT `fk_Sintoma_Doador1` FOREIGN KEY (`Doador_idDoador`) REFERENCES `doador` (`idDoador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sintoma`
--

LOCK TABLES `sintoma` WRITE;
/*!40000 ALTER TABLE `sintoma` DISABLE KEYS */;
/*!40000 ALTER TABLE `sintoma` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-17 23:44:22
