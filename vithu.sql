-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 07:18 AM
-- Server version: 11.3.2-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vithu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(255) NOT NULL,
  `donorAddress` varchar(255) NOT NULL,
  `donorType` varchar(255) NOT NULL,
  `donationType` varchar(255) NOT NULL,
  `donationPurpose` varchar(255) NOT NULL,
  `donationAmount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `donorName`, `donorEmail`, `donorPhone`, `donorAddress`, `donorType`, `donationType`, `donationPurpose`, `donationAmount`, `created_at`, `updated_at`) VALUES
(1, 'sfvs', 'svsdfv@gmail.com', '908332980', 'jfvnkdfjvn', 'PPA Member', 'Hostel', 'Bursary Fund', '900', '2024-04-29 22:26:41', '2024-04-29 22:26:41'),
(2, 'vdsfvdv', 'ferfv@gmail.com', '442423', 'srfwsdrfdws@gmail.co', 'PTA and PPA Member', 'Parents teachers Association', 'Building Project', '9000', '2024-04-29 22:38:52', '2024-04-29 22:38:52'),
(3, 'fvsfd', 'fvs@hssdfv', '1', 'sfvasdf', 'PPA Member', 'School', 'Bursary Fund', '800', '2024-05-01 09:52:41', '2024-05-01 09:52:41'),
(4, 'vxfvx', 'dvsdvDSF@gmail', '088', 'adrgvadngvjk', 'PPA Member', 'Hostel', 'Hostel Makeover Fund', '493409', '2024-05-01 09:56:43', '2024-05-01 09:56:43'),
(5, 'sdvsdvds', 'cvnsdvjksn@gmail', '49805823498', 'fjsndkfjsnk', 'PPA Member', 'School', 'Bursary Fund', '6700', '2024-05-01 11:09:46', '2024-05-01 11:09:46'),
(6, 'vfdsfvd', 'vfsvDf@gmail.com', '3453453', 'vdfkjvnkdfjn', 'PPA Member', 'School', 'Building Fund', '5000', '2024-05-01 11:28:09', '2024-05-01 11:28:09'),
(7, 'fvfvd', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'School', 'Covid Relief Fund', '900', '2024-05-01 11:29:45', '2024-05-01 11:29:45'),
(8, 'dcvds', 'dsvsdv@gmail.com', '39049249', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'School', 'Scholarship Fund', '900', '2024-05-01 13:01:29', '2024-05-01 13:01:29'),
(9, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:06:45', '2024-05-01 13:06:45'),
(10, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:07:30', '2024-05-01 13:07:30'),
(11, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:07:42', '2024-05-01 13:07:42'),
(12, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:09:24', '2024-05-01 13:09:24'),
(13, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:11:15', '2024-05-01 13:11:15'),
(14, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:11:35', '2024-05-01 13:11:35'),
(15, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PPA Member', 'Parents teachers Association', 'IT Project', '9000', '2024-05-01 13:12:40', '2024-05-01 13:12:40'),
(16, 'dbfddv', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PTA and PPA Member', 'Hostel', 'Hostel Makeover Fund', '9000', '2024-05-02 10:46:09', '2024-05-02 10:46:09'),
(17, 'dsfvsd', 'rjgvifj@gmail', '34823947', 'jfsvnskfjn', 'PTA Member', 'Hostel', 'Hostel Makeover Fund', '900', '2024-05-02 10:48:46', '2024-05-02 10:48:46'),
(18, 'dfd', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'Well wisher', 'School', 'Sports Fund', '500', '2024-05-02 10:55:47', '2024-05-02 10:55:47'),
(19, 'dfvdvd', 'vsfvsv@gmail.com', '4423423', '24, 4/3, Initium Road, Dehiwela', 'PTA Member', 'Hostel', 'Hostel Makeover Fund', '900', '2024-05-02 10:57:24', '2024-05-02 10:57:24'),
(20, 'dczcz', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PTA Member', 'School', 'Scholarship Fund', '800', '2024-05-17 08:44:27', '2024-05-17 08:44:27'),
(21, 'vdfvd', 'thevendranvithursan@gmail.com', '0772251757', '24, 4/3, Initium Road, Dehiwela', 'PTA Member', 'School', 'Building Fund', '90', '2024-05-17 08:47:11', '2024-05-17 08:47:11'),
(22, 'vfd', 'kflsmkmW@gmail', '30299', 'kflmsdkfm', 'PTA Member', 'Hostel', 'Hostel Makeover Fund', '9000', '2024-05-17 08:49:05', '2024-05-17 08:49:05'),
(23, 'vfd', 'kflsmkmW@gmail', '30299', 'kflmsdkfm', 'PTA Member', 'School', 'Smart Board Fund', '9000', '2024-05-17 08:53:48', '2024-05-17 08:53:48'),
(24, 'vfd', 'kflsmkmW@gmail', '30299', 'kflmsdkfm', 'PTA Member', 'Hostel', 'Hostel Makeover Fund', '9000', '2024-05-17 09:02:01', '2024-05-17 09:02:01'),
(25, 'vfd', 'kflsmkmW@gmail', '30299', 'kflmsdkfm', 'PTA Member', 'Parents teachers Association', 'Playground Project', '9000', '2024-05-17 09:02:53', '2024-05-17 09:02:53');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_29_091730_create_donors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2ekf9IggkcXcTnXCP98v1bs8ilB2WzyiuOLuk5BM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVZOMmJET25rcHB1aVJPdVp2dzVLNURlaXFKVnRHSzE5dkNwbThrSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTcyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcGFnZTI/ZGF0YSU1Ql90b2tlbiU1RD1hVk4yYkRPbmtwcHVpUk91WnZ3NUs1RGVpcUpWdEdLMTl2Q3BtOGtJJmRhdGElNUJhY2Nlc3Nfa2V5JTVEPWJiNmVhOGNkMzA1MTNiZDU4MjRhYzNkZGNiZmRhZjI2JmRhdGElNUJwcm9maWxlX2lkJTVEPXZpdGh1MTAwMzk5JmRhdGElNUJ0cmFuc2FjdGlvbl91dWlkJTVEPTY2NTQyYTYzMzE1NzEmZGF0YSU1QnJlZmVyZW5jZV9udW1iZXIlNUQ9MTcxNjIwMzMwMjgwMyZkYXRhJTVCc2lnbmVkX2ZpZWxkX25hbWVzJTVEPWFjY2Vzc19rZXklMkNwcm9maWxlX2lkJTJDdHJhbnNhY3Rpb25fdXVpZCUyQ3NpZ25lZF9maWVsZF9uYW1lcyUyQ3NpZ25lZF9kYXRlX3RpbWUlMkNsb2NhbGUlMkN0cmFuc2FjdGlvbl90eXBlJTJDcmVmZXJlbmNlX251bWJlciUyQ2Ftb3VudCUyQ2N1cnJlbmN5JmRhdGElNUJzaWduZWRfZGF0ZV90aW1lJTVEPTIwMjQtMDUtMjdUMDYlM0EzOCUzQTI3WiZkYXRhJTVCbG9jYWxlJTVEPWVuJmRhdGElNUJ0cmFuc2FjdGlvbl90eXBlJTVEPWF1dGhvcml6YXRpb24mZGF0YSU1QmN1cnJlbmN5JTVEPUxLUiZkYXRhJTVCZG9ub3JOYW1lJTVEPWZjdnNmZCZkYXRhJTVCZG9ub3JFbWFpbCU1RD10aGV2ZW5kcmFudml0aHVyc2FuJTQwZ21haWwuY29tJmRhdGElNUJkb25vclBob25lJTVEPTA3NzIyNTE3NTcmZGF0YSU1QmRvbm9yQWRkcmVzcyU1RD0yNCUyQyUyMDQlMkYzJTJDJTIwSW5pdGl1bSUyMFJvYWQlMkMlMjBEZWhpd2VsYSZkYXRhJTVCZG9ub3JUeXBlJTVEPVBQQSUyME1lbWJlciZkYXRhJTVCZG9uYXRpb25UeXBlJTVEPUhvc3RlbCZkYXRhJTVCZG9uYXRpb25QdXJwb3NlJTVEPUhvc3RlbCUyME1ha2VvdmVyJTIwRnVuZCZkYXRhJTVCc3R1ZGVudG5hbWUlNUQ9ZnZzZnZzZiZkYXRhJTVCYWRtaXNzaW9ubm8lNUQ9OTAwMCZkYXRhJTVCc3R1ZGVudEdyYWRlJTVEPTkmZGF0YSU1QmFtb3VudCU1RD0xMDAuMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1716791934),
('EJh7ahf47gvLnJDoF5UKR7yWw1EW5q3axkqwap3l', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlgxY2tZdFFQdWFONWVYV1lCWDV4dDcyTVRYOUlNbUlHdWd2Q0FoRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTI4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcGFnZTI/ZGF0YSU1Ql90b2tlbiU1RD1SWDFja1l0UVB1YU41ZVhXWUJYNXh0NzJNVFg5SU1tSUd1Z3ZDQWhEJmRhdGElNUJhY2Nlc3Nfa2V5JTVEPWJiNmVhOGNkMzA1MTNiZDU4MjRhYzNkZGNiZmRhZjI2JmRhdGElNUJwcm9maWxlX2lkJTVEPXZpdGh1MTAwMzk5JmRhdGElNUJ0cmFuc2FjdGlvbl91dWlkJTVEPTY2NTQ4M2Y4MTRjZGImZGF0YSU1QnJlZmVyZW5jZV9udW1iZXIlNUQ9MTcxNjIwMzMwMjgwMyZkYXRhJTVCc2lnbmVkX2ZpZWxkX25hbWVzJTVEPWFjY2Vzc19rZXklMkNwcm9maWxlX2lkJTJDdHJhbnNhY3Rpb25fdXVpZCUyQ3NpZ25lZF9maWVsZF9uYW1lcyUyQ3NpZ25lZF9kYXRlX3RpbWUlMkNsb2NhbGUlMkN0cmFuc2FjdGlvbl90eXBlJTJDcmVmZXJlbmNlX251bWJlciUyQ2Ftb3VudCUyQ2N1cnJlbmN5JmRhdGElNUJzaWduZWRfZGF0ZV90aW1lJTVEPTIwMjQtMDUtMjdUMTMlM0EwMCUzQTQwWiZkYXRhJTVCbG9jYWxlJTVEPWVuJmRhdGElNUJ0cmFuc2FjdGlvbl90eXBlJTVEPWF1dGhvcml6YXRpb24mZGF0YSU1QmN1cnJlbmN5JTVEPUxLUiZkYXRhJTVCZG9ub3JOYW1lJTVEPWRjemN6JmRhdGElNUJkb25vckVtYWlsJTVEPXRoZXZlbmRyYW52aXRodXJzYW4lNDBnbWFpbC5jb20mZGF0YSU1QmRvbm9yUGhvbmUlNUQ9MDc3MjI1MTc1NyZkYXRhJTVCZG9ub3JBZGRyZXNzJTVEPTI0JTJDJTIwNCUyRjMlMkMlMjBJbml0aXVtJTIwUm9hZCUyQyUyMERlaGl3ZWxhJmRhdGElNUJkb25vclR5cGUlNUQ9UFRBJTIwYW5kJTIwUFBBJTIwTWVtYmVyJmRhdGElNUJkb25hdGlvblR5cGUlNUQ9SG9zdGVsJmRhdGElNUJzdHVkZW50bmFtZSU1RD1mY3NkZiZkYXRhJTVCYWRtaXNzaW9ubm8lNUQ9MzI5OEImZGF0YSU1QnN0dWRlbnRHcmFkZSU1RD05JmRhdGElNUJhbW91bnQlNUQ9OTAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716816067),
('fEYRqtg8EacQL1lLTbUUX7gs4mDafIWoLrlY0Buc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUTdMR2h1V2F2ZVExbjNkTjVkVnY0WjFvNzZTbGpmTzRwNnltSW95NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716259878),
('fkPanxhiG4u8rnLswb942C26R7id2zJWvYvlzRHv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYXVWM0dicnFrTzlaV2dPcjNLRVJ1amtjbERnZW9aZDBZWTJ2UmRiOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTU2OiJodHRwOi8vbG9jYWxob3N0OjgwODAvcGFnZTI/ZGF0YSU1Ql90b2tlbiU1RD1hdVYzR2JycWtPOVpXZ09yM0tFUnVqa2NsRGdlb1pkMFlZMnZSZGI4JmRhdGElNUJhY2Nlc3Nfa2V5JTVEPWJiNmVhOGNkMzA1MTNiZDU4MjRhYzNkZGNiZmRhZjI2JmRhdGElNUJwcm9maWxlX2lkJTVEPXZpdGh1MTAwMzk5JmRhdGElNUJ0cmFuc2FjdGlvbl91dWlkJTVEPTY2NGMyZmMyNDI0NGMmZGF0YSU1QnJlZmVyZW5jZV9udW1iZXIlNUQ9MTcxNjIwMzMwMjgwMyZkYXRhJTVCc2lnbmVkX2ZpZWxkX25hbWVzJTVEPWFjY2Vzc19rZXklMkNwcm9maWxlX2lkJTJDdHJhbnNhY3Rpb25fdXVpZCUyQ3NpZ25lZF9maWVsZF9uYW1lcyUyQ3NpZ25lZF9kYXRlX3RpbWUlMkNsb2NhbGUlMkN0cmFuc2FjdGlvbl90eXBlJTJDcmVmZXJlbmNlX251bWJlciUyQ2Ftb3VudCUyQ2N1cnJlbmN5JmRhdGElNUJzaWduZWRfZGF0ZV90aW1lJTVEPTIwMjQtMDUtMjFUMDUlM0EyMyUzQTE0WiZkYXRhJTVCbG9jYWxlJTVEPWVuJmRhdGElNUJ0cmFuc2FjdGlvbl90eXBlJTVEPWF1dGhvcml6YXRpb24mZGF0YSU1QmN1cnJlbmN5JTVEPUxLUiZkYXRhJTVCZG9ub3JOYW1lJTVEPWRjemN6JmRhdGElNUJkb25vckVtYWlsJTVEPXRoZXZlbmRyYW52aXRodXJzYW4lNDBnbWFpbC5jb20mZGF0YSU1QmRvbm9yUGhvbmUlNUQ9MDc3MjI1MTc1NyZkYXRhJTVCZG9ub3JBZGRyZXNzJTVEPTI0JTJDJTIwNCUyRjMlMkMlMjBJbml0aXVtJTIwUm9hZCUyQyUyMERlaGl3ZWxhJmRhdGElNUJkb25vclR5cGUlNUQ9UFBBJTIwTWVtYmVyJmRhdGElNUJkb25hdGlvblR5cGUlNUQ9U2Nob29sJmRhdGElNUJkb25hdGlvblB1cnBvc2UlNUQ9QnVyc2FyeSUyMEZ1bmQmZGF0YSU1QnN0dWRlbnRuYW1lJTVEPXNlZnNlZCZkYXRhJTVCYWRtaXNzaW9ubm8lNUQ9OTAwMCZkYXRhJTVCc3R1ZGVudEdyYWRlJTVEPTkmZGF0YSU1QmFtb3VudCU1RD05MCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9saXN0MSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1716269010),
('FRh0SAHt8UeSg20Be8gVw9kXyK5IQMmKGMgFzRcA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieFh4bFFDcnZYQ1FCTmRuWTRsam1NU1p6VTB5V1hyQjZKYlNTc3NWaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716260929),
('hq0L1vbaL4VxYKIEfUaKKkm0KBVZtLJj0qhEpL9W', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidGFUMlYza1ZHUEVLVVgyTVBDcVpvMXh4bGM3ODQ1TGFXb0E5SklVSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716259812),
('hVQOSTcACLrAt8SC9JNA8ydv0gGANOA9xX8f5Zlv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieDJsNEgyTjU5ZDhGWmdFZjVTOUY5cGJkcGxhWUg0bThpMlRFdGg4dyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716259163),
('nMVGj1QjuzE3UNaRPmEeueKDvFy5dkW9ljs0ytvV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoialNLU1hQZlc0QTRUekFGVU9aRlRkS1J0NEQyZkV5dGlwcDNxTG5GbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716259557),
('p3Ma79Erqx8iwIC9iPI2UEYmuptsl1AcUqOuKuPL', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNm4xVjdrSjJMZThvS05uSnVHSThUTW9hUFlRUHdZWlh0bmdHME1vYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9saXN0MSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1716262463),
('TEgyGZBXPV9194QKl1zfxZkaS4GwiJtY1qGtad7w', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoienppT0NPSFNIUHlZRHp6U0xCSTlYUzZnMVVIbXdWZVdrUTZ4VE1DSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716270064),
('tgWzXTOYYmlttYlelDE3L2YskckfbkhqYYaK09GU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNWRsTDI0UTJBekFDemFmWVZhTUhNSVM1RVk3NzBkTk9nZEwxS0o0USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716259590);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vithursan Thevendran', 'thevendranvithursan@gmail.com', NULL, '$2y$12$4MA3R1fqg7p2c68VpYYvneoAp8CpdKR9JK3.ZKSbxrWVYoSl.1SLm', NULL, '2024-05-20 21:47:45', '2024-05-20 21:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
