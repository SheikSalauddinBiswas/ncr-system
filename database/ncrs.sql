-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 10:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_diaries`
--

CREATE TABLE `general_diaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gd_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `emobile` varchar(255) NOT NULL,
  `nid_num` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `union` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `crime_type` varchar(255) NOT NULL,
  `c_city` varchar(255) NOT NULL,
  `c_union` varchar(255) NOT NULL,
  `c_thana` varchar(255) NOT NULL,
  `c_area` varchar(255) NOT NULL,
  `statement` varchar(255) NOT NULL,
  `crime_time` varchar(255) NOT NULL,
  `crime_date` varchar(255) NOT NULL,
  `color_product` varchar(255) NOT NULL,
  `product_document` varchar(255) NOT NULL,
  `identifier_data` varchar(255) NOT NULL,
  `addi_data_crime` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_diaries`
--

INSERT INTO `general_diaries` (`id`, `gd_no`, `name`, `fname`, `email`, `email_verified_at`, `mobile`, `emobile`, `nid_num`, `city`, `union`, `thana`, `area`, `profession`, `crime_type`, `c_city`, `c_union`, `c_thana`, `c_area`, `statement`, `crime_time`, `crime_date`, `color_product`, `product_document`, `identifier_data`, `addi_data_crime`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '475206', 'Sheik Salauddin Biswas', 'Ataullah Biswas', 'salauddi1biswas@gmail.com', NULL, '01758514496', '01892394404', '632534343021', 'Chattogram', 'Hathazari', 'Bayzid', 'Oxygen', 'Student', 'Robbery', 'Chattogram', 'Hathazari', 'Bayzid', 'Oxygen', 'I was going to school and the incident happened', '14:30', '2023-06-18', 'Black', 'storage/app/public/images/1686947339pexels-imad-clicks-11772523.jpg', 'He is small guy', 'I think he took my phone', 'investigating', NULL, '2023-06-16 14:28:59', '2023-06-17 13:02:11'),
(2, '326527', 'Nur  Uddin Rabby', 'tjhnttjhtth', 'sheik@gmail.com', NULL, '35673673734', '464636765', '76346736673467', 'Chattogram', 'Hathazari', 'Bayzid', 'Oxygen', 'Student', 'Robbery', 'Chattogram', 'Hathazari', 'Bayzid', 'Oxygen', 'fymgsmn gzdfjnmzsjmn', '05:08', '2023-06-13', 'xmm xm', 'storage/app/public/images/16870000105769591.jpg', 'He is small guy', 'gzxnfmjnmfx', 'success', NULL, '2023-06-17 05:06:50', '2023-06-17 06:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(45, '2014_10_12_000000_create_users_table', 1),
(46, '2014_10_12_100000_create_password_resets_table', 1),
(47, '2019_08_19_000000_create_failed_jobs_table', 1),
(48, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(49, '2023_06_10_173210_create_general_diaries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_diaries`
--
ALTER TABLE `general_diaries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `general_diaries_email_unique` (`email`),
  ADD UNIQUE KEY `general_diaries_nid_num_unique` (`nid_num`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_diaries`
--
ALTER TABLE `general_diaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
