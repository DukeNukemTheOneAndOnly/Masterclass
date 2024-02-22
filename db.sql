CREATE DATABASE `masterclass`;
USE `masterclass`;


-- masterclass.`Cars` definition
CREATE TABLE `Cars` (
  `idCar` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(40) NOT NULL,
  `marque` varchar(40) NOT NULL,
  `link` varchar(60) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`idCar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- masterclass.`Medias` definition
CREATE TABLE `Medias` (
  `idMedia` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `media` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`idMedia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- masterclass.`Chapters` definition
CREATE TABLE `Chapters` (
  `idChap` smallint(6) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` mediumtext NULL,
  `power` smallint(1) NOT NULL,
  `linkimg` varchar(60) NULL,
  PRIMARY KEY (`idChap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- masterclass.`News` definition
CREATE TABLE `News` (
  `idNew` smallint(6) unsigned NOT NULL,
  `title` varchar(35) NOT NULL,
  `text` varchar(140) NOT NULL,
  `date` varchar(20) NULL,
  `linkimg` varchar(60) NOT NULL,
  PRIMARY KEY (`idNew`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Rank` (
  `idRank` smallint(6) NOT NULL,
  `titre` varchar(20) NOT NULL,
  PRIMARY KEY (`idRank`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `User` (
  `idUser` smallint(6) unsigned NOT NULL,
  `Pseudo` varchar(25) NOT NULL UNIQUE,
  `Mdp` varchar(100) NOT NULL,
  `idRank` smallint(6) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Rank`(`idRank`,`titre`) values(1,"Admin");
INSERT INTO `Rank`(`idRank`,`titre`) values(2,"Modo");
INSERT INTO `Rank`(`idRank`,`titre`) values(3,"User");

-- Default user:(hash default case 10)
INSERT INTO `User`(`idUser`,`Pseudo`,`Mdp`,`idRank`) values(1,"Red","$2y$10$ErhU1Ab4l2cpiLsSwSgAkuQAqfzXzAGErt0bwmVcyNmexBSVIV/MW",1);--Mdp:MasterClassAdmin
INSERT INTO `User`(`idUser`,`Pseudo`,`Mdp`,`idRank`) values(2,"Yellow","$2y$10$B583Q/uy5av8Tib6mi1MseqmkJ3.6g4C2YO26c5TMnNRuIrXc2ohG",2);--Mdp:MasterClassModo
INSERT INTO `User`(`idUser`,`Pseudo`,`Mdp`,`idRank`) values(3,"Blue","$2y$10$sOTDPkNLlWLei9uamUilyu42FuaI/Pgc9nWksOTC49kLmFVzQcBXG",3);--Mdp:MasterClassUser


--

CREATE USER 'masterclassGUY' IDENTIFIED BY 'Super';
GRANT ALL PRIVILEGES on masterclass.* TO 'masterclassGUY';

--