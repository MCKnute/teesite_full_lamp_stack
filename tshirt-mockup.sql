CREATE DATABASE  IF NOT EXISTS `tshirt-mockup` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tshirt-mockup`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tshirt-mockup
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'1234 Main Street','Los Angeles','CA',91607,NULL,NULL),(24,'4567 Oak Street','Newtown','FL',90001,NULL,NULL),(25,'3456 1st Street','Austin','TX',90001,NULL,NULL),(26,'817 N. Vine Street','Hollywood','CA',90000,NULL,NULL),(27,'633 Canoga Ave','Woodland Hills','CA',91111,NULL,NULL);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_has_products`
--

DROP TABLE IF EXISTS `categories_has_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_has_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`category_id`,`product_id`),
  KEY `fk_categories_has_products_products1_idx` (`product_id`),
  KEY `fk_categories_has_products_categories1_idx` (`category_id`),
  CONSTRAINT `fk_categories_has_products_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_has_products`
--

LOCK TABLES `categories_has_products` WRITE;
/*!40000 ALTER TABLE `categories_has_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_has_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventories`
--

DROP TABLE IF EXISTS `inventories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `small_w` int(11) DEFAULT NULL,
  `medium_w` int(11) DEFAULT NULL,
  `large_w` int(11) DEFAULT NULL,
  `xlarge_w` int(11) DEFAULT NULL,
  `small_m` int(11) DEFAULT NULL,
  `medium_m` int(11) DEFAULT NULL,
  `large_m` int(11) DEFAULT NULL,
  `xlarge_m` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventories`
--

LOCK TABLES `inventories` WRITE;
/*!40000 ALTER TABLE `inventories` DISABLE KEYS */;
INSERT INTO `inventories` VALUES (1,100,100,100,100,100,100,100,100,'2016-02-25 11:24:00','2016-02-25 11:24:00'),(2,111,111,111,111,111,111,111,111,'2016-02-25 11:26:00','2016-02-25 11:26:00'),(3,222,222,222,222,222,222,222,222,'2016-02-25 11:26:00','2016-02-25 11:26:00'),(4,44,44,44,44,44,44,44,44,'2016-02-25 11:26:00','2016-02-25 11:26:00'),(5,100,100,100,100,100,100,100,100,'2016-02-28 21:51:20','2016-02-28 21:51:20'),(6,100,100,100,100,100,100,100,100,'2016-02-28 21:51:20','2016-02-28 21:51:20'),(7,100,100,100,100,100,100,100,100,'2016-02-28 21:51:21','2016-02-28 21:51:21'),(8,100,100,100,100,100,100,100,100,'2016-02-28 21:51:21','2016-02-28 21:51:21'),(9,100,100,100,100,100,100,100,100,'2016-02-28 21:51:21','2016-02-28 21:51:21'),(10,100,100,100,100,100,100,100,100,'2016-02-28 21:51:21','2016-02-28 21:51:21'),(11,100,100,100,100,100,100,100,100,'2016-02-28 22:14:28','2016-02-28 22:14:28');
/*!40000 ALTER TABLE `inventories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tracking_num` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `addresses_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `transaction_id` varchar(45) DEFAULT NULL,
  `paid` tinyint(4) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`addresses_id`),
  KEY `fk_orders_users1_idx` (`user_id`),
  KEY `fk_orders_addresses1_idx` (`addresses_id`),
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (24,'0',6,24,'2016-03-02 22:53:09','2016-03-02 22:53:09','ch_17khu5E9uRZbbBoewo19PZgH',1,32.00),(25,'0',6,25,'2016-03-02 22:53:42','2016-03-02 22:53:42','ch_17khucE9uRZbbBoe9rBL591e',1,52.00),(26,'0',7,26,'2016-03-02 23:03:47','2016-03-02 23:03:47','ch_17ki4ME9uRZbbBoesWctQQop',1,66.00),(27,'0',10,27,'2016-03-02 23:47:18','2016-03-02 23:47:18','ch_17kikUE9uRZbbBoeKmT1l6cH',1,78.00);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `price` decimal(5,2) DEFAULT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Red Belt','A super lucky red shirt, for the lucky Red Belt graduates',19.98,NULL,NULL,'2016-02-25 11:24:00','2016-02-25 11:24:00'),(2,'White Belt','A simple shirt, with a white-belt ninja.',9.99,NULL,NULL,'2016-02-25 11:24:00','2016-02-25 11:24:00'),(3,'Mystery Shirt','What could this shirt be??',999.97,NULL,NULL,'2016-02-25 11:24:00','2016-02-25 11:24:00'),(4,'Coding Dojo','An amazing black CodingDojo black shirt! Perfect for Coding Dojo alumni!',19.99,NULL,NULL,'2016-02-25 11:24:00','2016-02-25 11:24:00'),(5,'Honey Badger Don\'t Care','What does a honey badger do? Well, they certainly don\'t care. Show off your honey badger attitude with this lovely black shirt.',19.99,NULL,NULL,'2016-02-28 21:58:03','2016-02-28 21:58:03'),(6,'I\'m on the Ninja Diet','Ninja turtles are known for their stealth, humor, and love of pizza. Do you love pizza? Then you should  love this shirt.',24.99,NULL,NULL,'2016-02-28 21:58:03','2016-02-28 21:58:03'),(7,'#TeamEduardo','Show the world who your favorite coding master is by wearing this trendy green shirt!',29.99,NULL,NULL,'2016-02-28 21:58:03','2016-02-28 21:58:03'),(8,'#TeamLance','Show the world who your favorite coding master is by wearing this trendy blue shirt!',29.99,NULL,NULL,'2016-02-28 21:58:04','2016-02-28 21:58:04'),(9,'#TeamChris','Show the world who your favorite coding master is by wearing this trendy red shirt!',29.99,NULL,NULL,'2016-02-28 21:58:04','2016-02-28 21:58:04'),(10,'#TeamKelvin','Show the world who your favorite coding master is by wearing this trendy black shirt!',29.99,NULL,NULL,'2016-02-28 21:58:04','2016-02-28 21:58:04'),(11,'Yellow Belt','The Yellow belt is earned for the first exam taken at the Dojo. Why not put the Yellow Belt ninja on a bright blue shirt?',12.99,NULL,NULL,'2016-02-28 22:15:48','2016-02-28 22:15:48'),(12,'Ninja, Please','Ninja, please! Wear your sass on your shirt with this cool white tee!',14.49,NULL,NULL,'2016-03-03 19:28:00','2016-03-03 19:28:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_has_orders`
--

DROP TABLE IF EXISTS `products_has_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_has_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`,`product_id`,`order_id`),
  KEY `fk_products_has_orders_products1_idx` (`product_id`),
  KEY `fk_products_has_orders_orders1_idx` (`order_id`),
  CONSTRAINT `fk_products_has_orders_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_has_orders`
