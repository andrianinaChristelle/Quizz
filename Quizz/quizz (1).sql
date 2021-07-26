-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 juil. 2021 à 04:57
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `numero`, `question`) VALUES
(14, 0, 'Soprano a récemment fait un feat avec Vincenzo, comment s\'appelait ce titre ?'),
(15, 2, 'Le titre “Allez reste\"du groupe Boulevard des airs a été créé avec le chanteur....'),
(16, 3, 'Dans le groupe Bigflo et Oli, quel est le vrai prénom de Oli ?'),
(17, 4, 'La jeune et talentueuse chanteuse Eva (kitoko, Alibi...) est la sœur de qui ?'),
(20, 5, 'le chanteur Dadju est apparemment le frere de Gims , qu\'en pensez-vous ?');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `questrep`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `questrep` (
`question` varchar(200)
,`numero` int(11)
,`reponse` varchar(100)
,`typeRep` tinyint(1)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `reponse` varchar(100) NOT NULL,
  `typeRep` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `id_question`, `reponse`, `typeRep`) VALUES
(25, 14, 'le sport ', 1),
(26, 14, 'le clown', 1),
(27, 14, 'le coach', 0),
(28, 14, 'aucune de ses trois proposition', 1),
(29, 15, ' Gims', 1),
(30, 15, 'Vianney', 0),
(31, 15, 'Dadju', 1),
(32, 15, 'je ne sais pas', 1),
(33, 16, 'Olivia', 1),
(34, 16, 'Olivier', 0),
(35, 16, 'Olin', 1),
(36, 16, 'Aucune de ses trois propositions', 1),
(37, 17, 'Nabila', 1),
(38, 17, 'Vianney', 1),
(39, 17, 'Jazz', 0),
(40, 17, 'Autre', 1),
(45, 20, 'C\'est faux juste une rumeur', 1),
(46, 20, 'j\'en ai aucune idee je suis neutre ', 1),
(47, 20, 'c\'est vrai pour toute les personnes qui disent le contraire qppelez moi', 0),
(48, 20, 'Drole d\'idee', 1);

-- --------------------------------------------------------

--
-- Structure de la vue `questrep`
--
DROP TABLE IF EXISTS `questrep`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `questrep`  AS  select `question`.`question` AS `question`,`question`.`numero` AS `numero`,`reponse`.`reponse` AS `reponse`,`reponse`.`typeRep` AS `typeRep`,`question`.`id` AS `id` from (`reponse` join `question` on(`reponse`.`id_question` = `question`.`id`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_question` (`id_question`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
