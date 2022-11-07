-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 06 nov. 2022 à 14:12
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imovix`
--

-- --------------------------------------------------------

--
-- Structure de la table `imovix_users`
--

CREATE TABLE `imovix_users` (
  `user_code` int(11) NOT NULL,
  `user_prenom` varchar(100) DEFAULT NULL,
  `user_nom` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_mdp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `imovix_users`
--

INSERT INTO `imovix_users` (`user_code`, `user_prenom`, `user_nom`, `user_email`, `user_mdp`) VALUES
(1, 'Enzo', 'Cosson', 'enzolemercier@gmail.com', '123'),
(4, 'Lea', 'Test', 'leatest@gmail.com', '123'),
(13, 'quentin', 'Garnier', 'leatest@gmail.com', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `imovix_users`
--
ALTER TABLE `imovix_users`
  ADD PRIMARY KEY (`user_code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `imovix_users`
--
ALTER TABLE `imovix_users`
  MODIFY `user_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
