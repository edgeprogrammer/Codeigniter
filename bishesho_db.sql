-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: bishesho_db
-- ------------------------------------------------------
-- Server version	5.7.29

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
-- Table structure for table `allrooms`
--

DROP TABLE IF EXISTS `allrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allrooms` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `view` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `beds` varchar(255) DEFAULT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `occupancy` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `adult` varchar(255) DEFAULT NULL,
  `lawn` varchar(255) DEFAULT NULL,
  `microwave` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `barbecue` varchar(255) DEFAULT NULL,
  `roomService` varchar(255) DEFAULT NULL,
  `tvCable` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `main_image_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allrooms`
--

LOCK TABLES `allrooms` WRITE;
/*!40000 ALTER TABLE `allrooms` DISABLE KEYS */;
INSERT INTO `allrooms` (`id`, `title`, `price`, `view`, `address`, `beds`, `bathroom`, `occupancy`, `children`, `adult`, `lawn`, `microwave`, `gym`, `barbecue`, `roomService`, `tvCable`, `description`, `main_image_id`) VALUES (21,'Family Room','1400','River View with Ice mountain','Lower Dorop salghari south sikkim, India','1','1','2','2','2','Lawn','Microwave','Basic Fitness Gym','Barbecue','Room Service','TV Cable','Samdruptse Hill; the \'wish fulfilling hill\' is just 5 km away from Namchi, situated at an altitude of 2134 m (7000 ft). This epic hill is ornamented with a giant statue of the Guru Padmasambhava (Guru Rinpoche); the patron saint of Sikkim who has been sho','54'),(22,'Delux Room','1500','River View with Ice mountain\'s','','2','1','2','2','2','Lawn','Microwave','Basic Fitness Gym','Barbecue','Room Service','TV Cable','Samdruptse Hill; the \'wish fulfilling hill\' is just 5 km away from Namchi, situated at an altitude of 2134 m (7000 ft). This epic hill is ornamented with a giant statue of the Guru Padmasambhava (Guru Rinpoche); the patron saint of Sikkim who has been sho','71'),(23,'Honeymoon Suit','1800','Green Land with deep valley ','Lower Dorop salghari south sikkim, India','2','1','3','1','2','Lawn','Microwave','Basic Fitness Gym','Barbecue','Room Service','TV Cable','Ravangla or Rawangla or Ravongla is a small tourist town situated at an elevation of 8000 ft in South Sikkim district of the Indian state of Sikkim. It is connected by state highway to other major towns in the state and lies between Pelling and Gangtok','72'),(0,'Meet with peace ','1000','you can see view Queen of Himalayan Darjeeling ','salghari south sikkim, salghari south sikkim','1','1','2','1','2','Lawn','Microwave','Basic Fitness Gym','Barbecue','Room Service','TV Cable','This Homestay located in south sikkim india there is no doute for good services we can provide all the facility which is mention here... ',NULL);
/*!40000 ALTER TABLE `allrooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `description`, `image`) VALUES (4,'Gangtok In Summer 2020','An Exquisite Vacation Filled With Fun & Adventure!\r\nGangtok is a vibrant upbeat capital city of Sikkim with a blend of modernity and tradition. While the ancient monasteries and pilgrimage sites will soak you in spirituality, the adventure activities will','Tsomgo_Lake.jpg'),(5,' Now, fly straight into Sikkim',' Now, fly straight into Sikkim: Pakyong airport near Gangtok opens next month\r\nFrom next month, you can finally fly straight to Sikkim when the Pakyong Airport near Gangtok comes into service. Budget carrier SpiceJet will operate the first flight from Pak','Tsomgo_Lakeee.jpg'),(6,'Siddheshwar Dham (Char Dham)','It is situated at Solophok hill which is 5 km away from Namchi town. It is believed that a visit to the place is enough to wash away one’s sins. The 108 feet statue of Lord Shiva is encircled and supported by a girdle of twelve Jyotirlingams Chardam, whic','c707324861ad655cf9961a9d790c3e30.jpg');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `room_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `arrival_date` varchar(255) NOT NULL,
  `departure_date` varchar(255) NOT NULL,
  `booking_status` int(255) NOT NULL DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`id`, `room_id`, `name`, `phone`, `email`, `arrival_date`, `departure_date`, `booking_status`, `description`) VALUES (3,22,'Civic Conclave Technologies','07840 046570','samuel.ymca@hotmail.com','03/18/2020','04/13/2020',3,NULL),(4,22,'Civic Conclave Technologies','07840 046570','samuel.ymca@hotmail.com','03/18/2020','04/13/2020',3,NULL),(7,21,'','07840 046570','','02/11/2020','02/21/2020',3,NULL),(14,23,'Civic Conclave Technologies','07840 046570','deepaksharma111998@gmail.com','03/02/2020','03/07/2020',3,NULL),(21,22,'Deepak sharma','07840 046570','deepaksharma111998@gmail.com','02/18/2020','03/16/2020',0,NULL),(22,23,'Deepak sharma','07840 046570','deepaksharma111998@gmail.com','03/03/2020','03/11/2020',2,NULL),(27,22,'Civic Conclave Technologies','07840 046570','samuel.ymca@hotmail.com','02/18/2020','02/20/2020',0,NULL),(33,21,'SUDHANSHU MISHRA','6386022719','mishrasudhanshu0786@gmail.com','02/19/2020','02/26/2020',1,NULL),(35,23,'pradeep','8016548526','pradipbiswakarma123@gmail.com','02/20/2020','02/26/2020',0,NULL),(36,23,'Sudhanshu','6386022719','mishrasudhanshu0786@gmail.com','02/26/2020','02/29/2020',0,NULL),(40,21,'','','','','',0,NULL);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `room_id` int(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `image`, `room_id`, `created`) VALUES (42,'71.PNG',16,'2020-02-01 22:30:02'),(43,'111.jpg',16,'2020-02-01 22:30:02'),(44,'121.jpg',16,'2020-02-01 22:30:02'),(45,'131.jpg',16,'2020-02-01 22:30:02'),(46,'14.jpg',16,'2020-02-01 22:30:02'),(47,'7.jpg',17,'2020-02-01 23:13:51'),(48,'112.jpg',19,'2020-02-01 23:23:19'),(49,'122.jpg',19,'2020-02-01 23:23:19'),(50,'132.jpg',19,'2020-02-01 23:23:19'),(51,'1.jpg',20,'2020-02-01 23:24:34'),(52,'15.jpg',16,'2020-02-01 23:27:20'),(53,'4.jpg',17,'2020-02-01 23:27:53'),(54,'g5.jpeg',21,'2020-02-02 08:11:24'),(55,'g7.jpeg',21,'2020-02-02 08:11:24'),(56,'g17.jpeg',21,'2020-02-02 08:11:24'),(57,'g19.jpeg',21,'2020-02-02 08:11:24'),(58,'g22.jpeg',21,'2020-02-02 08:11:24'),(59,'g30.jpeg',21,'2020-02-02 08:11:24'),(60,'g35.jpeg',21,'2020-02-02 08:11:24'),(61,'123.jpg',22,'2020-02-02 08:15:01'),(62,'g3.jpeg',22,'2020-02-02 08:15:01'),(63,'g8.jpeg',22,'2020-02-02 08:15:01'),(64,'g21.jpeg',22,'2020-02-02 08:15:01'),(65,'g28.jpeg',22,'2020-02-02 08:15:01'),(66,'g39.jpeg',22,'2020-02-02 08:15:01'),(67,'g60.jpeg',22,'2020-02-02 08:15:01'),(68,'namchi-sikkim.jpg',22,'2020-02-02 08:15:01'),(69,'g31.jpeg',22,'2020-02-02 08:15:31'),(70,'g32.jpeg',22,'2020-02-02 08:16:47'),(71,'g33.jpeg',22,'2020-02-02 08:17:09'),(72,'g71.jpeg',23,'2020-02-02 08:20:29'),(73,'g11.jpeg',23,'2020-02-02 08:20:29'),(74,'g23.jpeg',23,'2020-02-02 08:20:29'),(75,'g24.jpeg',23,'2020-02-02 08:20:29'),(76,'g25.jpeg',23,'2020-02-02 08:20:29'),(77,'1111.jpg',24,'2020-02-02 13:52:33'),(78,'Fishing.jpg',24,'2020-02-02 13:52:33'),(79,'g81.jpeg',24,'2020-02-02 13:52:33'),(80,'g10.jpeg',24,'2020-02-02 13:52:33'),(81,'g391.jpeg',24,'2020-02-02 13:52:33'),(82,'g40.jpeg',24,'2020-02-02 13:52:33');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `Username`, `Password`, `Email`) VALUES (1,'admin@gmail.com','admin','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bishesho_db'
--

--
-- Dumping routines for database 'bishesho_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-15  0:40:26
