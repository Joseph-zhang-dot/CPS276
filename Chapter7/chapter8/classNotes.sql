-- MySQL dump 10.14  Distrib 5.5.64-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dandrew1
-- ------------------------------------------------------
-- Server version	5.5.64-MariaDB

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `work_phone` varchar(15) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `xx` (`name`),
  KEY `myindex` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'fred','111-222-3333','333-444-5555','fred@gmail.com'),(3,'cynthia','111-222-3333','333-444-5555','cynthia@gmail.com'),(4,'jim','111-222-3333','','jim@gmail.com');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `teacherid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teachername` varchar(100) NOT NULL,
  `ssno` varchar(32) DEFAULT NULL,
  `pw` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`teacherid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'test',NULL,'pw1'),(2,'Tricia Ferris',NULL,'pw2'),(3,'Scott Bray',NULL,'pw3'),(12,'douglas',NULL,'pw12'),(13,'elizabeth',NULL,'pw13'),(14,'stephan',NULL,'pw14'),(15,'mark',NULL,'pw15'),(16,'sarah',NULL,'pw16'),(18,'carl',NULL,'pw18'),(19,'philip',NULL,'pw19'),(20,'philip',NULL,'pw20'),(21,'doug',NULL,'pw21'),(22,'test',NULL,'pw22');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `studentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentname` varchar(100) NOT NULL,
  `ssno` varchar(32) DEFAULT NULL,
  `counselorid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`studentid`),
  KEY `sc` (`counselorid`),
  CONSTRAINT `sc` FOREIGN KEY (`counselorid`) REFERENCES `counselor` (`counselorid`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'trish',NULL,1),(2,'carl',NULL,1),(3,'cathy',NULL,NULL),(4,'john',NULL,3),(5,'floyd',NULL,1),(6,'mark',NULL,NULL),(7,'frank',NULL,NULL),(9,'anothertest',NULL,NULL),(10,'doug',NULL,NULL);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsjoin`
--

DROP TABLE IF EXISTS `tsjoin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsjoin` (
  `tsjoinid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teacherid` int(10) unsigned NOT NULL,
  `studentid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tsjoinid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsjoin`
--

LOCK TABLES `tsjoin` WRITE;
/*!40000 ALTER TABLE `tsjoin` DISABLE KEYS */;
INSERT INTO `tsjoin` VALUES (1,1,1),(2,1,3),(3,1,5),(4,2,1),(5,2,2),(6,2,4);
/*!40000 ALTER TABLE `tsjoin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counselor`
--

DROP TABLE IF EXISTS `counselor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counselor` (
  `counselorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `counselorname` varchar(100) NOT NULL,
  PRIMARY KEY (`counselorid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counselor`
--

LOCK TABLES `counselor` WRITE;
/*!40000 ALTER TABLE `counselor` DISABLE KEYS */;
INSERT INTO `counselor` VALUES (1,'Mr Smith'),(2,'Mr Jones'),(3,'Mrs Williams');
/*!40000 ALTER TABLE `counselor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-14  0:02:15
