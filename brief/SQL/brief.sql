-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 avr. 2021 à 17:03
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brief`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `FirstName`, `LastName`, `email`, `password`) VALUES
(1, 'zakaria', 'elarfaoui', 'zakaria@gmail.com', '$2y$10$IxUdhzfyMJJnK2P.rupPc.8fZOoAJmxJCtAEmupD8TvDvL8pozLJC');

-- --------------------------------------------------------

--
-- Structure de la table `developpeurs`
--

CREATE TABLE `developpeurs` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `FirstName`, `LastName`, `email`, `password`) VALUES
(1, 'test', 'test', 'test@gmail.com', '$2y$10$.SAg8OnYkKiHKDTLD7I1..EjjDOT4tEDHGQu78UY28q4tTdwJ5s02'),
(2, 'reda', 'mezioni', 'reda@gmail.com', '$2y$10$ep5.r8/onL2RtWlU7TdHGe7oKUWhwV.Z27CdWBbW8lmmbFkrsydd6');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `techno` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `developpeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `techno`, `date`, `developpeur_id`) VALUES
(9, 'JS', '2021-04-30', 2);

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

CREATE TABLE `techno` (
  `id` int(11) NOT NULL,
  `HTML` int(11) NOT NULL,
  `JS` int(11) NOT NULL,
  `AJAX` int(11) NOT NULL,
  `PHP` int(11) NOT NULL,
  `CGI` int(11) NOT NULL,
  `developpeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `techno`
--

INSERT INTO `techno` (`id`, `HTML`, `JS`, `AJAX`, `PHP`, `CGI`, `developpeur_id`) VALUES
(1, 1, 3, 2, 3, 5, 1),
(2, 5, 2, 0, 4, 0, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `developpeur_id` (`developpeur_id`);

--
-- Index pour la table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `developpeur_id` (`developpeur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `techno`
--
ALTER TABLE `techno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`developpeur_id`) REFERENCES `developpeurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `techno`
--
ALTER TABLE `techno`
  ADD CONSTRAINT `techno_ibfk_1` FOREIGN KEY (`developpeur_id`) REFERENCES `developpeurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
