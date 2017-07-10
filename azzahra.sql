-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 08:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azzahra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `kodeCabang` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `kodeCabang`, `nama`, `nip`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SBYT01', 'Admin1', '1234567890', '$2y$10$vuix0c7BuiTgVReeAk6eJ.TzG3Izdg7XEMOxXOcIKFkioeY11tVve', 'YmspO2XS9hFTiIquHXWzLHn0tys7e9w9LtA6l0juH3e80JJF38ZqsPMvqQh1', '2017-07-07 02:02:42', '2017-07-07 02:02:42'),
(2, 'SBYT02', 'Admin Mulyos', '1234512345', '$2y$10$D9t6uoYVBbN9NQ0K5kA8IuvNLOgxmc49KMt6XEAMTP3VN.K6IInRy', 'AiqVPdIcOHgJvdvffMe2WvbxTNPzdsD83yDvFLu8OTejPNhCqXuHMwk4Or9k', '2017-07-09 08:40:01', '2017-07-09 08:40:01'),
(3, 'SBYT01', 'Admin Unair2', '1122334455', '$2y$10$nSEj0.GbzUFFtaZrBv08HuD1wuaJGp5EfJZkt7ruAbYigAMhfQp96', NULL, '2017-07-09 08:53:33', '2017-07-09 08:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE `bundle` (
  `id_bundle` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`id_bundle`, `nama`, `harga`) VALUES
(1, 'Azzahra Face Spa', 200000),
(2, 'Azzahra Spa Ice Cream', 250000),
(3, 'Azzahra Body Spa', 200000),
(4, 'Menicure Pedicure', 200000),
(5, 'Paket Almira', 250000),
(6, 'Paket Assadina', 350000),
(7, 'Paket Naura', 375000),
(8, 'Paket Azaria', 425000);

-- --------------------------------------------------------

--
-- Table structure for table `bundle_detail`
--

