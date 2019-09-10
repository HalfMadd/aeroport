-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 10 sep. 2019 à 15:03
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aeroport`
--

-- --------------------------------------------------------

--
-- Structure de la table `continents`
--

CREATE TABLE `continents` (
  `id_continent` int(11) NOT NULL,
  `nom_continent` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `continents`
--

INSERT INTO `continents` (`id_continent`, `nom_continent`) VALUES
(1, 'Europe'),
(2, 'Afrique'),
(3, 'Amerique du Sud');

-- --------------------------------------------------------

--
-- Structure de la table `mois`
--

CREATE TABLE `mois` (
  `id_mois` int(11) NOT NULL,
  `nom_mois` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `mois`
--

INSERT INTO `mois` (`id_mois`, `nom_mois`) VALUES
(1, 'Janvier'),
(2, 'Février'),
(3, 'Mars'),
(4, 'Avril'),
(5, 'Mai'),
(6, 'Juin'),
(7, 'Juillet'),
(8, 'Aout'),
(9, 'Septembre'),
(10, 'Octobre'),
(11, 'Novembre'),
(12, 'Décembre');

-- --------------------------------------------------------

--
-- Structure de la table `temperatures`
--

CREATE TABLE `temperatures` (
  `id_temperatures` int(11) NOT NULL,
  `temp_min` int(11) NOT NULL,
  `temp_max` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `mois_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `temperatures`
--

INSERT INTO `temperatures` (`id_temperatures`, `temp_min`, `temp_max`, `ville_id`, `mois_id`) VALUES
(1, 19, 27, 16, 1),
(2, 19, 28, 16, 2),
(3, 18, 27, 16, 3),
(4, 16, 25, 16, 4),
(5, 14, 23, 16, 5),
(6, 12, 22, 16, 6),
(7, 12, 22, 16, 7),
(8, 13, 24, 16, 8),
(9, 14, 24, 16, 9),
(10, 15, 25, 16, 10),
(11, 17, 26, 16, 11),
(12, 18, 26, 16, 12),
(13, 8, 17, 15, 1),
(14, 9, 18, 15, 2),
(15, 10, 19, 15, 3),
(16, 11, 20, 15, 4),
(17, 13, 22, 15, 5),
(18, 16, 24, 15, 6),
(19, 18, 27, 15, 7),
(20, 18, 27, 15, 8),
(21, 18, 27, 15, 9),
(22, 15, 24, 15, 10),
(23, 12, 21, 15, 11),
(24, 10, 18, 15, 12),
(25, 4, 9, 5, 1),
(26, 4, 10, 5, 2),
(27, 5, 12, 5, 3),
(28, 6, 13, 5, 4),
(29, 9, 16, 5, 5),
(30, 11, 19, 5, 6),
(31, 13, 21, 5, 7),
(32, 13, 21, 5, 8),
(33, 12, 19, 5, 9),
(34, 10, 16, 5, 10),
(35, 7, 12, 5, 11),
(36, 5, 10, 5, 12),
(37, 4, 14, 1, 1),
(38, 4, 14, 1, 2),
(39, 6, 16, 1, 3),
(40, 8, 18, 1, 4),
(41, 12, 22, 1, 5),
(42, 15, 25, 1, 6),
(43, 17, 28, 1, 7),
(44, 18, 29, 1, 8),
(45, 15, 26, 1, 9),
(46, 12, 23, 1, 10),
(47, 8, 18, 1, 11),
(48, 6, 15, 1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id_ville` int(11) NOT NULL,
  `continent_id` int(11) NOT NULL,
  `nom_ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id_ville`, `continent_id`, `nom_ville`) VALUES
(1, 1, 'Ajaccio'),
(5, 1, 'Brest'),
(15, 2, 'Rabat'),
(16, 3, 'Sao Paulo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id_continent`);

--
-- Index pour la table `mois`
--
ALTER TABLE `mois`
  ADD PRIMARY KEY (`id_mois`);

--
-- Index pour la table `temperatures`
--
ALTER TABLE `temperatures`
  ADD PRIMARY KEY (`id_temperatures`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `continents`
--
ALTER TABLE `continents`
  MODIFY `id_continent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `mois`
--
ALTER TABLE `mois`
  MODIFY `id_mois` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `temperatures`
--
ALTER TABLE `temperatures`
  MODIFY `id_temperatures` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
