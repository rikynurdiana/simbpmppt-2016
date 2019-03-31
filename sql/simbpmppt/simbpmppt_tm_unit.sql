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
-- Table structure for table `tm_unit`
--

DROP TABLE IF EXISTS `tm_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tm_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` varchar(255) DEFAULT NULL,
  `id_kegiatan` varchar(255) DEFAULT NULL,
  `id_subkegiatan` varchar(255) DEFAULT NULL,
  `kode_unit` varchar(255) DEFAULT NULL,
  `nama_unit` varchar(255) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tm_unit`
--

LOCK TABLES `tm_unit` WRITE;
/*!40000 ALTER TABLE `tm_unit` DISABLE KEYS */;
INSERT INTO `tm_unit` VALUES (1,'1','1','1','75','honor gol iii',10,'hok',100),(2,'1','1','1','61','honor gol iv',10,'hok',50),(3,'1','1','1','49','honor tenaga ahli',5,'hok',100),(4,'1','1','2','12','honor ptt gol 1',10,'hok',100),(5,'1','1','2','48','honor ptt gol 2',10,'hok',150),(6,'1','1','2','85','honor ptt gol 3',10,'hok',200),(7,'1','1','3','14','honor gol iii',10,'hok',100),(8,'1','1','3','95','honor gol iv',10,'hok',200),(13,'2','4','2','57','gaji bulanan tkk',20,'hok',100),(14,'2','4','2','15','gaji bulanan sopir',1,'hok',10),(15,'2','4','3','48','honor harian',10,'hok',100),(16,'2','4','3','20','honor mingguan',10,'hok',200),(17,'3','5','5','61','kertas A4 100 gram',10,'rim',20),(18,'3','5','5','19','pulpen',10,'bok',10),(19,'3','5','5','19','tinta',1,'paket',100),(20,'1','1','4','68','honor phl',20,'hok',100),(21,'1','1','5','77','kertas A4 180gram',5,'rim',10),(22,'1','1','5','63','kertas A5 180gram',10,'rim',10),(23,'1','1','5','37','bolpoin hitam',5,'dus',100),(24,'1','1','63','29','pembuatan name tag',100,'buah',10),(25,'1','1','63','56','kaos olah raga peserta',100,'paket',100),(26,'1','1','63','81','alat tulis peserta',100,'paket',50),(27,'1','1','6','74','alat tulis',10,'paket',40),(28,'1','1','6','39','alat cetak',10,'paket',40),(29,'1','1','6','30','alat perlengkapan kerja',10,'paket',40),(30,'1','1','7','98','spanduk bimtek',5,'paket',100),(31,'1','1','8','97','sewa mobil rental',5,'paket',1000),(32,'1','1','9','48','paket makan 3x',100,'paket',500),(33,'1','1','10','90','paket makan 3x',100,'paket',500),(34,'1','1','11','99','paket makan 3x',100,'paket',500),(35,'2','2','17','93','honor gol iii',10,'hok',100),(36,'2','2','17','88','honor gol iv',10,'hok',50),(37,'2','2','2','88','honor gol 1',10,'hok',100),(38,'2','2','2','64','honor gol 2',10,'hok',100),(39,'2','2','3','63','honor harian',10,'hok',100),(40,'2','2','3','13','honor mingguan',10,'hok',100),(41,'2','2','4','12','honor harian',10,'hok',50),(42,'2','2','4','52','honor mingguan',10,'hok',50),(43,'2','2','5','79','kertas polio',10,'rim',100),(44,'2','2','5','11','kertas karton',10,'rim',100),(45,'2','2','5','65','tinta',10,'rim',10),(46,'2','2','5','60','loseleaft',10,'rim',10),(47,'2','2','22','82','pulsa',5,'paket',100),(48,'2','2','22','74','smartphone',5,'paket',1000),(49,'2','2','6','21','pengadaan peralatan cetak',5,'paket',1000),(50,'2','2','9','44','paket makan 3x',100,'paket',100),(51,'2','2','10','61','paket makan 3x',100,'paket',100),(52,'2','3','17','17','honor gol iii',10,'hok',100),(53,'2','3','17','33','honor gol iv',10,'hok',50),(54,'2','3','2','53','golongan 1',10,'hok',100),(55,'2','3','2','49','golongan 2',10,'hok',50),(56,'2','3','4','91','honor gol iii',10,'hok',100),(57,'2','3','4','24','honor gol iv',10,'hok',50),(58,'2','3','3','93','honor gol iv',10,'hok',50),(59,'2','3','3','49','honor gol iii',10,'hok',100),(60,'2','3','5','88','kertas A4 100 gram',10,'rim',50),(61,'2','3','5','31','kertas polio',10,'rim',20),(62,'2','3','5','91','karton',10,'buah',20),(63,'2','3','6','84','paket pengadaan',10,'paket',1000),(64,'2','3','9','13','paket makan 3x',100,'paket',100),(65,'2','3','10','36','paket makan 3x',100,'paket',100),(66,'2','4','4','21','golongan 1',10,'hok',100),(67,'2','4','4','29','golongan 2',10,'hok',50),(68,'2','4','5','89','kertas A4 100 gram',10,'hok',50),(69,'2','4','5','53','kertas A5 100 gram',10,'rim',50),(70,'2','4','44','85','cetakan',10,'paket',100),(71,'3','5','17','26','honor gol iii',10,'hok',100),(72,'3','5','17','13','honor gol iv',10,'hok',50),(73,'3','5','2','83','golongan 1',10,'hok',100),(74,'3','5','2','42','golongan 2',10,'hok',50),(75,'3','5','3','98','honor gol iii',10,'hok',100),(76,'3','5','3','46','honor gol iv',10,'hok',50),(77,'3','5','2','99','golongan 1',10,'hok',100),(78,'3','5','2','48','golongan 2',10,'hok',50),(79,'3','5','55','72','kabel',1,'rol',100),(80,'3','5','55','57','bohlam',10,'buah',10),(81,'3','5','55','78','tools',1,'paket',100),(82,'3','5','56','51','paket PC',5,'paket',1000);
/*!40000 ALTER TABLE `tm_unit` ENABLE KEYS */;
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
