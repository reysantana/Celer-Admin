/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.36-MariaDB : Database - celer_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`celer_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `celer_db`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('0m3ji7e9j6n0jj4pvia3hnoh0s','::1',1574642309,'__ci_last_regenerate|i:1574642309;user_id|i:1;username|s:5:\"admin\";email|s:23:\"admin@celersolutions.ca\";avatar|s:0:\"\";logged_in|b:1;'),
('5mokbsegg8rd1k6varfpc4ko2u','::1',1574642615,'__ci_last_regenerate|i:1574642615;'),
('6tqac8obh3pkr19k3npu9oe8hp','::1',1574642104,'__ci_last_regenerate|i:1574642104;user_id|i:1;username|s:5:\"admin\";email|s:23:\"admin@celersolutions.ca\";avatar|s:0:\"\";logged_in|b:1;'),
('9f57t7ts81qcmoq2f0h30v6m3a','::1',1574642305,'__ci_last_regenerate|i:1574642305;'),
('l4kudigus2u28hsegs4m60eh0j','::1',1574642621,'__ci_last_regenerate|i:1574642620;user_id|i:1;username|s:5:\"admin\";email|s:23:\"admin@celersolutions.ca\";avatar|s:0:\"\";logged_in|b:1;'),
('n00ghirnmskjduk2suc98603fb','::1',1574642621,'__ci_last_regenerate|i:1574642621;'),
('qb7jkekmhjk43ajik6rh6g7j54','::1',1574642621,'__ci_last_regenerate|i:1574642621;'),
('rav67fm5ufed5ogbrjlquapvu5','::1',1574642309,'__ci_last_regenerate|i:1574642309;'),
('tpdjma4uledj60vhm2bcj6f3mp','::1',1574642099,'__ci_last_regenerate|i:1574642099;'),
('um3js0b7uou4tmjbbosev1fctd','::1',1574642104,'__ci_last_regenerate|i:1574642104;'),
('vbkurguhhu9i1c7ff5ar6emlg1','::1',1574642309,'__ci_last_regenerate|i:1574642309;'),
('vdsefbrhtkkhtpbp4g6ovb1kl7','::1',1574642104,'__ci_last_regenerate|i:1574642104;');

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin.png',
  `logged_in` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id`,`username`,`email`,`password`,`avatar`,`logged_in`,`is_deleted`,`created_at`,`deleted_at`) values 
(1,'admin','admin@celersolutions.ca','$2y$10$rXgbvTQ0K7X21GTOkGwnBOVNoKuQZ/877ITm45oBTgQm7jtOiZ0Ku','admin.png',0,0,'2019-11-24 19:27:55',NULL);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PENDING','ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci DEFAULT 'PENDING',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`name`,`email`,`license`,`status`,`is_deleted`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Rey Santana Socorro','reysantanasocorro@hotmail.com','EJEC-I8RJ-CW8W-0SMD','ACTIVE',0,'2019-11-10 03:42:22','2019-11-10 04:45:44','2019-11-10 04:18:05'),
(2,'User001','user001@celersolutions.com','8TRT-7J9K-M4QS-H7ZV','ACTIVE',0,'2019-11-10 04:53:52','2019-11-25 03:37:23',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
