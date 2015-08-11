/*
SQLyog Ultimate v9.50 
MySQL - 5.6.16 : Database - contact_manager
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`contact_manager` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `contact_manager`;

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `homephone` varchar(25) DEFAULT NULL,
  `workphone` varchar(25) DEFAULT NULL,
  `cellphone` varchar(25) DEFAULT NULL,
  `bestphone` varchar(25) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=utf8;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`lastname`,`firstname`,`email`,`homephone`,`workphone`,`cellphone`,`bestphone`,`address1`,`address2`,`city`,`state`,`zip`,`country`,`birthdate`) values (1,'Hevko','Taras','hevkotaras@gmail.com','253046','252627','964353450','964353450','obolonya','47','Ternopil','TO','46008','Ukraine','1991-04-23'),(6,'Dovgan','Marichka','marichka@email.com','5645645','74','345','5645645','','','','','','','0000-00-00'),(7,'Vavrikovich','Volodumur','vova@gmail.com','4415','0','0','4415','','','','','','','2013-09-25'),(8,'Dzyr','Sergiy','dzyr@mail.ru','4','5','6','5','','','','','','','2013-09-25'),(108,'Borkovski','Kolia','wolf@gmail.com','45','1','2','45','','','','','','','0000-00-00'),(147,'Bruzyna','Viktor','bruzyna@email.com','45','222','333','222','','','','','','','0000-00-00'),(161,'Ivanyk','Ivanuk','ivan@mail.com','56','34','4','34','34','','','','','','2013-09-25'),(163,'Pavlo','Pavlenko','pavlo@mail.com','564','555','777','555','','','','','','','2013-09-25'),(190,'Stepan','Stepanko','stepan@gmail.com','123','543','899','543','a1','a2','c','s','z','c','0000-00-00'),(203,'Artyr','Rock','artur@mail.com','111','333','555','333','','','','','','','0000-00-00'),(204,'Mary','Maryy','mary@mail.com','111','222','333','222','','','','','','','0000-00-00'),(230,'devic','makar','makar@email.com','111','222','333','111','addres1','addres2','c','s','z','c','2013-10-08'),(242,'Dovgan','Maria','maria.d92@mail.ru','8768657','2222','','2222','kjhgkhg','','Zolochiv','Lviv','','Ukraine','0000-00-00'),(254,'last','first','email@mail.com','111','','','111','','','','','','','0000-00-00'),(278,'dssdf','dsg','email@mail.com','','234','','234','','','','','','','0000-00-00'),(281,'sdfs','asf','email@mail.com','','','','','','','','','','','0000-00-00'),(286,'sf','dfgq','email@mail.com','','','','','','','','','','','0000-00-00'),(289,'sdfg','sdf','email@mail.com','','','','','','','','','','','0000-00-00'),(293,'newaa','bbb','email@mail.com','','','','','','','','','','','0000-00-00'),(309,'s','','','','','','','','','','','','','0000-00-00'),(316,'ad','sad','email@mail.com','111','','','111','','','','','','','2023-10-31');

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipients` varchar(3000) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

/*Data for the table `emails` */

