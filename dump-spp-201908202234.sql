-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: spp
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jenis_bayar`
--

DROP TABLE IF EXISTS `jenis_bayar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_bayar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_bayar`
--

LOCK TABLES `jenis_bayar` WRITE;
/*!40000 ALTER TABLE `jenis_bayar` DISABLE KEYS */;
INSERT INTO `jenis_bayar` VALUES (4,5,'290000','2019-08-18 09:17:12','2019-08-18 09:58:05'),(5,6,'290000','2019-08-18 09:56:12','2019-08-18 09:58:33'),(6,9,'290000','2019-08-18 09:57:08','2019-08-18 09:58:50'),(7,7,'290000','2019-08-18 09:59:19','2019-08-18 09:59:19'),(8,8,'290000','2019-08-18 10:00:32','2019-08-18 10:00:32'),(10,10,'290000','2019-08-18 10:01:16','2019-08-18 10:01:16');
/*!40000 ALTER TABLE `jenis_bayar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES (1,'Ilmu Pengetahuan Alam','IPA','2019-08-16 08:50:48','2019-08-16 08:50:48'),(2,'Ilmu Pengetahuan Sosial','IPS','2019-08-16 09:02:05','2019-08-16 09:02:05'),(5,'Matematika dan Ilmu Alam','MIA','2019-08-18 02:22:33','2019-08-18 02:40:57'),(6,'Ilmu Ilmu Sosial','IIS','2019-08-18 02:41:25','2019-08-18 02:41:25');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tahun_pelajaran` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (5,2,1,'XI','2019-08-18 03:51:27','2019-08-18 03:51:27'),(6,2,5,'X','2019-08-18 04:16:10','2019-08-18 04:16:10'),(7,2,6,'X','2019-08-18 04:20:18','2019-08-18 04:20:18'),(8,2,1,'XII','2019-08-18 04:21:12','2019-08-18 04:21:12'),(9,2,2,'XI','2019-08-18 04:21:39','2019-08-18 04:21:39'),(10,2,2,'XII','2019-08-18 04:24:02','2019-08-18 04:24:02');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (12,'2014_10_12_000000_create_users_table',1),(13,'2014_10_12_100000_create_password_resets_table',1),(14,'2019_08_16_125855_create_jenis_bayar_table',1),(15,'2019_08_16_125913_create_pembayaran_table',1),(16,'2019_08_16_125949_create_kelas_table',1),(17,'2019_08_16_130006_create_jurusan_table',1),(18,'2019_08_16_130015_create_siswa_table',1),(19,'2019_08_16_130109_create_tahun_pelajaran_table',1),(20,'2019_08_16_153828_add_kode_jurusan_to_jurusan_table',2),(21,'2019_08_16_180410_edit_tahun_pelajaran_from_tahun_pelajaran_table',3),(23,'2019_08_16_212307_edit_nis_from_kelas_table',4),(28,'2019_08_18_100103_add_kelas_from_kelas_table',5),(29,'2019_08_18_104154_edit_column_from_kelas_table',6),(30,'2019_08_18_110810_edit_column_from_siswa_table',7),(31,'2019_08_18_114558_create_pembayaran_table',8),(36,'2019_08_18_120214_create_pembayaran_table',9),(37,'2019_08_18_155029_create_jenis_bayar_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembayaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `nominal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `januari` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `februari` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `april` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mei` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juni` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juli` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agustus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `september` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oktober` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `november` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desember` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembayaran`
--

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
INSERT INTO `pembayaran` VALUES (4,6,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:03:02','2019-08-18 10:03:02'),(5,4,'290000','lunas','lunas','lunas','lunas','lunas','lunas',NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:03:58','2019-08-18 14:36:56'),(6,5,'290000','lunas','lunas','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:04:19','2019-08-18 11:46:00'),(7,7,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:05:03','2019-08-18 10:05:03'),(8,8,'290000','lunas','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:05:20','2019-08-18 10:08:11'),(9,10,'290000','lunas','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:05:37','2019-08-18 10:07:48'),(10,22,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:05:56','2019-08-18 10:05:56'),(11,23,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:06:13','2019-08-18 10:06:13'),(12,14,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:06:29','2019-08-18 10:06:29'),(13,16,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-18 10:06:56','2019-08-18 10:06:56'),(14,19,'290000','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-20 00:46:53','2019-08-20 00:46:53'),(15,21,'290000','lunas','lunas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-08-20 05:48:20','2019-08-20 05:53:49');
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (4,5,'0021260981','Ahmad Dasuki','081288229019','2019-08-18 04:11:58','2019-08-18 04:11:58'),(5,5,'0020871605','Digo Charleydian Adi Putra','081288229019','2019-08-18 04:13:03','2019-08-18 04:13:03'),(6,5,'0020188356','Lucky Hidayat Raflianto','081288229019','2019-08-18 04:13:39','2019-08-18 04:13:39'),(7,5,'0014380543','Nur Komariah','081288229019','2019-08-18 04:14:16','2019-08-18 04:14:16'),(8,5,'0013276833','Via Ramadanti','081288229019','2019-08-18 04:15:09','2019-08-18 04:15:09'),(9,6,'0025919750','Aida Kharisma Putri','081288229019','2019-08-18 04:16:48','2019-08-18 04:16:48'),(10,6,'0020189147','Aulia Nur Zakia','081288229019','2019-08-18 04:17:17','2019-08-18 04:17:17'),(11,6,'0032772190','Diva Kusumawati','081288229019','2019-08-18 04:17:42','2019-08-18 04:17:42'),(12,6,'0032917360','Muhammad Rifan','081288229019','2019-08-18 04:18:23','2019-08-18 04:18:23'),(13,6,'0025919740','Wirda Tunnasiha','081288229019','2019-08-18 04:19:07','2019-08-18 04:19:07'),(14,7,'0032578754','Amelia Andriyani','081288229019','2019-08-18 04:28:49','2019-08-18 04:28:49'),(15,7,'0033311609','Lucky Lukmanul Hakim','081288229019','2019-08-18 04:29:25','2019-08-18 04:29:25'),(16,7,'0025419414','Nurjanah Dwi Anggraini','081288229019','2019-08-18 04:30:31','2019-08-18 04:30:31'),(17,7,'0031615488','Rere Moza Agustin','081288229019','2019-08-18 04:31:03','2019-08-18 04:31:03'),(18,7,'0003515605','Riyadi Furqon','081288229019','2019-08-18 04:31:34','2019-08-18 04:31:34'),(19,9,'0026197028','Abdul Azis','081288229019','2019-08-18 04:37:37','2019-08-18 04:37:37'),(20,9,'0021516125','Alwi Muarif','081288229019','2019-08-18 04:38:15','2019-08-18 04:38:15'),(21,9,'0021495341','Eko Wahyudin','081288229019','2019-08-18 04:38:49','2019-08-18 04:38:49'),(22,9,'0010597518','Kartika Putri Cahaya','081288229019','2019-08-18 04:39:19','2019-08-18 04:39:19'),(23,9,'0020439379','Rizki Saidul Hojan','081288229019','2019-08-18 04:40:01','2019-08-18 04:40:01'),(24,10,'9985094574','Ahmad Habibi','081288229019','2019-08-20 02:21:01','2019-08-20 02:21:01'),(25,10,'0013916020','Caesar Fajri Ahmad','081288229019','2019-08-20 02:21:48','2019-08-20 02:21:48'),(26,10,'0014079428','Ihsanul Hakim Alfarisi','081288229019','2019-08-20 02:22:44','2019-08-20 02:22:44'),(27,10,'0000241889','Malika Muhari','081288229019','2019-08-20 02:23:18','2019-08-20 02:23:18'),(28,10,'0001026700','Mitha Sandra Dewi','081288229019','2019-08-20 02:23:47','2019-08-20 02:23:47'),(29,10,'0016523195','Sarah Raudahatul Aulia','081288229019','2019-08-20 02:24:37','2019-08-20 02:24:37'),(30,10,'0001969489','Yasser Hanafiah','081288229019','2019-08-20 02:25:23','2019-08-20 02:25:23'),(31,8,'0017555671','Armiati Dewi Puji','081288229019','2019-08-20 02:26:35','2019-08-20 02:26:35'),(32,8,'0014123894','Inayatusallehah','081288229019','2019-08-20 02:27:09','2019-08-20 02:27:09'),(33,8,'9996494378','Khoirunnisa','081288229019','2019-08-20 02:27:44','2019-08-20 02:27:44'),(34,8,'0005211458','Muhammad Irfan Pradana','081288229019','2019-08-20 02:28:13','2019-08-20 02:28:13'),(35,8,'0018870263','Nurhasannah','081288229019','2019-08-20 02:28:47','2019-08-20 02:28:47'),(36,8,'0001609473','Ranti Ramadhan','081288229019','2019-08-20 02:29:20','2019-08-20 02:29:20'),(37,8,'0013675252','Yosi Junianti','081288229019','2019-08-20 02:29:45','2019-08-20 02:29:45');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tahun_pelajaran`
--

DROP TABLE IF EXISTS `tahun_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tahun_pelajaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tahun_pelajaran`
--

LOCK TABLES `tahun_pelajaran` WRITE;
/*!40000 ALTER TABLE `tahun_pelajaran` DISABLE KEYS */;
INSERT INTO `tahun_pelajaran` VALUES (1,'2012/2013','2019-08-16 11:42:21','2019-08-16 11:42:21'),(2,'2018/2019','2019-08-18 03:36:08','2019-08-18 03:36:08'),(3,'2019/2020','2019-08-18 03:36:26','2019-08-18 03:36:26');
/*!40000 ALTER TABLE `tahun_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com','$2y$10$sY9m7zlQLDz7GNr1oJGSlOlCCQTyuSkBW.rX9ZbXb3g98RNaJmC/q',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'spp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-20 22:34:17
