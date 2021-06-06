-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 06 Juin 2021 à 10:51
-- Version du serveur :  5.7.33-0ubuntu0.18.04.1
-- Version de PHP :  7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplon_chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `date`, `content`, `pseudo`, `updated_at`) VALUES
(1, '2021-06-02 15:02:16', 'Coucou, comment çà va ?', 'Vanessa', '2021-06-04 14:52:57'),
(2, '2021-06-02 15:02:16', 'Ca va super bien et toi ?', 'Phil', '2021-06-04 14:52:57'),
(3, '2021-06-02 15:02:16', 'Impec, avec ce super temps !', 'Vanessa', '2021-06-04 14:52:57'),
(4, '2021-06-02 15:02:16', 'Ouais moi aussi je kiff, je sirote une bière en terrasse avec nenette', 'Marion', '2021-06-04 14:52:57'),
(5, '2021-06-02 15:02:16', 'Nouveau message', 'Vanessa', '2021-06-04 16:06:58'),
(6, '2021-06-02 17:23:49', 'En effet, tout va bien ', 'Jérome', '2021-06-04 14:52:57'),
(7, '2021-06-02 17:25:44', 'Moi aussi ca roule', 'Nicole', '2021-06-04 14:52:57'),
(14, '2021-06-04 16:11:22', 'Est ce que ca marche', 'Test', '2021-06-04 16:11:22');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