--

LOCK TABLES `products_has_orders` WRITE;
/*!40000 ALTER TABLE `products_has_orders` DISABLE KEYS */;
INSERT INTO `products_has_orders` VALUES (23,1,24,1,'small_w'),(24,2,24,1,'medium_m'),(25,1,24,1,'xlarge_w'),(26,1,25,1,'small_w'),(27,3,26,1,'small_w'),(28,2,26,2,'medium_w'),(29,1,26,4,'large_m'),(30,1,27,1,'small_w'),(31,2,27,1,'small_w');
/*!40000 ALTER TABLE `products_has_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `customer_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Pete','Kang','pete@kang.com','5f4dcc3b5aa765d61d8327deb882cf99',1,'2016-02-10 18:45:24',NULL,NULL),(6,'David','Macias','david@macias.com','5f4dcc3b5aa765d61d8327deb882cf99',1,'2016-03-01 22:07:48','2016-03-01 13:32:46','cus_80LoxefHaaIcnT'),(7,'David','Macias','davymac@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99',0,'2016-03-02 04:43:49','2016-03-01 19:44:20','cus_80Roucd1Ed6HKy'),(9,'Fake','User','fake@user.com','5f4dcc3b5aa765d61d8327deb882cf99',0,'2016-03-02 08:35:25','2016-03-01 23:36:41','cus_80VYMyjVbsKUZv'),(10,'Johnny','User','johnny@user.com','5f4dcc3b5aa765d61d8327deb882cf99',0,'2016-03-02 23:46:47','2016-03-02 14:47:17','cus_80kEkaH4yPfqUN'),(11,'Samir','Sam','sam@sam.com','5f4dcc3b5aa765d61d8327deb882cf99',0,'2016-03-04 16:53:46','2016-03-04 16:53:46','0');
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

-- Dump completed on 2016-03-04 12:20:05
