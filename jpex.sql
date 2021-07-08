-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 02:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpex`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_countries`
--

CREATE TABLE `assign_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.jpg',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_countries`
--

INSERT INTO `assign_countries` (`id`, `country_id`, `company_name`, `url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'edited gg', 'www.evaly.comgg', '1624795293.jpg', 1, '2021-06-27 11:12:55', '2021-06-27 12:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `bdecommerces`
--

CREATE TABLE `bdecommerces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.jpg',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bdecommerces`
--

INSERT INTO `bdecommerces` (`id`, `name`, `url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Evaly', 'www.evaly.com', '1624781654.png', 1, '2021-06-27 08:14:14', '2021-06-27 08:14:14'),
(2, 'Eit Evaly', 'www.eit.com', '1624785272.jpg', 0, '2021-06-27 08:24:03', '2021-06-27 09:14:33'),
(4, 'admin edited', 'www.evaly.comghfghfh edited', '1624785181.png', 1, '2021-06-27 09:12:34', '2021-06-27 09:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `bodies`
--

CREATE TABLE `bodies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bodies`
--

INSERT INTO `bodies` (`id`, `title`, `sub_title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'bnghbn', 'mohsin', '1618221799.jpg', 'active', '2021-04-12 04:03:19', '2021-04-12 04:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 1, '2021-04-13 22:14:09', '2021-04-13 22:39:29'),
(2, 'Pakistan', 1, '2021-04-13 23:24:32', '2021-04-13 23:24:32'),
(3, 'India', 1, '2021-04-13 22:14:24', '2021-04-13 23:20:44'),
(4, 'Sri Lanka', 1, '2021-04-13 22:14:30', '2021-04-13 22:14:30'),
(5, 'Nepal', 1, '2021-04-13 22:14:35', '2021-04-13 22:14:35'),
(6, 'Afganistan', 1, '2021-04-13 22:14:42', '2021-04-13 22:14:42'),
(7, 'Malaysia', 1, '2021-04-13 22:14:52', '2021-04-13 22:14:52'),
(8, 'Australia', 1, '2021-04-13 22:14:58', '2021-04-13 22:14:58'),
(10, 'United States of America', 1, '2021-04-13 22:15:12', '2021-04-13 22:15:12'),
(11, 'Algeria', 1, '2021-04-13 22:15:56', '2021-06-13 09:47:47'),
(12, 'Hong Kong', 1, '2021-06-07 10:38:14', '2021-06-07 10:38:14'),
(13, 'Netherlands', 1, '2021-06-13 09:47:20', '2021-06-13 09:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `country_creates`
--

CREATE TABLE `country_creates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_creates`
--

INSERT INTO `country_creates` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Canada', 1, '2021-06-27 10:03:59', '2021-06-27 10:03:59'),
(3, 'England hghjhj', 1, '2021-06-27 10:04:27', '2021-06-27 11:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `address`, `mobile1`, `mobile2`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'plashbari bazar', '01715486265', '027855389', 'mohsr895@gmail.com', 'active', '2021-04-12 05:13:05', '2021-04-12 05:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile1` int(11) NOT NULL,
  `mobile2` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `mobile1`, `mobile2`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 1715486265, 1715486265, 'mohsinsikder895@gmail.com', 'inactive', '2021-04-12 02:19:21', '2021-04-12 03:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Mohsin Sikder', 'http://localhost/EasyMart/public/admin/category', 'active', '2021-04-12 23:03:15', '2021-04-12 23:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '1618198610.jpg', 'active', '2021-04-11 21:33:34', '2021-04-11 21:44:43'),
(4, '1618205310.jpg', 'active', '2021-04-11 23:28:30', '2021-04-11 23:28:30'),
(5, '1621482744.png', 'active', '2021-05-20 03:52:24', '2021-05-20 03:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_07_154330_create_countries_table', 1),
(5, '2021_04_11_071539_create_services_table', 1),
(6, '2021_04_12_013840_create_sliders_table', 2),
(7, '2021_04_12_014738_create_logos_table', 2),
(8, '2021_04_12_070414_create_headers_table', 3),
(9, '2021_04_12_094333_create_bodies_table', 4),
(10, '2021_04_12_100516_create_patners_table', 5),
(11, '2021_04_12_105441_create_footers_table', 6),
(12, '2021_04_13_044109_create_links_table', 7),
(13, '2021_04_13_050929_create_quick_rate_images_table', 8),
(14, '2021_04_15_070341_create_travelers_table', 9),
(15, '2021_04_20_083939_create_prices_table', 10),
(16, '2021_04_22_062916_create_online_books_table', 11),
(17, '2021_04_28_080102_create_tracks_table', 12),
(18, '2021_05_18_141935_create_vendor_customers_table', 13),
(19, '2021_05_23_122148_create_offer_pages_table', 14),
(20, '2021_05_24_105922_create_orders_table', 15),
(21, '2021_06_27_130747_create_bdecommerces_table', 16),
(22, '2021_06_27_153722_create_country_creates_table', 17),
(23, '2021_06_27_161856_create_assign_countries_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `offer_pages`
--

CREATE TABLE `offer_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_pages`
--

INSERT INTO `offer_pages` (`id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I have a Master\'s degree in Software engineering and&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">over 07 years</span>&nbsp;of market experience. I specialize in Frontend like Bootstrap, HTML/CSS, jQuery, or Backend PHP, Laravel, CodeIgniter. I can fulfill your all needs according to your requirements we do not use any ready-made CMS for any custom website and provide you all&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">professional code</span>&nbsp;with&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">all security measures</span>.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">There are a lot of sellers who offer a basic website in $200 or $300 but I will provide you your basic website of&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">7 pages in $500</span>&nbsp;because I invest my quality time and will provide you all professional code or take care of all security measures of your website and provide you 30 days technical support.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">I will</span></p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide 30 days of technical support</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide professional and secure code</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Do maintenance of your website on a monthly basis or task basis according to your need.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">100% money back if I do not fulfill your requirements</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Please Note</p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;start before final documentation of all the work.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;accept any extra work after the order placement.</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I am at your service so feel free to place an order now.</p>', 0, '2021-05-23 06:28:33', NULL),
(2, 2, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I have a Master\'s degree in Software engineering and&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">over 07 years</span>&nbsp;of market experience. I specialize in Frontend like Bootstrap, HTML/CSS, jQuery, or Backend PHP, Laravel, CodeIgniter. I can fulfill your all needs according to your requirements we do not use any ready-made CMS for any custom website and provide you all&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">professional code</span>&nbsp;with&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">all security measures</span>.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">There are a lot of sellers who offer a basic website in $200 or $300 but I will provide you your basic website of&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">7 pages in $500</span>&nbsp;because I invest my quality time and will provide you all professional code or take care of all security measures of your website and provide you 30 days technical support.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">I will</span></p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide 30 days of technical support</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide professional and secure code</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Do maintenance of your website on a monthly basis or task basis according to your need.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">100% money back if I do not fulfill your requirements</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Please Note</p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;start before final documentation of all the work.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;accept any extra work after the order placement.</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I am at your service so feel free to place an order now.</p>', 0, '2021-05-23 06:43:30', NULL),
(3, 2, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I have a Master\'s degree in Software engineering and&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">over 07 years</span>&nbsp;of market experience. I specialize in Frontend like Bootstrap, HTML/CSS, jQuery, or Backend PHP, Laravel, CodeIgniter. I can fulfill your all needs according to your requirements we do not use any ready-made CMS for any custom website and provide you all&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">professional code</span>&nbsp;with&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">all security measures</span>.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">There are a lot of sellers who offer a basic website in $200 or $300 but I will provide you your basic website of&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">7 pages in $500</span>&nbsp;because I invest my quality time and will provide you all professional code or take care of all security measures of your website and provide you 30 days technical support.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">I will</span></p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide 30 days of technical support</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide professional and secure code</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Do maintenance of your website on a monthly basis or task basis according to your need.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">100% money back if I do not fulfill your requirements</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Please Note</p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;start before final documentation of all the work.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;accept any extra work after the order placement.</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I am at your service so feel free to place an order now.</p>', 0, '2021-05-23 06:46:12', NULL),
(4, 2, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I have a Master\'s degree in Software engineering and&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">over 07 years</span>&nbsp;of market experience. I specialize in Frontend like Bootstrap, HTML/CSS, jQuery, or Backend PHP, Laravel, CodeIgniter. I can fulfill your all needs according to your requirements we do not use any ready-made CMS for any custom website and provide you all&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">professional code</span>&nbsp;with&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">all security measures</span>.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">There are a lot of sellers who offer a basic website in $200 or $300 but I will provide you your basic website of&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">7 pages in $500</span>&nbsp;because I invest my quality time and will provide you all professional code or take care of all security measures of your website and provide you 30 days technical support.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">I will</span></p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide 30 days of technical support</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Provide professional and secure code</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">Do maintenance of your website on a monthly basis or task basis according to your need.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">100% money back if I do not fulfill your requirements</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Please Note</p><ul style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 5px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style: none none; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;start before final documentation of all the work.</li><li style=\"margin: 0px 0px 0px 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; list-style: outside none disc;\">I&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px; font-weight: 700;\">DO NOT</span>&nbsp;accept any extra work after the order placement.</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">I am at your service so feel free to place an order now.</p>', 1, '2021-05-23 08:06:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `online_books`
--

CREATE TABLE `online_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_kg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipper_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_com_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_com_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receive_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `notification` int(11) DEFAULT 0,
  `track_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_books`
--

INSERT INTO `online_books` (`id`, `user_id`, `from`, `to`, `location`, `service_type`, `object_type`, `width`, `height`, `length`, `weight_kg`, `ship_details`, `price`, `shipper_name`, `ship_com_name`, `ship_mobile`, `ship_email`, `ship_zip`, `ship_city`, `ship_state`, `ship_address`, `ship_country`, `receive_name`, `receive_com_name`, `receive_mobile`, `receive_email`, `receive_zip`, `receive_city`, `receive_state`, `receive_address`, `receive_country`, `status`, `notification`, `track_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'Bangladesh', 'India', 'International', 'Export', 'Document 1', '7', '8', '9', '0.5', 'abc', '600', 'atikur Rahman', 'jpex.com.bd', '01631618174', 'atikcseuu40@gmail.com', '1234', 'dhaka', 'Bangladesh', 'abcd', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'India', 3, 0, 'JP#643654335', '2019-04-26 06:49:49', NULL),
(2, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'Document 1', '12', '12', '12', '1.7', 'abcd', '1700', 'Arif Onoy', 'Jpex.com.bd', '0163618174', 'arifonoy05@gmail.com', '1234', 'dhaka', 'bangladesh', 'abcdef', 'Bangladesh', 'Leo Messi', 'Fedx', '66788996', 'leomessi@gmail.com', '7788', 'wembley', 'USA', 'abcdef', 'United States of America', 0, 1, 'JP#520413992', '2020-04-27 22:58:06', '2021-04-28 02:46:27'),
(3, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'Document 2', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 3, 1, 'JP#900716698', '2020-05-09 04:25:20', '2021-05-18 05:28:29'),
(4, 5, 'Sri Lanka', 'Bangladesh', 'International', 'Import', 'Document 2', '20', '4', '3', '0.2', 'abc', '700', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 3, 0, 'JP#179635444', '2021-05-09 04:27:53', '2021-05-09 04:40:12'),
(5, 5, 'Bangladesh', 'Malaysia', 'International', 'Export', 'Document 3', '12', '12', '12', '1.7', 'abc', '4000', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Malaysia', 3, 0, 'JP#20441244', '2021-05-09 04:29:00', '2021-05-09 04:39:58'),
(6, 3, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 1, 1, 'JP#681626459', '2021-05-19 04:11:42', '2021-05-19 05:52:50'),
(7, 3, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'abc', 'abc', '1234567', 'abc@gmail.com', '123', 'dhaka', 'Bangladesh', 'acbd', 'Bangladesh', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 1, 'JP#768577390', '2021-05-19 04:19:56', '2021-05-19 05:30:52'),
(8, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 0, 0, 'JP#725295272', '2021-05-25 04:20:03', NULL),
(9, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#926646869', '2021-05-25 04:29:38', NULL),
(10, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#939169447', '2021-05-25 04:30:32', NULL),
(11, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#30962878', '2021-05-25 04:35:55', NULL),
(12, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#618398574', '2021-05-25 04:52:04', NULL),
(13, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#496825811', '2021-05-25 05:20:46', NULL),
(14, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#103935637', '2021-05-25 05:21:26', NULL),
(15, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#535199479', '2021-05-25 05:28:51', NULL),
(16, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'alex man', 'Bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'Bangladesh', 'alexxx man', 'bominoexp', '01234567', 'bomino@gmail.com', '33344', 'mumbai', 'india', 'acasc', 'United States of America', 0, 0, 'JP#881474436', '2021-05-25 05:31:31', NULL),
(17, 2, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'atik', 'eit', '014235477', 'atik@gmail.com', '1230', 'dhaka', 'bd', 'adfgbdfge12424', 'Bangladesh', 'arif', 'eit', '12345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 0, 'JP#548244961', '2021-05-30 08:37:33', NULL),
(18, 2, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 0, 'JP#479542226', '2021-05-30 08:48:25', NULL),
(19, 2, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 0, 'JP#549057487', '2021-05-30 08:52:45', NULL),
(20, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 1, 'JP#174615793', '2021-05-30 09:03:28', '2021-05-30 09:16:45'),
(21, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 0, 'JP#331970703', '2021-06-07 09:22:16', NULL),
(22, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'atik', 'eit', '012345678', 'tarikmolla8@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 1, 1, 'JP#123294325', '2021-06-07 09:28:23', '2021-06-13 09:37:17'),
(23, 5, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'masud', 'JPEX', '01631618174', 'atikcseuu40@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 2, 1, 'JP#783022149', '2021-06-07 10:30:52', '2021-06-13 09:38:40'),
(24, 42, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'Ma', 'JPEX', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 0, 'JP#792871565', '2021-06-13 09:24:54', NULL),
(25, 42, 'Bangladesh', 'United States of America', 'International', 'Export', 'document1', '12', '12', '12', '1.7', 'abc', '1700', 'Ma', 'JPEX', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'Bangladesh', 'arif', 'eit', '012345678', 'arif@gmail.com', '1234', 'MNU', 'USA', 'sdfsf34543', 'United States of America', 0, 1, 'JP#197624235', '2021-06-13 09:25:31', '2021-06-13 09:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `track_id`, `name`, `email`, `phone`, `amount`, `address`, `transaction_id`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', '10', 'Customer Address', '60ab3581a3595', 'BDT', 'Pending', NULL, NULL),
(2, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', '10', 'Customer Address', '60ab374e4af9c', 'BDT', 'Pending', NULL, NULL),
(3, NULL, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', '10', 'Customer Address', '60ab3790abe6d', 'BDT', 'Processing', NULL, NULL),
(4, NULL, 'Atikur Rahman', 'atikurrahman@gmail.com', '1631618174', '10', 'kathgara,Savar-Dhaka', '60ac83a8a6809', 'BDT', 'Pending', NULL, NULL),
(5, NULL, 'Atikur Rahman', 'atikurrahman@gmail.com', '1631618174', '10', 'kathgara,Savar-Dhaka', '60ac83b5849b7', 'BDT', 'Pending', NULL, NULL),
(6, NULL, 'Atikur Rahman', 'atikurrahman@gmail.com', '1631618174', '10', 'kathgara,Savar-Dhaka', '60ac83bb44d90', 'BDT', 'Pending', NULL, NULL),
(7, NULL, 'Atikur Rahman', 'atikurrahman@gmail.com', '1631618174', '10', 'kathgara,Savar-Dhaka', '60ac83ca6f495', 'BDT', 'Pending', NULL, NULL),
(8, NULL, 'Atikur Rahman', 'atikrawin35@gmail.com', '1631618174', '10', 'kathgara,Savar-Dhaka', '60ac840f5f746', 'BDT', 'Pending', NULL, NULL),
(9, NULL, 'Atikur Rahman', 'atikrawin35@gmail.com', '1631618174', '1700', 'kathgara,Savar-Dhaka', '60ac8481baf75', 'BDT', 'Processing', NULL, NULL),
(10, 'JP#535199479', 'Atikur Rahman', 'atikcseuu40@gmail.com', '1631618174', '1700', 'kathgara,Savar-Dhaka', '60ac8b4941dda', 'BDT', 'Canceled', NULL, NULL),
(11, 'JP#881474436', 'Atikur Rahman', 'atikrawin35@gmail.com', '1631618174', '1700', 'kathgara,Savar-Dhaka', '60ac8bd080b7f', 'BDT', 'Processing', NULL, NULL),
(12, 'JP#548244961', 'atik', 'atik@gmail.com', '1631618174', '1700', 'afsdgfsdgs', '60b34f0347ec2', 'BDT', 'Processing', NULL, NULL),
(13, 'JP#479542226', 'arif', 'arif@gmail.com', '012345678', '1700', 'sdfsf34543', '60b3516e8549c', 'BDT', 'Processing', NULL, NULL),
(14, 'JP#549057487', 'arif', 'arif@gmail.com', '012345678', '1700', 'sdfsf34543', '60b3526cf02b8', 'BDT', 'Processing', NULL, NULL),
(15, 'JP#174615793', 'arif', 'arif@gmail.com', '012345678', '1700', 'sdfsf34543', '60b354f023078', 'BDT', 'Processing', NULL, NULL),
(16, 'JP#331970703', 'Zahid Jaman', 'arif@gmail.com', '1631618175', '1700', 'sdfsf34543', '60bde57c2f3f4', 'BDT', 'Processing', NULL, NULL),
(17, 'JP#123294325', 'Atikur Rahman', 'atikur@gmail.com', '01631618174', '1700', 'kathgara savar', '60bde6e82c3ab', 'BDT', 'Processing', NULL, NULL),
(18, 'JP#783022149', 'Atikur Rahman', 'atikur@gmail.com', '01631618174', '1700', 'kathgara savar', '60bdf5b36f3ab', 'BDT', 'Processing', NULL, NULL),
(19, 'JP#197624235', 'arif', 'arif@gmail.com', '012345678', '1700', 'sdfsf34543', '60c5cf4240d48', 'BDT', 'Processing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patners`
--

CREATE TABLE `patners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patners`
--

INSERT INTO `patners` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'rahat', '1618223225.jpg', 'active', '2021-04-12 04:27:05', '2021-04-12 04:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_kg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `from`, `to`, `service_type`, `object_type`, `weight_kg`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'India', 'Export', 'document2', '0.1', '100', '2021-04-20 03:31:55', '2021-04-20 03:31:55'),
(2, 'Bangladesh', 'Sri Lanka', 'Export', 'document2', '0.1', '200', '2021-04-20 03:51:37', '2021-04-20 03:51:37'),
(3, 'Pakistan', 'Sri Lanka', 'Export', 'document2', '0.1', '300', '2021-04-20 22:33:43', '2021-04-20 22:33:43'),
(4, 'Bangladesh', 'Nepal', 'Import', 'document3', '0.1', '500', '2021-04-20 22:37:10', '2021-04-20 22:37:10'),
(5, 'Sri Lanka', 'Bangladesh', 'Import', 'document2', '0.2', '700', '2021-04-20 22:37:44', '2021-04-20 22:37:44'),
(6, 'Bangladesh', 'Malaysia', 'Export', 'document3', '1.7', '4000', '2021-04-20 22:39:14', '2021-04-20 22:42:52'),
(7, 'Bangladesh', 'India', 'Export', 'document1', '0.5', '600', '2021-04-20 23:39:56', '2021-04-20 23:39:56'),
(8, 'Bangladesh', 'United States of America', 'Export', 'document1', '1.7', '1700', '2021-04-20 23:40:20', '2021-04-20 23:40:20'),
(9, 'Bangladesh', 'India', 'Export', 'document2', '0.3', '300', '2021-05-11 04:51:09', '2021-05-11 04:51:09'),
(10, 'Bangladesh', 'Sri Lanka', 'Export', 'document2', '1.8', '8000', '2021-06-13 09:49:24', '2021-06-13 09:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `quick_rate_images`
--

CREATE TABLE `quick_rate_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quick_rate_images`
--

INSERT INTO `quick_rate_images` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '1618291456.jpg', 'inactive', '2021-04-12 23:22:46', '2021-04-12 23:26:32'),
(3, '1621482636.png', 'active', '2021-05-20 03:50:36', '2021-05-20 03:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, '1618131477.jpg', 'Mohsin', 'zscdsfcd', 'inactive', '2021-04-11 02:57:58', '2021-06-27 12:07:37'),
(5, '1618137491.jpg', 'rahat', 'sdfcdsfv', 'active', '2021-04-11 02:59:06', '2021-06-27 12:07:38'),
(6, '1618131569.jpg', 'Mohsin', 'werfegtfr', 'active', '2021-04-11 02:59:29', '2021-06-27 12:07:43'),
(7, '1618131627.jpg', 'Mohsin', 'asdxasdc', 'active', '2021-04-11 03:00:27', '2021-06-27 12:07:42'),
(8, '1618131772.jpg', 'Mohsin', 'asdc', 'active', '2021-04-11 03:02:53', '2021-04-11 03:02:53'),
(9, '1618202047.jpg', 'Mohsin', 'wefdefggtrt', 'active', '2021-04-11 22:34:07', '2021-04-11 22:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'mohsin sikder Atikur Rahaman', 'mohsin', '1618205406.jpg', 'zsdccvd df', 'inactive', '2021-04-11 23:30:06', '2021-04-15 02:59:21'),
(7, 'abc', 'abcdef', '1618477059.jpg', 'jvkdfjsvdfvdfgvdvdv', 'active', '2021-04-15 02:57:40', '2021-04-15 02:57:40'),
(8, 'hello', 'jfdsjsdsdksdfjjjss', '1618477143.jpg', 'sdjkfdkfsdkcsduk', 'active', '2021-04-15 02:59:03', '2021-04-15 02:59:03'),
(9, 'hi', 'jkvsdvjsdvs', '1618477158.jpg', 'sdsddsdsjsdfgsdkdsd', 'active', '2021-04-15 02:59:18', '2021-04-15 02:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `track_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `user_id`, `track_id`, `title`, `description`, `delivery_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'JP#520413992', 'Order confirmed', 'abc', '2021-04-28', 0, '2021-04-28 02:27:59', NULL),
(3, 2, 'JP#520413992', 'Picked by courier', 'abcd', '2021-04-29', 0, '2021-04-28 02:28:15', NULL),
(4, 2, 'JP#520413992', 'On the way', 'Delivery attempt consigning premises closed', '2021-04-30', 0, '2021-06-13 09:45:41', '2021-06-13 09:45:41'),
(6, 3, 'JP#643654335', 'completed', 'its all ready reached', '2021-05-19', 0, '2021-05-19 06:00:24', NULL),
(7, 2, 'JP#783022149', 'pickup', 'dsjkdskhg', '2021-06-07', 0, '2021-06-07 10:42:44', NULL),
(8, 2, 'JP#783022149', 'on the way', 'vdsvsdv', '2021-06-08', 0, '2021-06-07 10:44:52', NULL),
(9, 2, 'JP#783022149', 'tranjit', 'dvdfsgvb', '2021-06-09', 0, '2021-06-07 10:45:17', NULL),
(10, 2, 'JP#783022149', 'processing', 'nfghhjo', '2021-06-13', 0, '2021-06-13 09:39:59', NULL),
(11, 2, 'JP#783022149', 'tranjit', 'sfudsgd', '2021-06-14', 0, '2021-06-13 09:41:47', '2021-06-13 09:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `travelers`
--

CREATE TABLE `travelers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travelling_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travel_ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_guarantor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travel_departure_cirtificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travelers`
--

INSERT INTO `travelers` (`id`, `name`, `email`, `mobile`, `permanent_address`, `travelling_address`, `passport`, `travel_ticket`, `nid`, `hotel_booking`, `address_number`, `local_guarantor`, `travel_departure_cirtificate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Atikur', 'atikur@gmail.com', '01760012664', 'abc', 'abc', 'tuhin_1618472913.jpg', 'tuhin_1618472913.jpg', 'tuhin_1618472913.jpg', 'tuhin_1618472913.jpg', 'abc', 'abc', 'photo_1618472913.jpg', 1, '2021-04-15 01:48:33', '2021-04-15 01:48:33'),
(2, 'asdd', 'dvs@gmail.com', '01631618174', 'dss', 'vvsvsd', 'photo_1618474106.jpg', 'jpex_1618474106.png', 'tuhin_1618474106.jpg', 'photo_1618474106.jpg', 'sdsdsdf', 'ffsfsfsfs', 'tuhin_1618474106.jpg', 1, '2021-04-15 02:08:26', '2021-04-15 02:08:26'),
(3, 'dssdf', 'atikrawin35@gmail.com', '01760012664', 'sdsvdsvv', 'fvdfvdfv', 'three_1618474389.jpg', 'two_1618474389.jpg', 'one_1618474389.jpg', 'jpex_1618474389.png', 'vdfvdvds', 'fdfdffdfdf', 'tuhin_1618474389.jpg', 1, '2021-04-15 02:13:09', '2021-04-15 02:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `isban` tinyint(4) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photo.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `vendor_id`, `name`, `email`, `phone`, `address`, `company`, `user_type`, `isban`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mohsin Sikhder', 'mohsinsikder895@gmail.com', '01715486264', 'plashbari bazar', 'online Business', 'user', 0, '2021-04-13 08:44:44', '$2y$10$WT0nY2O2mU./WoHEL6ICR.tzTD7vH1eRj/z2NZSXN2EZT6LRUkmFO', 'photo.jpg', NULL, '2021-01-14 02:03:35', '2021-04-14 02:03:35'),
(2, NULL, 'Atikur Rahman Tuhin', 'admin@gmail.com', '01760012664', 'kathgara', 'Essential Infotech Ltd', 'admin', 0, '2021-04-13 08:44:36', '$2y$10$ElRi9r3yCOupCkXDmK6MEuprt60I6jGjjzolWewZWfUtXMXL0sRtm', '2.jpg', NULL, '2021-05-13 07:46:43', '2021-04-13 04:35:56'),
(3, NULL, 'Atikur Rahman', 'atikcseuu40@gmail.com', '01760012664', 'kathgara', 'EIT', 'vendor', 0, '2021-04-13 08:44:39', '$2y$10$kBJvQHn3Az4UV/E1yFgkf.3rnCntbYsIKbd8BlvgGJpsQ8bRbjboS', 'photo.jpg', NULL, '2021-05-13 07:16:37', '2021-06-13 10:34:38'),
(5, NULL, 'Arif Onoy', 'arifonoy05@gmail.com', '01760012664', 'prottasa', 'Essential Infotech Ltd', 'user', 0, '2021-04-28 04:53:49', '$2y$10$jgV6w5uUNATcDCQ32fZ6nuV8ermlQJjQhv0GC5IlOIDGdx.5OzQii', 'photo.jpg', NULL, '2021-12-28 07:46:34', '2021-04-27 22:51:34'),
(6, NULL, 'Dr. Zachariah Bartell', 'uschneider@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'Zl3HAip7dW', '2021-01-09 08:19:03', '2021-05-09 08:16:53'),
(7, NULL, 'Alena Rath', 'mclaughlin.jamison@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', '4rEsTS6O3C', '2021-11-09 08:16:53', '2021-05-09 08:16:53'),
(8, NULL, 'Sienna Renner', 'vandervort.angie@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'cfIEo9uRAZ', '2021-05-09 08:16:53', '2021-05-09 08:16:53'),
(9, NULL, 'Prof. Mike Stracke IV', 'simonis.mitchel@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'WflPj0ggZv', '2021-04-09 08:16:53', '2021-05-09 08:16:53'),
(10, NULL, 'Durward Schoen', 'fgerhold@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'ggk7HLLJP9', '2021-05-09 08:16:53', '2021-05-09 08:16:53'),
(11, NULL, 'Dorothea Watsica', 'awhite@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'P5Dptminwr', '2021-03-09 08:16:53', '2021-05-09 08:16:53'),
(12, NULL, 'Jimmie Pacocha', 'ursula.wyman@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'Soyh8WbQKS', '2021-03-09 08:16:53', '2021-05-09 08:16:53'),
(13, NULL, 'Jordi Beatty', 'angelita.johnston@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'XJZ5EUQLyS', '2021-05-09 08:16:53', '2021-05-09 08:16:53'),
(14, NULL, 'Conner Reinger', 'amalia.klocko@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'Bp9DOCDCZ8', '2021-02-09 08:16:53', '2021-05-09 08:16:53'),
(15, NULL, 'Elza Homenick', 'rebeca.roberts@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'dioWjDWoPu', '2021-02-09 08:16:53', '2021-05-09 08:16:53'),
(16, NULL, 'Barney Hamill', 'ivah.kling@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'JVnX7vgpjE', '2021-03-09 08:16:53', '2021-05-09 08:16:53'),
(17, NULL, 'Kianna Hammes', 'eleanora.white@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'tx9gOg7ew3', '2021-05-09 08:16:53', '2021-05-09 08:16:53'),
(18, NULL, 'Aleen Mertz', 'thomas42@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'yoPOSlmer9', '2021-10-09 08:16:54', '2021-05-09 08:16:54'),
(19, NULL, 'Casimer Kulas', 'casimer.terry@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'QtIwCn1td6', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(20, NULL, 'Dr. Abner Howe Sr.', 'stoltenberg.jakob@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', '3BilkXKhkr', '2021-10-09 08:16:54', '2021-05-09 08:16:54'),
(21, NULL, 'Keaton Jaskolski V', 'hirthe.estella@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'bP710YtSkA', '2021-09-09 08:16:54', '2021-05-09 08:16:54'),
(22, NULL, 'Gerald Dibbert', 'lola.gottlieb@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'b9U35FaZan', '2021-08-09 08:16:54', '2021-05-09 08:16:54'),
(23, NULL, 'Vada Gerhold', 'federico.fay@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'XvcgRdVd16', '2021-07-09 08:16:54', '2021-05-09 08:16:54'),
(24, NULL, 'Prof. Uriel Swaniawski IV', 'lschuppe@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', '0DNwsgwt1A', '2021-06-09 08:16:54', '2021-05-09 08:16:54'),
(25, NULL, 'Esperanza Skiles', 'zlarkin@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', '2VMKygqRiK', '2021-12-09 08:16:54', '2021-05-09 08:16:54'),
(26, NULL, 'Miss Beth Hettinger III', 'germaine.bogan@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'Y6EGszFycH', '2021-12-09 08:16:54', '2021-05-09 08:16:54'),
(27, NULL, 'Payton Dicki', 'ywolff@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'k53eDmxxaM', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(28, NULL, 'Alexa Kovacek I', 'giuseppe03@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'HHdf2I4UHX', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(29, NULL, 'Mr. Eli Crona DDS', 'tito33@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'j2H5apBYd5', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(30, NULL, 'Juwan Dooley', 'raven77@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'HDQIYwuacQ', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(31, NULL, 'Kaia Wintheiser', 'brody.moore@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', '3VSxVRzaSS', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(32, NULL, 'Adalberto Aufderhar', 'helen.mraz@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'fO5nt2mBYO', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(33, NULL, 'Adalberto Rutherford', 'ebert.yesenia@example.org', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'kLNOqATJoh', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(34, NULL, 'Dr. Bailee Blick', 'janice15@example.net', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'MqKXYGxeNA', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(35, NULL, 'Adelbert Smith I', 'rath.geovanni@example.com', NULL, NULL, NULL, 'user', 0, '2021-05-09 08:16:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'photo.jpg', 'wrV4BfFeoq', '2021-05-09 08:16:54', '2021-05-09 08:16:54'),
(36, 3, 'Tariq', 'tariqmolla8@gmail.com', '01818778899', 'uttara', 'EIT', 'user', 0, NULL, '$2y$10$yaIw7tKKAM02aRH3WAtB4e6iTtOaVX6CwJcAM4HYDGfSxS7TswmXC', '36.jpg', NULL, '2021-05-18 10:20:22', '2021-05-18 10:20:22'),
(41, 3, 'Anis Ahmed', 'anis@gmail.com', '01715626364', 'uttara', 'EIT', 'user', 0, NULL, '$2y$10$ZzTj/f6beBrouIt8xuxnZuV2fsPmS7Fa3kZ6yV9JUBlgZwCMrHESq', 'photo.jpg', NULL, '2021-05-18 09:33:31', NULL),
(42, NULL, 'Zahid Jaman', 'jpexpress09@gmail.com', '01312619181', 'mohakhali', 'JP Express', 'user', 0, '2021-06-13 09:18:48', '$2y$10$ZY5.rZ0/xpOB3FJK7tKVseFGlUSZjIIm8CCAyZrnpCZpFpVBlz4e6', '42.png', NULL, '2021-06-13 09:16:57', '2021-06-13 09:21:11'),
(43, NULL, 'Atikur Rahman', 'atikpaeit@gmail.com', '01631619181', NULL, NULL, 'vendor', 1, '2021-06-13 10:33:52', '$2y$10$u/52ZxGyuD0jP6Ntm3Yq9eMJzRFXfLwgc4VcRkbQH4aMN6RxEARGq', '43.png', NULL, '2021-06-13 10:32:02', '2021-06-13 10:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_customers`
--

CREATE TABLE `vendor_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photo.jpg',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_customers`
--

INSERT INTO `vendor_customers` (`id`, `vendor_id`, `name`, `phone`, `email`, `company`, `address`, `user_type`, `image`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Tariq Jaman', '01641617181', 'tariqmolla8@gmail.com', 'EIT', 'uttara', 'user', '1.jpg', '$2y$10$tBmpw2hd1jDUA8dlg4IEZ.J4QsHku59zZk9JW48St5EZqI3w1nCly', 0, '2021-05-18 08:52:44', '2021-05-18 08:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_countries`
--
ALTER TABLE `assign_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bdecommerces`
--
ALTER TABLE `bdecommerces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bodies`
--
ALTER TABLE `bodies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_creates`
--
ALTER TABLE `country_creates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_pages`
--
ALTER TABLE `offer_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_books`
--
ALTER TABLE `online_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patners`
--
ALTER TABLE `patners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_rate_images`
--
ALTER TABLE `quick_rate_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelers`
--
ALTER TABLE `travelers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor_customers`
--
ALTER TABLE `vendor_customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_countries`
--
ALTER TABLE `assign_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bdecommerces`
--
ALTER TABLE `bdecommerces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bodies`
--
ALTER TABLE `bodies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `country_creates`
--
ALTER TABLE `country_creates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `offer_pages`
--
ALTER TABLE `offer_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `online_books`
--
ALTER TABLE `online_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `patners`
--
ALTER TABLE `patners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quick_rate_images`
--
ALTER TABLE `quick_rate_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `travelers`
--
ALTER TABLE `travelers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `vendor_customers`
--
ALTER TABLE `vendor_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
