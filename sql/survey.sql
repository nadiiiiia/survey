-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  sql6:3306
-- Généré le :  Mer 08 Novembre 2017 à 09:54
-- Version du serveur :  5.5.58-MariaDB-1~wheezy
-- Version de PHP :  5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `survey`
--

-- --------------------------------------------------------

--
-- Structure de la table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `survey_name` varchar(250) NOT NULL,
  `survey_note` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `survey`
--

INSERT INTO `survey` (`survey_id`, `survey_name`, `survey_note`) VALUES
(1, 'Enquête « Entreprises TP »', 'Questionnaire à usage exclusif du Réseau des CERC'),
(2, 'Enquête auprès des entreprises de Bâtiment spécialiséesdans la démolition', 'Questionnaire INTERNE à NE PAS DIFFUSER');

-- --------------------------------------------------------

--
-- Structure de la table `survey_answers`
--

CREATE TABLE IF NOT EXISTS `survey_answers` (
  `answer_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `answer_question_id` mediumint(9) NOT NULL,
  `answer_sub_id` mediumint(9) DEFAULT NULL,
  `answer_body` varchar(300) NOT NULL,
  `answer_note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `survey_per_user`
--

CREATE TABLE IF NOT EXISTS `survey_per_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `notes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `survey_questions`
--

CREATE TABLE IF NOT EXISTS `survey_questions` (
  `question_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `survey_id` mediumint(9) NOT NULL,
  `question_number` int(11) DEFAULT NULL,
  `question_body` varchar(500) NOT NULL,
  `question_section_id` mediumint(9) DEFAULT NULL,
  `question_note` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Contenu de la table `survey_questions`
--

INSERT INTO `survey_questions` (`question_id`, `survey_id`, `question_number`, `question_body`, `question_section_id`, `question_note`) VALUES
(1, 2, 1, 'Au cours de l’année 2015, sur vos différents chantiers, votre entreprise a-t-elle généré des déchets ?', NULL, ''),
(2, 2, 2, 'Si non, pour quelles raisons ?', NULL, 'Répondre si Q1 = «Non»'),
(3, 2, 3, 'Êtes-vous en mesure de quantifier le volume de déchets générés sur vos chantiers en 2015 ?', 1, ''),
(4, 2, 4, 'Pouvez-vous nous indiquer ', 1, 'Répondre si Q3 = « oui »'),
(5, 2, 5, 'Etes-vous en mesure de quantifier même approximativement ?', 1, 'Répondre si Q3=« non »'),
(6, 2, 6, 'Pouvez-vous nous indiquer cette fourchette ? ', 1, 'Répondresi Q5=«oui »'),
(7, 2, 7, 'Comment se répartit cette quantité parmi ces activités ?', 1, 'L’enquêté répond en quantité si possible,  en % si non.'),
(16, 2, 8, 'Êtes-vous en mesure de nous préciser le type de déchets que vous générez en 2015 ?', 1, NULL),
(17, 2, 9, 'Avez-vous généré des déchets inertes ?', 1, 'Si Q8=oui'),
(24, 2, 10, 'Avez-vous généré des déchets non inertes non dangereux ?', 1, 'Si Q8=oui'),
(63, 2, 32, 'Nom de votre établissement', 6, NULL),
(64, 2, 33, 'Adresse de votre établissement', 6, NULL),
(35, 2, 11, 'Avez-vous généré des déchets dangereux ?', 1, 'Si Q8=oui'),
(43, 2, 12, 'Parmi tous vos déchets générés, que lest le principal ?', 1, NULL),
(44, 2, 13, 'En 2015, quelle quantité de vos déchet sa été générée en de hors de la région ?', 2, 'précisezl’unité : m3/tonnes'),
(45, 2, 14, 'Pouvez-vous nous indiquer les départements et/ou pas concerné et leur quantité ?', 2, 'Si quantité Q13 > 0 '),
(46, 2, 15, 'Triez-vous vos déchets ?', 3, NULL),
(47, 2, 16, 'Quels sont les déchets que vous triez un à un ? Liste des déchets produits', 3, 'Répondresi Q15=« Oui, déchet par déchet »'),
(48, 2, 17, 'Quels sont les déchets que vous regrouper lors du tri ? ', 3, 'Répondre si Q15=« Oui, avec des regroupements de certains déchets »'),
(49, 2, 18, 'Pouvez-vous nous dire de quelle manière vous gérez vos déchets ?', 3, NULL),
(50, 2, 19, 'Avez-vous une stratégie de gestion des déchets au sein de l''entreprise ?', 3, NULL),
(51, 2, 20, 'Pouvez-vous nous en dire plus (notamment en matière de réduction/réutilisation de vos déchets) ?', 3, 'Répondre si Q19=« oui » ou « en projet »'),
(52, 2, 21, 'Quelles sont les difficultés rencontrées par votre entreprise pour gérer vos déchets ?', 3, NULL),
(53, 2, 22, 'Concernant la relation avec les maîtres d''ouvrage, qu''exigent-ils de la part de l''entreprise?(notamment en matière de bordereaux de suivi)', 4, NULL),
(54, 2, 23, 'Comment ces exigences ont-elles évolué dans le temps ?', 4, NULL),
(55, 2, 24, 'Quelle proportion de vos chantiers en 2015 comprenait un diagnostic déchets préalable remis par le maître d’ouvrage ?', 4, NULL),
(56, 2, 25, 'Connaissez-vous les sites internet mis en place par la Fédération Française du Bâtiment, et par la Fédération Nationale des Travaux Publics, permettant de localiser les plateformes de collecte, de tri, et de traitement de déchets de chantier (http://www.dechets-chantier.ffbatiment.fr/ -http://www.excedents- chantier.fntp.fr)?', 5, NULL),
(57, 2, 26, 'Utilisez-vous l’un d’entre eux ?', 5, 'Répondre si Q25=« oui »'),
(58, 2, 27, 'Connaissez-vous d’autres sites internet?', 5, NULL),
(59, 2, 28, 'L’utilisez-vous ?', 5, 'Répondre si Q27=« oui »'),
(60, 2, 29, 'Pouvez-vous indiquer les installations de gestion de déchets avec lesquelles vous avez l’habitude de travailler ?', 5, NULL),
(61, 2, 30, 'Quel est le périmètre d’acheminement des déchets ?', 5, NULL),
(62, 2, 31, 'Connaissez-vous les guides édités par le CEREMA et le CETE sur la valorisation des graves ?', 5, NULL),
(66, 2, 34, 'Personne à joindre si besoin de précisions?', 6, NULL),
(69, 2, 35, 'Quel est votre effectif salarié ? (équivalent temps plein) ', 6, NULL),
(70, 2, 36, 'a été le chiffre d’affaires de votre établissement en 2015 ? (en euros)', 6, NULL),
(71, 2, 37, 'Quel par de ce chiffre d’affaires a été réalisée à l’extérieur de votre département ? ', 6, NULL),
(72, 2, 38, 'Comment votre chiffre d’affaires se réparti en fonction des activité suivantes ?', 6, NULL),
(79, 2, 39, 'Quel est votre code APE ? ', 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `survey_section`
--

CREATE TABLE IF NOT EXISTS `survey_section` (
  `section_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `section_survey_id` mediumint(9) NOT NULL,
  `section_number` int(11) NOT NULL,
  `section_name` varchar(250) NOT NULL,
  `section_note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `survey_section`
--

INSERT INTO `survey_section` (`section_id`, `section_survey_id`, `section_number`, `section_name`, `section_note`) VALUES
(1, 2, 1, 'La comptabilité des déchets', NULL),
(2, 2, 2, 'Les déchets générés en dehors de la Région', NULL),
(3, 2, 3, 'La gestion des déchets', NULL),
(4, 2, 4, 'Relation avec les maîtres d’ouvrages', NULL),
(5, 2, 5, 'Le recyclage, regroupement et tri', NULL),
(6, 2, 6, 'Description de l’entreprise', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `survey_users`
--

CREATE TABLE IF NOT EXISTS `survey_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(35) NOT NULL,
  `password` varchar(55) NOT NULL,
  `sup_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `survey_users`
--

INSERT INTO `survey_users` (`id`, `email`, `password`, `sup_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
