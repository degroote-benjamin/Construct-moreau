-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 10 Octobre 2017 à 16:05
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
(3, 'opakzd', 'okdzakdp', 3, '2017-10-02', 1),
(4, 'dazokdoapk', 'dkozpokadkzpoda  ', 1, '2020-12-12', 13),
(5, 'Construire une adep', 'construire un vrai simplon  ', 1, '2020-12-12', 15),
(6, 'fzaop', 'odkzapokd', 2, '2017-07-03', 1);

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
(12, 'dozak', 'okdzpokda', 3),
(13, 'odzapokdapo', 'odpzakopdka  ', 5),
(14, 'ofkezaop', 'odzkapodakz  ', 5),
(15, 'pza', 'odkzapo  ', 4);

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `end_date` date NOT NULL,
  `id_step` int(11) NOT NULL,
  `finish` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id_task`, `task_name`, `end_date`, `id_step`, `finish`) VALUES
(5, 'etape4', '2017-09-29', 4, 1),
(18, 'zako', '2020-12-12', 4, 0),
(19, 'dzada', '2020-12-12', 3, 0),
(20, 'dzoapk', '2020-12-12', 13, 1),
(21, 'dzaop', '2020-12-12', 14, 1),
(22, 'doodzap', '2020-12-12', 15, 1);

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
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mail`, `pass`) VALUES
(1, 'admin', 'admin@admin.com', 'admin'),
(2, 'daop', 'okdzap', 'dzopakodka'),
(3, 'root', 'dzaokdoazpk@gmail.com', '$2y$10$nsdi.kiiyuKnT1OILR2qZehSZ2d8gxRsmt4Qd5kNOv1XB0dTTsShG'),
(5, 'root1', 'dzaokdoazpk@gmail', '$2y$10$qDTuEUpGp0ppbE753KHWWe.cYt.L3sPP.Q13NXJ6lw6Wix2FLykQe'),
(11, 'dzoakdao', 'odpkzapodkzapodkazpk@Êzadaz', '$2y$10$EhojSgS2fmDQP5GT/uq1T.6igJC2SedBkGPBoreb7QKgKLE1yKZ9S'),
(12, 'admin1', 'dzaokdoazpk@gmail', '$2y$10$ljcGdyHGE2f2V4Al62TWDuaKliTIT.G42Mo63IjV6LBMklq7LertO'),
(13, 'admin3', 'dzaokdoazpk@gmail', '$2y$10$logi/8TCCs4uCAOl.mKGo.IIlXnMY70WjOaFFGv5kf82f8Ys5XeZW'),
(14, 'admin4', 'dzaokdoazpk@gmail', '$2y$10$IJ2FIE.7czvcKWYnCXba8up6DzMplaZ0uIAolBGq2HmutCgEOQIAG'),
(15, 'aaron', 'aarondavid@jacob.ru', '$2y$10$0Wur7KOSjYaS8a9oDgd/fekcEYWzmZyUxr8/36/8MyZDZehrdnp8m');

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
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `name` (`pseudo`);

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
  MODIFY `id_step` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