insert  into `emails`(`id`,`recipients`,`subject`,`message`) values (1,'fearlesslord@ukr.net','aaaaaaaaaaaaa','from contact manager'),(2,'vov1a@gmail.com12,12stepan@gmail.com,pav12lo@mail.com,iva1n@mail.com,hev12kotaras@gmail.12com,dzyr@mail.ru,marichka122@email.com,bruz12yna@email.com,12wolf@gmail.com','subject','very importent message'),(3,'fearlesslord@ukr.net','new subj','new text'),(4,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,ivan@mail.com,hevkotaras@gmail.com,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com','',''),(5,'fearlesslord@ukr.net','',''),(6,'fearlesslord@ukr.net','sdf','sdfhx'),(7,'fearlesslord@ukr.net','',''),(8,'fearlesslord@ukr.net','',''),(9,'fearlesslord@ukr.net','',''),(10,'fearlesslord@ukr.net','',''),(11,'fearlesslord@ukr.net','',''),(12,'fearlesslord@ukr.net','',''),(13,'pavlo@mail.com','',''),(14,'pavlo@mail.com','',''),(15,'pavlo@mail.com','',''),(16,'pavlo@mail.com','',''),(17,'pavlo@mail.com','',''),(18,'pavlo@mail.com','',''),(19,'pavlo@mail.com','',''),(20,'pavlo@mail.com','',''),(21,'pavlo@mail.com','',''),(22,'pavlo@mail.com','',''),(23,'pavlo@mail.com','',''),(24,'pavlo@mail.com','',''),(25,'pavlo@mail.com','',''),(26,'pavlo@mail.com','',''),(27,'pavlo@mail.com','',''),(28,'pavlo@mail.com','',''),(29,'pavlo@mail.com','',''),(30,'pavlo@mail.com','',''),(31,'pavlo@mail.com','',''),(32,'pavlo@mail.com','',''),(33,'pavlo@mail.com','',''),(34,'stepan@gmail.com,new@mail.com','',''),(35,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,new@mail.com','',''),(36,'sdgsdfgs','',''),(37,'sfghsd','',''),(38,'sfghsd','',''),(39,'sfghsd','',''),(40,'sfghsd','',''),(41,'sfghsd','',''),(42,'sfghsd','',''),(43,'bm','',''),(44,'sdf','',''),(45,'asd','',''),(46,'asg','',''),(47,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,t111aras@mail.com','blabla','vlaqwqkah fhasdf sd'),(48,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,t111aras@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,test!!!@mail.com','sdf','sdgfsdf'),(49,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,t111aras@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,test111!@gmail.com,test222!@gmail.com,test333!@gmail.com','sdfg','sdg'),(50,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,dfgh@emailsdf.com,test333!@gmail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,bla@mail.com,bla,bla','xdg','sdg'),(51,'artur@mail.com,max@mail.com,rojer@mail.com','subj','text'),(52,'artur@mail.com,aaa@mail.com','',''),(53,'artur@mail.com,aaa@mail.com','',''),(54,'test333@gmail.com','',''),(55,'maria.d92@mail.ru','aaa','vvvvvv'),(56,'sss@mqail.com','a','df'),(58,'hevkotaras@gmail.com,marichka@email.com,vova@gmail.com,dzyr@mail.ru,wolf@gmail.com,bruzyna@email.com,ivan@mail.com,pavlo@mail.com,stepan@gmail.com,artur@mail.com,mary@mail.com,makae@email.com,maria.d92@mail.ru,email@mail.com,em@mail.com','aaa','aaaaaaaaa'),(59,'hevkotaras@gmail.com,marichka@email.com,vova@gmail.com,dzyr@mail.ru,wolf@gmail.com,bruzyna@email.com,ivan@mail.com,pavlo@mail.com,stepan@gmail.com,artur@mail.com,mary@mail.com,makae@email.com,maria.d92@mail.ru,email@mail.com,em@mail.com','aaa','aaaaaaaaa'),(60,'hevkotaras@gmail.com,marichka@email.com,vova@gmail.com,dzyr@mail.ru,wolf@gmail.com,bruzyna@email.com,ivan@mail.com,pavlo@mail.com,stepan@gmail.com,artur@mail.com,mary@mail.com,makae@email.com,maria.d92@mail.ru,email@mail.com,email@mail.com,bla@bla.bla','d','sdf'),(61,'hevkotaras@gmail.com','',''),(62,'hevkotaras@gmail.com,sdfgf@email.com','new subj112','new text112'),(63,'dzyr@mail.ru','dfs','sdfs'),(64,'dzyr@mail.ru','dfs','sdfs');

/*Table structure for table `sentmails` */

DROP TABLE IF EXISTS `sentmails`;

CREATE TABLE `sentmails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipients` varchar(3000) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `sentmails` */

