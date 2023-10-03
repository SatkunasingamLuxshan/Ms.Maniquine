/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.31 : Database - maniquine
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`maniquine` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `maniquine`;

/*Table structure for table `belongs` */

DROP TABLE IF EXISTS `belongs`;

CREATE TABLE `belongs` (
  `productid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `categoryid` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `belongs` */

/*Table structure for table `card` */

DROP TABLE IF EXISTS `card`;

CREATE TABLE `card` (
  `email` varchar(255) NOT NULL,
  `cardnumber` varchar(50) NOT NULL,
  `expdate` varchar(10) NOT NULL,
  `cardholdname` varchar(100) NOT NULL,
  `cvv` int(8) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `cardid` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `card` */

insert  into `card`(`email`,`cardnumber`,`expdate`,`cardholdname`,`cvv`) values 
('admin@admin.com','1111-2222-0215-3692','11/21','admin',360),
('dixdinu91@gmail.com','3','3','3',4),
('dixshandk91@gmail.com','1','1','1',NULL),
('kugathasanahilan@gmail.com','2','2','2',NULL);

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cartid` int(100) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `availabitystatus` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `product_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `cart` */

insert  into `cart`(`cartid`,`quantity`,`price`,`description`,`availabitystatus`,`name`,`username`,`product_id`) values 
(133,NULL,NULL,NULL,NULL,'Anarkali','admin@admin.com',19),
(134,NULL,NULL,NULL,NULL,'Party Wear','admin@admin.com',18),
(135,NULL,NULL,NULL,NULL,'Aari Work','admin@admin.com',17),
(136,NULL,NULL,NULL,NULL,'Anarkali','dixshandk91@gmail.com',19),
(137,NULL,NULL,NULL,NULL,'Office Wear','admin@admin.com',38),
(139,NULL,NULL,NULL,NULL,'Casual Tops','mathura@gmail.com',37),
(140,NULL,NULL,NULL,NULL,'Casual Tops','admin@admin.com',37),
(141,NULL,NULL,NULL,NULL,' Casual Tops','admin@admin.com',36),
(142,NULL,NULL,NULL,NULL,'Wedding Dress','admin@admin.com',32),
(143,NULL,NULL,NULL,NULL,'Wedding Dress','admin@admin.com',31);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `cat_id` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cat_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `categories` */

insert  into `categories`(`cat_id`,`cat_title`) values 
('',''),
('Cat_01','Casual wear'),
('Cat_02','Smart casual'),
('Cat_03','Party wear'),
('Cat_04','Wedding dress'),
('Cat_05','Kids'),
('Cat_06','Other');

/*Table structure for table `counter` */

DROP TABLE IF EXISTS `counter`;

CREATE TABLE `counter` (
  `id` int(10) NOT NULL,
  `visits` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `counter` */

/*Table structure for table `deliver` */

DROP TABLE IF EXISTS `deliver`;

CREATE TABLE `deliver` (
  `shippingid` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `userid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `productid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`shippingid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `deliver` */

/*Table structure for table `donefor` */

DROP TABLE IF EXISTS `donefor`;

CREATE TABLE `donefor` (
  `paymentid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `cartid` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `donefor` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(500) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`fullname`,`email`,`review`) values 
(1,'Mathurantha','mathurantha@gmail.com','Good Services'),
(2,'Mathu','mathurantha@gmail.com','Good services'),
(3,'mathinuya','maiyanavam@gmail.com','good service'),
(4,'Luxshan','luxshanlux@gmail.com','Well Work'),
(5,'Sobiya','sobiya@gmail.com','welldone job\r\n'),
(6,'manazeer','mhdmana@gmail.com','Good Work');

/*Table structure for table `holds` */

DROP TABLE IF EXISTS `holds`;

CREATE TABLE `holds` (
  `userid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `cardid` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `holds` */

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `orderid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `userid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `productid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `deliverstatus` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `totalprice` decimal(10,0) NOT NULL,
  `orderdate` date NOT NULL,
  `deliverdate` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `shippingid` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `order` */

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `paymentid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `paymenttype` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `userid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`paymentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `payment` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `product_cat` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `small` json DEFAULT NULL,
  `medium` int(100) DEFAULT NULL,
  `large` int(100) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `products` */

insert  into `products`(`product_id`,`product_title`,`product_price`,`filename`,`product_cat`,`small`,`medium`,`large`,`description`) values 
(1,'Lehenga',9000,'103.jpg','Party wear','7',6,7,'Life is a party, dress like it\r\nOwn it!'),
(2,'Prom Dress',6000,'121.jpg','Kids','5',7,6,'Make your princess feel comfortable on her special day with us.\r\n              '),
(3,'Prom Dress',5000,'114.jpg','Kids','4',5,3,'Every little girl is a princess! Dress from Ms. Maniquine for this little princess!!!\r\n              '),
(4,'Lehenga',9000,'109.jpg','Wedding dress','4',3,2,'Style is something each of us already has, all we need to do is find it!! \r\n              '),
(5,'Aari Work',8000,'119.jpg','Other','0',0,2,'Don’t stress about the dress, we’ll dress you to impress. Make your saree blouses more attractive with our aari work designs!\r\n              '),
(6,'Aari Work',12500,'107.jpg','Other','0',1,1,'Don’t stress about the dress, we’ll dress you to impress. \r\nMake your saree blouses more attractive with our aari work designs!\r\n              '),
(7,'Prom Dress',9500,'111.jpg','Party wear','0',2,1,'Quality in a product is not what you put into it.\r\nIt is what the customer gets out of it..\r\n              '),
(8,'Prom Dress',7500,'104.jpg','Party wear','2',1,0,'Quality in a product is not what you put into it. \r\nIt is what the customer gets out of it...\r\n              '),
(9,'Party Wear',5000,'102.jpg','Party wear','1',2,1,'Life is a party, dress like it\r\n              '),
(10,'Party Wear',6500,'123.jpg','Party wear','1',0,2,'Life is a party, dress like it\r\n              '),
(11,'Prom Dress',9000,'115.jpg','Kids','1',2,0,'Every little girl is a princess! Dress from Ms. Maniquine for this little princess!!!\r\n              '),
(12,'Kids wear',6000,'105.jpg','Kids','2',1,0,'Every little girl is a princess! Dress from Ms. Maniquine for this little princess!!!\r\n              '),
(13,'Tops',1500,'ladies02.jpeg','Casual wear','5',1,3,'Dress to kill.\r\n              '),
(14,'Salwar',3500,'ladies 2.jpg','Casual wear','2',1,3,'Dress to kill.\r\n              '),
(15,'Prom Dress',9000,'kids o3.jpg','Kids','0',2,4,'Every little girl is a princess! Dress from Ms. Maniquine for this little princess!!!\r\n\r\n              '),
(16,'Maternity Wear',4000,'101.jpg','Other','2',1,4,'Make your precious moments more comfortable with our maternity wear!!\r\n              '),
(17,'Aari Work',5000,'IMG-20210213-WA0051.jpg','Other','0',3,0,'What you wear is how you present yourself to the world, especially on your big day! '),
(18,'Party Wear',2500,'124.jpg','Party wear','4',1,4,'Dress to Kill!...\r\n              '),
(19,'Anarkali',6000,'125.jpg','Party wear','4',3,4,'Quality in a product is not what you put into it. It is what the customer gets out of it...\r\n              '),
(20,'Office Wear',2000,'15.jpg','Smart casual','1',0,2,'You either know fashion or you don’t.\r\n              '),
(21,'Office Wear',7500,'16.jpg','Smart casual','1',2,4,'You either know fashion or you don’t.\r\n              '),
(22,'Office Wear',4000,'17.jpg','Smart casual','0',1,2,'You either know fashion or you don’t\r\n              '),
(23,'Office Wear',4200,'18.jpg','Smart casual','2',0,1,'You either know fashion or you don’t.\r\n              '),
(24,'Office Wear',3500,'20.jpg','Smart casual','2',1,0,'You either know fashion or you don’t.\r\n              '),
(25,'Frock',4000,'12.jpg','Casual wear','2',1,0,'Playing dress-up begins at age five and never truly ends.\r\n              '),
(26,'Casual Frock',3500,'11.jfif','Casual wear','2',1,2,'There’s no such thing as sparkling too much.\r\n              '),
(27,'Frock',3800,'13.jpg','Casual wear','3',1,1,'Life isn’t perfect, but your outfit can be.\r\n              '),
(28,'Wedding Dress',9000,'1.jpg','Wedding dress','2',3,2,'Nothing makes a woman more beautiful than the belief that she is beautiful.\r\n              '),
(29,'Lehenga',12500,'25.jpg','Wedding dress','0',2,1,'\"That moment when you find THE dress.\"\r\n              '),
(30,'Lehenga',8500,'24.jpg','Wedding dress','2',0,2,'\"That moment when you find THE dress.\"\r\n              '),
(31,'Wedding Dress',9000,'23.jfif','Wedding dress','3',1,2,'\"That moment when you find THE dress.\"\r\n              '),
(32,'Wedding Dress',12500,'27.jpg','Wedding dress','4',0,0,'\"Does this dress make me look like a Mrs.?\"\r\n              '),
(33,'Lehenga',10500,'26.jpeg','Wedding dress','0',2,0,' \"A girl should be two things: classy and fabulous.\"\r\n\r\n              '),
(34,'Casual Frock',3000,'10.jfif','Kids','2',3,0,'\"A THING OF BEAUTY IS A JOY FOREVER\"\r\n              '),
(35,'Casual Frock',2500,'7.jfif','Kids','2',0,2,'\"A THING OF BEAUTY IS A JOY FOREVER\"\r\n\r\n              '),
(36,' Casual Tops',2000,'29.jfif','Casual wear','1',2,3,'Being well-dressed is our kind of happiness\r\n              '),
(37,'Casual Tops',2000,'28.jpg','Casual wear','1',2,1,'Being well-dressed is our kind of happiness\r\n              '),
(38,'Office Wear',5000,'30.jpg','Smart casual','0',1,0,'Create your own style.\r\n              ');

/*Table structure for table `reserve` */

DROP TABLE IF EXISTS `reserve`;

CREATE TABLE `reserve` (
  `userid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `cartid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `productid` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `reserve` */

/*Table structure for table `send` */

DROP TABLE IF EXISTS `send`;

CREATE TABLE `send` (
  `userid` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `send` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `phoneno` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cardid` varchar(50) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`username`,`email`,`password`,`usertype`,`phoneno`,`address`,`cardid`,`filename`,`regdate`) values 
(1,'admin','admin@admin.com','e2fc714c4727ee9395f324cd2e7f331f','admin','','','','photo-1494790108377-be9c29b29330.jpg','2021-06-07'),
(15,'mathura','mathura@gmail.com','f2727c30222636287af6201cb77bb04a','user','0751234567','kopay,jaffna',NULL,'m.jpg',NULL),
(16,'mathinuya','mathinuya@gmail.com','d0911fa59fcc0af22034187dfec36071','user','0753626584','Kopay',NULL,'aaaa.jpg',NULL),
(17,'Manaseer','mhd@gmail.com','722135d8305fa335b5309574625afeab','user','0751265947','kekirawa',NULL,'kk.jpg',NULL),
(18,'luxshan','lux@gmail.com','77acaab91a796527fa82802f3bef3618','user','0153216985','chankanai',NULL,'kkknk.jpg',NULL),
(19,'sobiya','sobi@gmail.com','79437f08861a02ba0c81f9fdb76c247f','user','0716932586','jaffna',NULL,'sssss.jpg',NULL);

/*Table structure for table `wishlist` */

DROP TABLE IF EXISTS `wishlist`;

CREATE TABLE `wishlist` (
  `wish_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `product_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`wish_id`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

/*Data for the table `wishlist` */

insert  into `wishlist`(`wish_id`,`name`,`user`,`product_id`) values 
(102,'Prom Dress','admin@admin.com',7),
(99,'Lehenga','admin@admin.com',30),
(100,'Lehenga','admin@admin.com',33),
(101,'Wedding Dress','admin@admin.com',32),
(98,'Casual Frock','admin@admin.com',34),
(97,'Lehenga','admin@admin.com',29),
(96,'Office Wear','admin@admin.com',38),
(95,'Office Wear','mathura@gmail.com',38),
(94,'Anarkali','dixshandk91@gmail.com',19),
(93,'Anarkali','admin@admin.com',19),
(103,' Casual Tops','admin@admin.com',36),
(104,'Casual Tops','admin@admin.com',37);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
