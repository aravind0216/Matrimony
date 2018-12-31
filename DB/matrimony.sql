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
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `education`, `created_at`, `updated_at`) VALUES
(1, 'B.A', NULL, NULL),
(2, 'B.Arch', NULL, NULL),
(3, 'B.Com', NULL, NULL),
(4, 'B.E.S', NULL, NULL),
(5, 'B.Ed', NULL, NULL),
(6, 'B.Pharm', NULL, NULL),
(7, 'B.Sc', NULL, NULL),
(8, 'B.Tech', NULL, NULL),
(9, 'BBA', NULL, NULL),
(10, 'BBM', NULL, NULL),
(11, 'BCA', NULL, NULL),
(12, 'BCS', NULL, NULL),
(13, 'BDS', NULL, NULL),
(14, 'BE', NULL, NULL),
(15, 'BFA', NULL, NULL),
(16, 'BHMS', NULL, NULL),
(17, 'BL', NULL, NULL),
(18, 'BMM', NULL, NULL),
(19, 'BPT', NULL, NULL),
(20, 'BS', NULL, NULL),
(21, 'BVSC', NULL, NULL),
(22, 'C.Tech', NULL, NULL),
(23, 'CA', NULL, NULL),
(24, 'CPL', NULL, NULL),
(25, 'CS', NULL, NULL),
(26, 'Diploma', NULL, NULL),
(27, 'Engineering', NULL, NULL),
(28, 'High School', NULL, NULL),
(29, 'Hr.Sec. School', NULL, NULL),
(30, 'I.T.I', NULL, NULL),
(31, 'IAS', NULL, NULL),
(32, 'ICWA', NULL, NULL),
(33, 'LLB', NULL, NULL),
(34, 'LLM', NULL, NULL),
(35, 'M.Arch', NULL, NULL),
(36, 'M.Com', NULL, NULL),
(37, 'M.Ed', NULL, NULL),
(38, 'M.Pharm', NULL, NULL),
(39, 'M.Phil', NULL, NULL),
(40, 'M.Tech', NULL, NULL),
(41, 'MA', NULL, NULL),
(42, 'MBA', NULL, NULL),
(43, 'MBBS', NULL, NULL),
(44, 'MBM', NULL, NULL),
(45, 'MCA', NULL, NULL),
(46, 'MD', NULL, NULL),
(47, 'MDS', NULL, NULL),
(48, 'ME', NULL, NULL),
(49, 'MHM', NULL, NULL),
(50, 'ML', NULL, NULL),
(51, 'MS', NULL, NULL),
(52, 'MS (Engg)', NULL, NULL),
(53, 'MSc', NULL, NULL),
(54, 'MVSC', NULL, NULL),
(55, 'P.G', NULL, NULL),
(56, 'PG.Diploma', NULL, NULL),
(57, 'PGDM', NULL, NULL),
(58, 'Ph.D', NULL, NULL),
(59, 'U.G', NULL, NULL),
(60, 'D T. Ed', NULL, NULL),
(61, 'B.E., MBA', NULL, NULL),
(62, 'B.Tech., MBA', NULL, NULL),
(63, 'Hotel Management', NULL, NULL),
(64, 'B.E., MS', NULL, NULL),
(65, 'M.Sc., B.Ed., MBA', NULL, NULL),
(66, 'M.Sc., B.Ed', NULL, NULL),
(67, 'B.Sc., B.Ed', NULL, NULL),
(68, 'B.Com(CA)', NULL, NULL),
(69, 'B.Tech., MS', NULL, NULL),
(70, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laknams`
--

CREATE TABLE `laknams` (
  `id` int(10) UNSIGNED NOT NULL,
  `rasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laknams`
--

INSERT INTO `laknams` (`id`, `rasi`, `created_at`, `updated_at`) VALUES
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
(8, '2018_10_25_095759_create_home_controllers_table', 1),
(18, '2018_10_30_095648_create_thisaiiruppus_table', 4),
(20, '2018_10_30_095648_create_thisaiirupus_table', 6),
(33, '2014_10_12_000000_create_users_table', 7),
(34, '2014_10_12_100000_create_password_resets_table', 7),
(35, '2018_11_08_051911_create_profiles_table', 7),
(36, '2018_11_08_051949_create_education_table', 7),
(37, '2018_11_08_052001_create_laknams_table', 7),
(38, '2018_11_08_052015_create_matchstars_table', 7),
(39, '2018_11_08_052028_create_rasis_table', 7),
(40, '2018_11_08_052040_create_stars_table', 7),
(41, '2018_11_08_052056_create_thisaiirupus_table', 7),
(42, '2018_11_08_160959_add_role_to_profiles', 8),
(43, '2018_11_09_102530_create_services_table', 8),
(44, '2018_11_09_102544_create_prices_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('aravind.0216@gmail.com', '$2y$10$sX647pS75DVC2gAY1lDOyO7l7PAPS3l8.6IQs.e8vaOGBQrJ7pY/C', '2018-11-13 07:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profilefor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcaste` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educationdes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empolyedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobdes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compayname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `martialstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physicalstatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `altmobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatherwork` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothername` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motherwork` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nativeplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nativedistrict` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofbrothers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofbrothersmarried` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofsisters` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noofsistersmarried` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familystatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laknam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thisaiirupu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rasi1` text COLLATE utf8mb4_unicode_ci,
  `rasi2` text COLLATE utf8mb4_unicode_ci,
  `rasi3` text COLLATE utf8mb4_unicode_ci,
  `rasi4` text COLLATE utf8mb4_unicode_ci,
  `rasi5` text COLLATE utf8mb4_unicode_ci,
  `rasi6` text COLLATE utf8mb4_unicode_ci,
  `rasi7` text COLLATE utf8mb4_unicode_ci,
  `rasi8` text COLLATE utf8mb4_unicode_ci,
  `rasi9` text COLLATE utf8mb4_unicode_ci,
  `rasi10` text COLLATE utf8mb4_unicode_ci,
  `rasi11` text COLLATE utf8mb4_unicode_ci,
  `rasi12` text COLLATE utf8mb4_unicode_ci,
  `am1` text COLLATE utf8mb4_unicode_ci,
  `am2` text COLLATE utf8mb4_unicode_ci,
  `am3` text COLLATE utf8mb4_unicode_ci,
  `am4` text COLLATE utf8mb4_unicode_ci,
  `am5` text COLLATE utf8mb4_unicode_ci,
  `am6` text COLLATE utf8mb4_unicode_ci,
  `am7` text COLLATE utf8mb4_unicode_ci,
  `am8` text COLLATE utf8mb4_unicode_ci,
  `am9` text COLLATE utf8mb4_unicode_ci,
  `am10` text COLLATE utf8mb4_unicode_ci,
  `am11` text COLLATE utf8mb4_unicode_ci,
  `am12` text COLLATE utf8mb4_unicode_ci,
  `dateofbirth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeofbirth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeofbirth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nextduedate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `date`, `userid`, `profilefor`, `name`, `password`, `remember_token`, `gender`, `age`, `religion`, `caste`, `subcaste`, `education`, `educationdes`, `empolyedin`, `jobdes`, `compayname`, `income`, `blood`, `martialstatus`, `height`, `weight`, `language`, `physicalstatus`, `email`, `mobile`, `altmobile`, `address`, `pincode`, `district`, `state`, `fathername`, `fatherwork`, `mothername`, `motherwork`, `nativeplace`, `nativedistrict`, `noofbrothers`, `noofbrothersmarried`, `noofsisters`, `noofsistersmarried`, `familystatus`, `star`, `rasi`, `laknam`, `thisaiirupu`, `year`, `month`, `day`, `rasi1`, `rasi2`, `rasi3`, `rasi4`, `rasi5`, `rasi6`, `rasi7`, `rasi8`, `rasi9`, `rasi10`, `rasi11`, `rasi12`, `am1`, `am2`, `am3`, `am4`, `am5`, `am6`, `am7`, `am8`, `am9`, `am10`, `am11`, `am12`, `dateofbirth`, `placeofbirth`, `timeofbirth`, `url`, `status`, `plan`, `nextduedate`, `role`, `created_at`, `updated_at`) VALUES
(1, '2018-11-08', '18110', 'Myself', 'Aravindkumar R', '$2y$10$0IPb0GseNdpKhqAGpG3QdeIkJ52LEuFvtvZeiAGFH3SZGqks85WqW', 'a4bhodcmkHGTibxHPM5Xulmqz2UujkaCPdDEPmPB', 'Female', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', 'admin@gmail.com', '7904497927', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0', NULL, NULL, '1', '2018-11-08 01:44:46', '2018-11-10 03:21:28'),
(2, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', 'aravind.0216@gmail.com', '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(3, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', '', '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(4, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', '', '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(5, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', '', '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(6, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', NULL, '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(7, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', NULL, '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(8, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', NULL, '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49'),
(9, '2018-11-08', '18111', 'Myself', 'Aravindkumar R', '$2y$10$xkMIFAgdQ1s8cFopevQnvetKQzhJSAZa/bYxHHsXyltipayg13dq6', '3AqszUkWBNnF6yHqgltuCb2Ecwb6OmYGQoF8W70v', 'Male', '25', 'Hindu', 'Pillai', 'Karuneegar pillai', 'B.Arch', NULL, 'Private', NULL, NULL, '100000', 'AB+', 'Un Married', '160 cm', NULL, NULL, 'Normal', NULL, '8883191962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1514070556.jpg', '0', NULL, NULL, '0', '2018-11-08 01:44:46', '2018-11-10 03:13:49');

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

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `date`, `title`, `des`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, '2018-11-15', 'Title', 'OUR AGENTS ARE LICENSED PROFESSIONALS THAT SPECIALISE IN SEARCHING, EVALUATING AND NEGOTIATING THE PURCHASE OF PROPERTY ON BEHALF OF THE BUYER.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `star`, `created_at`, `updated_at`) VALUES
(1, 'அசுவினி', NULL, NULL),
(2, 'பரணி', NULL, NULL),
(3, 'கார்த்திகை 1 ம் பாதம்', NULL, NULL),
(4, 'கார்த்திகை 2,3,4 ம் பாதம்', NULL, NULL),
(5, 'ரோகிணி', NULL, NULL),
(6, 'மிருகசீரிடம் 1,2 ம் பாதம்', NULL, NULL),
(7, 'மிருகசீரிடம் 3,4 ம் பாதம்', NULL, NULL),
(8, 'திருவாதிரை', NULL, NULL),
(9, 'புனர்பூசம் 1,2,3 ம் பாதம்', NULL, NULL),
(10, 'புனர்பூசம் 4 ம் பாதம்', NULL, NULL),
(11, 'பூசம்', NULL, NULL),
(12, 'ஆயில்யம்', NULL, NULL),
(13, 'மகம்', NULL, NULL),
(14, 'பூரம்', NULL, NULL),
(15, 'உத்திரம் 1 ம் பாதம்', NULL, NULL),
(16, 'உத்திரம் 2,3,4 ம் பாதம்', NULL, NULL),
(17, 'அஸ்தம்', NULL, NULL),
(18, 'சித்திரை 1,2 ம் பாதம்', NULL, NULL),
(19, 'சித்திரை 3,4 ம் பாதம்', NULL, NULL),
(20, 'சுவாதி', NULL, NULL),
(21, 'விசாகம் 1,2,3 ம் பாதம்', NULL, NULL),
(22, 'விசாகம் 4 ம் பாதம்', NULL, NULL),
(23, 'அனுஷம்', NULL, NULL),
(24, 'கேட்டை', NULL, NULL),
(25, 'மூலம்', NULL, NULL),
(26, 'பூராடம்', NULL, NULL),
(27, 'உத்திராடம் 1 ம் பாதம்', NULL, NULL),
(28, 'உத்திராடம் 2,3,4 ம் பாதம்', NULL, NULL),
(29, 'திருவோணம்', NULL, NULL),
(30, 'அவிட்டம் 1,2 ம் பாதம்', NULL, NULL),
(31, 'அவிட்டம் 3,4 ம் பாதம்', NULL, NULL),
(32, 'சதயம்', NULL, NULL),
(33, 'பூரட்டாதி 1,2,3 ம் பாதம்', NULL, NULL),
(34, 'பூரட்டாதி 4 ம் பாதம்', NULL, NULL),
(35, 'உத்திரட்டாதி', NULL, NULL),
(36, 'ரேவதி', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laknams`
--
ALTER TABLE `laknams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matchstars`
--
ALTER TABLE `matchstars`
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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasis`
--
ALTER TABLE `rasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thisaiirupus`
--
ALTER TABLE `thisaiirupus`
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
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `laknams`
--
ALTER TABLE `laknams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `matchstars`
--
ALTER TABLE `matchstars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rasis`
--
ALTER TABLE `rasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `thisaiirupus`
--
ALTER TABLE `thisaiirupus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
