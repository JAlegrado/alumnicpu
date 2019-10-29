/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.26 : Database - cpuaai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cpuaai` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cpuaai`;

/*Table structure for table `add_news` */

DROP TABLE IF EXISTS `add_news`;

CREATE TABLE `add_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text,
  `news_date` date DEFAULT NULL,
  `article` text,
  `upload` text,
  `dash` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `add_news` */

insert  into `add_news`(`id`,`news_title`,`news_date`,`article`,`upload`,`dash`) values (46,'News Title 1','2019-10-10','Testing Article','admin2.jpg',NULL),(47,'New 2','2019-10-16','Article 2','1.jpg',NULL);

/*Table structure for table `election` */

DROP TABLE IF EXISTS `election`;

CREATE TABLE `election` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `election_title` text,
  `election_date` date DEFAULT NULL,
  `position1` text,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `election` */

insert  into `election`(`id`,`election_title`,`election_date`,`position1`,`start_date`,`due_date`) values (1,'Election','2019-10-10','President','2019-10-24','2019-10-09');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text,
  `event_type` text,
  `event_date` date DEFAULT NULL,
  `course_participants` text,
  `batch_participants` text,
  `status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `events` */

insert  into `events`(`id`,`event_title`,`event_type`,`event_date`,`course_participants`,`batch_participants`,`status`) values (1,'Event Titl','Event Type','2019-10-17','BSIT','2019','Approve'),(2,'Event Title2','Event Type 2','2019-10-21','BSIT','2019','Approve'),(3,'Event Title 3','Event Type 3','2019-10-09','BSIT','2018','Pending');

/*Table structure for table `nominee` */

DROP TABLE IF EXISTS `nominee`;

CREATE TABLE `nominee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `yeargraduated` text,
  `position` text,
  `status` text,
  `vote` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `nominee` */

insert  into `nominee`(`id`,`firstname`,`middlename`,`lastname`,`yeargraduated`,`position`,`status`,`vote`) values (1,'Merry','Valdez','Jabagat','2020','Vice President',NULL,NULL),(2,'Admin','autofocus','Admin','autofocus','President',NULL,NULL),(3,'joy','Santiago','Alegrado','2019-2020','President',NULL,NULL),(4,'Merry','Valdez','Jabagat','2020','Vice President',NULL,NULL),(5,'Edel','Bonghanoy','BrasileÃ±o','2020','President',NULL,NULL),(6,'Merry','Valdez','Jabagat','2020','President','Approve',NULL),(7,'Edel','Bonghanoy','BrasileÃ±o','2020','President','Approve',NULL),(10,'Merry','Valdez','Jabagat','2020','Vice President','Approve',NULL),(11,'Merry','Valdez','Jabagat','2020','Corporate Secretary','Approve',NULL),(12,'Merry','Valdez','Jabagat','2020','Corporate Treasurer','Approve',NULL),(13,'Jace','Alomea','Gonzales','2020','Corporate Treasurer','Pending',NULL),(14,'Jace','Alomea','Gonzales','2020','Regional Trustees','Pending',NULL);

/*Table structure for table `position1` */

DROP TABLE IF EXISTS `position1`;

CREATE TABLE `position1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` text,
  `max_vote` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `position1` */

insert  into `position1`(`id`,`position`,`max_vote`) values (1,'President','1'),(2,'Vice President','1'),(5,'Corporate Secretary','1'),(6,'Corporate Treasurer','1'),(7,'Corporate Auditor','1'),(8,'Regional Trustees','5');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `address` text,
  `yeargraduated` text,
  `sex` text,
  `email` text,
  `contact` text,
  `social` text,
  `username` text,
  `password` text,
  `role` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`firstname`,`middlename`,`lastname`,`address`,`yeargraduated`,`sex`,`email`,`contact`,`social`,`username`,`password`,`role`) values (1,'Juan',NULL,'Delacruz',NULL,NULL,NULL,NULL,NULL,NULL,'Admin','123','Admin'),(2,'kevin_tom','kevin','Kevin',NULL,'6/6/2019',NULL,NULL,NULL,NULL,NULL,NULL,'User'),(3,'vincy','vincy','Vincy',NULL,'6/6/2019',NULL,NULL,NULL,NULL,NULL,NULL,'User'),(4,'tim_lee','tim','Tim',NULL,'6/6/2019',NULL,NULL,NULL,NULL,NULL,NULL,'User'),(5,'jane','jane','Jane',NULL,'6/6/2019',NULL,NULL,NULL,NULL,NULL,NULL,'User'),(20,'joy','Santiago','Alegrado','Pavia','2019-2020','Female','@gmail','09090909009','facebook','user','123','User'),(21,'Edel','Bonghanoy','BrasileÃ±o','Alta Tierra Village, Jaro, Iloilo City','2020','Female','edelbrasileno@gmail.com','09152705126','@edlrain','edelbrasileno','1234','User'),(22,'Jace','Alomea','Gonzales','Numancia, Aklan','2020','Male','jaze14@gmail.com','091276244235','@jace','jace14','1234','User'),(23,'Merry','Valdez','Jabagat','Guadalupe, Cebu City','2020','Female','merryrose@gmail.com','0932478238549','@mrryv','merryrose','1234','User');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
