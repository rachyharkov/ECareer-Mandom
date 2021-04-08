-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 06:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi1_payrol_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `absen_id` int(11) NOT NULL,
  `karyawan_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `alasan` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`absen_id`, `karyawan_id`, `status`, `alasan`, `photo`, `tanggal`, `jam_masuk`, `jam_pulang`) VALUES
(89, 115, 1, NULL, NULL, '2020-12-22', '15:56:40', '17:00:00'),
(90, 116, 1, NULL, NULL, '2020-12-23', '21:01:04', '17:00:00'),
(92, 115, 4, 'Cuti Tahunan karyawan', NULL, '2020-12-26', NULL, NULL),
(94, 115, 3, 'Sakit demam', 'item-201223-9b89d005e9.png', '2020-12-23', '21:48:09', NULL),
(96, 116, 1, NULL, NULL, '2020-12-24', '07:14:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `bahasa_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`bahasa_id`, `name`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris');

--
-- Triggers `bahasa`
--
DELIMITER $$
CREATE TRIGGER `del_kamus` AFTER DELETE ON `bahasa` FOR EACH ROW BEGIN
    DELETE FROM kamus
    WHERE bahasa_id = OLD.bahasa_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `nama_bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `nama_bank`) VALUES
(1, 'BANK BNI'),
(2, 'BANK BRI'),
(3, 'BANK MANDIRI'),
(4, 'BANK BCA'),
(5, 'BANK BJB'),
(6, 'BANK BTN'),
(7, 'BANK PERMATA');

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE `benefit` (
  `benefit_id` int(11) NOT NULL,
  `karyawan_id` int(11) NOT NULL,
  `categori_benefit_id` int(11) NOT NULL,
  `besar_benefit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`benefit_id`, `karyawan_id`, `categori_benefit_id`, `besar_benefit`) VALUES
