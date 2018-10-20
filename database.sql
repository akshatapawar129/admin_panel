/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.36-MariaDB : Database - smshetty_admin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`smshetty_admin` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `smshetty_admin`;

/*Table structure for table `smshetty_login` */

DROP TABLE IF EXISTS `smshetty_login`;

CREATE TABLE `smshetty_login` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_us_nm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adm_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adm_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adm_type` int(11) NOT NULL DEFAULT '0',
  `adm_active` int(11) NOT NULL DEFAULT '0',
  `adm_sess_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `smshetty_login` */

insert  into `smshetty_login`(`adm_id`,`adm_us_nm`,`adm_pass`,`adm_email`,`adm_type`,`adm_active`,`adm_sess_id`) values (1,'akshata','9684b5477f9b496c9d6f1bb20dd0c4ea','akshatpawar129@gmail.com',1,0,'htt87qcesqci5uduaqu4nso531');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
