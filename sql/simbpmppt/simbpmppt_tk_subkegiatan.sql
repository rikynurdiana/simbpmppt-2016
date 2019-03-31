CREATE DATABASE  IF NOT EXISTS `simbpmppt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `simbpmppt`;
-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: simbpmppt
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `tk_subkegiatan`
--

DROP TABLE IF EXISTS `tk_subkegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tk_subkegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` varchar(255) DEFAULT NULL,
  `id_kegiatan` varchar(255) DEFAULT NULL,
  `kode_subkegiatan` varchar(255) DEFAULT NULL,
  `nama_subkegiatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tk_subkegiatan`
--

LOCK TABLES `tk_subkegiatan` WRITE;
/*!40000 ALTER TABLE `tk_subkegiatan` DISABLE KEYS */;
INSERT INTO `tk_subkegiatan` VALUES (1,'1','1','5.2.1.01.04','honorarium uang saku'),(2,'1','1','5.2.1.02.01','honorarium pegawai honorer / tidak tetap'),(3,'1','1','5.2.1.03.01','uang lembur (PNS)'),(4,'1','1','5.2.1.03.02','uang lembur (Non PNS)'),(5,'1','1','5.2.2.01.01','belanja atk'),(6,'1','1','5.2.2.06.02','belanja pengadaan'),(7,'1','1','5.2.2.06.04','belanja cetak spanduk'),(8,'1','1','5.2.2.08.01','belanja sewa sarana mobilitas darat'),(9,'1','1','5.2.2.11.02','belanja mamin rapat'),(10,'1','1','5.2.2.11.04','belanja mamin lembur'),(11,'1','1','5.2.2.11.07','belanja mamin kursus, sosialisasi dan bimtek'),(12,'1','1','5.2.2.15.01','belanja perjalanan dinas luar daerah'),(13,'1','1','5.2.2.15.02','belanja perjalanan dinas dalam daerah'),(14,'1','1','5.2.2.17.02','belanja sosialisasi'),(15,'1','1','5.2.2.17.03','belanja bimbingan teknis'),(16,'1','1','5.2.2.29.01','honorarium narasumber'),(17,'2','2','5.2.1.01.02','honorarium tim pengadaan barang dan jasa'),(18,'2','2','5.2.1.02.01','honorarium pegawai honorer / tidak tetap'),(19,'2','2','5.2.1.03.01','uang lembur (PNS)'),(20,'2','2','5.2.1.03.02','uang lembur (Non PNS)'),(21,'2','2','5.2.2.01.01','belanja atk'),(22,'2','2','5.2.2.03.01','belanja telepon'),(23,'2','2','5.2.2.06.02','belanja pengadaan'),(24,'2','2','5.2.2.11.02','belanja mamin rapat'),(25,'2','2','5.2.2.11.04','belanja mamin lembur'),(26,'2','2','5.2.2.15.01','belanja perjalanan dinas dalam daerah'),(27,'2','2','5.2.2.15.02','belanja perjalanan dinas luar daerah'),(28,'2','2','5.2.2.21.03','belanja jasa konsultasi sistem informasi'),(29,'2','3','5.2.1.01.02','honorarium tim pengadaan barang dan jasa'),(30,'2','3','5.2.1.02.01','honorarium pegawai honorer / tidak tetap'),(31,'2','3','5.2.1.03.01','uang lembur (PNS)'),(32,'2','3','5.2.1.03.02','uang lembur (Non PNS)'),(33,'2','3','5.2.2.01.01','belanja atk'),(34,'2','3','5.2.2.06.02','belanja pengadaan'),(35,'2','3','5.2.2.11.02','belanja mamin rapat'),(36,'2','3','5.2.2.11.04','belanja mamin lembur'),(37,'2','3','5.2.2.15.01','belanja perjalanan dinas dalam daerah'),(38,'2','3','5.2.2.15.02','belanja perjalanan dinas luar daerah'),(39,'2','3','5.2.2.21.03','belanja jasa konsultasi sistem informasi'),(40,'2','4','5.2.1.02.01','honorarium pegawai honorer / tidak tetap'),(41,'2','4','5.2.1.03.01','uang lembur (PNS)'),(42,'2','4','5.2.1.03.02','uang lembur (Non PNS)'),(43,'2','4','5.2.2.01.01','belanja atk'),(44,'2','4','5.2.2.06.01','belanja cetak'),(45,'2','4','5.2.2.06.02','belanja pengadaan'),(46,'2','4','5.2.2.11.02','belanja mamin rapat'),(47,'2','4','5.2.2.11.04','belanja mamin lembur'),(48,'2','4','5.2.2.15.01','belanja perjalanan dinas dalam daerah'),(49,'2','4','5.2.2.29.02','honorarium tenaga ahli'),(50,'3','5','5.2.1.01.02','honorarium tim pengadaan barang dan jasa'),(51,'3','5','5.2.1.02.01','honorarium pegawai honorer / tidak tetap'),(52,'3','5','5.2.1.03.01','uang lembur (PNS)'),(53,'3','5','5.2.1.03.02','uang lembur (Non PNS)'),(54,'3','5','5.2.2.01.01','belanja atk'),(55,'3','5','5.2.1.01.03','belanja alat listrik dan elektronik'),(56,'3','5','5.2.1.02.08','belanja modal pengadaan kelengkapan komputer'),(58,'3','5','5.2.1.06.02','belanja pengadaan'),(59,'3','5','5.2.2.11.04','belanja mamin lembur'),(60,'3','5','5.2.3.12.02','belanja modal pengadaan komputer / pc'),(61,'3','5','5.2.3.12.03','belanja modal pengadaan komputer / notebook'),(62,'3','5','5.2.3.12.06','belanja modal pengadaan komputer / display'),(63,'1','1','5.2.2.02.06','belanja perlengkapan peserta');
/*!40000 ALTER TABLE `tk_subkegiatan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-11  5:53:35
