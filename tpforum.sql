-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2018 at 09:55 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `date_heure_crea` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ptype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `email`, `mdp`, `date_heure_crea`, `ptype`) VALUES
(35, 'Thierry Lincoln', 'thierry-lincoln@hotmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2018-05-30 10:48:51', 1),
(36, 'Zakia Kazi', 'zakia.kazi@isep.fr', '76be28fd7380d6c0acda346dbbc77e942b7ab5a5', '2018-05-30 16:07:24', 0),
(37, 'Maurice Levy', 'maurice.levy@publicis.com', '24277830380c5c09879ce097f55c321e948d995a', '2018-05-30 16:09:03', 0),
(38, 'Jean Mouloud', 'jean.mouloud@isep.fr', '51f8b1fa9b424745378826727452997ee2a7c3d7', '2018-05-30 16:10:23', 0),
(39, 'Victor', 'vlebrun@juniorisep.com', '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '2018-05-30 16:12:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `id_sujet` int(11) NOT NULL,
  `id_posteur_rep` int(11) NOT NULL,
  `contenu_rep` text NOT NULL,
  `date_rep` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rep`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`id_rep`, `id_sujet`, `id_posteur_rep`, `contenu_rep`, `date_rep`) VALUES
(1, 1, 9, 'test', '2018-05-31 16:14:23'),
(2, 2, 0, 'hello', '2018-05-31 16:35:25'),
(3, 2, 0, 'repondre', '2018-05-31 16:44:36'),
(4, 1, 0, 'hello', '2018-05-31 17:09:03'),
(8, 26, 0, 'je suis ici', '2018-05-31 19:18:02'),
(9, 26, 0, 'message 2', '2018-05-31 19:20:57'),
(10, 28, 39, 'repondre', '2018-05-31 22:34:30'),
(11, 28, 39, 'repondre 2', '2018-05-31 22:34:42'),
(12, 28, 39, 'repondre', '2018-05-31 22:36:23'),
(13, 28, 39, 'rwa', '2018-05-31 23:15:29'),
(14, 28, 35, 'ok', '2018-05-31 23:23:49'),
(15, 29, 35, 'Je suis daccord avec moi meme.', '2018-05-31 23:26:35'),
(16, 30, 35, 'Merci madame :) ', '2018-06-01 00:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_posteur` int(11) NOT NULL,
  `contenu_msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sujet`
--

INSERT INTO `sujet` (`id`, `id_posteur`, `contenu_msg`, `date`, `category`) VALUES
(1, 4, 'Bonjours, vous trouverez le TD sur moodle', '2018-05-25 12:01:35', 'TD'),
(26, 1, 'bonjour m feller, votre sujet de TP est très très difficil', '2018-05-31 19:14:58', 'TP'),
(27, 6, 'Je suis en train de mourir faire une double requete sql est tres tres dure', '2018-05-31 19:47:19', 'TP'),
(30, 36, 'Bonjour mes élèves de A2 , tres heureuse de vous voir vous épanouir en cette fin d', '2018-06-01 00:10:53', 'TP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
