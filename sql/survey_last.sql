-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Novembre 2017 à 16:48
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
-- Structure de la table `survey`
--

CREATE TABLE `survey` (
  `survey_id` mediumint(9) NOT NULL,
  `survey_name` varchar(250) NOT NULL,
  `survey_note` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey`
--

INSERT INTO `survey` (`survey_id`, `survey_name`, `survey_note`) VALUES
(1, 'Enquête « Entreprises TP »', 'Questionnaire à usage exclusif du Réseau des CERC'),
(2, 'Enquête auprès des entreprises de Bâtiment spécialiséesdans la démolition', 'Questionnaire INTERNE à NE PAS DIFFUSER'),
(3, 'Enquête auprès des entreprises de Bâtiment spécialisées dans la démolition', 'Questionnaire à usage exclusif du Réseau des CERC');

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

-- --------------------------------------------------------

--
-- Structure de la table `survey_activity_ans`
--

CREATE TABLE `survey_activity_ans` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `percent` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_activity_ans`
--

INSERT INTO `survey_activity_ans` (`id`, `question_id`, `user_id`, `activity_id`, `qte`, `unit`, `percent`, `created_at`) VALUES
(1, 7, 1, 1, 57, 'tonnes', '17.70', '2017-11-12 18:05:52'),
(2, 7, 1, 2, 0, 'tonnes', '0.00', '2017-11-12 18:05:52'),
(3, 7, 1, 3, 0, 'tonnes', '0.00', '2017-11-12 18:05:52'),
(4, 7, 1, 4, 0, 'tonnes', '0.00', '2017-11-12 18:05:52'),
(5, 7, 1, 5, 0, 'tonnes', '0.00', '2017-11-12 18:05:52'),
(6, 7, 1, 6, 0, 'tonnes', '0.00', '2017-11-12 18:05:52');

-- --------------------------------------------------------

--
-- Structure de la table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `answer_id` mediumint(9) NOT NULL,
  `answer_question_id` mediumint(9) NOT NULL,
  `user` int(11) DEFAULT '0',
  `answer_sub_id` mediumint(9) DEFAULT NULL,
  `answer_body` varchar(300) NOT NULL,
  `answer_note` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_answers`
--

INSERT INTO `survey_answers` (`answer_id`, `answer_question_id`, `user`, `answer_sub_id`, `answer_body`, `answer_note`, `created_at`) VALUES
(1, 1, 1, NULL, 'oui', NULL, '2017-11-17 12:06:05'),
(2, 2, 1, NULL, 'nad', NULL, '2017-11-17 12:06:17'),
(3, 56, 1, NULL, 'oui', NULL, '2017-11-17 12:06:23'),
(4, 3, 1, NULL, 'non', NULL, '2017-11-17 12:07:35'),
(5, 4, 1, NULL, '500,2009', NULL, '2017-11-17 12:07:47'),
(6, 5, 1, NULL, 'non', NULL, '2017-11-17 12:07:55'),
(7, 6, 1, NULL, '233,777', NULL, '2017-11-17 12:08:00'),
(8, 16, 1, NULL, 'oui', NULL, '2017-11-17 12:08:26'),
(9, 44, 1, NULL, '10', NULL, '2017-11-17 12:08:34'),
(10, 43, 1, NULL, '', NULL, '2017-11-17 13:15:17'),
(11, 46, 1, NULL, 'avec_regroupements', NULL, '2017-11-20 11:58:33'),
(12, 55, 1, NULL, '', NULL, '2017-11-20 12:07:46'),
(13, 17, 1, NULL, 'oui', NULL, '2017-11-20 17:39:03'),
(14, 24, 1, NULL, 'oui', NULL, '2017-11-20 17:39:05'),
(15, 35, 1, NULL, 'oui', NULL, '2017-11-20 17:39:07');

-- --------------------------------------------------------

--
-- Structure de la table `survey_back_question`
--

CREATE TABLE `survey_back_question` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `question_nbr` int(11) NOT NULL,
  `back_nbr` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_back_question`
--

INSERT INTO `survey_back_question` (`id`, `user_id`, `survey_id`, `question_nbr`, `back_nbr`, `note`) VALUES
(1, 1, 2, 25, 5, NULL),
(2, 1, 2, 13, 12, NULL),
(3, 1, 2, 15, 14, NULL),
(4, 1, 2, 18, 15, NULL),
(5, 1, 2, 7, 4, NULL);

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

-- --------------------------------------------------------

--
-- Structure de la table `survey_checkbox_ans`
--

CREATE TABLE `survey_checkbox_ans` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `checkbox_id` int(11) NOT NULL,
  `qte` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `survey_dechets_ans`
--

CREATE TABLE `survey_dechets_ans` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dechet_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `survey_departements`
--

CREATE TABLE `survey_departements` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `row_id` int(11) NOT NULL,
  `nom` varchar(350) NOT NULL,
  `qte` varchar(350) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_departements`
--

INSERT INTO `survey_departements` (`id`, `question_id`, `user_id`, `row_id`, `nom`, `qte`, `created_at`) VALUES
(1, 7, 7, 7, '', '', '2017-11-15 00:17:31'),
(2, 45, 1, 1, '', '60', '2017-11-15 16:19:56'),
(3, 45, 1, 2, '', '', '2017-11-15 16:19:56'),
(4, 45, 1, 3, '', '', '2017-11-15 16:19:56'),
(5, 45, 1, 4, '', '', '2017-11-15 16:19:56'),
(6, 45, 1, 5, '', '', '2017-11-15 16:19:56');

-- --------------------------------------------------------

--
-- Structure de la table `survey_per_user`
--

CREATE TABLE `survey_per_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `notes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `question_id` mediumint(9) NOT NULL,
  `survey_id` mediumint(9) NOT NULL,
  `question_number` int(11) DEFAULT NULL,
  `question_body` varchar(500) NOT NULL,
  `question_back` int(11) DEFAULT '0',
  `question_section_id` mediumint(9) DEFAULT NULL,
  `question_note` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_questions`
--

INSERT INTO `survey_questions` (`question_id`, `survey_id`, `question_number`, `question_body`, `question_back`, `question_section_id`, `question_note`) VALUES
(1, 2, 1, 'Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets ?', 0, NULL, ''),
(2, 2, 2, 'Si non, pour quelles raisons ?', 0, NULL, 'Répondre si Q1 = «Non»'),
(3, 2, 3, 'Êtes-vous en mesure de quantifier le volume de déchets générés sur vos chantiers en 2015 ?', 0, 1, ''),
(4, 2, 4, 'Pouvez-vous nous indiquer ', 0, 1, 'Répondre si Q3 = « oui »'),
(5, 2, 5, 'Etes-vous en mesure de quantifier même approximativement ?', 0, 1, 'Répondre si Q3=« non »'),
(6, 2, 6, 'Pouvez-vous nous indiquer cette fourchette ? ', 0, 1, 'Répondresi Q5=«oui »'),
(7, 2, 7, 'Comment se répartit cette quantité parmi ces activités ?', 0, 1, ''),
(16, 2, 8, 'Êtes-vous en mesure de nous préciser le type de déchets que vous générez en 2015 ?', 0, 1, NULL),
(17, 2, 9, 'Avez-vous généré des déchets inertes ?', 0, 1, 'Si Q8=oui'),
(24, 2, 10, 'Avez-vous généré des déchets non inertes non dangereux ?', 0, 1, 'Si Q8=oui'),
(63, 2, 32, 'Nom de votre établissement', 0, 6, NULL),
(64, 2, 33, 'Adresse de votre établissement', 0, 6, NULL),
(35, 2, 11, 'Avez-vous généré des déchets dangereux ?', 0, 1, 'Si Q8=oui'),
(43, 2, 12, 'Parmi tous vos déchets générés, que lest le principal ?', 0, 1, NULL),
(44, 2, 13, 'En 2015, quelle quantité de vos déchet sa été générée en de hors de la région ?', 0, 2, 'précisezl’unité : m3/tonnes'),
(45, 2, 14, '. Pouvez-vous nous indiquer les départements et/ou pas concernéet leurquantité ?', 0, 2, 'Si quantité Q13 > 0 - préciser dans un tableau :nom département/pays et quantité'),
(46, 2, 15, 'Triez-vous vos déchets ?', 0, 3, NULL),
(47, 2, 16, 'Quels sont les déchets que vous triez un à un ? Liste des déchets produits', 0, 3, 'Répondresi Q15=« Oui, déchet par déchet »'),
(48, 2, 17, 'Quels sont les déchets que vous regrouper lors du tri ? ', 0, 3, 'Répondre si Q15=« Oui, avec des regroupements de certains déchets »'),
(49, 2, 18, 'Pouvez-vous nous dire de quelle manière vous gérez vos déchets ?', 0, 3, NULL),
(50, 2, 19, 'Avez-vous une stratégie de gestion des déchets au sein de l\'entreprise ?', 0, 3, NULL),
(51, 2, 20, 'Pouvez-vous nous en dire plus (notamment en matière de réduction/réutilisation de vos déchets) ?', 0, 3, 'Répondre si Q19=« oui » ou « en projet »'),
(52, 2, 21, 'Quelles sont les difficultés rencontrées par votre entreprise pour gérer vos déchets ?', 0, 3, NULL),
(53, 2, 22, 'Concernant la relation avec les maîtres d\'ouvrage, qu\'exigent-ils de la part de l\'entreprise?(notamment en matière de bordereaux de suivi)', 0, 4, NULL),
(54, 2, 23, 'Comment ces exigences ont-elles évolué dans le temps ?', 0, 4, NULL),
(55, 2, 24, 'Quelle proportion de vos chantiers en 2015 comprenait un diagnostic déchets préalable remis par le maître d’ouvrage ?', 0, 4, NULL),
(56, 2, 25, 'Connaissez-vous les sites internet mis en place par la Fédération Française du Bâtiment, et par la Fédération Nationale des Travaux Publics, permettant de localiser les plateformes de collecte, de tri, et de traitement de déchets de chantier (http://www.dechets-chantier.ffbatiment.fr/ -http://www.excedents- chantier.fntp.fr)?', 0, 5, NULL),
(57, 2, 26, 'Utilisez-vous l’un d’entre eux ?', 0, 5, 'Répondre si Q25=« oui »'),
(58, 2, 27, 'Connaissez-vous d’autres sites internet?', 0, 5, NULL),
(59, 2, 28, 'L’utilisez-vous ?', 0, 5, 'Répondre si Q27=« oui »'),
(60, 2, 29, 'Pouvez-vous indiquer les installations de gestion de déchets avec lesquelles vous avez l’habitude de travailler ?', 0, 5, NULL),
(61, 2, 30, 'Quel est le périmètre d’acheminement des déchets ?', 0, 5, NULL),
(62, 2, 31, 'Connaissez-vous les guides édités par le CEREMA et le CETE sur la valorisation des graves ?', 0, 5, NULL),
(66, 2, 34, 'Personne à joindre si besoin de précisions?', 0, 6, NULL),
(69, 2, 35, 'Quel est votre effectif salarié ? (équivalent temps plein) ', 0, 6, NULL),
(70, 2, 36, 'a été le chiffre d’affaires de votre établissement en 2015 ? (en euros)', 0, 6, NULL),
(71, 2, 37, 'Quel par de ce chiffre d’affaires a été réalisée à l’extérieur de votre département ? ', 0, 6, NULL),
(72, 2, 38, 'Comment votre chiffre d’affaires se réparti en fonction des activité suivantes ?', 0, 6, NULL),
(79, 2, 39, 'Quel est votre code APE ? ', 0, 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `survey_section`
--

CREATE TABLE `survey_section` (
  `section_id` mediumint(9) NOT NULL,
  `section_survey_id` mediumint(9) NOT NULL,
  `section_number` int(11) NOT NULL,
  `section_name` varchar(250) NOT NULL,
  `section_note` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_section`
--

INSERT INTO `survey_section` (`section_id`, `section_survey_id`, `section_number`, `section_name`, `section_note`) VALUES
(1, 2, 1, 'La comptabilité des déchets', NULL),
(2, 2, 2, 'Les déchets générés en dehors de la Région', NULL),
(3, 2, 3, 'La gestion des déchets', NULL),
(4, 2, 4, 'Relation avec les maîtres d’ouvrages', NULL),
(5, 2, 5, 'Le recyclage, regroupement et tri', NULL),
(6, 2, 6, 'Description de l’entreprise', NULL),
(7, 3, 1, 'Description de l’entreprise', NULL),
(8, 3, 2, 'La comptabilité des déchets', NULL),
(9, 3, 3, 'Votre positionnement sur la gestion des déchets', NULL),
(10, 3, 4, 'Relation avec les maîtres d’ouvrages', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `survey_type_dechets`
--

CREATE TABLE `survey_type_dechets` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_type_dechets`
--

INSERT INTO `survey_type_dechets` (`id`, `type`, `note`) VALUES
(3, 'dangereux', ''),
(2, 'non_inertes_non_dangereux', ''),
(1, 'inertes', '');

-- --------------------------------------------------------

--
-- Structure de la table `survey_users`
--

CREATE TABLE `survey_users` (
  `id` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(55) NOT NULL,
  `sup_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `survey_users`
--

INSERT INTO `survey_users` (`id`, `email`, `password`, `sup_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'nadia.hbr@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Index pour la table `survey_activity`
--
ALTER TABLE `survey_activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Index pour la table `survey_activity_ans`
--
ALTER TABLE `survey_activity_ans`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Index pour la table `survey_back_question`
--
ALTER TABLE `survey_back_question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_checkbox`
--
ALTER TABLE `survey_checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_checkbox_ans`
--
ALTER TABLE `survey_checkbox_ans`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_dechets`
--
ALTER TABLE `survey_dechets`
  ADD PRIMARY KEY (`id_dechet`);

--
-- Index pour la table `survey_dechets_ans`
--
ALTER TABLE `survey_dechets_ans`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_departements`
--
ALTER TABLE `survey_departements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Index pour la table `survey_section`
--
ALTER TABLE `survey_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Index pour la table `survey_type_dechets`
--
ALTER TABLE `survey_type_dechets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `survey_users`
--
ALTER TABLE `survey_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `survey_activity`
--
ALTER TABLE `survey_activity`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `survey_activity_ans`
--
ALTER TABLE `survey_activity_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `answer_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `survey_back_question`
--
ALTER TABLE `survey_back_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `survey_checkbox`
--
ALTER TABLE `survey_checkbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `survey_checkbox_ans`
--
ALTER TABLE `survey_checkbox_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `survey_dechets`
--
ALTER TABLE `survey_dechets`
  MODIFY `id_dechet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `survey_dechets_ans`
--
ALTER TABLE `survey_dechets_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `survey_departements`
--
ALTER TABLE `survey_departements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `question_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `survey_section`
--
ALTER TABLE `survey_section`
  MODIFY `section_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `survey_type_dechets`
--
ALTER TABLE `survey_type_dechets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `survey_users`
--
ALTER TABLE `survey_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
