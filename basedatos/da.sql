/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.13-MariaDB : Database - proyecto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `bienes` */

DROP TABLE IF EXISTS `bienes`;

CREATE TABLE `bienes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `serie` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bienes` */

insert  into `bienes`(`id`,`cedula`,`tipo`,`marca`,`serie`) values 
(1,1006292910,'portatil','asus','45464'),
(2,0,'portatil','lenovo','313433'),
(4,0,'bafle','sonic','040506'),
(5,0,'portatil','hp','313433'),
(6,0,'portatil','dell','77777'),
(7,0,'portatil','destroy','313433'),
(10,0,'bocinas','toshiba','010101'),
(11,0,'proyector','alien','0101010101111');

/*Table structure for table `controles` */

DROP TABLE IF EXISTS `controles`;

CREATE TABLE `controles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` int(11) NOT NULL,
  `fecha_i` date NOT NULL,
  `hora_e` time NOT NULL,
  `hora_s` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `controles` */

insert  into `controles`(`id`,`identificacion`,`fecha_i`,`hora_e`,`hora_s`) values 
(1,1006292910,'1970-01-15','06:00:00','01:00:00'),
(2,29598383,'2020-07-29','06:00:00','20:00:00'),
(3,456464,'2020-07-06','06:00:00','10:00:00'),
(4,1004893756,'2020-07-24','07:30:00','08:45:00'),
(5,0,'2020-07-04','02:31:00','20:32:00');

/*Table structure for table `personal` */

DROP TABLE IF EXISTS `personal`;

CREATE TABLE `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `F_formacion` int(11) NOT NULL,
  `rol` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `personal` */

insert  into `personal`(`id`,`identificacion`,`nombre`,`telefono`,`correo`,`F_formacion`,`rol`) values 
(1,1006292910,'david',2142568,'david@gmail.com',1828801,'Aprendiz'),
(2,0,'albert',2156877,'alberto14@gmail.com',1828801,'Aprendiz'),
(3,0,'walter',2147483647,'walaria@gmail.com',1828801,'Instructor'),
(4,0,'juan camilo',2147483647,'juanca@gamil.com',154564,'Aprendiz'),
(5,0,'yesid',31312,'yesid@gmail.com',1828801,'Aprendiz'),
(6,0,'tello',3423423,'tello@gmail.com',1828801,'Aprendiz'),
(7,0,'alegria',21564564,'alegria@gmail.com',1828801,'Aprendiz');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(60) NOT NULL,
  `usuario_apellido` varchar(100) NOT NULL,
  `usuario_email` varchar(100) NOT NULL,
  `usuario_tel` varchar(20) NOT NULL,
  `usuario_login` varchar(80) NOT NULL,
  `usuario_pass` varchar(255) NOT NULL,
  `rol` varchar(150) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

insert  into `usuario`(`idusuario`,`usuario_nombre`,`usuario_apellido`,`usuario_email`,`usuario_tel`,`usuario_login`,`usuario_pass`,`rol`) values 
(1,'david','montoya','david@gmail.com','2142568','david','$2y$10$8ec4rusNDCqSWb3mcVthsudAe6OkcAYrkvQihx3LlveDvSw01dGiG','Administrador'),
(2,'walter','arias','walarias@gmail.com','3144546544','walter','$2y$10$71RWtgfdQaRAgA7qX8NhFeAe36DrtNmuIodnlQmksIt7aMfHpb9Xq','Administrador');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
