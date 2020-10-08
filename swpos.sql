-- phpMyAdmin SQL Dump
-- version 5.0.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 02:16 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `no`, `pin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jehad', 'jehad.almahari@gmail.com', '$2y$10$Ce5aP4MVTSFBOHiGFvehjuIcn8a8trBkfNnkdzs68nzkUWak89uVm', '11223344', '11223344', NULL, '2020-04-22 02:49:52', '2020-04-22 02:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_area` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_address` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_tel` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_mob` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_location` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_rent` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_ewa_no` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_municipality` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_vat` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_opening` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_closing` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_cr_no` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_cr_exp` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_target` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_area`, `branch_address`, `branch_tel`, `branch_mob`, `branch_location`, `branch_rent`, `branch_ewa_no`, `branch_municipality`, `branch_vat`, `branch_opening`, `branch_closing`, `branch_cr_no`, `branch_cr_exp`, `branch_target`, `created_at`, `updated_at`) VALUES
(1, '1', 'xxx', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-07-08 10:14:35', '2020-07-08 10:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_name` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_mob` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_area` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_group` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_name`, `cust_mob`, `cust_email`, `cust_area`, `cust_address`, `cust_group`, `created_at`, `updated_at`) VALUES
(1, '111', '222', '333@333.com', 'Bahrain Areas', '444', 'Select From Customer Group table', '2020-07-08 09:51:17', '2020-07-08 09:51:17'),
(2, 'Jehad Almahari', '33733886', 'jehad.almahari@gmail.com', 'Bahrain Areas', 'Office 11, building 22, Road 33, Block 44', 'Select From Customer Group table', '2020-07-09 03:36:48', '2020-07-09 03:36:48'),
(18, '33', '33', '33@33.com', 'Bahrain Areas', '333', 'Select From Customer Group table', '2020-07-09 04:04:23', '2020-07-09 04:04:23'),
(19, '33', '33', '33@33.com', 'Bahrain Areas', '333', 'Select From Customer Group table', '2020-07-09 04:05:46', '2020-07-09 04:05:46'),
(20, '33', '33', '33@33.com', 'Bahrain Areas', '333', 'Select From Customer Group table', '2020-07-09 04:08:25', '2020-07-09 04:08:25'),
(21, '44', '44', '44@33.com', 'Bahrain Areas', '44', 'Select From Customer Group table', '2020-07-09 04:09:00', '2020-07-09 04:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_group`
--

INSERT INTO `customer_group` (`id`, `group_name`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-07-08 10:00:08', '2020-07-08 10:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_name` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_gender` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_phone` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_marital` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_email` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_dob` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_nationality` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_address` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_cpr_no` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_passport_no` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_cpr_expire` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_passport_expire` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_working_as` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_department` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_designation` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_joining` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_ending` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_leaves` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_salary_transfer` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_basic_salary` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_employee_gosi` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_lmar_monthly` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_company_gosi` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_visa_fees` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_visa_expiry` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_bank` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_iban` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_files` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_blood` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_driving` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_emrc_name` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_emrc_number` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_emrc_relationship` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_commotions` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_area` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_address` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_tel` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_mob` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_location` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_instgram` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_whatsapp` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_logo` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_stamp` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `merchant_name`, `merchant_area`, `merchant_address`, `merchant_tel`, `merchant_mob`, `merchant_location`, `merchant_instgram`, `merchant_whatsapp`, `merchant_email`, `merchant_logo`, `merchant_stamp`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, '11', '111', '11', '11', '11', 'test@test.com', NULL, NULL, '2020-07-08 10:28:56', '2020-07-08 10:28:56');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2020_02_22_071312_create_permission_tables', 1),
(9, '2020_04_20_125532_admin', 1),
(17, '2020_07_08_121831_create_customers_table', 2),
(18, '2020_07_08_124221_create_employees_table', 2),
(19, '2020_07_08_125208_create_customer_group_table', 3),
(20, '2020_07_08_130121_create_branches_table', 4),
(21, '2020_07_08_132044_create_merchant_table', 5),
(23, '2020_07_08_133219_create_supplier_table', 6),
(24, '2020_07_08_134005_create_suppliers_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supp_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supp_tel` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supp_mob` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supp_address` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supp_email` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supp_name`, `supp_tel`, `supp_mob`, `supp_address`, `supp_email`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', '1', '2020-07-08 10:41:31', '2020-07-08 10:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_group`
--
ALTER TABLE `customer_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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

