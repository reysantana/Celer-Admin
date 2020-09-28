/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - celer_db
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
('01f9dae0d177e4f727b1ccc11a19e1384c287053','127.0.0.1',1573409708,'__ci_last_regenerate|i:1573409708;'),
('04765a797be296ea3ef3678767c17b75b6928b46','::1',1573407777,'__ci_last_regenerate|i:1573407764;'),
('04f47e3862155f38a8c642c38a84d6cecad5aeef','::1',1573411516,'__ci_last_regenerate|i:1573411516;'),
('09b2530f6d2092c3bd55ff947bf5e7339f996f5c','127.0.0.1',1573411149,'__ci_last_regenerate|i:1573411149;'),
('0e5aa376d56683f486d0548de8f22534af1f7a1f','::1',1573408665,'__ci_last_regenerate|i:1573408664;'),
('0ebcbd3f0df177485bb728b8de12678157af584a','::1',1573413188,'__ci_last_regenerate|i:1573413171;'),
('0fe872eb528f0650eefc5ddcd18a2a4ef2ad99b2','::1',1573379149,'__ci_last_regenerate|i:1573378923;'),
('1e9e6f8f6f91fb5dbc1f650881a5eeb3bca6453a','::1',1573380511,'__ci_last_regenerate|i:1573380510;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('1edc7a36c547838ab1de46e4bec42cf8d848668c','::1',1573411101,'__ci_last_regenerate|i:1573411095;'),
('24542d9346ebfc494c2648aae63a5de6602e0e21','::1',1573409638,'__ci_last_regenerate|i:1573409638;'),
('2edfb7a02869552b8a46f3dda3d0c62740dfff4a','::1',1573410955,'__ci_last_regenerate|i:1573410944;'),
('31b7d53d96ba7e3cd8f563211a585053b3920dde','127.0.0.1',1573409633,'__ci_last_regenerate|i:1573409633;'),
('339927aaeff3ecd86d655dd0f47f3db4f16ab4cb','127.0.0.1',1573409981,'__ci_last_regenerate|i:1573409981;'),
('368c3cd67412cd6d579932f7e65e6efb614c410e','::1',1573409711,'__ci_last_regenerate|i:1573409711;'),
('3d5758842a7bb5ae6d29b6fe029cf4ff59722fd2','::1',1573416714,'__ci_last_regenerate|i:1573416418;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('3d96a8ebd716264b73d45608ad98df21f4236a76','::1',1573408491,'__ci_last_regenerate|i:1573408478;'),
('3f6d455718f2b6177876157e4430dda3f14d2510','::1',1573376101,'__ci_last_regenerate|i:1573376028;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('3f97b9ca0c0e61f9433281e982efe10d2e358b05','::1',1573408717,'__ci_last_regenerate|i:1573408706;'),
('44c2c4ddbe897637b90fe9d3bcaa2b258e47b13f','::1',1573411172,'__ci_last_regenerate|i:1573411172;'),
('4d229780f1a6d4a341d0c877fd23b76e744e7d5c','::1',1573409658,'__ci_last_regenerate|i:1573409658;'),
('4db600f5070d11de5ea4345e7b0b0c9935f3a6d0','::1',1573411649,'__ci_last_regenerate|i:1573411649;'),
('5017ebbbf8479137805b15e31ec23747099f1d3f','::1',1573420155,'__ci_last_regenerate|i:1573420148;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('5077410d35257b730223c55c825c505e606a533a','::1',1573375342,'__ci_last_regenerate|i:1573375213;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('516a6cb45b67075d143471372f6c0f3893648dd8','::1',1573412131,'__ci_last_regenerate|i:1573412131;'),
('54de7899d4bff5c525e8212fafcbf9e51c8dd0ea','::1',1573374234,'__ci_last_regenerate|i:1573373987;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('599d6c8ced6c78031bdaa7f48dafc24ef22c88d8','127.0.0.1',1573411093,'__ci_last_regenerate|i:1573411093;'),
('5b4d0e6f45d03a65dd7782688e6d0fc4add8c618','::1',1573409842,'__ci_last_regenerate|i:1573409842;'),
('5e01e9dd949cc6b11d1d228e67d7975e4d7ca24d','::1',1573409588,'__ci_last_regenerate|i:1573409588;'),
('5eed333d53ae66c3d97e7f9c25bf6c34d8533c35','::1',1573417012,'__ci_last_regenerate|i:1573416723;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('64191e701d12a014265e41239b47865b976d8e54','::1',1573407803,'__ci_last_regenerate|i:1573407802;'),
('6568074774b8a8b6214bc266c340320c2af52795','::1',1573412168,'__ci_last_regenerate|i:1573412168;'),
('6633dbcd26681b59712dc983acb6faa0301dfe51','::1',1573376902,'__ci_last_regenerate|i:1573376717;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('69e7e8f991a54055d16ee0fe486102815e68a5e4','::1',1573409458,'__ci_last_regenerate|i:1573409458;'),
('6f265289e684d6b40304188036bae262b11f9c3b','::1',1573412089,'__ci_last_regenerate|i:1573412089;'),
('71d5e5dd292ef3d10596a68dcc6c3d8528746b7a','127.0.0.1',1573409586,'__ci_last_regenerate|i:1573409586;'),
('7685ab60b165ca036b3e38b25ba699870db3632a','127.0.0.1',1573413208,'__ci_last_regenerate|i:1573413208;'),
('7ea9be56be25681a2ec6d4eb0afefdd6026763d9','::1',1573379144,'__ci_last_regenerate|i:1573378911;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('7f782208287e12c1004023b33c969c2d40cbe290','::1',1573411293,'__ci_last_regenerate|i:1573411290;'),
('80fcf5b12cb757b6d0d6ceefaeffdba2d84400ca','::1',1573407795,'__ci_last_regenerate|i:1573407792;'),
('8813b4c6a1e21442f2d67ca87d2c4c14976373c8','::1',1573410967,'__ci_last_regenerate|i:1573410967;'),
('8bdbc6e094d6eccc6419f7eca321994159d4cefe','::1',1573411590,'__ci_last_regenerate|i:1573411590;'),
('9d5c5889c4216b6626c35c4f70ad2db547dd5a12','127.0.0.1',1573413624,'__ci_last_regenerate|i:1573413624;'),
('a7b275b48233ea2e8658960d53424278be9477aa','127.0.0.1',1573409656,'__ci_last_regenerate|i:1573409656;'),
('aa6729983ba56da7367e7e6d285703c5ac35f138','127.0.0.1',1573409838,'__ci_last_regenerate|i:1573409838;'),
('b1617f3e5e3ba3771bbc1f1c0e6c963e32e71668','::1',1573416173,'__ci_last_regenerate|i:1573416118;'),
('bc4a03fa4c6959d0e51f032b62b61607d9868c00','::1',1573377660,'__ci_last_regenerate|i:1573377363;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('bc5cca3008e9e1a5e69f5ebc51263b85ba2ebfab','::1',1573411364,'__ci_last_regenerate|i:1573411353;'),
('beb0b91a7b96265e34d4cf491d70baf00d13c59d','::1',1573379666,'__ci_last_regenerate|i:1573379599;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('c572b30584454bbbf2618a49e1096cb2e0c65e85','::1',1573411184,'__ci_last_regenerate|i:1573411184;'),
('c626334b1145a5bad051e4230f62fec25c6ce746','::1',1573411712,'__ci_last_regenerate|i:1573411712;'),
('cc8bc7d061af318145cbb8126e121a953b2784d4','127.0.0.1',1573413323,'__ci_last_regenerate|i:1573413323;'),
('cd3c078c4685ef9e177aefbc0e8b1ac333bf2bd5','::1',1573409984,'__ci_last_regenerate|i:1573409984;'),
('d0ea16a853cbb110e87041b1603c089c4e65e6e0','::1',1573377341,'__ci_last_regenerate|i:1573377047;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('dace3ff0abb0b5d1c48dc88e2c0ff97e39ed20c6','::1',1573407716,'__ci_last_regenerate|i:1573407631;'),
('dafc1ebb3bc372de3ccb9fa898bc90fb0297cfe8','::1',1573378895,'__ci_last_regenerate|i:1573378620;'),
('db8fa4162aac5518ede50d0378b8be96be9e83fa','::1',1573412471,'__ci_last_regenerate|i:1573412471;'),
('dceb793e08c463bd6ff206fa3021daa7374dc3b2','::1',1573411450,'__ci_last_regenerate|i:1573411450;'),
('ddf8c473c27ade6b349d6d68f547ca2b8293030a','::1',1573412599,'__ci_last_regenerate|i:1573412599;'),
('e2c30fec7dd472523c2f2fb05774ac422608b5ce','127.0.0.1',1573409456,'__ci_last_regenerate|i:1573409456;'),
('e3b4e2a24ec958f24c7f30550cf925f601baa3d7','::1',1573407654,'__ci_last_regenerate|i:1573407648;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('ead050daf11f3428d74aa50813cd2f29c1ba1438','::1',1573375864,'__ci_last_regenerate|i:1573375723;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('ee0db98be2af6baf4bae8f80b6b5739ec57513fe','::1',1573411505,'__ci_last_regenerate|i:1573411505;'),
('f087e907520d2be14befa685b6d9420a13ced2b8','::1',1573412327,'__ci_last_regenerate|i:1573412309;'),
('f8ccf64a7338f5fe88cde592c66d0285db649558','127.0.0.1',1573410966,'__ci_last_regenerate|i:1573410966;'),
('fadbb0c4b29812f95d0b53e78b4faeaf65b6b9ed','::1',1573375139,'__ci_last_regenerate|i:1573374841;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;'),
('fd63248489a4cf947ca7e88236da94b9a2e73aa3','::1',1573411195,'__ci_last_regenerate|i:1573411195;'),
('ff7632a8283951dc888616e749aa2937c9d61381','::1',1573417570,'__ci_last_regenerate|i:1573417446;user_id|i:1;username|s:5:\"admin\";email|s:24:\"admin@celersolutions.com\";avatar|s:9:\"admin.png\";logged_in|b:1;');

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logged_in` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id`,`username`,`email`,`password`,`avatar`,`logged_in`,`is_deleted`,`created_at`,`deleted_at`) values 
(1,'admin','admin@celersolutions.com','$2y$10$JqiSg9CJlFdYJrcdEtBxsOc0K6mrI6WPV0tikAgYJrMdSPkHc3x7e','admin.png',0,0,'2019-10-29 23:59:03',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`name`,`email`,`license`,`status`,`is_deleted`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Rey Santana Socorro','reysantanasocorro@hotmail.com','EJEC-I8RJ-CW8W-0SMD','ACTIVE',0,'2019-11-10 03:42:22','2019-11-10 15:26:08','2019-11-10 04:18:05'),
(2,'User001','user001@celersolutions.ca','8TRT-7J9K-M4QS-H7ZV','INACTIVE',1,'2019-11-10 04:53:52',NULL,'2019-11-10 15:25:13'),
(3,'User002','user002@celersolutions.ca','5ZB2-JJEN-U6W5-GGXR','INACTIVE',1,'2019-11-10 15:07:39','2019-11-10 15:07:39','2019-11-10 15:25:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
