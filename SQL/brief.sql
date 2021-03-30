-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mars 2021 à 17:45
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
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'zakaria@gmail.com', '$2y$10$AfrBJovb3.rv7n2NiiZwaeXCDWxPVp2imfCq3ij.YC7b2/R2aObHS'),
(2, 'eazdsf', 'dgsdfg');

-- --------------------------------------------------------

--
-- Structure de la table `developpeurs`
--

CREATE TABLE `developpeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(11, 'doha', 'doha', 'doha@gmail.com', '$2y$10$RdXr0vtSNqOIodueGxGttO//1nyLUf09lpsPHJV0VvunJpRo2oA4S'),
(12, 'fadoua', 'fadoua', 'fasoua@gmail.com', '$2y$10$J4kpqG9FH.5TKumWvCK17.mgKPXPwdR2mVp/WpnA.G2UGR3l4Z8K6'),
(13, 'feriadi', 'feriadi', 'f@gmail.com', '$2y$10$K77l0kJiIX.4c8IOlcEoqul3cud6qcgTCX46O2o5.e40i9bcUN6Oa');

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
(17, 'HTML', '2021-03-16', 11),
(19, 'JS', '2021-03-23', 12);

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
(7, 5, 5, 5, 5, 5, 11),
(8, 5, 0, -1, 4, 0, 12),
(9, 5, 5, 5, 5, 5, 13);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `techno`
--
ALTER TABLE `techno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
