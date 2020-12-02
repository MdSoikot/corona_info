-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2020 at 03:23 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona-info`
--

-- --------------------------------------------------------

--
-- Table structure for table `corona_update_bans`
--

CREATE TABLE `corona_update_bans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `today` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `important_videos`
--

CREATE TABLE `important_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2020_11_24_190933_create_slider_datails_table', 2),
(5, '2020_11_24_191005_create_corona_update_bans_table', 3),
(6, '2020_11_24_191038_create_important_videos_table', 3),
(7, '2020_11_24_191120_create_services_table', 3),
(8, '2020_11_24_203940_create_corona_update_bans_table', 4),
(9, '2020_11_24_204320_create_services_table', 5),
(10, '2020_11_24_204520_create_slider_datails_table', 6),
(11, '2020_11_24_204903_create_important_videos_table', 7),
(12, '2020_11_24_205131_create_services_table', 8);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_details` longtext COLLATE utf8mb4_unicode_ci,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_datails`
--

CREATE TABLE `slider_datails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Shakhawat Hosen', 'admin', 'mdshakhawathosen122@gmail.com', NULL, NULL, '$2y$10$IM8N.hkPqnn4EFemh35y0ejrV/l6h9iR/Tec6YOYW5U61oHi4jEZy', NULL, '2020-11-24 15:15:17', '2020-11-24 15:15:17'),
(20, 'test', 'backend_user', 'arifudsfsfddfnctg@gmail.com', NULL, NULL, '$2y$10$USmv7/FaYsP4xeAT8LPQeORhIKUOyNzEHGu77xkpLtFxBWKF6tdIi', NULL, '2020-11-29 15:13:48', '2020-11-29 15:13:48'),
(25, 'Nishat Rahman', 'user', 'nishat@gmail.com', NULL, NULL, '$2y$10$QgBdDc0Xr9j23oZgQAKBC.cern4HwPhGkW4htnTiRQEB9B3L5TGCe', NULL, '2020-12-01 06:08:56', '2020-12-01 06:08:56'),
(26, 'Imran Hosen', 'user', 'imranhshakil@gmail.com', '01500000000', NULL, '$2y$10$fNaOTXNeKryZsXrYGUdOM.EV.vH2vdT2222mLrkd0QCFUfAt6cnHO', NULL, '2020-12-01 06:10:31', '2020-12-01 06:10:31'),
(27, 'test', 'user', 'bromasfsdfsdfmun@gmail.com', '01500000000', NULL, '$2y$10$g/uAiX/cKtuq8hwVP3DEruwyLY6KKnLM/l8/GtwRAGem/ghRZxf3m', NULL, '2020-12-01 13:48:22', '2020-12-01 13:48:22'),
(28, 'sdfsd', 'user', 'nishsdfsdat@gmail.com', NULL, NULL, '$2y$10$5CqLjoYVhT.yMEGXIoPIgOTpOj/o4RJQuGC1Fv.CBQ4hk6ZKsGKcO', NULL, '2020-12-01 13:50:12', '2020-12-01 13:50:12'),
(29, 'fsdfs', 'user', 'sdfsfsdfsd@gmail.com', NULL, NULL, '$2y$10$4.JupAkiGdn22P1foAiw/ewcWmEjXMKTBnwviK3ufB/DtDIng7et6', NULL, '2020-12-01 13:52:59', '2020-12-01 13:52:59'),
(30, 'test', 'user', 'nissdfsdfhat@gmail.com', NULL, NULL, '$2y$10$hWG2TxlQNe/Fi2n5RmyN3eTfBqvBHN0hF.JX79eQzexPcpmWH.3iy', NULL, '2020-12-01 13:54:56', '2020-12-01 13:54:56'),
(31, 'test', 'user', 'nisdfsdfshat@gmail.com', NULL, NULL, '$2y$10$z1KveHXVHI6Z9vU9KGjk0eSFubcqMXdAyq.aLvErS/lGyGi5Cm86C', NULL, '2020-12-01 13:56:16', '2020-12-01 13:56:16'),
(32, 'Nishat Rahman', 'user', 'bromwer34reamun@gmail.com', NULL, NULL, '$2y$10$a94HY1iese2E3RGxxVfDRehWs1n57FkKLPv17Rvtq62Wd76iJlHsC', NULL, '2020-12-01 13:57:01', '2020-12-01 13:57:01'),
(33, 'dsfs', 'backend_user', 'bromsdsddfsdfamun@gmail.com', NULL, NULL, '$2y$10$fQa5tC6ybtycvsnFiEhAueME/B3Ir/Rq4S13xR/1u6zU7TsfVnmPy', NULL, '2020-12-01 14:05:59', '2020-12-01 14:05:59'),
(34, 'sdf', 'backend_user', 'brosfdfmamun@gmail.com', NULL, NULL, '$2y$10$Wj0zeZzNHJs8iH8xqHsGoOhJUmMbwHUZCKaH1IiJOsTkafR442QQu', NULL, '2020-12-01 14:06:26', '2020-12-01 14:06:26'),
(35, 'sdfsd', 'user', 'nishawc4334t@gmail.com', NULL, NULL, '$2y$10$/VccCVisrY1gpEaZWly9Z.7ek60Hz01a1soEyN8v2L8/ZVw1.Xn3G', NULL, '2020-12-01 14:10:53', '2020-12-01 14:10:53'),
(36, 'fsd', 'user', 'bromasdfmun@gmail.com', NULL, NULL, '$2y$10$CLpya3RsF/pBBdIaxsBXQuJM72D8KD7s.BjAg0AUCNdWyONFACYNq', NULL, '2020-12-01 14:13:54', '2020-12-01 14:13:54'),
(37, 'test', 'user', 'bromsdfsdfamun@gmail.com', '01500000000', NULL, '$2y$10$fe5WS9sH.rk2.AqKgw./d.MWh4HKtiqkiMHgXo.xzAqVB3.bXknJ.', NULL, '2020-12-02 09:21:10', '2020-12-02 09:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corona_update_bans`
--
ALTER TABLE `corona_update_bans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_videos`
--
ALTER TABLE `important_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_datails`
--
ALTER TABLE `slider_datails`
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
-- AUTO_INCREMENT for table `corona_update_bans`
--
ALTER TABLE `corona_update_bans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `important_videos`
--
ALTER TABLE `important_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_datails`
--
ALTER TABLE `slider_datails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
