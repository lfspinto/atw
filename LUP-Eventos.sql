-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.26-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema lup
--

CREATE DATABASE IF NOT EXISTS lup;
USE lup;

--
-- Definition of table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`ID`,`nome`) VALUES 
 (1,'Caminhada'),
 (2,'Corrida'),
 (3,'BTT');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;


--
-- Definition of table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `edicao` int(3) unsigned NOT NULL,
  `data` datetime NOT NULL,
  `local` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `promotor` int(10) unsigned NOT NULL,
  `sitio` varchar(100) DEFAULT NULL,
  `categoria` int(10) unsigned NOT NULL,
  `imagem` int(1) unsigned DEFAULT NULL,
  `resumo` text,
  `ctt_tlf_indicativo` int(5) unsigned zerofill DEFAULT NULL,
  `ctt_telefone` int(9) unsigned DEFAULT NULL,
  `ctt_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` (`ID`,`nome`,`edicao`,`data`,`local`,`cidade`,`pais`,`promotor`,`sitio`,`categoria`,`imagem`,`resumo`,`ctt_tlf_indicativo`,`ctt_telefone`,`ctt_email`) VALUES 
 (1,'Trilho dos Reis',1,'2017-03-01 00:00:00','Serra da Freita','Arouca','Portugal',1,NULL,2,0,'Caminhada de descoberta.',NULL,NULL,NULL),
 (2,'Troço dos Tires',1,'2017-02-23 00:00:00','Aerodromo','Lousada','Portugal',1,NULL,3,1,'Troço dos Tires',NULL,NULL,NULL);
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;


--
-- Definition of table `utilizadores`
--

DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE `utilizadores` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `utilizador` varchar(20) NOT NULL,
  `passe` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tlf_indicativo` int(5) unsigned zerofill DEFAULT NULL,
  `telefone` int(9) unsigned DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `estado` int(1) unsigned NOT NULL,
  `data_adicao` datetime NOT NULL,
  `data_estado` datetime NOT NULL,
  `observacoes` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizadores`
--

/*!40000 ALTER TABLE `utilizadores` DISABLE KEYS */;
INSERT INTO `utilizadores` (`ID`,`utilizador`,`passe`,`nome`,`tlf_indicativo`,`telefone`,`email`,`estado`,`data_adicao`,`data_estado`,`observacoes`) VALUES 
 (1,'lpinto','asdas','Luis Pinto',NULL,NULL,'luis@email.io',1,'2017-01-12 00:00:00','2017-01-12 00:00:00',NULL),
 (2,'promo1','passe','Promotor 1',NULL,NULL,'promo@email.io',4,'2017-01-12 00:00:00','2017-01-12 00:00:00',NULL);
/*!40000 ALTER TABLE `utilizadores` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
