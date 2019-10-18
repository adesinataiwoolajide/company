-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 06:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gloriousempiretechnologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'restored', 3, 'App\\User', 1, 'App\\User', '{\"name\":\"Akinloye Elizebeth\",\"email\":\"akinloye@gmail.com\"}', '2019-10-18 13:34:20', '2019-10-18 13:34:20'),
(2, 'default', 'restored', 3, 'App\\User', 1, 'App\\User', '{\"name\":\"Akinloye Elizebeth\",\"email\":\"akinloye@gmail.com\"}', '2019-10-18 13:35:41', '2019-10-18 13:35:41'),
(3, 'default', 'created', 13, 'App\\ProjectTypes', 1, 'App\\User', '{\"attributes\":{\"type_name\":\"Test\"}}', '2019-10-18 14:45:37', '2019-10-18 14:45:37'),
(4, 'default', 'updated', 13, 'App\\ProjectTypes', 1, 'App\\User', '{\"attributes\":{\"type_name\":\"Testing\"},\"old\":{\"type_name\":\"Test\"}}', '2019-10-18 14:46:06', '2019-10-18 14:46:06'),
(5, 'default', 'deleted', 13, 'App\\ProjectTypes', 1, 'App\\User', '{\"attributes\":{\"type_name\":\"Testing\"}}', '2019-10-18 14:47:20', '2019-10-18 14:47:20'),
(6, 'default', 'restored', 13, 'App\\ProjectTypes', 1, 'App\\User', '{\"type_name\":\"Testing\"}', '2019-10-18 14:54:15', '2019-10-18 14:54:15'),
(7, 'default', 'deleted', 11, 'App\\ProjectTypes', 1, 'App\\User', '{\"attributes\":{\"type_name\":\"Full Stack Development\"}}', '2019-10-18 14:54:52', '2019-10-18 14:54:52'),
(8, 'default', 'restored', 11, 'App\\ProjectTypes', 1, 'App\\User', '{\"type_name\":\"Full Stack Development\"}', '2019-10-18 14:55:31', '2019-10-18 14:55:31'),
(9, 'default', 'created', 1, 'App\\ProjectCategories', 1, 'App\\User', '{\"attributes\":{\"category_name\":\"Retail\"}}', '2019-10-18 15:17:52', '2019-10-18 15:17:52'),
(10, 'default', 'updated', 1, 'App\\ProjectCategories', 1, 'App\\User', '{\"attributes\":{\"category_name\":\"Retail App\"},\"old\":{\"category_name\":\"Retail\"}}', '2019-10-18 15:21:52', '2019-10-18 15:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `client_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_14_110922_create_projects_table', 1),
(4, '2019_10_14_111134_create_teams_table', 1),
(5, '2019_10_14_111217_create_project_categories_table', 1),
(6, '2019_10_14_111306_create_project_types_table', 1),
(7, '2019_10_14_112819_create_permission_tables', 1),
(8, '2019_10_14_114114_create_clients_table', 2),
(9, '2019_10_14_115143_create_team_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 4),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Add User', 'web', '2019-10-18 14:51:28', '2019-10-18 14:51:28'),
(2, 'Edit User', 'web', '2019-10-18 14:51:35', '2019-10-18 14:51:35'),
(3, 'Update User', 'web', '2019-10-18 14:51:42', '2019-10-18 14:51:42'),
(4, 'Delete User', 'web', '2019-10-18 14:51:50', '2019-10-18 14:51:50'),
(5, 'Restore User', 'web', '2019-10-18 14:51:59', '2019-10-18 14:51:59'),
(6, 'Add Project type', 'web', '2019-10-18 14:52:15', '2019-10-18 14:52:15'),
(7, 'Edit Project type', 'web', '2019-10-18 14:52:23', '2019-10-18 14:52:23'),
(8, 'Delete Project type', 'web', '2019-10-18 14:52:30', '2019-10-18 14:52:30'),
(9, 'Update Project type', 'web', '2019-10-18 14:52:39', '2019-10-18 14:52:39'),
(10, 'Restore Project type', 'web', '2019-10-18 14:52:57', '2019-10-18 14:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `project_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`category_id`, `category_name`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Retail App', '2019-10-18 15:21:52', '2019-10-18 15:17:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`type_id`, `type_name`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Web Development', '2019-10-18 14:22:59', '2019-10-18 14:22:59', NULL),
(2, 'Mobile Development', '2019-10-18 14:25:16', '2019-10-18 14:25:16', NULL),
(3, 'Data Science', '2019-10-18 14:25:38', '2019-10-18 14:25:38', NULL),
(4, 'Desktop Application Development', '2019-10-18 14:42:40', '2019-10-18 14:26:03', NULL),
(5, 'Back End Development', '2019-10-18 14:26:32', '2019-10-18 14:26:32', NULL),
(6, 'Software Tools Development', '2019-10-18 14:26:51', '2019-10-18 14:26:51', NULL),
(7, 'API Development', '2019-10-18 14:27:09', '2019-10-18 14:27:09', NULL),
(8, 'Embedded Systems Development', '2019-10-18 14:27:23', '2019-10-18 14:27:23', NULL),
(9, 'Security Software Development', '2019-10-18 14:27:47', '2019-10-18 14:27:47', NULL),
(10, 'Cloud Computing', '2019-10-18 14:28:11', '2019-10-18 14:28:11', NULL),
(11, 'Full Stack Development', '2019-10-18 14:55:31', '2019-10-18 14:29:31', NULL),
(12, 'System Integration', '2019-10-18 14:33:36', '2019-10-18 14:33:36', NULL),
(13, 'Testing', '2019-10-18 14:54:15', '2019-10-18 14:45:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', '2019-10-14 11:07:00', '2019-10-14 11:07:00'),
(2, 'Admin', 'web', '2019-10-14 11:07:22', '2019-10-14 11:07:22'),
(3, 'Secretary', 'web', '2019-10-18 12:02:32', '2019-10-18 12:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_category_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_categories`
--

CREATE TABLE `team_categories` (
  `team_category_id` bigint(20) UNSIGNED NOT NULL,
  `team_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `role`, `password`, `status`, `remember_token`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Adesina Taiwo', 'administrator@gmail.com', '2019-04-10 13:29:39', 'Administrator', '$2y$10$pk17qvsG/AavWn2S6Ayx6./42WqKLutbcWjERVTjn.Dhdbjhhmd6C', 1, '', '2019-10-18 13:14:51', '2019-04-10 13:29:39', NULL),
(2, 'Adesina Taiwo Olajide', 'tolajide75@gmail.com', NULL, 'Admin', '$2y$10$78bCeUW.F6nai77rCJ1mIe7Flw0nPTUpedqnNFAh1CxUDVIIjQNIq', 1, NULL, '2019-10-18 13:16:46', '2019-10-18 13:16:46', NULL),
(3, 'Akinloye Elizebeth', 'akinloye@gmail.com', NULL, 'Secretary', '$2y$10$Ql4sf6i5HguMPTCXpFv4aOM01.iXUPubQgd0MUOp1WsKUZ73YPPcO', 1, NULL, '2019-10-18 13:35:40', '2019-10-18 13:28:01', NULL),
(4, 'Adesina Taiwo Victor', 'admin@gmail.com', NULL, 'Administrator', '$2y$10$qRjiiL11p1MSfGDemBArX.lkV9CWgUFgnBnjuqBj8355PTSHuXFTe', 1, NULL, '2019-10-18 13:30:51', '2019-10-18 13:28:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `team_categories`
--
ALTER TABLE `team_categories`
  ADD PRIMARY KEY (`team_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_categories`
--
ALTER TABLE `team_categories`
  MODIFY `team_category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
