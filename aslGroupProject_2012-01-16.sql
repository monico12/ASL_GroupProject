# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: aslGroupProject
# Generation Time: 2012-01-16 18:17:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table assigned
# ------------------------------------------------------------

DROP TABLE IF EXISTS `assigned`;

CREATE TABLE `assigned` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `title`, `description`, `user_id`)
VALUES
	(1,'project1','first project description',2),
	(3,'project#three','hello world',3),
	(133,'waddup','people',7),
	(134,'aefaew','wfeaeawf',8),
	(135,'hello','world',9),
	(137,'afweewaf','afweeawfeawwa',1),
	(140,'fawewef','afefeee',1),
	(141,'aewjn','kjnddjd',1),
	(142,'aweuhihuhiuh','uhuhuhuhuhuvhd',1),
	(148,'afew','awefaw',1),
	(149,'afew','awefaw',1),
	(150,'afaxxxz','zzzz',1),
	(153,'aaaaaddd','ssdsdsdsd',1),
	(154,'ioaejwioj','ijcisdiosd',1),
	(157,'fawewef','fewfwe',26),
	(159,'zzz','zzzz',26),
	(160,'jusdfsdf','hyfsdf',26),
	(161,'akcnwkn','kndskjnsdkjnds',1),
	(163,'another project','yayayay',29),
	(164,'new project','first ',30);

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `assigned` varchar(25) DEFAULT NULL,
  `duedate` varchar(25) DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `project_id` int(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;

INSERT INTO `tasks` (`id`, `assigned`, `duedate`, `task`, `project_id`)
VALUES
	(1,'1','2012-01-01','party hard',120),
	(2,'1','2012-11-11','fawefwefwae',96),
	(4,'1',NULL,'play play play',96),
	(6,'0','0000-00-00','new task',121),
	(10,'monico','0000-00-00','new task',136),
	(11,'afd','0000-00-00','asdfsda',136),
	(12,'aaaa','0000-00-00','afsd',136),
	(13,'22','0000-00-00','2222',136),
	(14,'afwwea','0000-00-00','awefwae',97),
	(19,'monico','0000-00-00','new',96),
	(21,'feaew','0000-00-00','awfwefawe',123),
	(22,'ffff','0000-00-00','awefaew',96),
	(24,'awefwe','0000-00-00','afewefawe',137),
	(25,'fewaewafwaef','0000-00-00','faewewfeawf',138),
	(26,'aaaaaaaa','0000-00-00','aaaaa',137),
	(27,'afeaw','0000-00-00','faew',123),
	(29,'efee','0000-00-00','aewfaw',123),
	(30,'faaa','0','afweaefw',123),
	(31,'aaaa','0','aewfaw',123),
	(32,'ijfijdij','0','ijalejw',141),
	(33,'aaa','0','aewaaa',0),
	(34,'aaaaa','0','aaaa',150),
	(35,'aaaa','0','aaaaa',142),
	(36,'jajjjajaj','0','aajajj',140),
	(37,'Bob Funland','0','potato',156),
	(38,'wefe','0','qeff',156),
	(40,'iluhjsldiuhf','0','aaaeafcewiuj',160),
	(41,'eceece','0','aacawcce',160),
	(42,'monico','0','new task',160),
	(44,'Bob Funland','jan 13, 2012','Clean up the broom closet',160),
	(46,'orcun','today','new task',164);

/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`)
VALUES
	(1,'admin','admin','admin@email.com','Bob','Funland'),
	(2,'stevo','pass','steve@email.com','Steve','Orman'),
	(3,'pete25','password','pete45@email.com','Peter','Bowler'),
	(7,'monico12','hello','versiontenpointo@hotmail.com','monico','salvador'),
	(8,'monico12fawef','hello','versiontenpointo@hotmail.com','faeuwhkkuh','kuhfdskuh'),
	(9,'username','password','user@hotmail.com','new user','user'),
	(10,'mon','salvador','lijfasildj','test','ing'),
	(11,'ilafdsj','5f4dcc3b5a','isajfd','oijafew','ijefj'),
	(12,'ilafdsj','awf','isajfd','oijafew','ijefj'),
	(13,'admin','5d41402abc','v@hotmail.com','awefwafe','adfawefwa'),
	(14,'asdkfufkae','','','',''),
	(15,'aioweiojjio','aa','ifdosajij@hotmail.com','afoiewjoij','oiajfsdoij'),
	(16,'vvvvvv','salvador','dsdsd@djj.com','oaijewfoij','nalksj'),
	(23,'monico','aa','versiontenpointo@hotmail.com','monico','sal'),
	(28,'jjjjj','sss','ssmith@gmail.com','joe','smith'),
	(29,'rorman','password','rorman@email.com','Robert','Orman'),
	(30,'orcun','1234','something@email.com','orcun','something');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
