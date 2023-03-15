-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 mars 2023 à 00:41
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

DROP TABLE IF EXISTS `choix`;
CREATE TABLE IF NOT EXISTS `choix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(250) DEFAULT NULL,
  `BonneReponse` tinyint(1) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`id`, `reponse`, `BonneReponse`, `question_id`) VALUES
(1, 'foot', 1, 1),
(2, 'basket', 0, 1),
(3, 'Rugby', 0, 1),
(4, 'golf', 0, 1),
(5, 'Italy', 0, 2),
(6, 'Allemagne', 0, 2),
(7, 'Bresil', 1, 2),
(8, 'France', 0, 2),
(9, '3 ans', 1, 3),
(10, ' 4 ans', 0, 3),
(11, '2 ans', 0, 3),
(12, '5 ans', 0, 3),
(13, 'Marseille', 1, 4),
(14, 'Paris', 0, 4),
(15, 'Grenomble', 0, 4),
(16, 'Rouen', 0, 4),
(17, 'terre batue', 1, 5),
(18, 'court de tennis', 0, 5),
(19, 'tennis en dur', 0, 5),
(20, 'surface synthétique', 0, 5),
(21, 'L\'algerie', 1, 6),
(22, 'Le Mali', 0, 6),
(23, ' L\'egypte', 0, 6),
(24, 'La Tunisie', 0, 6),
(25, 'Alger', 1, 7),
(26, 'Oran', 0, 7),
(27, 'Azazga', 0, 7),
(28, 'Constantine', 0, 7),
(29, 'Dinnar', 1, 8),
(30, 'Euro', 0, 8),
(31, 'Dollar', 0, 8),
(32, 'Dirham', 0, 8),
(33, 'Dans le sud ', 1, 9),
(34, 'Dans le nord', 0, 9),
(35, 'A l\'ouest ', 0, 9),
(36, 'A l\'est ', 0, 9),
(37, 'Mali', 1, 10),
(38, 'Maroc', 0, 10),
(39, 'Mauritanie', 0, 10),
(40, 'Tchad', 0, 10),
(41, '1999', 0, 11),
(42, '2000', 0, 11),
(43, '1998', 1, 11),
(44, '2001', 0, 11),
(45, '2', 0, 12),
(46, '4', 0, 12),
(47, '6', 1, 12),
(48, '7', 0, 12),
(49, 'Marie-Christine', 0, 13),
(50, 'Nicola rousse', 0, 13),
(51, 'Jean larrat', 1, 13),
(52, 'Pascal', 0, 13),
(53, '2', 0, 14),
(54, '9', 0, 14),
(55, '5', 1, 14),
(56, '7', 0, 14),
(57, '2 année', 0, 15),
(58, '3 année', 0, 15),
(59, '4 année', 1, 15),
(60, 'Pas d\'alternance tu paye !', 0, 15),
(61, 'Naruto', 0, 16),
(62, 'One piece', 1, 16),
(63, 'Démon Slayer', 0, 16),
(64, 'Dragonball', 0, 16),
(65, 'Nicky larson', 0, 17),
(66, 'Tortue genial', 0, 17),
(67, 'Jiraya', 1, 17),
(68, 'Sanji', 0, 17),
(69, 'Naruto', 0, 18),
(70, 'Luffy', 1, 18),
(71, 'Ed erwin', 0, 18),
(72, 'Sasuke', 0, 18),
(73, 'Light kagami', 0, 19),
(74, 'Onizuka ', 1, 19),
(75, 'iruka', 0, 19),
(76, 'Koro sensei', 0, 19),
(77, 'Shanks', 0, 20),
(78, 'Kepachi', 1, 20),
(79, 'Madara', 0, 20),
(80, 'All might', 0, 20),
(81, '2200', 1, 21),
(82, '2500', 0, 21),
(83, '2300', 0, 21),
(84, '2250', 0, 21),
(85, '68,5', 1, 22),
(86, '61', 0, 22),
(87, '64,6', 0, 22),
(88, '59', 0, 22),
(89, '4', 1, 23),
(90, '16', 0, 23),
(91, '12', 0, 23),
(92, '5', 0, 23),
(93, 'foot', 1, 24),
(94, 'basket', 0, 24),
(95, 'Rugby', 0, 24),
(96, 'Volley', 0, 24),
(97, 'Italy', 0, 25),
(98, 'Allemagne', 0, 25),
(99, 'Bresil', 1, 25),
(100, 'France', 0, 25),
(101, '3 ans', 1, 26),
(102, ' 4 ans', 0, 26),
(103, '2 ans', 0, 26),
(104, '5 ans', 0, 26),
(105, 'Berlin', 1, 27),
(106, 'Paris', 0, 27),
(107, 'Londre', 0, 27),
(108, 'Alger', 0, 27),
(109, 'La boxe', 1, 28),
(110, 'Les courses de chevaux', 0, 28),
(111, 'Le foot', 0, 28),
(112, 'L\'athlétisme ', 0, 28),
(113, 'foot', 1, 29),
(114, 'basket', 0, 29),
(115, 'Rugby', 0, 29),
(116, 'Volley', 0, 29),
(117, 'Italy', 0, 30),
(118, 'Allemagne', 0, 30),
(119, 'Bresil', 1, 30),
(120, 'France', 0, 30),
(121, '3 ans', 1, 31),
(122, ' 4 ans', 0, 31),
(123, '2 ans', 0, 31),
(124, '5 ans', 0, 31),
(125, 'Berlin', 1, 32),
(126, 'Paris', 0, 32),
(127, 'Londre', 0, 32),
(128, 'Alger', 0, 32),
(129, 'La boxe', 1, 33),
(130, 'Les courses de chevaux', 0, 33),
(131, 'Le foot', 0, 33),
(132, 'L\'athlétisme ', 0, 33),
(133, 'foot', 1, 34),
(134, 'basket', 0, 34),
(135, 'Rugby', 0, 34),
(136, 'Volley', 0, 34),
(137, 'Italy', 0, 35),
(138, 'Allemagne', 0, 35),
(139, 'Bresil', 1, 35),
(140, 'France', 0, 35),
(141, '3 ans', 1, 36),
(142, ' 4 ans', 0, 36),
(143, '2 ans', 0, 36),
(144, '5 ans', 0, 36),
(145, 'Berlin', 1, 37),
(146, 'Paris', 0, 37),
(147, 'Londre', 0, 37),
(148, 'Alger', 0, 37),
(149, 'La boxe', 1, 38),
(150, 'Les courses de chevaux', 0, 38),
(151, 'Le foot', 0, 38),
(152, 'L\'athlétisme ', 0, 38),
(153, 'foot', 1, 39),
(154, 'basket', 0, 39),
(155, 'Rugby', 0, 39),
(156, 'Volley', 0, 39),
(157, 'Italy', 0, 40),
(158, 'Allemagne', 0, 40),
(159, 'Bresil', 1, 40),
(160, 'France', 0, 40),
(161, '3 ans', 1, 41),
(162, ' 4 ans', 0, 41),
(163, '2 ans', 0, 41),
(164, '5 ans', 0, 41),
(165, 'Berlin', 1, 42),
(166, 'Paris', 0, 42),
(167, 'Londre', 0, 42),
(168, 'Alger', 0, 42),
(169, 'La boxe', 1, 43),
(170, 'Les courses de chevaux', 0, 43),
(171, 'Le foot', 0, 43),
(172, 'L\'athlétisme ', 0, 43),
(173, 'foot', 1, 44),
(174, 'basket', 0, 44),
(175, 'Rugby', 0, 44),
(176, 'Volley', 0, 44),
(177, 'Italy', 0, 45),
(178, 'Allemagne', 0, 45),
(179, 'Bresil', 1, 45),
(180, 'France', 0, 45),
(181, '3 ans', 1, 46),
(182, ' 4 ans', 0, 46),
(183, '2 ans', 0, 46),
(184, '5 ans', 0, 46),
(185, 'Berlin', 1, 47),
(186, 'Paris', 0, 47),
(187, 'Londre', 0, 47),
(188, 'Alger', 0, 47),
(189, 'La boxe', 1, 48),
(190, 'Les courses de chevaux', 0, 48),
(191, 'Le foot', 0, 48),
(192, 'L\'athlétisme ', 0, 48),
(193, 'foot', 1, 49),
(194, 'basket', 0, 49),
(195, 'Rugby', 0, 49),
(196, 'Volley', 0, 49),
(197, 'Italy', 0, 50),
(198, 'Allemagne', 0, 50),
(199, 'Bresil', 1, 50),
(200, 'France', 0, 50),
(201, '3 ans', 1, 51),
(202, ' 4 ans', 0, 51),
(203, '2 ans', 0, 51),
(204, '5 ans', 0, 51),
(205, 'Berlin', 1, 52),
(206, 'Paris', 0, 52),
(207, 'Londre', 0, 52),
(208, 'Alger', 0, 52),
(209, 'La boxe', 1, 53),
(210, 'Les courses de chevaux', 0, 53),
(211, 'Le foot', 0, 53),
(212, 'L\'athlétisme ', 0, 53),
(213, 'foot', 1, 54),
(214, 'basket', 0, 54),
(215, 'Rugby', 0, 54),
(216, 'Volley', 0, 54),
(217, 'Italy', 0, 55),
(218, 'Allemagne', 0, 55),
(219, 'Bresil', 1, 55),
(220, 'France', 0, 55),
(221, '3 ans', 1, 56),
(222, ' 4 ans', 0, 56),
(223, '2 ans', 0, 56),
(224, '5 ans', 0, 56),
(225, 'Berlin', 1, 57),
(226, 'Paris', 0, 57),
(227, 'Londre', 0, 57),
(228, 'Alger', 0, 57),
(229, 'La boxe', 1, 58),
(230, 'Les courses de chevaux', 0, 58),
(231, 'Le foot', 0, 58),
(232, 'L\'athlétisme ', 0, 58),
(233, '1758', 0, 59),
(234, '1789', 1, 59),
(235, '1777', 0, 59),
(236, '1764', 0, 59),
(237, 'Napoléon Bonaparte', 1, 60),
(238, 'Charlemagne ', 0, 60),
(239, 'Louis Philippe ', 0, 60),
(240, 'Emmanuel Macron', 0, 60),
(241, 'Louis XIV', 0, 61),
(242, 'Robert II ', 1, 61),
(243, 'Henri II', 0, 61),
(244, 'Jean I', 0, 61),
(245, 'Louis XVIII', 0, 62),
(246, 'Napoléon III', 1, 62),
(247, 'Louis-Philippe', 0, 62),
(248, 'Philippe III', 0, 62),
(249, 'Tour eiffel', 0, 63),
(250, 'Arc de triomphe', 1, 63),
(251, 'Le panthéon', 0, 63),
(252, 'Place de la concorde', 0, 63);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intituleQuestion` varchar(250) DEFAULT NULL,
  `difficulte` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `quizz_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `intituleQuestion`, `difficulte`, `date_creation`, `quizz_id`) VALUES
(1, 'le meilleure sport au monde ?', NULL, '2023-03-14', 1),
(2, 'qu\'elle la nation avec le plus de c oupe du monde ?', NULL, '2023-03-14', 1),
(3, 'Quelle est la périodicité des jeux Olympiques d’été', NULL, '2023-03-14', 1),
(4, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-14', 1),
(5, 'Quel nom porte un terrain de tennis ?', NULL, '2023-03-14', 1),
(6, 'Le plus grand pays d\'Afrique ?', NULL, '2023-03-14', 2),
(7, 'Quelle est la capitale d\'Algérie ?', NULL, '2023-03-14', 2),
(8, 'Quel est le nom de la monnaie algérienne ?', NULL, '2023-03-14', 2),
(9, 'Où se trouve la Kabylie ?', NULL, '2023-03-14', 2),
(10, 'Quel pays n\'a pas de frontière commune avec l\'Algérie ?', NULL, '2023-03-14', 2),
(11, 'date de creation ?', NULL, '2023-03-14', 3),
(12, 'Combien de campus a IPSSI ?', NULL, '2023-03-14', 3),
(13, 'Qui est le ou la responsable des BTC 25.1 ?', NULL, '2023-03-14', 3),
(14, 'Combien de formation dispose IPSSI ?', NULL, '2023-03-14', 3),
(15, 'IPSSI propose L\'alternance a partire de ?', NULL, '2023-03-14', 3),
(16, 'À quel anime appartient cette réplique : \"La passion et les rêves sont comme le temps, rien ne peut les arrêter, et il en sera ainsi tant qu\'il y aura des hommes prêts à donner un sens au mot « LIBERTE » ?', NULL, '2023-03-14', 4),
(17, 'Adapté du manga \"City Hunter\", l\'anime raconte le quotidien d\'un home de l\'ombre, nettoyeur, garde du corps, s\'attachant une clientèle féminine ?', NULL, '2023-03-14', 4),
(18, 'Adapté d\'un manga, cet anime raconte le quotidien d\'un jeune garçon voulant devenir Hokage ?', NULL, '2023-03-14', 4),
(19, 'Ce manga raconte l\'histoire d\'une jeune professeur au passé douteux ?', NULL, '2023-03-14', 4),
(20, ' Le plus badasse parmi ces personnages ?', NULL, '2023-03-14', 4),
(21, 'Calculer 275 x 8 =', NULL, '2023-03-14', 5),
(22, 'Ludivine pèse aujourd’hui 64 kg, elle perd 1,5 kg chaque semaine depuis 3 semaines. Quel était son poids initial ?', NULL, '2023-03-14', 5),
(23, 'J’ai quatre frères et chacun de mes frères a également quatre frères, combien sommes-nous au total ?', NULL, '2023-03-14', 5),
(24, 'le meilleure sport au monde ?', NULL, '2023-03-15', 6),
(25, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 6),
(26, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 6),
(27, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 6),
(28, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 6),
(29, 'le meilleure sport au monde ?', NULL, '2023-03-15', 7),
(30, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 7),
(31, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 7),
(32, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 7),
(33, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 7),
(34, 'le meilleure sport au monde ?', NULL, '2023-03-15', 8),
(35, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 8),
(36, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 8),
(37, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 8),
(38, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 8),
(39, 'le meilleure sport au monde ?', NULL, '2023-03-15', 9),
(40, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 9),
(41, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 9),
(42, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 9),
(43, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 9),
(44, 'le meilleure sport au monde ?', NULL, '2023-03-15', 10),
(45, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 10),
(46, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 10),
(47, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 10),
(48, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 10),
(49, 'le meilleure sport au monde ?', NULL, '2023-03-15', 11),
(50, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 11),
(51, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 11),
(52, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 11),
(53, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 11),
(54, 'le meilleure sport au monde ?', NULL, '2023-03-15', 12),
(55, 'qu\'elle la nation avec le plus de coupe du monde ?', NULL, '2023-03-15', 12),
(56, 'Quelle est la périodicité des jeux Olympiques d’été ?', NULL, '2023-03-15', 12),
(57, 'Où se sont déroulés les jeux Olympiques d’été en 2024 ?', NULL, '2023-03-15', 12),
(58, 'Qu\'elle est la plus ancienne des disciplines sportives ?', NULL, '2023-03-15', 12),
(59, 'La Révolution française a commencé en qu\'elle année ?', NULL, '2023-03-15', 13),
(60, 'Le premier empereur des Français est ?', NULL, '2023-03-15', 13),
(61, ' \"Le Roi-Soleil\" était le roi ?', NULL, '2023-03-15', 13),
(62, 'qui etait le dernier roi de france ?', NULL, '2023-03-15', 13),
(63, 'Le monuments synonyme de symbole de la victoire française lors des guerres napoléoniennes ?', NULL, '2023-03-15', 13);

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(250) DEFAULT NULL,
  `difficulte` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`id`, `Titre`, `difficulte`, `date_creation`) VALUES
(6, 'Le sport', NULL, '2023-03-15'),
(2, 'Algérie', NULL, '2023-03-14'),
(3, 'Ipssi', NULL, '2023-03-14'),
(4, 'Mangas', NULL, '2023-03-14'),
(5, 'Maths', NULL, '2023-03-14'),
(13, 'La france', NULL, '2023-03-15');

-- --------------------------------------------------------

--
-- Structure de la table `user_quiz`
--

DROP TABLE IF EXISTS `user_quiz`;
CREATE TABLE IF NOT EXISTS `user_quiz` (
  `id_user` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`,`id_quiz`),
  KEY `id_1` (`id_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_quiz`
--

INSERT INTO `user_quiz` (`id_user`, `id_quiz`, `score`) VALUES
(1, 1, 1),
(1, 3, 2),
(1, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `password`, `role`) VALUES
(1, 'toto', 'toto@gmail.com', 'titi', 2),
(2, 'khaled', 'khaled123@gmail.com', 'azerty', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
