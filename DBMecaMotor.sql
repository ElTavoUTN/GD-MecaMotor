/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.24 : Database - mecamotor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mecamotor` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mecamotor`;

/*Table structure for table `asignado` */

DROP TABLE IF EXISTS `asignado`;

CREATE TABLE `asignado` (
  `legajoMecanico` int(11) NOT NULL,
  `nroServicio` int(11) NOT NULL,
  PRIMARY KEY (`legajoMecanico`,`nroServicio`),
  KEY `FK_Servicio` (`nroServicio`),
  CONSTRAINT `FK_Mecanico` FOREIGN KEY (`legajoMecanico`) REFERENCES `mecanico` (`legajoMecanico`),
  CONSTRAINT `FK_Servicio` FOREIGN KEY (`nroServicio`) REFERENCES `servicio` (`nroServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `asignado` */

LOCK TABLES `asignado` WRITE;

UNLOCK TABLES;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `cuil_cuitCliente` int(11) NOT NULL,
  `nombreCliente` varchar(45) DEFAULT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `telefonoCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`cuil_cuitCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cliente` */

LOCK TABLES `cliente` WRITE;

insert  into `cliente`(`cuil_cuitCliente`,`nombreCliente`,`localidad`,`calle`,`numero`,`telefonoCliente`) values (123456789,'Carlos Martinez','San Martin','Alvear ',2563,2147483647),(151617189,'David Parra','Mendoza','9 de Julio',1457,2147483647),(206793234,'Federico Salas','San Jose','Adolfo Calle',1945,2147483647),(213456970,'Marta Ginestar','San Rafael','Las lajas',3290,2147483647),(214748364,'Marcelo Gallardo','Godoy Cruz','Carril Sarmiento ',4583,2147483647),(273571628,'Alejandro Zaffutto','Tupungato','Juan XXIII',1002,2147483647),(291276335,'Juan Carlos Codon','Montecaseros','Belgrano',195,2147483647);

UNLOCK TABLES;

/*Table structure for table `herramienta` */

DROP TABLE IF EXISTS `herramienta`;

CREATE TABLE `herramienta` (
  `nombreHerramienta` varchar(45) DEFAULT NULL,
  `cantHerramienta` int(11) DEFAULT NULL,
  `nroHerramienta` int(11) NOT NULL,
  PRIMARY KEY (`nroHerramienta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `herramienta` */

LOCK TABLES `herramienta` WRITE;

insert  into `herramienta`(`nombreHerramienta`,`cantHerramienta`,`nroHerramienta`) values ('Soporte para motores universales',2,0),('Llave T estandar',10,1),('Tubo largo',6,11),('Inclinador de motor',4,21),('Soplete de limpieza',4,26),('Pistola carburista',6,33),('Cepillo de esmeril',4,38),('Medidor de presion de aceite',5,44),('Corta cadena',3,54),('Soladadora electrica',4,59),('Camilla',3,63),('Llave cruz',15,78),('Pistola soplote para pintar',5,83),('Remachadora neumatiza',7,90),('Llave curva',6,96);

UNLOCK TABLES;

/*Table structure for table `mecanico` */

DROP TABLE IF EXISTS `mecanico`;

CREATE TABLE `mecanico` (
  `nombreMecanico` varchar(45) DEFAULT NULL,
  `dniMecanico` int(9) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `cuilMecanico` int(11) DEFAULT NULL,
  `legajoMecanico` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`legajoMecanico`)
) ENGINE=InnoDB AUTO_INCREMENT=23461 DEFAULT CHARSET=utf8;

/*Data for the table `mecanico` */

LOCK TABLES `mecanico` WRITE;

insert  into `mecanico`(`nombreMecanico`,`dniMecanico`,`fechaNacimiento`,`cuilMecanico`,`legajoMecanico`) values ('Fransiscio Ferrer',22098345,'1973-03-02',20,23456),('Marcos Garro',21678932,'1973-02-24',20,23457),('Andres Diaz',20345748,'1976-06-11',21,23458),('Gaston Merenda',26880636,'1979-12-02',27,23459),('Leandro Paez',30548234,'1980-05-07',23,23460);

UNLOCK TABLES;

/*Table structure for table `necesita` */

DROP TABLE IF EXISTS `necesita`;

CREATE TABLE `necesita` (
  `nroServicio` int(11) NOT NULL,
  `nroHerramienta` int(11) NOT NULL,
  PRIMARY KEY (`nroServicio`,`nroHerramienta`),
  KEY `nroHerramienta` (`nroHerramienta`),
  CONSTRAINT `necesita_ibfk_1` FOREIGN KEY (`nroHerramienta`) REFERENCES `herramienta` (`nroHerramienta`),
  CONSTRAINT `necesita_ibfk_2` FOREIGN KEY (`nroServicio`) REFERENCES `servicio` (`nroServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `necesita` */

LOCK TABLES `necesita` WRITE;

UNLOCK TABLES;

/*Table structure for table `provee` */

DROP TABLE IF EXISTS `provee`;

CREATE TABLE `provee` (
  `cuil_cuitProveedor` int(11) NOT NULL,
  `codigoRepuesto` int(11) NOT NULL,
  PRIMARY KEY (`cuil_cuitProveedor`,`codigoRepuesto`),
  KEY `FK_Repuesto` (`codigoRepuesto`),
  CONSTRAINT `FK_Proveedor` FOREIGN KEY (`cuil_cuitProveedor`) REFERENCES `proveedor` (`cuil_cuitProveedor`),
  CONSTRAINT `FK_Repuesto` FOREIGN KEY (`codigoRepuesto`) REFERENCES `repuesto` (`codigoRepuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `provee` */

LOCK TABLES `provee` WRITE;

UNLOCK TABLES;

/*Table structure for table `proveedor` */

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor` (
  `cuil_cuitProveedor` int(11) NOT NULL,
  `nombreProveedor` varchar(45) DEFAULT NULL,
  `direccionProveedor` varchar(45) DEFAULT NULL,
  `telefonoProveedor` int(11) DEFAULT NULL,
  PRIMARY KEY (`cuil_cuitProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `proveedor` */

LOCK TABLES `proveedor` WRITE;

insert  into `proveedor`(`cuil_cuitProveedor`,`nombreProveedor`,`direccionProveedor`,`telefonoProveedor`) values (0,'Fiat','Av. San Martin 2876',4203845),(10768,'Arnal del norte','Savedra 143-San Jose',4245697),(11224,'Der Distribucuines','Av. Colectora Este 27887',4265349),(23456,'Diaz Neumaticos','San Juan 158',4108940),(45876,'VAleo Embragues','Espejo 456',4245078);

UNLOCK TABLES;

/*Table structure for table `repuesto` */

DROP TABLE IF EXISTS `repuesto`;

CREATE TABLE `repuesto` (
  `codigoRepuesto` int(11) NOT NULL AUTO_INCREMENT,
  `cantidadRepuesto` int(11) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `marcaRepuesto` varchar(45) DEFAULT NULL,
  `nombreRepuesto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigoRepuesto`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `repuesto` */

LOCK TABLES `repuesto` WRITE;

insert  into `repuesto`(`codigoRepuesto`,`cantidadRepuesto`,`descripcion`,`marcaRepuesto`,`nombreRepuesto`) values (1,20,'','Permatex','Lubricantes'),(2,15,'','Brigeston','Neumaticos'),(3,10,'','Ford','Faros y accesorios'),(4,5,'','Peugeot','Caja de direccion hidraulica'),(5,12,'','SKF-Gates-Dunlop','Correas y pistones'),(6,15,'','Honda','Amortiguadores'),(7,25,'','Good years','Mallas de rueda'),(8,30,'','Siloc','Rulemanes de rueda'),(9,14,'','Urani','Engranajes de arbol de Levas y Ciguenal'),(10,36,'','Perfect Circle','Balancines de Valvula'),(11,8,'','Strong','Block de motor'),(12,23,'','Ducan-Fallone','Bombas de aceite'),(13,50,'','Champion','Bujias de precalentamiento'),(14,46,'','Taranto','Bulones de tapas de cilindro'),(15,17,'','Edival','Guias de valvulas'),(16,10,'','Cass Teel','Palier'),(17,9,'','Sabo','Cruzetas de cardian '),(18,13,'','Persan-Sural','Tanques de almacenamiento de aires'),(19,28,'','Wrobon','Regulador'),(20,18,'','Sachs','Ruleman'),(21,55,'','Luk','Tuercas y bulones de rueda');

UNLOCK TABLES;

/*Table structure for table `servicio` */

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio` (
  `nombreServicio` varchar(45) DEFAULT NULL,
  `nroServicio` int(11) NOT NULL AUTO_INCREMENT,
  `estadoServicio` varchar(45) DEFAULT NULL,
  `fechaServicio` date DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `numeroPatente` varchar(45) DEFAULT NULL,
  `nroMotor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nroServicio`),
  KEY `numeroPatente` (`numeroPatente`),
  KEY `FK_Vehiculo` (`nroMotor`),
  CONSTRAINT `FK_Vehiculo` FOREIGN KEY (`nroMotor`) REFERENCES `vehiculo` (`nroMotor`),
  CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`numeroPatente`) REFERENCES `vehiculo` (`numeroPatente`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `servicio` */

LOCK TABLES `servicio` WRITE;

insert  into `servicio`(`nombreServicio`,`nroServicio`,`estadoServicio`,`fechaServicio`,`fechaIngreso`,`fechaSalida`,`precio`,`numeroPatente`,`nroMotor`) values ('Cambio de aceite',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Alinacion',2,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de frenos',3,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Cambios de correa y afinacion',4,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Cambio de bateria',5,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de caja de cambios',6,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Sustitucion de radiadores de refrigeracion de',7,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de radiadores de refrigeracion de ',8,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Sustitucion de parabrisas',9,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de parabrisas y lunetas',10,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Instalacion de parabrisas y lunetas',11,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Cambio de embrague',12,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de embrague',13,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de bomba inyectora',14,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Cambio de bomba inyectora',15,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Dignosis de motor',16,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Inyeccion electronica',17,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Limpieza de inyectores',18,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(' Chapa y pintura',19,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Pulido de carroceria',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Limpieza de interiores',21,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Tapiceria',22,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparaciones ITV',23,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Colocacion de amortiguadores',24,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de amortiguadores',25,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de motor',26,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de tapas de cilindro',27,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Descarbonizacion de tapas de cilindro',28,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Reparacion de carburadores',29,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('Colocacion de carburadores',30,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

LOCK TABLES `usuarios` WRITE;

insert  into `usuarios`(`id_usuario`,`usuario`,`pass`) values (1,'Katherina','Barahona'),(2,'Norali','Maidana'),(3,'Gustavo','Lemos');

UNLOCK TABLES;

/*Table structure for table `utiliza` */

DROP TABLE IF EXISTS `utiliza`;

CREATE TABLE `utiliza` (
  `codigoRepuesto` int(11) NOT NULL,
  `nroServicio` int(11) NOT NULL,
  PRIMARY KEY (`codigoRepuesto`,`nroServicio`),
  KEY `nroServicio` (`nroServicio`),
  CONSTRAINT `utiliza_ibfk_1` FOREIGN KEY (`codigoRepuesto`) REFERENCES `repuesto` (`codigoRepuesto`),
  CONSTRAINT `utiliza_ibfk_2` FOREIGN KEY (`nroServicio`) REFERENCES `servicio` (`nroServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `utiliza` */

LOCK TABLES `utiliza` WRITE;

UNLOCK TABLES;

/*Table structure for table `vehiculo` */

DROP TABLE IF EXISTS `vehiculo`;

CREATE TABLE `vehiculo` (
  `modeloVehiculo` varchar(45) DEFAULT NULL,
  `numeroPatente` varchar(45) NOT NULL,
  `pesoVehiculo` float DEFAULT NULL,
  `nroChasis` varchar(45) DEFAULT NULL,
  `nombreMarca` varchar(45) DEFAULT NULL,
  `cantCilindros` int(11) DEFAULT NULL,
  `tipoMotor` varchar(45) DEFAULT NULL,
  `nroMotor` varchar(45) NOT NULL,
  `cuil_cuitCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`numeroPatente`,`nroMotor`),
  UNIQUE KEY `FK_Servicio` (`nroMotor`),
  KEY `FK_Cliente` (`cuil_cuitCliente`),
  CONSTRAINT `FK_Cliente` FOREIGN KEY (`cuil_cuitCliente`) REFERENCES `cliente` (`cuil_cuitCliente`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vehiculo` */

LOCK TABLES `vehiculo` WRITE;

insert  into `vehiculo`(`modeloVehiculo`,`numeroPatente`,`pesoVehiculo`,`nroChasis`,`nombreMarca`,`cantCilindros`,`tipoMotor`,`nroMotor`,`cuil_cuitCliente`) values (NULL,'',NULL,NULL,NULL,NULL,NULL,'',151617189),('Navarra','AAO881',1852,'9101ASJK','Nissan',10,'Naftero','1617POIU',291276335),('Focus','EHC278',1200,'1789ABCD','Ford',6,'Naftero','1234WXYZ',213456970),('California T','RES782',1650,'2587JKLM','Ferrari',4,'Gasolero','9101LMNÑ',213456970),('Clio','WAC362',1780,'9432ABCD','Renault',6,'GNS','1213EFJK',123456789),('X5 M','WOQ578',1650,'3475NOKA','BMW',12,'Diesel','1929',291276335),('Yaris','YAR003',1900,'6278HGJD','Yotota',8,'Diesel','1415ABCD',214748364);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
