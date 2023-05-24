-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 01:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `code`, `product_id`, `product_name`, `product_cost`, `product_qty`, `total_amount`, `created_at`, `updated_at`) VALUES
(28, 'cruW', '3', 'lapsi Achar', '300', '0', '0', '2022-11-17 10:04:43', '2022-11-17 10:04:43'),
(29, 'cruW', '3', 'lapsi Achar', '300', '2', '600', '2022-11-17 10:05:05', '2022-11-17 10:05:05'),
(30, 'bc6H', '4', 'Akbare khursani Achar', '400', '1', '400', '2022-11-17 10:11:09', '2022-11-17 10:11:09'),
(31, 'OyGn', '2', 'Mix Achar', '250', '1', '250', '2022-11-22 02:23:49', '2022-11-22 02:23:49'),
(32, 'D0Sj', '2', 'Mix Achar', '250', '1', '250', '2022-11-25 02:44:52', '2022-11-25 02:44:52'),
(33, 'RWHM', '2', 'Mix Achar', '250', '0', '0', '2022-11-25 02:49:13', '2022-11-25 02:49:13'),
(34, 'RWHM', '3', 'lapsi Achar', '300', '1', '300', '2022-11-25 02:49:37', '2022-11-25 02:49:37'),
(35, 'RWHM', '2', 'Mix Achar', '250', '1', '250', '2022-11-25 03:09:47', '2022-11-25 03:09:47'),
(36, 'c3VK', '2', 'Mix Achar', '250', '1', '250', '2022-11-25 03:18:04', '2022-11-25 03:18:04'),
(37, 'aGSA', '2', 'Mix Achar', '250', '1', '250', '2022-11-27 00:01:42', '2022-11-27 00:01:42'),
(38, '9cpS', '4', 'Akabare khursani achar', '400', '1', '400', '2022-11-28 04:18:02', '2022-11-28 04:18:02'),
(39, '9cpS', '3', 'lapsi Achar', '300', '1', '300', '2022-11-28 04:35:55', '2022-11-28 04:35:55'),
(40, '9cpS', '2', 'Mix Achar', '250', '1', '250', '2022-11-28 04:36:23', '2022-11-28 04:36:23'),
(41, 'mvmT', '10', '8848', '1800', '1', '1800', '2022-11-29 02:15:18', '2022-11-29 02:15:18'),
(42, 'mvmT', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 02:31:31', '2022-11-29 02:31:31'),
(43, 'BRo1', '7', 'old-darwar', '3000', '1', '3000', '2022-11-29 03:06:03', '2022-11-29 03:06:03'),
(44, 'BRo1', '10', '8848', '1800', '1', '1800', '2022-11-29 03:46:21', '2022-11-29 03:46:21'),
(45, 'Toxj', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 04:00:15', '2022-11-29 04:00:15'),
(46, 'EqmW', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 04:08:36', '2022-11-29 04:08:36'),
(48, 'ZlP0', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 04:25:52', '2022-11-29 04:25:52'),
(52, 'ULPh', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 04:35:07', '2022-11-29 04:35:07'),
(53, 'ULPh', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 04:36:37', '2022-11-29 04:36:37'),
(54, 'kW5k', '2', 'Mix Achar', '250', '1', '250', '2022-11-29 10:54:25', '2022-11-29 10:54:25'),
(55, 'kivz', '4', 'Akabare khursani achar', '400', '1', '400', '2022-11-29 10:55:53', '2022-11-29 10:55:53'),
(56, 'kivz', '3', 'lapsi Achar', '300', '1', '300', '2022-11-29 11:33:47', '2022-11-29 11:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'achar item', NULL, '2022-02-15 18:15:00', '2022-08-14 18:15:00'),
(8, 'neha', NULL, '2022-07-26 04:24:56', '2022-07-26 04:24:56'),
(10, 'veg items', NULL, '2022-07-26 05:07:09', '2022-07-26 05:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_24_094816_create_categories_table', 2),
(7, '2022_07_26_055805_create_products_table', 3),
(8, '2022_07_28_070622_create_carts_table', 4),
(10, '2022_07_31_074320_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tole_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `first_name`, `last_name`, `address`, `tole_city`, `mobile_number`, `order_note`, `grand_total`, `payment_type`, `payment_status`, `delivery_status`, `payment_id`, `payer_id`, `created_at`, `updated_at`) VALUES
(6, 'aCPY', 'neha', 'chand', 'bagbazar', 'kathamandu', '98913637', 'thanks for delicious food', '234', 'COD', 'N', 'N', NULL, NULL, '2022-11-14 09:38:23', '2022-11-14 09:38:23'),
(7, '4bGI', 'suzu', 'dhungel', 'ktm', 'golfutar', '768327648', 'thank for yummy food', '120', 'COD', 'N', 'N', NULL, NULL, '2022-11-16 05:09:24', '2022-11-16 05:09:24'),
(9, 'bc6H', 'nisha', 'kc', 'ktm', 'bagbazr', '6575473', 'Thank you', '400', 'COD', 'N', 'N', NULL, NULL, '2022-11-17 10:12:01', '2022-11-17 10:12:01'),
(11, 'RWHM', 'neha', 'kc', 'kathmandu', 'bagbazr', '65798809', 'please be fast', '550', 'COD', 'N', 'N', NULL, NULL, '2022-11-25 03:13:37', '2022-11-25 03:13:37'),
(12, 'aGSA', 'suzu', 'dhungel', 'gfytd', 'golfutar', '35467687', 'please be fast', '250', 'COD', 'N', 'N', NULL, NULL, '2022-11-27 00:02:29', '2022-11-27 00:02:29'),
(13, 'mvmT', 'igu', 'hi', 'lbj', 'ugo', '9876543987', 'hjug', '2100', 'COD', 'N', 'N', NULL, NULL, '2022-11-29 02:51:15', '2022-11-29 02:51:15'),
(14, 'BRo1', 'sjdh bsdf', 'jsb djf', 'js bdjsdf', 'sdjf b', '231231', 'sdjf sdkf', '3000', 'PayPal', 'Y', 'N', 'PAYID-MOC5DFQ1JM99391R7748053D', 'LKJ6A8D9MCKYY', '2022-11-29 03:24:40', '2022-11-29 03:55:57'),
(15, 'BRo1', 'sjdh bsdf', 'jsb djf', 'js bdjsdf', 'sdjf b', '231231', 'sdjf sdkf', '3000', 'PayPal', 'Y', 'N', 'PAYID-MOC5DFQ1JM99391R7748053D', 'LKJ6A8D9MCKYY', '2022-11-29 03:25:14', '2022-11-29 03:55:57'),
(16, 'BRo1', 'ishwor', 'chalise', 'pokhara', 'srijanachowk', '98560383589', '234234', '4800', 'PayPal', 'Y', 'N', 'PAYID-MOC5DFQ1JM99391R7748053D', 'LKJ6A8D9MCKYY', '2022-11-29 03:46:55', '2022-11-29 03:55:57'),
(17, 'Toxj', 'muna', 'gautam', 'pokhara', 'golfutar', '9806797796', 'dfghjk dtryuio', '300', 'PayPal', 'Y', 'N', 'PAYID-MOC5JWA5JR12543T9023192F', 'LKJ6A8D9MCKYY', '2022-11-29 04:00:57', '2022-11-29 04:01:23'),
(18, 'EqmW', 'neha', 'chad', 'gfytd', 'ugo', '9087654', 'dfghjkl', '300', 'PayPal', 'Y', 'N', 'PAYID-MOC5NTI9FX75971P2824580J', 'LKJ6A8D9MCKYY', '2022-11-29 04:09:18', '2022-11-29 04:09:36'),
(19, 'bBLX', 'jsdfj', 'fjhdf', 'jhsdasj', 'sjdhfbsjdf', '4234', '234234', '1800', 'PayPal', 'Y', 'N', 'PAYID-MOC5PGQ9V7500251K084152M', 'LKJ6A8D9MCKYY', '2022-11-29 04:12:36', '2022-11-29 04:13:11'),
(20, 'ZlP0', 'j skdf', 'jsd f', 'sjdf', 'ksjdf', '9856038358', 'sdfsdf', '300', 'PayPal', 'Y', 'N', 'PAYID-MOC5VSQ4YP85035N6903101Y', 'LKJ6A8D9MCKYY', '2022-11-29 04:26:19', '2022-11-29 04:26:58'),
(22, 'Qpav', 'dxfcghj', 'fghjk', 'fhjkl', 'fghjkl', '9806797796', 'dgfhjkl fchgjkl', '600', 'PayPal', 'Y', 'N', 'PAYID-MOC5ZMQ0LV9262651204302V', 'LKJ6A8D9MCKYY', '2022-11-29 04:32:51', '2022-11-29 04:34:44'),
(23, 'Qpav', 'dxfcghj', 'fghjk', 'fhjkl', 'fghjkl', '9806797796', 'dgfhjkl fchgjkl', '0', 'PayPal', 'Y', 'N', 'PAYID-MOC5ZMQ0LV9262651204302V', 'LKJ6A8D9MCKYY', '2022-11-29 04:34:28', '2022-11-29 04:34:44'),
(24, 'kW5k', 'vxcbvb', 'rwetrht', 'ergsthd', 'taersthd', '435', 'fergsd fhgnf', '250', 'COD', 'N', 'N', NULL, NULL, '2022-11-29 10:55:24', '2022-11-29 10:55:24'),
(25, 'kivz', 'WEFARGSsADFSD', 'FG', 'EGHN', 'EDFV23', '23457E5', 'FSGB', '400', 'PayPal', 'Y', 'N', 'PAYID-MODD6TQ71H03135AF3250822', 'LKJ6A8D9MCKYY', '2022-11-29 10:56:19', '2022-11-29 11:43:11'),
(26, 'kivz', 'zerxtcyvuib', 'xtcvbkj', 'tcuvybi', '4sd56f78g9h', '5678', 'gvbnk', '700', 'PayPal', 'Y', 'N', 'PAYID-MODD6TQ71H03135AF3250822', 'LKJ6A8D9MCKYY', '2022-11-29 11:35:11', '2022-11-29 11:43:11');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `detail`, `cost`, `photo`, `created_at`, `updated_at`) VALUES
(2, '10', 'Mix Achar', ' Testy mix achar', '250', 'mix.jpg', '2022-07-26 05:16:31', '2022-07-28 09:48:34'),
(3, '10', 'lapsi Achar', 'sdf bsajfbasjdf', '300', 'Lapsi.jpg', '2022-07-26 05:42:36', '2022-07-28 09:49:27'),
(4, '8', 'Akabare khursani achar', 'achar', '400', 'akabare.jpg', '2022-07-28 09:50:42', '2022-09-25 03:49:52'),
(5, '8', 'votka', 'beb.', '1000', 'votka.jpg', '2022-11-14 04:55:12', '2022-11-14 04:55:12'),
(7, '12', 'old-darwar', 'drink', '3000', 'old.jpg', '2022-02-15 18:15:00', '2022-08-14 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
