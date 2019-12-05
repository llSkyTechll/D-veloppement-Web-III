CREATE DATABASE  IF NOT EXISTS `ecole` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecole`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: ecole
-- ------------------------------------------------------
-- Server version	5.1.57-community

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
-- Table structure for table `tbl_departement`
--

DROP TABLE IF EXISTS `tbl_departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
CREATE TABLE `tbl_departement` (
  `id_departement` int(11) NOT NULL,
  `nom_departement` varchar(45) NOT NULL,
  PRIMARY KEY (`id_departement`)
) ENGINE=InnoDB;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_departement`
--

/*!40000 ALTER TABLE `tbl_departement` DISABLE KEYS */;
INSERT INTO `tbl_departement` VALUES (109,'Éducation Physique'),(144,'Réadaptation'),(180,'Soins infirmiers'),(200,'Sciences'),(201,'Mathématique'),(221,'Génie civil'),(235,'Génie industriel'),(300,'Sciences humaines'),(322,'Service de garde'),(340,'Philosophie'),(351,'T.E.S.'),(360,'Méth Quant'),(410,'Technique administrative'),(420,'Technique Informatique'),(510,'Arts Plastiques'),(581,'Communication Graphique'),(601,'Arts et Lettres'),(604,'Langues');
/*!40000 ALTER TABLE `tbl_departement` ENABLE KEYS */;

--
-- Table structure for table `tbl_enseignant`
--

DROP TABLE IF EXISTS `tbl_enseignant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_enseignant` (
  `id_enseignant` int(11) NOT NULL,
  `nom_enseignant` varchar(50) NOT NULL,
  `id_departement` int(11) DEFAULT NULL,
  `permanent` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_enseignant`),
  KEY `id_departement` (`id_departement`),
  CONSTRAINT `tbl_enseignant_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `tbl_departement` (`id_departement`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_enseignant`
--

