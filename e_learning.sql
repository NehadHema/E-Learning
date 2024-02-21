-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 08:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userName`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'a@admin.com', '$2a$06$lJlCdNlLS2EXr4zfHMtt8.L9aKro.XApb/iYjGXLOzsy7HHsi4ZqO', '2023-06-12 04:57:10', '2023-06-12 04:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `created_at`, `updated_at`, `name_ar`) VALUES
(10, 'programming', NULL, NULL, 'البرمجة'),
(11, 'languages', NULL, NULL, 'اللعات');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `city_en` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `work_hours_en` varchar(255) NOT NULL,
  `map` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `city_ar` varchar(255) NOT NULL,
  `address_ar` varchar(255) NOT NULL,
  `work_hours_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name_en`, `logo`, `favicon`, `city_en`, `address_en`, `work_hours_en`, `map`, `phone`, `email`, `facebook`, `twitter`, `insta`, `created_at`, `updated_at`, `message`, `subject`, `name_ar`, `city_ar`, `address_ar`, `work_hours_ar`) VALUES
(1, 'e_learning', 'logo.png', 'favicon.png', 'Tanta,Egypt', 'Bahr Street', 'Sun to Thurs\r\n9 AM to 5 PM', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3420.844233783695!2d31.17054297538297!3d30.974828774468488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7a4a8170ffcb5%3A0x85e29195b9793e83!2sEl%20Bahr%20St%2C%20Al%20Mahalah%20Al%20Kubra%20(Part%202)%2C%20Gharbia%20Governorate!5e0!3m2!1sen!2seg!4v1686387849942!5m2!1sen!2seg\" width=\"1000\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '01201874003', 'engnehad2021@gmail.com', 'https://facebook.com', 'https://twitter.com/', 'https://instagram.com', NULL, NULL, '', '', 'التعلم الالكتروني', 'مصر/طنطا', 'شارع البحر', 'من الاحد الى الخميس\r\n9 صباحا الى 5 مساءًا');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `smallDesc_en` varchar(255) NOT NULL,
  `desc_en` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `smallDesc_ar` varchar(255) NOT NULL,
  `desc_ar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `smallDesc_en`, `desc_en`, `price`, `image`, `category_id`, `trainer_id`, `created_at`, `updated_at`, `smallDesc_ar`, `desc_ar`) VALUES
