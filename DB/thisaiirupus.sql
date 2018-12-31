-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 08:03 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `thisaiirupus`
--

CREATE TABLE `thisaiirupus` (
  `id` int(10) UNSIGNED NOT NULL,
  `thisaiirupu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thisaiirupus`
--

INSERT INTO `thisaiirupus` (`id`, `thisaiirupu`, `created_at`, `updated_at`) VALUES
(1, 'குரு', NULL, NULL),
(2, 'சனி', NULL, NULL),
(3, 'புதன்', NULL, NULL),
(4, 'கேது', NULL, NULL),
(5, 'சுக்கிரன்', NULL, NULL),
(6, 'சூரியன்', NULL, NULL),
(7, 'சந்திரன்', NULL, NULL),
(8, 'செவ்வாய்', NULL, NULL),
(9, 'ராகு', NULL, NULL),
(10, 'வியாழன்\r\n', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thisaiirupus`
--
ALTER TABLE `thisaiirupus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thisaiirupus`
--
ALTER TABLE `thisaiirupus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
