-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 04:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factorydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `formcruds`
--

CREATE TABLE `formcruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT 'City Name',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formcruds`
--

INSERT INTO `formcruds` (`id`, `name`, `skill`, `image`, `country`, `created_at`, `updated_at`) VALUES
(5, 'Ravi kumar', 'html,css', 'image/V8DJWrKpWSLudW3GPrOg8wqnIuvXGfX1ZUQobJVr.jpg', 'Haryana', '2024-06-08 08:02:31', '2024-06-08 08:20:27'),
(7, 'Krish', 'html,css', 'image/67SSQVIchXNnXZE52iADpbEgtFWw4eYDfqWU1e9m.jpg', 'Uttar Pradesh', '2024-06-08 08:03:52', '2024-06-08 08:20:19'),
(8, 'pawan', 'Php', 'image/orWgLHZoPcCYnvriLhaDk1bhhw7YqKVMyyJ7LU0V.jpg', 'Haryana', '2024-06-08 08:04:09', '2024-06-08 08:20:13'),
(9, 'chandan', 'css,Php', 'image/Y3do4frm7CXvjPWXs7kZKfexwq9h6iZ28MbzHrW3.jpg', 'Mumbai', '2024-06-08 08:04:33', '2024-06-08 08:19:58');

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
(1, '2024_05_30_061908_create_realestates_table', 1),
(2, '2024_06_08_090127_create_formcruds_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `realestates`
--

CREATE TABLE `realestates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `realestates`
--

INSERT INTO `realestates` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(4, 'Laverna Breitenberg', 'vernice42@wunsch.com', '2024-05-30 02:14:32', '2024-05-30 02:14:32'),
(41, 'krish', 'krish@gmail.com', NULL, NULL),
(42, 'parkash', 'parkash@gmail.com', NULL, NULL),
(65, 'chandu', 'chandu@gmail.com', '2024-06-08 02:54:49', '2024-06-08 02:54:49'),
(66, 'saksham beta', 'sakshambe@gmail.com', '2024-06-08 02:57:23', '2024-06-08 02:57:23'),
(67, 'chandan', 'chandan@gmail.com', '2024-06-08 03:09:17', '2024-06-08 03:09:17'),
(68, 'pawanraj', 'pawanraj@gmail.com', '2024-06-08 03:10:54', '2024-06-08 03:10:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formcruds`
--
ALTER TABLE `formcruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realestates`
--
ALTER TABLE `realestates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realestates_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formcruds`
--
ALTER TABLE `formcruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `realestates`
--
ALTER TABLE `realestates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
