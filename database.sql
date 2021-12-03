-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour mp_ti_tchi_mo
CREATE DATABASE IF NOT EXISTS `mp_ti_tchi_mo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mp_ti_tchi_mo`;

-- Listage de la structure de la table mp_ti_tchi_mo. annonces
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `date_fin` datetime NOT NULL,
  `description` text NOT NULL,
  `puissance` int(50) NOT NULL,
  `annee` int(50) NOT NULL,
  `prix_depart` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateurs` (`id_utilisateurs`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Listage des données de la table mp_ti_tchi_mo.annonces : ~7 rows (environ)
/*!40000 ALTER TABLE `annonces` DISABLE KEYS */;
INSERT INTO `annonces` (`id`, `title`, `modele`, `marque`, `date_fin`, `description`, `puissance`, `annee`, `prix_depart`, `status`, `id_utilisateurs`) VALUES
	(20, 'AUDI SQ5 V6 3.0 TFSI 354 Tiptronic 8 Quattro', ' SQ5 V6 3.0 TFSI 354 Tiptronic 8 Quattro', 'Audi', '2021-11-26 00:00:00', '- Equipements : Pack S-Line extÃ©rieur + Volant S-Line - origine import - dÃ©fauts d&#39;aspect peinture - Garantie 3 mois PrÃ©mium', 353, 2017, 48900, 1, 6),
	(21, 'PEUGEOT 3008 1.6 BlueHDi 120ch S&S BVM6 GT Line', '3008 1.6 BlueHDi 120ch S&S BVM6 GT Line', 'Peugeot', '2021-12-02 00:00:00', '- Carnet d&#39;entretien - Garantie 3 mois PrÃ©mium', 120, 2017, 23000, 1, 6),
	(22, 'JEEP Compass 2.0 I MultiJet II 140 ch Active Drive BVA9 Brooklyn Edition', 'Compass 2.0 I MultiJet II 140 ch Active Drive BVA9 Brooklyn Edition', 'Jeep', '2021-12-05 00:00:00', '- Carnet d&#39;entretien - Kit anticrevaison incomplet - Garantie 3 mois PrÃ©mium', 140, 2018, 21800, 1, 7),
	(23, 'SKODA Fabia 1.0 TSI 95 ch BVM5 Business', 'Fabia 1.0 TSI 95 ch BVM5 Business', 'Skoda', '2021-12-12 00:00:00', '- VÃ©hicule import : Ã  immatriculer impÃ©rativement par VPAuto avant l &#39;enlÃ¨vement (hors Pro de l&#39;auto ) - Renseignements Ã  l&#39;accueil ou au Centre d&#39;appels Coc non fourni', 75, 2019, 8900, 1, 6),
	(24, 'PEUGEOT 3008 1.6 BlueHDi 120ch S&S BVM6', '3008 1.6 BlueHDi 120ch S&S BVM6 GT Line', 'Peugeot', '2021-12-03 00:00:00', '- Carnet d&#39;entretien - Garantie 3 mois PrÃ©mium', 120, 2017, 23000, 1, 6),
	(25, 'CITROEN C4 HDi 92 Confort', 'C4 HDi 92 Confort', 'Citroen', '2021-11-27 00:00:00', '- PrÃ©voir entretien + kit distribution - Plage arriÃ¨re manquante\r\n ', 90, 2008, 2100, 1, 7),
	(26, 'Audi A4 AVANT 2.0 TDI 120 DPF BUSINESS LINE', 'A4 AVANT 2.0 TDI 120 DPF BUSINESS LINE', 'Audi', '2021-12-05 00:00:00', '5 portes climatisation radar de recul EURO 5 injecteurs a controler', 90, 2010, 6000, 1, 7),
	(27, 'FORD ECOSPORT 1.0 ST-LINE', 'ECOSPORT 1.0 ST-LINE', 'FORD ', '2021-11-30 19:00:00', 'Climatisation rÃ©gulÃ©e, rÃ©gulateur de vitesse, Gps couleur,cuir & velours, radars avant et arriÃ¨re, camera de recul.', 130, 2015, 13100, 1, 6);
/*!40000 ALTER TABLE `annonces` ENABLE KEYS */;

-- Listage de la structure de la table mp_ti_tchi_mo. enchere
CREATE TABLE IF NOT EXISTS `enchere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_annonces` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `mise` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_annonces` (`id_annonces`),
  KEY `id_utilisateurs` (`id_utilisateurs`),
  KEY `mise` (`mise`),
  CONSTRAINT `enchere_ibfk_1` FOREIGN KEY (`id_annonces`) REFERENCES `annonces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `enchere_ibfk_2` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Listage des données de la table mp_ti_tchi_mo.enchere : ~26 rows (environ)
/*!40000 ALTER TABLE `enchere` DISABLE KEYS */;
INSERT INTO `enchere` (`id`, `id_annonces`, `id_utilisateurs`, `mise`, `date`) VALUES
	(1, 20, 7, 60000, NULL),
	(2, 20, 7, 60000, NULL),
	(3, 20, 7, 100000, NULL),
	(4, 20, 7, 10000, NULL),
	(5, 20, 7, 10000, NULL),
	(6, 20, 7, 543000, NULL),
	(7, 20, 7, 543000, NULL),
	(8, 20, 7, 543000, NULL),
	(9, 20, 7, 543000, NULL),
	(10, 20, 7, 5683279, NULL),
	(11, 20, 7, 432546, NULL),
	(12, 20, 7, 2222222, NULL),
	(13, 22, 7, 555555, NULL),
	(14, 23, 6, 34578, NULL),
	(15, 21, 6, 123456, NULL),
	(16, 21, 6, 109876, NULL),
	(17, 21, 7, 1234567, NULL),
	(18, 20, 6, 5683290, NULL),
	(19, 20, 6, 5683299, NULL),
	(20, 20, 6, 5683400, '2021-11-14 00:00:00'),
	(21, 20, 6, 5683401, '2021-11-14 00:00:00'),
	(22, 20, 6, 5683402, '2021-11-14 16:37:19'),
	(23, 20, 6, 5683403, '2021-11-14 17:33:26'),
	(24, 24, 6, 12345, '2021-11-15 09:22:27'),
	(25, 24, 6, 12346, '2021-11-15 10:36:15'),
	(26, 24, 6, 12343, '2021-11-15 10:36:22'),
	(27, 20, 6, 5683406, '2021-11-15 10:44:37'),
	(28, 20, 6, 10004, '2021-11-15 10:44:48');
/*!40000 ALTER TABLE `enchere` ENABLE KEYS */;

-- Listage de la structure de la table mp_ti_tchi_mo. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Listage des données de la table mp_ti_tchi_mo.utilisateurs : ~2 rows (environ)
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `mdp`) VALUES
	(6, 'Dufetel', 'Tiffany', 'eleeanthem@gmail.com', '$2y$14$S3l0DkBY/Sb9sCrv4o5JpePmES/tS.H/37JG.A1qPVNWGFMpyN2HO'),
	(7, 'Dufetel', 'Thomas', 'thomas.dufetel@hotmail.fr', '$2y$10$cpiRvLUGsBHkc2OCXTK7nummDT.u7lXJT.UaT6boDXd.IcXRZYVY2');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;

-- Listage de la structure de la table mp_ti_tchi_mo. vainqueurs
CREATE TABLE IF NOT EXISTS `vainqueurs` (
  `id_annonces` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `mise_ultime` int(11) NOT NULL,
  KEY `id_annonces` (`id_annonces`),
  KEY `id_utilisateurs` (`id_utilisateurs`),
  KEY `mise_ultime` (`mise_ultime`),
  CONSTRAINT `vainqueurs_ibfk_1` FOREIGN KEY (`mise_ultime`) REFERENCES `enchere` (`mise`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `vainqueurs_ibfk_2` FOREIGN KEY (`id_utilisateurs`) REFERENCES `enchere` (`id_utilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `vainqueurs_ibfk_3` FOREIGN KEY (`id_annonces`) REFERENCES `annonces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table mp_ti_tchi_mo.vainqueurs : ~0 rows (environ)
/*!40000 ALTER TABLE `vainqueurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `vainqueurs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
