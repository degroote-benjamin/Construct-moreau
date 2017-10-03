-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 28 Septembre 2017 à 11:22
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CONSTRUCT`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'immeuble'),
(2, 'maison');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description_project` text NOT NULL,
  `id_category` int(255) NOT NULL,
  `end_date` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id_project`, `project_name`, `description_project`, `id_category`, `end_date`, `id_user`) VALUES
(2, 'construction maison', 'construire une maison', 2, '2017-09-29', 1),
(3, 'construire immeuble', 'construire un immeuble', 1, '2017-09-30', 1),
(5, 'dpaozk', 'odkzapo', 1, '2017-09-08', 1),
(6, 'opkdzosakdpako', 'zkapodkzaokdpozakdpoza', 1, '2017-09-30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `step`
--

CREATE TABLE `step` (
  `id_step` int(11) NOT NULL,
  `step_name` varchar(255) NOT NULL,
  `description_step` text NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `step`
--

INSERT INTO `step` (`id_step`, `step_name`, `description_step`, `id_project`) VALUES
(3, 'fondation', 'fondation', 2),
(4, 'electricite', 'elec', 2),
(5, 'toiture', 'toiture', 3),
(6, 'mur', 'mur', 3),
(7, 'si besoin', 'si besoin', 3),
(9, 'dopzkaok', 'odzkapodkzapokdza', 6);

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `end_date` date NOT NULL,
  `id_step` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id_task`, `task_name`, `end_date`, `id_step`) VALUES
(4, 'etape3', '2017-09-29', 3),
(5, 'etape4', '2017-09-29', 4),
(6, 'etape 3.1', '2017-09-29', 3),
(7, 'etape 4.1', '2017-09-29', 4),
(8, 'etape 6', '2017-09-29', 6),
(9, 'etape 5', '2017-09-29', 5),
(10, 'etape 7', '2017-09-29', 7),
(11, 'etape 3.2', '2017-09-29', 3),
(12, 'etape 6.1', '2017-09-29', 6),
(13, 'etape 3.3', '2017-09-29', 3);

-- --------------------------------------------------------

--
-- Structure de la table `trash`
--

CREATE TABLE `trash` (
  `id_project` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `name`, `surname`, `mail`, `pass`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Index pour la table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id_step`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `step`
--
ALTER TABLE `step`
  MODIFY `id_step` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
