-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 04:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelabuhan_fw`
--

-- --------------------------------------------------------

--
-- Table structure for table `awak`
--

CREATE TABLE `awak` (
  `id_awak` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bagian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kapal` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `awak`
--

INSERT INTO `awak` (`id_awak`, `nama`, `umur`, `alamat`, `jenis_kelamin`, `bagian`, `id_kapal`, `created_at`, `updated_at`) VALUES
(1, 'Fajar Khairunman', 20, 'Jl. Pramuka 10', 'Laki - Laki', 'Mapping', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(10) UNSIGNED NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kapal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tujuan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `nama_kapal`, `jenis_kapal`, `id_tujuan`) VALUES
(1, 'Fery Indonesi', 'Fery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kapten`
--

CREATE TABLE `kapten` (
  `id_kapten` int(10) UNSIGNED NOT NULL,
  `nama_kapten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kapal` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kapten`
--

INSERT INTO `kapten` (`id_kapten`, `nama_kapten`, `jenis_kelamin`, `alamat`, `umur`, `id_kapal`, `created_at`, `updated_at`) VALUES
(1, 'Novreza', 'Laki - Laki', 'Jl. M.said Gang 21', '20', 1, '2017-05-10 16:00:00', '2017-05-25 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `pelayanan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `class`, `harga`, `pelayanan`) VALUES
(1, 'Ekonomi', 25000, 'Tempat'),
(2, 'Vip', 32000, 'Tempat + Konsumsi +Pelayanan Ekslusif');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_19_075729_table_pengguna', 1),
('2017_05_19_105301_pegawai', 1),
('2017_05_19_110040_tujuan', 1),
('2017_05_19_110056_kapal', 1),
('2017_05_19_110449_kapten', 1),
('2017_05_19_110504_awak', 1),
('2017_05_19_110924_kategori', 1),
('2017_05_19_110959_tiket', 1),
('2017_05_19_111144_penumpang', 1),
('2017_05_19_111558_relasi_tujuanpenumpangtiket', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pengguna` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `alamat`, `no_telpon`, `id_pengguna`, `created_at`, `updated_at`) VALUES
(1, 'Mahathir Muhammad', 'Laki - Laki', 'Jl. Pramuka 10', '085348652074', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `nama`, `golongan`, `alamat`, `no_telepon`, `umur`, `created_at`, `updated_at`) VALUES
(1, 'Aulia', 'Dewasa', 'Jl. Kapao Kelurahan Gn. Seteleng Kecamatan Penajam', '081347331395', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relasi_tpt`
--

CREATE TABLE `relasi_tpt` (
  `id_relasi` int(10) UNSIGNED NOT NULL,
  `id_tiket` int(10) UNSIGNED NOT NULL,
  `id_tujuan` int(10) UNSIGNED NOT NULL,
  `id_penumpang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `relasi_tpt`
--

INSERT INTO `relasi_tpt` (`id_relasi`, `id_tiket`, `id_tujuan`, `id_penumpang`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(10) UNSIGNED NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `tanggal_keberangkatan`, `jam_keberangkatan`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, '2017-05-04', '09:10:00', 1, NULL, NULL),
(2, '0000-00-00', '00:00:02', 2, '2017-05-19 20:54:14', '2017-05-19 20:54:14'),
(3, '0000-00-00', '00:00:02', 1, '2017-05-19 20:54:40', '2017-05-19 20:54:40'),
(4, '0000-00-00', '00:00:00', 1, '2017-05-19 20:56:05', '2017-05-19 20:56:05'),
(5, '0000-00-00', '00:00:00', 1, '2017-05-19 23:43:00', '2017-05-19 23:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(10) UNSIGNED NOT NULL,
  `nama_tujuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `nama_tujuan`, `created_at`, `updated_at`) VALUES
(1, 'Balikpapan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awak`
--
ALTER TABLE `awak`
  ADD PRIMARY KEY (`id_awak`),
  ADD KEY `awak_id_kapal_foreign` (`id_kapal`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`),
  ADD KEY `kapal_id_tujuan_foreign` (`id_tujuan`);

--
-- Indexes for table `kapten`
--
ALTER TABLE `kapten`
  ADD PRIMARY KEY (`id_kapten`),
  ADD KEY `kapten_id_kapal_foreign` (`id_kapal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `pegawai_id_pengguna_foreign` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `relasi_tpt`
--
ALTER TABLE `relasi_tpt`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `relasi_tpt_id_tiket_foreign` (`id_tiket`),
  ADD KEY `relasi_tpt_id_tujuan_foreign` (`id_tujuan`),
  ADD KEY `relasi_tpt_id_penumpang_foreign` (`id_penumpang`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `tiket_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

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
-- AUTO_INCREMENT for table `awak`
--
ALTER TABLE `awak`
  MODIFY `id_awak` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kapten`
--
ALTER TABLE `kapten`
  MODIFY `id_kapten` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `relasi_tpt`
--
ALTER TABLE `relasi_tpt`
  MODIFY `id_relasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `awak`
--
ALTER TABLE `awak`
  ADD CONSTRAINT `awak_id_kapal_foreign` FOREIGN KEY (`id_kapal`) REFERENCES `kapal` (`id_kapal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kapal`
--
ALTER TABLE `kapal`
  ADD CONSTRAINT `kapal_id_tujuan_foreign` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan` (`id_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kapten`
--
ALTER TABLE `kapten`
  ADD CONSTRAINT `kapten_id_kapal_foreign` FOREIGN KEY (`id_kapal`) REFERENCES `kapal` (`id_kapal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_id_pengguna_foreign` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `relasi_tpt`
--
ALTER TABLE `relasi_tpt`
  ADD CONSTRAINT `relasi_tpt_id_penumpang_foreign` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`),
  ADD CONSTRAINT `relasi_tpt_id_tiket_foreign` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`),
  ADD CONSTRAINT `relasi_tpt_id_tujuan_foreign` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan` (`id_tujuan`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
