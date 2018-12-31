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
-- Table structure for table `matchstars`
--

CREATE TABLE `matchstars` (
  `id` int(10) UNSIGNED NOT NULL,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matchstar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matchstars`
--

INSERT INTO `matchstars` (`id`, `star`, `matchstar`, `created_at`, `updated_at`) VALUES
(1, 'அசுவினி', '1,2,3,5', NULL, NULL),
(2, 'பரணி', '', NULL, NULL),
(3, 'கார்த்திகை 1 ம் பாதம்', '', NULL, NULL),
(4, 'கார்த்திகை 2,3,4 ம் பாதம்', '', NULL, NULL),
(5, 'ரோகிணி', '', NULL, NULL),
(6, 'மிருகசீரிடம் 1,2 ம் பாதம்', '', NULL, NULL),
(7, 'மிருகசீரிடம் 3,4 ம் பாதம்', '', NULL, NULL),
(8, 'திருவாதிரை', '', NULL, NULL),
(9, 'புனர்பூசம் 1,2,3 ம் பாதம்', '', NULL, NULL),
(10, 'புனர்பூசம் 4 ம் பாதம்', '', NULL, NULL),
(11, 'பூசம்', '', NULL, NULL),
(12, 'ஆயில்யம்', '', NULL, NULL),
(13, 'மகம்', '', NULL, NULL),
(14, 'பூரம்', '', NULL, NULL),
(15, 'உத்திரம் 1 ம் பாதம்', '', NULL, NULL),
(16, 'உத்திரம் 2,3,4 ம் பாதம்', '', NULL, NULL),
(17, 'அஸ்தம்', '', NULL, NULL),
(18, 'சித்திரை 1,2 ம் பாதம்', '', NULL, NULL),
(19, 'சித்திரை 3,4 ம் பாதம்', '', NULL, NULL),
(20, 'சுவாதி', '', NULL, NULL),
(21, 'விசாகம் 1,2,3 ம் பாதம்', '', NULL, NULL),
(22, 'விசாகம் 4 ம் பாதம்', '', NULL, NULL),
(23, 'அனுஷம்', '', NULL, NULL),
(24, 'கேட்டை', '', NULL, NULL),
(25, 'மூலம்', '', NULL, NULL),
(26, 'பூராடம்', '', NULL, NULL),
(27, 'உத்திராடம் 1 ம் பாதம்', '', NULL, NULL),
(28, 'உத்திராடம் 2,3,4 ம் பாதம்', '', NULL, NULL),
(29, 'திருவோணம்', '', NULL, NULL),
(30, 'அவிட்டம் 1,2 ம் பாதம்', '', NULL, NULL),
(31, 'அவிட்டம் 3,4 ம் பாதம்', '', NULL, NULL),
(32, 'சதயம்', '', NULL, NULL),
(33, 'பூரட்டாதி 1,2,3 ம் பாதம்', '', NULL, NULL),
(34, 'பூரட்டாதி 4 ம் பாதம்', '', NULL, NULL),
(35, 'உத்திரட்டாதி', '', NULL, NULL),
(36, 'ரேவதி', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matchstars`
--
ALTER TABLE `matchstars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matchstars`
--
ALTER TABLE `matchstars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
