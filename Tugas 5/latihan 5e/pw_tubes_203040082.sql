-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 04:46 PM
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
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `pw_tubes_203040082`
--

CREATE TABLE `pw_tubes_203040082` (
  `no` int(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama barang` varchar(50) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pw_tubes_203040082`
--

INSERT INTO `pw_tubes_203040082` (`no`, `img`, `nama barang`, `detail`, `ukuran`, `warna`) VALUES
(1, '1.jpg', 'tay day tamanho', 'bahan ringan', 'm, s, l, xl', 'satu warna'),
(2, '2.jpg', 'tay day modelo', 'bahan katun, lengan pendek', 'm, s, l, xl', 'satu warna'),
(3, '3.jpg', 'tay day tamanho blusa', 'bahan ringan', 'm, s, l, xl', 'satu warna'),
(4, '4.jpg', 'tay day pink sky', 'bahan katun, lengan pendek', 'm, s, l, xl', 'satu warna'),
(5, '5.jpg', 'tay day masker', '-', '-', 'warna random'),
(6, '6.jpg', 'tay day black gold', 'bahan katun, lengan pendek, crop.', 'm, s, l, xl', 'satu warna'),
(7, '7.jpg', 'tay day black gold', 'bahan katun, lengan pendek, crop.', 'size jumbo', 'satu warna'),
(8, '8.jpg', 'tay day tamanho', 'bahan katun, lengan pendek', 'm, s, l, xl', 'galaksi black, galaksi white.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pw_tubes_203040082`
--
ALTER TABLE `pw_tubes_203040082`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_tubes_203040082`
--
ALTER TABLE `pw_tubes_203040082`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
