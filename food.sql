-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 jan. 2021 à 20:00
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `email_verified_at`, `password`, `adresse`, `tele`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'SARA', 'ahlam.motich@outlook.fr', NULL, '$2y$10$awgO1SYecTEFWN2rRlfG4eWLpGxs8fxJsAJqRC2mHuhhOLmtnqHz.', '02 LAMHANECH TETOUAN', '06989585807', NULL, '2020-12-18 18:25:28', '2020-12-18 18:25:28');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_13_020030_create_clients_table', 1),
(5, '2020_12_13_020041_create_restaus_table', 1),
(6, '2020_12_13_144305_create_plats_table', 1),
(7, '2020_12_13_144319_create_publications_table', 1),
(8, '2020_12_13_144330_create_panniers_table', 1),
(9, '2020_12_17_112820_create_reservations_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `panniers`
--

DROP TABLE IF EXISTS `panniers`;
CREATE TABLE IF NOT EXISTS `panniers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_plat` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NV',
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NT',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `panniers`
--

INSERT INTO `panniers` (`id`, `created_at`, `updated_at`, `id_plat`, `id_client`, `etat`, `statut`) VALUES
(53, '2021-01-01 17:49:50', '2021-01-01 17:49:50', 10, 4, 'NV', 'NT'),
(52, '2021-01-01 17:49:31', '2021-01-01 17:49:31', 10, 4, 'V', 'NT'),
(49, '2020-12-28 13:30:03', '2020-12-28 13:30:03', 7, 4, 'V', 'NT'),
(50, '2020-12-28 13:30:07', '2020-12-28 13:30:07', 12, 4, 'V', 'T'),
(51, '2021-01-01 17:49:27', '2021-01-01 17:49:27', 10, 4, 'V', 'NT'),
(56, '2021-01-01 17:50:46', '2021-01-01 17:50:46', 24, 4, 'NV', 'NT'),
(55, '2021-01-01 17:50:15', '2021-01-01 17:50:15', 14, 4, 'NV', 'NT'),
(54, '2021-01-01 17:50:00', '2021-01-01 17:50:00', 35, 4, 'NV', 'NT'),
(48, '2020-12-28 13:30:00', '2020-12-28 13:30:00', 10, 4, 'V', 'NT');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

DROP TABLE IF EXISTS `plats`;
CREATE TABLE IF NOT EXISTS `plats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_plat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double(8,2) NOT NULL,
  `n_calories` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'E',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `created_at`, `updated_at`, `intitule`, `type_plat`, `prix`, `n_calories`, `image`, `description`, `disp`) VALUES
(10, '2020-12-18 18:49:05', '2020-12-18 18:49:05', 'Le burger au falafel', 'Plats principaux', 30.00, 230.00, '20201218194905.jpg', 'Tomate, oignon, de pois chiches', 'E'),
(9, '2020-12-18 18:46:12', '2020-12-18 18:46:12', 'Nems', 'À-côtés', 15.00, 100.00, '20201218194612.webp', 'vermicelles,champignons noirs', 'NE'),
(8, '2020-12-18 18:41:30', '2020-12-18 18:41:30', 'Rouleaux de printemps(5pieces)', 'À-côtés', 20.00, 75.00, '20201218194130.jpg', 'mangue,avocat,carottes,de chou rouge', 'E'),
(7, '2020-12-18 18:36:23', '2020-12-18 18:36:23', 'Burger végétarien à la betterave', 'Plats principaux', 40.00, 250.00, '20201218193622.jpg', 'betterave,quinoa,oeufs,flocons d’avoine', 'E'),
(11, '2020-12-18 18:52:54', '2020-12-18 18:52:54', 'Le burger au quinoa', 'Plats principaux', 30.00, 250.00, '20201218195254.jpg', 'Tomate, oignon, salade, riz semi-complet', 'E'),
(12, '2020-12-18 18:54:55', '2020-12-18 18:54:55', 'Le burgers aux légumes du soleil', 'Plats principaux', 30.00, 170.00, '20201218195455.jpg', 'Tomate, oignon, salade,aubergines, de blé complet', 'E'),
(13, '2020-12-18 19:00:20', '2020-12-18 19:00:20', 'SALADE GOURMANDE', 'Entrées', 45.00, 100.00, '20201218200020.jpg', 'carottes,chou-rave,betterave rouge,tomates, botte de radis,courgette,concombre,oignon rouge,avocat', 'E'),
(14, '2020-12-18 19:02:30', '2020-12-18 19:02:30', 'Salade thaïlandaise', 'Entrées', 45.00, 100.00, '20201218200230.jpg', 'Carotte,Courgette,Poivron rouge,Barquette de sucrines', 'E'),
(15, '2020-12-18 19:05:54', '2020-12-18 19:05:54', 'Salade caesar', 'Entrées', 30.00, 34.00, '20201218200554.webp', 'salade romaine,escalopes,de parmesan,tomates cerise,oignon', 'E'),
(16, '2020-12-18 19:09:08', '2020-12-18 19:09:08', 'Salade Thai au quinoa', 'Entrées', 30.00, 100.00, '20201218200908.jpg', 'Quinoa,Poivrons,Chou rouge,Carottes,Beurre de cacahuète,Gingembre,', 'E'),
(17, '2020-12-18 19:13:53', '2020-12-18 19:13:53', 'Soupe mexicaine épicée', 'Soupes', 40.00, 70.00, '20201218201353.jpg', 'haricot,soupe huile de pépins de raisins,tomate', 'E'),
(18, '2020-12-18 19:15:10', '2020-12-18 19:15:10', 'soupe marocaine', 'Soupes', 20.00, 100.00, '20201218201510.jpg', 'hrira', 'E'),
(19, '2020-12-18 19:16:50', '2020-12-18 19:16:50', 'Soupe thaï', 'Soupes', 35.00, 100.00, '20201218201650.jpg', 'd’huile de canola,oignon rouge,branche de citronnelle,gingembre,carotte', 'E'),
(20, '2020-12-18 19:18:38', '2020-12-18 19:18:38', 'Soupe de tofu', 'Soupes', 30.00, 100.00, '20201218201838.jpg', 'bouillon de légumes, mélange 5 épices,chou chinois, carotte,soja', 'E'),
(21, '2020-12-18 19:22:54', '2020-12-18 19:22:54', 'Bolognaise', 'Plats principaux', 40.00, 100.00, '20201218202254.jpg', 'Gousses d\'ail,tofu,soupe d\'huile d\'olive,Spaghetti,Parmesan', 'E'),
(22, '2020-12-18 19:24:15', '2020-12-18 19:24:15', 'Spaghettis', 'Plats principaux', 35.00, 250.00, '20201218202415.jpg', 'spaghettis,carottes,courgette, poivron', 'E'),
(23, '2020-12-18 19:26:45', '2020-12-18 19:26:45', 'Boulettes d\'aubergines', 'Plats principaux', 35.00, 100.00, '20201218202645.jpg', 'aubergines,oignon,Tomate', 'E'),
(24, '2020-12-18 19:29:15', '2020-12-18 19:29:15', 'CIDRE DE POMME', 'Boissons', 18.00, 12.00, '20201218202915.jpg', 'POMME', 'E'),
(25, '2020-12-18 19:31:16', '2020-12-18 19:31:16', 'CAFÉ', 'Boissons', 15.00, 33.00, '20201218203116.jpg', 'CAFÉ', 'E'),
(26, '2020-12-18 19:31:53', '2020-12-18 19:31:53', 'CHOCOLAT CHAUD', 'Boissons', 16.00, 33.00, '20201218203153.jpg', 'CHOCOLAT CHAUD', 'E'),
(27, '2020-12-18 19:34:23', '2020-12-18 19:34:23', 'Jus de gingembre', 'Boissons', 20.00, 12.00, '20201218203423.jpg', 'ananas,gingembre', 'E'),
(28, '2020-12-18 19:35:20', '2020-12-18 19:35:20', 'Jus ananas', 'Boissons', 22.00, 33.00, '20201218203520.jpg', 'ananas', 'E'),
(29, '2020-12-18 19:36:34', '2020-12-18 19:36:34', 'Jus d\'orange', 'Boissons', 15.00, 12.00, '20201218203634.jpg', 'orange', 'E'),
(30, '2020-12-18 19:37:12', '2020-12-18 19:37:12', 'jus de carottes', 'Boissons', 15.00, 33.00, '20201218203711.jpg', 'carottes', 'E'),
(31, '2020-12-18 19:38:22', '2020-12-18 19:38:22', 'Jus de melon', 'Boissons', 15.00, 33.00, '20201218203822.jpg', 'melon', 'E'),
(32, '2020-12-18 19:39:07', '2020-12-18 19:39:07', 'Jus de pitaya', 'Boissons', 30.00, 33.00, '20201218203907.jpg', 'pitaya', 'NE'),
(33, '2020-12-18 19:40:17', '2020-12-18 19:40:17', 'Jus de pitaya', 'Boissons', 30.00, 33.00, '20201218204017.jpg', 'pitaya', 'E'),
(34, '2020-12-18 19:43:13', '2020-12-18 19:43:13', 'Smoothie banane et avocat', 'Boissons', 20.00, 33.00, '20201218204313.jpg', 'banane ,avocat', 'E'),
(35, '2020-12-18 19:44:11', '2020-12-18 19:44:11', 'Verrines à la crème de marrons', 'Desserts', 35.00, 100.00, '20201218204411.jpg', 'Verrines à la crème de marrons', 'E'),
(36, '2020-12-18 19:45:12', '2020-12-18 19:45:12', 'Fine Dining Chocolate', 'Desserts', 45.00, 100.00, '20201218204512.jpg', 'Fine Dining Chocolate', 'E'),
(37, '2020-12-18 19:46:23', '2020-12-18 19:46:23', 'Cherry Cream Cheese', 'Desserts', 45.00, 100.00, '20201218204623.jpg', 'Cherry Cream Cheese', 'E'),
(38, '2020-12-18 19:48:08', '2020-12-18 19:48:08', 'Raspberry Cream Cheese', 'Desserts', 45.00, 100.00, '20201218204808.jpg', 'Raspberry Cream Cheese', 'E'),
(39, '2020-12-18 19:49:05', '2020-12-18 19:49:05', 'creme dessert oreo', 'Desserts', 45.00, 100.00, '20201218204905.jpg', 'oreo', 'E'),
(40, '2020-12-18 19:50:27', '2020-12-18 19:50:27', 'Pizza dessert au brie', 'Desserts', 45.00, 230.00, '20201218205027.jpg', 'chocolat,framboises, chocolat', 'E'),
(41, '2020-12-18 19:52:14', '2020-12-18 19:52:14', 'Sandwich', 'Sandwichs', 15.00, 60.00, '20201218205213.jpg', 'Poivre du moulin Parmesan,aubergine', 'E'),
(42, '2020-12-18 19:53:27', '2020-12-18 19:53:27', 'Sandwich', 'Sandwichs', 20.00, 33.00, '20201218205327.jpg', 'Carotte,Chou blanc,Coeur de laitue,Moutarde', 'E'),
(43, '2020-12-18 19:55:00', '2020-12-18 19:55:00', 'Sandwich', 'Sandwichs', 15.00, 33.00, '20201218205500.jpg', 'pois chiches,oignon rouge', 'E'),
(44, '2020-12-28 12:27:57', '2020-12-28 12:27:57', 'SALADE', 'Entrées', 15.00, 122.00, '20201228132756.jpg', 'SALADE', 'E'),
(45, '2020-12-28 13:31:49', '2020-12-28 13:31:49', 'SALADE', 'Entrées', 30.00, 100.00, '20201228143149.jpg', 'SALADE', 'E');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `created_at`, `updated_at`, `image`, `desc`) VALUES
(1, '2020-12-16 12:01:47', '2020-12-16 12:01:47', '20201216130147.jpg', 'réduction de 15%'),
(4, '2020-12-28 13:32:09', '2020-12-28 13:32:09', '20201228143209.jpg', 'recherche femme de ménage');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_client` int(11) NOT NULL,
  `repat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_r` date NOT NULL,
  `nbr` int(11) NOT NULL,
  `temps` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NV',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `created_at`, `updated_at`, `id_client`, `repat`, `date_r`, `nbr`, `temps`, `etat`) VALUES
(9, '2020-12-28 13:30:49', '2020-12-28 13:30:49', 4, 'Petit déjeuner', '2020-12-31', 4, '7:30 AM', 'V'),
(8, '2020-12-28 12:34:39', '2020-12-28 12:34:39', 4, 'déjeuner', '2020-12-25', 5, '2:34 PM', 'V'),
(6, '2020-12-28 10:43:36', '2020-12-28 10:43:36', 4, 'déjeuner', '2020-12-25', 4, '12:43 PM', 'V'),
(7, '2020-12-28 12:25:21', '2020-12-28 12:25:21', 4, 'Petit déjeuner', '2020-12-25', 3, '9:25 AM', 'NV');

-- --------------------------------------------------------

--
-- Structure de la table `restaus`
--

DROP TABLE IF EXISTS `restaus`;
CREATE TABLE IF NOT EXISTS `restaus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `restaus_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `restaus`
--

INSERT INTO `restaus` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahlam', 'ahlam.motich@outlook.fr', NULL, '$2y$10$t/VuJaqKUTERXLIZF93M9OIOXLQfqmWLRkpu.dQKgNYUAvlP0lV0i', NULL, '2020-12-16 11:44:47', '2020-12-16 11:44:47');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
