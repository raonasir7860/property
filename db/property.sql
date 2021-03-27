-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2021 at 08:34 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `full_name`, `total`, `phone_number`, `card_number`, `email`, `city`, `area`, `address`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'salman', NULL, '03002309345', '54545454', 'salman@gmail.com', 'vehari', 'model town', 'house no 6', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (2).jpg', '2021-03-26 14:43:13', '2021-03-27 13:34:20'),
(2, 'sana', NULL, '03003434000', '3443434343', 'sana@gmail.com', 'sargodia', 'masjid town', 'house no 9', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download.jpg', '2021-03-27 13:36:12', '2021-03-27 13:36:12'),
(3, 'misbah', NULL, '03003400343', '3444343434343', 'misbah@gmail.com', 'multan', 'model town', 'house no 9', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (4).jpg', '2021-03-27 13:37:03', '2021-03-27 13:37:03'),
(4, 'iqra', NULL, '03004309567', '455454545454', 'iqra@gmail.com', 'karachi', 'model town', 'house no 9', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (3).jpg', '2021-03-27 13:37:52', '2021-03-27 13:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `phone_number`, `card_number`, `email`, `city`, `area`, `address`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'asad', '03003434000', '323343434934', 'asad@gmail.com', 'lahore', 'wapida town', 'house no 6', '<p><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</strong></p>', 'images (1).jpg', '2021-03-26 14:19:25', '2021-03-27 13:21:40'),
(2, 'ahmad', '03002334000', '2323545457676', 'ahmad@gmail.com', 'karachi', 'model town', 'house no 8', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'images (1).jpg', '2021-03-27 13:22:58', '2021-03-27 13:22:58'),
(3, 'aftab', '03003455430', '44343434343443', 'aftab@gmail.com', 'multan', 'muslam town', 'street no 9 ,house no 8', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (1).jpg', '2021-03-27 13:24:05', '2021-03-27 13:24:05'),
(4, 'zeeshan', '03003434000', '34434344343', 'zeeshan@gmail.com', 'islambad', 'model town', 'house no 9', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (1).jpg', '2021-03-27 13:26:25', '2021-03-27 13:26:25'),
(5, 'nasir', '03004300333', '4343434343', 'nasir@gmail.com', 'peshwer', 'gulbar town', 'house no 9', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'images (1).jpg', '2021-03-27 13:28:04', '2021-03-27 13:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_17_174111_create_customers_table', 1),
(5, '2021_03_17_181125_create_agents_table', 1),
(6, '2021_03_17_181420_create_plots_table', 1);

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
-- Table structure for table `plots`
--

DROP TABLE IF EXISTS `plots`;
CREATE TABLE IF NOT EXISTS `plots` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int UNSIGNED DEFAULT NULL,
  `agent_id` int UNSIGNED DEFAULT NULL,
  `p_number` int UNSIGNED NOT NULL,
  `block_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amont` int UNSIGNED NOT NULL,
  `advance_amount_customer` int UNSIGNED DEFAULT NULL,
  `c_method_pay` text COLLATE utf8mb4_unicode_ci,
  `advance_amount_date` text COLLATE utf8mb4_unicode_ci,
  `remaining_amount_customer` int UNSIGNED DEFAULT NULL,
  `remaining_amount_date` text COLLATE utf8mb4_unicode_ci,
  `total_commission` int UNSIGNED DEFAULT NULL,
  `advance_commission` int UNSIGNED DEFAULT NULL,
  `a_method_pay` text COLLATE utf8mb4_unicode_ci,
  `a_advance_amount_date` text COLLATE utf8mb4_unicode_ci,
  `remaining_commission` int UNSIGNED DEFAULT NULL,
  `remaining_commission_date` text COLLATE utf8mb4_unicode_ci,
  `resold` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `not_sold` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plots`
--

INSERT INTO `plots` (`id`, `customer_id`, `agent_id`, `p_number`, `block_number`, `p_area`, `p_rate`, `total_amont`, `advance_amount_customer`, `c_method_pay`, `advance_amount_date`, `remaining_amount_customer`, `remaining_amount_date`, `total_commission`, `advance_commission`, `a_method_pay`, `a_advance_amount_date`, `remaining_commission`, `remaining_commission_date`, `resold`, `not_sold`, `details`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, '3', '14 by 20', '1600', 20000, 10000, 'cheque', '2021-03-28', 10000, '2021-03-29', 2000, 1500, 'cash', '2021-03-28', 500, '2021-04-02', NULL, 'sold', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'images (1).jpg', '2021-03-27 13:40:37', '2021-03-27 14:16:06'),
(3, 2, 2, 2, '1', '14 by 20', '1000', 5000, 4000, 'cash', '2021-04-01', 1000, '2021-04-02', 100, 80, 'cheque', '2021-04-01', 20, '2021-04-03', NULL, 'sold', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (9).jpg', '2021-03-27 13:42:21', '2021-03-27 13:42:21'),
(4, 3, 3, 3, '9', '20 by 20', '30', 7000, 7000, 'cash', '2021-04-02', 0, '2021-04-03', 200, 200, 'cash', '2021-03-31', 0, '2021-04-03', NULL, 'sold', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (6).jpg', '2021-03-27 13:49:11', '2021-03-27 14:15:28'),
(5, 4, 4, 4, '3', '20 by 15', '2000', 60000, 60000, 'cash', '2021-04-03', 1000, '2021-04-09', 900, 700, 'cash', '2021-04-03', 200, '2021-04-09', NULL, 'sold', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'images.png', '2021-03-27 13:51:39', '2021-03-27 13:51:39'),
(6, 5, 4, 5, '4', '19 by 13', '3000', 90000, 90000, 'cash', '2021-04-15', 0, '2021-04-02', 54, 20, 'cash', '2021-03-31', 0, '2021-03-13', NULL, 'sold', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue,</p>', 'download (9).jpg', '2021-03-27 13:53:52', '2021-03-27 14:12:27'),
(7, NULL, NULL, 6, '4', '20 by 12', '2000', 5000, NULL, 'cheque', NULL, NULL, NULL, NULL, NULL, 'cheque', NULL, NULL, NULL, NULL, 'not_sold', NULL, 'checkup_2.png', '2021-03-27 14:26:50', '2021-03-27 14:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali@gmail.com', NULL, '$2y$10$jnbsmdAz9k4cBEhNt14Pie8wBUHRE4ElUa3eoLD61seRcL83WQlri', 'checkup_1.png', 'uPOVvY3ujsekffxmOhsE6zljL4FkAEcIg4z4oqyfDWOwogaSgJQcXmavjNKj', '2021-03-25 16:18:08', '2021-03-27 13:11:15'),
(2, 'sana', 'sana@gmail.com', NULL, '$2y$10$y4/AO/QQp4GIpplgAZnYcOuhpji3VTRtdPuAzoy2Njeql02plbCh.', 'checkup_2.png', NULL, '2021-03-25 16:19:12', '2021-03-26 15:40:37'),
(4, 'admin admin', 'admin@admin.com', NULL, '$2y$10$BPPIVHHBWJI1CiBHHK3ys.91Pr0zKXhXlJHTg/BIWt7akrVm67ZS6', 'download (4).jpg', NULL, '2021-03-27 13:55:52', '2021-03-27 13:55:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