/*!40000 ALTER TABLE `tbl_enseignant` DISABLE KEYS */;
INSERT INTO `tbl_enseignant` VALUES (1,'Dallaire, Richard',109,''),(2,'Drouin, Diane',109,''),(3,'Gagné, Steeve',109,''),(4,'XX ouXY',109,'\0'),(5,'Poulin, Lyne',109,'\0'),(6,'Pouliot, Véronique',109,'\0'),(7,'Rodrigue, Daniel',109,''),(8,'Jacques, Daniel',109,'\0'),(9,'Toulouse, Mireille',144,'\0'),(10,'Drouin, Josette',180,''),(11,'Hamel, Nicole',180,''),(12,'Mathieu, Julie',180,''),(13,'Morin, Daniel',180,''),(14,'Bolduc, Johanne',180,''),(15,'Quirion, Ghyslaine',180,''),(16,'Gagnon, Isabelle',180,''),(17,'Roy, Lise',180,''),(18,'Tardif, Andrée',180,''),(19,'Giroux, Mario',180,''),(20,'Beaudoin, Caroline',180,''),(21,'Berthiaume, Clémence',180,''),(22,'Amghar, Abdelhamid',200,'\0'),(23,'Asselin, Louis',200,''),(24,'Bisson, Sarah',200,''),(25,'Dufour, Frédéric',200,'\0'),(26,'Fortier, Frédéric',200,''),(27,'Gilbert, Bruno',200,''),(28,'Juneau, Vanessa',200,'\0'),(29,'Rheault, Marcel',200,''),(30,'Loubert, Marie-Andrée',200,'\0'),(31,'Tanguay, Denis',200,'\0'),(32,'Blouin, Claire',201,''),(33,'Bourque, Pierre',201,''),(34,'Doyon, Mario',201,''),(35,'Lemieux, Manon',201,''),(36,'Ramier, Pierre-Luc',201,'\0'),(37,'Rochette, Nicolas',201,'\0'),(38,'Turcotte, Raynald  ',201,''),(39,'Bélanger, Simon Eric',221,''),(40,'Brisson, Sébastien',221,''),(41,'Fortier, Renaud',221,''),(42,'Kazza, Sara',221,''),(43,'Labrie, Gilles',221,''),(44,'Lévesque, Genest',221,''),(45,'Paradis, Danny',221,''),(46,'Professeur X',221,''),(47,'Professeur Y',221,''),(48,'Professeur Z',221,'\0'),(49,'Bourque-R, Katherine',221,'\0'),(50,'Bouchard, Michel',235,''),(51,'Troisième ressource',235,'\0'),(52,'Roy, Carl',235,''),(53,'Arcand, Robert',300,''),(54,'Beaupré, André',300,''),(55,'Bossé, Jean-François',300,'\0'),(56,'Bourque, Brigit',300,''),(57,'Carignan, Denis',300,''),(58,'Cloutier, Marcel',300,'\0'),(59,'Demers, Stéphane ',300,''),(60,'El Omari, Salah Eddine',300,'\0'),(61,'Fabre, Michel Jr.',300,'\0'),(62,'Giguère, Claudia',300,'\0'),(63,'Huot, Michel',300,''),(64,'Kaba, Léa',300,'\0'),(65,'Lambert, François',300,''),(66,'Longpré, Christine',300,''),(67,'Nlep, Patrick Antoine',300,'\0'),(68,'Poulin, Maxime',300,''),(69,'Pruneau, Pascale',300,'\0'),(70,'Racette, Philippe',300,''),(71,'Rancourt, François',300,''),(72,'Roy-Marois, Jonathan',300,'\0'),(73,'Vallerand, Vicky',300,''),(74,'Asselin, Joëlle',322,''),(75,'Bilodeau, Renée Claude',322,'\0'),(76,'Blais, Lynda',322,''),(77,'Champagne, Annie',322,''),(78,'Désy, Hélène',322,''),(79,'Grondin, Stéphanie',322,'\0'),(80,'Labonté, Julie',322,''),(81,'Michaud, Audrey',322,'\0'),(82,'Nadeau, Nathalie',322,'\0'),(83,'Poirier, Marie-Claude',322,''),(84,'Poulin, Maryse',322,''),(85,'Tremblay, Céline',322,''),(86,'Trottier, Gabriel',340,'\0'),(87,'Nadeau, Claire',340,''),(88,'Pelchat, Marie-Claude',340,''),(89,'Bernier, Valérie',340,''),(90,'Poulin, Maxime',340,''),(91,'Vincent, Jean-Philippe',340,'\0'),(92,'Rheault, Paul',340,'\0'),(93,'Couture, Daniel',340,'\0'),(94,'Groleau, Étienne',340,'\0'),(95,'Dubord, Geneviève',340,'\0'),(96,'Fecteau, Maryse',351,''),(97,'Fortin, Andrée-Anne',351,'\0'),(98,'Gagnon, Sophie',351,'\0'),(99,'Giguère, Lucie',351,''),(100,'Houde, Suzanne',351,''),(101,'Lachance, Donna',351,'\0'),(102,'Lemay, Denis',351,''),(103,'Lessard, Stéphane',351,'\0'),(104,'Morin, Thérèse',351,''),(105,'Pinel, Maryse',351,''),(106,'Poulin, Stéphanie',351,''),(107,'Roy, Sylvie',351,''),(108,'Miville, Caroline',351,'\0'),(109,'Aubertin, Michel',410,''),(110,'Desbiens, Francine',410,''),(111,'Drouin, Hugues',410,''),(112,'Dumont, Sonia',410,'\0'),(113,'Gosselin, Louise',410,''),(114,'Hachimi, Lhassane',410,''),(115,'Plante, Steve',410,''),(116,'Roy, Marco',410,''),(117,'Bernard, Claude',420,''),(118,'Dubois, Martin',420,''),(119,'Gagnon, Alex',420,''),(120,'Goulet, Marthe',420,''),(121,'Labbé, Jean-Marc',420,''),(122,'Paquin, Yvan',420,'\0'),(123,'Thibaudeau, Luce',420,''),(124,'Pelchat, Michel',510,''),(125,'Pelchat, Lucy',510,'\0'),(126,'Pépin, Christian',510,''),(127,'Bédard, Soleina',510,'\0'),(128,'Aubé, Jean-Philippe',581,''),(129,'Cadoret, Sonia',581,''),(130,'Lemay, Philippe-André',581,''),(131,'Bernard, Paul-André',601,''),(132,'Bizier, Yves',601,''),(133,'Bolduc, Marie-Claude',601,'\0'),(134,'Cadoret, Isabelle',601,'\0'),(135,'Champagne, Jean-Pierre',601,'\0'),(136,'Deblois, Linda',601,''),(137,'Desjardins, Caroline',601,''),(138,'Duchesne, Jacinthe',601,''),(139,'Fontaine, Marcelle',601,''),(140,'Fournier, Lucie',601,'\0'),(141,'Guérin, Geneviève',601,'\0'),(142,'Hamel, Christine',601,''),(143,'Lacroix, Maddy',601,'\0'),(144,'Bernard, Sarah',601,'\0'),(145,'Miville-Deschênes, France',601,'\0'),(146,'Nadeau, Jacques',601,'\0'),(147,'Ouellet, Sébastien',601,'\0'),(148,'Poulin, Marie-Esther',601,''),(149,'Poulin, Simon',601,''),(150,'Demers, Mariane',601,'\0'),(151,'Baaden, Félix',604,'\0'),(152,'Blais, Lisa',604,''),(153,'Bouchard, Weena',604,'\0'),(154,'Dulude, Myriam',604,'\0'),(155,'Gilbert, Alain',604,''),(156,'Giroux, Jonathan',604,'\0'),(157,'Guay, Etienne',604,'\0'),(158,'Lagueux, Nancy',604,''),(159,'Lajeunesse, Stéphane',604,''),(160,'Leclair, Isabelle',604,'\0'),(161,'Poulin, Denis',604,''),(162,'Rodrigue, Rémi',604,''),(163,'Woll, Nina',604,'\0');
/*!40000 ALTER TABLE `tbl_enseignant` ENABLE KEYS */;

--
-- Dumping routines for database 'ecole'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-22 16:00:29
