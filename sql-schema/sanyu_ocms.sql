-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 05:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanyu_ocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes_donations`
--

CREATE TABLE `clothes_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `categories` text NOT NULL,
  `donated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `month` varchar(2) NOT NULL,
  `renew` varchar(20) DEFAULT NULL,
  `expected_on` date NOT NULL,
  `donation_status` varchar(20) NOT NULL DEFAULT 'pending',
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes_donations`
--

INSERT INTO `clothes_donations` (`id`, `email`, `categories`, `donated_at`, `month`, `renew`, `expected_on`, `donation_status`, `is_public`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'bridgetnamugema@gmail.com', 'Shirts,T-shirts,Jackets,Dresses,Skirts', '2022-01-17 16:27:52', '11', NULL, '2021-11-29', 'Recieved', 1, '2021-11-22 22:47:37', NULL, NULL),
(2, 'violakomugisha@gmail.com', 'Shirts,Geans,Jackets,Underware,Dresses', '2022-01-18 08:57:10', '12', NULL, '2021-12-22', 'Recieved', 1, '2021-12-20 20:47:35', NULL, NULL),
(3, 'ashley7520charles@gmail.com', 'Shirts,Geans', '2022-01-18 08:56:38', '01', NULL, '2022-01-14', 'Recieved', 1, '2022-01-14 18:12:17', NULL, NULL),
(4, 'mbusajoseph60@gmail.com', 'Shirts,T-shirts,Trousers', '2022-01-18 10:57:16', '01', NULL, '2022-01-18', 'Recieved', 0, '2022-01-18 13:57:00', NULL, NULL),
(5, 'mbusajoseph60@gmail.com', 'Trousers,Geans', '2022-01-19 10:33:41', '01', NULL, '2022-01-19', 'Recieved', 1, '2022-01-19 13:29:40', NULL, NULL),
(6, 'mbusajoseph60@gmail.com', 'Dresses', '2022-01-19 11:08:52', '01', NULL, '2022-01-19', 'Recieved', 0, '2022-01-19 14:08:10', NULL, NULL),
(7, 'violakomugisha@gmail.com', 'Shirts,T-shirts', '2022-01-19 14:33:50', '01', NULL, '2022-01-19', 'Recieved', 1, '2022-01-19 17:04:29', NULL, NULL),
(8, 'violakomugisha@gmail.com', 'Shirts,Jackets,Dresses', '2022-01-20 06:51:29', '01', NULL, '2022-01-20', 'Recieved', 1, '2022-01-20 09:50:03', NULL, NULL),
(9, 'violakomugisha@gmail.com', 'Jackets,Underware,Suits', '2022-01-20 07:17:17', '01', NULL, '0000-00-00', 'Recieved', 1, '2022-01-20 10:16:12', NULL, NULL),
(10, 'mbusajoseph60@gmail.com', 'Jackets,Underware,Suits,Skirts,Jumpers', '2022-01-25 12:18:34', '01', NULL, '2022-01-25', 'Recieved', 1, '2022-01-25 15:08:46', NULL, NULL),
(11, 'mbusajoseph60@gmail.com', 'Shirts,T-shirts', '2022-02-05 17:30:57', '02', NULL, '2022-02-05', 'Recieved', 1, '2022-02-05 20:30:27', NULL, NULL),
(12, 'douglaskikonyogo@gmail.com', 'Shirts,Trousers', '2022-02-20 16:26:29', '02', NULL, '2022-02-19', 'pending', 1, '2022-02-20 19:26:29', NULL, NULL),
(13, 'douglaskikonyogo@gmail.com', 'Shirts,Trousers', '2022-02-20 16:28:02', '02', NULL, '2022-02-18', 'pending', 1, '2022-02-20 19:28:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `food_donations`
--

CREATE TABLE `food_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `categories` text NOT NULL,
  `donated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `month` varchar(2) NOT NULL,
  `renew` varchar(20) DEFAULT NULL,
  `expected_on` datetime NOT NULL,
  `donation_status` varchar(20) NOT NULL DEFAULT 'pending',
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_donations`
--

INSERT INTO `food_donations` (`id`, `email`, `categories`, `donated_at`, `month`, `renew`, `expected_on`, `donation_status`, `is_public`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'mbusajoseph@gmail.com', 'Matooke,Rice,Irish Potatoes,Pease,G-Nuts,Meat,Fish,Eggs', '2022-01-17 16:23:55', '11', NULL, '2021-12-13 00:00:00', 'Recieved', 1, '2021-11-22 22:51:32', NULL, NULL),
(2, 'solomonkamukama@gmail.com', 'Matooke,Rice,Irish Potatoes,Cassave,Maize,Beans,Millet', '2022-01-17 17:19:39', '12', NULL, '2021-12-10 00:00:00', 'Recieved', 1, '2021-12-07 13:09:26', NULL, NULL),
(3, 'chelimojoan@gmail.com', 'Matooke,Rice,Beans,Pease', '2022-01-18 10:53:21', '12', NULL, '2021-11-07 00:00:00', 'Recieved', 0, '2021-12-07 13:12:36', NULL, NULL),
(4, 'lubinga.isaac@gmail.com', 'Posho,Rice,Sugar', '2022-01-18 10:53:11', '12', NULL, '2021-12-17 00:00:00', 'Recieved', 1, '2021-12-16 13:41:50', NULL, NULL),
(5, 'violakomugisha@gmail.com', 'sugar', '2022-01-18 10:52:58', '01', NULL, '2022-01-17 00:00:00', 'Recieved', 1, '2022-01-17 16:09:18', NULL, NULL),
(6, 'mbusajoseph60@gmail.com', 'Matooke,Posho', '2022-01-18 11:54:47', '01', NULL, '0000-00-00 00:00:00', 'Recieved', 0, '2022-01-18 14:52:46', NULL, NULL),
(7, 'mbusajoseph60@gmail.com', 'Matooke,Posho', '2022-01-18 11:54:55', '01', NULL, '2022-01-18 00:00:00', 'Recieved', 0, '2022-01-18 14:53:11', NULL, NULL),
(8, 'mbusajoseph60@gmail.com', 'Matooke,Posho,Cassave', '2022-01-19 10:34:38', '01', NULL, '2022-01-19 00:00:00', 'Recieved', 0, '2022-01-19 13:31:42', NULL, NULL),
(9, 'mbusajoseph60@gmail.com', 'Maize', '2022-01-19 11:11:34', '01', NULL, '2022-01-19 00:00:00', 'Recieved', 0, '2022-01-19 14:06:11', NULL, NULL),
(10, 'violakomugisha@gmail.com', 'Matooke,Posho,Rice', '2022-02-11 09:54:18', '01', NULL, '2022-01-20 00:00:00', 'Recieved', 1, '2022-01-20 13:39:02', NULL, NULL),
(11, 'mbusajoseph60@gmail.com', 'Matooke,Irish Potatoes,Sweet Potatoes,Cassave,G-Nuts', '2022-02-11 10:10:31', '01', NULL, '2022-01-25 00:00:00', 'Received', 1, '2022-01-25 16:07:01', NULL, NULL),
(12, 'mbusajoseph60@gmail.com', 'Maize,Beans,Pease', '2022-02-11 10:09:58', '02', NULL, '2022-02-11 00:00:00', 'Received', 1, '2022-02-11 12:53:30', NULL, NULL),
(13, 'mbusajoseph60@gmail.com', 'Matooke,Irish Potatoes,Maize,sugarcanes', '2022-02-20 14:35:41', '02', NULL, '2022-02-27 00:00:00', 'Received', 0, '2022-02-20 17:30:47', NULL, NULL),
(14, 'douglaskikonyogo@gmail.com', 'Matooke', '2022-02-20 16:27:17', '02', NULL, '2022-02-19 00:00:00', 'pending', 1, '2022-02-20 19:27:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `migration` varchar(100) NOT NULL,
  `migrated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `migrated_at`) VALUES
