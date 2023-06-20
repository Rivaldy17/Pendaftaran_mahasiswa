-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 12:49 PM
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
-- Database: `campus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `nama_c` varchar(200) NOT NULL,
  `email_c` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_c`, `email_c`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Rads Hio', 'raflyananda69@gmail.com', 'coba dong', 'coba doang', 1, '2023-06-18 07:12:21', '2023-06-18 07:12:21');

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
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(10) UNSIGNED NOT NULL,
  `kota` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `kota`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Tangerang', 'Banten', '2023-06-20 06:44:45', '2023-06-19 23:47:17'),
(2, 'Jakarta Pusat', 'Jakarta', '2023-06-20 06:45:05', '2023-06-19 23:47:08'),
(3, 'Bandung', 'Jawa Barat', '2023-06-20 06:45:20', '2023-06-20 06:45:20'),
(4, 'Bogor', 'Jawa Barat', '2023-06-20 06:45:38', '2023-06-20 06:45:38'),
(5, 'Cilegon', 'Banten', '2023-06-20 06:46:03', '2023-06-20 06:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jkl` varchar(5) NOT NULL,
  `tgl_laghir` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pdk_trkhr` varchar(30) NOT NULL,
  `id_lokasi_k` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `ktp` varchar(250) NOT NULL,
  `ijazah` varchar(250) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `verify_key` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `email`, `nama`, `jkl`, `tgl_laghir`, `agama`, `alamat`, `pdk_trkhr`, `id_lokasi_k`, `id_program`, `ktp`, `ijazah`, `role`, `status`, `password`, `verify_key`, `created_at`, `updated_at`, `form`) VALUES
(4, 'demo6@gmail.com', 'Rads Haisoss', 'L', '2002-10-01', 'Islam', 'Tangerang', 'SLTA', 2, 2, 'file_64900e28f3e9c.pdf', 'file_64900e28f3e9f.pdf', 1, 1, '$2y$10$cwWmWVywMb6BYA7Gp9mM6.mFWzpxEdCg2Gm2NrNOQwrjrirWfRJGu', 'Dy3wSNqBAvBAQrQqvVLkylDeJH5bTprbxXCRAgng4zUA8EeH3CoL13tYtpOGGQiKgEZpwC0yWMkSxigATSJhiTq9mW13ECbvne72', '2023-06-16 10:16:26', '2023-06-20 00:08:29', 1),
(8, 'campusaireg@gmail.com', 'campus A I', 'L', '0000-00-00', '', '', '', 2, 3, '', '', 669, 1, '$2y$10$Brjqv8dIbLpioeaVXnx44e5JhtdEyFQgmz581DxoNtF.irCu51vU2', 'li9oDbaZjLjUEAZDeGTg6Aa2b9RfnltmML3wu8p6BmMwE7dmfMcdCFXnifhwdViyEvny47zpxKFxTIUYsFX81HHtkcFXrdY5IiUg', '2023-06-18 23:12:35', '2023-06-19 22:12:02', 0);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_16_163620_create_mahasiswa_table', 1),
(6, '2023_06_17_145424_create_setting_table', 2),
(7, '2023_06_18_091529_create_contact_table', 3),
(8, '2023_06_18_154012_add_form_to_mahasiswa_table', 4),
(9, '2023_06_18_172542_create_studi_table', 5),
(10, '2023_06_18_172724_create_lokasi_table', 5),
(11, '2023_06_18_181803_add_provinsi_to_lokasi_table', 6),
(12, '2023_06_20_064322_add_time_to_lokasi_table', 7),
(13, '2023_06_20_072323_add_time_to_studi_table', 8);

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
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(10) UNSIGNED NOT NULL,
  `nama_cam` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `ig` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_cam`, `email`, `alamat`, `phone`, `ig`, `web`, `fb`, `created_at`, `updated_at`) VALUES
(1, 'Universitas A.I ', 'campusaireg@gmail.com', 'Jl. H. Benyamin Suaeb, Jakarta, Indonesia', 89999999, 'campusai', 'Campus Ai', 'CampusAi', '2023-06-17 15:05:42', '2023-06-16 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studi`
--

CREATE TABLE `studi` (
  `id_studi` int(10) UNSIGNED NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studi`
--

INSERT INTO `studi` (`id_studi`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Akuntansi', '2023-06-20 07:24:20', '2023-06-20 01:13:56'),
(2, 'Teknik Informatika', '2023-06-20 07:24:41', '2023-06-20 01:14:04'),
(3, 'Sistem Informasi', '2023-06-20 07:24:57', '2023-06-20 07:24:57'),
(4, 'Desain Komunikasi Visual', '2023-06-20 07:25:24', '2023-06-20 07:25:24'),
(5, 'Desain Produk', '2023-06-20 07:25:10', '2023-06-20 07:25:10'),
(6, 'Teknik Sipil', '2023-06-20 07:25:40', '2023-06-20 07:25:40'),
(7, 'Manajemen Bisnis', '2023-06-20 07:25:58', '2023-06-20 07:25:58'),
(8, 'Teknik Industri', '2023-06-20 07:26:15', '2023-06-20 07:26:15'),
(9, 'Teknik Lingkungan', '2023-06-20 07:26:32', '2023-06-20 07:26:32'),
(10, 'Ilmu Komunikasi', '2023-06-20 07:26:48', '2023-06-20 07:26:48'),
(11, 'Teknologi Pangan', '2023-06-20 07:27:02', '2023-06-20 07:27:02'),
(12, 'Ilmu Politik', '2023-06-20 07:27:14', '2023-06-20 07:27:14');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `studi`
--
ALTER TABLE `studi`
  ADD PRIMARY KEY (`id_studi`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studi`
--
ALTER TABLE `studi`
  MODIFY `id_studi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
