-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2023 at 02:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oysterchecks`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `ip_address`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-14 14:39:22', '2023-03-14 14:39:22'),
(2, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 09:46:41', '2023-03-17 09:46:41'),
(3, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 10:15:40', '2023-03-17 10:15:40'),
(4, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 10:59:21', '2023-03-17 10:59:21'),
(5, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 11:36:57', '2023-03-17 11:36:57'),
(6, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 12:40:43', '2023-03-17 12:40:43'),
(7, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 13:00:36', '2023-03-17 13:00:36'),
(8, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-17 20:41:58', '2023-03-17 20:41:58'),
(9, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-20 07:44:40', '2023-03-20 07:44:40'),
(10, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-21 10:11:38', '2023-03-21 10:11:38'),
(11, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-21 13:45:57', '2023-03-21 13:45:57'),
(12, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-21 14:05:15', '2023-03-21 14:05:15'),
(13, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 09:48:35', '2023-03-23 09:48:35'),
(14, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 11:11:45', '2023-03-23 11:11:45'),
(15, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 11:23:11', '2023-03-23 11:23:11'),
(16, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 12:15:21', '2023-03-23 12:15:21'),
(17, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 14:02:33', '2023-03-23 14:02:33'),
(18, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 14:35:31', '2023-03-23 14:35:31'),
(19, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 21:31:08', '2023-03-23 21:31:08'),
(20, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 21:48:19', '2023-03-23 21:48:19'),
(21, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-24 10:04:00', '2023-03-24 10:04:00'),
(22, 1, 'New Login Request', '102.89.44.96', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-27 19:28:37', '2023-03-27 19:28:37'),
(23, 1, 'New Login Request', '102.89.44.96', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-27 20:11:30', '2023-03-27 20:11:30'),
(24, 9, 'New Login Request', '102.89.44.83', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-04 20:30:38', '2023-04-04 20:30:38'),
(25, 9, 'New Login Request', '102.89.44.83', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-04 21:03:12', '2023-04-04 21:03:12'),
(26, 1, 'New Login Request', '102.89.44.83', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-04 21:44:36', '2023-04-04 21:44:36'),
(27, 1, 'New Login Request', '102.89.47.207', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-11 17:46:27', '2023-04-11 17:46:27'),
(28, 1, 'Updated Personal Information', '102.89.46.210', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-11 18:01:22', '2023-04-11 18:01:22'),
(29, 1, 'New Login Request', '102.89.47.98', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-11 18:30:14', '2023-04-11 18:30:14'),
(30, 15, 'New Login Request', '102.89.47.98', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-11 18:31:49', '2023-04-11 18:31:49'),
(31, 16, 'New Login Request', '102.89.47.147', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.6.1 Safari/605.1.15', '2023-04-11 18:45:59', '2023-04-11 18:45:59'),
(32, 1, 'New Login Request', '102.89.46.210', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-11 21:36:02', '2023-04-11 21:36:02'),
(33, 1, 'New Login Request', '102.89.47.207', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-11 22:22:14', '2023-04-11 22:22:14'),
(34, 1, 'New Login Request', '102.89.46.238', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-04-12 06:52:22', '2023-04-12 06:52:22'),
(35, 1, 'New Login Request', '212.46.33.54', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-20 17:22:26', '2023-04-20 17:22:26'),
(36, 18, 'New Login Request', '197.210.8.73', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.48', '2023-04-20 20:49:20', '2023-04-20 20:49:20'),
(37, 1, 'New Login Request', '197.210.8.148', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-20 22:05:21', '2023-04-20 22:05:21'),
(38, 1, 'New Login Request', '102.89.47.248', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-02 16:09:59', '2023-05-02 16:09:59'),
(39, 1, 'New Login Request', '102.89.46.57', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-02 18:05:38', '2023-05-02 18:05:38'),
(40, 1, 'New Login Request', '102.89.47.248', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-02 20:39:01', '2023-05-02 20:39:01'),
(41, 1, 'New Login Request', '162.255.45.152', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04 20:28:22', '2023-05-04 20:28:22'),
(42, 1, 'New Login Request', '162.255.45.152', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04 21:03:23', '2023-05-04 21:03:23'),
(43, 1, 'New Login Request', '102.89.40.225', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-09 18:35:30', '2023-05-09 18:35:30'),
(44, 22, 'New Login Request', '102.89.46.80', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', '2023-05-11 19:44:06', '2023-05-11 19:44:06'),
(45, 22, 'New Login Request', '102.89.33.67', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-19 21:48:33', '2023-06-19 21:48:33'),
(46, 22, 'New Login Request', '102.89.32.51', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-19 22:10:16', '2023-06-19 22:10:16'),
(47, 22, 'New Login Request', '102.89.32.51', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-20 04:24:29', '2023-06-20 04:24:29'),
(48, 22, 'New Login Request', '102.89.32.51', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-20 04:41:13', '2023-06-20 04:41:13'),
(49, 22, 'New Login Request', '102.89.44.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-20 15:46:03', '2023-06-20 15:46:03'),
(50, 22, 'New Login Request', '41.76.192.41', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-26 17:09:31', '2023-06-26 17:09:31'),
(51, 1, 'New Login Request', '102.89.34.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-30 16:27:15', '2023-06-30 16:27:15'),
(52, 24, 'New Login Request', '102.89.34.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-30 16:32:40', '2023-06-30 16:32:40'),
(53, 1, 'New Login Request', '102.89.34.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-30 16:34:30', '2023-06-30 16:34:30'),
(54, 22, 'New Login Request', '41.76.192.41', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-05 17:14:42', '2023-07-05 17:14:42'),
(55, 25, 'New Login Request', '148.252.129.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.67', '2023-07-07 12:28:32', '2023-07-07 12:28:32'),
(56, 1, 'New Login Request', '102.89.33.155', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-08 22:49:59', '2023-07-08 22:49:59'),
(57, 1, 'New Login Request', '102.89.33.155', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-08 23:01:20', '2023-07-08 23:01:20'),
(58, 1, 'New Login Request', '102.89.33.91', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-10 05:37:00', '2023-07-10 05:37:00'),
(59, 22, 'New Login Request', '102.89.33.110', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-17 23:24:30', '2023-07-17 23:24:30'),
(60, 22, 'New Login Request', '197.210.8.157', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-21 16:37:43', '2023-07-21 16:37:43'),
(61, 1, 'New Login Request', '102.89.22.23', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-31 17:38:45', '2023-07-31 17:38:45'),
(62, 26, 'New Login Request', '102.89.23.225', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-31 18:07:47', '2023-07-31 18:07:47'),
(63, 27, 'New Login Request', '161.129.70.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-31 18:40:28', '2023-07-31 18:40:28'),
(64, 1, 'New Login Request', '161.129.70.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-31 19:11:57', '2023-07-31 19:11:57'),
(65, 1, 'New Login Request', '102.89.34.90', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-31 22:08:25', '2023-07-31 22:08:25'),
(66, 1, 'New Login Request', '102.89.34.215', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-31 22:09:07', '2023-07-31 22:09:07'),
(67, 22, 'New Login Request', '197.210.8.247', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-07 15:46:34', '2023-08-07 15:46:34'),
(68, 22, 'New Login Request', '197.210.8.247', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-07 16:09:21', '2023-08-07 16:09:21'),
(69, 22, 'New Login Request', '197.210.8.247', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-07 16:37:33', '2023-08-07 16:37:33'),
(70, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-08 22:33:34', '2023-08-08 22:33:34'),
(71, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-08 23:45:26', '2023-08-08 23:45:26'),
(72, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 09:36:03', '2023-08-09 09:36:03'),
(73, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 14:35:44', '2023-08-09 14:35:44'),
(74, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 15:46:39', '2023-08-09 15:46:39'),
(75, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 19:02:46', '2023-08-09 19:02:46'),
(76, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 19:35:15', '2023-08-09 19:35:15'),
(77, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 21:21:46', '2023-08-09 21:21:46'),
(78, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-09 23:54:45', '2023-08-09 23:54:45'),
(79, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-10 00:56:25', '2023-08-10 00:56:25'),
(80, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-10 08:11:26', '2023-08-10 08:11:26'),
(81, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-10 08:42:22', '2023-08-10 08:42:22'),
(82, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-11 09:37:42', '2023-08-11 09:37:42'),
(83, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-11 10:54:27', '2023-08-11 10:54:27'),
(84, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-11 12:36:07', '2023-08-11 12:36:07'),
(85, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 10:56:44', '2023-08-14 10:56:44'),
(86, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 11:17:06', '2023-08-14 11:17:06'),
(87, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 11:49:21', '2023-08-14 11:49:21'),
(88, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 12:07:47', '2023-08-14 12:07:47'),
(89, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 12:42:47', '2023-08-14 12:42:47'),
(90, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 14:07:17', '2023-08-14 14:07:17'),
(91, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-14 14:52:58', '2023-08-14 14:52:58'),
(92, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-15 10:26:13', '2023-08-15 10:26:13'),
(93, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-17 11:41:27', '2023-08-17 11:41:27'),
(94, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-17 12:10:05', '2023-08-17 12:10:05'),
(95, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-18 23:38:17', '2023-08-18 23:38:17'),
(96, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-21 08:04:44', '2023-08-21 08:04:44'),
(97, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-21 08:37:55', '2023-08-21 08:37:55'),
(98, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-21 09:05:25', '2023-08-21 09:05:25'),
(99, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-21 11:37:24', '2023-08-21 11:37:24'),
(100, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-22 08:32:00', '2023-08-22 08:32:00'),
(101, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-08-22 10:51:11', '2023-08-22 10:51:11'),
(102, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2023-08-28 08:39:09', '2023-08-28 08:39:09'),
(103, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2023-08-28 09:05:39', '2023-08-28 09:05:39'),
(104, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2023-08-28 10:02:06', '2023-08-28 10:02:06'),
(105, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2023-08-28 11:16:23', '2023-08-28 11:16:23'),
(106, 1, 'New Login Request', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2023-09-09 12:21:45', '2023-09-09 12:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `address_verifications`
--

CREATE TABLE `address_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0,
  `expected_report_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_verifications`
--