(15, 'HTML', 'HTML is the standard markup language for Web pages.', 'With HTML you can create your own Website.\r\n\r\nHTML is easy to learn - You will enjoy it!', '2000.00', '11.png', 10, 1, NULL, NULL, 'HTML هي لغة الترميز القياسية لصفحات الويب.', 'باستخدام HTML ، يمكنك إنشاء موقع الويب الخاص بك.\r\n\r\nلغة HTML سهلة التعلم - ستستمتع بها!'),
(17, 'PHP', 'PHP stands for Hypertext Preprocessor', 'PHP is a widely-used, open source scripting language.\r\nPHP scripts are executed on the server.\r\nPHP is free to download and use.', '6000.00', '21.jpg', 10, 2, NULL, NULL, 'PHP stands for Hypertext Preprocessor', 'PHP هي لغة برمجة مفتوحة المصدر مستخدمة على نطاق واسع.\r\nيتم تنفيذ نصوص PHP على الخادم.\r\nPHP مجاني للتنزيل والاستخدام.'),
(18, 'CSS3', 'CSS stands for cascading style sheet 3', 'CSS is the language we use to style an HTML document.\r\n\r\nCSS describes how HTML elements should be displayed.', '3000.00', '12.png', 10, 1, NULL, NULL, 'CSS stands for cascading style sheet 3', 'CSS هي اللغة التي نستخدمها لتصميم مستند HTML.\r\n\r\nيصف CSS كيفية عرض عناصر HTML.'),
(20, 'English', 'English Learning', 'English Learning Course contains vocab and dialogs', '4000.00', 'wRM7ZD1coJ4mIJy7QMs4bG2co2V2xWFPRTQcGjAN.jpg', 11, 7, '2023-08-31 09:14:13', '2023-08-31 09:21:43', 'تعلم الانجليزية', 'دورة تعلم الانجليزية تشمل على الكلمات والمحادثات');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('approved','pending','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 20, 2, 'approved', NULL, NULL),
(6, 15, 2, 'pending', NULL, NULL),
(7, 17, 1, 'approved', NULL, NULL),
(8, 20, 7, 'pending', NULL, NULL),
(9, 17, 5, 'pending', NULL, NULL),
(10, 18, 3, 'pending', NULL, NULL),
(11, 15, 7, 'approved', NULL, NULL);

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Amer', 'a@g.com', NULL, 'student', '2023-06-11 09:22:16', '2023-06-11 09:22:16'),
(2, 'nehad', 'engnehad2021@gmail.com', NULL, 'software engineering', '2023-07-16 03:29:47', '2023-07-16 03:29:47'),
(3, 'nehad', 'engnehad2021@gmail.com', 'besmellah elrahman elrahim', 'allah', '2023-07-20 03:55:31', '2023-07-20 03:55:31'),
(4, 'noha', 'engnehad2021@gmail.com', 'besmellah', 'allah', '2023-07-20 03:56:09', '2023-07-20 03:56:09'),
(5, 'ffff', 'engnehad2021@gmail.com', 'gggg', 'ggg', '2023-07-20 04:08:14', '2023-07-20 04:08:14'),
(6, 'aaa', 'engnehad2021@gmail.com', 'aaa', 'www', '2023-07-20 04:09:49', '2023-07-20 04:09:49'),
(7, 'ضضضضض', 'engnehad2021@gmail.com', 'للللضضض', 'tttt', '2023-07-20 05:13:02', '2023-07-20 05:13:02'),
(8, 'gggg', 'engnehad2021@gmail.com', 'ggggg', 'ggggg', '2023-07-21 03:35:58', '2023-07-21 03:35:58'),
(9, 'gggg', 'engnehad2021@gmail.com', 'ggggg', 'ggggg', '2023-07-21 03:38:21', '2023-07-21 03:38:21'),
(10, 'gggggggg', 'engnehad2021@gmail.com', 'hello', 'jjjj', '2023-07-21 03:39:07', '2023-07-21 03:39:07'),
(11, 'qqq', 'engnehad2021@gmail.com', 'ggg', 'aaa', '2023-07-21 04:06:12', '2023-07-21 04:06:12'),
(12, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:21:30', '2023-07-21 04:21:30'),
(13, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:28:04', '2023-07-21 04:28:04'),
(14, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:28:13', '2023-07-21 04:28:13'),
(15, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:28:18', '2023-07-21 04:28:18'),
(16, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:30:34', '2023-07-21 04:30:34'),
(17, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:32:10', '2023-07-21 04:32:10'),
(18, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:35:12', '2023-07-21 04:35:12'),
(19, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:36:57', '2023-07-21 04:36:57'),
(20, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:38:35', '2023-07-21 04:38:35'),
(21, 'dddd', 'engnehad2021@gmail.com', 'ddd', 'eee', '2023-07-21 04:39:16', '2023-07-21 04:39:16'),
(22, 'aaaaaaaaaa', 'gg@yahoo.com', 'ggggggggg', 'nnnnnn', '2024-01-15 06:55:52', '2024-01-15 06:55:52'),
(23, 'ssssssssss', 'xx@ccc.com', 'gggggggggg', 'hhhhhhhhhhh', '2024-01-15 07:08:09', '2024-01-15 07:08:09');

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
(38, '2023_05_17_040954_create_homes_table', 1),
(52, '2014_10_12_000000_create_users_table', 2),
(53, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(54, '2019_08_19_000000_create_failed_jobs_table', 2),
(55, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(56, '2023_05_20_061328_create_categories_table', 2),
(57, '2023_05_20_061350_create_trainers_table', 2),
(58, '2023_05_20_061355_create_courses_table', 2),
(59, '2023_05_20_061430_create_students_table', 2),
(60, '2023_05_20_061457_create_admins_table', 2),
(61, '2023_05_20_065649_create_course_student_table', 2),
(62, '2023_05_20_195019_model', 2),
(63, '2023_05_24_054522_create_tests_table', 2),
(64, '2023_06_08_093641_create_contacts_table', 2),
(65, '2023_06_09_204210_create_site_contents_table', 2),
(66, '2023_06_10_071412_create_newsletter_table', 2),
(67, '2023_06_10_071639_create_messages_table', 2),
(68, '2023_06_11_111927_update-in-messages-table', 3),
(69, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(70, '2023_06_24_134511_create_sessions_table', 4),
(71, '2023_06_24_141216_role', 5),
(72, '2023_06_24_141230_role_perimission', 5),
(73, '2023_06_24_141239_permission', 5),
(75, '2023_07_20_050904_contacts', 6),
(76, '2023_07_20_051214_add_message_to_contacts_table', 6),
(77, '2023_07_20_051304_update_contacts_table', 7),
(78, '2023_07_21_064730_create_jobs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'EngNehad2021@gmail.com', '2023-07-20 04:35:59', '2023-07-20 04:35:59');

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
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard-name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard-name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
('12FQzFzo6hE0BXoZ1KCgGyvBjqekX6xoRp9EUC55', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTmNoOW1pU3B4amt2V2l3TXdjb0hXajRyZlNmZTBEWHdvOEJHbHd2UiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1697115778),
('1cxySjTwgnIrFZvNBuFScxgK18aef8W1gwH1FPZ6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMDRiVnFzUkhyWWlJUkdkQVJNdVl5TUVNUjc4MTR2TTVrS2hJVjFwViI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjYzOiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1697123133),
('5UBqUWqKBxat7RwVq1FEBYqRH6OVFgZLiOHp4NRM', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZmZ0UW00bEpWbXVNRm5TeldjdzZNUWlrb2JuNExBTVlZR01yWXVvVSI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjcyOiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljL2Rhc2hib2FyZC9sb2dvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImxhbmciO3M6MjoiYXIiO3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NjU6Imh0dHA6Ly9sb2NhbGhvc3QvcGhwL2xhcmF2ZWwvd29ya3Nob3AvZS1sZWFybmluZy9wdWJsaWMvZGFzaGJvYXJkIjt9fQ==', 1693497153),
('hDiJQRIXx52RjjyvL4WtsAE4k2OkI8jIldnZ5QIP', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNHJmSlFacDBoRU9KZU9lVDV5WDNXc1hVQlFjaHFQdTVZakNnNm9sciI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1696925252),
('N7SuLtljQGhHRvsroaeWO2CJBEu8dkAJwlTI3kEn', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWVhQOWVJT2E2QTl6eXdIUU9xallKTTMzcjFQZG40MjlFR0ZRQ0U1bSI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vbG9jYWxob3N0L3BocC9lLWxlYXJuaW5nL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoibGFuZyI7czoyOiJhciI7fQ==', 1705735003),
('ozTtghJVhZxdWuRFJxyBrbktsQpoPIOAtE0FdwV6', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZnM4MFd6VlpVcGtDUWJueDY5RTZKdlI5bm9nd0w1cjlRcWxMZGVveSI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1697019950),
('qJQwiCvtM1LGWW0rV6LFXEoslVzBRqwUyYi11z1V', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRDVvdHdKTVc2dWFIaWU1VGxaMmVLYnlEWE5BZ3ptdDk1ZlBlZFlXTSI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjYzOiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1697522598),
('TNw3mgxJHS069NvyhB9Y5pU0Fkb1BPNufUpeeAXp', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV3hPM0QxcUZjbWhwS3AyZ0FnNVlyZ3B3aHFXYk5zc0NsSW1zczF3eCI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vbG9jYWxob3N0L3BocC9lLWxlYXJuaW5nL3B1YmxpYy9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1705309692),
('wMHbMDaDUeNXLn0QuTd0o0ZKKFtrNrm2IhFfUtAO', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3h4b21yZ0ZtQm5qbUZYR0p3Ym5VSGlTUmhnbW9CVnpDRzMxak9WQSI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1696856569),
('x0RrMEUKMM5HeAmk46jXN4u6u690R0GRFLfiSMv0', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidlVzYW9XelVHTTlrRTJuRlNYMWxVeGdLUmZtcGFUMVJlUWlvQUU2ZiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjcxOiJodHRwOi8vbG9jYWxob3N0L3BocC9sYXJhdmVsL3dvcmtzaG9wL2UtbGVhcm5pbmcvcHVibGljL2Rhc2hib2FyZC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NjU6Imh0dHA6Ly9sb2NhbGhvc3QvcGhwL2xhcmF2ZWwvd29ya3Nob3AvZS1sZWFybmluZy9wdWJsaWMvZGFzaGJvYXJkIjt9fQ==', 1702884483);

-- --------------------------------------------------------

--
-- Table structure for table `site_contents`
--

CREATE TABLE `site_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_en` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_contents`
--

INSERT INTO `site_contents` (`id`, `name`, `content_en`, `created_at`, `updated_at`, `content_ar`) VALUES
(1, 'testominial', '{\"title_en\":\"TESIMONIALS\",\"subtitle_en\":\"Happy Students\"}', '2023-06-10 06:46:49', '2023-06-10 06:46:49', '{\"title_ar\":\"التوصيات\",\"subtitle_ar\":\"الطلاب السعداء\"}'),
(2, 'banner', '{\"title_en\":\"EVERY Student YEARNS TO LEARN\",\"subtitle_en\":\"Making Your World Better\",\"desc_en\":\"Learning is the process of acquiring new understanding, knowledge, behaviors, skills, values, attitudes, and preferences.\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"title_ar\":\"كل طالب يتعلم\",\"subtitle_ar\":\"نجعل عالمك أفضل\",\"desc_ar\":\"التعلم هو عملية اكتساب فهم ومعرفة وسلوكيات ومهارات وقيم ومواقف وتفضيلات جديدة.\"}'),
(3, 'awesome', '{\"subtitle_en\":\"Awesome Feature\",\"desc_en\":\"You will take alot of  projects to help you to get work\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"ميزة رائعة\",\"desc_ar\":\"سوف تأخذ الكثير من المشاريع لمساعدتك في الحصول على عمل\"}'),
(4, 'subtitle1', '{\"subtitle_en\":\"Better Future\",\"desc_en\":\"You will take alot of  projects to help you to get work\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"مستقبل افضل\",\"desc_ar\":\"سوف تأخذ الكثير من المشاريع لمساعدتك في الحصول على عمل\"}'),
(5, 'subtitle2', '{\"subtitle_en\":\"Qualified Trainers\",\"desc_en\":\"We have trainers at the highest level\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"مدربين مؤهلين\",\"desc_ar\":\"يوجد لدينا مدربين على اعلى مستوى\"}'),
(6, 'subtitle3', '{\"subtitle_en\":\"Job Oppurtunity\",\"desc_en\":\"We will help you to be ready for the job\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"فرصة عمل\",\"desc_ar\":\"سنساعدك لتكون مهيأ لسوق العمل\"}'),
(7, 'about', '{\"title_en\":\"ABOUT US\",\"subtitle_en\":\"Learning with Love\",\"desc_en\":\"Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we empower organizations and individuals with flexible and effective skill development\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"title_ar\":\"معلومات عنا\",\"subtitle_ar\":\"التعلم بالحب\",\"desc_ar\":\"سواء كنت تريد التعلم أو مشاركة ما تعرفه ، فقد وصلت إلى المكان الصحيح. كوجهة عالمية للتعلم عبر الإنترنت ، نقوم بتمكين المنظمات والأفراد من خلال تنمية المهارات المرنة والفعالة\"}'),
(8, 'courses', '{\"subtitle_en\":\"POPULAR COURSES\",\"desc_en\":\"Courses\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"الدورات الشائعة\",\"desc_ar\":\"الدورات\"}'),
(9, 'advance', '{\"title_en\":\"ADVANCE FEATURE\",\"subtitle_en\":\"Our Advance Educator Learning System\",\"desc_en\":\"We have training courses on advanced interactive multimedia information technology skills for corporate clients. Every course we publish is pedagogically sound and designed to provide the learner with the best possible learning experience.\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"title_ar\":\"ميزة متقدمة\",\"subtitle_ar\":\"نظام التعلم المتقدم للمعلم الخاص بنا\",\"desc_ar\":\"لدينا دورات تدريبية على مهارات تكنولوجيا المعلومات للوسائط المتعددة التفاعلية المتطورة لعملاء الشركات . كل دورة ننشرها سليمة من الناحية التربوية ومصممة لتزويد المتعل'),
(10, 'advance1', '{\"subtitle_en\":\"Learn Anywhere\",\"desc_en\":\"We share knowledge with the world\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"تعلم في أي مكان\",\"desc_ar\":\"نحن نشارك المعرفة مع العالم\"}'),
(11, 'advance2', '{\"subtitle_en\":\"Expert Teacher\",\"desc_en\":\"Our instructors are real people who are passionate about sharing what they know with students all over the world.\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"subtitle_ar\":\"مدرس خبير\",\"desc_ar\":\"مدرسونا هم أناس حقيقيون متحمسون لمشاركة ما يعرفونه مع الطلاب في جميع أنحاء العالم.\"}'),
(12, 'testominial', '{\"title_en\":\"TESIMONIALS\",\"subtitle_en\":\"Students\' opinions\"}', '2023-06-10 06:47:15', '2023-06-10 06:47:15', '{\"title_ar\":\"التوصيات\",\"subtitle_ar\":\"اراء الطلبة\"}');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialty` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name_en`, `name_ar`, `email`, `specialty`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'أحمد', 'a@gmail.com', 'student', NULL, NULL),
(2, 'Ali', 'علي', 'f@yahoo.com', 'teacher', NULL, NULL),
(3, 'Nader', 'نادر', 'n@gmail.com', 'teacher', NULL, NULL),
(4, 'Taha', 'طه', 't@y.com', 'student', '2023-06-11 09:49:26', '2023-06-15 03:45:52'),
(5, 'Nada', 'ندى', 'nada@gmail.com', NULL, '2023-06-11 09:58:23', '2023-06-11 09:58:23'),
(7, 'Maha', 'مها', 'm@y.com', 'student', '2023-06-15 03:31:22', '2023-06-15 03:31:22'),
(8, 'Karolann Kutch DDS', 'كارولان كوتش DDS', 'mcclure.jeanie@example.org', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(9, 'Dr. Tyree Kautzer II', 'الدكتور تيري كوتزر الثاني', 'joy.schultz@example.com', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(10, 'Sophie Bergnaum', 'صوفي بيرغنوم', 'ignatius.dickens@example.net', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(11, 'Harvey Jast', 'هارفي جاست', 'romaguera.julianne@example.net', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(12, 'Asa Lebsack', 'آسا ليبساك', 'wiegand.raina@example.com', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(13, 'Osbaldo Wuckert', 'أوسبالدو ووكيرت', 'jacobson.stuart@example.com', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(14, 'Ansley Lind', 'أنسلي ليند', 'duane.bernier@example.net', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(15, 'Carolina Runolfsson', 'كارولينا رونولفسون', 'ehaag@example.org', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(16, 'Coleman Haag', 'كولمان هاج', 'pwolf@example.org', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(17, 'Dr. Kathlyn Ferry II', 'الدكتورة كاثلين فيري الثاني', 'umurphy@example.net', NULL, '2023-07-23 09:51:37', '2023-07-23 09:51:37'),
(18, 'Adan Willms V', 'أدان ويلمس V', 'minnie26@example.net', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(19, 'Hester Reichert', 'هيستر رايشرت', 'oschultz@example.net', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(20, 'Oma Kutch', 'أوما كوتش', 'ellsworth28@example.org', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(21, 'Emelie Connelly', 'إميلي كونيلي', 'cremin.ida@example.org', NULL, '2023-07-23 09:55:01', '0000-00-00 00:00:00'),
(22, 'Maxime Schneider', 'ماكسيم شنايدر', 'camylle.padberg@example.org', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(23, 'Brain Price', 'براين برايز', 'lola.bogan@example.com', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(24, 'Alize Sipes', 'أليز سايبس', 'qkreiger@example.org', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(25, 'Kris Shields', 'كريس شيلدز', 'gutkowski.antonietta@example.net', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(26, 'Leila Huels', 'ليلى هولز', 'eula54@example.com', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(27, 'Anna Kilback', 'آنا كيلباك', 'qratke@example.com', NULL, '2023-07-23 09:55:01', '2023-07-23 09:55:01'),
(28, 'Prof. Cody Tromp DVM', 'البروفيسور كودي ترومب DVM', 'mills.leo@example.com', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(29, 'Cheyenne Hill', 'شايان هيل', 'tillman95@example.org', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(30, 'Mr. Alvah Borer', 'ألفاه بورير', 'preichel@example.net', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(31, 'Abbie Metz II', 'آبي ميتز الثاني', 'zulauf.rosie@example.net', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(32, 'Lane Eichmann', 'لين ايخمان', 'hodkiewicz.easton@example.com', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(33, 'Dr. Dusty Watsica', 'داستي واتسيكا', 'oarmstrong@example.org', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(34, 'Dr. Madaline Feest MD', 'مادلين فيست ', 'eleanora.ryan@example.net', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(35, 'Mr. Nasir Jast', 'ناصر جاست', 'monahan.mustafa@example.com', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(36, 'Dr. Sophia Lind DVM', 'صوفيا ليند DVM', 'torn@example.com', NULL, '2023-07-23 09:55:40', '2023-07-23 09:55:40'),
(38, 'Ali Hassan', 'علي حسن', 'h@y.com', 'student', '2023-08-31 10:35:03', '2023-08-31 10:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `spec_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `desc_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) NOT NULL,
  `spec_ar` varchar(255) NOT NULL,
  `desc_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name_en`, `spec_en`, `image`, `desc_en`, `created_at`, `updated_at`, `name_ar`, `spec_ar`, `desc_ar`) VALUES
(1, 'Ahmed', 'student', '1.png', '\r\nI would like to thank all the course instructors for their good care and explanation.', NULL, NULL, 'أحمد', 'طالب', '.أود أن أشكر جميع مدربين الدورة على حسن العناية والشرح'),
(2, 'Maher', 'teacher', '2.png', '\r\nI advise anyone who wants to learn languages ​​to join the academy for their comprehensive explanation.', NULL, NULL, 'ماهر', 'مدرس', ' .انصح من يريد تعلم اللغات ان يلتحق بالاكاديمية لشرحهم الوافي'),
(3, 'Khaled', 'engineer', '3.png', 'I would like to thank all those who established this academy due to what they offer.', NULL, NULL, 'خالد', 'مهندس', ' .احب اشكر كل من قاموا على تاسيس هذه الاكاديمية نظرا لما يقدموه');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name_en`, `phone`, `image`, `specialty`, `created_at`, `updated_at`, `name_ar`) VALUES
(1, 'Ahmed', NULL, '1.png', 'programming', '2023-06-10 06:49:45', '2023-06-10 06:49:45', 'أحمد'),
(2, 'Mahmoud', NULL, '1rv6B4SkcRfXKGOq3G9TBCqaiPAOTEkbG322iV3o.jpg', 'programming', '2023-06-10 06:49:45', '2023-06-14 04:41:02', 'محمود'),
(3, 'Taha', NULL, 'v2kHwIBRbPiUNaVxIS3sYNRIkgl4WytpubGUtFpF.jpg', 'programming', '2023-06-10 06:49:45', '2023-06-14 04:44:14', 'طه'),
(5, 'Mohamed', NULL, '5.png', 'English', '2023-06-10 06:49:45', '2023-06-10 06:49:45', 'محمد'),
(6, 'Mayada', '01201875469', 'HAillCtCjf1KmnwNh76gEz0La3udENZE9lsjg6tV.jpg', 'teacher', '2023-06-12 20:09:51', '2023-06-12 20:09:51', 'ميادة'),
(7, 'Nehad', '01204320545', '2VzsLCZue8AB33Q99QuYZSmuOjPSHCYn165KE4bG.jpg', 'Engineer', '2023-06-14 03:46:27', '2023-06-14 03:46:27', 'نهاد'),
(8, 'Nader', '01245788964', 'WAnkWcRSViHkdiC01vXKlbm314DBLnYV4Oei5FY4.jpg', 'French Teacher', '2023-06-14 04:50:02', '2023-06-14 04:50:02', 'نادر'),
(9, 'Ali', '01043074003', 'BXM2Nrd8xveudJGvAVMsdRsq25KbcIr8ipZuSO7G.png', 'English Teacher', '2023-08-31 09:38:21', '2023-08-31 09:41:03', 'علي');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`),
  ADD KEY `courses_trainer_id_foreign` (`trainer_id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`),
  ADD KEY `course_student_student_id_foreign` (`student_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_contents`
--
ALTER TABLE `site_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_contents`
--
ALTER TABLE `site_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
