-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 11:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dim`
--
CREATE DATABASE IF NOT EXISTS `db_dim` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_dim`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'BEwtk9M1UwhfRUztL8JXw8w7dIB0HCrugRRu0P18.png', 'SIPLah', '2023-09-19 23:27:25', '2023-09-19 23:38:34'),
(2, 'a8pQ5F8EwUfLsNGzogKFG0ydCwqL3IEAt4fPvE7f.png', 'E-Catalogue', '2023-09-19 23:38:59', '2023-09-19 23:38:59'),
(3, 'bPRxWjWq8gJEW9APClpy0d9P2DEECBReBkTAQrpm.png', 'Bela Pengadaan', '2023-09-19 23:39:15', '2023-09-19 23:39:15'),
(4, 'yIQOqyP0VwLM9H3UowAfamBoyzWXf0pvNrOw6zUC.png', 'MBiz', '2023-09-19 23:39:27', '2023-09-19 23:39:27'),
(5, 'jlcaWNCWbRKKlX28VA0ekyanSdfD94qJfsdz4T6c.png', 'Advan', '2023-09-19 23:48:21', '2023-09-19 23:48:21'),
(6, 'IWWMeqCXJSijxo7F0E3iF97rNuEpbD9yiNwnxaWe.png', 'Asus', '2023-09-19 23:48:32', '2023-09-19 23:48:32'),
(7, 'YloE7NnpGYJsxPlmfi7C3qmULtjfRlvyHyGw1z5w.png', 'Axioo', '2023-09-19 23:48:43', '2023-09-19 23:48:43'),
(8, 'nTxKCAaA1yktW1N48ezPKFxJBL29INB3rWzPBKsc.png', 'Brother', '2023-09-19 23:48:55', '2023-09-19 23:48:55'),
(9, 'O4pBLdAZDKVk3q8NJlhIMyVS5IyQoXCbAxQhQmwQ.png', 'Cannon', '2023-09-19 23:49:08', '2023-09-19 23:49:08'),
(10, 'LRUFTEfJAoaID95dfCBJoi3MAh00G5lPGuH1wFSR.png', 'Dell', '2023-09-19 23:49:22', '2023-09-19 23:49:22'),
(11, '3ekrDH6aeJL4eBHGagASlpijy4yMg8ktkFtagDmv.png', 'Epson', '2023-09-19 23:49:33', '2023-09-19 23:49:33'),
(12, '9HjYzMS80vzhzFyu4qcwZ4IFXu8O4SgdlsthlMT3.png', 'HP', '2023-09-19 23:49:45', '2023-09-19 23:49:45'),
(13, 'X9XfkaPw03pwQtDs1s2EO9FMW5Y8D59TgOd0wX1h.png', 'Lenovo', '2023-09-19 23:50:07', '2023-09-19 23:50:07'),
(14, '6bQMeHD8TiSx5yHNPCQjsEVCsp08NrFLBIMDvNL0.png', 'Acer', '2023-09-19 23:50:17', '2023-09-19 23:50:17'),
(15, 'Kzj3BZwviLfXrohkkgBnzUmxeG4J91dwhmZZlvYh.png', 'MSI', '2023-09-19 23:50:56', '2023-09-19 23:50:56'),
(16, '9HmNVYFLUan8hnHcOeJG34MmCMPvg2mFsiFDuQvk.png', 'Samsung', '2023-09-19 23:51:22', '2023-09-19 23:51:22'),
(17, '3UUAPsSeCn8AyIAOmF52vDnCzqlWe3nlHjC41huL.png', 'SPC', '2023-09-19 23:51:38', '2023-09-19 23:51:38'),
(18, 'Q8voEAdP9NPXsDqjp6rqxrFzGUvij5V1HPf3Xpyn.png', 'Zyrex', '2023-09-19 23:51:49', '2023-09-19 23:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'q2mzIwWksEENHvXlbs0CiguuKAaMFHboo9iYfIMl.png', 'RSUD Ibnu Sina', '2023-09-19 18:50:56', '2023-09-19 18:50:56'),
(2, '1CdNUAFLpfbAt85R4RYZJLjNoL4PAGmn7zjfn5ll.jpg', 'Dinas Pendidikan Surabaya', '2023-09-19 19:16:52', '2023-09-19 19:16:52'),
(3, 'mi6PONdxC9UMPAE9Wg33EWRx6lcu2oiyHbhhAbH9.png', 'Trenggalek', '2023-09-19 19:17:13', '2023-09-19 19:17:13'),
(4, 'nRwH86BcCUAxqbZisXWHM2uYr2tya8z0jzVPL33E.png', 'Gresik', '2023-09-19 19:17:23', '2023-09-19 19:17:23'),
(5, '2xTQgtw1i3zlof14Y0TlAfvgaeWgT9qbSLTUfbzx.png', 'Lombok Timur', '2023-09-19 19:17:37', '2023-09-19 19:17:37'),
(6, 'AqvWkHCGlTxC1X82FX3oNAaLm6C2vRHuzcseBZXN.jpg', 'Nias', '2023-09-19 19:17:48', '2023-09-19 19:17:48'),
(7, 'ADiApzk7EDZH6m36C6q3w2KcoHYbR95VxXTTonbf.png', 'Minahasa Tenggara', '2023-09-19 19:18:10', '2023-09-19 19:18:10'),
(8, 'KfpbdaGAyZa9z8LNflwsq9TivUD2TLC11SY1pjdJ.png', 'Tomonon', '2023-09-19 19:18:25', '2023-09-19 19:18:25'),
(9, 'qsXLuNLQBNerZr0Gr1uR3L4yhn8P5fSquCeVdKeC.png', 'Ogan Komering Ulu', '2023-09-19 19:18:48', '2023-09-19 19:18:48'),
(10, 'MmtUzTRwUcl4bKwdbxRWqxevB3eHvValN7W95D2P.png', 'PUPR', '2023-09-19 19:19:01', '2023-09-19 19:19:01'),
(11, '1D4aaLQqYGGn6UisGUQg4QTSdQ6XE3xqfCfdRWVP.png', 'Pertanian', '2023-09-19 19:19:13', '2023-09-19 19:19:13'),
(12, 'eE3KwH7io3BCVc2umzaosfmN1pFxa6GI23wRwnYL.png', 'Satya Adhi Wicaksana', '2023-09-19 19:19:32', '2023-09-19 19:19:32');

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
-- Table structure for table `katalogs`
--

CREATE TABLE `katalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `katalogs`
--

INSERT INTO `katalogs` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Pi6sSSyIBPxXY5KzLcgFm5tsVV5y1QlJ8qRKIiHP.jpg', 'Moco', 'Perangkat membaca buku digital menggunakan scan QR', '2023-09-19 18:42:01', '2023-09-19 18:50:09'),
(2, 'ThM40g2KHUzAbKPYqPHBg08jZZO1BlmqGwj0KeVK.jpg', 'Multimedia', 'Media Perangkat Elektronik, seperti Laptop/PC, Printer, DLL', '2023-09-19 18:59:44', '2023-09-19 18:59:44'),
(3, 'OqEUdk25vMldLA5ACCmhl0ngIs1lDNtO3TIR0GGu.jpg', 'Meubelair', 'Perabotan, Furnitur, atau Barang untuk mengisi dan mendekorasi ruangan', '2023-09-19 19:02:37', '2023-09-19 19:02:37'),
(4, 'RawG5jkzrZvkJeZKVQadAf50bN61wnlOKPH665lx.jpg', 'Alat Praktik', 'Alat Praktikum yang dapat digunakan sebagai Edukasi', '2023-09-19 19:03:58', '2023-09-19 19:03:58'),
(5, 'PjogJG0wsXFkR9maXVzfhpSvTtYcRHZzCgStLQAQ.jpg', 'APE', 'Alat Peraga Edukasi Luar dan Dalam', '2023-09-19 19:04:39', '2023-09-19 19:04:39'),
(6, '6iALTVvVUac6YUwHjHUVF4dAzTPjLsbAuTdh1KOg.jpg', 'Alat Kesehatan', 'Berbagai Alkes yang ada di Rumah Sakit', '2023-09-19 19:06:15', '2023-09-19 19:06:15'),
(7, 'qHUE5FahjtA4A6WdKRByK8uvkxTOQyylm2DtAqTT.jpg', 'Alat Tulis Kantor', 'Perlengkapan Alat Tulis yang biasa digunakan di Kantor', '2023-09-19 19:08:00', '2023-09-19 19:08:00'),
(8, 'Gf1tQwliXJmakoP2EbNRpr1iQ1qkLPgGXNy7E3K1.jpg', 'Pupuk Hens', 'Pupuk Organik Cair dengan TKDN 97,37%', '2023-09-19 19:09:22', '2023-09-19 19:13:54'),
(9, 'TPd0TQiSoVh2KX9Vq5KmI1gfD1lPtHgD8r57PGBu.png', 'Hibaflor Pupuk', 'Pupuk Majemuk NPK 15-15-15', '2023-09-19 19:10:56', '2023-09-19 19:10:56'),
(10, 'yCxFd4rNbDIhPzyWpkbyDP3AZCxM11GcwDRQgM38.jpg', 'Pupuk Grand Tomiks', 'Pupuk Organik Cair untuk merangsang pertumbuhan dan pembungaan', '2023-09-19 19:13:33', '2023-09-19 19:13:33'),
(11, 'LFnfTEGlgQD09Ijvh4YMctJgMMDPKWyZbr7q5z0g.jpg', 'Traktor', 'Mesin Traktor untuk mengolah lahan pertanian', '2023-09-19 19:15:14', '2023-09-19 19:15:31');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2023_08_23_025527_create_katalogs_table', 1),
(13, '2023_08_24_041923_create_tests_table', 1),
(14, '2023_08_25_063424_create_clients_table', 1),
(15, '2023_08_25_074416_create_brands_table', 1),
(16, '2023_08_28_024546_create_sliders_table', 1);

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'GFc0ytKYo6BB4cWlZ7lh5dVxtVMOxZuLnhTYauve.png', '2023-09-19 18:27:33', '2023-09-20 01:13:09'),
(2, 'u2PFm2n2qRXBOMHyxmfLzrmqmxakLS8vlepkcOWS.png', '2023-09-19 18:32:42', '2023-09-20 01:24:06'),
(3, 'kQ6mLDnGCdpCnm1CkxxeIyJehj9Ymjop5pGsZDiu.png', '2023-09-19 18:32:48', '2023-09-20 01:38:48'),
(4, 'GCOk0ftAf02OWXzcTXoAZBvWNjho7Eqvo3Fvn53P.png', '2023-09-19 18:32:55', '2023-09-20 02:13:35'),
(5, 'ZOje5kj4ZCSup0iXRkOf2p4uzMqMaH6T1vV5B2Fc.png', '2023-09-19 18:34:03', '2023-09-19 18:34:03'),
(6, 'ggnkdjEPgomtyu0QvyaiiAYAq9uQ5p6IeyxKqMF8.png', '2023-09-19 18:34:22', '2023-09-19 18:34:22'),
(7, 'heFECnIjhvwBigISarzDj2lt9xIqddC6CGq9C8m8.png', '2023-09-19 18:34:30', '2023-09-19 18:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'wUeRvwqCPJpADXYoiPBsJ3u0cCzuUvE1f2TbYZbF.png', '2023-09-19 18:25:16', '2023-09-19 18:28:16');

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
(1, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$WFiGgXxIQMCjoqlnlmb2/.joX0rrkX8KHbT3N9loWZyArZg7vWZu6', NULL, '2023-09-19 01:27:01', '2023-09-19 01:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `katalogs`
--
ALTER TABLE `katalogs`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalogs`
--
ALTER TABLE `katalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_dim\",\"table\":\"katalogs\"},{\"db\":\"db_dim\",\"table\":\"tests\"},{\"db\":\"db_dim\",\"table\":\"sliders\"},{\"db\":\"db_dim\",\"table\":\"brands\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-09-20 09:26:37', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
