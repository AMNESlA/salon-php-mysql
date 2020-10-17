-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 10:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` varchar(11) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `jk_cust` int(1) NOT NULL,
  `nohp_cust` int(15) NOT NULL,
  `alamat_cust` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `jk_cust`, `nohp_cust`, `alamat_cust`) VALUES
('10', 'asdfwqef', 0, 10, 'rfqwserg'),
('11', 'kang somay', 1, 11, 'pasar minggu'),
('12', 'asfcqwq', 1, 12, 'asrgfvqarg'),
('13', 'sdfcqW EF', 1, 13, 'FGQwrfcv'),
('2', 'sdaf', 1, 2, 'gqwefs'),
('3', 'sdfwe', 1, 3, 'qwqwef'),
('4', 'edfqwrgv', 1, 4, '3rASdfa'),
('5', 'asdfag', 0, 5, 'dgrgasdv'),
('56', 'sdf', 1, 1, 'sdsdsdf'),
('6', 'fagaeerg', 0, 6, 'fghbaesrg'),
('7', 'asdfgarg', 0, 7, 'asdfgawrgf'),
('8', 'stdgbhstdrh', 0, 8, 'sdfghbset'),
('9', 'sdfgsdhg', 0, 9, 'qae3rgaew3r');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_inv` varchar(11) NOT NULL,
  `id_cust` varchar(25) NOT NULL,
  `id_staff` varchar(25) NOT NULL,
  `id_treat` varchar(25) NOT NULL,
  `tgl_transaksi` varchar(255) NOT NULL,
  `tipe_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(15) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'jikri', 'jikri'),
(2, 'ega', 'ega'),
(3, 'farhan', 'farhan'),
(4, 'fadia', 'fadia');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(11) NOT NULL,
  `nama_staff` varchar(255) NOT NULL,
  `jk_staff` int(1) NOT NULL,
  `nohp_staff` int(15) NOT NULL,
  `alamat_staff` varchar(500) NOT NULL,
  `gaji_staff` int(20) NOT NULL,
  `jabatan_staff` int(1) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `jk_staff`, `nohp_staff`, `alamat_staff`, `gaji_staff`, `jabatan_staff`, `status`) VALUES
('1', 'jikri', 1, 911, 'bumi', 2000000000, 7, 'aktif'),
('2', 'alien', 1, 923123, 'venus', 897231442, 5, 'cuti'),
('3', 'ega', 0, 89560213, 'indonesia', 1324645784, 6, 'pulang kampung'),
('4', 'jon', 1, 923123, 'jauh', 134451215, 5, 'meninggal');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_treatment`
--

CREATE TABLE `tipe_treatment` (
  `id_tipetreat` varchar(11) NOT NULL,
  `nama_tipetreat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treat` varchar(11) NOT NULL,
  `id_tipetreat` varchar(11) NOT NULL,
  `nama_treat` varchar(255) NOT NULL,
  `harga_treat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_inv`),
  ADD KEY `id_cust` (`id_cust`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_treat` (`id_treat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tipe_treatment`
--
ALTER TABLE `tipe_treatment`
  ADD PRIMARY KEY (`id_tipetreat`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treat`) USING BTREE,
  ADD KEY `id_tipetreat` (`id_tipetreat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
