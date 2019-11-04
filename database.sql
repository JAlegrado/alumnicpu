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
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text,
  `news_date` date DEFAULT NULL,
  `article` text,
  `upload` text,
  `dash` text,
  `n_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `add_news` */

insert  into `add_news`(`news_id`,`news_title`,`news_date`,`article`,`upload`,`dash`,`n_id`) values (46,'News Title 1','2019-10-10','Testing Article','269373_281023852030323_1937081887_n.jpg',NULL,NULL),(49,'News 2','2019-11-08','sdfgfdsgdfsg','100764.jpg',NULL,NULL),(50,'xzvzsdgdsa','2019-09-16','sdgffdasgdasg','1639629.jpg',NULL,NULL),(51,'dfsgdfsgds','2019-08-14','dsgfdsgdsgds','afvdkhevp4cr30rmhnnf7oamn752dcdcc3cd344.jpeg',NULL,NULL),(52,'dfgesgrte','2019-06-20','fdsgfdsgfds','aquarium_underwater_sea_fish_beautiful_wallpaper_wallpapers_1366x768.jpg',NULL,NULL),(53,'dsagdsagdsfg','2019-12-31','dfsgdsgds','marmoleda_mountain_reflections-wide.jpg',NULL,NULL);

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `address_line` text,
  `city` text,
  `spr` text,
  `zip` text,
  `country` text,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `address` */

/*Table structure for table `college` */

DROP TABLE IF EXISTS `college`;

CREATE TABLE `college` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT,
  `college10` text,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `college` */

insert  into `college`(`college_id`,`college10`) values (1,'College of Arts and Sciences'),(2,'College of Education'),(3,'College of Engineering ');

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` text,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

insert  into `country`(`country_id`,`country`) values (23,'Malaysia'),(31,'USA');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` text,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_title`) values (1,'BSIT'),(2,'BSCS');

/*Table structure for table `csv` */

DROP TABLE IF EXISTS `csv`;