CREATE TABLE `bundle_detail` (
  `id_bundle` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle_detail`
--

INSERT INTO `bundle_detail` (`id_bundle`, `id_service`) VALUES
(1, 9),
(1, 10),
(1, 14),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 26),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(4, 12),
(4, 13),
(5, 10),
(5, 15),
(5, 19),
(5, 21),
(6, 2),
(6, 8),
(6, 12),
(6, 13),
(6, 19),
(7, 4),
(7, 8),
(7, 10),
(7, 13),
(7, 27),
(8, 3),
(8, 15),
(8, 18),
(8, 19),
(8, 21);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `kodeCabang` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`kodeCabang`, `nama`, `alamat`) VALUES
('SBYT01', 'Unair Kampus C', 'Jalan Mulyorejo, Kampus C, Unair Surabaya'),
('SBYT02', 'Mulyosari Selatan', 'Jl. Raya Mulyosari Ruko No.857, Mulyorejo, Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama`) VALUES
(1, 'Hair'),
(2, 'Face'),
(3, 'Hands and feet'),
(4, 'Body');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` char(14) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customer`, `nama`, `email`, `nohp`, `alamat`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Fajrul Falah', 'fajar.falachudin@gmail.com', '083830466935', 'Jl. Gununganyar Tengah 2A no. 4A', '$2y$10$MiBRwd8lcXsD.83wBODGkOO/MUZl4CqOCLrSRk.01U4S6kEAb22l.', 'u0hxxdPCIK7kqoM3s99NGojXQllbCOxbStaEBqXAfBCUAQPBaxXTLqpge7Y9', '2017-07-01 06:26:17', '2017-07-01 06:26:17'),
(2, 'Example', 'example@example.com', '08123456789', 'example', '$2y$10$g0dkVbYh2IM7S2GuK1lh3um4qQ0aXYC.XiCmpu0Bojv4pcMBJ8fIu', NULL, '2017-07-03 22:11:24', '2017-07-03 22:11:24'),
(3, 'example2', 'example2@example.com', '08123412345', 'example', '$2y$10$sHoBrqPeUwxsnBmYJUGider53Epmf3KFIJ8OcMGHUanRqXLnkBMDi', 'lL9ReMo7BNcoovyJEV9ztDKIMxwEL1SymHScPiLhyR3Bk1sUZrg4Kx2cDyvs', '2017-07-09 09:10:58', '2017-07-09 09:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `jamreservasi`
--

CREATE TABLE `jamreservasi` (
  `id_jam` int(11) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamreservasi`
--

INSERT INTO `jamreservasi` (`id_jam`, `start`, `end`) VALUES
(1, '10:00:00', '11:00:00'),
(2, '11:00:00', '12:00:00'),
(3, '12:00:00', '13:00:00'),
(4, '13:00:00', '14:00:00'),
(5, '14:00:00', '15:00:00'),
(6, '15:00:00', '16:00:00'),
(7, '16:00:00', '17:00:00'),
(8, '17:00:00', '18:00:00'),
(9, '18:00:00', '19:00:00'),
(10, '19:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id_master` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id_master`, `nama`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Master Admin 1', 'master1', '$2y$10$8Sl3k7cShjCsOyKYLrm4wOEJf8QJtFm2l1Iz.EkTUH4ukeom/Qtzy', 'YV2EGG6ltIYyllrVQD3GROOeYCzr4lNQgbWfqq7EfqaNHbdIYI3wyRP6CEsF', '2017-07-09 03:21:12', '2017-07-09 03:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_07_01_133124_create_admins_table', 0),
(2, '2017_07_01_133124_create_bundle_table', 0),
(3, '2017_07_01_133124_create_bundle_detail_table', 0),
(4, '2017_07_01_133124_create_cabang_table', 0),
(5, '2017_07_01_133124_create_category_table', 0),
(6, '2017_07_01_133124_create_customers_table', 0),
(7, '2017_07_01_133124_create_jamreservasi_table', 0),
(8, '2017_07_01_133124_create_pegawai_table', 0),
(9, '2017_07_01_133124_create_pembayaran_table', 0),
(10, '2017_07_01_133124_create_reservasi_table', 0),
(11, '2017_07_01_133124_create_service_table', 0),
(12, '2017_07_01_133124_create_voucher_table', 0),
(13, '2017_07_01_133127_add_foreign_keys_to_admins_table', 0),
(14, '2017_07_01_133127_add_foreign_keys_to_bundle_detail_table', 0),
(15, '2017_07_01_133127_add_foreign_keys_to_pembayaran_table', 0),
(16, '2017_07_01_133127_add_foreign_keys_to_reservasi_table', 0),
(17, '2017_07_01_133127_add_foreign_keys_to_service_table', 0),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2017_07_02_081737_create_pegawai_table', 0),
(20, '2017_07_02_081738_add_foreign_keys_to_pegawai_table', 0),
(21, '2017_07_01_133124_create_master_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `kodeCabang` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `kodeCabang`, `nama`, `nip`, `created_at`, `updated_at`) VALUES
(1, 'SBYT01', 'Novita Sari', '1234512345', '2017-07-02 08:43:00', '2017-07-02 08:43:00'),
(2, 'SBYT01', 'Susi Susanti', '27471929491', '2017-07-02 14:00:00', '2017-07-02 14:00:00'),
(3, 'SBYT02', 'Ririn', '8883746198', '2017-07-09 08:48:16', '2017-07-09 08:48:16'),
(4, 'SBYT02', 'Ovie Rohmawati', '7592018749', '2017-07-09 09:35:12', '2017-07-09 09:35:12'),
(5, 'SBYT01', 'Tuti', '75839285628', '2017-07-10 02:58:27', '2017-07-10 02:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `kodeCabang` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_bundle` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kodeCabang`, `nama`, `id_bundle`, `id_service`, `tanggal`, `status`) VALUES
(1, 'SBYT01', 'Ahmad Fajrul Falah', 2, NULL, '2017-07-10 15:28:48', 1),
(2, 'SBYT02', 'Ahmad Fajrul Falah', 3, NULL, '2017-07-10 15:27:24', 0),
(3, 'SBYT01', 'Risma', NULL, 2, '2017-07-10 15:48:34', 1),
(4, 'SBYT01', 'Astuti', NULL, 3, '2017-07-10 18:01:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_bundle` int(11) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `id_service` int(11) DEFAULT NULL,
  `kodeCabang` char(6) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_bundle`, `id_pegawai`, `id_jam`, `id_service`, `kodeCabang`, `id_customer`, `tanggal`, `status`) VALUES
(1, 2, 1, 3, NULL, 'SBYT01', 1, '2017-07-11', 1),
(2, 3, 3, 6, NULL, 'SBYT02', 1, '2017-07-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `id_category`, `nama`, `harga`) VALUES
(1, 1, 'Cuci - Gunting', 70000),
(2, 1, 'Creambath', 70000),
(3, 1, 'Hair Spa', 105000),
(4, 1, 'Hair Mask', 120000),
(5, 1, 'Hair Loss', 120000),
(6, 1, 'Anti Dandruff', 125000),
(7, 2, 'Make up', 250000),
(8, 2, 'Facial', 95000),
(9, 2, 'Masker Wajah', 75000),
(10, 2, 'Totok Wajah', 100000),
(11, 2, 'Setrika Wajah', 175000),
(12, 3, 'Pedicure', 125000),
(13, 3, 'Menicure', 115000),
(14, 3, 'Refleksi', 75000),
(15, 3, 'Massage', 55000),
(16, 3, 'Bleaching Kaki', 85000),
(17, 3, 'Bleaching Tangan', 85000),
(18, 4, 'Bleaching Full Body', 180000),
(19, 4, 'Lulur Spa', 200000),
(20, 4, 'Lulur Spa Ice Cream', 140000),
(21, 4, 'Masker Body', 170000),
(22, 4, 'Body Scrub', 75000),
(23, 4, 'Body Massage', 90000),
(24, 4, 'Body Steam', 60000),
(25, 4, 'Rendam Rempah', 75000),
(26, 4, 'Rendam Susu', 85000),
(27, 4, 'Ear Candle', 80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `FK_adminbekerja` (`kodeCabang`);

--
-- Indexes for table `bundle`
--
ALTER TABLE `bundle`
  ADD PRIMARY KEY (`id_bundle`);

--
-- Indexes for table `bundle_detail`
--
ALTER TABLE `bundle_detail`
  ADD PRIMARY KEY (`id_bundle`,`id_service`),
  ADD KEY `FK_isibundel_s` (`id_service`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`kodeCabang`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `jamreservasi`
--
ALTER TABLE `jamreservasi`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_master`),
  ADD UNIQUE KEY `master_username_unique` (`username`);

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `FK_bekerja` (`kodeCabang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `FK_Pembayaran_Bundle` (`id_bundle`),
  ADD KEY `FK_Pembayaran_Service` (`id_service`),
  ADD KEY `FK_Pembayaran_Cabang` (`kodeCabang`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `FK_melayani` (`id_pegawai`),
  ADD KEY `FK_mereservasi` (`id_customer`),
  ADD KEY `FK_reservasi_layanan` (`id_service`),
  ADD KEY `FK_reservasi_paket` (`id_bundle`),
  ADD KEY `FK_tempat` (`kodeCabang`),
  ADD KEY `FK_waktu` (`id_jam`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `FK_kategori_layanan` (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bundle`
--
ALTER TABLE `bundle`
  MODIFY `id_bundle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jamreservasi`
--
ALTER TABLE `jamreservasi`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id_master` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `FK_adminbekerja` FOREIGN KEY (`kodeCabang`) REFERENCES `cabang` (`kodeCabang`) ON UPDATE CASCADE;

--
-- Constraints for table `bundle_detail`
--
ALTER TABLE `bundle_detail`
  ADD CONSTRAINT `FK_isibundel` FOREIGN KEY (`id_bundle`) REFERENCES `bundle` (`id_bundle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_isibundel_s` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_bekerja` FOREIGN KEY (`kodeCabang`) REFERENCES `cabang` (`kodeCabang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_Pembayaran_Bundle` FOREIGN KEY (`id_bundle`) REFERENCES `bundle` (`id_bundle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Pembayaran_Cabang` FOREIGN KEY (`kodeCabang`) REFERENCES `cabang` (`kodeCabang`),
  ADD CONSTRAINT `FK_Pembayaran_Service` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `FK_melayani` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mereservasi` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_reservasi_layanan` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_reservasi_paket` FOREIGN KEY (`id_bundle`) REFERENCES `bundle` (`id_bundle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tempat` FOREIGN KEY (`kodeCabang`) REFERENCES `cabang` (`kodeCabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_waktu` FOREIGN KEY (`id_jam`) REFERENCES `jamreservasi` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_kategori_layanan` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