(1, '2021_10_28_004229_create_users_table', '2021-11-22 19:46:41'),
(2, '2021_10_28_005147_create_password_resets_table', '2021-11-22 19:46:42'),
(3, '2021_11_20_151519_create_payments_table', '2021-11-22 19:46:43'),
(4, '2021_11_22_110315_create_clothes_donations_table', '2021-11-22 19:46:44'),
(5, '2021_11_22_111359_create_food_donations_table', '2021-11-22 19:46:44'),
(6, '2021_11_22_111556_create_shoes_donations_table', '2021-11-22 19:46:45'),
(7, '2021_12_07_160814_create_other_donations_table', '2021-12-07 13:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `other_donations`
--

CREATE TABLE `other_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `categories` text NOT NULL,
  `donated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expected_on` datetime NOT NULL,
  `month` varchar(2) NOT NULL,
  `donation_status` varchar(20) NOT NULL DEFAULT 'pending',
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_donations`
--

INSERT INTO `other_donations` (`id`, `email`, `categories`, `donated_at`, `expected_on`, `month`, `donation_status`, `is_public`, `deleted_at`) VALUES
(1, 'nasasiradevis@gmail.com', 'Administrative Car,Delivery and pick up van,water', '2022-01-19 11:18:07', '2021-11-07 00:00:00', '12', 'Recieved', 1, NULL),
(2, 'violakomugisha@gmail.com', 'sugar,milk,soap,', '2022-01-20 14:18:27', '2022-01-20 00:00:00', '01', 'Recieved', 1, NULL),
(3, 'mbusajoseph60@gmail.com', 'Panado,sugar,Onions,,,Tomatoes,,', '2022-02-05 17:48:22', '2022-02-05 00:00:00', '02', 'pending', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(35) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `amount` int(11) NOT NULL,
  `txt_ref` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `donated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `month` varchar(2) NOT NULL,
  `is_anonymous` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `email`, `amount`, `txt_ref`, `transaction_id`, `donated_at`, `month`, `is_anonymous`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'detectivejoan@gmail.com', 50, '-7734674198', '2679417', '2021-12-07 11:45:09', '12', 0, '2021-12-07 11:45:09', NULL, NULL),
(2, 'kabirashadick@gmail.com', 100, '-440561367', '2680072', '2021-12-07 15:06:33', '10', 1, '2021-12-07 15:06:33', NULL, NULL),
(3, 'prettybridgetgema@gmail.com', 1000, '-4700035845', '2680077', '2021-12-07 15:09:59', '12', 0, '2021-12-07 15:09:59', NULL, NULL),
(4, 'ascendemmy06@gmail.com', 1000, '-7552666570', '2680085', '2021-12-07 15:13:25', '09', 1, '2021-12-07 15:13:25', NULL, NULL),
(5, 'mbusajoseph60@gmail.com', 1000, '-7669583554', '2686702', '2021-12-09 21:30:07', '12', 0, '2021-12-09 21:30:07', NULL, NULL),
(6, 'mbusajoseph60@gmail.com', 1000, '-607828238', '2686754', '2021-12-09 21:57:16', '12', 0, '2021-12-09 21:57:16', NULL, NULL),
(7, 'prettybridgetgema@gmail.com', 200, '-8873859433', '2686781', '2021-12-09 22:04:57', '12', 0, '2021-12-09 22:04:57', NULL, NULL),
(8, 'buwembojulius2@gmail.com', 500, '-3796598121', '2758728', '2021-12-20 20:54:09', '12', 0, '2021-12-20 20:54:09', NULL, NULL),
(9, 'godwintumuhimbise96@gmail.com', 50000, '-8472236213', '2758848', '2021-12-20 22:16:10', '12', 0, '2021-12-20 22:16:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_donations`
--

CREATE TABLE `shoes_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `donated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `renew` varchar(20) DEFAULT NULL,
  `expected_on` datetime NOT NULL,
  `month` varchar(2) NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT 0,
  `donation_status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_donations`
--

INSERT INTO `shoes_donations` (`id`, `email`, `quantity`, `donated_at`, `renew`, `expected_on`, `month`, `is_public`, `donation_status`, `created_at`, `update_at`, `deleted_at`) VALUES
(1, 'lubingaisaac@gmail.com', 20, '2022-01-19 14:22:50', NULL, '2021-12-06 00:00:00', '11', 1, 'Recieved', '2021-11-22 23:12:25', NULL, NULL),
(2, 'mbusajoseph60@gmail.com', 3, '2022-01-19 11:17:08', NULL, '2022-01-18 00:00:00', '01', 0, 'Recieved', '2022-01-18 14:14:51', NULL, NULL),
(3, 'mbusajoseph60@gmail.com', 4, '2022-01-19 14:22:47', NULL, '2022-01-19 00:00:00', '01', 0, 'Recieved', '2022-01-19 17:21:16', NULL, NULL),
(4, 'mbusajoseph60@gmail.com', 10, '2022-01-19 14:24:34', NULL, '2022-01-19 00:00:00', '01', 1, 'Recieved', '2022-01-19 17:23:47', NULL, NULL),
(5, 'violakomugisha@gmail.com', 20, '2022-01-20 14:18:49', NULL, '2022-01-20 00:00:00', '01', 1, 'Recieved', '2022-01-20 13:39:51', NULL, NULL),
(6, 'violakomugisha@gmail.com', 26, '2022-01-25 13:34:56', NULL, '2022-01-25 00:00:00', '01', 1, 'Recieved', '2022-01-25 16:32:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `account_type` varchar(100) NOT NULL DEFAULT 'user',
  `password` varchar(100) NOT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  `user_agent` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `account_type`, `password`, `img_url`, `user_agent`, `created_at`, `update_at`) VALUES
(1, 'Godfrey', 'Rutaro', 'bridgetnamugema@gmail.com', '0703459872', 'admin', '$2y$10$TE4ohZRc/wsCQdMMdNz.C.eHJADF2YSAm4Y16zt1wg4hv40CxU9Ge', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-11-22 22:47:37', NULL),
(2, 'Joseph', 'Mbusa', 'mbusajoseph@gmail.com', '0776892301', 'admin', '$2y$10$ihEsMvslEYB5vWpYPD.4KOc46YwdJqVVZFefma4Pdp4UA1HfRl.GW', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-11-22 22:51:32', NULL),
(3, 'Isaac Lubinga', 'Mukiibi', 'mukiibiisaac@gmail.com', '0708963120', 'admin', '$2y$10$enxecq.p3GbOsn79VsE/3.yCjj.FVFHIcx1QWfi3wGX09G8mh8pj2', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-11-22 22:57:06', NULL),
(4, 'Isaac Lubinga', 'Mukibi', 'lubingaisaac@gmail.com', '0746589674', 'admin', '$2y$10$GxKjbvgUEg5Wz4Fb.xAMtOmaP3hLkRztN25cYsE9MFqYESjORDjdy', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-11-22 23:00:45', NULL),
(5, 'Mbusa', 'Joseph', 'mbusajoseph60@gmail.com', '+256773463487', 'admin', '$2y$10$uUmYnUMr.zlmC8tDFi3E7eq4ZV5vYXwyUfsgn0JBphXCdK18WKzZa', NULL, '', '2021-12-07 07:22:04', NULL),
(6, 'Tumuhimbise', 'Godwin', 'usher.godwin@yahoo.com', '0754438448', 'admin', '$2y$10$bhXgHdV9tdVm.fF3d2GNge/gAOMvrBLzoCQpyBfmu8Ihf32cnXZMO', NULL, '', '2021-12-07 10:26:26', NULL),
(7, 'Amumpire', 'Joan', 'detectivejoan@gmail.com', '0775689315', 'admin', '$2y$10$8IcxA0WktPTKsShSQg1MpO0My89W.vR8zTqAWZVcSqjRZxYSCUr6S', NULL, '', '2021-12-07 11:40:44', NULL),
(8, 'Kamukama', 'Solomon', 'solomonkamukama@gmail.com', '0456789315', 'admin', '$2y$10$A3/WeZqkhH/3y84bzjHl3ehGUYhfNsF5a3nuv1mLsn3x2QLpFfmiG', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-12-07 13:09:26', NULL),
(9, 'Chelmo', 'Joan Somikwo', 'chelimojoan@gmail.com', '0786983245', 'admin', '$2y$10$mVnhQTmmIX96CpHffdw1yu1i50ntsqGH9gr79NPwMYL24MdM0oiby', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-12-07 13:12:36', NULL),
(10, 'Kabira', 'Shadick', 'kabirashadick@gmail.com', '0765893245', 'admin', '$2y$10$eY3/U9tQ4/p.d6CF2r1sn.K433WfDwvTTCTrpNGxQyoAwOTVV2gwu', NULL, '', '2021-12-07 15:05:32', NULL),
(11, 'Namugema', 'Bridget', 'prettybridgetgema@gmail.com', '07896532489', 'user', '$2y$10$.1jiCQiGHaHs2eGXrIY8oO8hk5ZLqMXAj.wkyZNWHXxkq/BcnaSUu', NULL, '', '2021-12-07 15:09:30', NULL),
(12, 'Batembe', 'Emmy', 'ascendemmy06@gmail.com', '0789653214', 'admin', '$2y$10$LGmjYXWbK8DNtKYqvdoLF.XAKvRLXN7M/lK7wDzM/wqKObxKdZVOW', NULL, '', '2021-12-07 15:12:56', NULL),
(13, 'Nasasira', 'Devis', 'nasasiradevis@gmail.com', '0789653245', 'user', '$2y$10$bvEnVa2t8ihZDEjoPYyszun5hmRj6lPeGXlQ0z6/JZ3Y5tIibUBtm', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2021-12-07 16:42:06', NULL),
(19, 'Lubinga', 'Isaac', 'lubinga.isaac@gmail.com', '0775000477', 'admin', '$2y$10$XksNpuNEDf61b8p2WyIPxuRhwGSzR09jVHpAQhqDNFRVkyBd5sOqa', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '2021-12-16 13:41:50', NULL),
(20, 'Viola', 'Komugisha', 'violakomugisha@gmail.com', '0705580839', 'admin', '$2y$10$pEUnR2ZB5KDDf5rke1cQcunBc90Z8ccFdjZVk2vFfTw64QxFpDHoi', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', '2021-12-20 20:47:34', NULL),
(21, 'Buwembo', 'Julius', 'buwembojulius2@gmail.com', '0750047518', 'admin', '$2y$10$pu9GYvGiOzIG3idRz7MJZ.36FAf26VpiRN2WB6oCC.p66lkyYhM5S', NULL, '', '2021-12-20 20:51:31', NULL),
(28, 'Tumuhimbise', 'Godwin', 'godwintumuhimbise96@gmail.com', '0754438448', 'user', '$2y$10$xd7w9QDYQbY4r8cbjC9vy.EyRSEthp1aTNsSLunqC6OCu.OtExAH6', NULL, '', '2021-12-20 22:07:59', NULL),
(29, 'Charles', 'Thembo', 'ashley7520charles@gmail.com', '0787444081', 'user', '$2y$10$uI2e2TI95.iKLiJKvSLJSOgDVhYZG9EjWYu2NYJBlPm6Hdmx0VAt.', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', '2022-01-14 18:12:17', NULL),
(50, 'Godfrey', 'Rutaro', 'rutaroroots@gmail.com', '0701557601', 'user', '$2y$10$uI2e2TI95.iKLiJKvSLJSOgDVhYZG9EjWYu2NYJBlPm6Hdmx0VAt.', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '2022-02-20 00:00:00', NULL),
(51, 'Douglas', 'Kikonyogo', 'douglaskikonyogo@gmail.com', '0788837370', 'user', '$2y$10$0jC7eEhuZoroyjC0Kby3RePKdqOt0AEtKE2fca2sYyTpUDZcl.NVu', NULL, '', '2022-02-20 19:21:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes_donations`
--
ALTER TABLE `clothes_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clothes_donations_email` (`email`);

--
-- Indexes for table `food_donations`
--
ALTER TABLE `food_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_food_donations_email` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_donations`
--
ALTER TABLE `other_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_other_donations_email` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payments_email` (`email`);

--
-- Indexes for table `shoes_donations`
--
ALTER TABLE `shoes_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shoes_donations_email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes_donations`
--
ALTER TABLE `clothes_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `food_donations`
--
ALTER TABLE `food_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_donations`
--
ALTER TABLE `other_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shoes_donations`
--
ALTER TABLE `shoes_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clothes_donations`
--
ALTER TABLE `clothes_donations`
  ADD CONSTRAINT `fk_clothes_donations_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `food_donations`
--
ALTER TABLE `food_donations`
  ADD CONSTRAINT `fk_food_donations_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `other_donations`
--
ALTER TABLE `other_donations`
  ADD CONSTRAINT `fk_other_donations_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `shoes_donations`
--
ALTER TABLE `shoes_donations`
  ADD CONSTRAINT `fk_shoes_donations_email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
