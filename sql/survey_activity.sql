-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Novembre 2017 à 09:57
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `survey`
--

-- --------------------------------------------------------

--
-- Structure de la table `survey_activity`
--

CREATE TABLE `survey_activity` (
  `id_activity` int(11) NOT NULL,
  `name_activity` varchar(500) NOT NULL,
  `survey` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_activity`
--

INSERT INTO `survey_activity` (`id_activity`, `name_activity`, `survey`) VALUES
(1, 'Démolition - technicité courante', 2),
(2, 'Démolition à l\'explosif', 2),
(3, 'Découpe du béton (par carottage ou sciage)', 2),
(4, 'Désamiantage', 2),
(5, 'Autres travaux de démolition', 2),
(6, 'Autres activités (hors démolition)', 2),
(7, 'Terrassement', 1),
(8, 'Construction et entretien de routes', 1),
(9, 'Ouvrages d\'art, travaux spéciaux', 1),
(10, 'Canalisations', 1),
(11, 'Démolition', 1),
(12, 'Autres', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `survey_activity`
--
ALTER TABLE `survey_activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `survey_activity`
--
ALTER TABLE `survey_activity`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
