CREATE DATABASE  IF NOT EXISTS `messagerie` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `messagerie`;
-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: messagerie
-- ------------------------------------------------------
-- Server version   5.7.19-0ubuntu0.16.04.1
 
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
-- Table structure for table `mes_message`
--
 
DROP TABLE IF EXISTS `mes_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mes_message` (
  `mes_oid` int(11) NOT NULL AUTO_INCREMENT,
  `mes_titre` varchar(255) DEFAULT NULL,
  `mes_texte` varchar(255) DEFAULT NULL,
  `mes_date` date DEFAULT NULL,
  `uti_oid` int(11) NOT NULL,
  PRIMARY KEY (`mes_oid`),
  KEY `fk_utilisateur` (`uti_oid`),
  CONSTRAINT `fk_utilisateur` FOREIGN KEY (`uti_oid`) REFERENCES `uti_utilisateur` (`uti_oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
 
--
-- Dumping data for table `mes_message`
--
 
LOCK TABLES `mes_message` WRITE;
/*!40000 ALTER TABLE `mes_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `mes_message` ENABLE KEYS */;
UNLOCK TABLES;
 
--
-- Table structure for table `num_nn_uti_mes`
--
 
DROP TABLE IF EXISTS `num_nn_uti_mes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `num_nn_uti_mes` (
  `uti_oid` int(11) NOT NULL,
  `mes_oid` int(11) NOT NULL,
  KEY `fk_uti_utilisateur` (`uti_oid`),
  KEY `fk_mes_message` (`mes_oid`),
  CONSTRAINT `fk_mes_message` FOREIGN KEY (`mes_oid`) REFERENCES `mes_message` (`mes_oid`),
  CONSTRAINT `fk_uti_utilisateur` FOREIGN KEY (`uti_oid`) REFERENCES `uti_utilisateur` (`uti_oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
 
--
-- Dumping data for table `num_nn_uti_mes`
--
 
LOCK TABLES `num_nn_uti_mes` WRITE;
/*!40000 ALTER TABLE `num_nn_uti_mes` DISABLE KEYS */;
/*!40000 ALTER TABLE `num_nn_uti_mes` ENABLE KEYS */;
UNLOCK TABLES;
 
--
-- Table structure for table `uti_utilisateur`
--
 
DROP TABLE IF EXISTS `uti_utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uti_utilisateur` (
  `uti_oid` int(11) NOT NULL AUTO_INCREMENT,
  `uti_prenom` varchar(255) DEFAULT NULL,
  `uti_nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uti_oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
 
--
-- Dumping data for table `uti_utilisateur`
--
 
LOCK TABLES `uti_utilisateur` WRITE;
/*!40000 ALTER TABLE `uti_utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `uti_utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
 
-- Dump completed on 2017-09-07 12:17:32