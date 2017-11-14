-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Novembre 2017 à 11:04
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
-- Structure de la table `survey_checkbox`
--

CREATE TABLE `survey_checkbox` (
  `id` int(11) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `note` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_checkbox`
--

INSERT INTO `survey_checkbox` (`id`, `id_parent`, `title`, `note`) VALUES
(1, NULL, 'Réemploi sur le même chantier des déchets sans transformation', NULL),
(2, NULL, 'Réutilisation sur le même chantier des déchets après traitement', NULL),
(3, NULL, 'Mon entreprise évacue elle-même les déchets', NULL),
(4, NULL, 'Plateforme de recyclage de déchets inertes', NULL),
(6, NULL, 'Mon entreprise utilise la(les) benne(s) présente(s) sur le chantier', '(gérée(s) par une autre entreprise par exemple via un compte prorata)'),
(5, NULL, 'Mon enterprise fait appel à un collecteur qu’elle choisit et qu’elle gère', NULL),
(9, 4, 'Centre de traitement de déchets dangereux', NULL),
(10, 4, 'UIOM', '(Unité d’incinération des ordures ménagères)'),
(11, 4, 'Centre de tri DMA ', '(déchets ménagers et assimilés)'),
(12, 4, 'Plateforme de regroupement, tri et traitement de ferraille', NULL),
(13, 4, 'Plateforme de regroupement, tri et traitement de bois', NULL),
(14, 4, 'Centre de traitement pour valorisation énergétique', NULL),
(15, 4, 'Centre de traitement pour valorisation matière', NULL),
(16, 4, 'Vitrification', NULL),
(17, 4, 'Cimenterie', NULL),
(18, 4, 'Déchetterie publique', NULL),
(19, 4, 'Déchetterie professionnelle', NULL),
(7, NULL, 'Autre type de gestion', NULL),
(8, 4, 'Carrière', NULL),
(20, 4, 'ISDI', '(Installation de stockage de déchets inertes)'),
(21, 4, 'ISDND', '(Installation de stockage de déchets non dangereux)'),
(22, 4, 'ISDD ', '(Installation de stockage de déchets non dangereux)'),
(23, 5, 'Collecteurs agrées éco-organisme', '(éco-logic, éco-système, RECYLUM)'),
(24, 5, 'Autres organismes', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `survey_checkbox`
--
ALTER TABLE `survey_checkbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `survey_checkbox`
--
ALTER TABLE `survey_checkbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
