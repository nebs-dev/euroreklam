-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: euroreklam_db
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.2

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Samsung','2017-05-07 19:36:31','2017-05-07 19:36:31'),(2,'Midea','2017-05-07 19:36:31','2017-05-07 19:36:31'),(3,'LG','2017-05-07 19:36:31','2017-05-07 19:36:31'),(4,'Toshiba','2017-05-07 19:36:32','2017-05-07 19:36:32'),(5,'Korel','2017-05-07 19:36:32','2017-05-07 19:36:32');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cijena_pdv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cijena_popust` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `en_klasa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kapacitet_hladjenja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kapacitet_grijanja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rashladno_sredstvo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prikljucak_el_energije_hladjenje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prikljucak_el_energije_grijanje` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `napajanje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buka_un_jedinice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buka_vanj_jedinice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dimenzije_un_jedinice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dimenzije_vanj_jedinice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tezina_un_jedinice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tezina_vanj_jedinice` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promjer_cijevi_tekuca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promjer_cijevi_plinska` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_duljina_cjevovoda` int(11) DEFAULT NULL,
  `max_visinska_razlika` int(11) DEFAULT NULL,
  `protok_zraka_unutarnja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protok_zraka_vanjska` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `raspolozivi_pad_tlaka` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `podrucje_rada` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razina_zvucne_snage_u_j` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razina_zvucnog_tlaka_u_j` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razina_zvucne_snage_v_j` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razina_zvucnog_tlaka_v_j` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jamstvo` int(11) NOT NULL,
  `seer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scop` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `items_naziv_unique` (`naziv`),
  KEY `items_category_id_foreign` (`category_id`),
  CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,5,'Klima uređaj Korel Dynamic KMSFU-09HFN1, DC INVERTER','storage/klime/image_1.png','2.800,00',NULL,'Ionizator, bio filter, el. grijač u vanjskoj jed, hlađenje pri niskim vanjskim temperaturama (low ambient cooling), turbo način rada, samodijagnostika, timer, noćni način rada, detekcija curenja plina, led display, 12 brzina unutarnjeg ventilatora, 5 brzina vanjskog ventilatora.\r\n\r\n','A++/A+','2,6 (1,03-3,22)','2,9 (0,82-3,37)','R410A','100-1240','120-1200','1 / 220-240','-','-','715x250x188','770x555x300','6,3/8,2',NULL,'1/4\" (fi 6,35)','3/8\" (fi 9,52)',25,10,'430/320/230','1800','-',NULL,NULL,NULL,NULL,NULL,2,'6,1','4.0','2017-05-08 12:04:18','2017-05-08 12:05:02'),(2,5,'Klima uređaj Korel Dynamic KMSFU-12HFN1, DC INVERTER','storage/klime/image_2.png','2.990,00',NULL,'Ionizator, bio filter, el. grijač u vanjskoj jed, hlađenje pri niskim vanjskim temperaturama (low ambient cooling), turbo način rada, samodijagnostika, timer, noćni način rada, detekcija curenja plina, led display, 12 brzina unutarnjeg ventilatora, 5 brzina vanjskog ventilatora.','A++/A+','3,5 (1,08-4,1)','3,8 (0,88-4,2)','R410A','100-1580','130-1510','1 / 220-240','-','-','800x275x188','770x555x300','7,2/9,5',NULL,'1/4\" (fi 6,35)','3/8\" (fi 9,52)',25,10,'520/420/340','1800','-',NULL,NULL,NULL,NULL,NULL,2,'6.1','4.0','2017-05-08 12:10:22','2017-05-08 12:10:53'),(3,5,'Klima uređaj Korel Dynamic KMSFU-18HFN1, FULL DC INVERTER','storage/klime/image_3.png','4.999,00',NULL,'Ionizator, bio filter, el. grijač u vanjskoj jed, hlađenje pri niskim vanjskim temperaturama (low ambient cooling), turbo način rada, samodijagnostika, timer, noćni način rada, detekcija curenja plina, led display, 12 brzina unutarnjeg ventilatora, 5 brzina vanjskog ventilatora.','A++/A+','5,3 (1,82-6,13)','5,6 (1,38-6,74)','R410A','140-2360','200-2410','1 / 220-240','-','-','940x275x205','800x554x333','9/12,2',NULL,'1/4\" (fi 6,35)','1/2\" (fi 12,7)',30,20,'610/460/360','2100','-',NULL,NULL,NULL,NULL,NULL,2,'6.5','4.2','2017-05-08 12:15:22','2017-05-08 12:15:52'),(4,5,'Klima uređaj Korel Dynamic KMSFU-24HFN1, FULL DC INVERTER','storage/klime/image_4.png','	 6.937,50',NULL,'Ionizator, bio filter, el. grijač u vanjskoj jed, hlađenje pri niskim vanjskim temperaturama (low ambient cooling), turbo način rada, samodijagnostika, timer, noćni način rada, detekcija curenja plina, led display, 12 brzina unutarnjeg ventilatora, 5 brzina vanjskog ventilatora.\r\n\r\n','A++/A+','7,0 (2,67-7,9)','7,3 (1,6-8,8)','R410A','240-3030','260-3140','1 / 220-240','-','-','1045x315x235','845x702x363','12/15,2',NULL,'3/8\" (fi 9,52)','5/8\" (fi 15,9)',50,25,'960/820/650','2700','-',NULL,NULL,NULL,NULL,NULL,2,'6.3','4.0','2017-05-08 12:22:57','2017-05-08 12:23:31'),(5,5,'Klima uređaj Korel Fortis+ KSAL1-09DCEH, DC INVERTER','storage/klime/image_5.png','2.999,00',NULL,'automatski start, samodijagnoza i automatska zaštita, timer, turbo način rada, noćni način rada, pozlaćene lamele, LED display, anti fungus funkcija, grijač tavice vanjske jedinice, samočišćenje, ionizator, swing funkcija, 12 brzina unutarnjeg ventilatora, slijedi me funkcija, 5 brzina vanjskog ventilatora, tihi rad, zaštita ventila','A++/A+','2,55','2,65','R410A','789','732','1-220-50','-','-','800x300x198','720x540x260','10',NULL,'1/4\'\' (fi 6,35)','3/8\" (fi 9,53)',15,5,'600/530/480/440','-','-',NULL,NULL,NULL,NULL,NULL,2,'6,15','4,03','2017-05-08 12:28:09','2017-05-08 12:29:43'),(6,5,'Klima uređaj Korel Fortis+ KSAL1-12DCEH, DC INVERTER','storage/klime/image_6.png','3.175,00','2.999','automatski start, samodijagnoza i automatska zaštita, timer, turbo način rada, noćni način rada, pozlaćene lamele, LED display, anti fungus funkcija, grijač tavice vanjske jedinice, samočišćenje, ionizator, swing funkcija, 12 brzina unutarnjeg ventilatora, slijedi me funkcija, 5 brzina vanjskog ventilatora, tihi rad, zaštita ventila','A++/A+','3,55 (1,2-3,8)','3,55 (1,0-3,7)','R410A','1099 (240~1600)','1002 (200~1440)','1-220-50','-','-','800x300x198','720x540x260','10',NULL,'1/4\'\' (fi 6,35)','3/8\'\' (fi 9,52)',15,5,'600/530/480/440','-','-',NULL,NULL,NULL,NULL,NULL,2,'6,26','4,09','2017-05-08 12:35:21','2017-05-08 12:35:53'),(7,5,'Klima uređaj Korel Fortis+ KSAL1-18DCEH, DC INVERTER','storage/klime/image_7.png','4.565,00',NULL,'automatski start, samodijagnoza i automatska zaštita, timer, turbo način rada, noćni način rada, pozlaćene lamele, LED display, anti fungus funkcija, grijač tavice vanjske jedinice, samočišćenje, ionizator, swing funkcija, 12 brzina unutarnjeg ventilatora, slijedi me funkcija, 5 brzina vanjskog ventilatora, tihi rad, zaštita ventila','A++/A+','5,1 (1,8-5,9)','5,4 (1,8-6,5)','R410A','1580 (560~1680)','1500 (561~1800)','1-220-50','-','-','970x315x235','802x535x298','14',NULL,'1/4\'\' (fi 6,35)','1/2\'\' (fi 12,7)',15,5,'1000/880/800/720','-','-',NULL,NULL,NULL,NULL,NULL,2,'6,12','4,07','2017-05-08 12:40:32','2017-05-08 12:41:03'),(8,5,'Klima uređaj Korel Fortis+ KSAL1-24DCEH, DC INVERTER','storage/klime/image_8.png','6.240,00','5.616','automatski start, samodijagnoza i automatska zaštita, timer, turbo način rada, noćni način rada, pozlaćene lamele, LED display, anti fungus funkcija, grijač tavice vanjske jedinice, samočišćenje, ionizator, swing funkcija, 12 brzina unutarnjeg ventilatora, slijedi me funkcija, 5 brzina vanjskog ventilatora, tihi rad, zaštita ventila','A++/A+','7,0 (2,2-8,7)','7,3 (2,8-8,8)','R410A','2180 (685~2851)','2020 (710~3155)','1-220-50','-','-','970×315×235','802×535×298','16',NULL,'1/4\'\'','5/8\'\'',15,5,'1200/1080/1000/920','-','-',NULL,NULL,NULL,NULL,NULL,2,'6,20','4.05','2017-05-08 12:46:13','2017-05-08 12:46:31'),(9,5,'Klima uređaj Korel Nexo KOFOR-09HFN1, DC INVERTER','storage/klime/image_9.png','2.699,00','2.599','HD (high-density) filter, cold catalyst filter, samodijagnoza, detekcija curenja rashladnog sredstva, low ambient cooling, turbo način rada, pomicanje horizontalnih klapni (gore/dolje), dvosmjerno puhanje zraka, Mute način rada, kompenzacija temperature, 5 brzina ventilatora vanjske jedinice, 12 brzina ventilatora unutarnje jedinice, Intelligent anti-cold air, Sleep način rada, 1W Standby, mogućnost odvoda kondenzata na dvije strane, auto restart, timer, memorija položaja klapne, Emergency using','A++/A+','2,6 (1,03-3,22)','2,9 (0,82-3,37)','R410A','100-1240','120-1200','1 / 220-240','-','-','715x194x285','770x300x555','6.8/8.9',NULL,'1/4\" (fi 6,35)','3/8\" (fi 9,52)',25,10,'420/320/270','1800','-',NULL,NULL,NULL,NULL,NULL,2,'6.2','4.0','2017-05-08 12:50:55','2017-05-08 12:51:33'),(10,5,'Klima uređaj Korel Nexo KOFOR-12HFN1, DC INVERTER','storage/klime/image_10.png','	 2.799,00','2.699','HD (high-density) filter, cold catalyst filter, samodijagnoza, detekcija curenja rashladnog sredstva, low ambient cooling, turbo način rada, pomicanje horizontalnih klapni (gore/dolje), dvosmjerno puhanje zraka, Mute način rada, kompenzacija temperature, 5 brzina ventilatora vanjske jedinice, 12 brzina ventilatora unutarnje jedinice, Intelligent anti-cold air, Sleep način rada, 1W Standby, mogućnost odvoda kondenzata na dvije strane, auto restart, timer, memorija položaja klapne, Emergency using','A++/A+','3,5 (1,08-4,1)','3,8 (0,88-4,2)','R410A','100-1580','130-1510','1 / 220-240','-','-','805x194x285','770x300x555','7.2/9.6',NULL,'1/4\" (fi 6,35)','3/8\" (fi 9,52)',25,10,'570/470/370','1800','-',NULL,NULL,NULL,NULL,NULL,2,'6.1','4.0','2017-05-08 12:55:56','2017-05-08 12:56:28'),(11,5,'Klima uređaj Korel Nexo KOFOR-18HFN1, DC INVERTER','storage/klime/image_11.png','4.565,00',NULL,'HD (high-density) filter, cold catalyst filter, samodijagnoza, detekcija curenja rashladnog sredstva, low ambient cooling, turbo način rada, pomicanje horizontalnih klapni (gore/dolje), dvosmjerno puhanje zraka, Mute način rada, kompenzacija temperature, 5 brzina ventilatora vanjske jedinice, 12 brzina ventilatora unutarnje jedinice, Intelligent anti-cold air, Sleep način rada, 1W Standby, mogućnost odvoda kondenzata na dvije strane, auto restart, timer, memorija položaja klapne, Emergency using','A++/A+','5,27 (1,82-6,13)','5,57 (1,37-6,74)','R410A','140-2360','200-2410','1 / 220-240','-','-','957x213x302','800x333x554','9.5/12.5',NULL,'1/4\" (fi 6,35)','1/2\" (fi 12,7)',30,20,'840/680/540','2100','-',NULL,NULL,NULL,NULL,NULL,2,'6.4','4.0','2017-05-08 13:01:06','2017-05-08 13:01:52'),(12,5,'Klima uređaj Korel Nexo KOFOR-24HFN1, DC INVERTER','storage/klime/image_12.png','	 6.240,00 ',NULL,'HD (high-density) filter, cold catalyst filter, samodijagnoza, detekcija curenja rashladnog sredstva, low ambient cooling, turbo način rada, pomicanje horizontalnih klapni (gore/dolje), dvosmjerno puhanje zraka, Mute način rada, kompenzacija temperature, 5 brzina ventilatora vanjske jedinica, 12 brzina ventilatora unutarnje jedinice, Intelligent anti-cold air, Sleep način rada, 1W Standby, mogućnost odvoda kondenzata na dvije strane, auto restart, timer, memorija položaja klapne, Emergency using\r\n\r\n','A++/A+','7,0 (2,67-7,89)','7,33 (1,61-8,79)','R410A','240-3030','260-3140','1 / 220-240','-','-','1040×220×327','845x363x702','11.9/15.2',NULL,'3/8\" (fi 9,52)','5/8\" (fi 15,9)',50,25,'980/800/640','2700','-',NULL,NULL,NULL,NULL,NULL,2,'6.1','4.0','2017-05-08 13:05:52','2017-05-08 13:06:23');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (13,'2014_10_12_000000_create_users_table',1),(14,'2014_10_12_100000_create_password_resets_table',1),(15,'2016_12_05_120933_create_categories_table',1),(16,'2016_12_05_135656_create_items_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nebs@gmail.com','$2y$10$x2zfIzgwzvj35xkiIAfuMeiAkEcRMHZ6pbvtSGtqKjzo5n3H8geQS','666','2017-05-07 19:36:31','2017-05-07 19:36:31'),(2,'dunjah2@hotmail.com','$2y$10$RLWsb1x2NHhoTqz/zaVS..I4zNeS2LWIupVdLhn1bomkNWLm08SL.','777','2017-05-07 19:36:31','2017-05-07 19:36:31');
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

-- Dump completed on 2017-05-08 13:17:45
