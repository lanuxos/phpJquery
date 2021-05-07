# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: laodev
# Generation Time: 2021-05-06 15:08:59 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tb_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'F',
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;

INSERT INTO `tb_user` (`Id`, `fname`, `lname`, `sex`, `email`, `u_name`, `pass`, `tel`)
VALUES
	(1,NULL,NULL,'F',NULL,'admin','1234','3423'),
	(13,'asdfa','afsdfa','male','0','admin','1234','0'),
	(14,'asdf','sdfasf','male','0','admin','1234','0'),
	(15,'asdfa','fasdf','male','0','admin','1234','0'),
	(16,'asdfaasdfa','fasdf','male','0','admin','1234','0'),
	(17,'asdfaasdfa','fasdfasdf','male','0','admin','1234','0'),
	(18,'asdfaasdfa','fasdfasasdfdf','male','0','admin','1234','0'),
	(19,'asdfasd','asdfas','male','0','admin','1234','0');

/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
