-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 07 mai 2023 à 12:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `memoire`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `id_consult` int(10) NOT NULL,
  `dose-med` varchar(50) NOT NULL,
  `date-consult` date NOT NULL,
  `type-verres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `opération`
--

CREATE TABLE `opération` (
  `id` int(20) NOT NULL,
  `heur-operation` time(6) NOT NULL,
  `date-operation` date NOT NULL,
  `oeil` enum('g','d','','') NOT NULL,
  `resultat` text NOT NULL,
  `protocole` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id` int(10) NOT NULL,
  `rdv` datetime(6) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type_opération`
--

CREATE TABLE `type_opération` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix` bigint(20) NOT NULL
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
  `phone_numbre` varchar(50) NOT NULL,
  `image` blob NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone_numbre`, `image`, `password`, `gender`, `city`, `date`) VALUES
(1, 'belhani', 'Rayene', 'hi@gmail.com', '', '', '$2y$10$1P1IScz2tg5PE36VBZehB.ROniiVhLw3Qw4Z0IvTiam17nR2quq3G', 'Female', '', '2023-05-02 01:07:18'),
(2, 'belhani', 'Rayene', 'hi@gmail.com', '', '', '$2y$10$TRv/HrjDZvvBFs2kbT1opeatVDmOYokB5Yje6WCWkWhI3aMd6buR2', 'Female', '', '2023-05-02 00:50:43'),
(3, 'hi', 'again', 'hi@gmail.com', '', '', '$2y$10$ba5uKPwSxLsp/IMkUplB3OtxW.Wo3hLXtk4jTFZOuJJCtfL0Ea8P2', 'Male', '', '2023-05-02 00:59:11'),
(4, 'AA', 'AA', 'A@gmail.com', '', '', '$2y$10$1PH5Dt0UnckdbaQyepVnc.dqcP075nkYClSDMixQlxq2xXTY8ir0i', 'Female', '', '2023-05-02 01:00:40'),
(5, 'HELLO', 'Rayene', '123@gmail.com', '', '', '$2y$10$5pa2O2Ydp7QUG8EBRkcUzejOhQ54PP6D.0CIlnmKryxcEQwf6/rSS', 'Female', '', '2023-05-02 02:22:34'),
(6, 'belhani', 'Rayene', '12345@gmail.com', '', '', '$2y$10$RzaU6jPbm3fz0SGuFhW9wuZYk8n6XBMXE.d3l38PTvP7O81QF5wBu', 'Female', '', '2023-05-03 02:39:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id_consult`);

--
-- Index pour la table `opération`
--
ALTER TABLE `opération`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_opération`
--
ALTER TABLE `type_opération`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `date` (`date`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id_consult` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `opération`
--
ALTER TABLE `opération`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_opération`
--
ALTER TABLE `type_opération`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`id_consult`) REFERENCES `malade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`id_consult`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `opération`
--
ALTER TABLE `opération`
  ADD CONSTRAINT `opération_ibfk_1` FOREIGN KEY (`id`) REFERENCES `type_opération` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `opération_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_3` FOREIGN KEY (`id`) REFERENCES `consultation` (`id_consult`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_ibfk_4` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
