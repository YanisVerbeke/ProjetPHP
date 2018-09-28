-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 28 sep. 2018 à 12:08
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `test_intervenants`
--

DROP TABLE IF EXISTS `test_intervenants`;
CREATE TABLE IF NOT EXISTS `test_intervenants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test_intervenants`
--

INSERT INTO `test_intervenants` (`id`, `name`, `surname`, `mail`, `phone`, `location`) VALUES
(1, 'VERBEKE', 'Yanis', 'yanisverbeke@mail.fr', 123456789, 'Cergy'),
(2, 'LEFEBVRE', 'Antoine', 'antoinelefebve', 123456789, 'Paris'),
(3, 'FAYE', 'Pierre', 'pierre_faye@mail.com', 830578329, 'Both');

-- --------------------------------------------------------

--
-- Structure de la table `test_matiere`
--

DROP TABLE IF EXISTS `test_matiere`;
CREATE TABLE IF NOT EXISTS `test_matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `intervenant` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test_matiere`
--

INSERT INTO `test_matiere` (`id`, `name`, `intervenant`, `description`, `date`) VALUES
(1, 'php', 'CORNET', '', '2018-09-24'),
(2, 'html', 'BASTIDE', 'description', '2018-09-17'),
(3, 'mat', 'GUIOCK', 'description_mat', '2018-09-24'),
(4, 'mat', 'GUIOCK', 'description_mat', '2018-09-24'),
(5, 'css', 'CSS_Intervenant', 'description', '2018-09-10'),
(6, 'name_mat', 'name_inter', 'description', '2018-09-11'),
(7, 'name_mat', 'name_inter', 'description', '2018-09-11'),
(8, 'Verbeke', 'BASTIDE', 'qsdfg', '2018-09-20'),
(9, 'Oui', 'Oui', 'desc', '2018-09-12'),
(10, 'oui', 'oui', 'oui', '2018-09-14'),
(11, 'oui', 'oui', 'oui', '4444-04-04'),
(12, 'oui', 'oui', 'oui', '8956-07-06'),
(13, 'oui', 'oui', 'oui', '8956-07-06'),
(14, 'php', 'CORNET', 'description', '2018-09-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
