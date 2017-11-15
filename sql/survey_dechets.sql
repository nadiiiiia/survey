-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Novembre 2017 à 15:44
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
-- Structure de la table `survey_dechets`
--

CREATE TABLE `survey_dechets` (
  `id_dechet` int(11) NOT NULL,
  `nom_dechet` varchar(500) NOT NULL,
  `type_dechet` int(11) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_dechets`
--

INSERT INTO `survey_dechets` (`id_dechet`, `nom_dechet`, `type_dechet`, `note`) VALUES
(1, 'Terres et matériaux meubles non pollués', 1, ''),
(2, 'Graves et matériaux rocheux', 1, ''),
(3, 'Béton sans ferraille ou peu ferraillé', 1, ''),
(4, 'Briques, tuiles et céramiques', 1, ''),
(5, 'Mélanges de déchets inertes', 1, ''),
(6, 'Autres déchets inertes', 1, ''),
(7, 'Mélanges déchets non dangereux non inertes ', 2, '(DIB)'),
(8, 'Métaux', 2, ''),
(9, 'Plâtre - plaques et carreaux', 2, ''),
(10, 'Plâtre - enduits sur supports inertes', 2, ''),
(11, 'Plastiques', 2, ''),
(12, 'Vitrages', 2, ''),
(13, 'Bois brut ou faiblement adjuventés', 2, ''),
(14, 'Déchets végétaux', 2, ''),
(15, 'Déchets résiduels issus de l\'usage et occupation des bâtiments', 2, ''),
(16, 'Autres déchets non dangereux', 2, ''),
(17, 'Terres et matériaux meubles pollués', 3, ''),
(18, 'Amiante', 3, ''),
(19, 'Bois traités', 3, '(traverses chemin fer, poteaux EDF ou FT, bois recouvert de peintures au plomb, etc.)'),
(20, 'Lampes', 3, ''),
(21, 'Déchets d\'équipements électriques et électroniques', 3, '(DEEE)'),
(22, 'Equipements techniques', 3, '(hors DEEE)'),
(23, 'Autres déchets dangereux', 3, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `survey_dechets`
--
ALTER TABLE `survey_dechets`
  ADD PRIMARY KEY (`id_dechet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `survey_dechets`
--
ALTER TABLE `survey_dechets`
  MODIFY `id_dechet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
