-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2020 at 04:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidstarmodels`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `applicationid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othernames` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `health_issues` tinyint(1) NOT NULL DEFAULT '0',
  `health_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vital_state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bust` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hips` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_othernames` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `applications_image_id_index` (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicationid`, `image_id`, `surname`, `othernames`, `age`, `health_issues`, `health_details`, `nationality`, `state`, `city`, `address`, `vital_state`, `school_name`, `school_class`, `height`, `bust`, `waist`, `hips`, `question1`, `question2`, `question3`, `question4`, `question5`, `parent_surname`, `parent_othernames`, `parent_mobile`, `parent_email`, `parent_address`, `payment_details`, `paid`, `created_at`, `updated_at`) VALUES
(5, '', 7, 'Xeddddd', 'xedddd', 4, 1, 'ffff', 'nigeria', 'georgia', 'rivers', 'address', 'rrr', 'school name', 'school class', 'heught', 'bust', 'waist', 'hips', 'dddddddddddd', 'dddddddddd', 'ddddddddddddddd', 'ddddddddddddddd', 'dddddddddd', 'ddddddd', 'dddddd', 'ddddddd', 'www@email.com', 'wwwwwwww', 'wwwwwwwww', 0, '2019-11-17 12:38:40', '2019-11-17 12:38:40'),
(6, '', 8, 'Xeddddd', 'xedddd', 4, 1, 'ffff', 'nigeria', 'georgia', 'rivers', 'address', 'rrr', 'school name', 'school class', 'heught', 'bust', 'waist', 'hips', 'dddddddddddd', 'dddddddddd', 'ddddddddddddddd', 'ddddddddddddddd', 'dddddddddd', 'ddddddd', 'dddddd', 'ddddddd', 'www@email.com', 'wwwwwwww', 'wwwwwwwww', 0, '2019-11-17 12:41:16', '2019-11-17 12:41:16'),
(7, '', 9, 'Neutron', 'xedddd', 4, 1, 'ffff', 'nigeria', 'georgia', 'rivers', 'address', 'rrr', 'school name', 'school class', 'heught', 'bust', 'waist', 'hips', 'dddddddddddd', 'dddddddddd', 'ddddddddddddddd', 'ddddddddddddddd', 'dddddddddd', 'ddddddd', 'dddddd', 'ddddddd', 'www@email.com', 'wwwwwwww', 'wwwwwwwww', 0, '2019-11-19 20:34:45', '2019-11-19 21:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, '1573819367AdobeStock_35124379_Preview.jpeg', '2019-11-15 11:02:47', '2019-11-15 11:02:47'),
(2, '1573819968AdobeStock_35124379_Preview.jpeg', '2019-11-15 11:12:49', '2019-11-15 11:12:49'),
(3, '1573820296AdobeStock_35124379_Preview.jpeg', '2019-11-15 11:18:16', '2019-11-15 11:18:16'),
(4, '15739974505797a92bdd0895057c8b4a67-750-563.jpg', '2019-11-17 12:30:50', '2019-11-17 12:30:50'),
(5, '15739976325797a92bdd0895057c8b4a67-750-563.jpg', '2019-11-17 12:33:52', '2019-11-17 12:33:52'),
(6, '15739977835797a92bdd0895057c8b4a67-750-563.jpg', '2019-11-17 12:36:23', '2019-11-17 12:36:23'),
(7, '15739979205797a92bdd0895057c8b4a67-750-563.jpg', '2019-11-17 12:38:40', '2019-11-17 12:38:40'),
(8, '15739980765797a92bdd0895057c8b4a67-750-563.jpg', '2019-11-17 12:41:16', '2019-11-17 12:41:16'),
(9, '1574199283WhatsApp Image 2019-10-07 at 3.25.38 PM.jpeg', '2019-11-19 20:34:44', '2019-11-19 20:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `lmdnapplications`
--

DROP TABLE IF EXISTS `lmdnapplications`;
CREATE TABLE IF NOT EXISTS `lmdnapplications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `applicationid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othernames` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `health_issues` tinyint(1) NOT NULL DEFAULT '0',
  `health_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vital_state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bust` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hips` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_othernames` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lmdnapplications_image_id_index` (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lmdnapplications`
--

INSERT INTO `lmdnapplications` (`id`, `applicationid`, `image_id`, `surname`, `othernames`, `age`, `health_issues`, `health_details`, `nationality`, `state`, `city`, `address`, `vital_state`, `school_name`, `school_class`, `height`, `bust`, `waist`, `hips`, `question1`, `question2`, `question3`, `question4`, `question5`, `parent_surname`, `parent_othernames`, `parent_mobile`, `parent_email`, `parent_address`, `payment_details`, `paid`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Neutron', 'xedddd', 5, 0, NULL, 'nigeria', 'Lagos', 'Lagos', 'Jakande, Osapa London', 'rrr', 'school name', 'school class', 'heught', 'bust', 'waist', 'hips', 'dddddddddddd', 'dddddddddd', 'ddddddddddddddd', 'ddddddddddddddd', 'dddddddddd', 'ddddddd', 'dddddd', 'ddddddd', 'xeddtech@gmail.com', 'wwwwwwww', 'wwwwwwwww', 0, '2020-01-12 15:20:47', '2020-01-12 15:20:47');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_14_125545_create_applications_table', 1),
(5, '2019_11_14_134018_create_images_table', 1),
(6, '2020_01_11_150710_create_lmdnapplications_table', 2);

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'kidstarmodels@gmail.com', NULL, '$2y$12$3AYOg5kMFs1PpE/dupepkeEx3c8F6OIPZTldAhYSh1Me6w651WymS', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
