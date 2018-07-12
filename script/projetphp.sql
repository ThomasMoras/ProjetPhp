-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 juil. 2018 à 14:21
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetphp`
--
CREATE DATABASE IF NOT EXISTS `projetphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetphp`;

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

DROP TABLE IF EXISTS `contrats`;
CREATE TABLE IF NOT EXISTS `contrats` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrats`
--

INSERT INTO `contrats` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL),
(2, 'CDI', NULL, NULL),
(3, 'CDD', NULL, NULL),
(4, 'Alternance', NULL, NULL),
(5, 'Stage', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
CREATE TABLE IF NOT EXISTS `domaines` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL),
(2, 'Informatique', NULL, NULL),
(3, 'Gestion de projet\r\n', NULL, NULL),
(4, 'Commerce', NULL, NULL),
(5, 'Finance', NULL, NULL),
(6, 'Agriculture', NULL, NULL),
(7, 'Art', NULL, NULL),
(8, 'Médical', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `from_id` int(10) UNSIGNED NOT NULL,
  `to_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `from` (`from_id`),
  KEY `to` (`to_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `content`, `created_at`, `read_at`) VALUES
(1, 2, 1, 'salut', '2018-07-12 11:05:03', NULL),
(2, 1, 2, 'yo', '2018-07-12 11:05:36', NULL),
(3, 4, 2, 'salut', '2018-07-12 11:24:45', NULL),
(4, 4, 1, 'yo', '2018-07-12 11:24:57', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2018_01_04_151925_add_message', 1),
(46, '2018_07_10_075559_create_profils_table', 1),
(47, '2018_07_10_112828_create_competences_table', 1),
(48, '2018_07_10_112838_create_domaines_table', 1),
(49, '2018_07_10_112849_create_contrats_table', 1),
(50, '2018_07_10_120849_create_user_competence_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

DROP TABLE IF EXISTS `profils`;
CREATE TABLE IF NOT EXISTS `profils` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement` int(11) DEFAULT NULL,
  `domaine_id` int(10) UNSIGNED NOT NULL,
  `contrat_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_domaine_id_foreign` (`domaine_id`),
  KEY `users_contrat_id_foreign` (`contrat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `description`, `departement`, `domaine_id`, `contrat_id`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Utilisateur 5', 'Name 5', 'En cours', 69, 4, 2, 'use5@gmail.fr', NULL, '$2y$10$QRapilMTsHvSQx5a5i.8/eLsAklnMyv65Id3mUS/9fux3iZC3TuAe', 'bEzrztLBjHfEfQWebWgeX8ml7bSAIm4goS0rhyFG0RC5xMjcL5YpHSyzDtH4', '2018-07-12 12:11:50', '2018-07-12 12:11:50'),
(12, 'Utilisateur 4', 'Name 4', 'En cours', 42, 2, 4, 'use4@gmail.fr', NULL, '$2y$10$7QuC7x/bpODP09diRNfJYeGeDCaHkYFxqVwWML4/X2.DBjPEzRXOy', 'eaiCCXESUQq8dlnNCp8uyAnlsQoEGZplRqf6ZmxZ9eoWMcqqRrB5EIAy7QQM', '2018-07-12 12:11:25', '2018-07-12 12:11:25'),
(9, 'Utilisateur 1', 'Name 1', NULL, 54, 2, 4, 'use1@gmail.fr', NULL, '$2y$10$VwnhpLEnf.1C3GghgsR.neqEMA/phXTl9eUmuIAtf7KojVTWJz1v2', 'hZQwnIVYB0Cb045YZBivk9yusKhYCSvPze0ssLqPeFGHsjm5qYeFfwgShzRr', '2018-07-12 12:08:26', '2018-07-12 12:09:16'),
(10, 'Utilisateur 2', 'Name 2', NULL, 69, 8, 3, 'use2@gmail.fr', NULL, '$2y$10$tQI9Zcw1mdGv5FQRktz3DuJwqBCRLkK/RKzpALnku46ov.emkxGe2', 'RkiYYpFCuH1N6a0RlXM2ZqqFu2jPp3UUJTKlQSFKj00CrgmnnalTyiERpRkZ', '2018-07-12 12:09:59', '2018-07-12 12:10:12'),
(11, 'Utilisateur 3', 'Name 3', NULL, 10, 5, 2, 'use3@gmail.fr', NULL, '$2y$10$RJChfYuBF58xY/DnrGF6fu0yrlqGp8aBRpttMC5ZgL5fpyHZAHpdG', 'E8uMuDodNvLxvyk0lLRyrGYFKJwmY33Jl1NI1SKxnxy05LLxHYGETu6KM91U', '2018-07-12 12:10:38', '2018-07-12 12:10:55'),
(14, 'Utilisateur 6', 'Name 6', 'En cours', 69, 4, 3, 'use6@gmail.fr', NULL, '$2y$10$RSOq846BpWV3JuJSZfdfv.jJopkNhWeNhfU6/KN10z3ZwKEvxwgVG', 'Vs9uxbrCJdufD6k1eHLVvs3H35Qxe4ytdCVbLD8vBU0WqSMgcX12oJBE8sxQ', '2018-07-12 12:12:14', '2018-07-12 12:12:14'),
(15, 'Utilisateur 7', 'Name 7', 'En cours', 10, 3, 4, 'use7@gmail.fr', NULL, '$2y$10$T52PKBh7LagKfP/FjNKElejsEkq1bIPmdzBen4S3U.wEX8KIsRHmW', 'kj8V1LClRkeUcQv9oygXWPniFJhO92YSN2BRHXzZQz8o4SPU5Oz8jCR5Olpy', '2018-07-12 12:12:33', '2018-07-12 12:12:33');

-- --------------------------------------------------------

--
-- Structure de la table `user_competence`
--

DROP TABLE IF EXISTS `user_competence`;
CREATE TABLE IF NOT EXISTS `user_competence` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `competence_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_competence_user_id_foreign` (`user_id`),
  KEY `user_competence_competence_id_foreign` (`competence_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
