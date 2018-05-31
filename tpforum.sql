-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 11:42 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `Personne`
--

CREATE TABLE `Personne` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `date_heure_crea` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Personne`
--

INSERT INTO `Personne` (`id`, `nom`, `email`, `mdp`, `date_heure_crea`) VALUES
(35, 'Thierry Lincoln', 'thierry-lincoln@hotmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2018-05-30 10:48:51'),
(36, 'Zakia Kazi', 'zakia.kazi@isep.fr', '76be28fd7380d6c0acda346dbbc77e942b7ab5a5', '2018-05-30 16:07:24'),
(37, 'Maurice Levy', 'maurice.levy@publicis.com', '24277830380c5c09879ce097f55c321e948d995a', '2018-05-30 16:09:03'),
(38, 'Jean Mouloud', 'jean.mouloud@isep.fr', '51f8b1fa9b424745378826727452997ee2a7c3d7', '2018-05-30 16:10:23'),
(39, 'Victor', 'vlebrun@juniorisep.com', '88fa846e5f8aa198848be76e1abdcb7d7a42d292', '2018-05-30 16:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE `reponse` (
  `id_rep` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `id_posteur_rep` int(11) NOT NULL,
  `contenu_rep` text NOT NULL,
  `date_rep` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`id_rep`, `id_sujet`, `id_posteur_rep`, `contenu_rep`, `date_rep`) VALUES
(1, 1, 9, 'test', '2018-05-31 16:14:23'),
(2, 2, 0, 'hello', '2018-05-31 16:35:25'),
(3, 2, 0, 'repondre', '2018-05-31 16:44:36'),
(4, 1, 0, 'hello', '2018-05-31 17:09:03'),
(8, 26, 0, 'je suis ici', '2018-05-31 19:18:02'),
(9, 26, 0, 'message 2', '2018-05-31 19:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

CREATE TABLE `sujet` (
  `id` int(11) NOT NULL,
  `id_posteur` int(11) NOT NULL,
  `contenu_msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sujet`
--

INSERT INTO `sujet` (`id`, `id_posteur`, `contenu_msg`, `date`, `category`) VALUES
(1, 4, 'Bonjours, vous trouverez le TD sur moodle', '2018-05-25 12:01:35', 'TD'),
(26, 1, 'bonjour m feller, votre sujet de TP est très très difficil', '2018-05-31 19:14:58', 'TP'),
(27, 6, 'Je suis en train de mourir faire une double requete sql est tres tres dure', '2018-05-31 19:47:19', 'TP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_rep`);

--
-- Indexes for table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Personne`
--
ALTER TABLE `Personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
