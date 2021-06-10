-- MySQL dump 10.16  Distrib 10.2.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	10.2.22-MariaDB

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
-- Table structure for table `bbf`
--

DROP TABLE IF EXISTS `bbf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfid` varchar(20) DEFAULT NULL,
  `solde` int(11) DEFAULT NULL,
  `solde_reset` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbf`
--

LOCK TABLES `bbf` WRITE;
/*!40000 ALTER TABLE `bbf` DISABLE KEYS */;
INSERT INTO `bbf` VALUES (1,'b1',100,100),(2,'b2',1000,1000),(3,'b3',1000,1000),(4,'b4',1000,1000),(5,'b5',1000,1000),(6,'b6',1000,1000),(7,'b7',1000,1000),(8,'b8',1000,1000),(9,'b9',1000,1000),(10,'b10',1000,1000),(11,'b11',1000,1000),(12,'b12',1000,1000),(13,'b13',1000,1000),(14,'b14',1000,1000),(15,'b15',1000,1000),(16,'b16',1000,1000),(17,'b17',1000,1000),(18,'b18',1000,1000),(19,'b19',1000,1000),(20,'b20',1000,1000),(21,'b21',1000,1000),(22,'b22',1000,1000),(23,'b23',1000,1000),(24,'b24',1000,1000),(25,'b25',1000,1000),(26,'b26',1000,1000),(27,'b27',1000,1000),(28,'b28',1000,1000),(29,'b29',1000,1000),(30,'b30',1000,1000),(31,'b31',1000,1000),(32,'b32',1000,1000),(33,'b33',1000,1000),(34,'b34',1000,1000);
/*!40000 ALTER TABLE `bbf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbfbankop`
--

DROP TABLE IF EXISTS `bbfbankop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbfbankop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ach` int(11) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `vend` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbfbankop`
--

LOCK TABLES `bbfbankop` WRITE;
/*!40000 ALTER TABLE `bbfbankop` DISABLE KEYS */;
/*!40000 ALTER TABLE `bbfbankop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cgbankop`
--

DROP TABLE IF EXISTS `cgbankop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cgbankop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ach` int(11) DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `vend` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cgbankop`
--

LOCK TABLES `cgbankop` WRITE;
/*!40000 ALTER TABLE `cgbankop` DISABLE KEYS */;
/*!40000 ALTER TABLE `cgbankop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fichier`
--

DROP TABLE IF EXISTS `fichier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fichier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propid` int(11) DEFAULT NULL,
  `folderid` int(11) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `data` blob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fichier`
--

LOCK TABLES `fichier` WRITE;
/*!40000 ALTER TABLE `fichier` DISABLE KEYS */;
/*!40000 ALTER TABLE `fichier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfid` varchar(20) DEFAULT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `solde` int(11) DEFAULT NULL,
  `solde_reset` int(11) DEFAULT NULL,
  `valid` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnage`
--

LOCK TABLES `personnage` WRITE;
/*!40000 ALTER TABLE `personnage` DISABLE KEYS */;
INSERT INTO `personnage` VALUES (1,'1','1','101','1','10101','',1000,1000,1),(2,'2','2','102','2','10202','',1000,1000,1),(3,'3','3','103','3','10303','',1000,1000,1),(4,'4','4','104','4','10404','',1000,1000,1),(5,'5','5','105','5','10505','',1000,1000,1),(6,'6','6','106','6','10606','',1000,1000,1),(7,'7','7','107','7','10707','',1000,1000,1),(8,'8','8','108','8','10808','',1000,1000,1),(9,'9','9','109','9','10909','',1000,1000,1),(10,'10','10','110','10','11010','',1000,1000,1),(11,'11','11','111','11','11111','',1000,1000,0),(12,'12','12','112','12','11212','',1000,1000,0),(13,'13','13','113','13','11313','',1000,1000,0),(14,'14','14','114','14','11414','',1000,1000,1),(15,'15','15','115','15','11515','',1000,1000,1),(16,'16','16','116','16','11616','',1000,1000,0),(17,'17','17','117','17','11717','',1000,1000,0),(18,'18','18','118','18','11818','',1000,1000,0),(19,'19','19','119','19','11919','',1000,1000,0),(20,'20','20','120','20','12020','',1000,1000,1),(21,'21','21','121','21','12121','',1000,1000,1),(22,'22','22','122','22','12222','',1000,1000,0),(23,'23','23','123','23','12323','',1000,1000,0),(24,'24','24','124','24','12424','',1000,1000,0),(25,'25','25','125','25','12525','',1000,1000,0),(26,'26','26','126','26','12626','',1000,1000,0),(27,'27','27','127','27','12727','',1000,1000,1),(28,'28','28','128','28','12828','',1000,1000,1),(29,'29','29','129','29','12929','',1000,1000,0),(30,'30','30','130','30','13030','',1000,1000,0),(31,'31','31','131','31','13131','',1000,1000,0),(32,'32','32','132','32','13232','',1000,1000,1),(33,'33','33','133','33','13333','',1000,1000,1),(34,'34','34','134','34','13434','',1000,1000,1);
/*!40000 ALTER TABLE `personnage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repertoire`
--

DROP TABLE IF EXISTS `repertoire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repertoire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propid` int(11) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repertoire`
--

LOCK TABLES `repertoire` WRITE;
/*!40000 ALTER TABLE `repertoire` DISABLE KEYS */;
/*!40000 ALTER TABLE `repertoire` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-10 22:50:12
