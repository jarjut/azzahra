-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 04:44 AM
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
  `jeniskelamin` tinyint(1) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE `bundle` (
  `id_bundle` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`id_bundle`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Azzahra Face Spa', 200000, NULL, NULL),
(2, 'Azzahra Spa Ice Cream', 250000, NULL, NULL),
(3, 'Azzahra Body Spa', 200000, NULL, NULL),
(4, 'Menicure Pedicure', 200000, NULL, NULL),
(5, 'Paket Almira', 250000, NULL, NULL),
(6, 'Paket Assadina', 350000, NULL, NULL),
(7, 'Paket Naura', 375000, NULL, NULL),
(8, 'Paket Azaria', 425000, NULL, NULL);

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
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Hair', NULL, NULL),
(2, 'Face', NULL, NULL),
(3, 'Hands and feet', NULL, NULL),
(4, 'Body', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin` tinyint(1) NOT NULL,
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

INSERT INTO `customers` (`id_customer`, `nama`, `email`, `jeniskelamin`, `nohp`, `alamat`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Fajrul Falah', 'fajar.falachudin@gmail.com', 1, '083830466935', 'Jl. Gununganyar Tengah 2A no. 4A', '$2y$10$MiBRwd8lcXsD.83wBODGkOO/MUZl4CqOCLrSRk.01U4S6kEAb22l.', 'OtszwpqX7akFOBjyuckeJD1efuBAJRtnXenfabR5NB7YgYWNy3pFcS95LEEO', '2017-07-01 06:26:17', '2017-07-01 06:26:17');

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
(20, '2017_07_02_081738_add_foreign_keys_to_pegawai_table', 0);

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
  `jeniskelamin` tinyint(1) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `kodeCabang`, `nama`, `nip`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `created_at`, `updated_at`) VALUES
(1, 'SBYT01', 'Novita Sari', '1234512345', 0, 'Surabaya', '1997-07-07', '2017-07-02 08:43:00', '2017-07-02 08:43:00'),
(2, 'SBYT01', 'Susi Susanti', '27471929491', 0, 'Surabaya', '1997-07-12', '2017-07-02 14:00:00', '2017-07-02 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_reservasi` int(11) DEFAULT NULL,
  `kode_voucher` char(10) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(250) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `id_category`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 1, 'Cuci - Gunting', 70000, NULL, NULL),
(2, 1, 'Creambath', 70000, NULL, NULL),
(3, 1, 'Hair Spa', 105000, NULL, NULL),
(4, 1, 'Hair Mask', 120000, NULL, NULL),
(5, 1, 'Hair Loss', 120000, NULL, NULL),
(6, 1, 'Anti Dandruff', 125000, NULL, NULL),
(7, 2, 'Make up', 250000, NULL, NULL),
(8, 2, 'Facial', 95000, NULL, NULL),
(9, 2, 'Masker Wajah', 75000, NULL, NULL),
(10, 2, 'Totok Wajah', 100000, NULL, NULL),
(11, 2, 'Setrika Wajah', 175000, NULL, NULL),
(12, 3, 'Pedicure', 125000, NULL, NULL),
(13, 3, 'Menicure', 115000, NULL, NULL),
(14, 3, 'Refleksi', 75000, NULL, NULL),
(15, 3, 'Massage', 55000, NULL, NULL),
(16, 3, 'Bleaching Kaki', 85000, NULL, NULL),
(17, 3, 'Bleaching Tangan', 85000, NULL, NULL),
(18, 4, 'Bleaching Full Body', 180000, NULL, NULL),
(19, 4, 'Lulur Spa', 200000, NULL, NULL),
(20, 4, 'Lulur Spa Ice Cream', 140000, NULL, NULL),
(21, 4, 'Masker Body', 170000, NULL, NULL),
(22, 4, 'Body Scrub', 75000, NULL, NULL),
(23, 4, 'Body Massage', 90000, NULL, NULL),
(24, 4, 'Body Steam', 60000, NULL, NULL),
(25, 4, 'Rendam Rempah', 75000, NULL, NULL),
(26, 4, 'Rendam Susu', 85000, NULL, NULL),
(27, 4, 'Ear Candle', 80000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `kode_voucher` char(10) NOT NULL,
  `discount` varchar(3) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD KEY `FK_Relationship_12` (`id_reservasi`),
  ADD KEY `FK_Relationship_13` (`kode_voucher`);

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
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`kode_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jamreservasi`
--
ALTER TABLE `jamreservasi`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `FK_Relationship_12` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasi` (`id_reservasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Relationship_13` FOREIGN KEY (`kode_voucher`) REFERENCES `voucher` (`kode_voucher`) ON DELETE CASCADE ON UPDATE CASCADE;

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
