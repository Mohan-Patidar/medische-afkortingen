-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2021 at 04:29 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextige_cascode`
--

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

DROP TABLE IF EXISTS `expertises`;
CREATE TABLE IF NOT EXISTS `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(16, 'Ramu', '2021-02-01 01:38:01', '2021-02-04 00:03:15', '<h4 style=\"font-family: &quot;DM Sans&quot;, sans-serif; font-weight: 600; color: rgb(0, 0, 0); margin-bottom: 20px; font-size: 20px;\">Index en code zoek tips</h4><ul class=\"design-ul with-no-img\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none; padding-left: 0px; font-family: &quot;DM Sans&quot;, sans-serif; font-size: medium;\"><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 700;\">Geen exacte diagnose? Klik&nbsp;</span><a href=\"https://medische-afkortingen.nl/resources/CAScode_NCVB_2018.pdf\" target=\"_blank\">hier</a><span style=\"font-weight: 700;\">&nbsp;voor het totale overzicht</span></li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">A.</span>&nbsp;Aandoeningen, niet elders geclassificeerd (tip: A0, A1, A2, A3, A4, A6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">B.</span>&nbsp;Ziekten van bloed en bloedvormende organen (tip: B2, B5, B6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">C.</span>&nbsp;Ziekten van hartvaatstelsel (tip: C1, C2, C3, C5)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">D.</span>&nbsp;Ziekten van huid, subcutis en adnexen (tip: D1, D2, D3, D4, D5, D6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">E.</span>&nbsp;Endocriene ziekten (tip: E2, E6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">G.</span>&nbsp;Zwangerschap, bevalling en kraambed (tip: G6, G7, G8, G9)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">H.</span>&nbsp;Ziekten van oor en processus mastoideus (tip: H1, H2, H3, H5, H6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">L.</span>&nbsp;Ziekten van botspierstelsel en bindweefsel (tip: L1, L2, L3, L5, L6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">N.</span>&nbsp;Ziekten van zenuwstelsel (tip: N1, N2, N3, N4, N5, N6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">P.</span>&nbsp;Psychische aandoeningen en gedragsstoornissen (tip: P1, P6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">R.</span>&nbsp;Ziekten van ademhalingsstelsel (tip: R1, R2, R3, R4, R5, R6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">S.</span>&nbsp;Ziekten van spijsverteringsstelsel (tip: S1, S2, S3, S4, S5, S6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">U.</span>&nbsp;Ziekten van urogenitaal stelsel (tip: U1, U2, U3, U4, U5, U6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">V.</span>&nbsp;Ziekten van oog en adnexen (tip: V1, V2, V3, V5, V6)</li></ul>'),
(11, 'Heart', '2021-01-30 04:26:57', '2021-02-04 00:03:02', '<h4 style=\"font-family: &quot;DM Sans&quot;, sans-serif; font-weight: 600; color: rgb(0, 0, 0); margin-bottom: 20px; font-size: 20px;\">Index en code zoek tips</h4><ul class=\"design-ul with-no-img\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style-type: none; padding-left: 0px; font-family: &quot;DM Sans&quot;, sans-serif; font-size: medium;\"><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 700;\">Geen exacte diagnose? Klik&nbsp;</span><a href=\"https://medische-afkortingen.nl/resources/CAScode_NCVB_2018.pdf\" target=\"_blank\">hier</a><span style=\"font-weight: 700;\">&nbsp;voor het totale overzicht</span></li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">A.</span>&nbsp;Aandoeningen, niet elders geclassificeerd (tip: A0, A1, A2, A3, A4, A6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">B.</span>&nbsp;Ziekten van bloed en bloedvormende organen (tip: B2, B5, B6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">C.</span>&nbsp;Ziekten van hartvaatstelsel (tip: C1, C2, C3, C5)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">D.</span>&nbsp;Ziekten van huid, subcutis en adnexen (tip: D1, D2, D3, D4, D5, D6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">E.</span>&nbsp;Endocriene ziekten (tip: E2, E6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">G.</span>&nbsp;Zwangerschap, bevalling en kraambed (tip: G6, G7, G8, G9)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">H.</span>&nbsp;Ziekten van oor en processus mastoideus (tip: H1, H2, H3, H5, H6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">L.</span>&nbsp;Ziekten van botspierstelsel en bindweefsel (tip: L1, L2, L3, L5, L6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">N.</span>&nbsp;Ziekten van zenuwstelsel (tip: N1, N2, N3, N4, N5, N6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">P.</span>&nbsp;Psychische aandoeningen en gedragsstoornissen (tip: P1, P6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">R.</span>&nbsp;Ziekten van ademhalingsstelsel (tip: R1, R2, R3, R4, R5, R6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">S.</span>&nbsp;Ziekten van spijsverteringsstelsel (tip: S1, S2, S3, S4, S5, S6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">U.</span>&nbsp;Ziekten van urogenitaal stelsel (tip: U1, U2, U3, U4, U5, U6)</li><li style=\"position: relative; padding: 0px; margin-bottom: 15px;\"><span style=\"font-weight: 600; margin-right: 5px;\">V.</span>&nbsp;Ziekten van oog en adnexen (tip: V1, V2, V3, V5, V6)</li></ul>'),
(15, 'sss', '2021-02-01 01:05:13', '2021-02-04 00:29:02', 'Afagashrhrer');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_01_26_052237_add_lname_to_users', 2),
(8, '2021_01_26_052437_create_expertises_table', 3),
(9, '2021_01_26_052549_create_optgroups_table', 4),
(10, '2021_01_26_052707_create_shorts_table', 5),
(11, '2021_01_26_053159_add_description_to_expertises', 6),
(12, '2021_01_26_053255_create_titles_table', 7),
(13, '2021_01_27_052521_change_in_shorts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `optgroups`
--

DROP TABLE IF EXISTS `optgroups`;
CREATE TABLE IF NOT EXISTS `optgroups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ex_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `optgroups_ex_id_foreign` (`ex_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `optgroups`
--

INSERT INTO `optgroups` (`id`, `ex_id`, `name`, `created_at`, `updated_at`) VALUES
(40, 11, 'heart A', '2021-01-30 04:27:20', '2021-01-30 04:27:20'),
(41, 11, 'heart B', '2021-01-30 04:27:28', '2021-01-30 04:27:28'),
(42, 11, 'Heart Z', '2021-01-30 04:27:36', '2021-01-30 04:27:36'),
(43, 12, 'kidney A', '2021-01-30 04:27:43', '2021-01-30 04:27:43'),
(44, 12, 'Kid', '2021-01-30 04:27:49', '2021-01-30 04:27:49'),
(45, 15, 'sss', '2021-02-01 01:06:05', '2021-02-01 01:06:05'),
(46, 15, 'zzzzz', '2021-02-01 01:06:21', '2021-02-01 01:06:21'),
(47, 14, 'A', '2021-02-01 01:06:46', '2021-02-01 01:06:46'),
(48, 13, 'safafaa', '2021-02-01 01:38:24', '2021-02-01 01:38:24'),
(49, 16, 'afaa', '2021-02-01 01:38:29', '2021-02-01 01:38:29'),
(50, 14, 'af', '2021-02-01 01:38:34', '2021-02-01 01:38:34'),
(51, 14, 'vop', '2021-02-01 01:40:38', '2021-02-01 01:40:38'),
(52, 17, 'J--', '2021-02-01 01:41:25', '2021-02-01 01:41:25'),
(53, 11, 'L - Ziekten van botspierstelsel en bindweefsel', '2021-02-03 01:40:34', '2021-02-03 01:40:34'),
(54, 11, 'Monu', '2021-02-14 23:27:23', '2021-02-14 23:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
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
-- Table structure for table `shorts`
--

DROP TABLE IF EXISTS `shorts`;
CREATE TABLE IF NOT EXISTS `shorts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `opt_id` int(10) UNSIGNED DEFAULT NULL,
  `short_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shorts_opt_id_foreign` (`opt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shorts`
--

INSERT INTO `shorts` (`id`, `opt_id`, `short_code`, `value`, `description`, `created_at`, `updated_at`) VALUES
(22, 40, 'Haaaa', 'sds', 'sdss', '2021-01-30 04:28:02', '2021-01-30 04:28:02'),
(23, 40, 'Hbdffd', 'fdb', 'dfb', '2021-01-30 04:28:09', '2021-01-30 04:28:09'),
(26, 44, 'wggwwgw', 'ww', 'wegw', '2021-01-30 04:28:44', '2021-01-30 04:28:44'),
(27, 49, 'ssdg', 'sdg', 'sdg', '2021-02-01 01:38:44', '2021-02-01 01:38:44'),
(28, 46, 'sdgsd', 'sdgdsg', 'sgds', '2021-02-01 01:38:50', '2021-02-01 01:38:50'),
(29, 48, 'sdg', 'sdggds', 'sdgs', '2021-02-01 01:38:56', '2021-02-01 01:38:56'),
(30, 49, 'sgs', 's', 'sdgss', '2021-02-01 01:39:01', '2021-02-01 01:39:01'),
(31, 45, 'dsgdss', 'dgss', 'sdg', '2021-02-01 01:39:08', '2021-02-01 01:39:08'),
(34, 53, 'L100', 'ghfddgdghfd', 'hhfdhhd', '2021-02-03 01:40:52', '2021-02-03 01:40:52'),
(35, 49, 'ACB', 'rhheh', NULL, '2021-02-14 23:36:22', '2021-02-14 23:36:22'),
(36, 47, 'HCBQ', NULL, NULL, '2021-02-14 23:36:34', '2021-02-14 23:36:34'),
(37, NULL, 'ACB', 'gweg', 'wegg', '2021-02-14 23:51:58', '2021-02-14 23:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '2021-02-01 00:34:55'),
(2, 'Medical', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lname`) VALUES
(1, 'John', 'admin@admin.com', NULL, '$2y$10$4qH2tADvoyY3aQTswQCSxORHlfH6j3xN1HY0e1BywRloFOtIDvvmi', NULL, '2021-01-26 00:05:12', '2021-01-26 00:05:12', 'Deo'),
(2, 'Patrick', 'office@minebytes.com', NULL, '$2y$10$6asOvKimNGNdK1xbd4Cr4u/7yVe8KDGDZu6A1GAb7jmsslgpT.6HS', NULL, '2021-01-06 00:41:15', '2021-01-15 12:15:42', 'Hira'),
(3, 'Ram', 'patidarmohan259@gmail.com', NULL, '$2y$10$BAcfGfrND20wjvG.68kVoea4CCQ1fOp6A082.6qPlOEY4SfO00qg2', NULL, '2021-03-03 00:05:17', '2021-03-03 00:05:17', 'Patidar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
