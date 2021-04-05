-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2021 at 09:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaikara`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_trade_lead`
--

CREATE TABLE `buy_trade_lead` (
  `buy_trd_id` int(11) NOT NULL,
  `product` varchar(150) DEFAULT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `price_range` double(9,2) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `detls` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `valid_for` smallint(2) DEFAULT NULL,
  `trade_lead_catg` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `catg_mast`
--

CREATE TABLE `catg_mast` (
  `catg_id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `catg_name` varchar(150) DEFAULT NULL,
  `shrt_name` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `infor_policies`
--

CREATE TABLE `infor_policies` (
  `infr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_curre` text DEFAULT NULL,
  `delivery_terms` text DEFAULT NULL,
  `payment_method` text DEFAULT NULL,
  `spoken_lang` text DEFAULT NULL,
  `certification` text DEFAULT NULL,
  `escrow_service` tinyint(1) DEFAULT 0,
  `company_policy` text DEFAULT NULL,
  `pay_terms_method` text DEFAULT NULL,
  `terms_condition` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_28_063913_laratrust_setup_tables', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2021_03_31_061918_create_media_table', 3);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prdt_id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `brand` varchar(150) DEFAULT NULL,
  `catg_id` int(10) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `shrt_desc` varchar(200) DEFAULT NULL,
  `curr_id` smallint(2) DEFAULT NULL,
  `price` double(9,2) DEFAULT NULL,
  `is_terms` tinyint(1) DEFAULT 0,
  `sku_no` varchar(100) DEFAULT NULL,
  `deliv_method` text DEFAULT NULL,
  `pay_terms` varchar(255) DEFAULT NULL,
  `pay_method` text DEFAULT NULL,
  `country_code` int(3) DEFAULT NULL,
  `state_code` int(4) DEFAULT NULL,
  `city_code` int(7) DEFAULT NULL,
  `model_no` varchar(20) DEFAULT NULL,
  `ean_code` varchar(15) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `weight` int(5) DEFAULT NULL,
  `shape` varchar(20) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `material` smallint(3) DEFAULT NULL,
  `thickness` varchar(50) DEFAULT NULL,
  `size_range` mediumint(6) DEFAULT NULL,
  `packing_type` smallint(2) DEFAULT NULL,
  `no_per_inner` mediumint(6) DEFAULT NULL,
  `size_inner` mediumint(6) DEFAULT NULL,
  `inner_packing` smallint(2) DEFAULT NULL,
  `no_per_outer` mediumint(6) DEFAULT NULL,
  `size_outer` mediumint(6) DEFAULT NULL,
  `no_per_pallet` mediumint(6) DEFAULT NULL,
  `pallet_type` smallint(2) DEFAULT NULL,
  `certificates` varchar(255) DEFAULT NULL,
  `order_qunt` mediumint(8) DEFAULT NULL,
  `incoterms` smallint(2) DEFAULT NULL,
  `grp_prim_id` int(10) DEFAULT NULL,
  `grp_sec_id` int(10) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'Super Admin', 'User maintained all module', '2021-03-29 18:30:00', '2021-03-29 18:30:00'),
(2, 'admin', 'Admin', 'User manage site ', '2021-03-29 18:30:00', '2021-03-29 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sell_trade_lead`
--

CREATE TABLE `sell_trade_lead` (
  `sell_trd_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `detls` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `valid_for` smallint(2) DEFAULT NULL,
  `trade_lead_catg` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trade_production`
--

CREATE TABLE `trade_production` (
  `trade_pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prdt_capacity` varchar(20) DEFAULT NULL,
  `size_sqft` varchar(20) DEFAULT NULL,
  `lead_time_days` varchar(20) DEFAULT NULL,
  `maintaining` varchar(20) DEFAULT NULL,
  `export_per` smallint(2) DEFAULT NULL,
  `sales_volume` smallint(2) DEFAULT NULL,
  `office_size` smallint(2) NOT NULL,
  `export_market` smallint(2) DEFAULT NULL,
  `five_countries` varchar(250) DEFAULT NULL,
  `factory_loc` varchar(200) DEFAULT NULL,
  `nearest_port` varchar(150) DEFAULT NULL,
  `is_trade` tinyint(1) NOT NULL DEFAULT 0,
  `clients` text DEFAULT NULL,
  `major_prdt_sell` varchar(100) DEFAULT NULL,
  `major_prdt_buy` varchar(100) DEFAULT NULL,
  `main_prdt` varchar(200) DEFAULT NULL,
  `main_prdt1` varchar(200) DEFAULT NULL,
  `main_prdt2` varchar(200) DEFAULT NULL,
  `main_prdt3` varchar(200) DEFAULT NULL,
  `product_you_sell` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` smallint(2) NOT NULL,
  `comp_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `comp_sub_domain` varchar(253) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `buss_catg` tinyint(4) DEFAULT NULL,
  `reg_year` smallint(2) DEFAULT NULL,
  `personnel` smallint(2) DEFAULT NULL,
  `own_type` smallint(2) DEFAULT NULL,
  `certification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_url` int(11) DEFAULT NULL,
  `template_id` smallint(3) DEFAULT NULL,
  `template_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` smallint(2) DEFAULT NULL,
  `addr1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` int(3) DEFAULT NULL,
  `state_code` int(4) DEFAULT NULL,
  `city_code` int(7) DEFAULT NULL,
  `zip_code` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_terms` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'P',
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
-- Indexes for table `buy_trade_lead`
--
ALTER TABLE `buy_trade_lead`
  ADD PRIMARY KEY (`buy_trd_id`);

--
-- Indexes for table `catg_mast`
--
ALTER TABLE `catg_mast`
  ADD PRIMARY KEY (`catg_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infor_policies`
--
ALTER TABLE `infor_policies`
  ADD PRIMARY KEY (`infr_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prdt_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sell_trade_lead`
--
ALTER TABLE `sell_trade_lead`
  ADD PRIMARY KEY (`sell_trd_id`);

--
-- Indexes for table `trade_production`
--
ALTER TABLE `trade_production`
  ADD PRIMARY KEY (`trade_pro_id`);

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
-- AUTO_INCREMENT for table `buy_trade_lead`
--
ALTER TABLE `buy_trade_lead`
  MODIFY `buy_trd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catg_mast`
--
ALTER TABLE `catg_mast`
  MODIFY `catg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infor_policies`
--
ALTER TABLE `infor_policies`
  MODIFY `infr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prdt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sell_trade_lead`
--
ALTER TABLE `sell_trade_lead`
  MODIFY `sell_trd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trade_production`
--
ALTER TABLE `trade_production`
  MODIFY `trade_pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