INSERT INTO `address_verifications` (`id`, `verification_id`, `ref`, `user_id`, `status`, `service_reference`, `slug`, `first_name`, `middle_name`, `last_name`, `phone`, `email`, `dob`, `image`, `created_at`, `updated_at`, `is_sandbox`, `expected_report_date`) VALUES
(1, '11', 'rULGe7TDw8jeHZl3aQFO2093', '1', 'pending', '641c210c3214f9fdf35d33c7', 'individual-address', 'emma', 'Michael', 'kachi', '2340987676567', 'mikkynoble@gmail.com', '1992-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679565067/oysterchecks/candidates/bzchbqdllafhosszxqfh.jpg', '2023-03-23 09:51:08', '2023-03-23 09:51:08', 0, '2023-08-24 15:53:57'),
(2, '11', 'lGl22CH15C6GXfTuZN2916', '1', 'pending', '64de0386a1e28fc7465687c8', 'individual-address', 'michael', 'kachi', 'ozoudeh', '08039366207', 'mikkynoble@gmail.com', '1991-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692019663/oysterchecks/candidates/shqi2icxpbzfa8tvh3vf.jpg', '2023-08-14 13:27:45', '2023-08-14 13:27:45', 0, '2023-08-23 00:00:00'),
(3, '11', 'BLnvIchCT3pc9Spgj5vs3205', '1', 'pending', '64de18460ffc1696c4cab310', 'individual-address', 'michael', 'kachi', 'michael', '08028739833', 'engineering@konga.com', '1995-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692276804/oysterchecks/candidates/mxzejnqscdmrw8rbvkf2.jpg', '2023-08-17 12:53:26', '2023-08-17 12:53:26', 0, '2023-08-23 00:00:00'),
(4, '11', '4QX6bJickYcKm9abWa58947', '1', 'completed', '64da2bd10ffc166d1acab19f', 'individual-address', 'michael', 'kachi', 'michael', '08028739833', 'info@greatjasmine.com.ng', '1991-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692402394/oysterchecks/candidates/ercsfiai2qgzbn49clys.jpg', '2023-08-18 23:46:37', '2023-08-19 01:42:42', 0, '2023-08-23 00:00:00'),
(5, '11', 'Nky3KsVgJCtrUSoB9NsN4057', '1', 'pending', '64e00afa0ffc1605c7cab341', 'individual-address', 'michael', 'kachi', 'michael', '08028739833', 'engineering@konga.com', '1991-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692404473/oysterchecks/candidates/pd5keqbojmzo4b6e0rxq.jpg', '2023-08-19 00:21:14', '2023-08-19 00:21:14', 0, '2023-08-23 00:00:00'),
(6, '11', 'jV6mqGPMPKH00BXo42KZ2072', '1', 'pending', '64e014c00ffc164954cab35c', 'individual-address', 'Cynthia', 'Morgans', 'kachi', '08028739833', 'mikkynoble@gmail.com', '1995-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692406975/oysterchecks/candidates/dmxwzmszeqjgfadyqdw1.jpg', '2023-08-19 01:02:56', '2023-08-19 01:02:56', 0, '2023-08-23 00:00:00'),
(7, '11', 'dOeOQdIWWczfU75gWVN5495', '1', 'completed', '64e01a900ffc163e58cab365', 'individual-address', 'Cythia', 'Nkem', 'kachi', '08028739834', 'michaelkachi2018@gmail.com', '1995-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692408463/oysterchecks/candidates/vyqsle3r6oiumchxaynh.jpg', '2023-08-19 01:27:44', '2023-08-19 01:43:57', 0, '2023-08-23 00:00:00'),
(8, '11', '0phZ1r99ajfegiv4qN4366', '1', 'pending', '64e367db0ffc1666d0cab382', 'individual-address', 'michael', 'kachi', 'michael', '08028739833', 'jesmikky@gmail.com', '1995-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692624857/oysterchecks/candidates/doii7z4zakue8jalwy2r.jpg', '2023-08-21 13:34:19', '2023-08-21 13:34:19', 0, '2023-08-24 00:00:00'),
(9, '11', 'l1TZudM6ziNslkhzEDW9712', '1', 'pending', '64e36b05a1e28f63b5568dc4', 'individual-address', 'Mobolaji', 'O', 'Olajide', '08122231477', 'bjdemoy@gmail.com', '1995-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692625667/oysterchecks/candidates/kbsjjnviuld5k5c6ncwd.jpg', '2023-08-21 13:47:49', '2023-08-21 13:47:49', 0, '2023-08-24 00:00:00'),
(10, '12', 'uRPbknPjFQcwjip30x312833', '1', 'pending', '64e4933b0ffc16892ccab397', 'reference-address', 'michael', 'kachi', 'michael', '08028739833', 'michaelkachi2018@gmail.com', '1995-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1692701497/oysterchecks/candidates/ir3uvu0bpkmmyvqxknpx.jpg', '2023-08-22 10:51:39', '2023-08-22 10:51:39', 0, '2023-08-26 11:51:39'),
(11, '12', '2Iq1CWmhTXB1TnTxD0TE7095', '1', 'pending', '64ecbb620ffc164f3acab41d', 'reference-address', 'ABRRAM', 'Gregory', 'Olajide', '08122231477', 'mikkynoble@gmail.com', '1991-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1693236064/oysterchecks/candidates/a9oufmiqitprbcbtbipt.jpg', '2023-08-28 15:21:06', '2023-08-28 15:21:06', 0, '2023-09-01 16:21:06'),
(12, '13', 'qW9U4fv4CLW31CaOhRgi9259', '1', 'pending', '64ecbda10ffc16c99fcab426', 'business-address', 'michael', 'kachi', 'kachi', '08028739833', 'mikkynoble@gmail.com', '1991-12-05', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1693236640/oysterchecks/candidates/fbk7ikrfaf3vdiljk2x6.png', '2023-08-28 15:30:41', '2023-08-28 15:30:41', 0, '2023-09-01 16:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `address_verification_details`
--

CREATE TABLE `address_verification_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_verification_id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `candidate` text NOT NULL,
  `guarantor` text DEFAULT NULL,
  `business` text DEFAULT NULL,
  `agent` text NOT NULL,
  `address` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `task_status` varchar(255) NOT NULL,
  `subject_consent` varchar(255) NOT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `submitted_at` varchar(255) DEFAULT NULL,
  `execution_date` varchar(255) DEFAULT NULL,
  `completed_at` varchar(255) DEFAULT NULL,
  `accepted_at` varchar(255) DEFAULT NULL,
  `revalidation_date` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `is_flagged` tinyint(1) NOT NULL DEFAULT 0,
  `agent_submitted_longitude` varchar(255) DEFAULT NULL,
  `agent_submitted_latitude` varchar(255) DEFAULT NULL,
  `report_geolocation_url` varchar(255) DEFAULT NULL,
  `map_address_url` varchar(255) DEFAULT NULL,
  `submission_distance_in_meters` varchar(255) DEFAULT NULL,
  `reasons` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `building_type` varchar(255) DEFAULT NULL,
  `building_color` varchar(255) DEFAULT NULL,
  `gate_present` varchar(255) DEFAULT NULL,
  `gate_color` varchar(255) DEFAULT NULL,
  `availability_confirmed_by` varchar(255) DEFAULT NULL,
  `closest_landmark` varchar(255) DEFAULT NULL,
  `additional_info` varchar(255) DEFAULT NULL,
  `report_agent_access` varchar(255) DEFAULT NULL,
  `incident_report` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `report_id` varchar(255) NOT NULL,
  `download_url` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) NOT NULL,
  `business_id` varchar(255) NOT NULL,
  `yv_user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `yv_id` varchar(255) NOT NULL,
  `links` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_verification_details`
--

INSERT INTO `address_verification_details` (`id`, `address_verification_id`, `reference_id`, `candidate`, `guarantor`, `business`, `agent`, `address`, `status`, `task_status`, `subject_consent`, `start_date`, `end_date`, `submitted_at`, `execution_date`, `completed_at`, `accepted_at`, `revalidation_date`, `notes`, `is_flagged`, `agent_submitted_longitude`, `agent_submitted_latitude`, `report_geolocation_url`, `map_address_url`, `submission_distance_in_meters`, `reasons`, `signature`, `images`, `building_type`, `building_color`, `gate_present`, `gate_color`, `availability_confirmed_by`, `closest_landmark`, `additional_info`, `report_agent_access`, `incident_report`, `description`, `report_id`, `download_url`, `business_type`, `business_id`, `yv_user_id`, `type`, `yv_id`, `links`, `created_at`, `updated_at`) VALUES
(1, 2, '64de0386a1e28fc7465687c8', '\"{\\\"candidateId\\\":\\\"64de1b36a1e28f96b7568853\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"ozoudeh\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692019663\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/shqi2icxpbzfa8tvh3vf.jpg\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"08039366207\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":\\\"Igwe\\\",\\\"middleName\\\":null,\\\"lastName\\\":\\\"Juliet\\\",\\\"signature\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/atp-youverify.fra1.digitaloceanspaces.com\\\\\\/profile-photos\\\\\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\\\"}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'completed', 'VERIFIED', '1', NULL, NULL, '2023-08-17T12:25:35.969Z', '2023-08-17T12:25:35.969Z', NULL, NULL, NULL, '\"[{\\\"createdAt\\\":null,\\\"note\\\":\\\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\\\"}]\"', 0, '3.3764214', '6.611701', 'https://www.google.com/maps/search/?api=1&query=6.611701,3.3764214', 'https://google.com/maps/search/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria', NULL, NULL, 'https://youverify-cdn.fra1.digitaloceanspaces.com/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png', '\"[{\\\"filePath\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\\\",\\\"fileType\\\":null,\\\"height\\\":null,\\\"width\\\":null,\\\"longitude\\\":3.3764213999999999060719346744008362293243408203125,\\\"latitude\\\":6.611701000000000050249582272954285144805908203125}]\"', 'Storey Building', 'White', '1', 'White', 'Gatekeeper', 'Alagomeji Bus stop', 'sample verification for Morgan Consulting', NULL, NULL, 'Verify the candidate', '64db86b80ffc16087ccab267', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64db86b80ffc16efe9cab265', '\"[]\"', '2023-08-15 14:07:52', '2023-08-18 23:35:07'),
(2, 3, '64de2f600ffc1606f7cab315', '\"{\\\"candidateId\\\":\\\"64de18460ffc1696c4cab310\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"michael\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692276804\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/mxzejnqscdmrw8rbvkf2.jpg\\\",\\\"email\\\":\\\"engineering@konga.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":\\\"Igwe\\\",\\\"middleName\\\":null,\\\"lastName\\\":\\\"Juliet\\\",\\\"signature\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/atp-youverify.fra1.digitaloceanspaces.com\\\\\\/profile-photos\\\\\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\\\"}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'completed', 'VERIFIED', '1', NULL, NULL, '2023-08-17T12:25:35.969Z', '2023-08-17T12:25:35.969Z', NULL, NULL, NULL, '\"[{\\\"createdAt\\\":null,\\\"note\\\":\\\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\\\"}]\"', 0, '3.3764214', '6.611701', 'https://www.google.com/maps/search/?api=1&query=6.611701,3.3764214', 'https://google.com/maps/search/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria', NULL, NULL, 'https://youverify-cdn.fra1.digitaloceanspaces.com/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png', '\"[{\\\"filePath\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\\\",\\\"fileType\\\":null,\\\"height\\\":null,\\\"width\\\":null,\\\"longitude\\\":3.3764213999999999060719346744008362293243408203125,\\\"latitude\\\":6.611701000000000050249582272954285144805908203125}]\"', 'Storey Building', 'White', '1', 'White', 'Gatekeeper', 'Alagomeji Bus stop', 'sample verification for Morgan Consulting', NULL, NULL, 'Verify the candidate', '64de2f600ffc1606f7cab315', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64de2f600ffc16b524cab313', '\"[]\"', '2023-08-17 14:32:00', '2023-08-19 00:59:48'),
(3, 5, '64e00b360ffc161679cab346', '\"{\\\"candidateId\\\":\\\"64e00afa0ffc1605c7cab341\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"michael\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692404473\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/pd5keqbojmzo4b6e0rxq.jpg\\\",\\\"email\\\":\\\"engineering@konga.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":\\\"Igwe\\\",\\\"middleName\\\":null,\\\"lastName\\\":\\\"Juliet\\\",\\\"signature\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/atp-youverify.fra1.digitaloceanspaces.com\\\\\\/profile-photos\\\\\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\\\"}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'completed', 'VERIFIED', '1', NULL, NULL, '2023-08-17T12:25:35.969Z', '2023-08-17T12:25:35.969Z', NULL, NULL, NULL, '\"[{\\\"createdAt\\\":null,\\\"note\\\":\\\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\\\"}]\"', 0, '3.3764214', '6.611701', 'https://www.google.com/maps/search/?api=1&query=6.611701,3.3764214', 'https://google.com/maps/search/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria', NULL, NULL, 'https://youverify-cdn.fra1.digitaloceanspaces.com/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png', '\"[{\\\"filePath\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\\\",\\\"fileType\\\":null,\\\"height\\\":null,\\\"width\\\":null,\\\"longitude\\\":3.3764213999999999060719346744008362293243408203125,\\\"latitude\\\":6.611701000000000050249582272954285144805908203125}]\"', 'Storey Building', 'White', '1', 'White', 'Gatekeeper', 'Alagomeji Bus stop', 'sample verification for Morgan Consulting', NULL, NULL, 'Verify the candidate', '64e00b360ffc161679cab346', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64e00b360ffc167015cab344', '\"[]\"', '2023-08-19 00:22:14', '2023-08-19 00:23:49'),
(4, 4, '64e013770ffc1649a9cab358', '\"{\\\"candidateId\\\":\\\"64da2bd10ffc166d1acab19f\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"ozoudeh\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692019663\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/shqi2icxpbzfa8tvh3vf.jpg\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"08039366207\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":\\\"Igwe\\\",\\\"middleName\\\":null,\\\"lastName\\\":\\\"Juliet\\\",\\\"signature\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/atp-youverify.fra1.digitaloceanspaces.com\\\\\\/profile-photos\\\\\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\\\"}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'completed', 'VERIFIED', '1', NULL, NULL, '2023-08-17T12:25:35.969Z', '2023-08-17T12:25:35.969Z', NULL, NULL, NULL, '\"[{\\\"createdAt\\\":null,\\\"note\\\":\\\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\\\"}]\"', 0, '3.3764214', '6.611701', 'https://www.google.com/maps/search/?api=1&query=6.611701,3.3764214', 'https://google.com/maps/search/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria', NULL, NULL, 'https://youverify-cdn.fra1.digitaloceanspaces.com/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png', '\"[{\\\"filePath\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\\\",\\\"fileType\\\":null,\\\"height\\\":null,\\\"width\\\":null,\\\"longitude\\\":3.3764213999999999060719346744008362293243408203125,\\\"latitude\\\":6.611701000000000050249582272954285144805908203125}]\"', 'Storey Building', 'White', '1', 'White', 'Gatekeeper', 'Alagomeji Bus stop', 'sample verification for Morgan Consulting', NULL, NULL, 'Verify the candidate', '64e013770ffc1649a9cab358', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64e013770ffc166520cab356', '\"[]\"', '2023-08-19 00:57:27', '2023-08-19 01:42:42'),
(5, 6, '64e014ff0ffc16de41cab361', '\"{\\\"candidateId\\\":\\\"64e014c00ffc164954cab35c\\\",\\\"firstName\\\":\\\"Cynthia\\\",\\\"middleName\\\":\\\"Morgans\\\",\\\"lastName\\\":\\\"kachi\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692406975\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/dmxwzmszeqjgfadyqdw1.jpg\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":\\\"Igwe\\\",\\\"middleName\\\":null,\\\"lastName\\\":\\\"Juliet\\\",\\\"signature\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/atp-youverify.fra1.digitaloceanspaces.com\\\\\\/profile-photos\\\\\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\\\"}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'completed', 'VERIFIED', '1', NULL, NULL, '2023-08-17T12:25:35.969Z', '2023-08-17T12:25:35.969Z', NULL, NULL, NULL, '\"[{\\\"createdAt\\\":null,\\\"note\\\":\\\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\\\"}]\"', 0, '3.3764214', '6.611701', 'https://www.google.com/maps/search/?api=1&query=6.611701,3.3764214', 'https://google.com/maps/search/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria', NULL, NULL, 'https://youverify-cdn.fra1.digitaloceanspaces.com/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png', '\"[{\\\"filePath\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\\\",\\\"fileType\\\":null,\\\"height\\\":null,\\\"width\\\":null,\\\"longitude\\\":3.3764213999999999060719346744008362293243408203125,\\\"latitude\\\":6.611701000000000050249582272954285144805908203125}]\"', 'Storey Building', 'White', '1', 'White', 'Gatekeeper', 'Alagomeji Bus stop', 'sample verification for Morgan Consulting', NULL, NULL, 'Verify the candidate', '64e014ff0ffc16de41cab361', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64e014ff0ffc16f378cab35f', '\"[]\"', '2023-08-19 01:03:59', '2023-08-19 01:04:17'),
(7, 7, '64e01e390ffc16392ccab370', '\"{\\\"candidateId\\\":\\\"64e01a900ffc163e58cab365\\\",\\\"firstName\\\":\\\"Cythia\\\",\\\"middleName\\\":\\\"Nkem\\\",\\\"lastName\\\":\\\"kachi\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692408463\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/vyqsle3r6oiumchxaynh.jpg\\\",\\\"email\\\":\\\"michaelkachi2018@gmail.com\\\",\\\"mobile\\\":\\\"08028739834\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":\\\"Igwe\\\",\\\"middleName\\\":null,\\\"lastName\\\":\\\"Juliet\\\",\\\"signature\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/atp-youverify.fra1.digitaloceanspaces.com\\\\\\/profile-photos\\\\\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\\\"}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'completed', 'VERIFIED', '1', NULL, NULL, '2023-08-17T12:25:35.969Z', '2023-08-17T12:25:35.969Z', NULL, NULL, NULL, '\"[{\\\"createdAt\\\":null,\\\"note\\\":\\\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\\\"}]\"', 0, '3.3764214', '6.611701', 'https://www.google.com/maps/search/?api=1&query=6.611701,3.3764214', 'https://google.com/maps/search/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria', NULL, NULL, 'https://youverify-cdn.fra1.digitaloceanspaces.com/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png', '\"[{\\\"filePath\\\":\\\"https:\\\\\\/\\\\\\/youverify-cdn.fra1.digitaloceanspaces.com\\\\\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\\\",\\\"fileType\\\":null,\\\"height\\\":null,\\\"width\\\":null,\\\"longitude\\\":3.3764213999999999060719346744008362293243408203125,\\\"latitude\\\":6.611701000000000050249582272954285144805908203125}]\"', 'Storey Building', 'White', '1', 'White', 'Gatekeeper', 'Alagomeji Bus stop', 'sample verification for Morgan Consulting', NULL, NULL, 'Verify the candidate', '64e01e390ffc16392ccab370', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64e01e390ffc1644c1cab36e', '\"[]\"', '2023-08-19 01:43:21', '2023-08-19 01:43:57'),
(8, 1, '64e31ad10ffc16291bcab378', '\"{\\\"candidateId\\\":\\\"641c210c3214f9fdf35d33c7\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"Michael\\\",\\\"lastName\\\":\\\"kachi\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1679565067\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/bzchbqdllafhosszxqfh.jpg\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"2340987676567\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":null,\\\"middleName\\\":null,\\\"lastName\\\":null,\\\"signature\\\":null,\\\"photo\\\":null}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'pending', 'PENDING', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verify the candidate', '64e31ad10ffc16291bcab378', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64e31ad10ffc1649fdcab376', '\"[]\"', '2023-08-21 08:05:37', '2023-08-21 08:05:37'),
(9, 8, '64e368050ffc165122cab387', '\"{\\\"candidateId\\\":\\\"64e367db0ffc1666d0cab382\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"michael\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692624857\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/doii7z4zakue8jalwy2r.jpg\\\",\\\"email\\\":\\\"jesmikky@gmail.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', NULL, NULL, '\"{\\\"firstName\\\":null,\\\"middleName\\\":null,\\\"lastName\\\":null,\\\"signature\\\":null,\\\"photo\\\":null}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"3.376612\\\",\\\"lon\\\":\\\"6.5009833\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Benue\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'pending', 'PENDING', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verify the candidate', '64e368050ffc165122cab387', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'individual', '64e368050ffc16f776cab385', '\"[]\"', '2023-08-21 13:35:02', '2023-08-21 13:35:02'),
(10, 10, '64ecab0b0ffc16906bcab419', '\"{\\\"candidateId\\\":\\\"64e4933b0ffc16892ccab397\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"michael\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1692701497\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/ir3uvu0bpkmmyvqxknpx.jpg\\\",\\\"email\\\":\\\"michaelkachi2018@gmail.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', '{\"firstName\":\"Mobolaji\",\"middleName\":null,\"lastName\":\"michael\",\"photo\":\"https:\\/\\/oysterchecks.com\\/assets\\/images\\/logo.png\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"}', NULL, '\"{\\\"firstName\\\":null,\\\"middleName\\\":null,\\\"lastName\\\":null,\\\"signature\\\":null,\\\"photo\\\":null}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"0\\\",\\\"lon\\\":\\\"0\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"6\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Oke-ira\\\",\\\"state\\\":\\\"Lagos\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'pending', 'PENDING', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verify the candidtate guarantor', '64ecab0b0ffc16906bcab419', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'guarantor', '64ecab0b0ffc1650d4cab417', '\"[]\"', '2023-08-28 14:11:23', '2023-08-28 14:11:23'),
(11, 11, '64ecbba30ffc161465cab422', '\"{\\\"candidateId\\\":\\\"64ecbb620ffc164f3acab41d\\\",\\\"firstName\\\":\\\"ABRRAM\\\",\\\"middleName\\\":\\\"Gregory\\\",\\\"lastName\\\":\\\"Olajide\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1693236064\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/a9oufmiqitprbcbtbipt.jpg\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"08122231477\\\"}\"', '{\"firstName\":\"michael\",\"middleName\":null,\"lastName\":\"michael\",\"photo\":\"https:\\/\\/oysterchecks.com\\/assets\\/images\\/logo.png\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"}', NULL, '\"{\\\"firstName\\\":null,\\\"middleName\\\":null,\\\"lastName\\\":null,\\\"signature\\\":null,\\\"photo\\\":null}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"0\\\",\\\"lon\\\":\\\"0\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Oke-ira\\\",\\\"state\\\":\\\"Lagos\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"Lagos Mainland\\\"}\"', 'pending', 'PENDING', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verify the candidtate guarantor', '64ecbba30ffc161465cab422', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'guarantor', '64ecbb870ffc16bb28cab420', '\"[]\"', '2023-08-28 15:22:11', '2023-08-28 15:22:11'),
(12, 12, '64ecbdf20ffc162745cab42b', '\"{\\\"candidateId\\\":\\\"64ecbda10ffc16c99fcab426\\\",\\\"firstName\\\":\\\"michael\\\",\\\"middleName\\\":\\\"kachi\\\",\\\"lastName\\\":\\\"kachi\\\",\\\"photo\\\":\\\"https:\\\\\\/\\\\\\/res.cloudinary.com\\\\\\/the-morgans-consortium\\\\\\/image\\\\\\/upload\\\\\\/v1693236640\\\\\\/oysterchecks\\\\\\/candidates\\\\\\/fbk7ikrfaf3vdiljk2x6.png\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', NULL, '\"{\\\"name\\\":\\\"michael\\\",\\\"registrationNumber\\\":\\\"c31sddewewee\\\",\\\"email\\\":\\\"mikkynoble@gmail.com\\\",\\\"mobile\\\":\\\"08028739833\\\"}\"', '\"{\\\"firstName\\\":null,\\\"middleName\\\":null,\\\"lastName\\\":null,\\\"signature\\\":null,\\\"photo\\\":null}\"', '\"{\\\"latlong\\\":{\\\"lat\\\":\\\"0\\\",\\\"lon\\\":\\\"0\\\"},\\\"flatNumber\\\":\\\"1st floor\\\",\\\"buildingName\\\":\\\"Sum house\\\",\\\"buildingNumber\\\":\\\"350\\\",\\\"subStreet\\\":\\\"\\\",\\\"street\\\":\\\"Borno way\\\",\\\"landmark\\\":\\\"Police Station\\\",\\\"state\\\":\\\"Lagos\\\",\\\"city\\\":\\\"Lagos\\\",\\\"country\\\":\\\"Nigeria\\\",\\\"lga\\\":\\\"\\\"}\"', 'pending', 'PENDING', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '\"[]\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Verify the candidate and business', '64ecbdf20ffc162745cab42b', NULL, 'business', '6222a5ea3e7a41c29c031068', '6222a5ea3e7a41c29c031069', 'business', '64ecbdf20ffc16dfa3cab429', '\"[]\"', '2023-08-28 15:32:02', '2023-08-28 15:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `email`, `password`, `email_verified`, `email_verified_at`, `remember_token`, `name`, `company_name`, `company_email`, `company_phone`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', NULL, NULL, NULL, 'Morgans Admin', 'Morgans Consortium', 'admin@oysterchecks.com', '08023457567', '1', '2023-03-14 14:23:52', '2023-03-14 14:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `adverse_media`
--

CREATE TABLE `adverse_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(191) NOT NULL,
  `query` text DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `weightedScore` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `queryTags` text DEFAULT NULL,
  `queryStartDate` varchar(222) DEFAULT NULL,
  `queryEndDate` varchar(222) DEFAULT NULL,
  `total` varchar(191) DEFAULT NULL,
  `media` longtext DEFAULT NULL,
  `tagsAnalysis` longtext DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `metadata` varchar(191) DEFAULT NULL,
  `links` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adverse_media`
--

INSERT INTO `adverse_media` (`id`, `verification_id`, `user_id`, `ref`, `query`, `reason`, `weightedScore`, `status`, `queryTags`, `queryStartDate`, `queryEndDate`, `total`, `media`, `tagsAnalysis`, `type`, `metadata`, `links`, `created_at`, `updated_at`) VALUES
(1, 15, 1, '64d44b73d74c382485ac2b0c', 'Jon Snow', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-10 02:29:09', '2023-08-10 02:29:09'),
(2, 15, 1, '64d44b903ee9cc37cfa95fe8', 'Jon Snow', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-10 02:29:37', '2023-08-10 02:29:37'),
(3, 15, 1, '64d4a319f2ecfa2799401fca', 'Morgansconsortium', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-10 08:43:06', '2023-08-10 08:43:06'),
(4, 15, 1, '64d4a384d74c3861adac2c9d', 'Peter Obi', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Wed Dec 26 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'individual', '[]', NULL, '2023-08-10 08:44:53', '2023-08-10 08:44:53'),
(5, 15, 1, '64d4a4110bc92ee081b783b6', 'Uba', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Thu Jan 23 2020 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Thu Dec 24 2020 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-10 08:47:14', '2023-08-10 08:47:14'),
(6, 15, 1, '64d4a57c3ee9cce5a4a9618c', 'Uba Sani', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Fri Nov 02 2018 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Thu Oct 24 2019 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-10 08:53:17', '2023-08-10 08:53:17'),
(7, 15, 1, '64d604f005741edb054537f1', 'Jon Snow', ': Kit Harington has expressed he doesn\'t want to take on a similar role again', '66.3275', 'potential-high-risk', '[\"untagged\",\"fraud\",\"embezzlement\"]', 'Tue Mar 10 2020 01:00:00 GMT+0100 (West Africa Standard Time)', 'Fri Mar 10 2023 01:00:00 GMT+0100 (West Africa Standard Time)', '5', '[{\"date\":\"2020-06-03 13:15:02\",\"source\":\"https:\\/\\/www.pressgazette.co.uk\\/jon-snow-fair-amount-of-bullshit-needed-probing-during-pandemic-channel-4-news\",\"headline\":\"Jon Snow: There\'s been a \'fair amount of bullshit which needed probing\' during the pandemic\",\"excerpt\":null,\"score\":71.534999999999996589394868351519107818603515625,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Jon \",\"Snow \",\"Jon Snow \"],\"organizations\":[\"Snow \",\"UK \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d6\"},{\"date\":\"2022-07-02 14:20:08\",\"source\":\"https:\\/\\/screenrant.com\\/game-thrones-jon-snow-spinoff-season-8-problems-fix\\/\",\"headline\":\"The Jon Snow Spinoff Can Actually Improve Game Of Thrones Season 8\",\"excerpt\":\"A Jon Snow sequel series could work after all.\",\"score\":83.0299999999999869260136620141565799713134765625,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Thrones \",\"Jon Snow \",\"George \",\"Martin \",\"Tales \",\"Egg \",\"Sea Snake \",\"Kit Harington \",\"Thrones Ending Disappointed So \",\"Remake Game \",\"Campaigns Never Made Sense Right \",\"Daenerys Targaryen \",\"Arya \",\"Thrones Season \",\"Night King \",\"Val \",\"Targaryen Aegon \",\"Bran \",\"Jon Snow Sequel \",\"Marvel Episode \",\"Lesson \",\"Articles Published \",\"Marcelo Leite \"],\"organizations\":[\"HBO \",\"House \",\"Jon Snow \",\"Fire \",\"Dragon \",\"Of Dunk \",\"Golden Empire \",\"Corlys Velaryon \",\"Princess Nymeria \",\"Flea \",\"IP \",\"Daenerys Targaryen \",\"Of Thrones \",\"Wall \",\"Night King \",\"Long Night \",\"Melisandre \",\"Lord \",\"Westeros \",\"MCU \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d7\"},{\"date\":\"2022-09-11 13:37:11\",\"source\":\"https:\\/\\/bleedingcool.com\\/tv\\/game-of-thrones-kit-haringtons-jon-snow-spinoff-needs-to-be-a-sitcom\\/\",\"headline\":\"Game of Thrones: Kit Harington\'s Jon Snow Spinoff Needs to Be A Sitcom\",\"excerpt\":\"I\'m here to answer the question nagging Game of Thrones fans since the news hit. Why can\'t Kit Harington\'s Jon Snow spinoff be a sitcom?\",\"score\":74.8599999999999994315658113919198513031005859375,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Adi Tantimedh \",\"Jon Snow \",\"Imagine \",\"Thrones Sitcom \",\"Tormund \",\"Tormund Giantsbane \",\"Arya \",\"Kit Harrington \",\"Kristofer HivjuEnjoyed \"],\"organizations\":[\"House \",\"Dragons \",\"Kit Harington \",\"Maisie Willaims \",\"HBO \",\"Wall \",\"SITCOM \",\"Kristofer Hivju \",\"KNOW \",\"JON \",\"MBA \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d8\"},{\"date\":\"2022-06-18 15:20:07\",\"source\":\"https:\\/\\/movieweb.com\\/hbo-max-has-a-hilarious-response-to-jon-snow-spin-off-reports\\/\",\"headline\":\"HBO Max Has a Hilarious Response to Game of Thrones\' Jon Snow Spin-Off Reports\",\"excerpt\":\"HBO \'know(s) nothing\' of Kit Harington\'s return to the reported Game of Thrones sequel.\",\"score\":81.1299999999999954525264911353588104248046875,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Kit Harington \",\"Jon Snow \",\"Emmy \",\"Harington \",\"Yigritte \",\"Rose Leslie \",\"George \",\"Martin \",\"Blood \",\"Tales \",\"Egg \",\"Earlier \",\"Thrones \",\"Season \",\"Will Jon Snow \",\"Jon \",\"Ned Stark \",\"Rhaegar Targaryen \",\"Lyanna Stark \",\"Aegon \",\"Daenerys \",\"Brandon Stark \"],\"organizations\":[\"HBO Max \",\"HBO \",\"ScreenRant \",\"Fire \",\"House \",\"Dragons \",\"Jon Snow \",\"GoT \",\"Due Right \",\"Iron Throne \",\"Unsullied \",\"Wall \",\"Free Folk \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d9\"},{\"date\":\"2021-06-07 04:30:01\",\"source\":\"https:\\/\\/www.christianpost.com\\/trends\\/game-of-thrones-season-6-spoilers-jon-snow-returning-to-winterfell.html\",\"headline\":\"\'Game of Thrones\' Season 6 Spoilers: Jon Snow Is Rumored to be Coming Back to Winterfell?\",\"excerpt\":\"Season 6 of \\\"Game of Thrones\\\" is due to premiere on HBO by the first or second quarter of next year, and a major spoiler has emerged pointing to Jon Snow returning to Winterfell.\",\"score\":86.44999999999998863131622783839702606201171875,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Dondi Tiples \",\"Christian Post \",\"Harrington \",\"Jon Snow \",\"Sansa Stark \",\"Sophie Turner \",\"Ramsay Bolton \",\"Aidan Gillen \",\"Jon \",\"Wun Wun \",\"Littlefinger \",\"Sansa \",\"Theon Greyjoy \",\"Alfie Allen \"],\"organizations\":[\"YouTube \",\"Kit Harington \",\"Night Watch \",\"Wall \",\"Iwan Rheon \",\"Winterfell \",\"Season \",\"Wun \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85da\"}]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'individual', '[]', NULL, '2023-08-11 09:52:48', '2023-08-11 09:52:48'),
(8, 15, 1, '64d631643ee9cc3967a97075', 'Uba', '', '0', 'no-match-found', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Mon Aug 02 2021 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Thu Jun 22 2023 00:00:00 GMT+0000 (Coordinated Universal Time)', '0', '[]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-11 13:02:42', '2023-08-11 13:02:42'),
(9, 15, 1, '64d6325305741ef7154538e7', 'Jon Snow', ': Kit Harington has expressed he doesn\'t want to take on a similar role again', '66.3275', 'potential-high-risk', '[\"untagged\",\"fraud\",\"embezzlement\"]', 'Tue Mar 10 2020 01:00:00 GMT+0100 (West Africa Standard Time)', 'Fri Mar 10 2023 01:00:00 GMT+0100 (West Africa Standard Time)', '5', '[{\"date\":\"2020-06-03 13:15:02\",\"source\":\"https:\\/\\/www.pressgazette.co.uk\\/jon-snow-fair-amount-of-bullshit-needed-probing-during-pandemic-channel-4-news\",\"headline\":\"Jon Snow: There\'s been a \'fair amount of bullshit which needed probing\' during the pandemic\",\"excerpt\":null,\"score\":71.534999999999996589394868351519107818603515625,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Jon \",\"Snow \",\"Jon Snow \"],\"organizations\":[\"Snow \",\"UK \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d6\"},{\"date\":\"2022-07-02 14:20:08\",\"source\":\"https:\\/\\/screenrant.com\\/game-thrones-jon-snow-spinoff-season-8-problems-fix\\/\",\"headline\":\"The Jon Snow Spinoff Can Actually Improve Game Of Thrones Season 8\",\"excerpt\":\"A Jon Snow sequel series could work after all.\",\"score\":83.0299999999999869260136620141565799713134765625,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Thrones \",\"Jon Snow \",\"George \",\"Martin \",\"Tales \",\"Egg \",\"Sea Snake \",\"Kit Harington \",\"Thrones Ending Disappointed So \",\"Remake Game \",\"Campaigns Never Made Sense Right \",\"Daenerys Targaryen \",\"Arya \",\"Thrones Season \",\"Night King \",\"Val \",\"Targaryen Aegon \",\"Bran \",\"Jon Snow Sequel \",\"Marvel Episode \",\"Lesson \",\"Articles Published \",\"Marcelo Leite \"],\"organizations\":[\"HBO \",\"House \",\"Jon Snow \",\"Fire \",\"Dragon \",\"Of Dunk \",\"Golden Empire \",\"Corlys Velaryon \",\"Princess Nymeria \",\"Flea \",\"IP \",\"Daenerys Targaryen \",\"Of Thrones \",\"Wall \",\"Night King \",\"Long Night \",\"Melisandre \",\"Lord \",\"Westeros \",\"MCU \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d7\"},{\"date\":\"2022-09-11 13:37:11\",\"source\":\"https:\\/\\/bleedingcool.com\\/tv\\/game-of-thrones-kit-haringtons-jon-snow-spinoff-needs-to-be-a-sitcom\\/\",\"headline\":\"Game of Thrones: Kit Harington\'s Jon Snow Spinoff Needs to Be A Sitcom\",\"excerpt\":\"I\'m here to answer the question nagging Game of Thrones fans since the news hit. Why can\'t Kit Harington\'s Jon Snow spinoff be a sitcom?\",\"score\":74.8599999999999994315658113919198513031005859375,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Adi Tantimedh \",\"Jon Snow \",\"Imagine \",\"Thrones Sitcom \",\"Tormund \",\"Tormund Giantsbane \",\"Arya \",\"Kit Harrington \",\"Kristofer HivjuEnjoyed \"],\"organizations\":[\"House \",\"Dragons \",\"Kit Harington \",\"Maisie Willaims \",\"HBO \",\"Wall \",\"SITCOM \",\"Kristofer Hivju \",\"KNOW \",\"JON \",\"MBA \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d8\"},{\"date\":\"2022-06-18 15:20:07\",\"source\":\"https:\\/\\/movieweb.com\\/hbo-max-has-a-hilarious-response-to-jon-snow-spin-off-reports\\/\",\"headline\":\"HBO Max Has a Hilarious Response to Game of Thrones\' Jon Snow Spin-Off Reports\",\"excerpt\":\"HBO \'know(s) nothing\' of Kit Harington\'s return to the reported Game of Thrones sequel.\",\"score\":81.1299999999999954525264911353588104248046875,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Kit Harington \",\"Jon Snow \",\"Emmy \",\"Harington \",\"Yigritte \",\"Rose Leslie \",\"George \",\"Martin \",\"Blood \",\"Tales \",\"Egg \",\"Earlier \",\"Thrones \",\"Season \",\"Will Jon Snow \",\"Jon \",\"Ned Stark \",\"Rhaegar Targaryen \",\"Lyanna Stark \",\"Aegon \",\"Daenerys \",\"Brandon Stark \"],\"organizations\":[\"HBO Max \",\"HBO \",\"ScreenRant \",\"Fire \",\"House \",\"Dragons \",\"Jon Snow \",\"GoT \",\"Due Right \",\"Iron Throne \",\"Unsullied \",\"Wall \",\"Free Folk \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85d9\"},{\"date\":\"2021-06-07 04:30:01\",\"source\":\"https:\\/\\/www.christianpost.com\\/trends\\/game-of-thrones-season-6-spoilers-jon-snow-returning-to-winterfell.html\",\"headline\":\"\'Game of Thrones\' Season 6 Spoilers: Jon Snow Is Rumored to be Coming Back to Winterfell?\",\"excerpt\":\"Season 6 of \\\"Game of Thrones\\\" is due to premiere on HBO by the first or second quarter of next year, and a major spoiler has emerged pointing to Jon Snow returning to Winterfell.\",\"score\":86.44999999999998863131622783839702606201171875,\"inferring\":\"Negative\",\"tags\":[],\"language\":\"en\",\"persons\":[\"Dondi Tiples \",\"Christian Post \",\"Harrington \",\"Jon Snow \",\"Sansa Stark \",\"Sophie Turner \",\"Ramsay Bolton \",\"Aidan Gillen \",\"Jon \",\"Wun Wun \",\"Littlefinger \",\"Sansa \",\"Theon Greyjoy \",\"Alfie Allen \"],\"organizations\":[\"YouTube \",\"Kit Harington \",\"Night Watch \",\"Wall \",\"Iwan Rheon \",\"Winterfell \",\"Season \",\"Wun \"],\"site\":null,\"country\":\"US\",\"_id\":\"645bcc9e0326730ad94f85da\"}]', '[{\"name\":\"Fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Money laundering\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Civil lawsuit\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Organized crime \\/ racketeering\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Embezzlement\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Extortion\",\"count\":0,\"percentage\":0},{\"name\":\"Forgery\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'individual', '[]', NULL, '2023-08-11 13:06:27', '2023-08-11 13:06:27'),
(10, 15, 1, '64d638373ee9cce649a970fb', 'First Bank Nigeria Plc', '. The reason is that the article is about First Bank Nigeria Plc being accused of fraud.', '78.725', 'potential-high-risk', '[\"fraud\",\"sanction-violations\",\"bribery-and-corruption\",\"money-laundering\",\"terrorism\",\"civil-lawsuit\",\"cybercrime\",\"organized-crime\",\"drug\",\"tax-evasion\",\"arms-trafficking\",\"embezzlement\",\"money-laundering\",\"securities-fraud\",\"pharmaceutical-product-trafficking\",\"theft\",\"extortion\",\"forgery\",\"falsifying-information-on-official-documents\",\"theft\",\"piracy\",\"antitrust-violations\"]', 'Sat May 01 2021 00:00:00 GMT+0000 (Coordinated Universal Time)', 'Sat Jan 28 2023 00:00:00 GMT+0000 (Coordinated Universal Time)', '4', '[{\"date\":\"2022-09-11 07:22:59\",\"source\":\"https:\\/\\/pmnewsnigeria.com\\/2022\\/09\\/11\\/crooked-security-man-moses-steals-first-banks-property\\/\",\"headline\":\"Crooked security man Moses steals First Bank\'s property\",\"excerpt\":\"A lower court in the city of Lagos, has heard a case of a security man accused of stealing property belonging to First Bank Nigeria Plc.\",\"score\":78.090000000000003410605131648480892181396484375,\"inferring\":\"Negative\",\"tags\":[[\"embezzlement\",85],[\"extortion\",80]],\"language\":\"en\",\"persons\":[\"Centre \",\"Gambo Mark Moses \",\"Jacuzy Tap Host \",\"Gombe State \",\"Reuben Solomon \",\"Moses \",\"Milverton Street \",\"Ikoyi \",\"Lagos State \",\"Abioye \"],\"organizations\":[\"Ikoyi Division \",\"First Bank \",\"Tinubu Magistrate \",\"News Solomon \",\"Security \",\"Criminal Law \",\"Magistrate \",\"Ikoyi \"],\"site\":null,\"country\":\"NG\",\"_id\":\"64d638473ee9cc20dca970fd\"},{\"date\":\"2021-07-12 15:54:14\",\"source\":\"https:\\/\\/tribuneonlineng.com\\/efcc-arraigns-two-in-jos-for-n900-million-pos-fraud\\/\",\"headline\":\"EFCC arraigns two in Jos for N900 million POS fraud\",\"excerpt\":\"The Economic and Financial Crimes Commission (EFCC), has arraigned two persons before Justice D. V Agishi of the Federal High Court, Jos, Plateau State,\",\"score\":86.8299999999999982946974341757595539093017578125,\"inferring\":\"Negative\",\"tags\":[[\"fraud\",90],[\"money laundering\",90],[\"embezzlement\",85]],\"language\":\"en\",\"persons\":[\"Tribune Online \",\"Jos \",\"Plateau State \",\"Naankang Dawan \",\"Taen Nigeria Ltd \",\"Lataen Engineering Ltd \",\"Moruf Tunji \",\"Taen Nigeria Limited \",\"Doyin Adesanya \",\"Samuel Temitope Falese \",\"Ebenezer Oni Kehinde \",\"Mariam Babatunde Olabisi \",\"First Bank \",\"Tean Nigeria Limited Account \",\"First Bank Nigeria Plc \",\"Nine Hundred \",\"Eight Million \",\"Eight Thousand \",\"Seventy Four Naira \",\"Etc \",\"Benjamin Manji \",\"Agishi \",\"Downward Price Review \",\"Other \"],\"organizations\":[\"EFCC \",\"Justice \",\"Federal High Court \",\"Publicity \",\"First Bank \",\"POS \",\"SHOULD \",\"Quality Service \",\"Of Data \",\"MTN Group \"],\"site\":null,\"country\":\"NG\",\"_id\":\"64d638473ee9cce1d0a970fe\"},{\"date\":\"2021-07-12 17:04:49\",\"source\":\"https:\\/\\/www.afronaija.com.ng\\/efcc-arraigns-two-in-jos-for-n900-million-pos-fraud\\/\",\"headline\":\"EFCC arraigns two in Jos for N900 million POS fraud\",\"excerpt\":\"EFCC arraigns two in Jos for N900 million POS fraud\",\"score\":85.1199999999999903366187936626374721527099609375,\"inferring\":\"Negative\",\"tags\":[[\"fraud\",90],[\"money laundering\",90],[\"embezzlement\",85]],\"language\":\"en\",\"persons\":[\"Aminat Aigbe Nigeria \",\"Jos \",\"Plateau State \",\"Naankang Dawan \",\"Taen Nigeria Ltd \",\"Lataen Engineering Ltd \",\"Moruf Tunji Olukanmi \",\"Taen Nigeria Limited \",\"Doyin Adesanya \",\"Samuel Temitope Falese \",\"Ebenezer Oni Kehinde \",\"Mariam Babatunde Olabisi \",\"First Bank \",\"Tean Nigeria Limited Account \",\"First Bank Nigeria Plc \",\"Nine Hundred \",\"Eight Million \",\"Eight Thousand \",\"Seventy Four Naira \",\"Etc \",\"Benjamin Manji \",\"Agishi \"],\"organizations\":[\"EFCC \",\"Economic \",\"Justice \",\"Federal High Court \",\"Publicity \",\"First Bank \",\"POS \",\"NEWS \",\"RELATED \"],\"site\":null,\"country\":\"NG\",\"_id\":\"64d638473ee9ccec85a970ff\"},{\"date\":\"2022-05-17 02:35:56\",\"source\":\"https:\\/\\/punchng.com\\/ekiti-woman-bags-12-year-jail-term-for-defrauding-deeper-life-church\\/\",\"headline\":\"Ekiti woman bags 12-year jail term for defrauding Deeper Life church\",\"excerpt\":\"An Ekiti State High Court, Ado Ekiti Division, has sentenced a 40-year-old woman, Sade Otenuga, to 12 years\' imprisonment for fraud and stealing.\",\"score\":83.599999999999994315658113919198513031005859375,\"inferring\":\"Negative\",\"tags\":[[\"fraud\",90],[\"civil lawsuit\",70],[\"organized crime \\/ racketeering\",90],[\"embezzlement\",85],[\"extortion\",80],[\"forgery\",80]],\"language\":\"en\",\"persons\":[\"Ekiti State High Court \",\"Ado Ekiti Division \",\"Sade Otenuga \",\"Oso Olugbenga \",\"Fraud Related Offences Act \",\"C16 \",\"Laws \",\"Ekiti State \",\"Olugbenga \",\"Samson Osobu \",\"Yinka Opaleke \",\"Lekan Ogunmoye \",\"Ado Ekiti \",\"Copyright \"],\"organizations\":[\"DLBC \",\"Advance Fee Fraud \",\"Criminal Code \",\"Ado Ekiti \"],\"site\":null,\"country\":\"NG\",\"_id\":\"64d638473ee9cc06f5a97100\"}]', '[{\"name\":\"Embezzlement\",\"count\":4,\"percentage\":28.5714285714285693984493263997137546539306640625},{\"name\":\"Fraud\",\"count\":3,\"percentage\":21.428571428571427048836994799785315990447998046875},{\"name\":\"Money laundering\",\"count\":2,\"percentage\":14.28571428571428469922466319985687732696533203125},{\"name\":\"Extortion\",\"count\":2,\"percentage\":14.28571428571428469922466319985687732696533203125},{\"name\":\"Civil lawsuit\",\"count\":1,\"percentage\":7.142857142857142349612331599928438663482666015625},{\"name\":\"Organized crime \\/ racketeering\",\"count\":1,\"percentage\":7.142857142857142349612331599928438663482666015625},{\"name\":\"Forgery\",\"count\":1,\"percentage\":7.142857142857142349612331599928438663482666015625},{\"name\":\"Sanction violations\",\"count\":0,\"percentage\":0},{\"name\":\"Bribery and corruption\",\"count\":0,\"percentage\":0},{\"name\":\"Terrorism \\/ terror financing\",\"count\":0,\"percentage\":0},{\"name\":\"Cybercrime \\/ hacking \\/ phishing\",\"count\":0,\"percentage\":0},{\"name\":\"Drug \\/ narcotics trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Tax evasion \\/ tax fraud\",\"count\":0,\"percentage\":0},{\"name\":\"Arms trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Securities fraud \\/ insider trading\",\"count\":0,\"percentage\":0},{\"name\":\"Pharmaceutical product trafficking\",\"count\":0,\"percentage\":0},{\"name\":\"Robbery \\/ theft\",\"count\":0,\"percentage\":0},{\"name\":\"Antitrust violations\",\"count\":0,\"percentage\":0},{\"name\":\"Piracy \\/ counterfeiting\",\"count\":0,\"percentage\":0},{\"name\":\"Falsifying information on official documents\",\"count\":0,\"percentage\":0}]', 'business', '[]', NULL, '2023-08-11 13:31:51', '2023-08-11 13:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `adverse_media_categories`
--

CREATE TABLE `adverse_media_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adverse_media_categories`
--

INSERT INTO `adverse_media_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'fraud', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(2, 'sanction-violations', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(3, 'bribery-and-corruption', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(4, 'money-laundering', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(5, 'terrorism', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(6, 'civil-lawsuit', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(7, 'cybercrime', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(8, 'organized-crime', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(9, 'drug', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(10, 'tax-evasion', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(11, 'arms-trafficking', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(12, 'embezzlement', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(13, 'money-laundering', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(14, 'securities-fraud', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(15, 'pharmaceutical-product-trafficking', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(16, 'theft', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(17, 'extortion', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(18, 'forgery', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(19, 'falsifying-information-on-official-documents', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(20, 'theft', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(21, 'piracy', '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(22, 'antitrust-violations', '2023-08-08 22:31:52', '2023-08-08 22:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `api_responses`
--

CREATE TABLE `api_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `identity_verification_id` int(11) DEFAULT NULL,
  `external_ref` varchar(255) DEFAULT NULL,
  `status_code` varchar(255) DEFAULT NULL,
  `payload` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_verifications`
--

CREATE TABLE `bank_account_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_code` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `all_validation_passed` tinyint(1) DEFAULT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_verifications`
--

CREATE TABLE `business_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `service_ref` varchar(255) DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_verification_details`
--

CREATE TABLE `business_verification_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_verification_id` int(11) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `service_ref` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `reg_date` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `lga` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bvn_verifications`
--

CREATE TABLE `bvn_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `validations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL DEFAULT 0,
  `selfie_validation` tinyint(1) NOT NULL DEFAULT 0,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `enrollment_branch` varchar(255) DEFAULT NULL,
  `enrollment_institution` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `should_retrieve_nin` tinyint(1) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `all_validation_passed` tinyint(1) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) DEFAULT NULL,
  `last_modified_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bvn_verifications`
--

INSERT INTO `bvn_verifications` (`id`, `verification_id`, `user_id`, `ref`, `service_reference`, `validations`, `status`, `reason`, `data_validation`, `selfie_validation`, `first_name`, `middle_name`, `last_name`, `image`, `enrollment_branch`, `enrollment_institution`, `phone`, `dob`, `subject_consent`, `pin`, `should_retrieve_nin`, `type`, `gender`, `country`, `all_validation_passed`, `fee`, `requested_at`, `last_modified_at`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(1, 3, 1, 'KGuBbfoNyI8sABgC573054', '6419ba150dad9cbd417db6a8', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679407639/oysterchecks/identityVerifications/bvn/jgp8mzaheogrquf44mmk.jpg', NULL, NULL, '08031234567', '1988-04-04', 1, '11111111111', 1, 'bvn', NULL, 'Nigeria', 1, NULL, '2023-03-21T14:07:17.619Z', '2023-03-21T14:07:17.635Z', '2023-03-21 14:07:19', '2023-03-21 14:07:19', 0),
(2, 3, 1, 'BCkbwTsGQdHiVWQt1VMN6940', '641c3be30dad9c17ef7db75d', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679571944/oysterchecks/identityVerifications/bvn/ujumnut5b7oo6s0b8wdf.jpg', NULL, NULL, '08031234567', '1988-04-04', 1, '11111111111', 1, 'bvn', NULL, 'Nigeria', 1, NULL, '2023-03-23T11:45:39.872Z', '2023-03-23T11:45:39.889Z', '2023-03-23 11:45:44', '2023-03-23 11:45:44', 0),
(3, 3, 1, 'KtGejmZM7DTgqE86yT4843', '641c3d0e0dad9c84f37db762', '{\"data\":{\"lastName\":{\"validated\":false,\"value\":\"OZOUDEH\"},\"dateOfBirth\":{\"validated\":false,\"value\":\"1991-02-22\"},\"firstName\":{\"validated\":false,\"value\":\"michael\"}},\"validationMessages\":\"First name does not match, Last name does not match, Date of birth does not match\"}', 'found', NULL, 1, 0, 'John', NULL, 'Doe', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679572243/oysterchecks/identityVerifications/bvn/uuu70x2ye33dyxgx3uce.jpg', NULL, NULL, '08031234567', '1988-04-04', 1, '11111111111', 1, 'bvn', NULL, 'Nigeria', 0, NULL, '2023-03-23T11:50:38.294Z', '2023-03-23T11:50:38.310Z', '2023-03-23 11:50:43', '2023-03-23 11:50:43', 0),
(4, 3, 1, '8auH8e2rRqjE8h7F0rP992', '641ccd820dad9c42b27db7ce', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679609221/oysterchecks/identityVerifications/bvn/kaoclgsmldvxh665dulh.jpg', NULL, NULL, '08031234567', '1988-04-04', 1, '11111111111', 1, 'bvn', NULL, 'Nigeria', 1, NULL, '2023-03-23T22:06:58.824Z', '2023-03-23T22:06:58.842Z', '2023-03-23 22:07:01', '2023-03-23 22:07:01', 0),
(5, 3, 26, '3Fs8TeBjdTYXHTx5P199193', '64c796969c87b0e825af31f0', '{\"data\":{\"lastName\":{\"validated\":false,\"value\":\"kachi\"},\"dateOfBirth\":{\"validated\":false,\"value\":\"2023-07-27\"},\"firstName\":{\"validated\":false,\"value\":\"michael\"}},\"validationMessages\":\"First name does not match, Last name does not match, Date of birth does not match\"}', 'found', NULL, 1, 0, 'John', NULL, 'Doe', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1690801815/oysterchecks/identityVerifications/bvn/v0bnqfqv0rwxcztntcj7.jpg', NULL, NULL, '08031234567', '1988-04-04', 1, '11111111111', 1, 'bvn', NULL, 'Nigeria', 0, NULL, '2023-07-31T11:10:14.800Z', '2023-07-31T11:10:14.834Z', '2023-07-31 18:10:16', '2023-07-31 18:10:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cac_verifications`
--

CREATE TABLE `cac_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `search_term` varchar(255) DEFAULT NULL,
  `search_value` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `jtb_tin` varchar(255) DEFAULT NULL,
  `tax_office` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_status` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `type_of_entity` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `lga` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `website_email` varchar(255) DEFAULT NULL,
  `key_personnel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `branch_address` varchar(255) DEFAULT NULL,
  `head_office_address` varchar(255) DEFAULT NULL,
  `objectives` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) DEFAULT NULL,
  `last_modified_at` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cac_verifications`
--

INSERT INTO `cac_verifications` (`id`, `verification_id`, `user_id`, `ref`, `service_reference`, `subject_consent`, `status`, `type`, `fee`, `search_term`, `search_value`, `name`, `registration_number`, `tin`, `jtb_tin`, `tax_office`, `email`, `company_status`, `phone`, `type_of_entity`, `activity`, `registration_date`, `address`, `state`, `lga`, `city`, `website_email`, `key_personnel`, `branch_address`, `head_office_address`, `objectives`, `requested_at`, `last_modified_at`, `country`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(1, 9, 1, 'd6Ht9H0mKQIWzoN8daui7042', '64ec929217656595175bb586', 1, 'found', 'cac', '200', 'Select a Search Term', 'RC00000000', 'John Doe Inc', 'RC00000000', '00000000-0001', NULL, NULL, 'johnfakedoe@gmail.com', 'ACTIVE', '+1 000 000 0000', 'PRIVATE COMPANY LIMITED BY SHARES', 'Information service activities', '2017-06-09T00:00:00.000+00:00', '1ST FLOOR,SUM HOUSE,Fake Street', 'LAGOS', 'Lagos Mainland', 'YABA', NULL, '[{\"name\":\"PETER DOE\",\"designation\":\"WITNESS\",\"isCorporate\":false,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":\"\",\"sharesValue\":null,\"sharesCount\":null,\"occupation\":\"LAWYER\",\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"\",\"address\":\"8C, NONE STREET, ZONE 4\",\"countryOfResidence\":\"NIGERIA\",\"number\":\"\",\"isForeign\":\"false\",\"documentType\":\"\",\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":\"\",\"email\":\"\",\"phone\":\"\",\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"SUSAN DOE\",\"designation\":\"SECRETARY_COMPANY\",\"isCorporate\":false,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":\"\",\"sharesValue\":null,\"sharesCount\":null,\"occupation\":\"SECRETARY\",\"nationality\":\"NIGERIA\",\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"FEMALE\",\"address\":\"11, NONE CRESCENT\",\"countryOfResidence\":\"NIGERIA\",\"number\":\"\",\"isForeign\":\"false\",\"documentType\":\"\",\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":\"\",\"email\":\"\",\"phone\":\"\",\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"MICHAEL DOE\",\"designation\":\"DIRECTOR\",\"isCorporate\":null,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":null,\"sharesValue\":null,\"sharesCount\":null,\"occupation\":\"BUSINESS\",\"nationality\":\"NIGERIA\",\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"MALE\",\"address\":\"1, NONE STREET, \",\"countryOfResidence\":\"NIGERIA\",\"number\":null,\"isForeign\":\"false\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"JANE DOE  INC\",\"designation\":\"SHAREHOLDER\",\"isCorporate\":true,\"appointedOn\":\"2021-03-17T14:07:43.000+00:00\",\"resignedOn\":null,\"sharesType\":\"ORDINARY\",\"sharesValue\":\"9990000\",\"sharesCount\":\"9990000\",\"occupation\":null,\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":null,\"address\":\"01 COASTAL HIGHWAY,LEWES DE 000000  USA,COUNTY OF SUSSEX\",\"countryOfResidence\":\"UNITED STATES\",\"number\":null,\"isForeign\":\"true\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"JOHN DOE\",\"designation\":\"SHAREHOLDER\",\"isCorporate\":null,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":\"ORDINARY\",\"sharesValue\":\"10000\",\"sharesCount\":\"10000\",\"occupation\":null,\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"MALE\",\"address\":\"1 NONE STREET,LEKKI\",\"countryOfResidence\":\"NIGERIA\",\"number\":null,\"isForeign\":\"false\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"JOHN DOE INC\",\"designation\":\"PERSONS WITH SIGNIFICANT CONTROL\",\"isCorporate\":true,\"appointedOn\":\"2022-03-30T14:42:16.554+00:00\",\"resignedOn\":null,\"sharesType\":null,\"sharesValue\":null,\"sharesCount\":null,\"occupation\":null,\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":null,\"address\":\"01 COASTAL HIGHWAY,LEWES DE 000000 \",\"countryOfResidence\":\"UNITED STATES\",\"number\":null,\"isForeign\":\"true\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]}]', '1ST FLOOR,SUM HOUSE,Fake Street, YABA, LAGOS STATE ', NULL, NULL, '2023-08-28T12:26:58.342Z', '2022-11-03T14:16:54.235Z', 'Nigeria', '2023-08-28 12:26:58', '2023-08-28 12:26:58', 0),
(2, 9, 1, 'm8fKkP0Y14CWrxgsqMTI8680', '64ec947c17656553f35bb58c', 1, 'found', 'cac', '200', 'cacReg', 'RC00000000', 'John Doe Inc', 'RC00000000', '00000000-0001', NULL, NULL, 'johnfakedoe@gmail.com', 'ACTIVE', '+1 000 000 0000', 'PRIVATE COMPANY LIMITED BY SHARES', 'Information service activities', '2017-06-09T00:00:00.000+00:00', '1ST FLOOR,SUM HOUSE,Fake Street', 'LAGOS', 'Lagos Mainland', 'YABA', NULL, '[{\"name\":\"PETER DOE\",\"designation\":\"WITNESS\",\"isCorporate\":false,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":\"\",\"sharesValue\":null,\"sharesCount\":null,\"occupation\":\"LAWYER\",\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"\",\"address\":\"8C, NONE STREET, ZONE 4\",\"countryOfResidence\":\"NIGERIA\",\"number\":\"\",\"isForeign\":\"false\",\"documentType\":\"\",\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":\"\",\"email\":\"\",\"phone\":\"\",\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"SUSAN DOE\",\"designation\":\"SECRETARY_COMPANY\",\"isCorporate\":false,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":\"\",\"sharesValue\":null,\"sharesCount\":null,\"occupation\":\"SECRETARY\",\"nationality\":\"NIGERIA\",\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"FEMALE\",\"address\":\"11, NONE CRESCENT\",\"countryOfResidence\":\"NIGERIA\",\"number\":\"\",\"isForeign\":\"false\",\"documentType\":\"\",\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":\"\",\"email\":\"\",\"phone\":\"\",\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"MICHAEL DOE\",\"designation\":\"DIRECTOR\",\"isCorporate\":null,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":null,\"sharesValue\":null,\"sharesCount\":null,\"occupation\":\"BUSINESS\",\"nationality\":\"NIGERIA\",\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"MALE\",\"address\":\"1, NONE STREET, \",\"countryOfResidence\":\"NIGERIA\",\"number\":null,\"isForeign\":\"false\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"JANE DOE  INC\",\"designation\":\"SHAREHOLDER\",\"isCorporate\":true,\"appointedOn\":\"2021-03-17T14:07:43.000+00:00\",\"resignedOn\":null,\"sharesType\":\"ORDINARY\",\"sharesValue\":\"9990000\",\"sharesCount\":\"9990000\",\"occupation\":null,\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":null,\"address\":\"01 COASTAL HIGHWAY,LEWES DE 000000  USA,COUNTY OF SUSSEX\",\"countryOfResidence\":\"UNITED STATES\",\"number\":null,\"isForeign\":\"true\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"JOHN DOE\",\"designation\":\"SHAREHOLDER\",\"isCorporate\":null,\"appointedOn\":null,\"resignedOn\":null,\"sharesType\":\"ORDINARY\",\"sharesValue\":\"10000\",\"sharesCount\":\"10000\",\"occupation\":null,\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":\"MALE\",\"address\":\"1 NONE STREET,LEKKI\",\"countryOfResidence\":\"NIGERIA\",\"number\":null,\"isForeign\":\"false\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]},{\"name\":\"JOHN DOE INC\",\"designation\":\"PERSONS WITH SIGNIFICANT CONTROL\",\"isCorporate\":true,\"appointedOn\":\"2022-03-30T14:42:16.554+00:00\",\"resignedOn\":null,\"sharesType\":null,\"sharesValue\":null,\"sharesCount\":null,\"occupation\":null,\"nationality\":null,\"birthYear\":null,\"birthMonth\":null,\"birthDate\":null,\"dateOfBirth\":null,\"gender\":null,\"address\":\"01 COASTAL HIGHWAY,LEWES DE 000000 \",\"countryOfResidence\":\"UNITED STATES\",\"number\":null,\"isForeign\":\"true\",\"documentType\":null,\"documentIssuedOn\":null,\"documentIssuedBy\":null,\"documentNumber\":null,\"email\":null,\"phone\":null,\"status\":\"ACTIVE\",\"companies\":[]}]', '1ST FLOOR,SUM HOUSE,Fake Street, YABA, LAGOS STATE ', NULL, NULL, '2023-08-28T12:35:16.819Z', '2022-11-03T14:16:54.235Z', 'Nigeria', '2023-08-28 12:35:16', '2023-08-28 12:35:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0,
  `review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `user_id`, `email`, `client_id`, `phone`, `role`, `company`, `city`, `address`, `state`, `country`, `email_status`, `status`, `created_at`, `updated_at`, `is_sandbox`, `review`) VALUES
(1, 1, 'danniesjamie@gmail.com', 9, '0803393823', NULL, NULL, 'lagso', 'lagos', 'lagos', 'ng', NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', 0, NULL),
(2, 16, 'jesmikky@gmail.com', 15, '08028739833', NULL, NULL, 'lagso', 'lagos', 'lagos', 'ng', NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', 0, NULL),
(3, 17, 'dannies@gmail.com', 1, '08028739833', NULL, NULL, 'lagso', 'lagos', 'lagos', 'ng', NULL, 'rejected', '2023-04-20 17:24:07', '2023-07-31 22:17:29', 0, NULL),
(5, 20, 'stephenjason41@gmail.com', 18, '+2348165648269', NULL, NULL, 'Ikorodu', 'sdsd', 'Lagos', 'Nigeria', NULL, NULL, '2023-04-20 20:59:21', '2023-04-20 20:59:21', 0, NULL),
(6, 21, 'danniejames1984@gmail.com', 1, '08028739821', NULL, NULL, 'lagso', 'lagos', 'lagos', 'ng', NULL, 'verified', '2023-04-20 22:06:34', '2023-07-31 22:16:49', 0, NULL),
(7, 24, 'michaelkachi2018@gmail.com', 1, '08028739833', NULL, NULL, 'lagso', 'lagos', 'lagos', 'ng', NULL, 'verified', '2023-06-30 16:31:07', '2023-07-08 23:06:52', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_services`
--

CREATE TABLE `candidate_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_adminUpload` int(11) DEFAULT NULL,
  `sampled_doc` varchar(191) DEFAULT NULL,
  `instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_services`
--

INSERT INTO `candidate_services` (`id`, `name`, `fee`, `created_at`, `updated_at`, `is_adminUpload`, `sampled_doc`, `instructions`) VALUES
(1, 'Education Check', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(2, 'Police / Criminal Record Check', '500', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(3, 'Professional Certificate Verification Check', '150', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(4, 'Address Verification', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(5, 'ID Verification / Right to Work/ Residency Check', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(6, 'Driver\'s Licence Verification', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(7, 'Employment Referencing Verification Check', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(8, 'Guarantor', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(9, 'Address Verification', '500', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL),
(10, 'Political Exposed Persons (PEP) Check', '200', '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_verifications`
--

CREATE TABLE `candidate_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `candidate_services_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_paid` int(11) DEFAULT NULL,
  `doc` text DEFAULT NULL,
  `QA_approved` varchar(255) DEFAULT NULL,
  `QA_review` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `review` varchar(191) DEFAULT NULL,
  `final_doc` varchar(191) DEFAULT NULL,
  `instruction` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_verifications`
--

INSERT INTO `candidate_verifications` (`id`, `user_id`, `client_id`, `candidate_services_id`, `status`, `is_paid`, `doc`, `QA_approved`, `QA_review`, `created_at`, `updated_at`, `review`, `final_doc`, `instruction`) VALUES
(1, 14, 9, 1, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(2, 14, 9, 2, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(3, 14, 9, 3, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(4, 14, 9, 4, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(5, 14, 9, 5, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(6, 14, 9, 6, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(7, 14, 9, 7, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(8, 14, 9, 8, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(9, 14, 9, 9, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(10, 14, 9, 10, 'pending', 0, NULL, NULL, NULL, '2023-04-04 21:20:06', '2023-04-04 21:20:06', NULL, NULL, NULL),
(11, 16, 15, 1, 'approved', 0, 'Logo_of_Addax_Petroleum.jpg', NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 19:13:39', NULL, NULL, NULL),
(12, 16, 15, 2, 'pending', 0, '5494120-chevron-logo-logodix-chevron-logo-png-480_360_preview.png', NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 19:13:06', NULL, NULL, NULL),
(13, 16, 15, 3, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(14, 16, 15, 4, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(15, 16, 15, 5, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(16, 16, 15, 6, 'pending', 0, 'MicrosoftTeams-image (1).png', NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 19:13:06', NULL, NULL, NULL),
(17, 16, 15, 7, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(18, 16, 15, 8, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(19, 16, 15, 9, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(20, 16, 15, 10, 'pending', 0, NULL, NULL, NULL, '2023-04-11 18:42:23', '2023-04-11 18:42:23', NULL, NULL, NULL),
(21, 17, 1, 2, 'pending', 0, NULL, NULL, NULL, '2023-04-20 17:24:07', '2023-04-20 17:24:07', NULL, NULL, NULL),
(22, 17, 1, 3, 'pending', 0, NULL, NULL, NULL, '2023-04-20 17:24:07', '2023-04-20 17:24:07', NULL, NULL, NULL),
(23, 17, 1, 4, 'pending', 0, NULL, NULL, NULL, '2023-04-20 17:24:07', '2023-04-20 17:24:07', NULL, NULL, NULL),
(24, 17, 1, 5, 'pending', 0, NULL, NULL, NULL, '2023-04-20 17:24:07', '2023-04-20 17:24:07', NULL, NULL, NULL),
(25, 17, 1, 6, 'pending', 0, NULL, NULL, NULL, '2023-04-20 17:24:07', '2023-04-20 17:24:07', NULL, NULL, NULL),
(26, 20, 18, 1, 'pending', 0, NULL, NULL, NULL, '2023-04-20 20:59:21', '2023-04-20 20:59:21', NULL, NULL, NULL),
(27, 20, 18, 2, 'pending', 0, NULL, NULL, NULL, '2023-04-20 20:59:21', '2023-04-20 20:59:21', NULL, NULL, NULL),
(28, 20, 18, 3, 'pending', 0, NULL, NULL, NULL, '2023-04-20 20:59:21', '2023-04-20 20:59:21', NULL, NULL, NULL),
(29, 20, 18, 4, 'pending', 0, NULL, NULL, NULL, '2023-04-20 20:59:21', '2023-04-20 20:59:21', NULL, NULL, NULL),
(30, 20, 18, 5, 'pending', 0, NULL, NULL, NULL, '2023-04-20 20:59:21', '2023-04-20 20:59:21', NULL, NULL, NULL),
(31, 21, 1, 3, 'pending', 0, NULL, NULL, NULL, '2023-04-20 22:06:34', '2023-04-20 22:06:34', NULL, NULL, NULL),
(32, 21, 1, 4, 'pending', 0, NULL, NULL, NULL, '2023-04-20 22:06:34', '2023-04-20 22:06:34', NULL, NULL, NULL),
(33, 21, 1, 5, 'pending', 0, NULL, NULL, NULL, '2023-04-20 22:06:34', '2023-04-20 22:06:34', NULL, NULL, NULL),
(34, 21, 1, 6, 'pending', 0, NULL, NULL, NULL, '2023-04-20 22:06:34', '2023-04-20 22:06:34', NULL, NULL, NULL),
(35, 21, 1, 7, 'pending', 0, NULL, NULL, NULL, '2023-04-20 22:06:34', '2023-04-20 22:06:34', NULL, NULL, NULL),
(36, 21, 1, 8, 'pending', 0, NULL, NULL, NULL, '2023-04-20 22:06:34', '2023-04-20 22:06:34', NULL, NULL, NULL),
(37, 24, 1, 3, 'approved', 0, 'tynesidequotations.pdf', NULL, NULL, '2023-06-30 16:31:07', '2023-06-30 16:35:31', NULL, NULL, NULL),
(38, 24, 1, 4, 'approved', 0, 'tynesidequotations.pdf', NULL, NULL, '2023-06-30 16:31:07', '2023-07-08 23:05:33', 'sdsdsdsdsd', 'A9016845.jpeg', NULL),
(39, 24, 1, 5, 'approved', 0, 'tynesidequotations.pdf', NULL, NULL, '2023-06-30 16:31:07', '2023-07-08 23:05:57', 'sdsdsdsdsd', 'A9016845.jpeg', NULL),
(40, 24, 1, 6, 'approved', 0, 'tynesidequotations.pdf', NULL, NULL, '2023-06-30 16:31:07', '2023-07-08 23:06:27', 'sdsdsdsd', 'class-30-632x422.jpg', NULL),
(41, 24, 1, 7, 'approved', 0, 'tynesidequotations.pdf', NULL, NULL, '2023-06-30 16:31:07', '2023-07-08 23:06:45', 'sdsdsdsdsd', 'class-30-632x422-removebg-preview.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `reg_number` varchar(191) DEFAULT NULL,
  `tax_number` varchar(191) DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  `website` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `cac` varchar(191) DEFAULT NULL,
  `others` varchar(191) DEFAULT NULL,
  `is_admin_verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `company_name`, `company_email`, `company_address`, `company_phone`, `image`, `is_activated`, `created_at`, `updated_at`, `logo`, `reg_number`, `tax_number`, `description`, `website`, `facebook`, `instagram`, `linkedin`, `cac`, `others`, `is_admin_verified`) VALUES
(1, 1, 'morgans', NULL, NULL, NULL, NULL, 0, '2023-04-04 20:28:10', '2023-08-28 13:20:08', 'tmclogo.jpg.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 15, 'Morgansconsortium', NULL, NULL, NULL, NULL, 0, '2023-04-11 18:31:11', '2023-04-11 18:31:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 18, 'The Morgans', 'jasonblack@gmail.com', 'sdsd', '080292662782', NULL, 0, '2023-04-20 20:46:47', '2023-04-20 20:52:32', 'Screenshot (28).png.', 'sdsdd', '23232432s', 'sdsdsd', 'The Morgans', 'dsd', 'sds', 'sdsd', NULL, NULL, 0),
(4, 22, 'The Morgans Consulting', NULL, NULL, NULL, NULL, 0, '2023-05-11 17:41:45', '2023-05-11 17:41:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 23, 'The Morgans Consulting', NULL, NULL, NULL, NULL, 0, '2023-05-11 20:05:59', '2023-05-11 20:05:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 25, 'PORTREC Resourcing', NULL, NULL, NULL, NULL, 0, '2023-07-07 12:25:33', '2023-07-07 12:25:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 26, 'Morgansconsortium', NULL, NULL, NULL, NULL, 0, '2023-07-31 18:00:37', '2023-07-31 18:00:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 27, 'Morgans', NULL, NULL, NULL, NULL, 1, '2023-07-31 18:37:47', '2023-07-31 19:06:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

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
-- Table structure for table `field_inputs`
--

CREATE TABLE `field_inputs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `placeholder` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `is_required` tinyint(1) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `inputid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `field_inputs`
--

INSERT INTO `field_inputs` (`id`, `slug`, `name`, `placeholder`, `type`, `is_required`, `label`, `inputid`, `created_at`, `updated_at`) VALUES
(1, 'nin', 'pin', 'Enter NIN number', 'text', 1, 'NIN Number', 'pin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(2, 'nin', 'validate_data', NULL, 'checkbox', 0, 'Validate Data', 'validateData', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(3, 'nin', 'compare_image', NULL, 'checkbox', 0, 'Compare Image', 'compareImage', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(4, 'nip', 'pin', 'Enter NIP number', 'text', 1, 'NIP Number', 'pin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(5, 'nip', 'last_name', 'Enter Last Name', 'text', 1, 'Last Name', 'last_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(6, 'nip', 'validate_data', NULL, 'checkbox', 0, 'Validate Data', 'validateData', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(7, 'nip', 'compare_image', NULL, 'checkbox', 0, 'Compare Image', 'compareImage', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(8, 'pvc', 'pin', 'Enter PVC number', 'text', 1, 'PVC Number', 'pin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(9, 'pvc', 'validate_data', NULL, 'checkbox', 0, 'Validate Data', 'validateData', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(10, 'compare-images', 'first_image', NULL, 'file', 1, 'First Image', 'firstImage', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(11, 'compare-images', 'second_image', NULL, 'file', 1, 'Second Image', 'secondImage', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(12, 'bank-account', 'account_number', 'Enter Account Number', 'text', 1, 'Account Number', 'accountNumber', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(13, 'bank-account', 'bank', 'Select Bank', 'select', 1, 'Bank', 'bank', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(14, 'bank-account', 'bank_name', NULL, 'hidden', 1, NULL, 'bank_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(15, 'phone-number', 'phone_number', 'Enter Phone Number', 'text', 1, 'Phone Number', 'phoneNumber', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(16, 'phone-number', 'advance_search', NULL, 'checkbox', 0, 'Advance Search', 'advanceSearch', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(17, 'bvn', 'pin', 'Enter BVN number', 'text', 1, 'BVN Number', 'pin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(18, 'bvn', 'validate_data', NULL, 'checkbox', 0, 'Validate Data', 'validateData', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(19, 'bvn', 'compare_image', NULL, 'checkbox', 0, 'Compare Image', 'compareImage', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(20, 'bvn', 'advance_search', NULL, 'checkbox', 0, 'Advance Search', 'advanceSearch', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(21, 'ndl', 'pin', 'Enter NDL number', 'text', 1, 'NDL number', 'pin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(22, 'ndl', 'validate_data', NULL, 'checkbox', 0, 'Validate Data', 'validateData', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(23, 'ndl', 'compare_image', NULL, 'checkbox', 0, 'Compare Image', 'compareImage', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(24, 'cac', 'search_term', 'Select a Search Term', 'select', 1, 'Search Term', 'searchTerm', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(25, 'cac', 'search_value', 'Enter a Search Value', 'text', 1, 'Search Value', 'searchValue', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(26, 'tin', 'pin', '', 'text', 1, 'Tax Identification Number', 'pin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(27, 'candidate', 'first_name', 'Enter Candidate\'s First Name', 'text', 1, 'First Name', 'first_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(28, 'candidate', 'middle_name', 'Enter Candidate\'s Middle Name', 'text', 0, 'Middle Name', 'middle_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(29, 'candidate', 'last_name', 'Enter Candidate\'s Last Name', 'text', 1, 'Last Name', 'last_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(30, 'candidate', 'phone', 'Enter Candidate\'s Phone', 'text', 1, 'Phone', 'phone', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(31, 'candidate', 'dob', 'Enter Candidate\'s Date of Birth e.g. 1900-03-31', 'text', 0, 'Date of Birth', 'dob', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(32, 'candidate', 'email', 'Enter Candidate\'s Email', 'email', 0, 'Email', 'email', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(33, 'candidate', 'image', 'Upload Candidate\'s Picture', 'file', 1, 'Image', 'image', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(34, 'individual-address', 'flat_number', 'E.g. 1st floor', 'text', 0, 'Candidate\'s Flat Number', 'flat_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(35, 'individual-address', 'building_name', 'Enter Building Name', 'text', 0, 'Candidate\'s Building Name', 'building_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(36, 'individual-address', 'building_number', 'E.g. 6 or Number 6 or No. 6', 'text', 1, 'Candidate\'s Building Number', 'building_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(37, 'individual-address', 'landmark', 'Enter nearest Landmark or bustop', 'text', 1, 'Nearest Landmark', 'landmark', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(38, 'individual-address', 'street', 'Enter Street Name', 'text', 1, 'Candidate\'s Street', 'street', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(39, 'individual-address', 'Sub_street', 'Enter Sub-Street Name', 'text', 0, 'Candidate\'s sub-Street', 'sub_street', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(40, 'individual-address', 'state', 'Enter State', 'text', 1, 'Candidate\'s State', 'state', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(41, 'individual-address', 'city', 'Enter City', 'text', 1, 'Candidate\'s City', 'city', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(42, 'individual-address', 'lga', 'Enter LGA', 'text', 0, 'Candidate\'s LGA', 'lga', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(43, 'reference-address', 'first_name', 'Enter Guarantor\'s First Name', 'text', 1, 'First Name', 'first_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(44, 'reference-address', 'last_name', 'Enter Guarantor\'s Last Name', 'text', 1, 'Last Name', 'last_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(45, 'reference-address', 'phone', 'Enter Guarantor\'s Phone Number', 'text', 1, 'Phone', 'phone', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(46, 'reference-address', 'email', 'Enter Guarantor\'s Email', 'text', 1, 'Email', 'email', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(47, 'reference-address', 'image', 'Upload Guarantor\'s Picture', 'file', 1, 'Image', 'image', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(48, 'reference-address', 'flat_number', 'E.g. 1st floor', 'text', 0, 'Flat Number', 'flat_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(49, 'reference-address', 'building_name', 'Enter Building Name', 'text', 0, 'Building Name', 'building_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(50, 'reference-address', 'building_number', 'E.g. 6 or Number 6 or No. 6', 'text', 1, 'Building Number', 'building_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(51, 'reference-address', 'landmark', 'Enter nearest Landmark or bustop', 'text', 1, 'Nearest Landmark', 'landmark', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(52, 'reference-address', 'street', 'Enter Street', 'text', 1, 'Street', 'street', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(53, 'reference-address', 'Sub_street', 'Enter Sub-Street', 'text', 0, 'Sub-street', 'sub_street', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(54, 'reference-address', 'state', 'Enter State', 'text', 1, 'State', 'state', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(55, 'reference-address', 'city', 'Enter City', 'text', 1, 'City', 'city', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(56, 'reference-address', 'lga', 'Enter LGA', 'text', 0, 'LGA', 'lga', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(57, 'business-address', 'name', 'Enter Contact Person\'s Name', 'text', 1, 'Name', 'name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(58, 'business-address', 'email', 'Enter Contact\'s Email', 'text', 1, 'Email', 'email', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(59, 'business-address', 'phone', 'Enter Contact\'s Phone', 'text', 1, 'Phone', 'phone', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(60, 'business-address', 'registration_number', 'Registration Number', 'text', 1, 'Registration Number', 'registration_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(61, 'business-address', 'flat_number', 'E.g. 1st floor', 'text', 0, 'Flat Number', 'flat_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(62, 'business-address', 'building_name', 'Enter Building Name', 'text', 0, 'Building Name', 'building_name', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(63, 'business-address', 'building_number', 'E.g. 6 or Number 6 or No. 6', 'text', 1, 'Building Number', 'building_number', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(64, 'business-address', 'landmark', 'Enter nearest Landmark or bustop', 'text', 1, 'Nearest Landmark', 'landmark', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(65, 'business-address', 'street', 'Enter Street', 'text', 1, 'Street', 'street', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(66, 'business-address', 'Sub_street', 'Enter Sub-Street', 'text', 0, 'Sub-street', 'sub_street', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(67, 'business-address', 'state', 'Enter State', 'text', 1, 'State', 'state', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(68, 'business-address', 'city', 'Enter City', 'text', 1, 'City', 'city', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(69, 'business-address', 'lga', 'Enter LGA', 'text', 0, 'LGA', 'lga', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(70, 'adverse-media-intelligence', 'search_query', 'Enter Search Query', 'text', 1, 'Search Query', NULL, '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(71, 'pep-sanction-list', 'first_name', 'Enter First Name', 'text', 1, 'First Name', NULL, '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(72, 'pep-sanction-list', 'last_name', 'Enter Last Name', 'text', 1, 'Last Name', NULL, '2023-08-08 22:31:52', '2023-08-08 22:31:52'),
(73, 'pep-sanction-list', 'middle_name', 'Enter Middle Name', 'text', NULL, 'Middle Name', NULL, '2023-08-09 00:33:13', '2023-08-09 00:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `fund_requests`
--

CREATE TABLE `fund_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `approved_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fund_requests`
--

INSERT INTO `fund_requests` (`id`, `reference`, `user_id`, `amount`, `tax`, `total_amount`, `payment_method`, `is_approved`, `approved_by`, `created_at`, `updated_at`) VALUES
(1, 'vrh5ycv7kxp2290hqqq9w3rb', 27, '5000.00', '375.00', '5375.00', 'bank_transfer', 0, NULL, '2023-07-31 19:07:05', '2023-07-31 19:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `identity_verifications`
--

CREATE TABLE `identity_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identity_verifications`
--

INSERT INTO `identity_verifications` (`id`, `verification_id`, `ref`, `pin`, `user_id`, `fee`, `discount`, `status`, `created_at`, `updated_at`, `first_name`, `last_name`, `is_sandbox`) VALUES
(1, 2, 'IdS1z3h2EL9uIBfTjwe5511', NULL, '1', NULL, NULL, 'found', '2023-03-23 21:49:45', '2023-03-23 21:49:45', NULL, NULL, 0),
(2, 2, 'ZVejMoId839zYKRuaJ6C5905', '641ccd510dad9c81fe7db7cb', '1', NULL, NULL, 'found', '2023-03-23 22:06:09', '2023-03-23 22:06:09', 'John', 'Doe', 0),
(3, 3, '8auH8e2rRqjE8h7F0rP992', '641ccd820dad9c42b27db7ce', '1', NULL, NULL, 'found', '2023-03-23 22:07:01', '2023-03-23 22:07:01', 'John', 'Doe', 0),
(4, 5, 'ytC8IRlmWsi92H1LfdZ9396', 'AAA00000AA00', '1', NULL, NULL, 'found', '2023-03-23 22:15:30', '2023-03-23 22:15:30', 'John', 'Doe', 0),
(5, 5, 'VIBaKMvSSups0Q2uYyg6100', 'AAA00000AA00', '18', NULL, NULL, 'found', '2023-04-20 20:54:49', '2023-04-20 20:54:49', 'John', 'Doe', 0),
(6, 1, 'Or0nuVZFOiCzmV9jGK0B4568', 'A11111111', '1', NULL, NULL, 'found', '2023-07-31 17:59:12', '2023-07-31 17:59:12', 'Sarah', 'Doe', 0),
(7, 1, 'MKh3OkyvofotXIfZ8u824761', 'A11111111', '26', NULL, NULL, 'found', '2023-07-31 18:08:27', '2023-07-31 18:08:27', 'Sarah', 'Doe', 0),
(8, 2, 'LfzcFLsvVLs6PZXWl44244', '00A0A0A000000000000', '26', NULL, NULL, 'found', '2023-07-31 18:08:49', '2023-07-31 18:08:49', 'John', 'Doe', 0),
(9, 3, '3Fs8TeBjdTYXHTx5P199193', '11111111111', '26', NULL, NULL, 'found', '2023-07-31 18:10:16', '2023-07-31 18:10:16', 'John', 'Doe', 0),
(10, 1, 'CC456RxNfWHQdxnvDSLg1542', 'A11111111', '27', NULL, NULL, 'found', '2023-07-31 18:42:59', '2023-07-31 18:42:59', 'Sarah', 'Doe', 0),
(11, 2, 'q4pVaUdegGr5JpnyqQU5901', '00A0A0A000000000000', '27', NULL, NULL, 'found', '2023-07-31 18:43:30', '2023-07-31 18:43:30', 'John', 'Doe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `identity_verification_details`
--

CREATE TABLE `identity_verification_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identity_verification_id` bigint(20) UNSIGNED NOT NULL,
  `external_ref` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  `payload` text DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `document_number` varchar(255) DEFAULT NULL,
  `educational_level` varchar(255) DEFAULT NULL,
  `employment_status` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `place_of_issue` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `issue_date` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `birth_state` varchar(255) DEFAULT NULL,
  `residence_state` varchar(255) DEFAULT NULL,
  `tracking_id` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tax_identification_number` varchar(255) DEFAULT NULL,
  `first_state_of_issuance` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_verifications`
--

CREATE TABLE `image_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `image_comparison` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `all_validation_passed` tinyint(1) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_30_112035_create_roles_table', 1),
(5, '2021_06_30_113934_create_wallets_table', 1),
(6, '2021_06_30_114029_create_user_activities_table', 1),
(7, '2021_06_30_114127_create_profiles_table', 1),
(8, '2021_08_19_153930_create_field_inputs_table', 1),
(9, '2021_08_21_081943_create_verifications_table', 1),
(10, '2021_08_24_081943_create_identity_verifications_table', 1),
(11, '2021_08_24_102244_create_api_responses_table', 1),
(12, '2021_09_07_100225_create_transactions_table', 1),
(13, '2021_09_09_125548_create_identity_verification_details_table', 1),
(14, '2021_09_23_120906_create_business_verifications_table', 1),
(15, '2021_09_30_151727_create_business_verification_details_table', 1),
(16, '2021_10_05_083842_create_address_verifications_table', 1),
(17, '2021_10_06_111515_create_site_settings_table', 1),
(18, '2021_10_08_120151_create_clients_table', 1),
(19, '2021_10_08_120152_create_candidates_table', 1),
(20, '2021_10_08_120422_create_candidate_services_table', 1),
(21, '2021_10_08_120432_create_candidate_verifications_table', 1),
(22, '2021_10_23_175856_create_fund_requests_table', 1),
(23, '2021_10_25_004556_create_notifications_table', 1),
(24, '2021_10_25_022059_create_activity_logs_table', 1),
(25, '2021_10_26_104705_create_admins_table', 1),
(26, '2021_11_14_022420_create_address_verification_details_table', 1),
(27, '2022_05_18_153622_create_webhook_calls_table', 1),
(28, '2022_07_26_134000_create_bvn_verifications_table', 1),
(29, '2022_07_26_134145_create_nin_verifications_table', 1),
(30, '2022_07_26_135531_create_nip_verifications_table', 1),
(31, '2022_07_26_135553_create_ndl_verifications_table', 1),
(32, '2022_07_26_135616_create_pvc_verifications_table', 1),
(33, '2022_07_27_000407_create_phone_number_verifications_table', 1),
(34, '2022_07_27_011708_create_bank_account_verifications_table', 1),
(35, '2022_07_27_013055_create_image_verifications_table', 1),
(36, '2022_08_11_215334_create_cac_verifications_table', 1),
(37, '2022_08_11_215415_create_tin_verifications_table', 1),
(43, '2023_03_27_163143_add_field_to_admins', 2),
(44, '2023_03_27_163211_add_field_to_candidates', 2),
(45, '2023_03_27_163230_add_field_to_clients', 2),
(46, '2023_04_08_110701_add_fields_to_clients', 3),
(47, '2023_04_10_130552_add_fields_to_image_verifications', 3),
(48, '2023_04_10_130644_add_fields_to_bvn_verifications', 3),
(49, '2023_04_10_130718_add_fields_to_ndl_verifications', 3),
(50, '2023_04_10_130734_add_fields_to_cac_verifications', 3),
(51, '2023_04_10_130801_add_fields_to_nin_verifications', 3),
(52, '2023_04_10_130818_add_fields_to_nip_verifications', 3),
(53, '2023_04_10_130832_add_fields_to_phone_verifications', 3),
(54, '2023_04_10_130846_add_fields_to_pvc_verifications', 3),
(55, '2023_04_10_130904_add_fields_to_tin_verifications', 3),
(56, '2023_04_10_133444_add_fields_to_identity_verifications', 3),
(57, '2023_04_11_001153_add_fieslds_to_clients', 3),
(58, '2023_04_11_002333_add_fieslds_to_candidates', 3),
(59, '2023_04_11_145321_add_fields_to_verification', 4),
(60, '2023_04_11_164135_add_field_to_bank_verifications', 4),
(61, '2023_04_18_111131_add_field_to_users', 4),
(62, '2023_07_01_163407_add_field_to_candidate_verifications', 4),
(63, '2023_07_01_220330_add_field_to_candidate_services', 4),
(64, '2023_07_03_111746_add_new_field_to_candidate_services', 4),
(65, '2023_07_03_123152_add_new_field_to_candidates', 4),
(66, '2023_08_03_121118_create_pep_saction_verifications_table', 5),
(67, '2023_08_03_124012_create_adverse_media_table', 5),
(68, '2023_08_03_145332_create_adverse_media_categories_table', 5),
(69, '2023_08_09_102417_add_field_to_pep_saction_verifications', 6),
(70, '2023_08_09_115138_add_fields_to_pep_saction_verifications', 7),
(71, '2023_08_15_160608_add_field_to_address_verifications', 7),
(72, '2023_08_17_125004_create_states_table', 8),
(73, '2023_08_21_153749_add_field_to_address_verification', 9);

-- --------------------------------------------------------

--
-- Table structure for table `ndl_verifications`
--

CREATE TABLE `ndl_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `validations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `expired_date` varchar(255) DEFAULT NULL,
  `issued_date` varchar(255) DEFAULT NULL,
  `state_of_issuance` varchar(255) DEFAULT NULL,
  `notify_when_id_expire` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `all_validation_passed` tinyint(1) NOT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ndl_verifications`
--

INSERT INTO `ndl_verifications` (`id`, `verification_id`, `user_id`, `ref`, `service_reference`, `validations`, `status`, `reason`, `data_validation`, `selfie_validation`, `first_name`, `middle_name`, `last_name`, `expired_date`, `issued_date`, `state_of_issuance`, `notify_when_id_expire`, `image`, `phone`, `email`, `dob`, `subject_consent`, `pin`, `type`, `gender`, `all_validation_passed`, `fee`, `requested_at`, `last_modified_at`, `country`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(1, 5, 1, 'a2KsjbdGUyM3xL8STFuv6041', '641c4ce20dad9cbc387db786', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '2023-11-09', '2020-06-12', 'BENUE', '0', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679576297/oysterchecks/identityVerifications/nin/dcjwrmgzimmsqxxnmrrq.jpg', NULL, NULL, '1988-04-04', 1, 'AAA00000AA00', 'nin', 'female', 1, NULL, '2023-03-23T12:58:10.873Z', '2023-03-23T12:58:10.951Z', 'Nigeria', '2023-03-23 12:58:19', '2023-03-23 12:58:19', 0),
(2, 5, 1, 'ytC8IRlmWsi92H1LfdZ9396', '641ccf7c0dad9c6a2a7db7d1', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '2023-11-09', '2020-06-12', 'BENUE', '0', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679609730/oysterchecks/identityVerifications/nin/bvfcr0dnjcoow8soj8ft.jpg', NULL, NULL, '1988-04-04', 1, 'AAA00000AA00', 'nin', 'female', 1, NULL, '2023-03-23T22:15:24.768Z', '2023-03-23T22:15:24.786Z', 'Nigeria', '2023-03-23 22:15:30', '2023-03-23 22:15:30', 0),
(3, 5, 18, 'VIBaKMvSSups0Q2uYyg6100', '644144270bf3dbeb2fcec3f9', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '2023-11-09', '2020-06-12', 'BENUE', '0', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1681998888/oysterchecks/identityVerifications/nin/en4phkyljoxpjouvwmgm.jpg', NULL, NULL, '1988-04-04', 1, 'AAA00000AA00', 'nin', 'female', 1, NULL, '2023-04-20T13:54:47.719Z', '2023-04-20T13:54:47.741Z', 'Nigeria', '2023-04-20 20:54:49', '2023-04-20 20:54:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nin_verifications`
--

CREATE TABLE `nin_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `validations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth_state` varchar(255) DEFAULT NULL,
  `nok_state` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `birth_lga` varchar(255) DEFAULT NULL,
  `birth_country` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `all_validation_passed` tinyint(1) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nip_verifications`
--

CREATE TABLE `nip_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_reference` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `validations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `expired_date` varchar(255) DEFAULT NULL,
  `notify_when_id_expire` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `issued_at` varchar(255) DEFAULT NULL,
  `issued_date` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `all_validation_passed` tinyint(1) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nip_verifications`
--

INSERT INTO `nip_verifications` (`id`, `verification_id`, `user_id`, `service_reference`, `ref`, `validations`, `status`, `reason`, `data_validation`, `selfie_validation`, `first_name`, `middle_name`, `last_name`, `expired_date`, `notify_when_id_expire`, `image`, `signature`, `issued_at`, `issued_date`, `phone`, `dob`, `subject_consent`, `pin`, `type`, `gender`, `all_validation_passed`, `fee`, `requested_at`, `last_modified_at`, `country`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(7, 1, 1, '6418239d0dad9c1da77db593', 'Q2QuwcD5v1amwUkQjRzQ5021', NULL, 'found', NULL, 0, 0, 'Sarah', 'Jane', 'Doe', '2032-01-31', 0, 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679303583/oysterchecks/identityVerifications/passport/hfkmju5vlyqdnuegicqr.jpg', NULL, 'MINNA', '2022-02-01', NULL, '1988-04-04', 1, 'A11111111', 'nip', 'female', 1, NULL, '2023-03-20T09:13:01.845Z', '2023-03-20T09:13:01.863Z', 'Nigeria', '2023-03-20 09:13:03', '2023-03-20 09:13:03', 0),
(8, 1, 1, '6418249f0dad9ce46c7db596', 'cgHUucXBeI09tgNMEo3816', NULL, 'found', NULL, 0, 0, 'Sarah', 'Jane', 'Doe', '2032-01-31', 0, 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679303841/oysterchecks/identityVerifications/passport/ejr3pphzcsgmjlkmvf9p.jpg', NULL, 'MINNA', '2022-02-01', NULL, '1988-04-04', 1, 'A11111111', 'nip', 'female', 1, NULL, '2023-03-20T09:17:19.404Z', '2023-03-20T09:17:19.420Z', 'Nigeria', '2023-03-20 09:17:21', '2023-03-20 09:17:21', 0),
(17, 1, 1, '64c793fe9c87b0bf40af3188', 'Or0nuVZFOiCzmV9jGK0B4568', NULL, 'found', NULL, 0, 0, 'Sarah', 'Jane', 'Doe', '2032-01-31', 0, 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1690801152/oysterchecks/identityVerifications/passport/pzcgpskyyoood8dg0tqb.jpg', NULL, 'MINNA', '2022-02-01', NULL, '1988-04-04', 1, 'A11111111', 'nip', 'female', 1, NULL, '2023-07-31T10:59:11.201Z', '2023-07-31T10:59:11.233Z', 'Nigeria', '2023-07-31 17:59:12', '2023-07-31 17:59:12', 0),
(18, 1, 26, '64c796299c87b00e7faf31d8', 'MKh3OkyvofotXIfZ8u824761', NULL, 'found', NULL, 0, 0, 'Sarah', 'Jane', 'Doe', '2032-01-31', 0, 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1690801706/oysterchecks/identityVerifications/passport/xdj4lddtwztkfaj5v4ls.jpg', NULL, 'MINNA', '2022-02-01', NULL, '1988-04-04', 1, 'A11111111', 'nip', 'female', 1, NULL, '2023-07-31T11:08:25.779Z', '2023-07-31T11:08:25.804Z', 'Nigeria', '2023-07-31 18:08:27', '2023-07-31 18:08:27', 0),
(19, 1, 27, '64c79e419c87b0319caf32fe', 'CC456RxNfWHQdxnvDSLg1542', NULL, 'found', NULL, 0, 0, 'Sarah', 'Jane', 'Doe', '2032-01-31', 0, 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1690803778/oysterchecks/identityVerifications/passport/or37c9lf2hafjlrn9b6l.jpg', NULL, 'MINNA', '2022-02-01', NULL, '1988-04-04', 1, 'A11111111', 'nip', 'female', 1, NULL, '2023-07-31T11:42:57.604Z', '2023-07-31T11:42:57.631Z', 'Nigeria', '2023-07-31 18:42:59', '2023-07-31 18:42:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_read` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pep_saction_verifications`
--

CREATE TABLE `pep_saction_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `middle_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `pepList` longtext DEFAULT NULL,
  `sanctionList` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pep_saction_verifications`
--

INSERT INTO `pep_saction_verifications` (`id`, `verification_id`, `user_id`, `ref`, `status`, `first_name`, `middle_name`, `last_name`, `pepList`, `sanctionList`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(3, 14, 1, 'wSVYIeNdY0TxM5LGg49117', 'not_cleared', 'Ahmed', 'mik', 'Al Khalid', '[{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf10305825f9d131\",\"title\":\"Dr. Mr.\",\"firstName\":\"Khaled Ali Ahmed\",\"lastName\":\"Ali\",\"gender\":\"MALE\",\"aliases\":\"Ali; Khalid Ali Ahmed\",\"function\":\"Egyptian Senate (Shura Council)\",\"specific\":\"Ex Member\",\"country\":\"Egypt\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf103078baf9d132\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Ministry of Communications\",\"specific\":\"Ex Senior Joint Secretary\",\"country\":\"Pakistan\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030d7eef9d133\",\"title\":\"Dr. Mr.\",\"firstName\":\"Ahmad Abdel-Hamid\",\"lastName\":\"Al Khalidi\",\"gender\":\"MALE\",\"aliases\":\"Al-Khalidi, Ahmad; Al Khaledi, Ahmad; Khaldi, Ahmad; Al-Khalidi; Ahmed Mubarak; Al-Khalidi, Ahmed Abdel-Hamid\",\"function\":\"Central Election Commission\",\"specific\":\"Member\",\"country\":\"Palestine\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030a716f9d134\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Relatives of High Officials\",\"specific\":\"Nephew of Hamad Bin Khalifa Al-Thani\",\"country\":\"Qatar\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030c810f9d135\",\"title\":\"Mr.\",\"firstName\":\"Khaled Delli\",\"lastName\":\"Al Ahmad\",\"gender\":\"MALE\",\"aliases\":\"Al-Ahmad, Khaled; al-Ahmad, Khalid\",\"function\":\"Governorate of Idleb\",\"specific\":\"Ex Governor\",\"country\":\"Syria\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030ef7df9d136\",\"title\":\"Mr.\",\"firstName\":\"Ahmed\",\"lastName\":\"Al-Khan\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Gas Processors Association\",\"specific\":\"Ex Technical Committee, Member\",\"country\":\"International\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf10304022f9d137\",\"title\":\"H. E. Dr. Mr.\",\"firstName\":\"Ahmad Khaled\",\"lastName\":\"Ali\",\"gender\":\"MALE\",\"aliases\":\"Al-\'Ali, Ahmad Khaled; al-Ali, Khalid\",\"function\":\"Ministry of Electricity\",\"specific\":\"Ex Minister\",\"country\":\"Syria\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf10306c56f9d138\",\"title\":\"Dr. Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":\"Khaled Al-Ali\",\"function\":\"Ministry of Education and Higher Education\",\"specific\":\"Assistant Undersecretary, Higher Education Affairs\",\"country\":\"Qatar\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf103005cbf9d139\",\"title\":\"Maj. Gen. Sheikh Mr.\",\"firstName\":\"Ahmed bin Mohammed bin Ali\",\"lastName\":\"Al Khalifa\",\"gender\":\"MALE\",\"aliases\":\"Al Khalifa, Ahmed bin Mohammed\",\"function\":\"Office of the Prime Minister\",\"specific\":\"Undersecretary for Defense\",\"country\":\"Bahrain\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf10307e12f9d13a\",\"title\":\"Mr.\",\"firstName\":\"Ahmed Mohamed\",\"lastName\":\"Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Constituent Assembly of Egypt, Revamped\",\"specific\":\"Ex Member (Representative of the State Council)\",\"country\":\"Egypt\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030aaeaf9d13b\",\"title\":\"Mr.\",\"firstName\":\"Ahmed\",\"lastName\":\"Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Egyptian Exchange\",\"specific\":\"Director, Information Center\",\"country\":\"Egypt\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030733ef9d13c\",\"title\":\"Sheikh Mr.\",\"firstName\":\"Ahmed bin Abdulla\",\"lastName\":\"Al Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Ministry of Interior, General Directorate of Nationality, Passports and Residence Affairs (GDNPR)\",\"specific\":\"Director, Visas and Residence\",\"country\":\"Bahrain\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf10302ec6f9d13d\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Relatives of High Officials\",\"specific\":\"Father of Zulfiqar Ali Khan\",\"country\":\"Pakistan\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf10302d7bf9d13e\",\"title\":\"Sheikh Mr.\",\"firstName\":\"Ahmed bin Khalifa\",\"lastName\":\"Al Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Bahrain Telecommunications Company (BATELCO)\",\"specific\":\"Ex General Manager, Human Resources and Development\",\"country\":\"Bahrain\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b7e6cf1030703af9d13f\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"City of Obari\",\"specific\":\"Ex Mayor\",\"country\":\"Libya\",\"active\":\"false\"}]', '[{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b7e6cf1030699ef9d140\",\"sanctionType\":\"UNSC\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"AHMED KHALFAN GHAILANI\",\"comment\":\"Apprehended in July 2004 and in custody for trial in the United States of America, as at October 2010. Review pursuant to Security Council resolution 1822 (2008) was concluded on 21 Jun. 2010. Review pursuant to Security Council resolution 2368 (2017) was concluded on 4 Dec. 2019. INTERPOL-UN Security Council Special Notice web link: https:\\/\\/www.interpol.int\\/en\\/How-we-work\\/Notices\\/View-UN-Notices-Individuals\",\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b7e6cf103035aaf9d141\",\"sanctionType\":\"EU\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Al Khalid, Ahmed\",\"comment\":null,\"gender\":\"MALE\",\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b7e6cf1030dfe3f9d142\",\"sanctionType\":\"UK\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Al Khalid, Ahmed\",\"comment\":\"UN Ref QI.G.28.01. Also referred to Ahmed the Tanzanian, Foopie and Fupi. Apprehended in July 2004 and in custody for trial in the USA as at Oct 2010.\",\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b7e6cf10302060f9d143\",\"sanctionType\":\"SECO\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Ahmed Khalfan Ghailani\",\"comment\":\"Apprehended in July 2004 and in custody for trial in the United States of America, as at October 2010. Review pursuant to Security Council resolution 1822 (2008) was concluded on 21 Jun 2010. Review pursuant to Security Council resolution 2368 (2017) was concluded on 4 Dec 2019. INTERPOL-UN Security Council Special Notice web link available.\",\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b7e6cf10305c7df9d144\",\"sanctionType\":\"USSDN\",\"firstName\":\"Ahmed Khalfan\",\"lastName\":\"GHAILANI\",\"fullName\":\"GHAILANI, Ahmed Khalfan\",\"comment\":null,\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b7e6cf1030d988f9d145\",\"sanctionType\":\"DFAT\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Ahmed Khalfan Ghailani\",\"comment\":\"Apprehended in July 2004 and in custody for trial in the United States of America, as at October 2010.\",\"gender\":null,\"function\":null}]', '2023-08-09 15:59:34', '2023-08-09 15:59:34', 0),
(4, 14, 1, 'NWftGTtAeTd04VTupsaQ7783', 'not_cleared', 'Ahmed', 'mik', 'Al Khalid', '[{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf103099a4f9d149\",\"title\":\"Dr. Mr.\",\"firstName\":\"Khaled Ali Ahmed\",\"lastName\":\"Ali\",\"gender\":\"MALE\",\"aliases\":\"Ali; Khalid Ali Ahmed\",\"function\":\"Egyptian Senate (Shura Council)\",\"specific\":\"Ex Member\",\"country\":\"Egypt\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf10302ec3f9d14a\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Ministry of Communications\",\"specific\":\"Ex Senior Joint Secretary\",\"country\":\"Pakistan\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf103043aef9d14b\",\"title\":\"Dr. Mr.\",\"firstName\":\"Ahmad Abdel-Hamid\",\"lastName\":\"Al Khalidi\",\"gender\":\"MALE\",\"aliases\":\"Al-Khalidi, Ahmad; Al Khaledi, Ahmad; Khaldi, Ahmad; Al-Khalidi; Ahmed Mubarak; Al-Khalidi, Ahmed Abdel-Hamid\",\"function\":\"Central Election Commission\",\"specific\":\"Member\",\"country\":\"Palestine\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf1030a043f9d14c\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Relatives of High Officials\",\"specific\":\"Nephew of Hamad Bin Khalifa Al-Thani\",\"country\":\"Qatar\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf1030f919f9d14d\",\"title\":\"Mr.\",\"firstName\":\"Khaled Delli\",\"lastName\":\"Al Ahmad\",\"gender\":\"MALE\",\"aliases\":\"Al-Ahmad, Khaled; al-Ahmad, Khalid\",\"function\":\"Governorate of Idleb\",\"specific\":\"Ex Governor\",\"country\":\"Syria\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf10309ce3f9d14e\",\"title\":\"Mr.\",\"firstName\":\"Ahmed\",\"lastName\":\"Al-Khan\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Gas Processors Association\",\"specific\":\"Ex Technical Committee, Member\",\"country\":\"International\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf10308cf0f9d14f\",\"title\":\"H. E. Dr. Mr.\",\"firstName\":\"Ahmad Khaled\",\"lastName\":\"Ali\",\"gender\":\"MALE\",\"aliases\":\"Al-\'Ali, Ahmad Khaled; al-Ali, Khalid\",\"function\":\"Ministry of Electricity\",\"specific\":\"Ex Minister\",\"country\":\"Syria\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf1030dd1ff9d150\",\"title\":\"Dr. Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":\"Khaled Al-Ali\",\"function\":\"Ministry of Education and Higher Education\",\"specific\":\"Assistant Undersecretary, Higher Education Affairs\",\"country\":\"Qatar\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf103001f8f9d151\",\"title\":\"Maj. Gen. Sheikh Mr.\",\"firstName\":\"Ahmed bin Mohammed bin Ali\",\"lastName\":\"Al Khalifa\",\"gender\":\"MALE\",\"aliases\":\"Al Khalifa, Ahmed bin Mohammed\",\"function\":\"Office of the Prime Minister\",\"specific\":\"Undersecretary for Defense\",\"country\":\"Bahrain\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf10300158f9d152\",\"title\":\"Mr.\",\"firstName\":\"Ahmed Mohamed\",\"lastName\":\"Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Constituent Assembly of Egypt, Revamped\",\"specific\":\"Ex Member (Representative of the State Council)\",\"country\":\"Egypt\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf10307929f9d153\",\"title\":\"Mr.\",\"firstName\":\"Ahmed\",\"lastName\":\"Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Egyptian Exchange\",\"specific\":\"Director, Information Center\",\"country\":\"Egypt\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf1030900cf9d154\",\"title\":\"Sheikh Mr.\",\"firstName\":\"Ahmed bin Abdulla\",\"lastName\":\"Al Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Ministry of Interior, General Directorate of Nationality, Passports and Residence Affairs (GDNPR)\",\"specific\":\"Director, Visas and Residence\",\"country\":\"Bahrain\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf1030a2a9f9d155\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Relatives of High Officials\",\"specific\":\"Father of Zulfiqar Ali Khan\",\"country\":\"Pakistan\",\"active\":\"true\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf103000a7f9d156\",\"title\":\"Sheikh Mr.\",\"firstName\":\"Ahmed bin Khalifa\",\"lastName\":\"Al Khalifa\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Bahrain Telecommunications Company (BATELCO)\",\"specific\":\"Ex General Manager, Human Resources and Development\",\"country\":\"Bahrain\",\"active\":\"false\"},{\"possibleBirthDates\":[],\"_id\":\"64d3b845cf10307727f9d157\",\"title\":\"Mr.\",\"firstName\":null,\"lastName\":null,\"gender\":\"MALE\",\"aliases\":null,\"function\":\"City of Obari\",\"specific\":\"Ex Mayor\",\"country\":\"Libya\",\"active\":\"false\"}]', '[{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b845cf103085a4f9d158\",\"sanctionType\":\"UNSC\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"AHMED KHALFAN GHAILANI\",\"comment\":\"Apprehended in July 2004 and in custody for trial in the United States of America, as at October 2010. Review pursuant to Security Council resolution 1822 (2008) was concluded on 21 Jun. 2010. Review pursuant to Security Council resolution 2368 (2017) was concluded on 4 Dec. 2019. INTERPOL-UN Security Council Special Notice web link: https:\\/\\/www.interpol.int\\/en\\/How-we-work\\/Notices\\/View-UN-Notices-Individuals\",\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b845cf10305efdf9d159\",\"sanctionType\":\"EU\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Al Khalid, Ahmed\",\"comment\":null,\"gender\":\"MALE\",\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b845cf10301f49f9d15a\",\"sanctionType\":\"UK\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Al Khalid, Ahmed\",\"comment\":\"UN Ref QI.G.28.01. Also referred to Ahmed the Tanzanian, Foopie and Fupi. Apprehended in July 2004 and in custody for trial in the USA as at Oct 2010.\",\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b845cf10301790f9d15b\",\"sanctionType\":\"SECO\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Ahmed Khalfan Ghailani\",\"comment\":\"Apprehended in July 2004 and in custody for trial in the United States of America, as at October 2010. Review pursuant to Security Council resolution 1822 (2008) was concluded on 21 Jun 2010. Review pursuant to Security Council resolution 2368 (2017) was concluded on 4 Dec 2019. INTERPOL-UN Security Council Special Notice web link available.\",\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b845cf10305ecbf9d15c\",\"sanctionType\":\"USSDN\",\"firstName\":\"Ahmed Khalfan\",\"lastName\":\"GHAILANI\",\"fullName\":\"GHAILANI, Ahmed Khalfan\",\"comment\":null,\"gender\":null,\"function\":null},{\"possibleBirthYears\":[1970,1974],\"_id\":\"64d3b845cf1030b035f9d15d\",\"sanctionType\":\"DFAT\",\"firstName\":\"Ahmed\",\"lastName\":\"Al Khalid\",\"fullName\":\"Ahmed Khalfan Ghailani\",\"comment\":\"Apprehended in July 2004 and in custody for trial in the United States of America, as at October 2010.\",\"gender\":null,\"function\":null}]', '2023-08-09 16:01:09', '2023-08-09 16:01:09', 0),
(5, 14, 1, 'cp3yjKqHFcHOP1qTDm448', 'cleared', 'michael', 'mik', 'kachi', '[]', '[]', '2023-08-09 16:24:11', '2023-08-09 16:24:11', 0),
(6, 14, 1, 'l1LbeCRwXr2wpSRtNMp4990', 'cleared', 'Peter', 'mik', 'Obi', '[]', '[]', '2023-08-09 16:33:10', '2023-08-09 16:33:10', 0),
(7, 14, 1, '2443qiyCs8D4FIf7NhK5880', 'review_required', 'Peter', 'Gregory', 'Obi', '[{\"possibleBirthDates\":[\"1961-07-19\"],\"_id\":\"64d3c04ecf103005e0f9d16c\",\"title\":\"Mr.\",\"firstName\":\"Peter Gregory\",\"lastName\":\"Obi\",\"gender\":\"MALE\",\"aliases\":null,\"function\":\"Securities and Exchange Commission (SEC)\",\"specific\":\"Ex Chairperson\",\"country\":\"Nigeria\",\"active\":\"false\"}]', '[]', '2023-08-09 16:35:26', '2023-08-09 16:35:26', 0),
(8, 14, 1, 'WgfjKOcczp3DCMLIHgZi2274', 'review_required', 'Bola', 'Tinubu', 'Ahmed', '[{\"possibleBirthDates\":[\"1952-03-29\"],\"_id\":\"64d3c12bcf103007def9d170\",\"title\":\"Mr.\",\"firstName\":\"Bola Ahmed Adekunle Tinubu\",\"lastName\":\"Tinubu\",\"gender\":\"MALE\",\"aliases\":\"Tinubu, Bola; Tinubu, Asiwaju Bola; Tinubu, Bola Ahmed\",\"function\":\"All Progressives Congress Party (APC)\",\"specific\":\"Leader\",\"country\":\"Nigeria\",\"active\":\"true\"}]', '[]', '2023-08-09 16:39:07', '2023-08-09 16:39:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phone_number_verifications`
--

CREATE TABLE `phone_number_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `validations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `phone_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nin` varchar(255) DEFAULT NULL,
  `birth_state` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `birth_lga` varchar(255) DEFAULT NULL,
  `birth_country` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `all_validation_passed` tinyint(1) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `advance_search` tinyint(1) DEFAULT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_number_verifications`
--

INSERT INTO `phone_number_verifications` (`id`, `verification_id`, `user_id`, `ref`, `service_reference`, `address`, `validations`, `status`, `reason`, `data_validation`, `selfie_validation`, `phone_details`, `first_name`, `middle_name`, `last_name`, `image`, `email`, `nin`, `birth_state`, `religion`, `birth_lga`, `birth_country`, `dob`, `subject_consent`, `phone_number`, `type`, `gender`, `all_validation_passed`, `fee`, `advance_search`, `requested_at`, `last_modified_at`, `country`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(1, 6, 1, 'Ih98heoEQoOtBIQcyIzz8690', '641c4e3d0dad9c95297db78c', '{\"town\":\"SULEJA\",\"lga\":\"Suleja\",\"state\":\"Niger\",\"addressLine\":\"13B Fake Street, Ilupeju Niger State\"}', NULL, 'found', NULL, 0, 0, NULL, 'Sarah', 'Jane', 'Doe', 'https://res.cloudinary.com/the-morgans-consortium/image/upload/v1679576648/oysterchecks/identityVerifications/phoneNumber/loajb6ykg5toaqgwmbyt.jpg', NULL, '11111111111', 'Edo', 'christianity', 'Esan West', 'nigeria', '1988-04-04', 1, '08000000000', 'phone-number', 'female', 1, NULL, 1, '2023-03-23T13:03:57.758Z', '2023-03-23T13:03:57.776Z', 'Nigeria', '2023-03-23 13:04:10', '2023-03-23 13:04:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pvc_verifications`
--

CREATE TABLE `pvc_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) NOT NULL,
  `validations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `data_validation` tinyint(1) NOT NULL,
  `selfie_validation` tinyint(1) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `all_validation_passed` tinyint(1) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) NOT NULL,
  `last_modified_at` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pvc_verifications`
--

INSERT INTO `pvc_verifications` (`id`, `verification_id`, `user_id`, `ref`, `service_reference`, `validations`, `status`, `reason`, `data_validation`, `selfie_validation`, `first_name`, `middle_name`, `last_name`, `dob`, `subject_consent`, `pin`, `type`, `all_validation_passed`, `fee`, `requested_at`, `last_modified_at`, `country`, `created_at`, `updated_at`, `is_sandbox`) VALUES
(1, 2, 1, 'M7R3qvEfZVqaPQqGragg5123', '64182cdf0dad9cadc07db59f', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '1990-04-04', 1, '00A0A0A000000000000', 'pvc', 1, NULL, '2023-03-20T09:52:31.729Z', '2023-03-20T09:52:31.747Z', 'Nigeria', '2023-03-20 09:52:31', '2023-03-20 09:52:31', 0),
(2, 2, 1, '6ieuvXelKpgZQyZ5h8l9417', '641c4ba90dad9c75547db77a', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '1990-04-04', 1, '00A0A0A000000000000', 'pvc', 1, NULL, '2023-03-23T12:52:57.585Z', '2023-03-23T12:52:57.604Z', 'Nigeria', '2023-03-23 12:52:57', '2023-03-23 12:52:57', 0),
(3, 2, 1, 'IdS1z3h2EL9uIBfTjwe5511', '641cc9790dad9c705f7db7c8', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '1990-04-04', 1, '00A0A0A000000000000', 'pvc', 1, NULL, '2023-03-23T21:49:45.850Z', '2023-03-23T21:49:45.866Z', 'Nigeria', '2023-03-23 21:49:45', '2023-03-23 21:49:45', 0),
(4, 2, 1, 'ZVejMoId839zYKRuaJ6C5905', '641ccd510dad9c81fe7db7cb', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '1990-04-04', 1, '00A0A0A000000000000', 'pvc', 1, NULL, '2023-03-23T22:06:09.483Z', '2023-03-23T22:06:09.495Z', 'Nigeria', '2023-03-23 22:06:09', '2023-03-23 22:06:09', 0),
(5, 2, 26, 'LfzcFLsvVLs6PZXWl44244', '64c796419c87b011dfaf31e0', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '1990-04-04', 1, '00A0A0A000000000000', 'pvc', 1, NULL, '2023-07-31T11:08:49.802Z', '2023-07-31T11:08:49.867Z', 'Nigeria', '2023-07-31 18:08:49', '2023-07-31 18:08:49', 0),
(6, 2, 27, 'q4pVaUdegGr5JpnyqQU5901', '64c79e629c87b00a31af3306', NULL, 'found', NULL, 0, 0, 'John', NULL, 'Doe', '1990-04-04', 1, '00A0A0A000000000000', 'pvc', 1, NULL, '2023-07-31T11:43:30.660Z', '2023-07-31T11:43:30.707Z', 'Nigeria', '2023-07-31 18:43:30', '2023-07-31 18:43:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2023-03-14 14:22:52', '2023-03-14 14:22:52'),
(2, 'Moderator', '2023-03-14 14:22:52', '2023-03-14 14:22:52'),
(3, 'Quality Assurance', '2023-03-14 14:22:52', '2023-03-14 14:22:52'),
(4, 'Super Admin', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(5, 'Moderator', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(6, 'Quality Assurance', '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(7, 'Super Admin', '2023-03-14 14:27:08', '2023-03-14 14:27:08'),
(8, 'Moderator', '2023-03-14 14:27:08', '2023-03-14 14:27:08'),
(9, 'Quality Assurance', '2023-03-14 14:27:08', '2023-03-14 14:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `company_md` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abia', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(2, 'Adamawa', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(3, 'Akwa Ibom', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(4, 'Anambra', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(5, 'Bayelsa', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(6, 'Benue', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(7, 'Borno', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(8, 'Cross', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(9, 'River', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(10, 'Delta', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(11, 'Ebonyi', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(12, 'Edo', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(13, 'Ekiti', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(14, 'Enugu', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(15, 'Gombe', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(16, 'Jigawa', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(17, 'Kaduna', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(18, 'Kano', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(19, 'Katsina', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(20, 'Kebbi', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(21, 'Kogi', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(22, 'Kwara', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(23, 'Lagos', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(24, 'Nasarawa', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(25, 'Niger', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(26, 'Ogun', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(27, 'Osun', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(28, 'Oyo', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(29, 'Plateau', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(30, 'Sokoto', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(31, 'Taraba', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(32, 'Lagos', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(33, 'Yobe', '2023-08-17 12:11:24', '2023-08-17 12:11:24'),
(34, 'Zamfara', '2023-08-17 12:11:24', '2023-08-17 12:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `tin_verifications`
--

CREATE TABLE `tin_verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `verification_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) NOT NULL,
  `service_reference` varchar(255) DEFAULT NULL,
  `subject_consent` tinyint(1) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `search_term` varchar(255) DEFAULT NULL,
  `search_value` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `jtb_tin` varchar(255) DEFAULT NULL,
  `tax_office` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `requested_at` varchar(255) DEFAULT NULL,
  `last_modified_at` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_sandbox` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `external_ref` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `total_amount_payable` double NOT NULL,
  `amount` double NOT NULL,
  `tax` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'NGN',
  `status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `paid_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `ref`, `user_id`, `external_ref`, `purpose`, `service_type`, `type`, `total_amount_payable`, `amount`, `tax`, `discount`, `currency`, `status`, `payment_method`, `paid_at`, `created_at`, `updated_at`) VALUES
(1, 'k5ut7xcfuvrgbr4y7821yuge', 25, NULL, 'wallet top-up', NULL, 'credit', 107500, 100000, 7500, NULL, 'NGN', 'processing', 'card', NULL, '2023-07-07 12:33:24', '2023-07-07 12:33:24'),
(2, 'y6bkqbfcwz98qgqc78f9zwfs', 27, NULL, 'wallet top-up', NULL, 'credit', 5375, 5000, 375, NULL, 'NGN', 'processing', 'card', NULL, '2023-07-31 19:08:05', '2023-07-31 19:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '1 = candidate, 2 = client, 3 = admin',
  `role_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `email_verified`, `email_verified_at`, `password`, `user_type`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morgans', 'Admin', 'mikkynoble@gmail.com', '08028739834', 1, '2023-03-14 15:39:22', '$2y$10$0fFwVtSNEFnE6j8/MfiMjOWueukCGNNQJmr4VO1AQmQR7QY0wWs6i', 2, 1, NULL, '2023-03-14 14:23:52', '2023-04-11 18:01:22'),
(3, 'michael', 'kachi', 'jesmikksy@gmail.com', '0987676567', NULL, NULL, '$2y$10$68d1n6d/ucMMAIiBfUo9F.Ej9Unuype2L.D8R5lFLhKgSbCgQUOni', 2, NULL, NULL, '2023-03-27 20:37:04', '2023-03-27 20:37:04'),
(9, 'michael', 'kachi', 'danniesjamies@gmail.com', '08039366208', 1, '2023-04-04 14:30:38', '$2y$10$0fFwVtSNEFnE6j8/MfiMjOWueukCGNNQJmr4VO1AQmQR7QY0wWs6i', 2, NULL, NULL, '2023-04-04 20:28:10', '2023-04-04 20:30:38'),
(14, 'michael', 'kachi', 'danniesjamie@gmail.com', NULL, NULL, NULL, '$2y$10$DV.UtOtAVOtOsVE79pyIzOCqNSy5TFh8XonXquMld9YG.uPdOz7va', 1, 1, NULL, '2023-04-04 21:20:03', '2023-04-04 21:20:03'),
(15, 'Michael', 'Kachi', 'michael.ozoudeh@morgansconsortium.com', '08028739835', 1, '2023-04-11 12:31:49', '$2y$10$wxMhPIMHcnTK46UeaO1SzuYplIPS93DEVvhKNQBwBLr1HRFxaT6Ze', 2, NULL, NULL, '2023-04-11 18:31:10', '2023-04-11 18:31:49'),
(16, 'michael', 'kachi', 'jesmikky@gmail.com', NULL, 1, '2023-04-11 12:45:59', '$2y$10$dupb2zT0uVbP.JEijI6A9uSjnBOIGK5v3zukmfyw2Y5S0uf.f4GeS', 1, 1, NULL, '2023-04-11 18:42:21', '2023-04-11 18:45:59'),
(17, 'michael', 'michael', 'dannies@gmail.com', NULL, NULL, NULL, '$2y$10$.jbCdwb83vd7Qe3y2jjj6eAdg1bE9yrVElOeUivS2g1fHNIzuBrKi', 1, 1, NULL, '2023-04-20 17:24:04', '2023-04-20 17:24:04'),
(18, 'Okpeku', 'Ighodaro', 'okpekuighodaro@gmail.com', '0802926622', 1, '2023-04-20 14:49:20', '$2y$10$1f7WolMghkicowXhK7dtx.T9EfIxAC.MD7ro2dYbT9xnqUhUt0Q6.', 2, NULL, NULL, '2023-04-20 20:46:46', '2023-04-20 20:49:20'),
(20, 'Okpeku', 'Ighodaro', 'stephenjason41@gmail.com', NULL, NULL, NULL, '$2y$10$UjiCbJFqCvfisn1f.r.Hn.okg7GElMG7UeEgzKH3ijXyyE4OmexDW', 1, 1, NULL, '2023-04-20 20:59:18', '2023-04-20 20:59:18'),
(21, 'michael', 'michael', 'danniejames1984@gmail.com', NULL, NULL, NULL, '$2y$10$7CQNY5p028a1DhynUU8bguOwAvW/7SOeUj6jC5rTjMyhLT2WYdoPm', 1, 1, NULL, '2023-04-20 22:06:31', '2023-04-20 22:06:31'),
(22, 'Boma', 'Agina-obu', 'boma.agina-obu@morgansconsortium.com', '08167407120', 1, '2023-05-11 13:44:06', '$2y$10$DTP8f.oLxu7nc4tSmhN1leJ05VqoUtm4La4ZthWeWXD4Lridl/7Ka', 2, NULL, NULL, '2023-05-11 17:41:43', '2023-05-11 19:44:06'),
(23, 'Boma', 'Agina-obu', 'bomaaginaobu@gmail.com', '09074884298', NULL, NULL, '$2y$10$fvtVysg4kDF4/AuJ6FJ7.eXf766lIXtrWXwFM5kdEDc1Rl4HtxpIO', 2, NULL, NULL, '2023-05-11 20:05:58', '2023-05-11 20:05:58'),
(24, 'michael', 'michael', 'michaelkachi2018@gmail.com', NULL, NULL, NULL, '$2y$10$k.WvBuYD3nAHdYshbjK1LeWNWpHBG40T/L7YgaV7on28w9cxtL9Yy', 1, 1, NULL, '2023-06-30 16:31:05', '2023-06-30 16:31:05'),
(25, 'Foluso', 'Amusa', 'foluso.amusa@morgansconsortium.com', '9153414310', 1, '2023-07-07 06:28:32', '$2y$10$/bpUrF2aZ5Ium4icHmrY3eghqeMJKV4Q9Xz1rMqVRxkaswVihPPXK', 2, NULL, NULL, '2023-07-07 12:25:33', '2023-07-07 12:28:32'),
(26, 'kachi', 'david', 'michaeltozoudeh@gmail.com', '08028739833', 1, '2023-07-31 12:07:47', '$2y$10$0fFwVtSNEFnE6j8/MfiMjOWueukCGNNQJmr4VO1AQmQR7QY0wWs6i', 2, NULL, NULL, '2023-07-31 18:00:36', '2023-07-31 18:07:47'),
(27, 'Yemi', 'Akano', 'festus.uwabor@morgansconsortium.com', '0803938287', 1, '2023-07-31 12:40:28', '$2y$10$95grWrZEbEt75dNTnMmxCe5WA7eM4hh15DBIqO6KhiC/Y5a0/uJxO', 2, NULL, NULL, '2023-07-31 18:37:47', '2023-07-31 18:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE `user_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `name` tinytext DEFAULT NULL,
  `report_type` varchar(255) DEFAULT NULL,
  `fee` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `test_data` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `slug`, `name`, `report_type`, `fee`, `discount`, `type`, `created_at`, `updated_at`, `test_data`) VALUES
(1, 'nip', 'Nigeria International Passport', 'passport', 1000, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', 'A11111111'),
(2, 'pvc', 'Permanent Voters Card', 'pvc', 250, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', '00A0A0A000000000000'),
(3, 'bvn', 'Bank Verification Number', 'bvn', 500, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', '11111111111'),
(4, 'nin', 'National Identity Number', 'nin', 900, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', '12312121212'),
(5, 'ndl', 'Nigerian Driver\'s License', 'drivers-license', 200, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', 'AAA00000AA00'),
(6, 'phone-number', 'Phone Number', 'phone-number', 500, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', '08000000000'),
(7, 'bank-account', 'Bank Account', 'bank-account', 400, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL),
(8, 'compare-images', 'Compare Images', 'compare-images', 400, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL),
(9, 'cac', 'Company Search (CAC)', 'business', 200, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', 'RC00000000'),
(10, 'tin', 'Tax Identification Number', 'business', 200, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', '\n00000000-0000'),
(11, 'individual-address', 'Individual Address Verification', 'address', 1000, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL),
(12, 'reference-address', 'Reference Address Verification', 'address', 1000, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL),
(13, 'business-address', 'Business Address Verification', 'address', 1000, NULL, NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52', NULL),
(14, 'pep-sanction-list', 'Sanction & PEP Screening', 'aml', NULL, NULL, NULL, '2023-08-08 22:31:52', '2023-08-08 22:31:52', '{\"first_name\":\"Ahmed\",\"last_name\":\"Al Khalid\", \"middle_name\":\"mik\"}'),
(15, 'adverse-media-intelligence', 'Adverse Media Intelligence', 'aml', NULL, NULL, NULL, '2023-08-08 22:31:52', '2023-08-08 22:31:52', '{\"query\":\"Jon Snow\",\"type\":\"individual\"}');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_balance` decimal(13,2) NOT NULL DEFAULT 0.00,
  `avail_balance` decimal(13,2) NOT NULL DEFAULT 0.00,
  `total_balance` decimal(13,2) NOT NULL DEFAULT 0.00,
  `bonus_balance` decimal(13,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `book_balance`, `avail_balance`, `total_balance`, `bonus_balance`, `created_at`, `updated_at`) VALUES
(1, 1, '5000.00', '5000.00', '5000.00', NULL, '2023-03-14 14:23:52', '2023-03-14 14:23:52'),
(3, 9, '0.00', '0.00', '0.00', NULL, '2023-04-04 20:28:10', '2023-04-04 20:28:10'),
(4, 15, '0.00', '0.00', '0.00', NULL, '2023-04-11 18:31:11', '2023-04-11 18:31:11'),
(5, 18, '0.00', '0.00', '0.00', NULL, '2023-04-20 20:46:47', '2023-04-20 20:46:47'),
(6, 22, '0.00', '0.00', '0.00', NULL, '2023-05-11 17:41:45', '2023-05-11 17:41:45'),
(7, 23, '0.00', '0.00', '0.00', NULL, '2023-05-11 20:05:59', '2023-05-11 20:05:59'),
(8, 25, '0.00', '0.00', '0.00', NULL, '2023-07-07 12:25:33', '2023-07-07 12:25:33'),
(9, 26, '0.00', '0.00', '0.00', NULL, '2023-07-31 18:00:37', '2023-07-31 18:00:37'),
(10, 27, '5000.00', '5000.00', '0.00', NULL, '2023-07-31 18:37:47', '2023-07-31 18:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `webhook_calls`
--

CREATE TABLE `webhook_calls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `headers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `exception` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webhook_calls`
--

INSERT INTO `webhook_calls` (`id`, `name`, `url`, `headers`, `payload`, `exception`, `created_at`, `updated_at`) VALUES
(1, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"5bf920014946c2e21ba41283596863c003506fead9786ef23eeaaffd482bc1d3\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"981b4861-815b-46ff-bb4f-7786bede8fe0\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IlBFUU00dVFJNXdhTGFqYStMYmFFQ2c9PSIsInZhbHVlIjoiako1U01IT3ljdm9YeGxUc21SZlFBeldCeUVFZ2I0UkJnLzM4MWxLWmNuT1Q2NFU5RkJyd2c5cVhmbWlUV05lTTJZZTJmbWJZdFcwUXhxOHVsYzhLVmM1N0hvbDdGRjdIcmFnTUtTdGJtcmhJenFDa0xBS0FYYWlUVnowaHNEci8iLCJtYWMiOiI4ZTkyMGU5Mzg4ODRiYTY0MGVjZDFkYWRjYjg5NmQyMTcwNzYwZGNlZWM0MTMyYTY2NzBjZGVhMWE1MmM5MjE5IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IllOaVlubVhMSVB3MUs5cDRvSitNZmc9PSIsInZhbHVlIjoicEhmOGxyeEdtalcvNWR0Qlp0OXd6WFkxSkNrQzBxakVKa2t3WWd0R2JlZXhqSHZFbXZPVFEvb1BNVlNnUTVieWZ0U0JWRWJETTJpZllxVU41YlYrTUNtUUxDMGwySEVzcWNXai9yR2FKcWRIa28vUTQ2QXRTR2RFK1hCSUJLZUUiLCJtYWMiOiIwMGEwZTFhNGJiZTY1MzIyYjU4NzU2YjJlMjhiNzNjN2FlMzM4YTc4YzcxNTZhNTVlNzQxYTQ2YTdkMzJjNGFhIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:02:50', '2023-08-18 23:02:50'),
(2, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"da584f41-3e8e-4aa0-8ece-bc619764511b\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InZpcnRSU2FvT0ZJVy9JNllFd0hheXc9PSIsInZhbHVlIjoieGVoNjZjdFRxWGt5ZUYydlFaL0UzRXJDUEh6YXhKSDVNSGZDSC9mZCtLenZMOFQycko2elYxRXg4MmM1b0xsaG8wUERqNDcrN1RiQk5OR203OXlWdXo5anNQa0NwbjVsOWFsZFBlTmtnL3VXcDJXRmVkMDhsY0VqWGJIeEtEYy8iLCJtYWMiOiIyYTY4MThiNTNkZjY4NWIzYTI0NzZhYWE3MDM5NWY5MTE0NjFlNWM3ZTA1MDBiNmU4YTI3MWJkNGE4OTZlNWM5IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6Imp0OG4zaGduSzVjbzVXMERQUUxKc3c9PSIsInZhbHVlIjoiQVdkak9TanZpWUx4Mlh4M2xIR1l2UmVvL0hlWE03RVExNklxalFZczYxQVVESVJYZVJDZEZEQnJSYzRaaHkvYzN6TEFkQTQvS0dDYWg2KzRIVVc1bHpVeURkcmJmbndKUlFLQ0xXS0JJUk9uekt0cjJXNUFDejVhNml4MlQwTkciLCJtYWMiOiIyMjQ0ODhhNjIzMjg3ZTIwMjNkZDIzYjI2MTUyYjA1NTQ3ZTFjM2ExMjE1YTNjMzc0OWI5MDdiMjI5YzIxYmQ1IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:15:37', '2023-08-18 23:15:37'),
(3, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"c5b28a8a-30aa-4b06-b7d3-ab29796efe5a\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IngzMGhaZVZPZWxaaW1mUlFsNzZ4WkE9PSIsInZhbHVlIjoiTFl0SFFqWHJxUVNkcms5WU5mRm1YMmxGS3RHeHIxREllbG85UzBYSC9OSUpOUGw2RlBKM29zZGJlOFNuWVRxT3RkY29NZ3Vva0ZheSt5VXRyMnY2b01Qcjd1VXFTSWMwcEFQd1NzdW5SNVlHRHQzOEJpejdkM1BHdDA1aFJNaGgiLCJtYWMiOiIzNDM1ZjNkNzZiZTQ0ZDcxNzQ1MTA5MTUwZThlNzdhMzM3OTYxMDI4NjI2ZGI2Y2Q0NzhkOGM1ZThjNjJjNzQzIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6InNiWXhhUzdJQzJSTFVOQU9xK3k4cUE9PSIsInZhbHVlIjoiaHFLd2k2OEU1WEFydm1idkpLakxLQkZ6ZWM0M09Nd2d1bjNIY29rR2Y1aHBudWpqSVRGY3p0VFNwejdtQ3NkM0hUS0l2OC9hWVFKaDR5UnQxSFkzam5KVWhJOEttMDVlOVFWUVNBMGRRQUFOcGlsZHNpUE1qV0E0eXRLdWVOY2MiLCJtYWMiOiIxZDg4NDRkOTNmNGRlODk4YmU0MmUwZDJkZWI2MGNlMGFjZDVmZjNkN2JkOWI2MGExMzVkNzVmODdjMmIxZmE3IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:16:25', '2023-08-18 23:16:25'),
(4, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"72482e45-50cc-4169-a7c8-ff71d7003f5a\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IngzMGhaZVZPZWxaaW1mUlFsNzZ4WkE9PSIsInZhbHVlIjoiTFl0SFFqWHJxUVNkcms5WU5mRm1YMmxGS3RHeHIxREllbG85UzBYSC9OSUpOUGw2RlBKM29zZGJlOFNuWVRxT3RkY29NZ3Vva0ZheSt5VXRyMnY2b01Qcjd1VXFTSWMwcEFQd1NzdW5SNVlHRHQzOEJpejdkM1BHdDA1aFJNaGgiLCJtYWMiOiIzNDM1ZjNkNzZiZTQ0ZDcxNzQ1MTA5MTUwZThlNzdhMzM3OTYxMDI4NjI2ZGI2Y2Q0NzhkOGM1ZThjNjJjNzQzIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6InNiWXhhUzdJQzJSTFVOQU9xK3k4cUE9PSIsInZhbHVlIjoiaHFLd2k2OEU1WEFydm1idkpLakxLQkZ6ZWM0M09Nd2d1bjNIY29rR2Y1aHBudWpqSVRGY3p0VFNwejdtQ3NkM0hUS0l2OC9hWVFKaDR5UnQxSFkzam5KVWhJOEttMDVlOVFWUVNBMGRRQUFOcGlsZHNpUE1qV0E0eXRLdWVOY2MiLCJtYWMiOiIxZDg4NDRkOTNmNGRlODk4YmU0MmUwZDJkZWI2MGNlMGFjZDVmZjNkN2JkOWI2MGExMzVkNzVmODdjMmIxZmE3IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:17:46', '2023-08-18 23:17:46'),
(5, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"07a01cac-be4c-4f2f-ba40-0849bc2a2f5e\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IngzMGhaZVZPZWxaaW1mUlFsNzZ4WkE9PSIsInZhbHVlIjoiTFl0SFFqWHJxUVNkcms5WU5mRm1YMmxGS3RHeHIxREllbG85UzBYSC9OSUpOUGw2RlBKM29zZGJlOFNuWVRxT3RkY29NZ3Vva0ZheSt5VXRyMnY2b01Qcjd1VXFTSWMwcEFQd1NzdW5SNVlHRHQzOEJpejdkM1BHdDA1aFJNaGgiLCJtYWMiOiIzNDM1ZjNkNzZiZTQ0ZDcxNzQ1MTA5MTUwZThlNzdhMzM3OTYxMDI4NjI2ZGI2Y2Q0NzhkOGM1ZThjNjJjNzQzIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6InNiWXhhUzdJQzJSTFVOQU9xK3k4cUE9PSIsInZhbHVlIjoiaHFLd2k2OEU1WEFydm1idkpLakxLQkZ6ZWM0M09Nd2d1bjNIY29rR2Y1aHBudWpqSVRGY3p0VFNwejdtQ3NkM0hUS0l2OC9hWVFKaDR5UnQxSFkzam5KVWhJOEttMDVlOVFWUVNBMGRRQUFOcGlsZHNpUE1qV0E0eXRLdWVOY2MiLCJtYWMiOiIxZDg4NDRkOTNmNGRlODk4YmU0MmUwZDJkZWI2MGNlMGFjZDVmZjNkN2JkOWI2MGExMzVkNzVmODdjMmIxZmE3IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:18:28', '2023-08-18 23:18:28'),
(6, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"62da07a1-9c05-4ae6-b5d1-ccda02a81ba2\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IngzMGhaZVZPZWxaaW1mUlFsNzZ4WkE9PSIsInZhbHVlIjoiTFl0SFFqWHJxUVNkcms5WU5mRm1YMmxGS3RHeHIxREllbG85UzBYSC9OSUpOUGw2RlBKM29zZGJlOFNuWVRxT3RkY29NZ3Vva0ZheSt5VXRyMnY2b01Qcjd1VXFTSWMwcEFQd1NzdW5SNVlHRHQzOEJpejdkM1BHdDA1aFJNaGgiLCJtYWMiOiIzNDM1ZjNkNzZiZTQ0ZDcxNzQ1MTA5MTUwZThlNzdhMzM3OTYxMDI4NjI2ZGI2Y2Q0NzhkOGM1ZThjNjJjNzQzIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6InNiWXhhUzdJQzJSTFVOQU9xK3k4cUE9PSIsInZhbHVlIjoiaHFLd2k2OEU1WEFydm1idkpLakxLQkZ6ZWM0M09Nd2d1bjNIY29rR2Y1aHBudWpqSVRGY3p0VFNwejdtQ3NkM0hUS0l2OC9hWVFKaDR5UnQxSFkzam5KVWhJOEttMDVlOVFWUVNBMGRRQUFOcGlsZHNpUE1qV0E0eXRLdWVOY2MiLCJtYWMiOiIxZDg4NDRkOTNmNGRlODk4YmU0MmUwZDJkZWI2MGNlMGFjZDVmZjNkN2JkOWI2MGExMzVkNzVmODdjMmIxZmE3IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:18:37', '2023-08-18 23:18:37'),
(7, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"02ee7f9b-db58-4914-8151-228016c3c8a5\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IkZ0cEZFMmFJNkpEZlAwUzkzU21YdkE9PSIsInZhbHVlIjoibm9HMXVmRTU3OGpsQTR0MG5Id1FoY08wV3l3YmxxN3NsRGQ3bzVyeWpreEZtdXZUSndsRENoeVRVODNiSEtsMEVWWXoxUXl1Z2oreWt5WFdUMldWNjA4SFNxOU9kM1phOGpVeDkvcEtCVDlhMGxIWXJIU2VHak5ob1FrcVF1L3giLCJtYWMiOiJkNTUzYTg4ZDIwYjg5YjU1YmNkODNkZWQ2YWIyMzJiNGJiNDJjOTNhZDEwZmU5NDc5ZGVkZWQ4MGUwZGU4YmM3IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6Ild6MURtVTh3OUhxelV2U3F1ODU2c3c9PSIsInZhbHVlIjoiWE9wbnpYTGN3SFRkazRvTERSd1M4d3pYUWxrVlNpOXRzMmdhOFd4dzFLRUIxTE9zMWg5S1lONENmb3FOTExZS1QrK1VvTGpXY3pSeWpFNTJMa0pKczdnVDJsbjV2bFFMVUQ1TXZRQ2hrb2c0MVZ1dEFSUjdGYnNtQ2FZV3kzZG4iLCJtYWMiOiIzMjVmNGMxMGFlNGMyMDY4ZjQ4YTE1MmU1NjM2MTBhYTZmMDI2ZGNkYjQ2ODBjY2Y2NTA5OTE5MWFlOGM0M2ZiIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:18:52', '2023-08-18 23:18:52'),
(8, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"9fa74d50-e7f9-40c0-a127-b4bd57bf8077\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IjlKb21keWFqdzVrck1JR1hCZjBId2c9PSIsInZhbHVlIjoiMjFIUFE2eWplSDZMalNrTWZsNDkxa2xVZk5HNWQ3NHovdnZxTnlpSHl5TmUydFJxVnVabGs4NGJCaGppRlNKRzYyRlU3Wi9sd2tYUFE2MFZ0bTFjMVhlTFY2WTRqTlliUHRpVHVXS3Q4TDFLQTZzd2xsb3dHbGdpZldubU1BR00iLCJtYWMiOiJiYjNiYTBhOWZmYmRjMzU1YzMzNGZmMWFjYjRhN2RjMTE3NzNjNzkyMmZjZTQ2N2ViNmU4Yjk4ZTQ4NTgxYzU1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6InBIZVZ6QmRkY1VldHd6V2FYT1gyTWc9PSIsInZhbHVlIjoiV2dWRW9jUUd6VUx1WEVmZE5YMkRmQlV2Wnl5Q3lUTWo2L0lXNDNhdXdTQVdNd2ZTTldBZWZwUnYzTGcrM1FkSWhpbFdtUFl1bFZhcU9lMlh0ZDU3UkNLWTB0SUVNNVFDYVRwak14azZDblJEaXlSMXFVL3gzVW4zejNDQkZrcjEiLCJtYWMiOiJkMDdkNGI2YWJkMmYzYWY5MmZmMThjYmU4NzQ1YWRjNzA1MTlkMWY1M2U5N2JmZWZmMTA3OGYyODdhMTk1Y2I5IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:19:09', '2023-08-18 23:19:09');
INSERT INTO `webhook_calls` (`id`, `name`, `url`, `headers`, `payload`, `exception`, `created_at`, `updated_at`) VALUES
(9, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"3c623df5-ae46-4db5-bb11-ad0f9285b874\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IjlKb21keWFqdzVrck1JR1hCZjBId2c9PSIsInZhbHVlIjoiMjFIUFE2eWplSDZMalNrTWZsNDkxa2xVZk5HNWQ3NHovdnZxTnlpSHl5TmUydFJxVnVabGs4NGJCaGppRlNKRzYyRlU3Wi9sd2tYUFE2MFZ0bTFjMVhlTFY2WTRqTlliUHRpVHVXS3Q4TDFLQTZzd2xsb3dHbGdpZldubU1BR00iLCJtYWMiOiJiYjNiYTBhOWZmYmRjMzU1YzMzNGZmMWFjYjRhN2RjMTE3NzNjNzkyMmZjZTQ2N2ViNmU4Yjk4ZTQ4NTgxYzU1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6InBIZVZ6QmRkY1VldHd6V2FYT1gyTWc9PSIsInZhbHVlIjoiV2dWRW9jUUd6VUx1WEVmZE5YMkRmQlV2Wnl5Q3lUTWo2L0lXNDNhdXdTQVdNd2ZTTldBZWZwUnYzTGcrM1FkSWhpbFdtUFl1bFZhcU9lMlh0ZDU3UkNLWTB0SUVNNVFDYVRwak14azZDblJEaXlSMXFVL3gzVW4zejNDQkZrcjEiLCJtYWMiOiJkMDdkNGI2YWJkMmYzYWY5MmZmMThjYmU4NzQ1YWRjNzA1MTlkMWY1M2U5N2JmZWZmMTA3OGYyODdhMTk1Y2I5IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', '{\"code\":0,\"message\":\"Undefined array key \\\"candidateId\\\"\",\"trace\":\"#0 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/app\\/Jobs\\/HandleVerificationsYouVerify.php(35): Illuminate\\\\Foundation\\\\Bootstrap\\\\HandleExceptions->handleError(2, \'Undefined array...\', \'\\/Applications\\/X...\', 35)\\n#1 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Container\\/BoundMethod.php(36): App\\\\Jobs\\\\HandleVerificationsYouVerify->handle()\\n#2 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Container\\/Util.php(40): Illuminate\\\\Container\\\\BoundMethod::Illuminate\\\\Container\\\\{closure}()\\n#3 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Container\\/BoundMethod.php(93): Illuminate\\\\Container\\\\Util::unwrapIfClosure(Object(Closure))\\n#4 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Container\\/BoundMethod.php(37): Illuminate\\\\Container\\\\BoundMethod::callBoundMethod(Object(Illuminate\\\\Foundation\\\\Application), Array, Object(Closure))\\n#5 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Container\\/Container.php(653): Illuminate\\\\Container\\\\BoundMethod::call(Object(Illuminate\\\\Foundation\\\\Application), Array, Array, NULL)\\n#6 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Bus\\/Dispatcher.php(128): Illuminate\\\\Container\\\\Container->call(Array)\\n#7 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(128): Illuminate\\\\Bus\\\\Dispatcher->Illuminate\\\\Bus\\\\{closure}(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#8 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(103): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#9 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Bus\\/Dispatcher.php(132): Illuminate\\\\Pipeline\\\\Pipeline->then(Object(Closure))\\n#10 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Queue\\/CallQueuedHandler.php(120): Illuminate\\\\Bus\\\\Dispatcher->dispatchNow(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify), false)\\n#11 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(128): Illuminate\\\\Queue\\\\CallQueuedHandler->Illuminate\\\\Queue\\\\{closure}(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#12 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(103): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#13 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Queue\\/CallQueuedHandler.php(122): Illuminate\\\\Pipeline\\\\Pipeline->then(Object(Closure))\\n#14 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Queue\\/CallQueuedHandler.php(70): Illuminate\\\\Queue\\\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\\\Queue\\\\Jobs\\\\SyncJob), Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#15 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Queue\\/Jobs\\/Job.php(98): Illuminate\\\\Queue\\\\CallQueuedHandler->call(Object(Illuminate\\\\Queue\\\\Jobs\\\\SyncJob), Array)\\n#16 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Queue\\/SyncQueue.php(43): Illuminate\\\\Queue\\\\Jobs\\\\Job->fire()\\n#17 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Bus\\/Dispatcher.php(253): Illuminate\\\\Queue\\\\SyncQueue->push(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#18 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Bus\\/Dispatcher.php(229): Illuminate\\\\Bus\\\\Dispatcher->pushCommandToQueue(Object(Illuminate\\\\Queue\\\\SyncQueue), Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#19 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Bus\\/Dispatcher.php(77): Illuminate\\\\Bus\\\\Dispatcher->dispatchToQueue(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#20 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Bus\\/PendingDispatch.php(193): Illuminate\\\\Bus\\\\Dispatcher->dispatch(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#21 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/helpers.php(389): Illuminate\\\\Foundation\\\\Bus\\\\PendingDispatch->__destruct()\\n#22 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/spatie\\/laravel-webhook-client\\/src\\/WebhookProcessor.php(58): dispatch(Object(App\\\\Jobs\\\\HandleVerificationsYouVerify))\\n#23 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/spatie\\/laravel-webhook-client\\/src\\/WebhookProcessor.php(30): Spatie\\\\WebhookClient\\\\WebhookProcessor->processWebhook(Object(Spatie\\\\WebhookClient\\\\Models\\\\WebhookCall))\\n#24 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/spatie\\/laravel-webhook-client\\/src\\/Http\\/Controllers\\/WebhookController.php(13): Spatie\\\\WebhookClient\\\\WebhookProcessor->process()\\n#25 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/ControllerDispatcher.php(48): Spatie\\\\WebhookClient\\\\Http\\\\Controllers\\\\WebhookController->__invoke(Object(Illuminate\\\\Http\\\\Request), Object(Spatie\\\\WebhookClient\\\\WebhookConfig))\\n#26 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Route.php(262): Illuminate\\\\Routing\\\\ControllerDispatcher->dispatch(Object(Illuminate\\\\Routing\\\\Route), Object(Spatie\\\\WebhookClient\\\\Http\\\\Controllers\\\\WebhookController), \'__invoke\')\\n#27 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Route.php(205): Illuminate\\\\Routing\\\\Route->runController()\\n#28 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php(721): Illuminate\\\\Routing\\\\Route->run()\\n#29 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(128): Illuminate\\\\Routing\\\\Router->Illuminate\\\\Routing\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#30 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Middleware\\/SubstituteBindings.php(50): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#31 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Routing\\\\Middleware\\\\SubstituteBindings->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#32 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/VerifyCsrfToken.php(78): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#33 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\VerifyCsrfToken->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#34 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/Middleware\\/ShareErrorsFromSession.php(49): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#35 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\View\\\\Middleware\\\\ShareErrorsFromSession->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#36 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Session\\/Middleware\\/StartSession.php(121): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#37 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Session\\/Middleware\\/StartSession.php(64): Illuminate\\\\Session\\\\Middleware\\\\StartSession->handleStatefulRequest(Object(Illuminate\\\\Http\\\\Request), Object(Illuminate\\\\Session\\\\Store), Object(Closure))\\n#38 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Session\\\\Middleware\\\\StartSession->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#39 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Cookie\\/Middleware\\/AddQueuedCookiesToResponse.php(37): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#40 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Cookie\\\\Middleware\\\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#41 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Cookie\\/Middleware\\/EncryptCookies.php(67): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#42 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Cookie\\\\Middleware\\\\EncryptCookies->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#43 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(103): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#44 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php(723): Illuminate\\\\Pipeline\\\\Pipeline->then(Object(Closure))\\n#45 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php(698): Illuminate\\\\Routing\\\\Router->runRouteWithinStack(Object(Illuminate\\\\Routing\\\\Route), Object(Illuminate\\\\Http\\\\Request))\\n#46 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php(662): Illuminate\\\\Routing\\\\Router->runRoute(Object(Illuminate\\\\Http\\\\Request), Object(Illuminate\\\\Routing\\\\Route))\\n#47 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php(651): Illuminate\\\\Routing\\\\Router->dispatchToRoute(Object(Illuminate\\\\Http\\\\Request))\\n#48 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Kernel.php(167): Illuminate\\\\Routing\\\\Router->dispatch(Object(Illuminate\\\\Http\\\\Request))\\n#49 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(128): Illuminate\\\\Foundation\\\\Http\\\\Kernel->Illuminate\\\\Foundation\\\\Http\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#50 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/TransformsRequest.php(21): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#51 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/ConvertEmptyStringsToNull.php(31): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\TransformsRequest->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#52 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#53 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/TransformsRequest.php(21): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#54 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/TrimStrings.php(40): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\TransformsRequest->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#55 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\TrimStrings->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#56 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/ValidatePostSize.php(27): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#57 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\ValidatePostSize->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#58 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/PreventRequestsDuringMaintenance.php(86): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#59 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Illuminate\\\\Foundation\\\\Http\\\\Middleware\\\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#60 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/fruitcake\\/laravel-cors\\/src\\/HandleCors.php(38): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#61 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Fruitcake\\\\Cors\\\\HandleCors->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#62 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/fideloper\\/proxy\\/src\\/TrustProxies.php(57): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#63 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(167): Fideloper\\\\Proxy\\\\TrustProxies->handle(Object(Illuminate\\\\Http\\\\Request), Object(Closure))\\n#64 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php(103): Illuminate\\\\Pipeline\\\\Pipeline->Illuminate\\\\Pipeline\\\\{closure}(Object(Illuminate\\\\Http\\\\Request))\\n#65 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Kernel.php(142): Illuminate\\\\Pipeline\\\\Pipeline->then(Object(Closure))\\n#66 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Kernel.php(111): Illuminate\\\\Foundation\\\\Http\\\\Kernel->sendRequestThroughRouter(Object(Illuminate\\\\Http\\\\Request))\\n#67 \\/Applications\\/XAMPP\\/xamppfiles\\/htdocs\\/oysterchecks\\/public\\/index.php(53): Illuminate\\\\Foundation\\\\Http\\\\Kernel->handle(Object(Illuminate\\\\Http\\\\Request))\\n#68 {main}\"}', '2023-08-18 23:20:10', '2023-08-18 23:20:10'),
(10, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"4baf31d9-5a10-4541-9e40-220e24f7f8f1\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IlpRZ1hseC9CUnNqMkZ4dVF6djZuR1E9PSIsInZhbHVlIjoibHFleXpBaW9FREcvM3N4czJHWHJHb3NVSGswV0o5c3RXdnZIQi9OUjVwNlJIL3VwcEhtSFozR1ltamhrTjNrK0dlMzBzRjBRaFRCZG9FMzVDN3hPS0FyVkNjL1BpVG1YYW5EWjlSSFBvR28xalZ3NktBL0cvWEJRUWlCUTBuMEsiLCJtYWMiOiJiNGMyNzkyZTAyYjIwNzNiY2MyMjlmYThiMTQ1NWIwNDhmOTY3YjUwY2RkODUwMTJkNTllNDgwZmFkOTFhMzE0IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImZIL2pvK2RDUDFzSEVPcjBCUDBiOVE9PSIsInZhbHVlIjoiSWtKb2xnemdlZkpqMlJYM0xKWW9WRDNMQjdjOUxtZ0Fzb2NkL0ZNd0dkcVljRzQ0NXlYSWduZzhyMnF3QjdlL3BLdUlxVEZNckxhQ3JYbnhFNFR3VElsa2I0TkJKa2wvVWNjSUxDVlhnUDRJZ2RxTDh6YnRhTk9xSGZpblltRWMiLCJtYWMiOiIzMTU0OTQ2Y2RmZjM3OGE2MTRmOWUzYjdkODhkNjQ3NDczYmI4NDlkZmRlOGRmZDZmOGM3ODY5ZjY0ZTY4NTkyIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:29:06', '2023-08-18 23:29:06'),
(11, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"ffd9ebad-c8a3-47c1-b627-dea76cd3ef3c\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6Ikp6am96bW5obGFBMDRTZ2tRLzkraWc9PSIsInZhbHVlIjoiaWhtUHdoN0x3T2QyTUhMVWVZakFzTjhHMnBvK2taODRYRGJOR25meVM3SjE0MWtJUEZIV1BVSG1ha3lpZnJQSm14SzRsL3g0NmM0YWtmTlRVMk1oS2lHNjdwTlBYUG9PdEtZMncxQXFVMTZYZUpYZEx0U2ljQUpTRnJBb2w2bUEiLCJtYWMiOiIwNzhjN2Q5Nzc3MDIzMjA4OTcyNjdiMmMzODY3ODFlOTlhOTllZjc0ZGVmODNkMmMwZjgyNmU4MDIyMTFmZmNkIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IjE2VEgzck82S0Z2aG5mYlh4OENrc3c9PSIsInZhbHVlIjoiTDhNSlIvVFNpcDFoN0lCc2wzck9TVXJWemlyOUYvR09meWVxRDluYXFDNW1CZ3gwZXdKektPcTZTMG8vNk9IYnNFMElseThGRzV0RHBIcjhEZ2pCUDRDNG9mblI4L2t1UzFjdEtWNFNQSmdudDh0TEkwclkyTVdueHFNblFoU3EiLCJtYWMiOiIzMTVkMTJmMmZhMzc5MGEwYWQ4YzJkYjg1NWVjZmQ3YTA1Y2JjYWNmZTcwNTUyZjdiYWI5OWVlZTFmZGMxOTE2IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:30:49', '2023-08-18 23:30:49'),
(12, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"c54d2537-2e5f-4bb3-a1d0-3b3b2a4fa22a\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InRYOHYvZXRPOVRQa3p1bXgwemNkeXc9PSIsInZhbHVlIjoiY21wWU9SQVBQUHNIRHVjcWVyR01JbUlDQ2pTSU5rTlplTm5qcWRsaEVrTDZpeEROK2NkNVR2STQwZ1E1V2ZLbThqUDZpUGx5ZUQvU1oxSXJ2UkxvR2Y0bVJFcExMUG5YU0FwbEpSWjV2N3U5RmNOelJ2dXFnSGZuWUtoc0VJWjgiLCJtYWMiOiIxYzM3MWRlYmFhMTQxMzA3N2QxNTE4ZGRlYjkxYjc3NTVmNTZjY2ZlZGE2Y2Y3OWRmMTYwMzFjMzIzOTZmYTljIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IkJCUmNtNXAwMDFvRnFUS0xhaEdac1E9PSIsInZhbHVlIjoicWhjM0craU80MmlsQ01CbFd5dlF5UTFvME9mVlZSeEJ6b0hWbUJ5a2dkM256bnZsRE8yTFlheGRzYnBhWWtsRVRuTTlUWW53T2RFaGRIQ0lzZFJSRHVnTW9sMGorRTFjVlpuNjE3YmdkQ3ZEZkJFZWpEZW8wS1NSa1FsVmdkUDgiLCJtYWMiOiJiZDQ1OWM2YmRiMzYwZjFlMGIyODAyMjY1MGYwMzE3MjllNzUzMjFlN2E5YWNjZDYwYTdiYjZlYWZkZTUwNjE3IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:31:17', '2023-08-18 23:31:17'),
(13, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"4250267c-9396-4cc8-b380-62e25873c9b0\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InZLMkRWcU9EcXRtSnVFdFF5UEVwSVE9PSIsInZhbHVlIjoiZ0JmMzA2VVdNcmNqL2dBUnBmT2hoZDlnajBwR0w2UEV1MjFHVDZBYTBPbmkrZUM2QWNxMk5pRjFVOVpza1plRGJKazYyWXk0Nk5HWC93SitaSlhtMmg5UERKR3NqTW9NNW5BR0hBSzR5V2U1SDlGWVg4WThoSHBGMERNQnB6b1IiLCJtYWMiOiI5M2I2YWJmOGI2OTM0NmJlNDRiNjYzOTgwYTBkMDMwYjRhM2RlOWVjY2U4NGZkMDJjYjNlZmQxN2VmZDYyZDM1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImtnYlRKTkoyVElwTVJDcU80ZjJNcmc9PSIsInZhbHVlIjoiVHRUY3d5OElsWXI1Smt0ZzQvaXR2Mkp4VnpjbktReHgwdU1mYWZnbGdBcDRIZ29vcnVqcjNsVU05Ly9GR1dDSTZKa3NubE00R1RiNi95Tjl2TE45UVVTVnRaWlVlL2laWU5KWXQ0aDZBbE0zWHJCVzd0V3d0amgxRE5NRnMxMUoiLCJtYWMiOiJhNDhjZTgyZDBjNWI3NmUyNjQzNGM0Mjc2NDM4MTAzZDQ5NDIyYWM1YWU3OWJmOThiMTRmZDcwNTBjZjViYTM4IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:31:25', '2023-08-18 23:31:25'),
(14, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"6f66c861-4beb-44d5-9e6f-89cfd6fcc171\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InZLMkRWcU9EcXRtSnVFdFF5UEVwSVE9PSIsInZhbHVlIjoiZ0JmMzA2VVdNcmNqL2dBUnBmT2hoZDlnajBwR0w2UEV1MjFHVDZBYTBPbmkrZUM2QWNxMk5pRjFVOVpza1plRGJKazYyWXk0Nk5HWC93SitaSlhtMmg5UERKR3NqTW9NNW5BR0hBSzR5V2U1SDlGWVg4WThoSHBGMERNQnB6b1IiLCJtYWMiOiI5M2I2YWJmOGI2OTM0NmJlNDRiNjYzOTgwYTBkMDMwYjRhM2RlOWVjY2U4NGZkMDJjYjNlZmQxN2VmZDYyZDM1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImtnYlRKTkoyVElwTVJDcU80ZjJNcmc9PSIsInZhbHVlIjoiVHRUY3d5OElsWXI1Smt0ZzQvaXR2Mkp4VnpjbktReHgwdU1mYWZnbGdBcDRIZ29vcnVqcjNsVU05Ly9GR1dDSTZKa3NubE00R1RiNi95Tjl2TE45UVVTVnRaWlVlL2laWU5KWXQ0aDZBbE0zWHJCVzd0V3d0amgxRE5NRnMxMUoiLCJtYWMiOiJhNDhjZTgyZDBjNWI3NmUyNjQzNGM0Mjc2NDM4MTAzZDQ5NDIyYWM1YWU3OWJmOThiMTRmZDcwNTBjZjViYTM4IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:33:05', '2023-08-18 23:33:05');
INSERT INTO `webhook_calls` (`id`, `name`, `url`, `headers`, `payload`, `exception`, `created_at`, `updated_at`) VALUES
(15, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"d9501ecf-de20-49ec-9330-abb80109912a\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InZLMkRWcU9EcXRtSnVFdFF5UEVwSVE9PSIsInZhbHVlIjoiZ0JmMzA2VVdNcmNqL2dBUnBmT2hoZDlnajBwR0w2UEV1MjFHVDZBYTBPbmkrZUM2QWNxMk5pRjFVOVpza1plRGJKazYyWXk0Nk5HWC93SitaSlhtMmg5UERKR3NqTW9NNW5BR0hBSzR5V2U1SDlGWVg4WThoSHBGMERNQnB6b1IiLCJtYWMiOiI5M2I2YWJmOGI2OTM0NmJlNDRiNjYzOTgwYTBkMDMwYjRhM2RlOWVjY2U4NGZkMDJjYjNlZmQxN2VmZDYyZDM1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImtnYlRKTkoyVElwTVJDcU80ZjJNcmc9PSIsInZhbHVlIjoiVHRUY3d5OElsWXI1Smt0ZzQvaXR2Mkp4VnpjbktReHgwdU1mYWZnbGdBcDRIZ29vcnVqcjNsVU05Ly9GR1dDSTZKa3NubE00R1RiNi95Tjl2TE45UVVTVnRaWlVlL2laWU5KWXQ0aDZBbE0zWHJCVzd0V3d0amgxRE5NRnMxMUoiLCJtYWMiOiJhNDhjZTgyZDBjNWI3NmUyNjQzNGM0Mjc2NDM4MTAzZDQ5NDIyYWM1YWU3OWJmOThiMTRmZDcwNTBjZjViYTM4IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:34:06', '2023-08-18 23:34:06'),
(16, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"f2dc05c4-9d7c-4196-b232-e4aef3ddba49\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InZLMkRWcU9EcXRtSnVFdFF5UEVwSVE9PSIsInZhbHVlIjoiZ0JmMzA2VVdNcmNqL2dBUnBmT2hoZDlnajBwR0w2UEV1MjFHVDZBYTBPbmkrZUM2QWNxMk5pRjFVOVpza1plRGJKazYyWXk0Nk5HWC93SitaSlhtMmg5UERKR3NqTW9NNW5BR0hBSzR5V2U1SDlGWVg4WThoSHBGMERNQnB6b1IiLCJtYWMiOiI5M2I2YWJmOGI2OTM0NmJlNDRiNjYzOTgwYTBkMDMwYjRhM2RlOWVjY2U4NGZkMDJjYjNlZmQxN2VmZDYyZDM1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImtnYlRKTkoyVElwTVJDcU80ZjJNcmc9PSIsInZhbHVlIjoiVHRUY3d5OElsWXI1Smt0ZzQvaXR2Mkp4VnpjbktReHgwdU1mYWZnbGdBcDRIZ29vcnVqcjNsVU05Ly9GR1dDSTZKa3NubE00R1RiNi95Tjl2TE45UVVTVnRaWlVlL2laWU5KWXQ0aDZBbE0zWHJCVzd0V3d0amgxRE5NRnMxMUoiLCJtYWMiOiJhNDhjZTgyZDBjNWI3NmUyNjQzNGM0Mjc2NDM4MTAzZDQ5NDIyYWM1YWU3OWJmOThiMTRmZDcwNTBjZjViYTM4IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:34:47', '2023-08-18 23:34:47'),
(17, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"cfab638a-481e-439c-9f0b-d4747a5c4eb5\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6InZLMkRWcU9EcXRtSnVFdFF5UEVwSVE9PSIsInZhbHVlIjoiZ0JmMzA2VVdNcmNqL2dBUnBmT2hoZDlnajBwR0w2UEV1MjFHVDZBYTBPbmkrZUM2QWNxMk5pRjFVOVpza1plRGJKazYyWXk0Nk5HWC93SitaSlhtMmg5UERKR3NqTW9NNW5BR0hBSzR5V2U1SDlGWVg4WThoSHBGMERNQnB6b1IiLCJtYWMiOiI5M2I2YWJmOGI2OTM0NmJlNDRiNjYzOTgwYTBkMDMwYjRhM2RlOWVjY2U4NGZkMDJjYjNlZmQxN2VmZDYyZDM1IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImtnYlRKTkoyVElwTVJDcU80ZjJNcmc9PSIsInZhbHVlIjoiVHRUY3d5OElsWXI1Smt0ZzQvaXR2Mkp4VnpjbktReHgwdU1mYWZnbGdBcDRIZ29vcnVqcjNsVU05Ly9GR1dDSTZKa3NubE00R1RiNi95Tjl2TE45UVVTVnRaWlVlL2laWU5KWXQ0aDZBbE0zWHJCVzd0V3d0amgxRE5NRnMxMUoiLCJtYWMiOiJhNDhjZTgyZDBjNWI3NmUyNjQzNGM0Mjc2NDM4MTAzZDQ5NDIyYWM1YWU3OWJmOThiMTRmZDcwNTBjZjViYTM4IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de0386a1e28fc7465687c8\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-18 23:35:07', '2023-08-18 23:35:07'),
(18, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"62dceb77-b62c-4bae-a29b-1c0ec27d770b\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6Imk1VzRiNU1qV0VCZ1hRRGRUM3RTYnc9PSIsInZhbHVlIjoiaERqcVFSY1ZDcGFpeWtvK0NzdXJTekJoUXEvRC9zMnBhM3o1RHQxRzBsRG8yazREcG1uSUpaOXRrTkVpTVkxKzYyOXhnRVlqSTZjclgvRkVSRTF1bW93NEZsaDZQN054aGtZZlA3NnEweVc2TzNWbmd6SHlDQ09vU0J6bEpxMm8iLCJtYWMiOiIxZGQwOWEwMDhhZWE2NzEwM2VlNTRjYTE4NDVlZjJiY2Y2NDcyOGJlMTUxOWQ1NmZkZmI2YzZlZDNiOGI4MTA4IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IldJbFdtRXRtV0tGemZsL3owQnYvYnc9PSIsInZhbHVlIjoieDlob1VyODNrcXRpc1JKTExvN0R2SGp0bVZMc0QwRzhLaGZ4Nk90QXhhUFRQRlRVbms4b2c2ZlorcVJRYjAzeiszVkhXM3dLUjlIYVBaOWpsL3FBNkl4SHhsaS9JZU1PZTBPdGtsZDdFakYzNlZIOE9tMmR1ZXhBa2pudHYxYXciLCJtYWMiOiJmYjI3OWQ2MjMyODc0ZmZlNWE1MTU4MTBkOGY1ZmQ2MzY5OWU3ZjM1MmVkNzQ2ZjE3MTRiMmZiMjJkNDFhZjNlIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64e00b360ffc161679cab346\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 00:23:49', '2023-08-19 00:23:49'),
(19, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"5010629d-5296-4026-8642-8551a33714ce\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IjkvYmZ4UVJFQ0lEOHJDczErR3ZyUWc9PSIsInZhbHVlIjoiZDNaVDhSTU40c1VlUUdNVmt3UGpOdTdjMzM3TVg5NlM0bUxFNjhPQ1gySDhNdVI1WUxsUVQ1TUZpR3NTR3llS3pLT1lMT2hUMEdFamdrSktSSzhvTWFDQmlyRklUb0VrWWl5Q0wxcFZVdjM0eGtKMjVEdkZYUzhvRGVKM1R5dGwiLCJtYWMiOiIzNDY4MmIwMmU4YWRkZGU3ODcyYWQ4NmNjMjVlM2ZlZTNlZTA0YTU2Mzc1MzIxMTNmYWM4ZWE2MDQzYWZiMzQ3IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IitlUVRjbnJqQkVXUTFjamR2SGdWNVE9PSIsInZhbHVlIjoiaVFnU01iNWxnTEZYSUFWQ1RXRDZac3MrK1ZYWUc5NThhRU5PRkwzOFptOE9zcWNFQS9QdXUwSnF3WUd1MWx4RTFWNmtPemp4Tis5L0FjWkwxcktzRU4zbTV4bnBIZXdhZXlXRnhFQUg1eHF2MEhTZnNIc3ZYdzhnN0dLdDVTem8iLCJtYWMiOiJiMTM3MWEzMzMyOTUzZjZhNDRhNTg4YzhjYzUwN2EwMDgyNzU5ZTk1NDgxNDE2N2IyNjE5MzgxZjk3MDM3NmE4IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64de2f600ffc1606f7cab315\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 00:59:48', '2023-08-19 00:59:48'),
(20, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"7dd26aa0-8f52-466b-b9bf-a98c093fe3f3\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6Ikd2MEtiRmZ2US9haktvYzlXeWdVRGc9PSIsInZhbHVlIjoiYzNkd0ZmV2tLdmpsMWFhaWFmVVd0UVJFeENsL1NuMHdLZkplOFQ2eUQyN2N6RnJ2TGhxbUxqbC8yNjZWMUFxMEdxdWI1bmUzUk9PWC9xdGl3Y2VuNHJRTjRwcWptYUxNOXpwbWdHU0thbDY0UTFQcXVqV0dRUVdWS2ZieVlHUFUiLCJtYWMiOiIxOThkNTVlMTBmZmUwMTc4NTUzYjc0YjJlMTYyMmUxYzk1YTY2YTVhZjhiMzg2OGM2ZDQ1OTI2NmExMWQzMDM3IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImRDcDFSRGVuSkpVbDI5WXVzaDk5ZkE9PSIsInZhbHVlIjoiWHlRNERhVTRxRDVlZEFOZURUd1NRQ3V1aitvbzFXdk1mQ21sSmVtdENLdkRSNTdXcXFSNFhnWWQ4ejdjVk83d0pGRjlhaEtFYVp2dFREOUFHOVREOUh1bmdSMWZ5Q2I0TGs2eUx0TktkQldtaDhsWVpIUVFYUkRpQ2VSbEZuTzMiLCJtYWMiOiIxZTgxY2RkOWYyYzU5NTIyNTQ5Zjg4MWQ5ZDQ1NjBmMmEyYTc2MzY1NzhiNjA0MTg1NGE2N2MxYzYyMzNiMGIyIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64e014ff0ffc16de41cab361\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 01:04:17', '2023-08-19 01:04:17'),
(21, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"06009ed6-be8e-49a8-a1e7-332aea37a600\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6Im9sZGR1YUJ1aHRJSHJPeE9EMUs5Mmc9PSIsInZhbHVlIjoiWnVsYzJhd0pleG9UT09PMGJvdGFTK2JWa3AxanFOVXdOV2JYSDArTVhnSmozS0J5RkZHYjkyeEtZUUxoRXh4WjBlaktCc0s0S1J4UGM5azU5WEgvUU1uWGNpc1FmQVpWMEprdERqVlNkdzB3ZmRHZlRTTjFBY1E4ckcrZDYzY0EiLCJtYWMiOiJiOTc4NWE2OTcxMjAxZWY3YzNhNGY3MTFiYjU5MTZlYzY5MjkwOGU5ZTJhZmJkMWQ1YTU1ZGU4Mzk4MDI5OGY0IiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6Imw4dzhvaWp3RHA2U2lwUDZQbENMUGc9PSIsInZhbHVlIjoieUdhcW1UNFQwS0lhWTdVSnRraTVqc2J0ZDFMb0xjc0pPWTVmdUpXZHVDeWJib3Nubmtid0o0UXFlT2NpMVgxNlRTYVZCeUlWSjdzUndPZm9rZFRRaEROVlBZYVNGWHZxdFVEUTlseWpyWkJjbitGN21JQit4OXlQTnE0WHg0MEkiLCJtYWMiOiIxNTNhZTY2NmM4ZDUxNDA0OGZlZmExNTc1NDYzMzE2YjQwOTg2MjA3ZWNmNWNlZjAzZTBhZTUwMzZiYTJjYzBhIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64da2bd10ffc166d1acab19f\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 01:39:13', '2023-08-19 01:39:13'),
(22, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"364cd49e-8199-499d-b1ba-ba9bb3405740\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6Im4wckJGb21NUkplOEdNanBnMHh4ZGc9PSIsInZhbHVlIjoiQmZDaDVRZ2tCRjlrU0d1M1Rwc1BjcWVPb1lrdHMzNitBR1gwOU5BajlFTCtZWXFwQWpDWG1IMGN0a0REc0RtTW1KZXd2OGRwbVdUaEZwMkhlTm0vc3RmQVdnazFEdCs1VXZxNzU4R1ZLNkJEMFFTcEwzNkM3Wk5kTFZBVUp4UDciLCJtYWMiOiJlZmJlY2IyZWI2NDAwZjZlMThlY2E3YjQ2NjU2NTE4YjAwYTk5OWM4ODcyODM1NGEwNDllMjc4ZjI0NzZhZmNlIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6ImJOZ0FIcDlIRXVUZys0ZGhMSmI4VkE9PSIsInZhbHVlIjoid0VCSEVQVXBpL3N4SGYyS0owcnc4d0hXbHkxZ3Njekt4Um81eFVXNStmTHFpZENHaHhmRzBVMkhXVXEzQk1zSUZFZTVqUkROK290OFE4eHVoTi9CYk9ZaE0vWmYyWEtFQTR4c2U1bmdEc3cyU2RKRE0vT0FKZno1K1g4TG9tQW4iLCJtYWMiOiJmZmJjYmVjZDRlNWM2MmFkMmZiNDFlMWMxMjA2NTNlM2FhMzAyODQyNzAyNTMyZTQyODMzODY1NmVhOGFhNjY3IiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64da2bd10ffc166d1acab19f\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 01:39:56', '2023-08-19 01:39:56'),
(23, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"491d9dda-4bd8-4bd5-864c-7aba0388509e\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6Ikhwc2pqMUV0VkhKTW82VVZia0o0eEE9PSIsInZhbHVlIjoiT0Fic1pKZUVMZmQ1S1pnNG85MTQwaElSM3VDMW1VYWJhcDVjdmdTSDdZckM5TFlCTTFBSU94MXR2M3BBOEtrSy9pUXhTNVBtcFhiTXlGUEZHdVFCVnpMMU4xdkZIUEw2UExPSDcwN1VBcDBvYW40Y0p1MEEvZ0dVSkNhTmhBMkgiLCJtYWMiOiIyOWVjMmRlNDE1NWZhMDYxZWI5OWZlZWE1OTVkNDQzOWUwZGJlMWI1MDNjOWIzMjMyMGFlOWI5NjA3MmRjYzEyIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IkVBeGZ1cFZKQmxlc0dMVTNOK0hxUEE9PSIsInZhbHVlIjoiWWRKSFpFRk41TG1HZEZlbmpRQ3EwWEZnRDVuWENKcmVoMFV2TEVIZi96QldKT3JsUGhoQ2NsUlBIVCt1K20yRVM5ZGI5VytyY1hPQWRwUFVSVjIyU1l0MG9lVHZUcThIeWE3ZEJPZmw0S2Z5NUhlbmVuZ0NBUXhNNE41Q0pobG4iLCJtYWMiOiI1NDYxZDhkYzUzYjE3NDJlY2FmYzI1NmI1MGJmZWQ3ZTY3ODg0NTlhZmZiYThkNWNkNzczMDkxMDA1NjEyMmJlIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64da2bd10ffc166d1acab19f\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64de03b9144f53b033f5c01f\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 01:41:13', '2023-08-19 01:41:13'),
(24, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"8f890434-64dc-4de6-a749-771491dc1fb2\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6ImRJcksydG0zYTc0UTh5LzVodVBSaHc9PSIsInZhbHVlIjoiR01WMy8zRzVNdTB3Q1ZGYUxCUWJuYTd5WDhGNzBieXN3dGdyaGtjcVEwak5ORjNVN1JaWFlwUG9lT2VieXpGUVM3ZXN1dVZYTzFkZGcwN2NDWXNRdzRYTUxZMnBTMkpLUUtTZm9HMTFZT0NNYjZOd1llbFJteDQreURTTHRjNEkiLCJtYWMiOiI2NjI1YjRkZTUzNTc3YTczOGZhMWIyZTViN2M0MTJkNTllNGFhMTQ0NTViMTQzMTY0ZmU3YjkzODRjYjIzMzlhIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6Ik9ydmcwL1NrWThTRTc4c3k3Vk10N1E9PSIsInZhbHVlIjoiaHMwMlhzTVZJYlYvZG9lTEg4RU9tcU5mRm55OTJ6a3ZoUCtlaGhFVVQ3VzJweDR0T0xQZDVUV1NZck9hRnIwK3QyaW85U1dLS2ZIUWx2b2VWYytyZEZYVTdHTlA1YmdpS0J3SmpNMXhMa3UwWU9PZHZQUmFMTURudmQzL0RMY0ciLCJtYWMiOiJmOGNhMzU1MGE0MDViMmE0ZDVhZmZiNjE3NjhiOTYwZmRiMDc5NDZhZmFjNjRmZDBkNzI2MDEyMjQwZWI0N2YwIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64da2bd10ffc166d1acab19f\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64e013770ffc1649a9cab358\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 01:42:42', '2023-08-19 01:42:42');
INSERT INTO `webhook_calls` (`id`, `name`, `url`, `headers`, `payload`, `exception`, `created_at`, `updated_at`) VALUES
(25, 'default', 'http://localhost/oysterchecks/public/verifications/youverify', '{\"x-youverify-signature\":[\"3614c7d3211dde0aaef08163ebb7477f18da9a525a2a727fe41af66300df574f\"],\"accept\":[\"application\\/json, text\\/plain, *\\/*\"],\"content-type\":[\"application\\/json\"],\"user-agent\":[\"PostmanRuntime\\/7.29.2\"],\"postman-token\":[\"08b9a942-96c7-4996-bfe4-445d97af43bb\"],\"host\":[\"localhost\"],\"accept-encoding\":[\"gzip, deflate, br\"],\"connection\":[\"keep-alive\"],\"content-length\":[\"2965\"],\"cookie\":[\"XSRF-TOKEN=eyJpdiI6IkVaQy8yVzFsRWhqTnA1RjlFVS9xMXc9PSIsInZhbHVlIjoiMWtqWjByZHlCNzk4QUsrczA3TGdOZWlKU1dDRjY5d1oyeW52dlg1MXdjYmkxSUZhK2ZXcWZvWmI1NFZGejhtbktyTlhzYytoenFIdWFRK3VxSlozczhaUkhGS3hGNWpuSGF0UXh4SEJEQlU5ckNuMUJJNjQ2VGhQTTJCNzJGbWciLCJtYWMiOiJjMWI1MzlkNDc1ZGEyN2MzODI5MjA3MmEyMTFjNmMxZGZkYzE3ODU2MzQxOWZjNWFmZDI3YzJmNzZjZmZkNTUxIiwidGFnIjoiIn0%3D; oysterchecks_background_checks_session=eyJpdiI6IjJvSlRGclF2YTM3UXRLaHM1NWFLOUE9PSIsInZhbHVlIjoiNmVlVWs0RzNQYUVWc0ZhV3I4bEFoVkxWc1VUQS84S0RaWlZSN1NCcWVKVXk3L2svdEhlVURaZ0x6OHFHdHF5ZlhrNmhIYTFGSjJhUk15YkdneWxxNFRSa0lKS0tOUEJFTnBLR2ZYTXZjSDg3MWo4U01EeDNsaXh0ajlNSVN6WGEiLCJtYWMiOiJiNzkxZjNlYWMyMTg2OTljMzM5Nzc2MDJlMjg3MmM0MWNiYzRmZTYzZTdlY2IyYjI5MmEwNmUyZmI5YWQ5NDhhIiwidGFnIjoiIn0%3D\"]}', '{\"event\":\"address.completed\",\"apiVersion\":\"v2\",\"data\":{\"candidate\":{\"candidateId\":\"64e01a900ffc163e58cab365\",\"firstName\":\"michael\",\"middleName\":\"kachi\",\"lastName\":\"michael\",\"photo\":\"https:\\/\\/res.cloudinary.com\\/the-morgans-consortium\\/image\\/upload\\/v1692271492\\/oysterchecks\\/candidates\\/zgjeondrnydkxwblfcjk.jpg\",\"email\":\"mikkynoble@gmail.com\",\"mobile\":\"08028739833\"},\"agent\":{\"firstName\":\"Igwe\",\"middleName\":null,\"lastName\":\"Juliet\",\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"photo\":\"https:\\/\\/atp-youverify.fra1.digitaloceanspaces.com\\/profile-photos\\/Tue%20Sep%2014%202021%2009%3A36%3A49%20GMT%2B0000%20%28Coordinated%20Universal%20Time%29-61406d317dbbec00810b2943.jpg\"},\"address\":{\"latlong\":{\"lat\":\"6.4900641\",\"lon\":\"3.38054\"},\"flatNumber\":\"1st floor\",\"buildingName\":\"Sum house\",\"buildingNumber\":\"350\",\"subStreet\":null,\"street\":\"Borno way\",\"landmark\":\"Police Station\",\"state\":\"Lagos\",\"city\":\"Lagos\",\"country\":\"Nigeria\",\"lga\":\"Lagos Mainland\"},\"referenceId\":\"64de03b9144f53b033f5c01f\",\"parentId\":null,\"status\":\"completed\",\"taskStatus\":\"VERIFIED\",\"tatStatus\":\"IN_TAT\",\"subjectConsent\":\"true\",\"startDate\":null,\"endDate\":null,\"submittedAt\":\"2023-08-17T12:25:35.969Z\",\"executionDate\":\"2023-08-17T12:25:35.969Z\",\"completedAt\":null,\"acceptedAt\":null,\"revalidationDate\":null,\"notes\":[{\"createdAt\":null,\"note\":\"Candidate lives at No. 350, Borno way street, Lagos, Lagos Mainland, Lagos, Nigeria. It is a Storey Building painted White with a White gate. It was confirmed by the Gatekeeper\"}],\"isFlagged\":false,\"agentSubmittedLongitude\":\"3.3764214\",\"agentSubmittedLatitude\":\"6.611701\",\"reportGeolocationUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=6.611701,3.3764214\",\"mapAddressUrl\":\"https:\\/\\/www.google.com\\/maps\\/search\\/?api=1&query=350%20Borno%20way%20Lagos%20Lagos%20Nigeria\",\"submissionDistanceInMeters\":null,\"reasons\":null,\"signature\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275082673-9BJzbAMLIdHxOXmQAqFUo.png\",\"images\":[{\"filePath\":\"https:\\/\\/youverify-cdn.fra1.digitaloceanspaces.com\\/1692275101375-SQox-GfpBkT0ogi2KlYh3.png\",\"fileType\":null,\"height\":null,\"width\":null,\"longitude\":3.3764213999999999060719346744008362293243408203125,\"latitude\":6.611701000000000050249582272954285144805908203125}],\"buildingType\":\"Storey Building\",\"buildingColor\":\"White\",\"gatePresent\":true,\"gateColor\":\"White\",\"availabilityConfirmedBy\":\"Gatekeeper\",\"closestLandmark\":\"Alagomeji Bus stop\",\"additionalInfo\":\"sample verification for Morgan Consulting\",\"reportAgentAccess\":null,\"incidentReport\":null,\"description\":\"Verify the candidate\",\"reportId\":\"64de03b9144f53b033f5c01f\",\"downloadUrl\":null,\"apiVersion\":\"v2\",\"businessType\":\"business\",\"businessId\":\"6222a5ea3e7a41c29c031068\",\"userId\":\"6222a5ea3e7a41c29c031069\",\"type\":\"individual\",\"metadata\":[],\"createdAt\":\"2023-08-17T11:25:45.423Z\",\"lastModifiedAt\":\"2023-08-17T12:33:44.319Z\",\"_createdAt\":\"2023-08-17T11:25:4545+00:00\",\"_lastModifiedAt\":\"2023-08-17T12:33:4444+00:00\",\"verificationId\":\"64e01e390ffc16392ccab370\",\"id\":\"64de03b8a1e28f04615687cc\"}}', NULL, '2023-08-19 01:43:57', '2023-08-19 01:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address_verifications`
--
ALTER TABLE `address_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address_verification_details`
--
ALTER TABLE `address_verification_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_verification_details_address_verification_id_foreign` (`address_verification_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `adverse_media`
--
ALTER TABLE `adverse_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adverse_media_verification_id_foreign` (`verification_id`),
  ADD KEY `adverse_media_user_id_foreign` (`user_id`);

--
-- Indexes for table `adverse_media_categories`
--
ALTER TABLE `adverse_media_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_responses`
--
ALTER TABLE `api_responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `api_responses_verification_id_foreign` (`verification_id`);

--
-- Indexes for table `bank_account_verifications`
--
ALTER TABLE `bank_account_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_account_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `bank_account_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `business_verifications`
--
ALTER TABLE `business_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_verification_details`
--
ALTER TABLE `business_verification_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bvn_verifications`
--
ALTER TABLE `bvn_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bvn_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `bvn_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `cac_verifications`
--
ALTER TABLE `cac_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cac_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `cac_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_services`
--
ALTER TABLE `candidate_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_verifications`
--
ALTER TABLE `candidate_verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `field_inputs`
--
ALTER TABLE `field_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_requests`
--
ALTER TABLE `fund_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identity_verifications`
--
ALTER TABLE `identity_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identity_verifications_verification_id_foreign` (`verification_id`);

--
-- Indexes for table `identity_verification_details`
--
ALTER TABLE `identity_verification_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identity_verification_details_identity_verification_id_foreign` (`identity_verification_id`);

--
-- Indexes for table `image_verifications`
--
ALTER TABLE `image_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `image_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ndl_verifications`
--
ALTER TABLE `ndl_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ndl_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `ndl_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `nin_verifications`
--
ALTER TABLE `nin_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nin_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `nin_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `nip_verifications`
--
ALTER TABLE `nip_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `nip_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pep_saction_verifications`
--
ALTER TABLE `pep_saction_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pep_saction_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `pep_saction_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `phone_number_verifications`
--
ALTER TABLE `phone_number_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone_number_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `phone_number_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pvc_verifications`
--
ALTER TABLE `pvc_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pvc_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `pvc_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin_verifications`
--
ALTER TABLE `tin_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tin_verifications_verification_id_foreign` (`verification_id`),
  ADD KEY `tin_verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- Indexes for table `webhook_calls`
--
ALTER TABLE `webhook_calls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `address_verifications`
--
ALTER TABLE `address_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `address_verification_details`
--
ALTER TABLE `address_verification_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adverse_media`
--
ALTER TABLE `adverse_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adverse_media_categories`
--
ALTER TABLE `adverse_media_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `api_responses`
--
ALTER TABLE `api_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_account_verifications`
--
ALTER TABLE `bank_account_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_verifications`
--
ALTER TABLE `business_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_verification_details`
--
ALTER TABLE `business_verification_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bvn_verifications`
--
ALTER TABLE `bvn_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cac_verifications`
--
ALTER TABLE `cac_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `candidate_services`
--
ALTER TABLE `candidate_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidate_verifications`
--
ALTER TABLE `candidate_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `field_inputs`
--
ALTER TABLE `field_inputs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `fund_requests`
--
ALTER TABLE `fund_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `identity_verifications`
--
ALTER TABLE `identity_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `identity_verification_details`
--
ALTER TABLE `identity_verification_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_verifications`
--
ALTER TABLE `image_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `ndl_verifications`
--
ALTER TABLE `ndl_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nin_verifications`
--
ALTER TABLE `nin_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nip_verifications`
--
ALTER TABLE `nip_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pep_saction_verifications`
--
ALTER TABLE `pep_saction_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `phone_number_verifications`
--
ALTER TABLE `phone_number_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pvc_verifications`
--
ALTER TABLE `pvc_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tin_verifications`
--
ALTER TABLE `tin_verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `webhook_calls`
--
ALTER TABLE `webhook_calls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_verification_details`
--
ALTER TABLE `address_verification_details`
  ADD CONSTRAINT `address_verification_details_address_verification_id_foreign` FOREIGN KEY (`address_verification_id`) REFERENCES `address_verifications` (`id`);

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `adverse_media`
--
ALTER TABLE `adverse_media`
  ADD CONSTRAINT `adverse_media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `adverse_media_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `api_responses`
--
ALTER TABLE `api_responses`
  ADD CONSTRAINT `api_responses_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `bank_account_verifications`
--
ALTER TABLE `bank_account_verifications`
  ADD CONSTRAINT `bank_account_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bank_account_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `bvn_verifications`
--
ALTER TABLE `bvn_verifications`
  ADD CONSTRAINT `bvn_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bvn_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `cac_verifications`
--
ALTER TABLE `cac_verifications`
  ADD CONSTRAINT `cac_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cac_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `identity_verifications`
--
ALTER TABLE `identity_verifications`
  ADD CONSTRAINT `identity_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `identity_verification_details`
--
ALTER TABLE `identity_verification_details`
  ADD CONSTRAINT `identity_verification_details_identity_verification_id_foreign` FOREIGN KEY (`identity_verification_id`) REFERENCES `identity_verifications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_verifications`
--
ALTER TABLE `image_verifications`
  ADD CONSTRAINT `image_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `image_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `ndl_verifications`
--
ALTER TABLE `ndl_verifications`
  ADD CONSTRAINT `ndl_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ndl_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `nin_verifications`
--
ALTER TABLE `nin_verifications`
  ADD CONSTRAINT `nin_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nin_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `nip_verifications`
--
ALTER TABLE `nip_verifications`
  ADD CONSTRAINT `nip_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nip_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `identity_verifications` (`id`);

--
-- Constraints for table `pep_saction_verifications`
--
ALTER TABLE `pep_saction_verifications`
  ADD CONSTRAINT `pep_saction_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pep_saction_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `phone_number_verifications`
--
ALTER TABLE `phone_number_verifications`
  ADD CONSTRAINT `phone_number_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `phone_number_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `pvc_verifications`
--
ALTER TABLE `pvc_verifications`
  ADD CONSTRAINT `pvc_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pvc_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `tin_verifications`
--
ALTER TABLE `tin_verifications`
  ADD CONSTRAINT `tin_verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tin_verifications_verification_id_foreign` FOREIGN KEY (`verification_id`) REFERENCES `verifications` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