CREATE TABLE `csv` (
  `csv_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `yeargraduated` text,
  `course` text,
  `college` text,
  PRIMARY KEY (`csv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `csv` */

insert  into `csv`(`csv_id`,`firstname`,`middlename`,`lastname`,`yeargraduated`,`course`,`college`) values (1,'Jace ','Alomea','Gonzales','2011','BSIT','College of Arts and Sciences'),(2,'Merry ','Valdez','Jabagat','2012','BSCS','College of Education'),(3,'Edel','Bonghanoy','Brasileno','2013','BSIT','College of Engineering'),(4,'Joylyn','Santiago','Alegrado','2014','BSCS','College of Education'),(5,'Jace ','Alomea','Gonzales','2011','BSIT','College of Arts and Sciences'),(6,'Merry ','Valdez','Jabagat','2012','BSCS','College of Education'),(7,'Edel','Bonghanoy','Brasileno','2013','BSIT','College of Engineering'),(8,'Joylyn','Santiago','Alegrado','2014','BSCS','College of Education');

/*Table structure for table `disclaimer` */

DROP TABLE IF EXISTS `disclaimer`;

CREATE TABLE `disclaimer` (
  `disclaimer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `disclaimer` text,
  PRIMARY KEY (`disclaimer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `disclaimer` */

insert  into `disclaimer`(`disclaimer_ID`,`disclaimer`) values (1,'Testing');

/*Table structure for table `election` */

DROP TABLE IF EXISTS `election`;

CREATE TABLE `election` (
  `election_id` int(11) NOT NULL AUTO_INCREMENT,
  `election_title` text,
  `election_date` date DEFAULT NULL,
  `position1` text,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`election_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `election` */

insert  into `election`(`election_id`,`election_title`,`election_date`,`position1`,`start_date`,`due_date`) values (1,'Election1','2019-10-25','President','2019-10-25','2019-10-25');

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text,
  `event_type` text,
  `event_date` date DEFAULT NULL,
  `course_participants` text,
  `batch_participants` text,
  `status` text,
  `requested_by` text,
  `venue` text,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `events` */

insert  into `events`(`event_id`,`event_title`,`event_type`,`event_date`,`course_participants`,`batch_participants`,`status`,`requested_by`,`venue`) values (31,'Getting to Know Each other','Aquintance Party','2020-03-20','BSCS','2019','Approve','Jace  zxcv','Hotel Del Rio'),(39,'Buwan ng wika sa buong bansa','Buwan ng Wika','2019-10-24','BSCS','2014','Approve','Jace  zxcv','Boracay'),(40,'Buwan ng wika sa buong bansa','Buwan ng Wika','2019-10-24','BSCS','2014','Approve','Jace  zxcv','Boracay'),(43,'Aquintance','f','2019-10-14','BSCS','2011','Pending','fsdfs  sdfsf','f'),(44,'eded','edede','2019-12-31','BSIT','2011','Pending','fsdfs  sdfsf','frfr');

/*Table structure for table `guest` */

DROP TABLE IF EXISTS `guest`;

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `firstname` text,
  `lastname` text,
  PRIMARY KEY (`guest_id`,`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `guest` */

insert  into `guest`(`guest_id`,`event_id`,`firstname`,`lastname`) values (22,31,'juan','delacruz'),(23,31,'Jose ','Rizal');

/*Table structure for table `nominee` */

DROP TABLE IF EXISTS `nominee`;

CREATE TABLE `nominee` (
  `nominee_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `yeargraduated` text,
  `position` text,
  `status` text,
  `vote` int(11) DEFAULT NULL,
  `platform` text,
  `position_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`nominee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `nominee` */

insert  into `nominee`(`nominee_id`,`firstname`,`middlename`,`lastname`,`yeargraduated`,`position`,`status`,`vote`,`platform`,`position_id`) values (1,'Jace','xzcv','zxcv','2011','President','Approve',NULL,NULL,1),(2,'efrwewa','asdf','sadf','2011','President','Approve',NULL,NULL,1),(3,'dhgfdhfdgh','fdhfdhfdhg','fdhfdhfd','2012','Vice President','Approve',NULL,NULL,2),(27,'sfgdsgdsgsgdf','dfgdsgdsgds','sfgdsgfdsg',NULL,'President','Approve',NULL,NULL,1);

/*Table structure for table `position1` */

DROP TABLE IF EXISTS `position1`;

CREATE TABLE `position1` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` text,
  `max_vote` text,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `position1` */

insert  into `position1`(`position_id`,`position`,`max_vote`,`priority`) values (1,'President','1',1),(2,'Vice President','2',2),(3,'Corporate Secretary','2',3),(5,'Treasurer','1',4);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `middlename` text,
  `lastname` text,
  `college` text,
  `yeargraduated` text,
  `course` text,
  `sex` text,
  `email` text,
  `contact` text,
  `social` text,
  `username` text,
  `password` text,
  `role` text,
  `addressline` text,
  `city` text,
  `spr` text,
  `zip` text,
  `country` text,
  `status` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`firstname`,`middlename`,`lastname`,`college`,`yeargraduated`,`course`,`sex`,`email`,`contact`,`social`,`username`,`password`,`role`,`addressline`,`city`,`spr`,`zip`,`country`,`status`) values (39,'1Jace','sdajkfhsa','sdafsa','College of Education','2013','BSCS','Male','dsaf','sadfs','sdafsa','sadf','asfd','User','safdsa','asfds','sdfsaf','sadfsa','Philippines',NULL),(40,'hjsagfaf','sadfsa','safdsa','College of Education','2012','BSCS','Male','safds','sadf','sdafsa','asdfasdfs','asfd','User','safdsa','asdfs','sadfsa','asf','Philippines',NULL),(41,'efrwewa','asdf','sadf','College of Education','2014','BSCS','Male','dasfsa','sadfsa','asdfsa','sadfsa','sadfsa','User','sadf','sadf','asfd','sdafa','Philippines',NULL),(42,'1','1','1','College of Education','2014','BSIT','Female','1','1','1','e','e','User','2','2','2','1','AF',NULL),(43,'fsdfs',NULL,'sdfsf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'admin','123','Admin',NULL,NULL,NULL,NULL,NULL,NULL),(44,'Jace','asd','Gonzales','College of Education','2013','BSCS','Male','asd','asd','c','c','c','User','asd','asd','asd','ads','USA',NULL),(45,'Merry ','Valdez','Jabagat','College of Arts and Sciences','2012','BSCS','Male','dsgds','','@edlrain','ds','sdgfds','User','sdfg','dsfgds','dsfgds','sdgfds','Malaysia',NULL);

/*Table structure for table `votes` */

DROP TABLE IF EXISTS `votes`;

CREATE TABLE `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `votes` */

insert  into `votes`(`id`,`voters_id`,`candidate_id`,`position_id`) values (9,42,1,1),(10,42,3,2),(11,42,1,1),(12,42,3,2),(13,42,1,1),(14,42,3,2),(15,42,1,1),(16,42,3,2);

/*Table structure for table `voting_results` */

DROP TABLE IF EXISTS `voting_results`;

CREATE TABLE `voting_results` (
  `voting_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `firstname` text,
  `lastname` text,
  `position` text,
  `vote` text,
  PRIMARY KEY (`voting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `voting_results` */

insert  into `voting_results`(`voting_id`,`user_id`,`firstname`,`lastname`,`position`,`vote`) values (1,1,'Jace','Rizal','President','20'),(2,2,'Andress','Bonifacio','Vice President','50'),(3,3,'bnfdhgfd','fdghfd','Corporate Secretary','60');

/*Table structure for table `year_graduated` */

DROP TABLE IF EXISTS `year_graduated`;

CREATE TABLE `year_graduated` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `year_graduated` text,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `year_graduated` */

insert  into `year_graduated`(`year_id`,`year_graduated`) values (2,'2011'),(3,'2012'),(4,'2013'),(5,'2014'),(6,'2015'),(11,'2016'),(12,'2017'),(13,'2018'),(16,'2019'),(24,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
