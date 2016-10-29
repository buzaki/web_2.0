-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

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
-- Table structure for table `isfollowing`
--

DROP TABLE IF EXISTS `isfollowing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isfollowing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `follower` text NOT NULL,
  `isfollow` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `isfollowing`
--

LOCK TABLES `isfollowing` WRITE;
/*!40000 ALTER TABLE `isfollowing` DISABLE KEYS */;
/*!40000 ALTER TABLE `isfollowing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tweets`
--

DROP TABLE IF EXISTS `tweets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tweets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tweet` text NOT NULL,
  `uid` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tweets`
--

LOCK TABLES `tweets` WRITE;
/*!40000 ALTER TABLE `tweets` DISABLE KEYS */;
INSERT INTO `tweets` VALUES (3,'fewfe','58128d1ab7ca2','2016-10-28 00:55:39'),(4,'egergre','58128d1ab7ca2','2016-10-28 00:56:22'),(5,'sfewfew','58128d1ab7ca2','2016-10-28 00:57:43'),(6,'fewfew','58128d1ab7ca2','2016-10-28 00:58:18'),(7,'fewfewfew','58128d1ab7ca2','2016-10-28 00:58:36'),(8,'fwefew','58128d1ab7ca2','2016-10-28 00:58:45'),(9,'fewfew','58128d1ab7ca2','2016-10-28 00:59:15'),(10,'ttttt','58128d1ab7ca2','2016-10-28 00:59:22'),(11,'rrrr','58128d1ab7ca2','2016-10-28 01:00:46'),(12,'gregre','58128d1ab7ca2','2016-10-28 01:01:08'),(13,'xxxx','58128d1ab7ca2','2016-10-28 01:01:26'),(14,'gergre','58128d1ab7ca2','2016-10-28 01:01:36'),(15,'fewfew','58128d1ab7ca2','2016-10-28 01:02:14'),(16,'ergre','58128d1ab7ca2','2016-10-28 01:03:52'),(17,'gregre','58128d1ab7ca2','2016-10-28 01:03:55'),(18,'sfsd','58128d1ab7ca2','2016-10-28 01:05:45'),(19,'sfdsf','58128d1ab7ca2','2016-10-28 01:06:29'),(20,'fghj','58131525b6180','2016-10-28 09:07:05'),(21,'toot toot','58144cceb5f8c','2016-10-29 07:16:45'),(22,'toot toot','58144cceb5f8c','2016-10-29 07:16:45');
/*!40000 ALTER TABLE `tweets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tweet` text NOT NULL,
  `passwd` text NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`(13))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('58120a630d08c','admin@id3m.net','c72ae2b0233eaefa51fe2858edb418d2b5ada817056ef2ccc85add16925c1106','','ba4361b4',0),('58120a710a50b','admin@id3m.net','b8cc6a11c3175f876d5ddf81ed5df1d034c6ff41c7379d4a37343b3b6161efc2','','54d8ba3d',0),('58120a7438d21','admin@id3m.net','9754cf102ba566efd1ffd8ece0ab014aa42bc048eb74c4533603ff34de4098d9','','77d75c27',0),('58120a76eb51a','admin@id3m.net','dcc75d7d56e2985a05b436becbfe500e388a13c2545c62a94fefd80b292da454','','40fe4732',0),('58120ab732fc0','admin@id3m.net33','b61af532abd8ba5d2f8ec202dad74232bc11f01fbfc224dbb28d5b2d08fa51f5','','7c9acab1',0),('58120b284b5e3','admin@id3m.net33f','cf5113e76a68ed2c89dd4539943c9bf153d04c41a3bf57c10fa9be0340cda4ce','','203060c3',0),('58120b36e2b2c','admin@id3m.net33f2','e27cdbee366ce2d1dca2b2885e7e4b5b7dd507c440c9e78caddf427902279aa7','','6754b324',0),('58120b7ea63c5','a@a.a','e35a09d19b4c76949f20a8a1c75891e0b781bdd475663b17248358e8debf679f','','b20bf044',0),('58124f4bb5039','aa@aa.com','2e169c4077499620fa079026e692108dbbd88d418aefd71cf61177a64cb28703','','80b6be1c',0),('581252d56ba41','aa@aa.come','1cc7f52099a2097a5a349f121ce00e5272b7bc113fafa2a26c9395655c944910','','a512151a',0),('5812533337c3d','t@t.com','e4ea2dce4e09312a54f508375169309b563437a1acfabdd10a676f6c44490765','','afe53cc9',0),('581253d9d3934','admin@id3md.net','8160ab105b5ed16c23975fd88c612b894b727ab761e4354a1fe3a4510a9ca6e6','','a96799eb',0),('581255d672f44','a@a.ae','c9717044bd6617f12745e8a007f9aff8aa494f987f8ec8dd1c678a7f090bc9ba','','85ce7a53',0),('5812578cd6a0c','amazon@id3m.net','e89210a831a734c63e1b4cdab7c70813055ee37a5d46667b622da956ce928a15','','489a7334',0),('58125987b3c76','zeft@zeft.com','b280edca47556f0e7fa23ac3cf2e5b49e5089ca9494d64dd7cd7790fdb0a0370','','6ff97977',0),('58125be358890','a22740264wwob@gmail.com','13e11eb3a5b817fa5a94e990ae48b256172d1a91a11f958137e49826c9943bbe','','4004b30a',0),('58126028ccaa4','admin@id3m.nete','bbad88ebdff9b75229f4c337f882985617afbcc888a4679b0e23c98aa73ec61a','','b4aca2fa',0),('581260522664f','edx@id3m.net','b5a8d9336efb22b32a8c65bab0a9779feae9fc333b2e072d366f3d5043d54876','','2492cc2f',0),('58126d2da951b','t1@a.a','440cab046f43116173a56c8ed6e4d80a72d49bbce74a7cb4a4691099fdff17f8','','3dc95c3f',0),('58126d3b01959','t2@a.a','b6e81bd2e0e765d86013db791a8c9f1a77d84a9a38707c54140a786273c8927c','','852fdf1c',0),('58128d1ab7ca2','re@re.com','d2f014dabfaa2c62379a20e2de04b772dd902757d0d6544c7b55b02c3ea34ca4','','7b049564',0),('58131525b6180','dar3mind@gmail.com','2defbb5d87c02bf7562a49561dc742151085e06e4a504853bc56a5d98f1cdad0','','789e8559',0),('58144cceb5f8c','c@c.cc','f2963f9266ad98b5e6cd2dc633477fe99967eb1b3e35020796f130fe8f944568','','2b2d5244',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-29  9:03:59