(1, 115, 3, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `categori_benefit`
--

CREATE TABLE `categori_benefit` (
  `categori_benefit_id` int(11) NOT NULL,
  `nama_categori_benefit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categori_benefit`
--

INSERT INTO `categori_benefit` (`categori_benefit_id`, `nama_categori_benefit`) VALUES
(1, 'Jabatan'),
(2, 'Uang Makan'),
(3, 'Uang Transport');

-- --------------------------------------------------------

--
-- Table structure for table `categori_potongan`
--

CREATE TABLE `categori_potongan` (
  `categori_potongan_id` int(11) NOT NULL,
  `nama_categori_potongan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categori_potongan`
--

INSERT INTO `categori_potongan` (`categori_potongan_id`, `nama_categori_potongan`) VALUES
(1, 'BPJS Ketenaga Kerja'),
(2, 'BPJS Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `cuti_id` int(11) NOT NULL,
  `karyawan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`cuti_id`, `karyawan_id`, `tanggal`, `alasan`, `status`) VALUES
(36, 115, '2020-12-26', 'Cuti Tahunan karyawan', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `history_karyawan`
--

CREATE TABLE `history_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `user_agent` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_karyawan`
--

INSERT INTO `history_karyawan` (`id`, `nama`, `info`, `tanggal`, `user_agent`) VALUES
(888, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '04/12/2020 14:55:41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(889, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '04/12/2020 14:57:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:83.0) Gecko/20100101 Firefox/83.0'),
(890, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '04/12/2020 19:16:25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(891, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '05/12/2020 09:14:36', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(892, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '05/12/2020 10:10:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(893, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '05/12/2020 10:14:29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(894, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '05/12/2020 10:21:37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(895, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '06/12/2020 16:46:04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(896, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '07/12/2020 10:06:18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(897, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '08/12/2020 00:24:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(898, 'adminwad', 'adminwad Telah melakukan login', '08/12/2020 00:40:19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(899, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '08/12/2020 01:04:16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(900, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '08/12/2020 18:54:15', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(901, 'adminwad', 'adminwad Telah melakukan login', '08/12/2020 19:11:53', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(902, 'adminksp', 'adminksp Telah melakukan login', '08/12/2020 19:12:34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(903, 'adminwad', 'adminwad Telah melakukan login', '08/12/2020 19:22:20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(904, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '08/12/2020 19:41:41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(905, 'adminwad', 'adminwad Telah melakukan login', '08/12/2020 19:44:05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(906, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '08/12/2020 20:24:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(907, 'adminwad', 'adminwad Telah melakukan login', '08/12/2020 20:29:28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(908, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '09/12/2020 18:34:02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(909, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '09/12/2020 18:35:54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(910, 'adminwad', 'adminwad Telah melakukan login', '09/12/2020 18:36:08', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36'),
(911, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '10/12/2020 17:03:14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(912, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '10/12/2020 17:43:23', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(913, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '11/12/2020 19:11:25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(914, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '11/12/2020 20:25:48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(915, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '11/12/2020 20:26:26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(916, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 10:40:55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(917, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 11:58:51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(918, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 11:59:03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(919, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 19:24:27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(920, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:00:09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(921, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:11:51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(922, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:12:43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(923, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:13:50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(924, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:14:25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(925, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:38:36', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(926, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:39:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(927, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '13/12/2020 21:39:50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(928, 'ramdan', 'ramdan Telah melakukan login', '14/12/2020 01:22:10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(929, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '14/12/2020 01:24:28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(930, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '14/12/2020 11:02:17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(931, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '15/12/2020 13:48:50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(932, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '16/12/2020 12:35:13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(933, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 18:13:05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(934, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 19:04:24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(935, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 19:07:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(936, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 19:39:50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(937, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 19:40:43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(938, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 19:46:17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(939, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '20/12/2020 20:14:39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(940, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '21/12/2020 12:33:28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(941, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '21/12/2020 21:33:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(942, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '22/12/2020 15:56:23', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(943, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '23/12/2020 21:00:16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'),
(944, 'Admin Aplikasi', 'Admin Aplikasi Telah melakukan login', '24/12/2020 01:32:39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `nama_jabatan`) VALUES
(1, 'Admin'),
(2, 'Marketing'),
(3, 'Sales'),
(4, 'Direktur'),
(5, 'Staff IT'),
(6, 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `kamus`
--

CREATE TABLE `kamus` (
  `kamus_id` int(5) NOT NULL,
  `bahasa_id` int(3) DEFAULT NULL,
  `kode_kamus` int(3) DEFAULT NULL,
  `teks` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamus`
--

INSERT INTO `kamus` (`kamus_id`, `bahasa_id`, `kode_kamus`, `teks`) VALUES
(106, 1, 1, 'Selamat datang, Web Aplikasi CRUD MASTER'),
(107, 2, 1, ' Welcome, CRUD MASTER Web Application');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `karyawan_id` int(11) NOT NULL,
  `kd_karyawan` varchar(100) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `ktp` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jk_kelamin` varchar(50) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status_id` int(5) DEFAULT NULL,
  `phone_saudara` varchar(15) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`karyawan_id`, `kd_karyawan`, `name`, `ktp`, `alamat`, `phone`, `pendidikan`, `jk_kelamin`, `jabatan_id`, `tgl_masuk`, `status_id`, `phone_saudara`, `photo`, `password`, `bank_id`, `no_rek`) VALUES
(115, '2017310020', 'Anisa', '123456789', 'bekasi', '12345678', 'SMP', 'Laki Laki', 6, '2020-12-20', 1, '083874731480', NULL, '40cc8f68f52757aff1ad39a006bfbf11', 5, '123456789'),
(116, '2017310023', 'Muhammad Saeful Ramdan', '123456789', 'Bekasi', '083874731480', 'S2', 'Laki Laki', 5, '2020-12-20', 2, '083874731480', NULL, '889752dcb81b4ad98ad6e36e9db2cd43', 7, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `potongan`
--

CREATE TABLE `potongan` (
  `potongan_id` int(11) NOT NULL,
  `karyawan_id` int(11) NOT NULL,
  `categori_potongan_id` int(11) NOT NULL,
  `besar_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan`
--

INSERT INTO `potongan` (`potongan_id`, `karyawan_id`, `categori_potongan_id`, `besar_potongan`) VALUES
(1, 115, 2, 12000),
(2, 113, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `kelas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_karyawan`
--

CREATE TABLE `status_karyawan` (
  `status_karyawan_id` int(11) NOT NULL,
  `nama_status_karyawan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_karyawan`
--

INSERT INTO `status_karyawan` (`status_karyawan_id`, `nama_status_karyawan`) VALUES
(1, 'Karyawan Tetap'),
(2, 'Karyawan Kontrak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `level` int(1) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`, `email`) VALUES
(1, 'admin', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'Admin Aplikasi', 'Perumahan Sai Residance', 1, 'saepulramdan244@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_sub_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `user_sub_menu`) VALUES
(154, 1, 19),
(155, 1, 18),
(159, 1, 6),
(166, 1, 21),
(167, 1, 22),
(168, 1, 23),
(169, 1, 24),
(170, 1, 25),
(172, 1, 27),
(174, 1, 29),
(175, 1, 30),
(177, 1, 7),
(179, 1, 9),
(181, 2, 4),
(182, 2, 5),
(183, 2, 6),
(185, 2, 13),
(186, 2, 14),
(187, 2, 15),
(188, 2, 16),
(189, 2, 17),
(190, 2, 12),
(191, 2, 21),
(192, 2, 22),
(193, 2, 23),
(194, 2, 24),
(195, 2, 25),
(196, 2, 26),
(197, 2, 28),
(198, 2, 27),
(199, 2, 29),
(200, 2, 30),
(201, 2, 20),
(212, 1, 48),
(218, 1, 54),
(226, 2, 40),
(227, 2, 41),
(228, 2, 42),
(229, 2, 43),
(230, 2, 44),
(231, 2, 45),
(232, 2, 46),
(233, 2, 47),
(234, 2, 48),
(235, 2, 49),
(236, 2, 50),
(237, 2, 51),
(238, 2, 52),
(239, 2, 53),
(240, 2, 54),
(241, 2, 55),
(242, 2, 56),
(243, 2, 57),
(244, 2, 58),
(245, 2, 59),
(246, 2, 60),
(247, 2, 61),
(248, 1, 8),
(249, 1, 62),
(252, 6, 1),
(254, 1, 28),
(255, 1, 63),
(256, 1, 64),
(257, 1, 65),
(258, 1, 66),
(259, 1, 67),
(260, 1, 70),
(261, 1, 69),
(262, 1, 68),
(263, 1, 71),
(264, 1, 72),
(265, 1, 73),
(266, 1, 74),
(268, 1, 75),
(269, 8, 74),
(270, 8, 75),
(271, 8, 73),
(272, 1, 76);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`, `urutan`) VALUES
(1, 'Master Data', 'fa fa-list', 2),
(4, 'Pengaturan', 'fa fa-gears', 5),
(24, 'Absen', 'fa fa-circle-o', 3),
(25, 'Payroll', 'fa fa-circle-o', 4);

--
-- Triggers `user_menu`
--
DELIMITER $$
CREATE TRIGGER `des_sub_menu` AFTER DELETE ON `user_menu` FOR EACH ROW BEGIN
    DELETE FROM user_sub_menu
    WHERE menu_id = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin Aplikasi'),
(8, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(7, 4, 'Pengaturan User', 'User', 'fa fa-circle-o', 1),
(8, 4, 'History Login', 'History_karyawan', 'fa fa-circle-o', 1),
(9, 4, 'Backup', 'backup', 'fa fa-circle-o', 1),
(10, 5, 'Manu Parent', 'backup', 'fa fa-circle-o', 1),
(11, 5, 'Sub Menu', 'backup', 'fa fa-circle-o', 1),
(18, 4, 'Pengaturan Level', 'level', 'fa fa-circle-o', 1),
(19, 4, 'Pengaturan Menu', 'user_menu', 'fa fa-circle-o', 1),
(63, 4, 'Bahasa', 'bahasa', 'fa fa-circle-o', 1),
(65, 1, 'Status Karyawan', 'Status_karyawan', 'fa fa-circle-o', 1),
(66, 1, 'Data Bank', 'Bank', 'fa fa-circle-o', 1),
(67, 1, 'Data Jabatan', 'jabatan', 'fa fa-circle-o', 1),
(68, 1, 'Data Karyawan', 'karyawan', 'fa fa-circle-o', 1),
(69, 25, 'Kategori Benefit', 'Categori_benefit', 'fa fa-circle-o', 1),
(70, 25, 'Kategori Potongan', 'Categori_potongan', 'fa fa-circle-o', 1),
(71, 25, 'Potongan', 'Potongan', 'fa fa-circle-o', 1),
(72, 25, 'Benefit', 'Benefit', 'fa fa-circle-o', 1),
(73, 25, 'Salary', 'salary', 'fa fa-circle-o', 1),
(74, 24, 'List Absen', 'absen', 'fa fa-circle-o', 1),
(76, 24, 'Confirm Cuti', 'cuti', 'fa fa-circle-o', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_user_token` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`bahasa_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`benefit_id`);

--
-- Indexes for table `categori_benefit`
--
ALTER TABLE `categori_benefit`
  ADD PRIMARY KEY (`categori_benefit_id`);

--
-- Indexes for table `categori_potongan`
--
ALTER TABLE `categori_potongan`
  ADD PRIMARY KEY (`categori_potongan_id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`cuti_id`);

--
-- Indexes for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `kamus`
--
ALTER TABLE `kamus`
  ADD PRIMARY KEY (`kamus_id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`karyawan_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `bank_id` (`bank_id`),
  ADD KEY `jabatan_id` (`jabatan_id`);

--
-- Indexes for table `potongan`
--
ALTER TABLE `potongan`
  ADD PRIMARY KEY (`potongan_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_karyawan`
--
ALTER TABLE `status_karyawan`
  ADD PRIMARY KEY (`status_karyawan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_user_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `absen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `bahasa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
  MODIFY `benefit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categori_benefit`
--
ALTER TABLE `categori_benefit`
  MODIFY `categori_benefit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categori_potongan`
--
ALTER TABLE `categori_potongan`
  MODIFY `categori_potongan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `history_karyawan`
--
ALTER TABLE `history_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=945;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kamus`
--
ALTER TABLE `kamus`
  MODIFY `kamus_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `karyawan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `potongan`
--
ALTER TABLE `potongan`
  MODIFY `potongan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_karyawan`
--
ALTER TABLE `status_karyawan`
  MODIFY `status_karyawan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_user_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `user_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
