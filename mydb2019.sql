-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 07:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `information_id` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `information_id`, `students_id`, `created_at`, `updated_at`) VALUES
(100, 16, 41, '2019-10-17 00:52:34', '2019-10-17 00:52:34'),
(108, 20, 41, '2019-10-20 16:35:44', '2019-10-20 16:35:44'),
(109, 19, 41, '2019-10-20 16:35:53', '2019-10-20 16:35:53'),
(110, 23, 41, '2019-10-20 16:35:59', '2019-10-20 16:35:59'),
(112, 23, 35, '2019-11-26 20:50:38', '2019-11-26 20:50:38'),
(113, 42, 32, '2020-01-04 09:26:22', '2020-01-04 09:26:22'),
(114, 47, 32, '2020-01-04 09:26:39', '2020-01-04 09:26:39'),
(115, 63, 32, '2020-01-05 04:09:15', '2020-01-05 04:09:15'),
(116, 70, 32, '2020-01-28 15:24:58', '2020-01-28 15:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `location_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_test_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruited_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condidate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_vote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_time_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/Template/Gui2019/img/sample.png',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `location_info`, `date`, `company_name`, `info`, `written_test`, `written_test_content`, `interview`, `industry`, `country`, `recruited_occupation`, `qualification`, `age_limit`, `grade`, `graduate`, `condidate`, `job_vote`, `part_time_job`, `intership`, `logo`, `url`, `created_at`, `updated_at`) VALUES
(19, '111', '2021-02-27', '第一工業大学', '第一工業大学の説明', '有り', 'SPI検査', '学校で行います', '学校', NULL, '教師', 'N1', NULL, '4年生', '無し', '無し', '', '無し', '不可', '/uploads/images/logo/_1572402766.jpg', 'http://ueno.daiichi-koudai.ac.jp/', NULL, '2020-02-13 19:14:36'),
(20, '444', '2016-12-20', 'LABI', 'LABIの説明', '不明', 'SPI検査', '学校で行い', NULL, '特に無し', '販売', 'N2以上', NULL, '4年生', '無し', '無し', '', '有り', '不可', '/uploads/images/logo/labi_1572403366.jpg', 'http://www.yamadalabi.com/', NULL, '2019-11-26 20:05:16'),
(21, '555', '2018-12-20', '東芝株式会社', '東芝株式会社の説明', '有り', '不明', '会社で第一次', NULL, NULL, 'SE', NULL, NULL, '4年生', '無し', '無し', '', '無し', '相談による', '/uploads/images/logo/_1572403388.png', 'https://www.toshiba.co.jp/', NULL, '2019-11-26 20:06:52'),
(23, '777', '2017-06-08', 'ドンキホーテ', 'ドンキホーテの説明', '不明', '無し', NULL, '営業', '中国', NULL, 'N1', '28まで', '4年生', '有り', '無し', '', '有り', '相談による', '/uploads/images/logo/_1572403572.png', 'https://www.donki.com/', NULL, '2019-11-26 20:07:36'),
(24, '333', '2017-01-01', 'ビックカメラ', 'ビックカメラの説明', '有り', '無し', '一次面接　3号館', '小売業', '中国', 'SE', 'N1', '30', '4年生', '有り', '有り', '', '有り', '有り', '/uploads/images/logo/_1572403591.jpg', 'https://www.biccamera.com/', NULL, '2019-11-26 20:08:09'),
(29, '381', '2017-11-07', '日建リース', '会社の説明', '有り', '無し', NULL, '営業', 'ベトナム', NULL, 'N1', '30', '4年生', '有り', '無し', '', '無し', '可能', '/uploads/images/logo/_1574831523.png', 'https://nikken-lease.co.jp/', NULL, '2019-11-26 20:12:03'),
(30, '381', '2017-11-21', '株式会社ラピニクス', '会社の説明', '有り', '有り', '一次面接', '情報系', NULL, 'SE', 'N1', NULL, '4年生', '有り', '無し', '', '無し', '無し', '/uploads/images/logo/_1578057013.jfif', 'https://www.rapinics.co.jp/', NULL, '2020-01-03 04:10:13'),
(63, '381', '2020-10-27', 'FTS株式会社', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploads/images/logo/fts_1578229723.png', 'https://www.fts.co.jp/', '2020-01-04 23:19:01', '2020-01-05 04:08:43'),
(70, '255', '2020-07-03', 'ヤマト運輸株式会社', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploads/images/logo/_1581652131.jfif', 'http://www.kuronekoyamato.co.jp/ytc/recruit/', '2020-01-05 03:37:02', '2020-02-13 18:48:51');

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
(1, '2020_01_06_000000_create_information_table', 1),
(2, '2020_01_06_000001_create_users_table', 1),
(3, '2020_01_06_000002_create_students_table', 1),
(4, '2020_01_06_000003_create_password_resets_table', 1),
(5, '2020_01_06_000005_create_sermina_table', 1),
(6, '2020_01_06_000006_create_book_table', 1),
(7, '2020_01_19_024156_create_sessions_table', 1),
(8, '2020_01_21_081513_edit_student_table', 1);

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
-- Table structure for table `sermina`
--

CREATE TABLE `sermina` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serminaName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sermina`
--

INSERT INTO `sermina` (`id`, `serminaName`, `teacherName`, `created_at`, `updated_at`) VALUES
(2, '渡辺研究室', '渡辺　哲', '2019-09-21 19:09:56', '2019-09-21 19:09:56'),
(3, '第一工大上野研究室', '上野　仁', '2019-09-21 19:16:07', '2019-09-21 19:16:07'),
(4, '建宮研究室', '建宮　努', '2019-09-21 19:17:15', '2019-09-21 19:17:15'),
(5, '衣川研究室', '衣川 功一', '2019-09-21 19:17:39', '2019-09-21 19:17:39'),
(6, '木下研究室', '木下 和歩', '2019-09-21 19:18:23', '2019-09-21 19:18:23'),
(7, '陳研究室', '陳　泓', '2019-09-21 19:18:45', '2019-09-21 19:18:45'),
(8, '丹野研究室', '丹野　健一郎', '2019-09-21 19:19:10', '2019-09-21 19:19:10'),
(9, '鮑研究室', '鮑 慎琪', '2019-09-21 19:19:31', '2019-09-21 19:19:31'),
(10, '第一工大鈴木研究室', '鈴木 康治', '2019-09-21 19:20:25', '2019-09-21 19:20:25'),
(11, '平田研究室', '平田 昌子', '2019-09-21 19:20:51', '2019-09-21 19:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7tQh4e3FJxgTr1tug2STNIXTgBgvZ4fNuBB0BBuY', 32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaGFwWjRxUTlCTTd6eU1oR2pPUUhYT05qU3REWTNrdGFaQ09QSWlmeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvZ3VpMjAxOS9wdWJsaWMvYWRtaW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMjt9', 1582082236),
('eQ5EqFKjwMliK6hMkldydsAWO8ZkLdiPhCfVuAQS', 32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTm91UnVxZW5rb0oxTHBpYjlqZlhwMUxqQzBTUm5zbGxiRGViWlNHbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvZ3VpMjAxOS9wdWJsaWMvcHJvZmlsZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjMyO30=', 1582081948),
('LlrSU6UvDwE0Hs8JARh294XwOrIY3ipHb7UiRPa0', 32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVlF6bG5GN2FzWmZKMlZhQnp0OWNId2RHdXdWeUZhV2loUm5YZ1VJVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvZ3VpMjAxOS9wdWJsaWMvcHJvZmlsZSI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMjt9', 1582081373),
('N0AhWhfvDEhlZZbeQYSvBi5KpEkuaet2bAaQrhrI', 32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkhJTDVVR3E1dDRaWkxNYmtrb1dkSzBrREdmRXFIRHd3ZEVGVWRyTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3QvZ3VpMjAxOS9wdWJsaWMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMjt9', 1582085618),
('WeUdrihEUEu4eHfzfQtoYQ4zdf1o8wUdtf8dMvTT', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNTh6a1diMDZrSXFFcmd3Y2pzcEVoRVVyUzY3bGtHWk9vUjVyOGRYcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1582081612),
('Z5JFpd4cGpywNBfv2I3tI5fLRQH7dpeIeZjbZAIG', 32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaGk4QjR1dTRBTHVqb2VMaWlFRXVvR1ZORjJoNDAzMk9EaWZqRzRJRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3QvZ3VpMjAxOS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMjt9', 1582086513);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_code`, `name`, `password`, `picture`, `email`, `seminar_room`, `grade`, `resume`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(32, '16TE435', 'Duc', '$2y$10$z3YEofTROwvneoXju5dMCeGaH0kTG6e39UoS33YgEB9y/JmE9g62W', '/uploads/images/user/duc_1580628423.jpg', 'nguyendinhduc269@gmail.com', '鮑研究室', '1', NULL, 1, 'p1zhE5qaJe5TuszACQa5ixhUMKwKNBofIn2i6v95TRPhoa00fTY2595q9cPc', NULL, '2020-02-01 22:27:03'),
(34, '16TE436', 'Kuro', '$2y$10$P7.Fe/KwaNJPhA8863sriOgaVw0Cjq7UAvIkvFyQ0VX41StHyZBM2', '/uploads/images/user/_1566915230.jpg', 'kuroneko@gmail.com', '木下研究室', '4', NULL, 0, NULL, NULL, '2020-01-28 04:09:48'),
(35, '17TE222', '山本　太郎', '$2y$10$/Vg1eLNKKFueiKxj/w1WEu5mznX1fPkgByNKt3TkfTiFBG8znf/1W', '/uploads/images/user/_1566915445.jpg', 'yamamototaro@gmail.com', '渡辺研究室', '3', NULL, 0, NULL, NULL, '2020-01-28 04:10:03'),
(36, '17TE999', '大和　太郎', '$2y$10$zw3aDs4SVS5Zn2fzEsm82uZF3Bu.5FTcAWVGnSZy11PFnQJBXlJaq', '/uploads/images/user/user.jpg', 'yamatotaro@gmail.com', '丹野研究室', '3', NULL, NULL, NULL, NULL, NULL),
(37, '17TE888', '川口　みつき', '$2y$10$MH1DJI/j6PS2nFWKYdLg6uoRbwKLjUtk4Ewoe5JqXU.cM61Y.1TE2', '/uploads/images/user/_1566915445.jpg', 'kawaguchimitsuki@gmail.com', '無し', '1年', NULL, NULL, NULL, NULL, NULL),
(47, '11TE111', 'Tèo', '$2y$10$km581n/n6VTFr8KUm/xfM.C9v36fo0Vxc0xkE2DLCcAIahdrDRer6', '/uploads/images/user/_1579345019.jfif', 'tao@gmail.com', '研究室選択', '1', NULL, NULL, NULL, '2020-01-21 03:18:40', '2020-01-21 03:18:40'),
(48, '16TE001', 'tarokunbede', '$2y$10$6EnrIwnwQqk/S4sJbStDu.yjVT0Ai1ZiXRhZYCNzoq8gYy.oIyeLi', '/uploads/images/user/_1575424069.jpg', 'taro@example.com', '渡辺研究室', '1', NULL, 0, NULL, '2020-01-22 05:16:48', '2020-01-22 06:17:48'),
(49, '19TE999', 'Luffy', '$2y$10$OMcu8GbmD3K6o3GNEkdI5O2YUAB7hIcuYQo.emsMLGrodqyV5jRaa', '/uploads/images/user/nguyen_1581904252.jpeg', 'nguyen@example.com', '渡辺研究室', '1', NULL, NULL, NULL, '2020-02-16 16:49:32', '2020-02-16 16:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infor` (`information_id`),
  ADD KEY `student` (`students_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `information_id_unique` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sermina`
--
ALTER TABLE `sermina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_code_unique` (`student_code`),
  ADD UNIQUE KEY `student_code` (`student_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sermina`
--
ALTER TABLE `sermina`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
