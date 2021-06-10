-- MySQL dump 10.16  Distrib 10.2.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: AP
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
INSERT INTO `bbf` VALUES (1,'&((--\'Ã Ã ',100,100),(2,'&((_\'_-Ã§Ã§(',1000,1000),(3,'&((-_&\'&-',1000,1000),(4,'&((Ã¨Ã¨Ã©Ã©\'Ã ',1000,1000),(5,'&((-__\'Ã©Ã©Ã¨',1000,1000),(6,'b6',1000,1000),(7,'b7',1000,1000),(8,'b8',1000,1000),(9,'b9',1000,1000),(10,'b10',1000,1000),(11,'b11',1000,1000),(12,'b12',1000,1000),(13,'b13',1000,1000),(14,'b14',1000,1000),(15,'b15',1000,1000),(16,'b16',1000,1000),(17,'b17',1000,1000),(18,'b18',1000,1000),(19,'b19',1000,1000),(20,'b20',1000,1000),(21,'b21',1000,1000),(22,'b22',1000,1000),(23,'b23',1000,1000),(24,'b24',1000,1000),(25,'b25',1000,1000),(26,'b26',1000,1000),(27,'b27',1000,1000),(28,'b28',1000,1000),(29,'b29',1000,1000),(30,'b30',1000,1000),(31,'b31',1000,1000),(32,'b32',1000,1000),(33,'joffrey',1000,1000),(34,'joffrey2',1000,1000);
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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cgbankop`
--

LOCK TABLES `cgbankop` WRITE;
/*!40000 ALTER TABLE `cgbankop` DISABLE KEYS */;
INSERT INTO `cgbankop` VALUES (76,28,0,2);
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
INSERT INTO `personnage` VALUES (1,'Ã Ã Ã -_Ã Ã§Ã¨Ã§Ã¨','Aimerius','Hecatolite','Aimerius','STRCG-BM-XDR-6725324','BIO, Stratus, Celestite Inc, responsable R&D, ',994,1000,1),(2,'a2','Intimy (officiel)','Guilleminite','Iolana','CIRCG-BF-RXN-2837481','BIO, Cirrus, lutte contre le trafic d\'organes, conseillier',1000,1000,1),(3,'Ã Ã Ã -Ã©\'','Intimy','Cumbever','Verena','CUMCG-BF-JOU-5536892','BIO, Cumulus, sans emploi',1000,1000,1),(4,'a4','Colombo','Nebesymic','Michael','NEBCG-SYM-NVD-587934','Synthe, Nebula, services de rï¿½pression des crimes, officier',1000,1000,1),(5,'Ã Ã©--_-\'Ã -&','Peacemaker (officiel','Nebsypat','Patricius','NEBCG-SYM-TTM-709481','Synthe, Nebula, services d\'enquetes, lutte contre le trafic d\'organes, officier',1000,1000,1),(6,'Ã Ã Ã (_\'&-\'_','Peacemaker','Cumasyehug','Hugo','CUMCG-SYM-IJE-710444','Synthe, Cumulus, sans emploi',1000,1000,1),(7,'a7','Powa','Cumsayo','Odotus','CUMCG-SYM-YPJ-635273','Synthe, Cumulus, Andro Plaisir, proprietaire',1000,1000,1),(8,'a8','Lowbat','Cumsyphi','Philippus','CUMCG-SYM-QTI-441596','Synthe, Cumulus, Andro Plaisir, proprietaire',1000,1000,1),(9,'a9','Pink (officiel)','Srtasyech','Christina','SRTCG-SYF-KVZ-265357','Synthe, Stratus, Rhexdex Pharma, gestion des stocks',1000,1000,1),(10,'a10','Ares','Hecatolite','Ares','STRCG-BM-EAI-9636543','BIO, Stratus, Celestite Inc, president',1000,1000,1),(11,'Ã Ã©--Ã§Ã©\'\'Ã©Ã§','Pink','Cumasyn','Mariamna','CUMCG-SYF-KQU-671855','Synthe, Cumulus, sans emploi',1000,1000,0),(12,'a12','Pointcube','Cumsyegir','Girardus','CUMCG-SYM-KDR-887632','Synthe, Cumulus, sans emploi',1000,1000,0),(13,'Ã Ã©-__Ã§_(_Ã§','Conradus','Conradus','Nebesyco','NEBCG-SYM-IPO-888933','Synthe, Nebula, corps expditionnaire, premiere classe, pilote',1000,1000,0),(14,'a14','Hesperide','Cumaar','Ariadna','CUMCG-AS-MUT-7293382','Androide, Cumulus, Andro Plaisir, service a la personne',0,0,1),(15,'Ã Ã Ã _Ã§Ã¨_&&_','Serveur','Cumeabe','Beatus','CUMCG-AS-GYJ-4967706','Androide, Cumulus, Andro Plaisir, service a la personne',6,0,1),(16,'a16','Vigik','Nebaani','Animais','NEBCG-AS-GGX-8962161','Androide, Cumulus, Andro Plaisir, securite',0,0,0),(17,'Ã Ã©-Ã§Ã &','','Cirsyejo','Johannes','CIRCG-SYM-WCZ-544163','Synthe, Cirrus, sans emploi',0,0,0),(18,'a18','','Extde','Deodatus','EXTCG-XM-RTQ-6017679','Exterieur, sans emploi',0,0,0),(19,'a19','','Extju','Justinus','EXTCG-XM-YWZ-6762972','Exterieur, sans emploi',0,0,0),(20,'a20','','Cumape','Petra','CUMCG-AF-HEL-7067387','Androide, Cumulus, Andro Plaisir, service a la personne',0,0,1),(21,'a21','','Extge','Onix','EXTCG-XM-WAA-2383330','Exterieur, commerce',0,0,1),(22,'a22','','Strasymed','Medardus','STRCG-SYM-ZEJ-716794','Synthe, Stratus, StarDust corp, chimiste',0,0,0),(23,'a23','','Cumesyapi','Pius','CUMCG-SYM-XTL-522968','Synthe, Cumulus, sans emploi',0,0,0),(24,'a24','','Nebsyval','Valerianus','NEBCG-SYM-GIZ-909284','Synthe, Nebula, agent d\'entretien',0,0,0),(25,'a25','','Cirsyfab','Fabricius','CIRCG-SYM-DRU-261870','Synthe, Cirrus, Service relations inter-quartiers, agent d\'accueil',0,0,0),(26,'a26','','Cumsyflo','Florianus','CUMCG-SYM-RFL-345898','Synthe, Cumulus, Alphaware ,agent de manutention',0,0,0),(27,'a27','','Nebasyelo','Lorenz','NEBCG-SYM-EEZ-254449','Synthe, Nebula, corps expeditionnaire, armurier',0,0,1),(28,'joffrey','','Nimasypa','Paulinus','NIMCG-SYM-WHX-745350','Synthe, Nimbus, assistant a domicile',500,0,1),(29,'joffrey2','','Extju','Julianus','EXTCG-XM-SLW-9793181','Exterieur, sans emploi',500,0,0),(30,'a30','','Extsi','Sigfriedus','EXTCG-XM-XDQ-3319207','Exterieur, Prospecteur',0,0,0),(31,'a31','','Extica','Camillus','EXTCG-XM-TYY-2040476','Exterieur, securite',0,0,0),(32,'a32','','Extro','Romualdus','EXTCG-XM-ZBJ-2113165','Exterieur, sans emploi',0,0,1),(33,'a33','','extau','Aurelianus','EXTCG-XM-WDP-8396729','Exterieur, sans emploi',0,0,1),(34,'a34','','Extan','Anatolus','EXTCG-XM-FNY-1047283','Exterieur, prospecteur',0,0,1);
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

-- Dump completed on 2021-06-10 21:07:12