insert  into `sentmails`(`id`,`recipients`,`subject`,`message`) values (1,'fearlesslord@ukr.net','aaaaaaaaaaaaa','from contact manager'),(2,'vov1a@gmail.com12,12stepan@gmail.com,pav12lo@mail.com,iva1n@mail.com,hev12kotaras@gmail.12com,dzyr@mail.ru,marichka122@email.com,bruz12yna@email.com,12wolf@gmail.com','subject','very importent message'),(3,'fearlesslord@ukr.net','new subj','new text'),(4,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,ivan@mail.com,hevkotaras@gmail.com,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com','',''),(5,'fearlesslord@ukr.net','',''),(6,'fearlesslord@ukr.net','sdf','sdfhx'),(7,'fearlesslord@ukr.net','',''),(8,'fearlesslord@ukr.net','',''),(9,'fearlesslord@ukr.net','',''),(10,'fearlesslord@ukr.net','',''),(11,'fearlesslord@ukr.net','',''),(12,'fearlesslord@ukr.net','',''),(13,'pavlo@mail.com','',''),(14,'pavlo@mail.com','',''),(15,'pavlo@mail.com','',''),(16,'pavlo@mail.com','',''),(17,'pavlo@mail.com','',''),(18,'pavlo@mail.com','',''),(19,'pavlo@mail.com','',''),(20,'pavlo@mail.com','',''),(21,'pavlo@mail.com','',''),(22,'pavlo@mail.com','',''),(23,'pavlo@mail.com','',''),(24,'pavlo@mail.com','',''),(25,'pavlo@mail.com','',''),(26,'pavlo@mail.com','',''),(27,'pavlo@mail.com','',''),(28,'pavlo@mail.com','',''),(29,'pavlo@mail.com','',''),(30,'pavlo@mail.com','',''),(31,'pavlo@mail.com','',''),(32,'pavlo@mail.com','',''),(33,'pavlo@mail.com','',''),(34,'stepan@gmail.com,new@mail.com','',''),(35,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,new@mail.com','',''),(36,'sdgsdfgs','',''),(37,'sfghsd','',''),(38,'sfghsd','',''),(39,'sfghsd','',''),(40,'sfghsd','',''),(41,'sfghsd','',''),(42,'sfghsd','',''),(43,'bm','',''),(44,'sdf','',''),(45,'asd','',''),(46,'asg','',''),(47,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,t111aras@mail.com','blabla','vlaqwqkah fhasdf sd'),(48,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,t111aras@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,test!!!@mail.com','sdf','sdgfsdf'),(49,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,t111aras@mail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,test111!@gmail.com,test222!@gmail.com,test333!@gmail.com','sdfg','sdg'),(50,'vova@gmail.com,stepan@gmail.com,pavlo@mail.com,dfgh@emailsdf.com,test333!@gmail.com,ivan@mail.com,hevkotaras@gmail.com,fearlesslord@ukr.net,dzyr@mail.ru,marichka@email.com,bruzyna@email.com,wolf@gmail.com,bla@mail.com,bla,bla','xdg','sdg'),(51,'artur@mail.com,max@mail.com,rojer@mail.com','subj','text'),(52,'hevkotaras@gmail.com,marichka@email.com,vova@gmail.com,dzyr@mail.ru,wolf@gmail.com,bruzyna@email.com,ivan@mail.com,pavlo@mail.com,stepan@gmail.com,fearlesslord@ukr.net,test333!@gmail.com,dfgh@emailsdf.com,artur@mail.com,mary@mail.com,fdkjjgn,sdrg,sg','dkjh','dkjg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `group` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`login`,`password`,`email`,`group`) values (1,'taras','bb1ae400748f272737c29d3cf8db5f12','fearlesslord@ukr.net','1'),(2,'peter','bb1ae400748f272737c29d3cf8db5ere',NULL,'2'),(3,'qwe','qwe',NULL,'3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
