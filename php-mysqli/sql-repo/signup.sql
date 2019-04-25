# Host: localhost  (Version: 5.5.53)
# Date: 2019-04-17 18:25:23
# Generator: MySQL-Front 5.3  (Build 4.234)

CREATE DATABASE signup;
USE signup;

/*!40101 SET NAMES utf8 */;

#
# Structure for table "identify"
#

DROP TABLE IF EXISTS `identify`;
CREATE TABLE `identify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "identify"
#

INSERT INTO `identify` VALUES (1,'2345');

#
# Structure for table "students"
#

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `number` varchar(30) NOT NULL,
  `SignUp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "students"
#

INSERT INTO `students` VALUES (1,'jane','41624501','1'),(2,'klaus','41624502','1'),(3,'danae','41624503','0'),(4,'snow','41624504','1'),(5,'celina','41624505','0'),(6,'amaris','41624506','0'),(7,'claudia','41624507','0'),(8,'desdemona','41624508','0'),(9,'chloe','41624509','0'),(10,'felicia','41624510','0');

#
# Structure for table "teachers"
#

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `number` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "teachers"
#

INSERT INTO `teachers` VALUES (1,'cyan','14235245'),(2,'anemone','14233465');
