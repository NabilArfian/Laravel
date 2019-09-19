-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 06:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lamasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(10) unsigned NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `id_kategori`, `deskripsi`, `author`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'bebas', 3, '            bebas\r\n        ', 'Saya', '6fb642cb-90e3-4b9c-b4d5-acfe727e4f36_169.jpg', '2019-06-20 02:01:05', '2019-06-20 02:02:03'),
(3, 'Teknologi', 5, '            Ini Teknologi\r\n        ', 'Nabil', 'download (6).jpg', '2019-06-20 02:16:04', '2019-06-20 02:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi', NULL, NULL),
(2, 'Kesehatan', NULL, NULL),
(3, 'Hiburan', NULL, NULL),
(4, 'Berita', NULL, NULL),
(5, 'Keseharian', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id` int(10) unsigned NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `author`, `created_at`, `updated_at`) VALUES
(1, 'asus.png', 'pak puguh', '2019-04-12 05:18:31', '2019-04-12 05:18:31'),
(2, 'Daihatsu_Alya_L_1.jpg', 'Nabil Cowo', '2019-06-20 02:21:07', '2019-06-20 02:21:07'),
(4, '27543.3-d-world-monuments-1920x1080-wallpaper-3922.jpg', 'Nabil Cowo', '2019-07-07 01:57:10', '2019-07-07 01:57:10'),
(5, '14166.3D-Graffiti-44-1024x576.jpg', 'Nabil Cowo', '2019-07-07 02:24:19', '2019-07-07 02:24:19'),
(6, '30313.adidas-fantasy-1920x1080-wallpaper-7610.jpg', 'Nabil Cowo', '2019-07-28 08:36:29', '2019-07-28 08:36:29'),
(7, '7391.232811_hatake_256x256.png', 'Nabil Cowo', '2019-08-13 18:13:04', '2019-08-13 18:13:04'),
(8, '27948.griffin.jpg', 'Nabil Cowo', '2019-08-13 18:13:33', '2019-08-13 18:13:33'),
(9, '5109.IMG-20170830-WA0008.jpg', 'Nabil Cowo', '2019-08-13 18:14:06', '2019-08-13 18:14:06'),
(11, '10235.rpl.png', 'Nabil Cowo', '2019-08-13 18:15:07', '2019-08-13 18:15:07'),
(12, '12312.P7.jpg', 'Nabil Cowo', '2019-08-13 18:16:10', '2019-08-13 18:16:10'),
(13, '31345.P4.jpg', 'Nabil Cowo', '2019-08-13 18:16:40', '2019-08-13 18:16:40'),
(14, '16470.cyclops.jpg', 'Nabil Cowo', '2019-08-13 18:17:33', '2019-08-13 18:17:33'),
(15, '18647.orange-county-choppers-wallpaper.jpg', 'Nabil Cowo', '2019-08-13 18:18:15', '2019-08-13 18:18:15'),
(16, '13764.lego-wallpaper-pack-1-ibrickcity-9.jpg', 'Nabil Cowo', '2019-08-13 18:18:52', '2019-08-13 18:18:52'),
(17, '19629.IMG-20190805-WA0016.jpg', 'Nabil Cowo', '2019-08-13 18:20:00', '2019-08-13 18:20:00'),
(18, '3042.as.png', 'Nabil Cowo', '2019-08-13 18:21:22', '2019-08-13 18:21:22'),
(19, '7027.corel.png', 'Nabil Cowo', '2019-08-13 18:21:53', '2019-08-13 18:21:53'),
(20, '27184.facebook.png', 'Nabil Cowo', '2019-08-13 18:22:45', '2019-08-13 18:22:45'),
(21, '1705.cv nabil arfian.jpg', 'Nabil Cowo', '2019-08-13 18:23:12', '2019-08-13 18:23:12'),
(22, '1070.Linux.jpg', 'Nabil Cowo', '2019-08-13 18:23:43', '2019-08-13 18:23:43'),
(23, '31695.NAMA.jpg', 'Nabil Cowo', '2019-08-13 18:24:24', '2019-08-13 18:24:24'),
(24, '31068.phyton.png', 'Nabil Cowo', '2019-08-13 19:25:38', '2019-08-13 19:25:38'),
(25, '25701.workspace.jpg', 'Nabil Cowo', '2019-08-13 19:33:32', '2019-08-13 19:33:32'),
(26, '13626.bg.jpg', 'Nabil Cowo', '2019-08-13 19:34:31', '2019-08-13 19:34:31'),
(27, '1515.Character Nabil Arfian XI RPL 2.png', 'Nabil Cowo', '2019-08-13 19:34:59', '2019-08-13 19:34:59'),
(28, '20296.cv.jpg', 'Nabil Cowo', '2019-08-13 19:35:30', '2019-08-13 19:35:30'),
(29, '25057.tampil.PNG', 'Nabil Cowo', '2019-08-13 19:36:27', '2019-08-13 19:36:27'),
(31, '5575.20120904_051050_Mazda-Desain-FN.jpg', 'Nabil Cowo', '2019-08-13 19:38:25', '2019-08-13 19:38:25'),
(33, '15133.IMG-20170830-WA0007.jpg', 'Nabil Cowo', '2019-08-13 19:41:06', '2019-08-13 19:41:06'),
(34, '12690.orange-county-choppers-wallpaper.jpg', 'Nabil Cowo', '2019-08-13 19:41:45', '2019-08-13 19:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `jenismember`
--

CREATE TABLE IF NOT EXISTS `jenismember` (
`id` int(10) unsigned NOT NULL,
  `j_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member` int(10) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_01_15_072331_create_category_table', 1),
('2019_02_07_084528_create_blog_table', 1),
('2019_02_16_085421_create_jenismember_table', 1),
('2019_02_16_085614_create_member_table', 1),
('2019_04_12_115056_create_galeri_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nabil Cowo', 'nn@gmail.com', '$2y$10$IAZ1FAkoytyMR5Gmq4mDEeHSKd3TBWyfEOyoz8qLL2pwHpvZxY34y', 'mCy1fqeZ5bgOiVMaEOgxEXLErcNyw46BISJ0rcI2psv6Eh1GdvR3elkON8RQ', '2019-04-12 05:07:38', '2019-08-13 03:52:06'),
(3, 'Dr. Audra Ullrich', 'nils20@example.org', '$2y$10$Kj9/g10J4IURGr4b3UIhV.IGiXX/Cg.pC72KDZi4NVeqyRnXi6r.y', 'Bf9FWdGJYx', '2019-09-17 02:25:52', '2019-09-17 02:25:52'),
(4, 'Miss Tamia Steuber MD', 'hackett.della@example.org', '$2y$10$vkvu1G3tWyJF2XE02FTfnewOqFBXmr.jcTdPg7cbBJhcbPyIHN4he', 'S6Rgeof4HD', '2019-09-17 02:25:55', '2019-09-17 02:25:55'),
(5, 'Dr. Buster Flatley', 'dgraham@example.net', '$2y$10$FICR14llAoOf25.a3oP0aehRTHrSEyENuSy5OdzhrEEoNEIsfUVb.', 'lwFu1KJ1rH', '2019-09-17 02:25:55', '2019-09-17 02:25:55'),
(6, 'Denis Torp', 'alexander.dickens@example.com', '$2y$10$8F0LpsJefwFeugAvsvvpZOnlGU0fSiqhg7NBOWfs8WZz6FapctvVu', 'UBLkAxTiuP', '2019-09-17 02:25:55', '2019-09-17 02:25:55'),
(7, 'Christelle Volkman MD', 'amalia.weimann@example.com', '$2y$10$6KCsCTJJA1PapoYKK85E6uVUlhFp310JDTuFLt0j6NbTPRPCidxd2', 'RIiOcUUQl7', '2019-09-17 02:25:55', '2019-09-17 02:25:55'),
(8, 'Hadley Schowalter', 'isidro.miller@example.org', '$2y$10$wbOUAtsy4LutYPUkdGF/7uZCMXfZhyolC5Fcsaw5r5Sihyitt3gUC', 'HxidZ4ni3C', '2019-09-17 02:25:55', '2019-09-17 02:25:55'),
(9, 'Ali Vandervort PhD', 'hschaefer@example.com', '$2y$10$MsnSTgpb.9.5Hn3KsRtrBe8AO3qixXt7fnHHPNqf82x7IZqJr4zma', 'F0MucAKtMw', '2019-09-17 02:25:55', '2019-09-17 02:25:55'),
(10, 'Prof. Jerad Mertz', 'cbernhard@example.org', '$2y$10$9eagxi9oX5YvawUTqNjKP.SQRg/QHdWVXCkhx4YYDVvjDsDn4nxni', 'AgYgNvehic', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(11, 'Michale Quitzon', 'koch.regan@example.net', '$2y$10$tyrTNKYH2jyiYpIvKoXNcupQpSIIb7EOCmxSn0S2nQkn62JvBO38S', 'NQ0EEToWxG', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(12, 'Prof. Elyse Hoeger', 'ykuhic@example.com', '$2y$10$f0CEsY0YsRboTmi8uOULsOsGKW/mwAsQzcYJSRpchqOljKmlDO/Im', 'dtA18kGL7b', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(13, 'Angelo Rippin', 'shanie.runte@example.com', '$2y$10$rbEx5PepAUC7/s1gA3yKdObgICdRvdOtAtUodCo2zrpRY7XOByS6K', 'aNXbryH5Fp', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(14, 'Devonte Quitzon', 'cordell.stanton@example.net', '$2y$10$Z5BXcwbLVsZ/6bhxnpUMwOb8Yg/FfikFaGqCozrIYMgPQ.E/kpKqe', 'm28mXkl4km', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(15, 'Dr. Lucious Fadel', 'marquis85@example.org', '$2y$10$yNvLeasAFtxz4ozXC2LH3OORFlgKK.S7xKjUox82u7e/R325e3fUK', 'XmsmwUePlK', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(16, 'Mara Kling MD', 'romaguera.urban@example.com', '$2y$10$ddgI/vR8JSguKc388JcgoOYJf74lOkAClu7MqY7nRVKgFsSdxld4.', 'lSWH7w17Lg', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(17, 'Naomi Gleichner I', 'abbey.renner@example.org', '$2y$10$rI1HBMTe3so2HvKyKq6sCOsxIgt9cgSdw/.SkZltZWgeQF8d95M5q', 'vTKa3sST57', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(18, 'Mrs. Reyna Champlin DVM', 'nannie47@example.org', '$2y$10$1209NfmHgOkN7WJpW8lGTeVxR6iiLO6Vs9dNVxe73BZq.qt.R5l4y', 'WnGqMZFoTS', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(19, 'Reed Roberts', 'aimee81@example.org', '$2y$10$63oZNJZC3PZ1Htve6gj8bejEc.6G/XNhPwBxTOhPxAR3xV/KZwbca', 'yOqRaqeGX2', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(20, 'Hailey Hartmann', 'bweimann@example.net', '$2y$10$NZsnCiMV2VQIHFCcMvRXyeUYkgoqhPntyvAhwrycAbelO3sWO0b0i', 'VaMoudcdMG', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(21, 'Amari Haley', 'vincenzo27@example.com', '$2y$10$M1EZhimuOKhVIJIPFn/AB.4COcuqDxqt46U7Mggssb0V2O0VGBxqC', 'iOg95HxFQI', '2019-09-17 02:25:56', '2019-09-17 02:25:56'),
(22, 'Prof. Afton Paucek', 'ubauch@example.com', '$2y$10$5hLPBAXOtM80Ql5GzfZsVukf/l7wKyZHuD7cgaaEfCKPSScCQfaau', 'fr967I8X2J', '2019-09-17 02:25:56', '2019-09-17 02:25:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`), ADD KEY `article_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenismember`
--
ALTER TABLE `jenismember`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `member_email_unique` (`email`), ADD KEY `member_member_foreign` (`member`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `jenismember`
--
ALTER TABLE `jenismember`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `article_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `category` (`id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
ADD CONSTRAINT `member_member_foreign` FOREIGN KEY (`member`) REFERENCES `jenismember` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
