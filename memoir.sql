-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 juin 2023 à 00:06
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `memoir`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultatiion`
--

CREATE TABLE `consultatiion` (
  `id_consult` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_consult` date NOT NULL,
  `diagnostique` varchar(5000) NOT NULL,
  `dose_med` varchar(100) NOT NULL,
  `type_lunett` varchar(50) NOT NULL,
  `loeil_droit` varchar(50) NOT NULL,
  `loeil_gauche` varchar(50) NOT NULL,
  `signature_med` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `consultatiion`
--

INSERT INTO `consultatiion` (`id_consult`, `id`, `date_consult`, `diagnostique`, `dose_med`, `type_lunett`, `loeil_droit`, `loeil_gauche`, `signature_med`) VALUES
(13, 27, '2023-05-31', 'bein', '11', 'proximity', '10', '8', 'BRZ');

-- --------------------------------------------------------

--
-- Structure de la table `opération`
--

CREATE TABLE `opération` (
  `id_op` int(20) NOT NULL,
  `id` int(11) NOT NULL,
  `heur_operation` time(6) NOT NULL,
  `date_operation` date NOT NULL,
  `oeil` varchar(20) NOT NULL,
  `resultat` text NOT NULL,
  `protocole` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `opération`
--

INSERT INTO `opération` (`id_op`, `id`, `heur_operation`, `date_operation`, `oeil`, `resultat`, `protocole`, `type`, `prix`) VALUES
(22, 27, '11:11:00.000000', '2023-05-31', 'right', 'good', 'aa', 'AAAAA', 2300),
(23, 27, '11:11:00.000000', '2023-05-13', 'left', '11111', 'aa', 'AA', 2300);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(10) NOT NULL,
  `rdv` date NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_numbre` int(50) NOT NULL,
  `image` blob NOT NULL,
  `password` char(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone_numbre`, `image`, `password`, `gender`, `city`, `birthday`) VALUES
(27, 'belhani', 'Rayene', 'zahra@gmail.com', 541692575, '', '$2y$10$5yivKPuRSUq8zEDGI2MyG.RpAQYnf7JEoe7y2CHil5YLrFya8ASa6', 'Female', 'Annaba', '2002-05-11'),
(29, 'chaib', 'hiba', 'hiba@gmail.com', 541692575, '', '$2y$10$OCzSurDFNMHLkaMLvMIvRuekQc5VvqSYja4A.MnQb59B0RcXTrROa', 'Female', 'Annaba', '2002-09-11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consultatiion`
--
ALTER TABLE `consultatiion`
  ADD PRIMARY KEY (`id_consult`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `opération`
--
ALTER TABLE `opération`
  ADD PRIMARY KEY (`id_op`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `email` (`email`),
  ADD KEY `birthday` (`birthday`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consultatiion`
--
ALTER TABLE `consultatiion`
  MODIFY `id_consult` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `opération`
--
ALTER TABLE `opération`
  MODIFY `id_op` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
