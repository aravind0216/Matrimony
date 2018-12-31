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
-- Table structure for table `rasis`
--

CREATE TABLE `rasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `rasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rasis`
--

INSERT INTO `rasis` (`id`, `rasi`, `created_at`, `updated_at`) VALUES
(1, 'மேஷம்', NULL, NULL),
(2, 'ரிஷபம்', NULL, NULL),
(3, 'மிதுனம்', NULL, NULL),
(4, 'கடகம்', NULL, NULL),
(5, 'சிம்மம்', NULL, NULL),
(6, 'கன்னி', NULL, NULL),
(7, 'துலாம்', NULL, NULL),
(8, 'விருச்சிகம்', NULL, NULL),
(9, 'தனுசு', NULL, NULL),
(10, 'மகரம்', NULL, NULL),
(11, 'கும்பம்', NULL, NULL),
(12, 'மீனம்', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rasis`
--
ALTER TABLE `rasis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rasis`
--
ALTER TABLE `rasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
