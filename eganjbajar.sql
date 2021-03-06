-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 10:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eganjbajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `category_desc`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Grain', '1197728679.png', 'This is Grain Description', NULL, '2021-01-31 09:38:33', '2021-01-31 09:38:33'),
(2, 'Vegetables', '124357940.jpg', 'This is Vegetable Description', NULL, '2021-01-31 09:39:28', '2021-01-31 09:39:28'),
(7, 'Fruits', '791700673.jpg', 'This is Fruits', NULL, '2021-03-05 10:50:45', '2021-03-05 10:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `f_name`, `l_name`, `email`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'MIttal', 'panchal', 'pacnahl@123.com', 'hey', '2021-03-04 10:43:03', '2021-03-04 10:43:03'),
(2, 'MIttal', 'panchal', 'pacnahl@123.com', 'hey', '2021-03-04 10:43:21', '2021-03-04 10:43:21'),
(3, 'MIttal', 'panchal', 'pacnahl@123.com', 'hey', '2021-03-04 10:43:51', '2021-03-04 10:43:51'),
(4, 'MIttal', 'panchal', 'pacnahl@123.com', 'hey', '2021-03-04 10:44:26', '2021-03-04 10:44:26'),
(5, 'MIttal', 'panchal', 'pacnahl@123.com', 'hey', '2021-03-04 10:44:55', '2021-03-04 10:44:55'),
(6, 'asdsad', 'asdsa', 'hello@gmail.com', 'hey', '2021-03-04 10:48:05', '2021-03-04 10:48:05'),
(7, 'sumit', 'makwana', 'sumti@gmail.con', 'asdad', '2021-03-04 10:49:13', '2021-03-04 10:49:13'),
(8, 'first name', 'last name', 'last@gmail.com', 'sumit', '2021-03-04 10:51:09', '2021-03-04 10:51:09'),
(9, '1213', 'sumti', 'sumit@asd12asd.com', 'asdsadsad', '2021-03-04 10:53:51', '2021-03-04 10:53:51');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2021_01_31_064336_create_categories_table', 2),
(5, '2021_01_31_155338_create_products_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `product_desc`, `product_price`, `category_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Cucumber', '1836295257.jpg', 'Green Salad', 0, 2, 1, NULL, '2021-01-31 11:25:23', '2021-01-31 11:25:23'),
(3, 'Banana', '315531383.png', 'The banana is a lengthy yellow fruit, found in the market in groups of three to twenty fruits, similar to a triangular cucumber, oblong and normally yellow.', 0, 3, 4, NULL, '2021-01-31 11:36:08', '2021-02-02 11:52:46'),
(4, 'Apple', '804386262.jpg', 'An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.', 10000, 3, 4, NULL, '2021-02-02 11:46:18', '2021-03-02 10:35:04'),
(5, 'Pineapple', '1339788928.jpg', 'Pineapple, Ananas comosus, is an herbaceous biennial or perennial plant in the family Bromeliaceae grown for its edible fruit.', 2500, 3, 6, NULL, '2021-02-05 12:40:26', '2021-02-05 13:22:19'),
(6, 'Wheat', '2027772108.jpg', 'Wheat is a grass widely cultivated for its seed, a cereal grain which is a worldwide staple food. The many species of wheat together make up the genus Triticum; the most widely grown is common wheat', 8000, 1, 6, NULL, '2021-02-05 12:43:54', '2021-02-05 13:23:06'),
(7, 'Potato', '184006691.jpg', 'Potato, Solanum tuberosum, is an herbaceous perennial plant in the family Solanaceae which is grown for its edible tubers.', 800, 2, 6, NULL, '2021-02-05 12:49:34', '2021-02-05 13:23:40'),
(8, 'makai', '758982709.png', 'makai is grain', 50000, 1, 4, NULL, '2021-03-02 10:34:37', '2021-03-02 10:34:37'),
(9, 'Apple', '1864366049.jpg', 'An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.', 50000, 3, 9, NULL, '2021-03-03 10:41:00', '2021-03-03 11:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` set('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''0-buyer,1-supplier''',
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `f_name`, `l_name`, `phone_number`, `profile_image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0', 'Mittal', 'Panchal', '8200383167', '1151592177.jpg', 'mittalpanchal@gmail.com', NULL, '$2y$10$Szc9rYVA66D2eT6rb1gaMu4W2L/Rl6/bjaQcaColLbILsqIUKK3ge', NULL, '2021-01-30 13:06:20', '2021-03-04 11:31:07'),
(4, '0', 'Vaishu', 'panchal', '9568741235', '1574026189.jpg', 'vaishupanchal@gmail.com', NULL, '$2y$10$Q.xR6qWZbzlw91Nsan8Op.4W.1QIA4zDhonw3URSPOWA.CbV3NH66', NULL, '2021-01-31 11:32:57', '2021-03-01 07:54:10'),
(5, '0', 'FALU', 'DAVDA', '8511657841', '', 'falgunidavda@gmail.com', NULL, '$2y$10$GFeD5uTR1Yr7lxFqJ7KQ8uF2F6pNp5xmLF8493a/8BLxcrONOOAXe', NULL, '2021-02-04 11:33:10', '2021-02-04 11:33:10'),
(6, '1', 'sumit', 'panchal', '77548796', '', 'sumitmakvana@gmail.com', NULL, '$2y$10$bTEknTZ8g4kLCD2BEcfx6eU5SpTWOMAptAP7OF34nzu7AfBzbqxXO', NULL, '2021-02-04 11:34:42', '2021-02-04 11:34:42'),
(7, '0', 'NIMESH', 'DESAI', '9974528056', NULL, 'nimesh@gmail.com', NULL, '$2y$10$MurNoLOaLSIQh8XbI54YRuZBj3In8fgaPvafB3qMuAZvx/IA616Em', NULL, '2021-03-02 10:38:33', '2021-03-02 10:38:33'),
(8, '0', 'Janvi', 'panchal', '99854578', NULL, 'janvi@gmail.com', NULL, '$2y$10$UxF89mv0YwmdD4Z56H5cYugxC/Noek3ltl4qQAsVOnUkNOT9T6vEO', NULL, '2021-03-03 10:32:19', '2021-03-03 10:32:19'),
(9, '1', 'Krupali', 'Khamar', '9537519635', '367585587.jpg', 'krupali@gmail.com', NULL, '$2y$10$Szc9rYVA66D2eT6rb1gaMu4W2L/Rl6/bjaQcaColLbILsqIUKK3ge', NULL, '2021-03-03 10:40:00', '2021-03-03 11:52:11'),
(10, '0', 'Bhumi', 'Patel', '8866205478', NULL, 'bhumipatel149@gmail.com', NULL, '$2y$10$6bEfz1TkWeuWo4HqApUp7eno//lYHFaY.3MxsuhL91ipl3JBBwMwG', NULL, '2021-03-03 12:21:05', '2021-03-03 12:21:05'),
(11, '1', 'Bhalji', 'Suthar', '9913322105', NULL, 'bhalji@gmail.com', NULL, '$2y$10$.HL3tihZAcb.NW0QXXPer.0qkePqSwRk.5waMthkOG9pjP29YBYAK', NULL, '2021-03-05 11:05:59', '2021-03-05 11:05:59'),
(12, '0', 'Bhalji', 'Suthar', '9913322105', NULL, 'bhalji95@gmail.com', NULL, '$2y$10$XnCO3RaVfailWo33RNAZtuEVZYo1D7kzlJFGPFYXs9TErVfTQTkde', NULL, '2021-03-05 11:09:10', '2021-03-05 11:09:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
